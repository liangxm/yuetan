<?php
// created: 2014-09-29 12:48:26
$dictionary["lxm1_lxm_attachment"]["fields"]["lxm1_lxm_conversation_lxm1_lxm_attachment"] = array (
  'name' => 'lxm1_lxm_conversation_lxm1_lxm_attachment',
  'type' => 'link',
  'relationship' => 'lxm1_lxm_conversation_lxm1_lxm_attachment',
  'source' => 'non-db',
  'module' => 'lxm1_lxm_conversation',
  'bean_name' => false,
  'vname' => 'LBL_LXM1_LXM_CONVERSATION_LXM1_LXM_ATTACHMENT_FROM_LXM1_LXM_CONVERSATION_TITLE',
  'id_name' => 'lxm1_lxm_cc33drsation_ida',
);
$dictionary["lxm1_lxm_attachment"]["fields"]["lxm1_lxm_conversation_lxm1_lxm_attachment_name"] = array (
  'name' => 'lxm1_lxm_conversation_lxm1_lxm_attachment_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LXM1_LXM_CONVERSATION_LXM1_LXM_ATTACHMENT_FROM_LXM1_LXM_CONVERSATION_TITLE',
  'save' => true,
  'id_name' => 'lxm1_lxm_cc33drsation_ida',
  'link' => 'lxm1_lxm_conversation_lxm1_lxm_attachment',
  'table' => 'lxm1_lxm_conversation',
  'module' => 'lxm1_lxm_conversation',
  'rname' => 'name',
);
$dictionary["lxm1_lxm_attachment"]["fields"]["lxm1_lxm_cc33drsation_ida"] = array (
  'name' => 'lxm1_lxm_cc33drsation_ida',
  'type' => 'link',
  'relationship' => 'lxm1_lxm_conversation_lxm1_lxm_attachment',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LXM1_LXM_CONVERSATION_LXM1_LXM_ATTACHMENT_FROM_LXM1_LXM_ATTACHMENT_TITLE',
);
