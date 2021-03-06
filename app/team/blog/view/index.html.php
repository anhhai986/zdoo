<?php
/**
 * The index view file of blog module of RanZhi.
 *
 * @copyright   Copyright 2009-2018 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Xiying Guan <guanxiying@xirangit.com>
 * @package     blog
 * @version     $Id: index.html.php 4029 2016-08-26 06:50:41Z liugang $
 * @link        http://www.ranzhi.org
 */
?>
<?php 
include 'header.html.php';
$path = $category ? array_keys($category->pathNames) : array();
if(!empty($path))         js::set('path',  $path);
if(!empty($category->id)) js::set('categoryID', $category->id );
?>
<div class='col-xs-10' id='articles'>
  <section>
    <?php foreach($articles as $article):?>
    <?php $url = inlink('view', "id=$article->id");?>
    <div class="card">
      <h4 class='card-heading'><?php echo html::a($url, $article->title);?></h4>
      <div class='card-content text-muted'>
        <?php echo helper::substr(strip_tags($article->content), 200, '...');?>
        <?php if(!empty($article->image)):?>
          <div class='media pull-right'>
            <?php
            $title = $article->image->primary->title ? $article->image->primary->title : $article->title;
            echo html::a($url, html::image($article->image->primary->smallURL, "title='{$title}' class='thumbnail'" ));
            ?>
          </div>
        <?php endif;?>
      </div>
      <div class="card-actions text-muted">
        <span data-toggle='tooltip' title='<?php printf($lang->article->lblAddedDate, $article->createdDate);?>'>
        <i class="icon-time"></i> <?php echo formatTime($article->createdDate, DT_DATE1);?>
        </span>
        &nbsp; <span data-toggle='tooltip' title='<?php printf($lang->article->lblAuthor, $users[$article->author]);?>'><i class="icon-user"></i> <?php echo $users[$article->author];?></span>
        &nbsp; <span data-toggle='tooltip' title='<?php printf($lang->article->lblViews, $article->views);?>'><i class="icon-eye-open"></i> <?php echo $article->views;?></span>
        <span class='pull-right'>
          <?php commonModel::printLink('blog', 'edit', "id={$article->id}&type=blog", $lang->edit);?>
          <?php commonModel::printLink('blog', 'delete', "id={$article->id}", $lang->delete, "class='deleter'");?>
        </span>
      </div>
    </div>
    <?php endforeach;?>
  </section>
  <footer class='clearfix'><?php $pager->show('right');?></footer>
</div>
<?php include 'footer.html.php';?>
