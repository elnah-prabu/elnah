<?php
class Hello_Model extends CI_Model 
{
	function saverecords($name,$email,$mobile)
	{
	$query="insert into users values('1','$name','$email','$mobile')";
	$this->db->query($query);
	}
}