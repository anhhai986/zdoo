<?php
/**
 * The resetmail view file of user module of RanZhi.
 *
 * @copyright   Copyright 2009-2018 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     user 
 * @version     $Id: resetmail.html.php 4029 2016-08-26 06:50:41Z liugang $
 * @link        http://www.ranzhi.org
 */
$mailContent = <<<EOT
<html>
<head>
<style type='text/css'>
body{
margin:0;
padding:0;
}
div{
    padding-left:30px;
}
</style>
</head>
<body>
<div style='padding-top:20px;height:60px;background:#fafafa;border-bottom:1px solid #ddd;font-size:18px;font-weight:bold'> 密码修改 </div>
<div style='margin-top:20px;'>
<p>
尊敬的成员 $account
<br>
您的注册信息：
<br>
安全邮箱:
$safeMail
<br>
请点击下面的链接，进行密码修改:
<br>
<a href='$resetURL' target='_blank'>$resetURL</a>
</p>
<p>重置码：$resetKey</p>
</div>
<div style='height:20px;border-bottom:1px solid #ddd;'></div>
<div style='line-height:160%;margin:20px 0 0 0 ;'>
$notice
</div>
</body>
</html>
EOT;
