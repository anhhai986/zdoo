<?php
/**
 * The editlib view file of doc module of RanZhi.
 *
 * @copyright   Copyright 2013-2014 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     LGPL
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     doc
 * @version     $Id: editlib.html.php 975 2010-07-29 03:30:25Z jajacn@126.com $
 * @link        http://www.ranzhi.org
 */
?>
<?php include '../../../sys/common/view/header.modal.html.php'; ?>
<form method='post' id='ajaxModalForm' action='<?php echo inlink('editLib', "libID=$libID")?>'>
  <div class='form-group'>
    <label for="name"><?php echo $lang->doc->libName;?></label>
    <?php echo html::input('name', $libName, "class='form-control'");?>
  </div>
  <?php echo html::submitButton();?>
</form>
<?php include '../../../sys/common/view/footer.modal.html.php'; ?>
