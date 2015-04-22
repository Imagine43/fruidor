<?php

/**
* Création du model contact
*/
class contact_model extends model
{
	
	function add($data)
	{
		# code
		$this->db->insert->('contact',$data);
		return;
	}
}

?>