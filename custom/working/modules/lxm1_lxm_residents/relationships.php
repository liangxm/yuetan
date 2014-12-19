<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

$relationships = array (
  'lxm1_lxm_residents_modified_user' => 
  array (
    'id' => '6184ec9f-03fc-9167-d880-544fbc47c8bf',
    'relationship_name' => 'lxm1_lxm_residents_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'lxm1_lxm_residents',
    'rhs_table' => 'lxm1_lxm_residents',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'lxm1_lxm_residents_created_by' => 
  array (
    'id' => '6e34af1f-718a-5b32-e952-544fbcd077c2',
    'relationship_name' => 'lxm1_lxm_residents_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'lxm1_lxm_residents',
    'rhs_table' => 'lxm1_lxm_residents',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'lxm1_lxm_residents_assigned_user' => 
  array (
    'id' => '78b409da-784e-1012-3e74-544fbc71039a',
    'relationship_name' => 'lxm1_lxm_residents_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'lxm1_lxm_residents',
    'rhs_table' => 'lxm1_lxm_residents',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'lxm1_lxm_residents_lxm1_lxm_conversation' => 
  array (
    'id' => 'ab246ea0-6ccb-226d-5964-544fbc927260',
    'relationship_name' => 'lxm1_lxm_residents_lxm1_lxm_conversation',
    'lhs_module' => 'lxm1_lxm_residents',
    'lhs_table' => 'lxm1_lxm_residents',
    'lhs_key' => 'id',
    'rhs_module' => 'lxm1_lxm_conversation',
    'rhs_table' => 'lxm1_lxm_conversation',
    'rhs_key' => 'id',
    'join_table' => 'lxm1_lxm_residents_lxm1_lxm_conversation_c',
    'join_key_lhs' => 'lxm1_lxm_residents_lxm1_lxm_conversationlxm1_lxm_residents_ida',
    'join_key_rhs' => 'lxm1_lxm_rf489rsation_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'lxm1_lxm_residents_lxm1_lxm_conversation_1' => 
  array (
    'id' => 'b5e3135d-f2ac-4c29-70c2-544fbc7206d3',
    'relationship_name' => 'lxm1_lxm_residents_lxm1_lxm_conversation_1',
    'lhs_module' => 'lxm1_lxm_residents',
    'lhs_table' => 'lxm1_lxm_residents',
    'lhs_key' => 'id',
    'rhs_module' => 'lxm1_lxm_conversation',
    'rhs_table' => 'lxm1_lxm_conversation',
    'rhs_key' => 'id',
    'join_table' => 'lxm1_lxm_residents_lxm1_lxm_conversation_1_c',
    'join_key_lhs' => 'lxm1_lxm_residents_lxm1_lxm_conversation_1lxm1_lxm_residents_ida',
    'join_key_rhs' => 'lxm1_lxm_ra1f0rsation_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'lxm1_lxm_residents_lxm1_lxm_famliy' => 
  array (
    'id' => 'c3614f0c-7e23-5a6c-580b-544fbc375e1e',
    'relationship_name' => 'lxm1_lxm_residents_lxm1_lxm_famliy',
    'lhs_module' => 'lxm1_lxm_residents',
    'lhs_table' => 'lxm1_lxm_residents',
    'lhs_key' => 'id',
    'rhs_module' => 'lxm1_lxm_famliy',
    'rhs_table' => 'lxm1_lxm_famliy',
    'rhs_key' => 'id',
    'join_table' => 'lxm1_lxm_residents_lxm1_lxm_famliy_c',
    'join_key_lhs' => 'lxm1_lxm_residents_lxm1_lxm_famliylxm1_lxm_residents_ida',
    'join_key_rhs' => 'lxm1_lxm_residents_lxm1_lxm_famliylxm1_lxm_famliy_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'lxm1_lxm_residents_lxm1_lxm_summary_1' => 
  array (
    'rhs_label' => '阶段小结',
    'lhs_label' => 'j????',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'lxm1_lxm_residents',
    'rhs_module' => 'lxm1_lxm_summary',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'lxm1_lxm_residents_lxm1_lxm_summary_1',
  ),
);