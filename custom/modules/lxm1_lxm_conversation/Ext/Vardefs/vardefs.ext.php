<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-09-29 12:48:26
$dictionary["lxm1_lxm_conversation"]["fields"]["lxm1_lxm_conversation_lxm1_lxm_attachment"] = array (
  'name' => 'lxm1_lxm_conversation_lxm1_lxm_attachment',
  'type' => 'link',
  'relationship' => 'lxm1_lxm_conversation_lxm1_lxm_attachment',
  'source' => 'non-db',
  'module' => 'lxm1_lxm_attachment',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_LXM1_LXM_CONVERSATION_LXM1_LXM_ATTACHMENT_FROM_LXM1_LXM_ATTACHMENT_TITLE',
);


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


 // created: 2014-10-07 09:22:11
$dictionary['lxm1_lxm_conversation']['fields']['description']['rows']='4';
$dictionary['lxm1_lxm_conversation']['fields']['description']['cols']='160';

 

 // created: 2014-10-07 09:41:20
$dictionary['lxm1_lxm_conversation']['fields']['host_name_c']['labelValue']='谈话主持人姓名';

 

 // created: 2014-10-16 22:50:54
$dictionary['lxm1_lxm_conversation']['fields']['name']['duplicate_merge']='disabled';
$dictionary['lxm1_lxm_conversation']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['lxm1_lxm_conversation']['fields']['name']['merge_filter']='disabled';
$dictionary['lxm1_lxm_conversation']['fields']['name']['default']='';
$dictionary['lxm1_lxm_conversation']['fields']['name']['required']=false;
$dictionary['lxm1_lxm_conversation']['fields']['name']['full_text_search']=array (
);

 

 // created: 2014-10-07 09:20:01
$dictionary['lxm1_lxm_conversation']['fields']['summary']['cols']='160';

 
?>