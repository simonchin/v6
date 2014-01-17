<?php

//专门管理文章
class NewsControl extends Control{
	//在show.html网页显示数据
	function show(){
		$db = M("news"); //操作news表，可以进行增删改查
		//分页
		//查询总条数
		$count=$db->count();
		//分页对象
		$page=new Page($count,2); //利用PHP框架(一共$count条，每页显示2条)
		$this->assign("page",$page->show());
		$data=$db->where($page->limit())->all(); //每页显示指定数量的条数
		//$data = $db->all(); //把表中所有数据都拿过来(查)
		$this->assign("news",$data); //在页面中取$news数据
		$this->display();
	}
	//向文章表new表添加数据
	function add(){
		if(IS_POST){
			$db = M('news'); 
			if($db->add()){ //（增）
				$this->success("发表成功",'show');//成功3秒跳转到show方法
			}else{
				$this->error("发表失败",'show');//失败3秒跳转回去
			}
		}else{
			$this->display();
		}
		
	}
}