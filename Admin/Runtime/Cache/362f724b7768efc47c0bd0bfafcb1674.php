<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="__URL__/doEdit">
  <table width="424" border="1" align="center">
    <tr>
      <td colspan="3" align="center">编辑便利店</td>
    </tr>
    <tr>
      <td width="89" align="center">便利店名称:</td>
      <td width="168"><label for="textfield"></label>
      <input type="text" name="shopname" id="textfield" value="<?php echo ($data["shopname"]); ?>" /></td>
      <td width="145"><input type="hidden" name="id" id="textfield" value="<?php echo ($data["id"]); ?>" /></td>
    </tr>
    <tr>
      <td align="center">便利店地址：</td>
      <td><label for="textfield3"></label>
      <input type="text" name="shopaddr" id="textfield3" value="<?php echo ($data["shopaddr"]); ?>"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">便利店电话：</td>
      <td><label for="textfield4"></label>
      <input type="text" name="shoptel" id="textfield4" value="<?php echo ($data["shoptel"]); ?>"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">注册日期：</td>
      <td><label for="textfield6"><?php echo (date('Y 年  m 月  d 日  H 时 i 分 s 秒',$data["date"])); ?></label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="center"><input type="submit" name="button" id="button" value="编辑" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>