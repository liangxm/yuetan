<?php
$module_name = 'lxm1_lxm_famliy';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'RELATIONSHIP' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RELATIONSHIP',
    'width' => '10%',
  ),
  'WORK_UNIT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WORK_UNIT',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
