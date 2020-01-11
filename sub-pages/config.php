<?php
	class dbconn{
		public function connection(){
			global $conn;
			$conn = new mysqli("localhost","root","1234","db_ums");
			return $conn;
		}
	}
?>