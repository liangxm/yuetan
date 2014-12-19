<?php
// created: 2014-10-28 15:57:02
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'default' => true,
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'host_name_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_HOST_NAME',
    'width' => '10%',
  ),
  'talk_time' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_TALK_TIME',
    'width' => '10%',
    'default' => true,
  ),
  'talk_place' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_TALK_PLACE',
    'width' => '10%',
    'default' => true,
  ),
  'attitude' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ATTITUDE',
    'width' => '20%',
    'default' => true,
  ),
  'summary' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_SUMMARY',
    'sortable' => false,
    'width' => '30%',
    'default' => true,
  ),
);