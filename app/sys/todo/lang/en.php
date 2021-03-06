<?php
/**
 * The todo module English file of RanZhi.
 *
 * @copyright   Copyright 2009-2018 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     todo
 * @version     $Id: en.php 4676 2013-04-26 06:08:23Z chencongzhi520@gmail.com $
 * @link        http://www.zdoo.org
 */
if(!isset($lang->todo)) $lang->todo = new stdclass();
$lang->todo->common       = 'Todo';
$lang->todo->index        = "Home";
$lang->todo->browse       = "Todo";
$lang->todo->create       = "Create";
$lang->todo->batchCreate  = "Batch create";
$lang->todo->edit         = "Edit";
$lang->todo->batchEdit    = "Batch edit";
$lang->todo->view         = "Info";
$lang->todo->viewAB       = "Info";
$lang->todo->finish       = "Finish";
$lang->todo->batchFinish  = "Batch Finish";
$lang->todo->export       = "Export";
$lang->todo->delete       = "Delete";
$lang->todo->browse       = "Browse";
$lang->todo->import       = "Move to";
$lang->todo->changeStatus = "Change";
$lang->todo->legendBasic  = "Basic Info";
$lang->todo->calendar     = "Calendar";
$lang->todo->assignTo     = "Assignee";

$lang->todo->id           = 'ID';
$lang->todo->account      = 'Owner';
$lang->todo->date         = 'Date';
$lang->todo->begin        = 'Begin';
$lang->todo->beginAB      = 'Begin';
$lang->todo->end          = 'End';
$lang->todo->endAB        = 'End';
$lang->todo->beginAndEnd  = 'Time Frame';
$lang->todo->type         = 'Type';
$lang->todo->pri          = 'Priority';
$lang->todo->name         = 'Name';
$lang->todo->status       = 'Status';
$lang->todo->desc         = 'Description';
$lang->todo->private      = 'Private';
$lang->todo->idvalue      = 'Task/Order';
$lang->todo->assignedTo   = 'Assignee';
$lang->todo->assignedBy   = 'Assigned By';
$lang->todo->assignedDate = 'Assigned';
$lang->todo->finishedBy   = 'Finished By';
$lang->todo->finishedDate = 'Finished';
$lang->todo->closedBy     = 'Closed By';
$lang->todo->closedDate   = 'Closed';
$lang->todo->ranzhi       = 'Zdoo';
$lang->todo->task         = 'Tasks';
$lang->todo->bug          = 'Bugs';

$lang->todo->confirmTip  = 'This Todo is linked to %s #%s. Do you want to change it anyway?';
$lang->todo->assignedTip = '%s at %s';
$lang->todo->finishedTip = '%s at %s';
$lang->todo->closedTip   = '%s at %s';
$lang->todo->deleteTip   = 'Drag here to delete';

$lang->todo->statusList['wait']     = 'Wait';
$lang->todo->statusList['doing']    = 'Doing';
$lang->todo->statusList['done']     = 'Done';
$lang->todo->statusList['closed']   = 'Closed';

$lang->todo->priList[3] = '3';
$lang->todo->priList[1] = '1';
$lang->todo->priList[2] = '2';
$lang->todo->priList[4] = '4';

$lang->todo->typeList['custom']   = 'Custom';
$lang->todo->typeList['task']     = 'Project';
$lang->todo->typeList['order']    = 'Order';
$lang->todo->typeList['customer'] = 'Customer';

$lang->todo->confirmDelete  = "Do you want to delete this Todo?";
$lang->todo->successMarked  = "Done.";
$lang->todo->thisIsPrivate  = 'This is a private todo:)';
$lang->todo->lblDisableDate = 'Set time later.';
$lang->todo->emptyTodo      = 'You have no Todo scheduled today.';

$lang->todo->periods['today']      = 'Today';
$lang->todo->periods['yesterday']  = 'Yesterday';
$lang->todo->periods['thisWeek']   = 'This week';
$lang->todo->periods['lastWeek']   = 'Last week';
$lang->todo->periods['thisMonth']  = 'This month';
$lang->todo->periods['lastmonth']  = 'Last month';
$lang->todo->periods['thisSeason'] = 'This season';
$lang->todo->periods['thisYear']   = 'This year';
$lang->todo->periods['future']     = 'Wait';
$lang->todo->periods['before']     = 'Unfinished';
$lang->todo->periods['all']        = 'All';

$lang->todo->batchedittips = 'The editing item is not selected';

$lang->todo->action = new stdclass();
$lang->todo->action->finished = array('main' => '$date, finished by <strong>$actor</strong>');
$lang->todo->action->marked   = array('main' => '$date, the status is changed to <stong>$extra</strong> by <strong>$actor</strong>。', 'extra' => 'statusList');

/* Width settings for different languages, in pixels. */
$lang->todo->mainPaddingRight  = 360;
$lang->todo->sideWidth         = 340;
$lang->todo->sideHandleRight   = 380;
$lang->todo->trashRight        = 410;
$lang->todo->actionWidth       = 280;
$lang->todo->importActionWidth = 240;
