<?php
$module_name = 'lxm1_lxm_residents';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'id_number' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_ID_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'id_number',
      ),
      'phone' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
