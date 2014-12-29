<?php
class lxm_reportController extends SugarController {

	

    public function action_test() {
        $this->view = "welcome";  //call for the view file in views dir
    }

	public function action_getquery1(){
		$db = DBManagerFactory::getInstance();
		$sql = "SELECT * FROM lxm1_lxm_residents where deleted=0";  
        $result = $db->query($sql);
		if($result === FALSE){
			die(mysql_error());
		}
		while($row = $db->fetchRow($result)){
			var_dump($row['first_name']);
		}
		
		/*$return_array = array();
		$column_fields = Array('id','first_name','last_name','persent_address','id_number');
		$residents = BeanFactory::getBean('lxm1_lxm_residents');
		$residents->list_fields = $column_fields;
		$output=$residents->get_full_list($order_by = "", $where = "", $check_dates=false, $show_deleted = 0);
		echo json_encode($output);
		return $output;*/
	}
}
?>