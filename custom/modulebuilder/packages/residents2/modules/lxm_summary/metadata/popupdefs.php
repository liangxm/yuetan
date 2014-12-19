<?php
$popupMeta = array (
    'moduleMain' => 'lxm1_lxm_summary',
    'varName' => 'lxm1_lxm_summary',
    'orderBy' => 'lxm1_lxm_summary.name',
    'whereClauses' => array (
  'name' => 'lxm1_lxm_summary.name',
),
    'searchInputs' => array (
  1 => 'name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '20%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '80%',
    'default' => true,
  ),
),
);
