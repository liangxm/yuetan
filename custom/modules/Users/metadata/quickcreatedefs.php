<?php
$viewdefs ['Users'] = 
array (
  'QuickCreate' => 
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
      'form' => 
      array (
        'headerTpl' => 'modules/Users/tpls/EditViewHeader.tpl',
        'footerTpl' => 'modules/Users/tpls/EditViewFooter.tpl',
      ),
      'javascript' => '<script type="text/javascript" src="modules/Users/UserEditView.js"></script>',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_USER_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'last_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'UserType',
            'customCode' => '{if $IS_ADMIN}{$USER_TYPE_DROPDOWN}{else}{$USER_TYPE_READONLY}{/if}',
          ),
          1 => 
          array (
            'name' => 'status',
            'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$STATUS_READONLY}{/if}',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
