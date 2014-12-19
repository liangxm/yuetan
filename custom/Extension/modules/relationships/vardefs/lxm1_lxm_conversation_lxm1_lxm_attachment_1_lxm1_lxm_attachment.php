<?php
// created: 2014-09-28 17:12:39
$dictionary["lxm1_lxm_attachment"]["fields"]["lxm1_lxm_conversation_lxm1_lxm_attachment_1"] = array (
  'name' => 'lxm1_lxm_conversation_lxm1_lxm_attachment_1',
  'type' => 'link',
  'relationship' => 'lxm1_lxm_conversation_lxm1_lxm_attachment_1',
  'source' => 'non-db',
  'module' => 'lxm1_lxm_conversation',
  'bean_name' => 'lxm1_lxm_conversation',
  'vname' => 'LBL_LXM1_LXM_CONVERSATION_LXM1_LXM_ATTACHMENT_1_FROM_LXM1_LXM_CONVERSATION_TITLE',
  'id_name' => 'lxm1_lxm_c0921rsation_ida',
);
$dictionary["lxm1_lxm_attachment"]["fields"]["lxm1_lxm_conversation_lxm1_lxm_attachment_1_name"] = array (
  'name' => 'lxm1_lxm_conversation_lxm1_lxm_attachment_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LXM1_LXM_CONVERSATION_LXM1_LXM_ATTACHMENT_1_FROM_LXM1_LXM_CONVERSATION_TITLE',
  'save' => true,
  'id_name' => 'lxm1_lxm_c0921rsation_ida',
  'link' => 'lxm1_lxm_conversation_lxm1_lxm_attachment_1',
  'table' => 'lxm1_lxm_conversation',
  'module' => 'lxm1_lxm_conversation',
  'rname' => 'name',
);
$dictionary["lxm1_lxm_attachment"]["fields"]["lxm1_lxm_c0921rsation_ida"] = array (
  'name' => 'lxm1_lxm_c0921rsation_ida',
  'type' => 'link',
  'relationship' => 'lxm1_lxm_conversation_lxm1_lxm_attachment_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LXM1_LXM_CONVERSATION_LXM1_LXM_ATTACHMENT_1_FROM_LXM1_LXM_ATTACHMENT_TITLE',
);
