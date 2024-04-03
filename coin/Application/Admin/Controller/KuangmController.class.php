<?php
namespace Admin\Controller;

class KuangmController extends AdminController
{

	public function __construct()
	{
		parent::__construct();
	}
	//矿机收益列表
	public function djprofit($username = null){
        $field=I('get.field');
        $search=I('get.search');
        $coinname=I('get.coinname');
        $st=I('get.st');
        $where = array();
        if ($field && $search) {
            $where['uid'] = M('User')->where(array($field => $search))->getField('id');
        }
	    $count = M('djprofit')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('djprofit')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        foreach ($list as $k => $v) {
            $userInfo=M('User')->Field('phone,is_agent')->where(array('id' => $v['uid']))->find();
            if ($userInfo) {
                $list[$k]['phone'] = $userInfo['phone'];
                $list[$k]['is_agent'] = $userInfo['is_agent'];
            }

        }
		$this->assign('list', $list);
		$this->assign('page', $show);
	    $this->display(); 
	}
	
	//矿机收益列表
	public function kjsylist(){
        $field=I('get.field');
        $search=I('get.search');
        $where = array();
        if ($field && $search) {
            $where['uid'] = M('User')->where(array($field => $search))->getField('id');
        }
	    $count = M('kjprofit')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('kjprofit')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        foreach ($list as $k => $v) {
            $userInfo=M('User')->Field('phone,is_agent')->where(array('id' => $v['uid']))->find();
            if ($userInfo) {
                $list[$k]['phone'] = $userInfo['phone'];
                $list[$k]['is_agent'] = $userInfo['is_agent'];
            }

        }
		$this->assign('list', $list);
		$this->assign('page', $show);
	    $this->display(); 
	}
	
	//启用会员矿机，停用会员矿机，删除会员矿机
	public function userkjStatus($id = NULL, $type = NULL, $mobile = 'User'){
	    if($mobile != "Admin"){
	       $this->error("参数错误"); 
	    }
	    $where['id'] = array('in', $id);
	    switch (strtolower($type)) {
	    case 1:
	        $result = M("kjorder")->where($where)->save(array('status'=>1));
			break;
		case 2:
	        $result = M("kjorder")->where($where)->save(array('status'=>2));
			break;
		case 3:
	        $result = M("kjorder")->where($where)->delete();
			break;
		default:
			$this->error('操作失败！');	
	    }
	    
	    if($result){
	        $this->success('操作成功！');
	    }else{
	        $this->error('操作失败！');
	    }
	}
	
	//会员过期的矿机列表
	public function overlist(){
	    $where['status'] = array('eq',3);
	    $count = M('kjorder')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('kjorder')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);
	    $this->display();
	}
	
	//会员运行中的矿机列表
	public function kjlist($username = null){
        $field=I('get.field');
        $search=I('get.search');
        $where = array();
        if ($field && $search) {
            $where['uid'] = M('User')->where(array($field => $search))->getField('id');
        }

	    $where['status'] = array('lt',3);
	    $count = M('kjorder')->where($where)->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('kjorder')->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        foreach ($list as $k => $v) {
            $userInfo=M('User')->Field('username,phone,is_agent')->where(array('id' => $v['uid']))->find();
            if ($userInfo) {
                $list[$k]['username'] = $userInfo['username'];
                $list[$k]['phone'] = $userInfo['phone'];
                $list[$k]['is_agent'] = $userInfo['is_agent'];
            }

        }
		$this->assign('list', $list);
		$this->assign('page', $show);
	    $this->display();
	}
	
	//启用，停用矿机，删除矿机
	public function kuangjStatus($id = NULL, $type = NULL, $mobile = 'User'){
	    if($mobile != "Admin"){
	       $this->error("参数错误"); 
	    }
	    $where['id'] = array('in', $id);
	    switch (strtolower($type)) {
	    case 1:
	        $result = M("kuangji")->where($where)->save(array('status'=>1));
			break;
		case 2:
	        $result = M("kuangji")->where($where)->save(array('status'=>2));
			break;
		case 3:
	        $result = M("kuangji")->where($where)->delete();
			break;
		default:
			$this->error('操作失败！');	
	    }
	    
	    if($result){
	        $this->success('操作成功！');
	    }else{
	        $this->error('操作失败！');
	    }
	}


    //矿机列表页面
	public function index(){
	    
	    $count = M('kuangji')->count();
		$Page = new \Think\Page($count, 15);
		$show = $Page->show();
		$list = M('kuangji')->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);
		$this->assign('page', $show);

		$this->display();
	}
	
	
	//添加矿机
	public function addkj(){
	    if($_POST){
	        $data['title'] = trim($_POST['title']);
	        $data['rtype'] = trim($_POST['rtype']);
	        $data['type'] = trim($_POST['type']);
	        if($data['type'] == 1){
	            $data['sharebl'] = 0;
	            $data['sharecode'] = '';
	        }elseif($data['type'] == 2){
	            $data['sharebl'] = trim($_POST['sharebl']);
	            $data['sharecode'] = creat_sharecode(13);
	        }
	        $data['content'] = trim($_POST['content']);
	        $data['imgs'] = trim($_POST['imgs']); 
	        $data['dayoutnum'] = trim($_POST['dayoutnum']); 
	        $data['max_dayoutnum'] = trim($_POST['max_dayoutnum']);
	        $data['outtype'] = trim($_POST['outtype']);
	        $data['outcoin'] = trim($_POST['outcoin']); 
	        $data['pricenum'] = trim($_POST['pricenum']); 
	        $data['pricecoin'] = trim($_POST['pricecoin']); 
	        $data['buymax'] = trim($_POST['buymax']); 
	        $data['cycle'] = trim($_POST['cycle']); 
	        $data['suanl'] = trim($_POST['suanl']); 
	        $data['allnum'] = trim($_POST['allnum']); 
	        $data['ycnum'] = trim($_POST['ycnum']); 
	        $data['jlnum'] = trim($_POST['jlnum']); 
	        $data['jlcoin'] = trim($_POST['jlcoin']); 
	        $data['status'] = trim($_POST['status']);
	        $data['buyask'] = trim($_POST['buyask']); 
	        $data['asknum'] = trim($_POST['asknum']);
	        $data['djout'] = trim($_POST['djout']); 
	        $data['output_yield'] = trim($_POST['output_yield']);
	        $data['service_charge'] = trim($_POST['service_charge']); 
	        if(trim($_POST['djout']) == 2){
	            $data['djday'] = trim($_POST['djday']); 
	        }else{
	            $data['djday'] = trim($_POST['djday']); 
	        }
	        
	        $data['addtime'] = date("Y-m-d H:i:s",time()); 
	        $kid = trim($_POST['kid']); 

	        if($kid > 0){
	            $result = M("kuangji")->where(array('id'=>$kid))->save($data);
	            $msg = "编辑成功";
	        }else{
	            $result = M("kuangji")->add($data);
	            $msg = "添加成功";
	        }
	        if($result){
	            $this->success($msg);
	        }else{
	            $this->error($msg);
	        }
	    }else{
	        $this->error("非法操作");exit();
	    }
	}
	
	
	
	//添加矿机页面
	public function addkuangj(){
	    $id = trim(I('get.id'));
	    $info = M("kuangji")->where(array('id'=>$id))->find();
	    if(!empty($info)){
	        /*$list = M("coin")->where(array('status'=>1))->field("id,name,title")->select();
	        $data = array();
	        foreach($list as $k=>$v){
	            $data[$k]['id'] = $v['id'];
	            $data[$k]['name'] = trim($v['name']);
	            $data[$k]['title'] = $v['title'];
	        }*/
            $data=[ // 手动配置
                ['name'=>'usdt'],
                ['name'=>'eth'],
                ['name'=>'btc']
            ];
	        $this->assign('coind',$data);
	        $this->assign('data',$info);
	    }else{
	        $list = M("coin")->where(array('status'=>1))->field("id,name,title")->select();
	        $data = array();
	        foreach($list as $k=>$v){
	            $data[$k]['id'] = $v['id']; 
	            $data[$k]['name'] = trim($v['name']); 
	            $data[$k]['title'] = $v['title']; 
	        }
	        $this->assign('coind',$data);
	    }
	    $this->display();
	}
	
	//上传矿机图片
	public function image(){
		$upload = new \Think\Upload();
		$upload->maxSize = 3145728;
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');
		$upload->rootPath = './Upload/public/';
		$upload->autoSub = false;
		$info = $upload->upload();
		foreach ($info as $k => $v) {
			$path = $v['savepath'] . $v['savename'];
			echo $path;
			exit();
		}
	}

    //添加矿机页面
    public function setKjUser(){
        if($_POST){
            $id = trim(I('post.id'));
            $content= trim(I('post.content'));
            if (!$id) {
                $this->error("参数丢失");exit();
            }
            if (!$content) {
                $this->error("uid 不能为空！");exit();
            }

            if(strpos($content,'；') !=false || strpos($content,':') !=false || strpos($content,'：') !=false ){

                $this->error("uid设置格式不正确！");exit();
            }


            $uids=explode(";",$content);
            $minfo = M("kuangji")->where(array('id'=>$id))->find();
            $stats=0;
            if (!empty($uids)) {
                foreach ($uids as $vo) {
                    $uinfo = M("user")->where(array('id' => $vo))->field("id")->find();
                    if (!$uinfo) {
                        $stats=1;
                        break;
                    }
                }
                if ( $stats == 1) {
                    $this->error("请检测Uid是否存在改用户");exit();
                }
                foreach ($uids as $vo) {
                    $uinfo = M("user")->where(array('id'=>$vo))->field("id,username,rzstatus")->find();

                    //建仓矿机订单数据
                    if($minfo['outtype'] == 1){//按产值收益
                        $odate['outnum'] = '';
                        $odate['outusdt'] = $minfo['dayoutnum'];
                    }elseif($minfo['outtype'] == 2){//按币量收益
                        $odate['outnum'] = $minfo['dayoutnum'];
                        $odate['outusdt'] = '';
                    }
                    $odate['djout'] = $minfo['djout'];
                    if($minfo['djout'] == 2){
                        $odate['djnum'] = $minfo['djday'];
                    }else{
                        $odate['djnum'] = $minfo['djday'];
                    }
                    $odate['kid'] = $minfo['id'];
                    $odate['type'] = 1;
                    $odate['sharebl'] = '';
                    $odate['sharebl'] = '';
                    $odate['uid'] = $vo;
                    $odate['username'] = $uinfo['username'];
                    $odate['kjtitle'] = $minfo['title'];
                    $odate['imgs'] = $minfo['imgs'];
                    $odate['status'] = 1;
                    $odate['cycle'] = $minfo['cycle'];
                    $odate['synum'] = $minfo['cycle'];
                    $odate['outtype'] = $minfo['outtype'];
                    $odate['outcoin'] = $minfo['outcoin'];
                    $odate['addtime'] = date("Y-m-d H:i:s",time());
                    $odate['endtime'] = date("Y-m-d H:i:s",(time() + 86400 * $minfo['cycle']));
                    $odate['intaddtime'] = time();
                    $odate['intendtime'] = time() + 86400 * $minfo['cycle'];
                    $adre = M("kjorder")->add($odate);
                }
            }
            $this->success("赠送矿机成功");exit();
        }else{
            $list = M("kuangji")->where(array('status'=>1))->field("id,title,status")->order('id desc')->select();
            $data = array();
            foreach($list as $k=>$v){
                $data[$k]['id'] = $v['id'];
                $data[$k]['title'] = trim($v['title']);
                $data[$k]['status'] = $v['status'];
            }
            $this->assign('kuangji',$data);
        }

        $this->display();
    }

}
?>