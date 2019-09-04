<?php
class Admin_models extends CI_Model {
	public function input($name, $mobile, $date, $email, $pass, $cpass)
	{
		$query = "INSERT INTO admin VALUES('','$name', '$mobile', '$date', '$email', '$pass', '$cpass')";
		$this->db->query($query);
	}
	public function show($user, $pass)
	{
		$query = "SELECT * FROM admin WHERE `email` = '$user' AND `password` = '$pass'";
		$q = $this->db->query($query);
		if($q->num_rows() ){
			return $q->result_array();
		}else{
			return false;
		}
	}

	public function events()
	{
		/*$timeOfpast20days = mktime(0, 0, 0, date("m")  , date("d")+20, date("Y"));
    	$dateOfpast20days = date("Y-m-d" , $timeOfpast20days);
		$query = "SELECT * FROM admin WHERE dob < '$dateOfpast20days'";*/
		$query = "SELECT * 
FROM  admin 
WHERE  DATE_ADD(dob, 
                INTERVAL YEAR(CURDATE())-YEAR(dob)
                         + IF(DAYOFYEAR(CURDATE()) > DAYOFYEAR(dob),1,0)
                YEAR)  
            BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 1 MONTH)";
		$q = $this->db->query($query);
		return $q->result_array();
	}
};