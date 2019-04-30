<?php
/**
 * The product module zh-tw file of RanZhi.
 *
 * @copyright   Copyright 2009-2018 青島易軟天創網絡科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     product
 * @version     $Id$
 * @link        http://www.ranzhi.org
 */
if(!isset($lang->product)) $lang->product = new stdclass();
$lang->product->common      = '產品維護';
$lang->product->id          = '編號';
$lang->product->name        = '名稱';
$lang->product->code        = '代號';
$lang->product->type        = '類型';
$lang->product->status      = '狀態';
$lang->product->category    = '產品分類';
$lang->product->subject     = '收入科目';
$lang->product->desc        = '簡介';
$lang->product->order       = '排序';
$lang->product->roles       = '角色';
$lang->product->createdBy   = '添加者';
$lang->product->createdDate = '添加時間';
$lang->product->editedBy    = '編輯者';
$lang->product->editedDate  = '編輯時間';

$lang->product->index       = '瀏覽產品';
$lang->product->delete      = '刪除產品';
$lang->product->list        = '產品列表';
$lang->product->browse      = '維護產品';
$lang->product->create      = '添加產品';
$lang->product->edit        = '編輯產品';
$lang->product->view        = '產品詳情';
$lang->product->basicInfo   = '基本信息';
$lang->product->setCategory = '維護分類';

$lang->product->typeList['real']    = '實體類';
$lang->product->typeList['service'] = '服務類';
$lang->product->typeList['virtual'] = '虛擬類';

$lang->product->statusList['developing'] = '研發中';
$lang->product->statusList['normal']     = '正常';
$lang->product->statusList['offline']    = '下線';

$lang->product->lineList[''] = '';

$lang->product->placeholder = new stdclass();
$lang->product->placeholder->code = '產品代號必須為英文或數字的組合';

/* Width settings for different languages, in pixels. */
$lang->product->actionWidth  = 280;
$lang->product->subjectWidth = 70;
