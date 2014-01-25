<?php
class AdminAction extends CommentAction{

function manager(){
	$m=M('Admin');
	//导入分页类
    import('ORG.Util.Page');
    //获取总数
    $count=$m->count();
    $page = new Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
   
    $show=$page->show();// 分页显示输出
	$arr=$m->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
 	$this->assign('show',$show);
	$this->assign('list',$arr);
	$this->display();
}

function adds(){
$this->display();
}

function register(){
	$m=D('Admin');
	if(!$m->create()){
	$this->error($m->getError());
	}
	$count=$m->add();

	if($count){
	$this->redirect('manager');
	}
	else 
	{
	$this->error('添加失败!');
	}
}

function del(){
$m=M('Admin');
$id=$_GET['id'];
$data['id']=$id;
$count=$m->where($data)->delete();

if($count>0){
	$this->redirect('manager');
	}
	else 
	{
	$this->error('删除失败!');
	}

}

function sear(){
$m=M('Admin');
$data['userName']=$_POST['username'];
$arr=$m->where($data)->select();
$this->assign('list',$arr);

if($arr!=null){
	$this->display('manager');
	}
	else 
	{
	$this->error('查询失败!');
	}

}
}