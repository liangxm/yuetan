<?php
$module_name = 'lxm1_lxm_residents1';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '8%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'GENDER_C' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_GENDER_C',
    'width' => '7%',
  ),
  'ID_NUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ID_NUMBER',
    'width' => '12%',
    'default' => true,
  ),
  'PHONE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'MARITAL_SITUATION' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_MARITAL_SITUATION',
    'width' => '8%',
  ),
  'RESIDENCES_ADDRESS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RESIDENCES_ADDRESS',
    'width' => '25%',
    'default' => true,
  ),
  'WORK_UNIT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WORK_UNIT',
    'width' => '30%',
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
