<?php
class BookAction extends CommentAction{

function index(){
	$book=D('Book');
	//导入分页类
    import('ORG.Util.Page');
    //获取总数
    $count=$book->count();
    $page = new Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
   
    $show=$page->show();// 分页显示输出
	$arr=$book->limit($page->firstRow.','.$page->listRows)->select();
	$this->assign('show',$show);
	$this->assign('list',$arr);
	$this->display();
}

function ser(){
$book=D('Book');
$data['booknum']=$_POST['booknum'];
$arr=$book->where($data)->select();
$this->assign("list",$arr);
if($arr!=null){
$this->display('index');
}
else 
{
$this->error('查询失败');
}

}

function choose(){
$shop=D('Shop');
$arr=$shop->select();
$this->assign('list',$arr);
$this->assign('id',$_GET['id']);
$this->display();


}

function setShop(){
$book=D('Book');
$where['id']=$_POST['id'];
$where['shopname']=$_POST['radio'];
$num=$book->save($where);
if($num){
$this->redirect('index');
}
else 
{
$this->error('分配出错');
}

}


}
