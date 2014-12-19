<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
		  //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
		  'ShowActiveUsers'      => '显示启用用户',
		  'ShowLastModifiedRecords' => '最新十条更改记录',
		  'ShowTopUser' => '最多用户',
		  'ShowMyModuleUsage' => '我的模块使用情况',
		  'ShowMyWeeklyActivities' => '我每周的活动日程',
		  'ShowTop3ModulesUsed' => '我使用最多的三个模块',
		  'ShowLoggedInUserCount' => '启用用户数量',
		  'ShowMyCumulativeLoggedInTime' => '我的累计登录次数 (本周)',
		  'ShowUsersCumulativeLoggedInTime' => '用户累计登录时间 (本周)',
		  
		  //Column header mapping
		  'action' => '活动',
		  'active_users' => '启用用户数量',
		  'date_modified' => '最近活动的日期',
		  'different_modules_accessed' => '访问模块次数',
		  'first_name' => '名',
		  'item_id' => '编号',
		  'item_summary' => '名称',
		  'last_action' => '最近活动日期/时间',
		  'last_name' => '姓',
		  'module_name' => '模块名称',
		  'records_modified' => '修改记录总数',
		  'top_module' => '最多访问模块',
		  'total_count' => '最多浏览页面',
		  'total_login_time' => '时间 (时:分:秒)',
		  'user_name' => '用户名',
		  'users' => '用户',
		  
		  //Administration related labels
		  'LBL_ENABLE' => '开启',
		  'LBL_MODULE_NAME_TITLE' => '访问追踪',
		  'LBL_MODULE_NAME' => '访问追踪',
		  'LBL_TRACKER_SETTINGS' => '访问追踪设置',
		  'LBL_TRACKER_QUERIES_DESC' => '查找访问追踪',
		  'LBL_TRACKER_QUERIES_HELP' => '当“记录显示查询”开启并且查询执行时间超过”显示查询时间极限“值时，将会追踪SQL的状态说明。',
		  'LBL_TRACKER_PERF_DESC' => '访问追踪业绩',
		  'LBL_TRACKER_PERF_HELP' => '记录数据库交互，文件存取和内存使用',
		  'LBL_TRACKER_SESSIONS_DESC' => '访问追踪信息',
		  'LBL_TRACKER_SESSIONS_HELP' => '追踪记录启用用户和用户营销组的会议信息',
		  'LBL_TRACKER_DESC' => '追踪用户行动',
		  'LBL_TRACKER_HELP' => '追踪用户和营销组所有的浏览页面 (访问的模块及记录) 保存的记录',
		  'LBL_TRACKER_PRUNE_INTERVAL' => '当运行计划任务删除记录数据时，数据所保存的天数',
		  'LBL_TRACKER_PRUNE_RANGE' => '天数',
);
?>
