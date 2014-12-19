<?php
$module_name = 'lxm1_lxm_conversation';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
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
        1 => 
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
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'summary',
            'studio' => 'visible',
            'label' => 'LBL_SUMMARY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'attitude',
            'label' => 'LBL_ATTITUDE',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
