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


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'lxm1',
  'author' => 'lxm',
  'description' => '徐汇',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'residents',
  'published_date' => '2014-09-28 15:35:16',
  'type' => 'module',
  'version' => 1411918516,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'residents',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'lxm1_lxm_attachment',
      'class' => 'lxm1_lxm_attachment',
      'path' => 'modules/lxm1_lxm_attachment/lxm1_lxm_attachment.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'lxm1_lxm_conversation',
      'class' => 'lxm1_lxm_conversation',
      'path' => 'modules/lxm1_lxm_conversation/lxm1_lxm_conversation.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'lxm1_lxm_famliy',
      'class' => 'lxm1_lxm_famliy',
      'path' => 'modules/lxm1_lxm_famliy/lxm1_lxm_famliy.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'lxm1_lxm_residents',
      'class' => 'lxm1_lxm_residents',
      'path' => 'modules/lxm1_lxm_residents/lxm1_lxm_residents.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'lxm1_lxm_residents1',
      'class' => 'lxm1_lxm_residents1',
      'path' => 'modules/lxm1_lxm_residents1/lxm1_lxm_residents1.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/lxm1_lxm_attachment',
      'to' => 'modules/lxm1_lxm_attachment',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/lxm1_lxm_conversation',
      'to' => 'modules/lxm1_lxm_conversation',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/lxm1_lxm_famliy',
      'to' => 'modules/lxm1_lxm_famliy',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/lxm1_lxm_residents',
      'to' => 'modules/lxm1_lxm_residents',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/lxm1_lxm_residents1',
      'to' => 'modules/lxm1_lxm_residents1',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/zh_cn.lang.php',
      'to_module' => 'application',
      'language' => 'zh_cn',
    ),
  ),
);