<?php
$layout_defs['lxm1_lxm_residents1'] = array(
 'subpanel_setup'   => array(
	//BUILDER:END of subpanels

	'lxm1_lxm_residents1' => array(                     //必须小写
		'order' => 25,    
		'module' => 'lxm1_lxm_conversation',              //子表模块名
		'subpanel_name' => 'default',   
		'get_subpanel_data' => 'lxm1_lxm_conversation',   //子表模块名
		'add_subpanel_data' => 'lxm1_lxm_residents1',   //父表模块名
		'title_key' => 'LBL_MODULE_NAME',           //subpanel的标题
		'top_buttons' => array(  array('widget_class' => 'SubPanelTopCreateButton')           
		),
	 ),
	 
	'ser_rights' => array(
		'order' => 26,                                  //布局  多个SubPanel时显示的顺序
		'module' => 'ser_Rights',
		'subpanel_name' => 'default',
		'get_subpanel_data' => 'ser_Rights',
		'add_subpanel_data' => 'ser_right_id',
		'title_key' => 'LBL_SER_RIGHTS_SUBPANEL_TITLE',//subpanel的标题 在父模块的 \language\zh_cn.lang.php 增加 'LBL_SER_RIGHTS_SUBPANEL_TITLE'=> '维权服务',
		'top_buttons' => array(   //array('widget_class' => 'SubPanelTopCreateButton')        //新增 按钮 注掉则不显示按钮
	   ),
	 ),

 ),
);
?>