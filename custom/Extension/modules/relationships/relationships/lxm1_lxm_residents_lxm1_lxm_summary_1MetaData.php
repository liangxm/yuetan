<?php
// created: 2014-10-29 12:28:19
$dictionary["lxm1_lxm_residents_lxm1_lxm_summary_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'lxm1_lxm_residents_lxm1_lxm_summary_1' => 
    array (
      'lhs_module' => 'lxm1_lxm_residents',
      'lhs_table' => 'lxm1_lxm_residents',
      'lhs_key' => 'id',
      'rhs_module' => 'lxm1_lxm_summary',
      'rhs_table' => 'lxm1_lxm_summary',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'lxm1_lxm_residents_lxm1_lxm_summary_1_c',
      'join_key_lhs' => 'lxm1_lxm_residents_lxm1_lxm_summary_1lxm1_lxm_residents_ida',
      'join_key_rhs' => 'lxm1_lxm_residents_lxm1_lxm_summary_1lxm1_lxm_summary_idb',
    ),
  ),
  'table' => 'lxm1_lxm_residents_lxm1_lxm_summary_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'lxm1_lxm_residents_lxm1_lxm_summary_1lxm1_lxm_residents_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'lxm1_lxm_residents_lxm1_lxm_summary_1lxm1_lxm_summary_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'lxm1_lxm_residents_lxm1_lxm_summary_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'lxm1_lxm_residents_lxm1_lxm_summary_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'lxm1_lxm_residents_lxm1_lxm_summary_1lxm1_lxm_residents_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'lxm1_lxm_residents_lxm1_lxm_summary_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'lxm1_lxm_residents_lxm1_lxm_summary_1lxm1_lxm_summary_idb',
      ),
    ),
  ),
);