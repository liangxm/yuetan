<?php
// created: 2014-09-29 12:48:28
$dictionary["lxm1_lxm_residents_lxm1_lxm_conversation"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'lxm1_lxm_residents_lxm1_lxm_conversation' => 
    array (
      'lhs_module' => 'lxm1_lxm_residents',
      'lhs_table' => 'lxm1_lxm_residents',
      'lhs_key' => 'id',
      'rhs_module' => 'lxm1_lxm_conversation',
      'rhs_table' => 'lxm1_lxm_conversation',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'lxm1_lxm_residents_lxm1_lxm_conversation_c',
      'join_key_lhs' => 'lxm1_lxm_residents_lxm1_lxm_conversationlxm1_lxm_residents_ida',
      'join_key_rhs' => 'lxm1_lxm_rf489rsation_idb',
    ),
  ),
  'table' => 'lxm1_lxm_residents_lxm1_lxm_conversation_c',
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
      'name' => 'lxm1_lxm_residents_lxm1_lxm_conversationlxm1_lxm_residents_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'lxm1_lxm_rf489rsation_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'lxm1_lxm_residents_lxm1_lxm_conversationspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'lxm1_lxm_residents_lxm1_lxm_conversation_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'lxm1_lxm_residents_lxm1_lxm_conversationlxm1_lxm_residents_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'lxm1_lxm_residents_lxm1_lxm_conversation_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'lxm1_lxm_rf489rsation_idb',
      ),
    ),
  ),
);