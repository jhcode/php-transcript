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
			$email = Input::get('username');
			$password = Input::get('password');
			$verification = Blowfish::verify( $email, $password );
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
		$users = DB::get('users');
		$fetch = DB::select('users',['name','email','usertype','gender'],['id' => $this->user]);
		foreach($fetch as $found){
			$name = $found['name'];
			$email = $found['email'];
			$usertype = $found['usertype'];
			$gender = $found['gender'];
		}
		if( count( explode(' ', $name) ) > 1 ){
			list($firstname, $lastname) = explode(' ', $name);
		}else{
			$firstname = $name;
			$lastname = '';
		}
		$data = [
		'users' 		=> $users,
		'firstname'      	=> $firstname,
		'lastname' 		=> $lastname,
		'email'			=> $email,
		'usertype'		=> $usertype,
		'gender'		=> $gender,
		'usertypes'		=> ['admin','pharmacist','pediatrist','patient','ministry']
		];
		return $data;
	}
	public function pediatrist(){
		$fetch = DB::select('users', [], ['id'=>$this->user],true);
		$patients = DB::get('patients');
		$drugs = DB::get('drugs');
		$diseases = DB::get('diseases');
		$prescriptions = DB::get('rx');
		if( count( explode(' ', $fetch['name']) ) > 1 ){
			list($firstname, $lastname) = explode(' ', $fetch['name']);
		}else{
			$firstname = $fetch['name'];
			$lastname = '';
		}
		$data = [
		'userdata' 		=> $fetch,
		'patients' 		=> $patients,
		'firstname'		=> $firstname,
		'lastname' 		=> $lastname,
		'prescriptions'	=> $prescriptions,
		'drugs'			=> $drugs,
		'diseases'		=> $diseases,
		'usertypes'		=> ['admin','pharmacist','pediatrist','patient','ministry']
		];
		return $data;
	}
	public function pharmacist(){
		$fetch = DB::select('users', [], ['id'=>$this->user],true);
		if( count( explode(' ', $fetch['name']) ) > 1 ){
			list($firstname, $lastname) = explode(' ', $fetch['name']);
		}else{
			$firstname = $fetch['name'];
			$lastname = '';
		}
		$data = [
		'drugs'			=> DB::get('drugs'),
		'firstname'		=> $firstname,
		'lastname' 		=> $lastname,
		'diseases'		=> DB::get('diseases'),
		'userdata'		=> $fetch,
		'usertypes'		=> ['admin','pharmacist','pediatrist','patient','ministry'],
		];
		return $data;
	}
	public function patient(){
		$fetch = DB::select('users', [], ['id'=>$this->user],true);
		if( count( explode(' ', $fetch['name']) ) > 1 ){
			list($firstname, $lastname) = explode(' ', $fetch['name']);
		}else{
			$firstname = $fetch['name'];
			$lastname = '';
		}
		$data = [
		'userdata' 		=> $fetch,
		'firstname'		=> $firstname,
		'lastname' 		=> $lastname,
		'prescriptions'	=> DB::select('rx', [], ['patient_id'=>$this->user])
		];
		return $data;
	}
	public function ministry(){
		$fetch = DB::select('users', [], ['id'=>$this->user],true);
		if( count( explode(' ', $fetch['name']) ) > 1 ){
			list($firstname, $lastname) = explode(' ', $fetch['name']);
		}else{
			$firstname = $fetch['name'];
			$lastname = '';
		}
		$data = [
		'userdata' 		=> $fetch,
		'firstname'		=> $firstname,
		'lastname' 		=> $lastname,
		'prescriptions'	=> DB::get('rx')
		];
		return $data;
	}
	public function drugadd(){
		$input = [
		'name'					=> Input::get('drug_name'),
		'manufacturer'			=> Input::get('manufacturer'),
		'legal_class'			=> Input::get('legal_class'),
		'pharmacological_class'	=> Input::get('ph_class'),
		'indications'			=> Input::get('indications'),
		'children'				=> Input::get('children'),
		'contraindications'		=> Input::get('contraindications'),
		'precautions'			=> Input::get('precautions'),
		'interactions'			=> Input::get('interactions'),
		'adverse_reactions'		=> Input::get('adverse_rxn'),
		'how_supplied'			=> Input::get('how_supplied')
		];
		DB::insert('drugs', $input);
		echo 'Drug added';
	}
	public function diseaseadd(){
		$input = ['name'=>Input::get('disease_name'), 'treatment'=>Input::get('treatment')];
		DB::insert('diseases',$input);
		echo "Disease added";
	}
	public function drugdel(){
		DB::delete('drugs',Input::get('id'));
	}
	public function diseasedel(){
		DB::delete('diseases',Input::get('id'));
	}
	public function adduser(){
		$name = Input::get('fname').' '.Input::get('lname');
		$email = Input::get('email');
		$usertype = Input::get('usertype');
		$gender = Input::get('gender') == '' ? '': Input::get('gender');
		$password = Blowfish::encrypt( Input::get('password') );
		$fetch = DB::select('users',['email'], ['email'=>$email]);
		if($fetch->rowCount() == 1){
			echo "User already exists";
		}else{
			$input = ['name' => $name, 'email' => $email, 'usertype' => $usertype, 'gender' => $gender, 'password' => $password];
			DB::insert('users', $input);
			echo "User has been Added";
		}
	}
	public function deleteuser(){
		$id = Input::get('id');
		DB::delete('users',$id);
		echo "User Deleted";
	}
	public function pushprescription(){
		$input = [
		'disease_id'	=> Input::get('disease'),
		'drug_id'		=> Input::get('drug'),
		'quantity'		=> Input::get('quantity').' '.Input::get('units'),
		'dosage'		=> Input::get('dosage'),
		'prescriber_id'	=> $this->user,
		'patient_id'	=> Input::get('patient_id'),
		'date_created'	=> date('Y-m-d H:i:s')
		];
		DB::insert('rx', $input);
		echo "Prescription recorded successfully";
	}
	public function editadmin(){
		$name = Input::get('fname').' '.Input::get('lname');
		$email = Input::get('email');
		$usertype = Input::get('usertype');
		$gender = Input::get('gender') == '' ? '': Input::get('gender');
		$password = Input::get('password');
		DB::update('users',['name' => $name,'email' => $email, 'usertype' => $usertype, 'gender' => $gender], $this->user);
		if( !empty($password) ):
			$password = Blowfish::encrypt( $password );
			DB::update('users',['password' => $password], $this->user);
		endif;
		echo "Record updated";
	}
	public function edituser(){
		$id = Input::get('userId');
		$name = Input::get('name');
		$email = Input::get('email');
		$usertype = Input::get('usertype');
		$gender = Input::get('gender');
		DB::update('users',['name' => $name, 'email' => $email, 'usertype' => $usertype, 'gender' => $gender], $id);
		echo $name."'s data has been updated!";
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
