<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javascript" src="__PUBLIC__/js/choose.js"></script>
</head>

<body>
<table width="916" border="1" align="center">
  <tr>
    <td width="128" height="443" valign="top"><table width="128" height="210" border="1">
      <tr>
        <td width="122" height="36" align="center"><a href="__APP__/Index/exits">退出</a>&nbsp;</td>
      </tr>
      <tr>
        <td height="42" align="center">订单查看</td>
      </tr>
      <tr>
        <td height="40" align="center"><a href="__APP__/Goods/index">商品信息维护</a></td>
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
        <td width="392" align="center">订单列表</td>
        <td width="238">
          <form id="form1" name="form1" method="post" action="__URL__/ser">
            订单号：
              <label for="textfield"></label>
            <input type="text" name="booknum" id="textfield" width="80"/>
            <input type="submit" name="button" id="button" value="查询" />
          </form></td>
      </tr>
      <tr>
        <td height="28" align="center"> <input type="checkbox" name="checkbox" id="check"  value="1" />
        全选&nbsp;&nbsp;<a href="#">导出订单</a></td>
        <td>&nbsp;</td>
        <td align="center"><a href="">排序</a></td>
      </tr>
      <tr>
        <td height="358" colspan="3" valign="top"><table width="1483" border="1">
          <tr>
            <td width="74" align="center">选择</td>
            <td width="108" align="center">订单号</td>
            <td width="169" align="center">下单时间</td>
            <td width="195" align="center">订单价格</td>
            <td width="175" align="center">订单来源</td>
            <td width="183" align="center">便利店</td>
            <td width="243" align="center">付款方式</td>
            <td width="139" align="center">订单状态</td>
            <td width="139" align="center">操作</td>
          </tr>
          <?php if(is_array($list)): foreach($list as $key=>$b): ?><tr>
            <td align="center"><input name="checkbox1" type="checkbox"  />&nbsp;</td>
            <td align="center">&nbsp;<?php echo ($b["booknum"]); ?></td>
            <td align="center">&nbsp;<?php echo (date('Y年 m月 d日 H时i分s秒',$b["bookdate"])); ?></td>
            <td align="center">&nbsp;<?php echo ($b["bookprice"]); ?></td>
            <td align="center">&nbsp;<?php echo ($b["bookfrom"]); ?></td>
            <td align="center">&nbsp;<?php echo ($b["shopname"]); ?></td>
            <?php if($b["paytype"] == 1): ?><td align="center">店面付款</td>
            <?php else: ?>
             <td align="center"></td><?php endif; ?>
            <?php if($b["bookstatus"] == 1): ?><td align="center">未配送</td>
            <?php else: ?>
             <td align="center"></td><?php endif; ?>
            <td align="center"><a href="__URL__/choose/id/<?php echo ($b["id"]); ?>">便利店分配</a></td>
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