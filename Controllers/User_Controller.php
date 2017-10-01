<?php 
	/**
	* 
	*/
	include('Models/User_Model');

	class User_Controller
	{
		$M_user=new User_Model();

		public function Register(){
				
			return true;
		}
		public function Login(){
			return true;
		}
		public function Logout(){
			return true;
		}
		public function Edit(){
			return true;
		}
		public function Delete(){
			return true;
		}
	}
 ?>