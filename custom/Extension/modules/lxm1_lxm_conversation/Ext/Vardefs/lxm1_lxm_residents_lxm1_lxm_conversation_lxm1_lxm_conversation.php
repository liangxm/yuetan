<?php
// created: 2014-09-29 12:48:30
$dictionary["lxm1_lxm_conversation"]["fields"]["lxm1_lxm_residents_lxm1_lxm_conversation"] = array (
  'name' => 'lxm1_lxm_residents_lxm1_lxm_conversation',
  'type' => 'link',
  'relationship' => 'lxm1_lxm_residents_lxm1_lxm_conversation',
  'source' => 'non-db',
  'module' => 'lxm1_lxm_residents',
  'bean_name' => false,
  'vname' => 'LBL_LXM1_LXM_RESIDENTS_LXM1_LXM_CONVERSATION_FROM_LXM1_LXM_RESIDENTS_TITLE',
  'id_name' => 'lxm1_lxm_residents_lxm1_lxm_conversationlxm1_lxm_residents_ida',
);
$dictionary["lxm1_lxm_conversation"]["fields"]["lxm1_lxm_residents_lxm1_lxm_conversation_name"] = array (
  'name' => 'lxm1_lxm_residents_lxm1_lxm_conversation_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LXM1_LXM_RESIDENTS_LXM1_LXM_CONVERSATION_FROM_LXM1_LXM_RESIDENTS_TITLE',
  'save' => true,
  'id_name' => 'lxm1_lxm_residents_lxm1_lxm_conversationlxm1_lxm_residents_ida',
  'link' => 'lxm1_lxm_residents_lxm1_lxm_conversation',
  'table' => 'lxm1_lxm_residents',
  'module' => 'lxm1_lxm_residents',
  'rname' => 'name',
);
$dictionary["lxm1_lxm_conversation"]["fields"]["lxm1_lxm_residents_lxm1_lxm_conversationlxm1_lxm_residents_ida"] = array (
  'name' => 'lxm1_lxm_residents_lxm1_lxm_conversationlxm1_lxm_residents_ida',
  'type' => 'link',
  'relationship' => 'lxm1_lxm_residents_lxm1_lxm_conversation',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LXM1_LXM_RESIDENTS_LXM1_LXM_CONVERSATION_FROM_LXM1_LXM_CONVERSATION_TITLE',
);
