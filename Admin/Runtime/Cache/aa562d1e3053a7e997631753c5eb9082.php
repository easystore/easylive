<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="__URL__/setShop">
  <table width="424" border="1" align="center">
    <tr>
      <td colspan="4" align="center">选择便利店</td>
    </tr>
    <tr>
      <td width="89" align="center"><label for="radio"></label></td>
      <td width="168" align="center"><label for="textfield">便利店名称</label></td>
      <td width="145" align="center">便利店地址</td>
      <td width="145" align="center">便利店电话</td>
    </tr>
    <?php if(is_array($list)): foreach($list as $key=>$b): ?><tr>
      <td align="center"><input type="radio" name="radio" id="radio" value="<?php echo ($b["shopname"]); ?>" /></td>
      <td>&nbsp;<?php echo ($b["shopname"]); ?></td>
      <td>&nbsp;<?php echo ($b["shopaddr"]); ?></td>
      <td>&nbsp;<?php echo ($b["shoptel"]); ?></td>
    </tr><?php endforeach; endif; ?>
    <tr>
      <td align="center"><input type="hidden" name="id"  value="<?php echo ($id["id"]); ?>" /></td>
      <td><input type="submit"  value="分配" /></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</form>
</body>
</html>