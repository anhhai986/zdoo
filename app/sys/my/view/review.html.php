<?php
/**
 * The personal view file of attend module of Ranzhi.
 *
 * @copyright   Copyright 2009-2016 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      chujilu <chujilu@cnezsoft.com>
 * @package     attend
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
?>
<?php include './header.html.php';?>
<?php js::set('type', $type)?>
<?php js::set('confirmReview', $lang->attend->confirmReview);?>
<?php if($type == 'attend'):?>
<div class='panel'>
  <table class='table table-hover table-striped table-sorter table-data table-fixed text-center'>
    <thead>
      <tr class='text-center'>
        <th class='w-50px'><?php echo $lang->attend->id;?></th>
        <th class='w-100px'><?php echo $lang->attend->account;?></th>
        <th class='w-100px'><?php echo $lang->attend->date;?></th>
        <th class='w-100px'><?php echo $lang->attend->status;?></th>
        <th class='w-80px'><?php echo $lang->attend->manualIn;?></th>
        <th class='w-80px'><?php echo $lang->attend->manualOut;?></th>
        <th class='w-100px'><?php echo $lang->attend->reason;?></th>
        <th><?php echo $lang->attend->desc;?></th>
        <th class='w-150px'><?php echo $lang->actions;?></th>
      </tr>
    </thead>
    <?php foreach($attends as $attend):?>
    <tr>
      <td><?php echo $attend->id;?></td>
      <td><?php echo zget($users, $attend->account);?></td>
      <td><?php echo $attend->date?></td>
      <td><?php echo zget($lang->attend->statusList, $attend->status)?></td>
      <td><?php echo substr($attend->manualIn, 0, 5)?></td>
      <td><?php echo substr($attend->manualOut, 0, 5)?></td>
      <td><?php echo zget($lang->attend->reasonList, $attend->reason)?></td>
      <td><?php echo $attend->desc?></td>
      <td>
        <?php echo html::a($this->createLink('oa.attend', 'review', "attendID={$attend->id}"), $lang->attend->review, "data-status='pass' data-toggle='modal'")?>
      </td>
    </tr>
    <?php endforeach;?>
  </table>
</div>
<?php endif;?>
<?php if($type == 'leave'):?>
<div class='panel'>
  <table class='table table-data table-hover text-center table-fixed tablesorter' id='leaveTable'>
    <thead>
      <tr class='text-center'>
        <?php $vars = "type={$type}&orderBy=%s";?>
        <th class='w-80px'><?php commonModel::printOrderLink('id', $orderBy, $vars, $lang->leave->id);?></th>
        <th class='w-80px'><?php commonModel::printOrderLink('createdBy', $orderBy, $vars, $lang->leave->createdBy);?></th>
        <th class='w-80px'><?php echo $lang->user->dept;?></th>
        <th class='w-80px'><?php commonModel::printOrderLink('type', $orderBy, $vars, $lang->leave->type);?></th>
        <th class='w-150px'><?php commonModel::printOrderLink('begin', $orderBy, $vars, $lang->leave->begin);?></th>
        <th class='w-150px'><?php commonModel::printOrderLink('begin', $orderBy, $vars, $lang->leave->end);?></th>
        <th class='w-140px'><?php commonModel::printOrderLink('backDate', $orderBy, $vars, $lang->leave->backDate);?></th>
        <th><?php echo $lang->leave->desc;?></th>
        <th class='w-80px'><?php commonModel::printOrderLink('status', $orderBy, $vars, $lang->leave->status);?></th>
        <th class='w-80px'><?php commonModel::printOrderLink('reviewedBy', $orderBy, $vars, $lang->leave->reviewedBy);?></th>
        <th class='w-150px'><?php echo $lang->actions;?></th>
      </tr>
    </thead>
    <?php foreach($leaveList as $leave):?>
    <tr>
      <td><?php echo $leave->id;?></td>
      <td><?php echo zget($users, $leave->createdBy);?></td>
      <td><?php echo zget($deptList, $leave->dept);?></td>
      <td><?php echo zget($this->lang->leave->typeList, $leave->type);?></td>
      <td><?php echo $leave->begin . ' ' . $leave->start;?></td>
      <td><?php echo $leave->end . ' ' . $leave->finish;?></td>
      <td><?php echo formatTime($leave->backDate);?></td>
      <td title='<?php echo $leave->desc?>'><?php echo $leave->desc;?></td>
      <td class='leave-<?php echo $leave->status?>'><?php echo zget($this->lang->leave->statusList, $leave->status);?></td>
      <td><?php echo zget($users, $leave->reviewedBy);?></td>
      <td>
        <?php if($leave->status == 'pass'):?>
        <?php echo html::a($this->createLink('oa.leave', 'review', "id={$leave->id}&type=back"), $lang->leave->statusList['pass'] . $lang->leave->back, "data-status='pass' data-toggle='modal' data-width=800");?>
        <?php else:?>
        <?php echo html::a($this->createLink('oa.leave', 'review', "id={$leave->id}&type=review"), $lang->leave->review, "data-status='pass' data-toggle='modal' data-width=800");?>
        <?php endif;?>
      </td>
    </tr>
    <?php endforeach;?>
  </table>
</div>
<?php endif;?>
<?php if($type == 'makeup'):?>
<div class='panel'>
  <table class='table table-data table-hover text-center table-fixed tablesorter' id='makeupTable'>
    <thead>
      <tr class='text-center'>
        <?php $vars = "type={$type}&orderBy=%s";?>
        <th class='w-80px'><?php commonModel::printOrderLink('id', $orderBy, $vars, $lang->makeup->id);?></th>
        <th class='w-80px'><?php commonModel::printOrderLink('createdBy', $orderBy, $vars, $lang->makeup->createdBy);?></th>
        <th class='w-80px'><?php echo $lang->user->dept;?></th>
        <th class='w-80px'><?php commonModel::printOrderLink('type', $orderBy, $vars, $lang->makeup->type);?></th>
        <th class='w-150px'><?php commonModel::printOrderLink('begin', $orderBy, $vars, $lang->makeup->begin);?></th>
        <th class='w-150px'><?php commonModel::printOrderLink('begin', $orderBy, $vars, $lang->makeup->end);?></th>
        <th><?php echo $lang->makeup->desc;?></th>
        <th class='w-150px'><?php echo $lang->actions;?></th>
      </tr>
    </thead>
    <?php foreach($makeupList as $makeup):?>
    <tr>
      <td><?php echo $makeup->id;?></td>
      <td><?php echo zget($users, $makeup->createdBy);?></td>
      <td><?php echo zget($deptList, $makeup->dept);?></td>
      <td><?php echo zget($this->lang->makeup->typeList, $makeup->type);?></td>
      <td><?php echo $makeup->begin . ' ' . $makeup->start;?></td>
      <td><?php echo $makeup->end . ' ' . $makeup->finish;?></td>
      <td title='<?php echo $makeup->desc?>'><?php echo $makeup->desc;?></td>
      <td>
        <?php echo html::a($this->createLink('oa.makeup', 'view', "id={$makeup->id}"), $lang->view, "data-toggle='modal'");?>
        <?php echo html::a($this->createLink('oa.makeup', 'review', "id={$makeup->id}&status=pass"), $lang->makeup->review, "data-status='pass' data-toggle='modal' data-width=800");?>
      </td>
    </tr>
    <?php endforeach;?>
  </table>
</div>
<?php endif;?>
<?php if($type == 'overtime'):?>
<div class='panel'>
  <table class='table table-data table-hover text-center table-fixed tablesorter' id='overtimeTable'>
    <thead>
      <tr class='text-center'>
        <?php $vars = "type={$type}&orderBy=%s";?>
        <th class='w-80px'><?php commonModel::printOrderLink('id', $orderBy, $vars, $lang->overtime->id);?></th>
        <th class='w-80px'><?php commonModel::printOrderLink('createdBy', $orderBy, $vars, $lang->overtime->createdBy);?></th>
        <th class='w-80px'><?php echo $lang->user->dept;?></th>
        <th class='w-80px'><?php commonModel::printOrderLink('type', $orderBy, $vars, $lang->overtime->type);?></th>
        <th class='w-150px'><?php commonModel::printOrderLink('begin', $orderBy, $vars, $lang->overtime->begin);?></th>
        <th class='w-150px'><?php commonModel::printOrderLink('begin', $orderBy, $vars, $lang->overtime->end);?></th>
        <th><?php echo $lang->overtime->desc;?></th>
        <th class='w-80px'><?php commonModel::printOrderLink('status', $orderBy, $vars, $lang->overtime->status);?></th>
        <th class='w-80px'><?php commonModel::printOrderLink('reviewedBy', $orderBy, $vars, $lang->overtime->reviewedBy);?></th>
        <th class='w-150px'><?php echo $lang->actions;?></th>
      </tr>
    </thead>
    <?php foreach($overtimeList as $overtime):?>
    <tr>
      <td><?php echo $overtime->id;?></td>
      <td><?php echo zget($users, $overtime->createdBy);?></td>
      <td><?php echo zget($deptList, $overtime->dept);?></td>
      <td><?php echo zget($this->lang->overtime->typeList, $overtime->type);?></td>
      <td><?php echo $overtime->begin . ' ' . $overtime->start;?></td>
      <td><?php echo $overtime->end . ' ' . $overtime->finish;?></td>
      <td title='<?php echo $overtime->desc?>'><?php echo $overtime->desc;?></td>
      <td class='overtime-<?php echo $overtime->status?>'><?php echo zget($this->lang->overtime->statusList, $overtime->status);?></td>
      <td><?php echo zget($users, $overtime->reviewedBy);?></td>
      <td>
        <?php echo html::a($this->createLink('oa.overtime', 'review', "id={$overtime->id}"), $lang->overtime->review, "data-status='reject' data-toggle='modal' data-width=800");?>
      </td>
    </tr>
    <?php endforeach;?>
  </table>
</div>
<?php endif;?>
<?php if($type == 'lieu'):?>
<div class='panel'>
  <table class='table table-data table-hover text-center table-fixed tablesorter' id='lieuTable'>
    <thead>
      <tr class='text-center'>
        <?php $vars = "type={$type}&orderBy=%s";?>
        <th class='w-80px'><?php commonModel::printOrderLink('id', $orderBy, $vars, $lang->lieu->id);?></th>
        <th class='w-80px'><?php commonModel::printOrderLink('createdBy', $orderBy, $vars, $lang->lieu->createdBy);?></th>
        <th class='w-80px'><?php echo $lang->user->dept;?></th>
        <th class='w-150px'><?php commonModel::printOrderLink('begin', $orderBy, $vars, $lang->lieu->begin);?></th>
        <th class='w-150px'><?php commonModel::printOrderLink('begin', $orderBy, $vars, $lang->lieu->end);?></th>
        <th><?php echo $lang->lieu->desc;?></th>
        <th class='w-80px'><?php commonModel::printOrderLink('status', $orderBy, $vars, $lang->lieu->status);?></th>
        <th class='w-80px'><?php commonModel::printOrderLink('reviewedBy', $orderBy, $vars, $lang->lieu->reviewedBy);?></th>
        <th class='w-150px'><?php echo $lang->actions;?></th>
      </tr>
    </thead>
    <?php foreach($lieuList as $lieu):?>
    <tr>
      <td><?php echo $lieu->id;?></td>
      <td><?php echo zget($users, $lieu->createdBy);?></td>
      <td><?php echo zget($deptList, $lieu->dept);?></td>
      <td><?php echo $lieu->begin . ' ' . $lieu->start;?></td>
      <td><?php echo $lieu->end . ' ' . $lieu->finish;?></td>
      <td title='<?php echo $lieu->desc?>'><?php echo $lieu->desc;?></td>
      <td class='lieu-<?php echo $lieu->status?>'><?php echo zget($this->lang->lieu->statusList, $lieu->status);?></td>
      <td><?php echo zget($users, $lieu->reviewedBy);?></td>
      <td>
        <?php echo html::a($this->createLink('oa.lieu', 'review', "id={$lieu->id}"), $lang->lieu->review, "data-status='pass' data-toggle='modal' data-width=800");?>
      </td>
    </tr>
    <?php endforeach;?>
  </table>
</div>
<?php endif;?>
<?php if($type == 'refund'):?>
<div class='panel'>
  <table class='table table-hover table-striped table-sorter table-data table-fixed text-center'>
    <thead>
      <tr class='text-center'>
        <th class='w-50px'><?php echo $lang->refund->id;?></th>
        <th class='w-150px'><?php echo $lang->refund->name;?></th>
        <th class='w-100px'><?php echo $lang->refund->category;?></th>
        <th class='w-100px'><?php echo $lang->refund->createdBy;?></th>
        <th class='w-100px'><?php echo $lang->refund->money;?></th>
        <th class='w-100px'><?php echo $lang->refund->date;?></th>
        <th class='w-100px'><?php echo $lang->refund->status;?></th>
        <th><?php echo $lang->refund->desc;?></th>
        <th class='w-80px'><?php echo $lang->actions;?></th>
      </tr>
    </thead>
    <?php foreach($refunds as $refund):?>
    <tr>
      <td><?php echo $refund->id;?></td>
      <td class='text-left'><?php echo $refund->name;?></td>
      <td title='<?php echo zget($categories, $refund->category, '');?>'><?php echo zget($categories, $refund->category, '');?></td>
      <td><?php echo zget($users, $refund->createdBy);?></td>
      <td class='text-right'><?php echo zget($currencySign, $refund->currency) . $refund->money;?></td>
      <td><?php echo $refund->date;?></td>
      <td><?php echo zget($lang->refund->statusList, $refund->status);?></td>
      <td><?php echo $refund->desc?></td>
      <td><?php echo html::a($this->createLink('oa.refund', 'review', "refundID={$refund->id}"), $lang->refund->review, "data-toggle='modal' data-width=800")?></td>
    </tr>
    <?php endforeach;?>
  </table>
</div>
<?php endif;?>
<?php include '../../common/view/footer.html.php';?>
