<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-09-29 12:48:29
$dictionary["lxm1_lxm_famliy"]["fields"]["lxm1_lxm_residents_lxm1_lxm_famliy"] = array (
  'name' => 'lxm1_lxm_residents_lxm1_lxm_famliy',
  'type' => 'link',
  'relationship' => 'lxm1_lxm_residents_lxm1_lxm_famliy',
  'source' => 'non-db',
  'module' => 'lxm1_lxm_residents',
  'bean_name' => false,
  'vname' => 'LBL_LXM1_LXM_RESIDENTS_LXM1_LXM_FAMLIY_FROM_LXM1_LXM_RESIDENTS_TITLE',
  'id_name' => 'lxm1_lxm_residents_lxm1_lxm_famliylxm1_lxm_residents_ida',
);
$dictionary["lxm1_lxm_famliy"]["fields"]["lxm1_lxm_residents_lxm1_lxm_famliy_name"] = array (
  'name' => 'lxm1_lxm_residents_lxm1_lxm_famliy_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LXM1_LXM_RESIDENTS_LXM1_LXM_FAMLIY_FROM_LXM1_LXM_RESIDENTS_TITLE',
  'save' => true,
  'id_name' => 'lxm1_lxm_residents_lxm1_lxm_famliylxm1_lxm_residents_ida',
  'link' => 'lxm1_lxm_residents_lxm1_lxm_famliy',
  'table' => 'lxm1_lxm_residents',
  'module' => 'lxm1_lxm_residents',
  'rname' => 'name',
);
$dictionary["lxm1_lxm_famliy"]["fields"]["lxm1_lxm_residents_lxm1_lxm_famliylxm1_lxm_residents_ida"] = array (
  'name' => 'lxm1_lxm_residents_lxm1_lxm_famliylxm1_lxm_residents_ida',
  'type' => 'link',
  'relationship' => 'lxm1_lxm_residents_lxm1_lxm_famliy',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LXM1_LXM_RESIDENTS_LXM1_LXM_FAMLIY_FROM_LXM1_LXM_FAMLIY_TITLE',
);


 // created: 2014-10-07 09:10:11
$dictionary['lxm1_lxm_famliy']['fields']['name']['importable']='false';
$dictionary['lxm1_lxm_famliy']['fields']['name']['duplicate_merge']='disabled';
$dictionary['lxm1_lxm_famliy']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['lxm1_lxm_famliy']['fields']['name']['merge_filter']='disabled';
$dictionary['lxm1_lxm_famliy']['fields']['name']['unified_search']=false;

 
?>