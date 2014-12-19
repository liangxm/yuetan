<?php
// created: 2014-09-29 12:48:28
$dictionary["lxm1_lxm_residents_lxm1_lxm_famliy"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'lxm1_lxm_residents_lxm1_lxm_famliy' => 
    array (
      'lhs_module' => 'lxm1_lxm_residents',
      'lhs_table' => 'lxm1_lxm_residents',
      'lhs_key' => 'id',
      'rhs_module' => 'lxm1_lxm_famliy',
      'rhs_table' => 'lxm1_lxm_famliy',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'lxm1_lxm_residents_lxm1_lxm_famliy_c',
      'join_key_lhs' => 'lxm1_lxm_residents_lxm1_lxm_famliylxm1_lxm_residents_ida',
      'join_key_rhs' => 'lxm1_lxm_residents_lxm1_lxm_famliylxm1_lxm_famliy_idb',
    ),
  ),
  'table' => 'lxm1_lxm_residents_lxm1_lxm_famliy_c',
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
      'name' => 'lxm1_lxm_residents_lxm1_lxm_famliylxm1_lxm_residents_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'lxm1_lxm_residents_lxm1_lxm_famliylxm1_lxm_famliy_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'lxm1_lxm_residents_lxm1_lxm_famliyspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'lxm1_lxm_residents_lxm1_lxm_famliy_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'lxm1_lxm_residents_lxm1_lxm_famliylxm1_lxm_residents_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'lxm1_lxm_residents_lxm1_lxm_famliy_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'lxm1_lxm_residents_lxm1_lxm_famliylxm1_lxm_famliy_idb',
      ),
    ),
  ),
);