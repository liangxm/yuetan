<?php
$popupMeta = array (
    'moduleMain' => 'lxm1_lxm_conversation',
    'varName' => 'lxm1_lxm_conversation',
    'orderBy' => 'lxm1_lxm_conversation.name',
    'whereClauses' => array (
  'name' => 'lxm1_lxm_conversation.name',
),
    'searchInputs' => array (
  5 => 'name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'TALK_TIME' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_TALK_TIME',
    'width' => '20%',
    'default' => true,
    'name' => 'talk_time',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'TALK_PLACE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TALK_PLACE',
    'width' => '20%',
    'default' => true,
    'name' => 'talk_place',
  ),
  'HOST_NAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_HOST_NAME',
    'width' => '20%',
    'name' => 'host_name_c',
  ),
  'HASVODIO' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_HASVODIO',
    'width' => '20%',
    'name' => 'hasvodio',
  ),
),
);
