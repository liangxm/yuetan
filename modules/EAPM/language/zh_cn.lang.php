<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
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

$mod_strings = array (
  'LBL_ASSIGNED_TO_ID' => '指派用户编号',
  'LBL_ASSIGNED_TO_NAME' => 'Sugar 用户',
  'LBL_ID' => '编号',
  'LBL_DATE_ENTERED' => '创建日期',
  'LBL_DATE_MODIFIED' => '修改日期',
  'LBL_MODIFIED' => '修改人',
  'LBL_MODIFIED_ID' => '更改人编号',
  'LBL_MODIFIED_NAME' => '更改名名称',
  'LBL_CREATED' => '创建人',
  'LBL_CREATED_ID' => '创建人编号',
  'LBL_DESCRIPTION' => '说明',
  'LBL_DELETED' => '删除',
  'LBL_NAME' => 'App 用户名',
  'LBL_CREATED_USER' => '用户创建',
  'LBL_MODIFIED_USER' => '用户修改',
  'LBL_LIST_NAME' => '名称',
  'LBL_TEAM' => '团队',
  'LBL_TEAMS' => '团队',
  'LBL_TEAM_ID' => '团队编号',
  'LBL_LIST_FORM_TITLE' => '外部客户列表',
  'LBL_MODULE_NAME' => '外部客户',
  'LBL_MODULE_TITLE' => '外部客户',
  'LBL_HOMEPAGE_TITLE' => '我的外部客户',
  'LNK_NEW_RECORD' => '创建外部客户',
  'LNK_LIST' => '查看外部客户',
  'LNK_IMPORT_SUGAR_EAPM' => '导入外部客户',
  'LBL_SEARCH_FORM_TITLE' => '搜索外部资源',
  'LBL_HISTORY_SUBPANEL_TITLE' => '查看历史活动',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
  'LBL_SUGAR_EAPM_SUBPANEL_TITLE' => '外部活动',
  'LBL_NEW_FORM_TITLE' => '新外部客户',
  'LBL_PASSWORD' => 'App 密码',
  'LBL_USER_NAME' => 'App 用户名',
  'LBL_URL' => 'URL',
  'LBL_APPLICATION' => '应用程序',
  'LBL_API_DATA' => 'API 数据',
  'LBL_API_TYPE' => '登录类型',
  'LBL_API_CONSKEY' => '用户密匙',
  'LBL_API_CONSSECRET' => '用户密码',
  'LBL_API_OAUTHTOKEN' => '开放认证标记',
  'LBL_AUTH_UNSUPPORTED' => "应用程序不支持此认证方式。",
  'LBL_AUTH_ERROR' => '试图认证外部客户失败。',
  'LBL_VALIDATED' => '访问验证',
  'LBL_ACTIVE' => '启用',
  'LBL_OAUTH_NAME' => '%s',
  'LBL_SUGAR_USER_NAME' => 'Sugar 用户',
  'LBL_DISPLAY_PROPERTIES' => '显示属性',
  'LBL_CONNECT_BUTTON_TITLE' => '连接',
  'LBL_NOTE' => '请注意',
  'LBL_CONNECTED' => '已连接',
  'LBL_DISCONNECTED' => '未连接',

  'LBL_ERR_NO_AUTHINFO' => '此账户没有认证信息',
  'LBL_ERR_NO_TOKEN' => '此账户没有有效的登录标记。.',
  
  'LBL_ERR_FAILED_QUICKCHECK' => '您最近没有登录到您的账户。 {0} 点击确认重新登录您的账户并且激活外部账号记录。',

  // Various strings used throughout the external account modules
  'LBL_MEET_NOW_BUTTON' => '现在会面',
  'LBL_VIEW_LOTUS_LIVE_MEETINGS' => '查看预约的LotusLive&交易; 会议',
  'LBL_TITLE_LOTUS_LIVE_MEETINGS' => '预约的 LotusLive&交易; 会议',
  'LBL_VIEW_LOTUS_LIVE_DOCUMENTS' => '查看 LotusLive&交易; 文件',
  'LBL_TITLE_LOTUS_LIVE_DOCUMENTS' => 'LotusLive&交易; 文件',
  'LBL_REAUTHENTICATE_LABEL' => '重新认证',
  'LBL_REAUTHENTICATE_KEY' => '一个',
  'LBL_APPLICATION_FOUND_NOTICE' => '此应用程序的账户已经存在。我们已经恢复已存在的账户。',
  'LBL_OMIT_URL' => '(省略 http:// or https://)',
  'LBL_OAUTH_SAVE_NOTICE' => '点击保存来创建一个外部客户的记录。 Sugar将会指导您到登录到您的账户信息以来认证您访问的页面。输入您的账户信息之后， 您将会返回到Sugar。',
  'LBL_BASIC_SAVE_NOTICE' => '点击保存来创建一个新的外部账户， 然后Sugar将会认证您的证书。',
  'LBL_ERR_FACEBOOK' => 'Facebook 已发送一个错误, 并且 feed 不能正常显示。',
  'LBL_ERR_NO_RESPONSE' => '当试图保存外部客户时，发生错误。',
  'LBL_ERR_TWITTER' => 'Twitter 发送一个错误，, 并且 feed 不能正常显示。',
  'LBL_ERR_POPUPS_DISABLED' => 'Please enable browser popup windows or add an exception for website "{0}" to the exceptions list in order to connect.'
);
