<?php
class ShopAction extends CommentAction{

function index(){
$shop=D('Shop');
//导入分页类
import('ORG.Util.Page');
    //获取总数
$count=$shop->count();
$page = new Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数
$show=$page->show();// 分页显示输出
$arr=$shop->limit($page->firstRow.','.$page->listRows)->select();
$this->assign('list',$arr);
$this->assign('show',$show);
$this->display();
	
}
function add(){
$this->display();
}
function doAdd(){
$shop=D('Shop');
$shop->create();
$num=$shop->add();
if($num){
$this->redirect('index');
}
else 
{
$this->error('添加失败');
}
}


function ser(){
$shop=D('Shop');
$data['shopname']=$_POST['shopname'];
$arr=$shop->where($data)->select();
$this->assign('list',$arr);
if($arr!=null){
$this->display('index');
}
else 
{
$this->error('查询失败');
}

}


function edit(){

	$shop=D('Shop');
	$data['id']=$_GET['id'];
	$arr=$shop->where($data)->find();
	$this->assign('data',$arr);
	$this->display();
}

function doEdit(){
$shop=D('Shop');
$data['id']=$_POST['id'];
$data['shopname']=$_POST['shopname'];
$data['shopaddr']=$_POST['shopaddr'];
$data['shoptel']=$_POST['shoptel'];
$count=$shop->save($data);
if($count>0){
$this->redirect('index');
}
else 
{
$this->error('注册失败');
}

}

}