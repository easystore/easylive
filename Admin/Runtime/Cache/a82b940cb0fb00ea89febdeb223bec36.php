<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javascript" src="__PUBLIC__/js/choose.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/each.js"></script>
</head>

<body>
<table width="916" border="1" align="center">
  <tr>
    <td width="128" height="443" valign="top"><table width="128" height="210" border="1">
      <tr>
        <td width="122" height="36" align="center"><a href="__APP__/Index/exits">退出</a>&nbsp;</td>
      </tr>
      <tr>
        <td height="42" align="center"><a href="__APP__/Book/index">订单查看</a></td>
      </tr>
      <tr>
        <td height="40" align="center">商品信息维护</td>
      </tr>
      <tr>
        <td height="41" align="center"><a href="__APP__/Admin/manager">管理员维护</a></td>
      </tr>
      <tr>
        <td height="39" align="center"><a href="__APP__/Shop/index">便利店维护</a></td>
      </tr>
    </table></td>
    <td width="778" valign="top">
    <table width="781" border="1">
      <tr>
        <td width="137" height="40">&nbsp;</td>
        <td width="392" align="center">商品列表</td>
        <td width="238">
          <form id="form1" name="form1" method="post" action="__URL__/ser">
            商品：
              <label for="textfield"></label>
            <input type="text" name="name" id="textfield" width="80"/>
            <input type="submit" name="button" id="button" value="查询" />
          </form></td>
      </tr>
      <tr>
        <td height="28" align="center"> <input type="checkbox" name="checkbox" id="check"  />全选&nbsp;&nbsp;
          <a href="__URL__/add"> 添加商品</a></td>
        <td><button onclick="checkme()">删除商品</button>&nbsp;</td>
        <td align="center">
        <select name="px" id="px" onblur="px();">
        <option>排序</option>
        <option value="0">自动</option>
        <option value="1">商品名</option>
        <option value="2">商品价格</option>
        </select>
        </td>
      </tr>
      <tr>
        <td height="358" colspan="3" valign="top"><table width="1338" border="1">
          <tr>
            <td width="75" align="center">选择</td>
            <td width="110" align="center">商品名</td>
            <td width="172" align="center">商品价格</td>
            <td width="395" align="center">商品说明</td>
            <td width="138" align="center">商品规格</td>
            <td width="138" align="center">商品销量</td>
            <td width="138" align="center">商品总量</td>
            <td width="138" align="center">操作</td>
            <td align="center">修改商品信息</td>
          </tr>
           <?php if(is_array($list)): foreach($list as $key=>$g): ?><tr>
            <td align="center"><input name="checkbox1" type="checkbox"  value="<?php echo ($g["id"]); ?>" />&nbsp;</td>
            <td align="center">&nbsp;<?php echo ($g["name"]); ?></td>
            <td align="center">&nbsp;<?php echo ($g["price"]); ?></td>
            <td align="center">&nbsp;<?php echo ($g["exprs"]); ?></td>
            <td align="center">&nbsp;<?php echo ($g["sort"]); ?>克</td>
            <td align="center">&nbsp;<?php echo ($g["sellnum"]); ?></td>
            <td align="center">&nbsp;<?php echo ($g["num"]); ?></td>
            <td align="center">上架/下架</td>
            <td align="center"><a href="__URL__/edit/id/<?php echo ($g["id"]); ?>">修改</a></td>
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