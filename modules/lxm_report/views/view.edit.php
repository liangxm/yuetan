<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.edit.php');
// 此处必须是模块名称+ViewEdit，我在这个名称上面折腾了1个多小时才发现此问题
class lxm_reportViewEdit extends ViewEdit
{
 	public function __construct()
 	{
 		parent::ViewEdit();
 	}
	
	public function preDisplay()
    {		
        // 此处指向用于展示的tpl文件
        $metadataFile = $this->getMetaDataFile();
        $this->ev = $this->getEditView();
        $this->ev->ss =& $this->ss;
        $this->ev->setup($this->module, $this->bean, $metadataFile, get_custom_file_if_exists('modules/lxm_report/tpls/EditView.tpl'));
    }
	
	public function display(){	
		parent::display();
	}

}