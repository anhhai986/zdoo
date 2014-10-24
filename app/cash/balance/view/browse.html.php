<?php 
/**
 * The browse view file of balance module of RanZhi.
 *
 * @copyright   Copyright 2013-2014 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     LGPL
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     balance 
 * @version     $Id$
 * @link        http://www.ranzhi.org
 */
?>
<?php include '../../../sys/common/view/header.modal.html.php';?>
<?php $vars = "depositor={$depositor}&orderBy=%s&recTotal={$pager->recTotal}&recPerPage={$pager->recPerPage}&pageID={$pager->pageID}";?>
  <?php echo html::a(inlink('create'), "<i class='icon-plus'></i> {$lang->balance->create}", "class='btn btn-primary btn-create loadInModal'")?>
  <table class='table table-hover table-striped tablesorter table-data' id='balanceList'>
    <tr>
      <th><?php commonModel::printOrderLink('depositor', $orderBy, $vars, $lang->balance->depositor);?></th>
      <th class='w-100px'><?php commonModel::printOrderLink('date', $orderBy, $vars, $lang->balance->date);?></th>
      <th><?php commonModel::printOrderLink('currency', $orderBy, $vars, $lang->balance->currency);?></th>
      <th><?php commonModel::printOrderLink('money', $orderBy, $vars, $lang->balance->money);?></th>
      <th class='text-center'><?php echo $lang->actions;?></th>
    </tr>
    <tbody>
      <?php foreach($balances as $balance):?>
      <tr>
        <td><?php echo $depositorList[$balance->depositor];?></td>
        <td><?php echo formatTime($balance->date, DT_DATE1);?></td>
        <td><?php echo zget($currencyList, $balance->currency);?></td>
        <td><?php echo $balance->money;?></td>
        <td class='text-center'>
          <?php echo html::a(inlink('edit', "balanceID={$balance->id}"), $lang->edit, "class='loadInModal'");?>
          <?php echo html::a(inlink('delete', "balanceID={$balance->id}"), $lang->delete, "class='deleter'");?>
        </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
<?php include '../../../sys/common/view/footer.modal.html.php';?>
