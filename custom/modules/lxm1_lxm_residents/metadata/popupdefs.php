<?php
$popupMeta = array (
    'moduleMain' => 'lxm1_lxm_residents',
    'varName' => 'lxm1_lxm_residents',
    'orderBy' => 'lxm1_lxm_residents.name',
    'whereClauses' => array (
  'full_name' => 'lxm1_lxm_residents.full_name',
  'abbr_name' => 'lxm1_lxm_residents.abbr_name',
),
    'searchInputs' => array (
  2 => 'full_name',
  3 => 'abbr_name',
),
    'searchdefs' => array (
  'abbr_name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_ABBR_NAME',
    'width' => '10%',
    'name' => 'abbr_name',
  ),
  'full_name' => 
  array (
    'type' => 'name',
    'studio' => 
    array (
      'formula' => false,
    ),
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'full_name',
  ),
),
);
