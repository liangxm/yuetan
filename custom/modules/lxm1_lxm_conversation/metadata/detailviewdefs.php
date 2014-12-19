<?php
$module_name = 'lxm1_lxm_conversation';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'lxm1_lxm_residents_lxm1_lxm_conversation_name',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'host_name_c',
            'label' => 'LBL_HOST_NAME',
          ),
          1 => 
          array (
            'name' => 'host_position',
            'label' => 'LBL_HOST_POSITION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'talk_time',
            'label' => 'LBL_TALK_TIME',
          ),
          1 => 
          array (
            'name' => 'talk_place',
            'label' => 'LBL_TALK_PLACE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'others',
            'label' => 'LBL_OTHERS',
          ),
          1 => 
          array (
            'name' => 'hasvodio',
            'label' => 'LBL_HASVODIO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'summary',
            'studio' => 'visible',
            'label' => 'LBL_SUMMARY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'attitude',
            'label' => 'LBL_ATTITUDE',
          ),
        ),
        6 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
