<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="__URL__/addGood" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>返回</td>
<td>商品添加</td>
<td><input type="submit" value="确认提交"></td>
</tr>
<tr>
<td></td>
<td><input type="text" name="sort" value="商品类别"/></td>
<td></td>
</tr>

<tr>
<td></td>
<td><input type="text" name="name" value="商品名称"/></td>
<td></td>
</tr>
<tr>
<td></td>
<td><input type="text" name="price" value="商品价格"/></td>
<td></td>
</tr>
<tr>
<td></td>
<td><input type="text" name="type" value="商品类型"/></td>
<td></td>
</tr>

<tr>
<td></td>
<td><input type="text" name="num" value="商品数量"/></td>
<td></td>
</tr>
<tr>
<td rowspan="2">商品描述:<textarea name="exprs" cols="10" rows="10" ></textarea></td>
<td></td>
<td></td>
</tr>
<tr>

<td><input type="file"  name="image" value="添加商品图片"></td>
<td></td>
</tr>


</table>
</form>
</body>
</html>