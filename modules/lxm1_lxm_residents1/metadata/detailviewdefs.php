<?php
$module_name = 'lxm1_lxm_residents1';
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
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'gender_c',
            'studio' => 'visible',
            'label' => 'LBL_GENDER_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ethnic_groups',
            'label' => 'LBL_ETHNIC_GROUPS',
          ),
          1 => 
          array (
            'name' => 'nationality',
            'label' => 'LBL_NATIONALITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'marital_situation',
            'studio' => 'visible',
            'label' => 'LBL_MARITAL_SITUATION',
          ),
          1 => 
          array (
            'name' => 'id_number',
            'label' => 'LBL_ID_NUMBER',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'residences_address',
            'label' => 'LBL_RESIDENCES_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'work_unit',
            'label' => 'LBL_WORK_UNIT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone',
            'label' => 'LBL_PHONE',
          ),
          1 => 
          array (
            'name' => 'persent_address',
            'label' => 'LBL_PERSENT_ADDRESS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'birthday',
            'label' => 'LBL_BIRTHDAY',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'belong_street',
            'label' => 'LBL_BELONG_STREET',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'personal_details',
            'studio' => 'visible',
            'label' => 'LBL_PERSONAL_DETAILS',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'disease_situation',
            'studio' => 'visible',
            'label' => 'LBL_DISEASE_SITUATION',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'pocketbook',
            'studio' => 'visible',
            'label' => 'LBL_POCKETBOOK',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primary_issue',
            'studio' => 'visible',
            'label' => 'LBL_PRIMARY_ISSUE',
          ),
          1 => 
          array (
            'name' => 'issue_type',
            'label' => 'LBL_ISSUE_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'event_place',
            'label' => 'LBL_EVENT_PLACE',
          ),
          1 => 
          array (
            'name' => 'start_date',
            'label' => 'LBL_START_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'aggressive_behavior',
            'label' => 'LBL_AGGRESSIVE_BEHAVIOR',
          ),
          1 => 
          array (
            'name' => 'residents_situation',
            'studio' => 'visible',
            'label' => 'LBL_RESIDENTS_SITUATION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'responsibility_unit',
            'label' => 'LBL_RESPONSIBILITY_UNIT',
          ),
          1 => 
          array (
            'name' => 'responsibility_people',
            'label' => 'LBL_RESPONSIBILITY_PEOPLE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'responsibility_position',
            'label' => 'LBL_RESPONSIBILITY_POSITION',
          ),
          1 => 
          array (
            'name' => 'responsibility_phone',
            'label' => 'LBL_RESPONSIBILITY_PHONE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'numbers_up',
            'label' => 'LBL_NUMBERS_UP',
          ),
          1 => 
          array (
            'name' => 'handle_status',
            'studio' => 'visible',
            'label' => 'LBL_HANDLE_STATUS',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'handle_unit',
            'label' => 'LBL_HANDLE_UNIT',
          ),
          1 => 
          array (
            'name' => 'has_paper_advice',
            'label' => 'LBL_HAS_PAPER_ADVICE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'reply_time',
            'label' => 'LBL_REPLY_TIME',
          ),
          1 => 
          array (
            'name' => 'has_litigation_process',
            'label' => 'LBL_HAS_LITIGATION_PROCESS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'has_double_check_process',
            'label' => 'LBL_HAS_DOUBLE_CHECK_PROCESS',
          ),
          1 => 
          array (
            'name' => 'has_hearing_process',
            'label' => 'LBL_HAS_HEARING_PROCESS',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'has_leader_contacted',
            'label' => 'LBL_HAS_LEADER_CONTACTED',
          ),
          1 => 
          array (
            'name' => 'leader_name',
            'label' => 'LBL_LEADER_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'leader_unit',
            'label' => 'LBL_LEADER_UNIT',
          ),
          1 => 
          array (
            'name' => 'leader_position',
            'label' => 'LBL_LEADER_POSITION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'has_solution',
            'label' => 'LBL_HAS_SOLUTION',
          ),
        ),
      ),
      'lbl_detailview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 'date_entered',
        ),
      ),
    ),
  ),
);
?>
