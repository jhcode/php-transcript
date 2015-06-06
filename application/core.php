<?php
/**
* @since 12/11/2014
* @author Joseph Rex (http://josephrex.me/)
*/
// Core program functions
function site_url(){
	global $site;
	return $site['url'];
}
function url(){
	return site_url().'/index.php';
}
function core_stylesheet(){
	return site_url().'/application/stylesheet.css';
}
function ref_doc(){
	return site_url().'/application/documentation.php';
}
function redirect($url){
	header('Location:'.$url);
}
function dd($data){
	var_dump($data);
	die();
}

/**
* Wrappers
*/
// HTML Wrapper
class HTML{
	/**
	* Loads CSS files
	* @param stylesheet => stylesheet file to be called
	* @param attr => extra attributes as an array
	* @return CSS link tag
	*/
	public static function stylesheet($stylesheet, $attr = false){
		if(!$attr):
			return '<link rel="stylesheet" href="'.site_url().'/assets/css/'.$stylesheet.'">';
		else:
			return '<link rel="stylesheet" href="'.site_url().'/assets/css/'.$stylesheet.'" id="colors">';
		endif;
	}
	/**
	* Load Javascript
	* @param script => Javascript file
	* @return script element with file as src
	*/
	public static function script($script){
		return '<script src="'.site_url().'/assets/js/'.$script.'"></script>';
	}
	/**
	*
	*/
	public static function image($image, $alt="", $class = false){
		return '<img src="'.site_url().'/assets/images/'.$image.'" alt="'.$alt.'" class="'.$class.'">';
	}
	public static function asset($path){
		return site_url().'/assets/'.$path;
	}

}

// Password Hashing with Blowfish
class Blowfish{
	/**
	* Takes raw string and convert to blowfish hash
	* @param string
	*/
	public static function encrypt($string){
		return password_hash($string, PASSWORD_BCRYPT);
	}
	public static function verify($username, $password){
		global $conn;
		try {
			$bind = [':email' => $username];
			$query = 'SELECT id, email, usertype, password FROM users WHERE email = :email';
			$result_set = $conn->prepare($query);
			$result_set->execute($bind);
			if($result_set->rowCount() == 1):
				foreach ($result_set as $found) {
					if ( crypt($password, $found['password']) == $found['password'] ) {
						Session::put('id', $found['id']);
						Session::put('usertype', $found['usertype']);
						return $found['usertype'];
					}else{
						return false;
					}
				}
			else:
				return false;
			endif;	
		} catch (PDOException $e) {
			$__e = "Database query error";
			$errors = $e->getMessage();
			require_once BASE_DIR.'/application/errors.php';
			die();
		}
	}
}

// Session Wrapper
class Session{
	/**
	* Stores values to $_SESSION super global
	* @param var    string   the session key
	* @param value  mixed 	  the session value
	*/
	public static function put($var, $value){
		$_SESSION[$var] = $value;
	}
	public static function get($var){
		return $_SESSION[$var];
	}
	public static function pluck($var){
		$value = $_SESSION[$var];
		unset($_SESSION[$var]);
		return $value;
	}
	public static function has($var){
		if( isset($_SESSION[$var]) ){
			return true;
		}else{
			return false;
		}
	}
	public static function flush(){
		$_SESSION = [];
	}
	public static function forget($var){
		unset($_SESSION[$var]);
	}
}

// Database Wrapper
class DB{
	public static function get($table){
		global $conn;
		$query = 'SELECT * FROM '.$table;
		$stmt = $conn->prepare($query);
		$stmt->execute();
		$object = new stdClass();
		foreach ($stmt->fetchAll() as $key => $value) {
			$object->$key = $value;
		}
		return $object;
	}
	public static function pluck($table, $item, array $wheres = array()){
		global $conn;
		$query = 'SELECT '.$item.' FROM '.$table.' WHERE ';
		$columns = implode(',', array_keys($wheres));
		$values = implode(',', $wheres);
		$insertWhere = '';
		foreach($wheres as $column => $value){
			if(count($wheres) === 1):
				$insertWhere .= $column." = ?";
			else:
				$insertWhere .= $column." = ? AND ";
			endif;
		}
		$query .= $insertWhere.' LIMIT 1';
		$bind = explode(',',$values);
		$result_set = $conn->prepare($query);
		$result_set->execute($bind);
		foreach ($result_set as $key => $value) {
			$return = $value[$item];
		}
		return $return;
	}
	/**
	* Inserting Items into the database
	*@param table string Table name
	*@param array array  Array of fields
	*/
	public static function insert($table, array $array){
		global $conn;
		$fields = implode(',', array_keys($array));
		$values = implode(',',$array);
		$query = 'INSERT INTO '.$table.'('.$fields.') VALUES ('.preg_replace('/[^,]+/', '?', $values).')';
		$result_set = $conn->prepare($query);
		$result_set->execute(explode(',',$values));
	}

	/**
	* Select items from database
	* @param  $table       string   Table where item is fetched from
	* @param  $fields      array    Array of fields to select
	* @param  $wheres      array    Hashtable of WHEREs
	* @return $result_set  object   PDO Object
	*/
	public static function select($table, array $fields = array(), array $wheres = array(), $return = false){
		global $conn;
		$insertFields = empty($fields) ? '*' : implode(',',$fields);
		if(empty($wheres)):
			$query = 'SELECT '.$insertFields.' FROM '.$table;
		else:
			$columns = implode(',', array_keys($wheres));
			$values = implode(',', $wheres);
			$insertWhere = '';
			foreach($wheres as $column => $value){
				if(count($wheres) === 1):
					$insertWhere .= $column." = ?";
				else:
					$insertWhere .= $column." = ? AND ";
				endif;
			}
			$query = 'SELECT '.$insertFields.' FROM '.$table.' WHERE '.$insertWhere;
			if(substr($query, -4) === 'AND '):
				$query = substr($query, 0, -4);
			endif;
			$bind = explode(',', $values);
		endif;
		$result_set = $conn->prepare($query);
		if(isset($bind)):
			$result_set->execute($bind);
		else:
			$result_set->execute();
		endif;
		if($return === true):
			foreach($result_set as $found){
				$returnData = $found;
			}
			return $returnData;
		else:
			return $result_set;
		endif;
	}
	/**
	* @param  $table        string   Table to be updated
	* @param  $fields       array    Hashtable of columns and values to update
	* @param  $primary_key  integer  PRIMARY KEY id of user
	*/
	public static function update($table, array $fields, $primary_key = false){
		global $conn;
		$values = implode(',', $fields);
		$query = 'UPDATE '.$table.' SET ';
		foreach ($fields as $key => $value) {
			$query .= $key." = ?,";
		}
		if(substr($query, -1) === ','):
			$query = substr($query, 0, -1);
		endif;
		$bind = explode(',', $values);
		if($primary_key):
			$query .= ' WHERE id = '.$primary_key;
		endif;
		$result_set = $conn->prepare($query);
		$result_set->execute($bind);
	}
	/*
	*
	*
	*/
	public static function delete($table, $id){
		global $conn;
		$query = 'DELETE FROM '.$table.' WHERE id = ?';
		$result_set = $conn->prepare($query);
		$result_set->execute([$id]);
	}
}

// Input fetcher wrapper
class Input{
	public static function get($item){
		return $_POST[$item];
	}
	public static function all(){
		return $_POST;
	}
}


/**
* Extended helpers function
*/
require BASE_DIR.'/helpers.php';
