<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<table width="916" border="1" align="center">
  <tr>
    <td width="128" height="443" valign="top"><table width="128" height="210" border="1">
      <tr>
        <td width="122" height="36">&nbsp;</td>
      </tr>
      <tr>
        <td height="42" align="center"><a href="__APP__/Book/index">订单查看</a></td>
      </tr>
      <tr>
        <td height="40" align="center"><a href="__APP__/Goods/index">商品信息维护</a></td>
      </tr>
      <tr>
        <td height="41" align="center"><a href="__APP__/Admin/manager">管理员维护</a></td>
      </tr>
      <tr>
        <td height="39" align="center">便利店维护</td>
      </tr>
    </table></td>
    <td width="778" valign="top">
    <table width="781" border="1">
      <tr>
        <td width="137" height="40">&nbsp;</td>
        <td width="392" align="center">便利店列表</td>
        <td width="238">
          <form id="form1" name="form1" method="post" action="__URL__/ser">
            名称：
            <label for="textfield"></label>
            <input type="text" name="shopname" id="textfield" width="80"/>
            <input type="submit" name="button" id="button" value="查询" />
          </form></td>
      </tr>
      <tr>
        <td height="28" align="center"><a href="__URL__/add">添加便利店</a></td>
        <td>&nbsp;</td>
        <td align="center"><a href="">排序</a></td>
      </tr>
      <tr>
        <td height="358" colspan="3" valign="top"><table width="1054" border="1">
          <tr>
            <td width="140" align="center">便利店名</td>
            <td width="141" align="center">登录名</td>
            <td width="265" align="center">便利店地址</td>
            <td width="206" align="center">便利店电话</td>
            <td width="138" align="center">状态</td>
            <td width="138" align="center">编辑</td>
          </tr>
          <?php if(is_array($list)): foreach($list as $key=>$s): ?><tr>
            <td align="center"><?php echo ($s["shopname"]); ?></td>
            <td align="center">&nbsp;<?php echo ($s["loginname"]); ?></td>
            <td align="center">&nbsp;<?php echo ($s["shopaddr"]); ?></td>
            <td align="center">&nbsp;<?php echo ($s["shoptel"]); ?></td>
            <?php if($s["status"] == 1): ?><td align="center">开业中</td>
            <?php else: ?>
            <td align="center">休业中</td><?php endif; ?>
            <td align="center"><a href="__URL__/edit/id/<?php echo ($s["id"]); ?>">编辑</a></td>
          </tr><?php endforeach; endif; ?>
        </table>
        <?php echo ($show); ?>
        </td>
        </tr>
    </table>
    
    </td>
  </tr>
</table>
</body>
</html>