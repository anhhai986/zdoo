<?php 
/**
 * The close function view file of order module of RanZhi.
 *
 * @copyright   Copyright 2013-2014 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     LGPL
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     order 
 * @version     $Id$
 * @link        http://www.ranzhi.org
 */
?>
<?php include '../../../sys/common/view/header.modal.html.php';?>
<?php include '../../../sys/common/view/kindeditor.html.php';?>
<form method='post' id='ajaxModalForm' action='<?php echo $this->createLink('order', 'close', "orderID=$orderID")?>'>
  <table class='table table-form'>
    <tr>
      <th class='w-100px'><?php echo $lang->order->closedReason?></th>
      <td><?php echo html::select('closedReason', $lang->order->closedReasonList, '', "class='form-control'")?></td>
    </tr>
    <tr>
      <th><?php echo $lang->order->closedNote;?></th>
      <td><?php echo html::textarea('closedNote');?></td>
    </tr>
    <tr>
      <th></th>
      <td><?php echo html::submitButton();?></td>
    </tr>
  </table>
</form>
<?php include '../../../sys/common/view/footer.modal.html.php';?>
