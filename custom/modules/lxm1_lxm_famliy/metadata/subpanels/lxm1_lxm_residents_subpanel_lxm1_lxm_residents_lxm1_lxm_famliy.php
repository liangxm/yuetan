<?php
// created: 2014-10-07 09:03:20
$subpanel_layout['list_fields'] = array (
  'relationship' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_RELATIONSHIP',
    'width' => '10%',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'phone' => 
  array (
    'type' => 'phone',
    'vname' => 'LBL_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'work_unit' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_WORK_UNIT',
    'width' => '40%',
    'default' => true,
  ),
  'email' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_EMAIL',
    'width' => '30%',
    'default' => true,
  ),
);