<?PHP
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN lxm1_lxm_residents
 */


class lxm1_lxm_residents_sugar extends Basic {
	var $new_schema = true;
	var $module_dir = 'lxm1_lxm_residents';
	var $object_name = 'lxm1_lxm_residents';
	var $table_name = 'lxm1_lxm_residents';
	var $importable = false;
	var $disable_row_level_security = true ; // to ensure that modules created and deployed under CE will continue to function under team security if the instance is upgraded to PRO
		var $id;
		var $name;
		var $date_entered;
		var $date_modified;
		var $modified_user_id;
		var $modified_by_name;
		var $created_by;
		var $created_by_name;
		var $description;
		var $deleted;
		var $created_by_link;
		var $modified_user_link;
		var $assigned_user_id;
		var $assigned_user_name;
		var $assigned_user_link;
		var $gender_c;
		var $marital_situation;
		var $residences_address;
		var $persent_address;
		var $work_unit;
		var $phone;
		var $personal_details;
		var $pocketbook;
		var $disease_situation;
		var $primary_issue;
		var $issue_type;
		var $event_place;
		var $start_date;
		var $aggressive_behavior;
		var $handle_unit;
		var $has_paper_advice;
		var $reply_time;
		var $has_litigation_process;
		var $has_hearing_process;
		var $has_leader_contacted;
		var $leader_name;
		var $leader_unit;
		var $leader_position;
		var $has_solution;
		var $handle_status;
		var $residents_situation;
		var $responsibility_unit;
		var $responsibility_people;
		var $responsibility_position;
		var $responsibility_phone;
		var $isdraft;
		var $birthday;
		var $belong_street;
		var $nationality;
		var $ethnic_groups;
		var $has_double_check_process;
		var $numbers_up;
		var $id_number;
		function lxm1_lxm_residents_sugar(){	
		parent::Basic();
	}
	
	function bean_implements($interface){
		switch($interface){
			case 'ACL': return true;
		}
		return false;
}
	/**
	 * need to override to have a name field created for this class
	 *
 	 * @see parent::retrieve()
 	 */
    public function retrieve($id = -1, $encode=true, $deleted=true) {
		$ret_val = parent::retrieve($id, $encode, $deleted);
		$this->_create_proper_name_field();
		return $ret_val;
	}
	/**
     * This function helps generate the name and full_name member field variables from the salutation, title, first_name and last_name fields.
     * It takes into account the locale format settings as well as ACL settings if supported.
	 */
	public function _create_proper_name_field()
	{
		global $locale, $app_list_strings;

        $first_name = ""; $last_name = ""; 

           // first name has at least read access
           $first_name = $this->first_name;

            // last name has at least read access
            $last_name = $this->last_name;

        // Corner Case:
        // Both first name and last name cannot be empty, at least one must be shown
	$full_name = $locale->getLocaleFormattedName($first_name, $last_name);

		$this->full_name = $full_name; //used by campaigns
	}
	/**
 	 * @see parent::get_list_view_data()
 	 */
	public function get_list_view_data() 
	{
		global $system_config;
		global $current_user;

		$this->_create_proper_name_field();
		$temp_array = $this->get_list_view_array();

        $temp_array["FULL_NAME"] = $this->full_name;

		return $temp_array;
	}
        	/**
 	 * @see parent::save()
 	 */
	public function save($check_notify=false) 
	{
                $this->_create_proper_name_field();
                $this->name = $this->full_name;
        parent::save($check_notify);
		return $this->id;
	}
		
}
?>
