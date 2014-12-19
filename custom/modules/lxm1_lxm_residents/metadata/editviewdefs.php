<?php
$module_name = 'lxm1_lxm_residents';
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
        'LBL_EDITVIEW_PANEL5' => 
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
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
            'label' => 'LBL_LAST_NAME',
            'customCode' => '<input name="last_name" id="last_name" size="30" maxlength="30" type="text" value="{$fields.last_name.value}">',
          ),
          1 => 
          array (
            'name' => 'first_name',
            'label' => 'LBL_FIRST_NAME',
	    'customCode' => '<input name="first_name" id="first_name" size="30" maxlength="30" type="text" value="{$fields.first_name.value}">',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'abbr_name',
            'label' => 'LBL_ABBR_NAME',
            'customCode' => '<input name="abbr_name" id="abbr_name" size="30" maxlength="30" type="text" value="{$fields.abbr_name.value}">',
          ),
          1 => 
          array (
            'name' => 'gender_c',
            'studio' => 'visible',
            'label' => 'LBL_GENDER_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ethnic_groups',
            'label' => 'LBL_ETHNIC_GROUPS',
	    'customCode' => '<input name="ethnic_groups" id="ethnic_groups" size="30" maxlength="30" type="text" value="{$fields.ethnic_groups.value}">',
          ),
          1 => 
          array (
            'name' => 'nationality',
            'label' => 'LBL_NATIONALITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'id_number',
            'label' => 'LBL_ID_NUMBER',
          ),
          1 => 
          array (
            'name' => 'marital_situation',
            'studio' => 'visible',
            'label' => 'LBL_MARITAL_SITUATION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'work_unit',
            'label' => 'LBL_WORK_UNIT',
          ),
          1 => 
          array (
            'name' => 'phone',
            'label' => 'LBL_PHONE',
	    'customCode' => '<input name="phone" id="phone" size="30" maxlength="30" type="text" value="{$fields.phone.value}">',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'residences_address',
            'label' => 'LBL_RESIDENCES_ADDRESS',
            'customCode' => '<input name="residences_address" id="residences_address" size="30" maxlength="30" type="text" value="{$fields.residences_address.value}">',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'persent_address',
            'label' => 'LBL_PERSENT_ADDRESS',
	    'customCode' => '<input name="persent_address" id="persent_address" size="30" maxlength="30" type="text" value="{$fields.persent_address.value}">',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'belong_street',
            'label' => 'LBL_BELONG_STREET',
            'customCode' => '<input name="belong_street" id="belong_street" size="30" maxlength="30" type="text" value="{$fields.belong_street.value}">',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'personal_details',
            'studio' => 'visible',
            'label' => 'LBL_PERSONAL_DETAILS',
	    'customCode' => '<textarea id="personal_details" name="personal_details" rows="4" cols="160" value="{$fields.personal_details.value}" title="请输入150以内的字符" maxlength="150" tabindex="0"></textarea>',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'disease_situation',
            'studio' => 'visible',
            'label' => 'LBL_DISEASE_SITUATION',
	    'customCode' => '<textarea id="disease_situation" name="disease_situation" rows="4" cols="160" title="请输入150个以内字符" maxlength="150" tabindex="0"></textarea>',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'pocketbook',
            'studio' => 'visible',
            'label' => 'LBL_POCKETBOOK',
	    'customCode' => '<textarea id="pocketbook" name="pocketbook" rows="4" cols="160" title="请输入150个以内的字符" maxlength="150" tabindex="0"></textarea>',
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
	    'customCode' => '<textarea id="primary_issue" name="primary_issue" rows="4" cols="160" title="请输入150个以内的字符" maxlength="150" tabindex="0"></textarea>',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'issue_type',
            'label' => 'LBL_ISSUE_TYPE',
            'customCode' => '<input name="issue_type" id="issue_type" size="30" maxlength="30" type="30" value="{$fields.issue_type.value}">',
          ),
          1 => 
          array (
            'name' => 'event_place',
            'label' => 'LBL_EVENT_PLACE',
	    'customCode' => '<input name="event_place" id="event_place" size="30" maxlength="30" type="text" value="{$fields.event_place.value}">',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'start_date',
            'label' => 'LBL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'aggressive_behavior',
            'label' => 'LBL_AGGRESSIVE_BEHAVIOR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'residents_situation',
            'studio' => 'visible',
            'label' => 'LBL_RESIDENTS_SITUATION',
	    'customCode' => '<textarea id="residents_situation" name="residents_situation" rows="4" cols="160" title="请输入150个以内的字符" maxlength="150" tabindex="0"></textarea>',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'responsibility_people',
            'label' => 'LBL_RESPONSIBILITY_PEOPLE',
	    'customCode' => '<input name="responsibility_people" id="responsibility_people" size="30" maxlength="30" type="text" value="{$fields.responsibility_people.value}">',
          ),
          1 => 
          array (
            'name' => 'responsibility_position',
            'label' => 'LBL_RESPONSIBILITY_POSITION',
	    'customCode' => '<input name="responsibility_position" id="responsibility_position" size="30" maxlength="30" type="text" value="{$fields.responsibility_position.value}">',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'responsibility_unit',
            'label' => 'LBL_RESPONSIBILITY_UNIT',
	    'customCode' => '<input name="responsibility_unit" id="responsibility_unit" size="30" maxlength="30" type="text" value="{$fields.responsibility_unit.value}">',
          ),
          1 => 
          array (
            'name' => 'responsibility_phone',
            'label' => 'LBL_RESPONSIBILITY_PHONE',
	    'customCode' => '<input name="responsibility_phone" id="responsibility_unit" size="30" maxlength="30" type="text" value="{$fields.responsibility_unit.value}">',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'start_time_c',
            'label' => 'LBL_START_TIME_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'end_date_c',
            'label' => 'LBL_END_TIME_C',
          ),
          1 => 
          array (
            'name' => 'numbers_up',
            'label' => 'LBL_NUMBERS_UP',
          ),
        ),
        8 => 
        array (
          0 => 
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
	    'customCode' => '<input name="handle_unit" id="handle_unit" size="30" maxlength="30" type="text" value="{$fields.handle_unit.value}">',
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
	    'customCode' => '<input name="leader_name" id="leader_name" size="30" maxlength="30" type="text" value="{$fields.leader_name.value}">',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'leader_unit',
            'label' => 'LBL_LEADER_UNIT',
	    'customCode' => '<input name="leader_unit" id="leader_unit" size="30" maxlength="30" type="text" value="{$fields.leader_unit.value}">',
          ),
          1 => 
          array (
            'name' => 'leader_position',
            'label' => 'LBL_LEADER_POSITION',
	    'customCode' => '<input name="leader_position" id="leader_position" size="30" maxlength="30" type="text" value="{$fields.leader_position.value}">',
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
    ),
  ),
);
?>
