<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct() 	
	{	
		// Appel le constructeur du modèle 
		parent::__construct();;
	
	}

		 // Obtenir le nom d'utilisateur et mot de passe de tbl_usrs 
     function get_user($usr, $pwd)
     {
          /*$sql= "	select * 
          			from tbl_usrs 
          			where var_username = " . $usr . " and var_password = " . md5($pwd) . " and var_status = 'active'";
          

		  //----------------------------------------------------------------------
          //Test de l'utilisation des méthodes de type model. Pas un franc succès.
		  //----------------------------------------------------------------------

          	$sql= $this->db->select('var_username,var_password')
          				   ->from('tbl_usrs')
          				   ->where('var_username', $usr);
          $query = $this->db->query($sql);
          return $query->num_rows();
     	  */
     }
}
?>
