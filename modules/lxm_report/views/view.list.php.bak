<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.list.php');
class lxm_reportViewList extends ViewList
{
	var $lxm_report_warning;
	var $company_logo_path;
	var $conpany_tagline;
	
	function lxm_reportViewList(){
		parent::ViewList();
	}

	function preDisplay() {
		//$this->lxm_report_warning = 'Our Contacts database is not for personal. Please do not use it for things not strictly related to company business. You know who you are!';
		//$this->company_logo_path = SugarThemeRegistry::current()->getImage('company_logo','align="absmiddle" alt="Schedule Call" border="0"');
		//$this->company_tagline = 'Serving the biggest and brightest stars in Hollywood!';
		//parent::preDisplay();

		$this->dv->tpl = 'modules/lxm_report/tpls/ListView.tpl';
		//$metadataFile = $this->getMetaDataFile();  
        //$this->ev = $this->getListView();  
        //$this->ev->ss = $this->ss;  
        //$this->ev->setup($this->module, $this->bean, $metadataFile, get_custom_file_if_exists('modules/lxm_report/tpls/ListView.tpl'));
	}

	function display() {
		//echo '<div align="center" style="font-color: red">'.$this->lxm_report_warning.'</div>';
		//display BEFORE the view should be go ABOVE this line
		//parent::display();
		//display AFTER the view should go BELOW this line
		//echo '<div align="center">'.$this->company_logo_path.'<br/>'.$this->company_tagline.'</a></div>';

         $smarty = new Sugar_Smarty();
         //parent::display();
		 $smarty->assign("welcome","welcome");
		 $smarty->display($this->dv->tpl);
	}
}
?>
