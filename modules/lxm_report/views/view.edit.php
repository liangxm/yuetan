<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.edit.php');
// �˴�������ģ������+ViewEdit�����������������������1����Сʱ�ŷ��ִ�����
class lxm_reportViewEdit extends ViewEdit
{
 	public function __construct()
 	{
 		parent::ViewEdit();
 	}
	
	public function preDisplay()
    {		
        // �˴�ָ������չʾ��tpl�ļ�
        $metadataFile = $this->getMetaDataFile();
        $this->ev = $this->getEditView();
        $this->ev->ss =& $this->ss;
        $this->ev->setup($this->module, $this->bean, $metadataFile, get_custom_file_if_exists('modules/lxm_report/tpls/EditView.tpl'));
    }
	
	public function display(){	
		parent::display();
	}

}