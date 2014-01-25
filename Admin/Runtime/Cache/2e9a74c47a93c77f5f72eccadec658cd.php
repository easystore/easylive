<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form action="__URL__/doEdit" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="546" border="1" align="center">
    <tr>
      <td colspan="4" align="center">修改商品信息</td>
    </tr>
    <tr>
      <td width="11" align="center"><label for="radio"></label></td>
      <td width="103" align="center">商品名：</td>
      <td width="342" align="left"><label for="price"></label>
      <input type="text" name="name" id="textfield2" value="<?php echo ($data["name"]); ?>"/></td>
      <td width="62" align="center"><input type="hidden" name="id"  value="<?php echo ($data["id"]); ?>"  /></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="center">商品图片：</td>
      <td><img src="__PUBLIC__/Uploads/<?php echo ($data["filename"]); ?>" alt="" width="50" height="50"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="center">商品图片：</td>
      <td><label for="photo"></label>
      <input type="file" name="photo" id="photo" /><label for="exprs"></label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="center">商品说明：</td>
      <td><input type="text" name="exprs" id="exprs" value="<?php echo ($data["exprs"]); ?>"  /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="center">商品原价：</td>
      <td><label for="rule"></label>
      <input type="text" name="price" id="textfield3" value="<?php echo ($data["price"]); ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="center">商品原价：</td>
      <td><label for="rule"></label>
      <input type="text" name="bookprice" id="textfield3" value="<?php echo ($data["bookprice"]); ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="center">商品规格：</td>
      <td><label for="totalnum"></label>
      <input type="text" name="sort" id="textfield4" value="<?php echo ($data["sort"]); ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="center">商品总量：</td>
      <td><label for="textfield5"></label>
      <input type="text" name="num" id="textfield5" value="<?php echo ($data["num"]); ?>" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td align="center"><input type="submit" name="button" id="button" value="添加" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>