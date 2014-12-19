<?php
$module_name = 'lxm1_lxm_attachment';
$_object_name = 'lxm1_lxm_attachment';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
      ),
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
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'lxm1_lxm_conversation_lxm1_lxm_attachment_name',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 'document_name',
          1 => 'uploadfile',
        ),
        2 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
