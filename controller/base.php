<?php
class BaseController{
	private $db;
	private $user;
	public function __construct(){
		global $conn;
		$this->db = $conn;
		$this->user = Session::has('id') ? Session::get('id') : 0;

	}
	public function start(){
		require 'application/route_engine.php';
		// Close the database connection
		$this->db = null;
	}
  public function apply(){
   $input = [
    'student_name'  => Input::get('name'),
    'student_email' => Input::get('email'),
    'student_phone' => Input::get('phone'),
    'campus_id'     => Input::get('campus_id')
   ];
   $insert = DB::insert('transcripts', $input);
   echo "Transcript request succesfully submitted and will be processed shortly";
  }

	public function auth(){
		$conn = $this->db;
		$source = Input::get('source');
		if($source === 'login'):
			$username = Input::get('user');
			$password = Input::get('password');
			$verification = Blowfish::verify( $username, $password );
			if($verification === false):
				echo "Wrong username/password combination";
			else:
				echo $verification;
			endif;
		elseif($source === 'register'):
			/* Storing super globals to local variables */
			$email = Input::get('emailsignup');
			$password = Input::get('passwordsignup');
			$confirm = Input::get('passwordsignup_confirm');
			if ($password !== $confirm) {
				echo "Passwords are not the same";
			}else{
				/* Hashing the password */
				$hashed_password = Blowfish::encrypt($password);

				/* Validation */
				$checkquery = "SELECT * FROM users WHERE email = :email";
				$check = $conn->prepare($checkquery);
				$check->execute([':email' => $email]);
				if ($check->rowCount() == 1) {
					echo "User already exists";
				}else{
					/* Binded query for PDO */
					$bind = 
					[':email' => $email, ':usertype' => 'patient', ':joined' => date('Y-m-d H:i:s'), ':password' => $hashed_password];
					$query = 'INSERT INTO users (email, usertype, joined, password) VALUES (:email, :usertype, :joined, :password)';
					$result_set = $conn->prepare($query);
					$result_set->execute($bind);
					echo "Successfully Registered! You can now log in";
				}
			}
		endif;
	}
	/**
	* Page bonded method for /admin route
	*
	*/
	public function admin(){
		$transcripts = DB::get('transcripts');
		$data = [
		'transcripts' 		=> $transcripts
		];
		return $data;
	}
	public function logout(){

		//Unset the session variables
		Session::flush();

		// Destroy the session cookie
		if(isset($_COOKIE[session_name()])){
			setcookie(session_name(), '', time()-4200, '/');
		}

		// Destroy the session
		session_destroy();

		redirect(site_url());
	}
}
