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

 
$mod_strings = array (

  'LBL_MODULE_NAME'=>'日程表',
  'LBL_MODULE_TITLE'=>'日程表',
  'LNK_NEW_CALL' => '预约电话',
  'LNK_NEW_MEETING' => '预约会议',
  'LNK_NEW_APPOINTMENT' => '新建约会',
  'LNK_NEW_TASK' => '新建任务',
  'LNK_CALL_LIST' => '查看电话记录',
  'LNK_MEETING_LIST' => '查看会议记录',
  'LNK_TASK_LIST' => '查看任务',
  'LNK_VIEW_CALENDAR' => '查看日程表',
  'LNK_IMPORT_CALLS'=>'导入电话',
  'LNK_IMPORT_MEETINGS'=>'导入会议',
  'LNK_IMPORT_TASKS'=>'导入任务',
  'LBL_MONTH' => '月份',
  'LBL_DAY' => '日期',
  'LBL_YEAR' => '年份',
  'LBL_WEEK' => '周',
  'LBL_PREVIOUS_MONTH' => '上个月',
  'LBL_PREVIOUS_DAY' => '昨天',
  'LBL_PREVIOUS_YEAR' => '去年',
  'LBL_PREVIOUS_WEEK' => '上周',
  'LBL_NEXT_MONTH' => '下个月',
  'LBL_NEXT_DAY' => '明天',
  'LBL_NEXT_YEAR' => '明年',
  'LBL_NEXT_WEEK' => '下周',
  'LBL_AM' => '上午',
  'LBL_PM' => '下午',
  'LBL_SCHEDULED' => '已安排',
  'LBL_BUSY' => '忙碌中',
  'LBL_CONFLICT' => '冲突',
  'LBL_USER_CALENDARS' => '用户日程表',
  'LBL_SHARED' => '共享',
  'LBL_PREVIOUS_SHARED' => '上一步',
  'LBL_NEXT_SHARED' => '下一步',
  'LBL_SHARED_CAL_TITLE' => '共享日历',
  'LBL_USERS' => '用户',
  'LBL_REFRESH' => '更新',
  'LBL_EDIT_USERLIST' => '用户列表',
  'LBL_SELECT_USERS' => '选择共享日历的用户',
  'LBL_FILTER_BY_TEAM' => '通过团队过滤用户列表:',
  'LBL_ASSIGNED_TO_NAME' => '指派',
  'LBL_DATE' => '开始日期 & 时间',
  'LBL_CREATE_MEETING' => '安排会议',
  'LBL_CREATE_CALL' => '呼叫记录',  
   'LBL_HOURS_ABBREV' => 'h',
   'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => '是',
	'LBL_NO' => '否',
	'LBL_SETTINGS' => '设置',
	'LBL_CREATE_NEW_RECORD' => '创建活动',
	'LBL_LOADING' => '加载 ......',
	'LBL_SAVING' => '保存 ......',
	'LBL_SENDING_INVITES' => '保存并发送邀请 .....',
	'LBL_CONFIRM_REMOVE' => '确定要删除记录?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => '你确定要删除所有记录吗?',
	'LBL_EDIT_RECORD' => '编辑活动',
	'LBL_ERROR_SAVING' => '保存期间错误',
	'LBL_ERROR_LOADING' => '加载期间错误',
	'LBL_GOTO_DATE' => '转到日期',
	'NOTICE_DURATION_TIME' => '持续时间必须大于0',
	'LBL_STYLE_BASIC' => '基础',
	'LBL_STYLE_ADVANCED' => '高级',

	'LBL_INFO_TITLE' => '更多细节',
	'LBL_INFO_DESC' => '说明书',
	'LBL_INFO_START_DT' => '开始日期',
	'LBL_INFO_DUE_DT' => '到期时间',
	'LBL_INFO_DURATION' => '持续期间',
	'LBL_INFO_NAME' => '主题',
	'LBL_INFO_RELATED_TO' => '相关的',

	'LBL_NO_USER' => '没有匹配的字段分配',
	'LBL_SUBJECT' => '主题',
	'LBL_DURATION' => '持续时间',
	'LBL_STATUS' => '状态',
	'LBL_DATE_TIME' => '日期和时间',


	'LBL_SETTINGS_TITLE' => '设置',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => '在日、周视图上显示时间段:',
	'LBL_SETTINGS_TIME_STARTS'=>'开始时间:', 
	'LBL_SETTINGS_TIME_ENDS'=>'结束时间:', 
	'LBL_SETTINGS_CALLS_SHOW' => '呼叫显示:',
	'LBL_SETTINGS_TASKS_SHOW' => '显示来电:', 

	'LBL_SAVE_BUTTON' => '保存',
	'LBL_DELETE_BUTTON' => '删除',
	'LBL_APPLY_BUTTON' => '应用',
	'LBL_SEND_INVITES' => '发送邀请',
	'LBL_CANCEL_BUTTON' => '取消',
	'LBL_CLOSE_BUTTON' => '关闭',

	'LBL_GENERAL_TAB' => '详情',
	'LBL_PARTICIPANTS_TAB' =>'受邀者',
	'LBL_REPEAT_TAB' => '周期重复',	
	
	'LBL_REPEAT_TYPE' => '重复',
	'LBL_REPEAT_INTERVAL' => '每',
	'LBL_REPEAT_END' => '结束',	
	'LBL_REPEAT_END_AFTER' => '在之后',
	'LBL_REPEAT_OCCURRENCES' => '重复次数',
	'LBL_REPEAT_END_BY' => '到',	
	'LBL_REPEAT_DOW' => '在',	
    'LBL_REPEAT_UNTIL' => '重复直到',
    'LBL_REPEAT_COUNT' => '重复次数',
	'LBL_REPEAT_LIMIT_ERROR' => '你的设置将创建 $limit 个会议。',
	
	'LBL_EDIT_ALL_RECURRENCES' => '编辑所有周期重复记录',
	'LBL_REMOVE_ALL_RECURRENCES' => '删除所有周期重复记录',
	
	'LBL_DATE_END_ERROR' => '结束日期在开始日期之前',

);

$mod_list_strings = array(
    'dom_cal_weekdays'=>array(
        "星期日",
        "星期一",
        "星期二",
        "星期三",
        "星期四",
        "星期五",
        "星期六",
    ),
    'dom_cal_weekdays_long'=>array(
        "星期日",
        "星期一",
        "星期二",
        "星期三",
        "星期四",
        "星期五",
        "星期六",
    ),
    'dom_cal_month'=>array(
        "",
        "一月",
        "二月",
        "三月",
        "四月",
        "五月",
        "六月",
        "七月",
        "八月",
        "九月",
        "十月",
        "十一月",
        "十二月",
    ),
    'dom_cal_month_long'=>array(
        "",
        "一月",
        "二月",
        "三月",
        "四月",
        "五月",
        "六月",
        "七月",
        "八月",
        "九月",
        "十月",
        "十一月",
        "十二月",
    ),
);
?>
