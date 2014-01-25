<?php
class CityAction extends Action{

function contry(){
$m=M('City');
$arr=$m->select();
$this->assign('list',$arr);
$this->display();
}

}