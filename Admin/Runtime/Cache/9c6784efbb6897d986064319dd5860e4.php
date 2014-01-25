<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="__URL__/doAdd">
  <table width="424" border="1" align="center">
    <tr>
      <td colspan="3" align="center">新增便利店</td>
    </tr>
    <tr>
      <td width="89" align="center">登录名:</td>
      <td width="168"><label for="textfield"></label>
      <input type="text" name="loginname" id="textfield" /></td>
      <td width="145">&nbsp;</td>
    </tr>
    <tr>
      <td align="center">用户名:</td>
      <td><label for="textfield2"></label>
      <input type="text" name="username" id="textfield2" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">便利店名：</td>
      <td><label for="textfield3"></label>
      <input type="text" name="shopname" id="textfield3" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">便利店地址：</td>
      <td><label for="textfield3"></label>
      <input type="text" name="shopaddr" id="textfield3" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">便利店电话：</td>
      <td><label for="textfield4"></label>
      <input type="text" name="shoptel" id="textfield4" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">密码：</td>
      <td><label for="textfield5"></label>
      <input type="text" name="password" id="textfield5" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">确认密码：</td>
      <td><label for="textfield6"></label>
      <input type="text" name="repassword" id="textfield6" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="center"><input type="submit" name="button" id="button" value="添加" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>