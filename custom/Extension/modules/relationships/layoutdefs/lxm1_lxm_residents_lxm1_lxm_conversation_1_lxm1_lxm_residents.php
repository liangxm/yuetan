<?php
 // created: 2014-09-28 16:44:47
$layout_defs["lxm1_lxm_residents"]["subpanel_setup"]['lxm1_lxm_residents_lxm1_lxm_conversation_1'] = array (
  'order' => 100,
  'module' => 'lxm1_lxm_conversation',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LXM1_LXM_RESIDENTS_LXM1_LXM_CONVERSATION_1_FROM_LXM1_LXM_CONVERSATION_TITLE',
  'get_subpanel_data' => 'lxm1_lxm_residents_lxm1_lxm_conversation_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      //'widget_class' => 'SubPanelTopButtonQuickCreate',
	  'widget_class' => 'SubPanelTopButtonCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
