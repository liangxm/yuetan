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
	//module
	'LBL_MODULE_NAME' => '文档',
	'LBL_MODULE_TITLE' => '文档: 首页',
	'LNK_NEW_DOCUMENT' => '新增文档',
	'LNK_DOCUMENT_LIST'=> '文档列表',
	'LBL_DOC_REV_HEADER' => '文档版本',
	'LBL_SEARCH_FORM_TITLE'=> '查找文档',
	//vardef labels
	'LBL_DOCUMENT_ID' => '文档编号',
	'LBL_NAME' => '文档名称',
	'LBL_DESCRIPTION' => '说明',
	'LBL_CATEGORY' => '类别',
	'LBL_SUBCATEGORY' => '子类别',
	'LBL_STATUS' => '状态',
	'LBL_CREATED_BY'=> '创建人',
	'LBL_DATE_ENTERED'=> '创建日期',
	'LBL_DATE_MODIFIED'=> '修改日期',
	'LBL_DELETED' => '已删除',
	'LBL_MODIFIED'=> '修改人编号',
	'LBL_MODIFIED_USER' => '修改人',
	'LBL_CREATED'=> '创建人',
	'LBL_REVISIONS'=>'修订版',
	'LBL_RELATED_DOCUMENT_ID'=>'相关文档编号',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'相关文档版本编号',
	'LBL_IS_TEMPLATE'=>'是否是模板',
	'LBL_TEMPLATE_TYPE'=>'文档类型',
	'LBL_ASSIGNED_TO_NAME'=>'负责人:',
	'LBL_REVISION_NAME' => '版本编号',
	'LBL_MIME' => 'Mime 类型',
	'LBL_REVISION' => '版本',
	'LBL_DOCUMENT' => '相关文档',
	'LBL_LATEST_REVISION' => '最新版本',
	'LBL_CHANGE_LOG'=> '修改日志',
	'LBL_ACTIVE_DATE'=> '公布日期',
	'LBL_EXPIRATION_DATE' => '有效期',
	'LBL_FILE_EXTENSION'  => '副文档',
	'LBL_LAST_REV_MIME_TYPE' => '最新版本 MIME 类型',
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'不确定的',
    'LBL_HOMEPAGE_TITLE' => '我的文档',
	//quick search
	'LBL_NEW_FORM_TITLE' => '新建文档',
	//document edit and detail view
	'LBL_DOC_NAME' => '文档名称:',
	'LBL_FILENAME' => '文件名称:',
	'LBL_LIST_FILENAME' => '文件:',
	'LBL_DOC_VERSION' => '版本:',
	'LBL_FILE_UPLOAD' => '文件:',

	'LBL_CATEGORY_VALUE' => '类别:',
	'LBL_LIST_CATEGORY' => '类别',
	'LBL_SUBCATEGORY_VALUE'=> '子类别:',
	'LBL_DOC_STATUS'=> '状态:',
	'LBL_LAST_REV_CREATOR' => '改版人:',
	'LBL_LASTEST_REVISION_NAME' => '最新版本名称:',
	'LBL_SELECTED_REVISION_NAME' => '选中版本的名称:',
	'LBL_CONTRACT_STATUS' => '合同状况:',
	'LBL_CONTRACT_NAME' => '合同名称:',
	'LBL_LAST_REV_DATE' => '改版日期:',
	'LBL_DOWNNLOAD_FILE'=> '下载文件:',
	'LBL_DET_RELATED_DOCUMENT'=>'相关文档:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"相关文档修订:",
	'LBL_DET_IS_TEMPLATE'=>'模板？ :',
	'LBL_DET_TEMPLATE_TYPE'=>'文档类型:',
	'LBL_DOC_DESCRIPTION'=>'说明:',
	'LBL_DOC_ACTIVE_DATE'=> '公布日期:',
	'LBL_DOC_EXP_DATE'=> '有效期:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => '文档列表',
	'LBL_LIST_DOCUMENT' => '文档',
	'LBL_LIST_CATEGORY' => '类别',
	'LBL_LIST_SUBCATEGORY' => '子类别',
	'LBL_LIST_REVISION' => '版本',
	'LBL_LIST_LAST_REV_CREATOR' => '出版人',
	'LBL_LIST_LAST_REV_DATE' => '改版日期',
	'LBL_LIST_VIEW_DOCUMENT'=>'查看',
    'LBL_LIST_DOWNLOAD'=> '下载',
	'LBL_LIST_ACTIVE_DATE' => '公布日期',
	'LBL_LIST_EXP_DATE' => '有效期',
	'LBL_LIST_STATUS'=>'状态',
	'LBL_LINKED_ID' => '链接标识',
	'LBL_SELECTED_REVISION_ID' => '选中版本的编号',
	'LBL_LATEST_REVISION_ID' => '最新版本编号',
	'LBL_SELECTED_REVISION_FILENAME' => '选中版本文件名',
	'LBL_FILE_URL' => '文件 url',
    'LBL_REVISIONS_PANEL' => '修改详情',
    'LBL_REVISIONS_SUBPANEL' => '修订版',

	//document search form.
	'LBL_SF_DOCUMENT' => '文档名称:',
	'LBL_SF_CATEGORY' => '类别:',
	'LBL_SF_SUBCATEGORY'=> '子类别:',
	'LBL_SF_ACTIVE_DATE' => '公布日期:',
	'LBL_SF_EXP_DATE'=> '有效期:',

	'DEF_CREATE_LOG' => '已创建文档',

	//error messages
	'ERR_DOC_NAME'=>'文档名称',
	'ERR_DOC_ACTIVE_DATE'=>'P公布日期',
	'ERR_DOC_EXP_DATE'=> '有效期',
	'ERR_FILENAME'=> '文件名称',
	'ERR_DOC_VERSION'=> '文档版本',
	'ERR_DELETE_CONFIRM'=> '您确定要删除这个文档版本?',
	'ERR_DELETE_LATEST_VERSION'=> '您沒有权限删除这个文档的最新版本。',
	'LNK_NEW_MAIL_MERGE' => '邮件合并',
	'LBL_MAIL_MERGE_DOCUMENT' => '邮件合并模版:',
	'ERR_MISSING_FILE' => '此文档为缺失文件，最可能是由于上传产生的错误。 请重新上传或联系你的管理员。',

	'LBL_TREE_TITLE' => '文档',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'名称',
	'LBL_CONTRACT_NAME' => '合同名称:',
	'LBL_LIST_IS_TEMPLATE'=>'模板？',
	'LBL_LIST_TEMPLATE_TYPE'=>'文档类型',
	'LBL_LIST_SELECTED_REVISION'=>'选择的版本',
	'LBL_LIST_LATEST_REVISION'=>'最新版本',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'相关合同',
	'LBL_LAST_REV_CREATE_DATE'=>'最新版本创建日期',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => '合同',
    'LBL_CREATED_USER' => '创建人',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => '文档版本',
    'LBL_DOCUMENT_INFORMATION' => '文档概述',
	'LBL_DOC_ID' => '文档资源编号',
	'LBL_DOC_TYPE' => '资源',
	'LBL_LIST_DOC_TYPE' => '资源',
    'LBL_DOC_TYPE_POPUP' => '选择文档上传的<br> 和可利用的资源',
	'LBL_DOC_URL' => '文档资源URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => '文件名称',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => '前20个最近修改的文件在下面的列表中按降阶排列。用查询去查找其他的文件。',
    'LBL_LIST_EXT_DOCUMENT_NAME' => '文件名称',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => '用户尝试了访问一个无效的内部API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => '因为内部API错误，登陆检查失败。({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '账户',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '合同',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商业机会',
    'LBL_CASES_SUBPANEL_TITLE' => '客户反馈',
    'LBL_BUGS_SUBPANEL_TITLE' => '缺陷',
    'LBL_QUOTES_SUBPANEL_TITLE' => '引用',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => '产品',
);


?>
