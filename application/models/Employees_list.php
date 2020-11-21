<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Employees_list extends CI_Model {
                        
public function insert_employee($employees_data){
     $this->db->insert('employees', $employees_data);                
                                
}
                        
                            
                        
}
                        
/* End of file Employees_list.php */
    
                        