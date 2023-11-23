<?php
namespace Home\Controller;

class IndexController extends HomeController
{
	protected function _initialize()
	{
		parent::_initialize();
		$allow_action = array("index","gglist","gginfo","getIcon");
		if (!in_array(ACTION_NAME,$allow_action)) {
			$this->error("非法操作！");
		}
	}

    //网站首页面
	public function index(){
        $language=$_GET[C('VAR_LANGUAGE')];// 获取语言检测
        $list = M("ctmarket")->where(array('status'=>1))->field("coinname,id,logo")->select();
        $this->assign("market",$list);
        $content = M('content')->where(['status' => 1])->order('id desc')->select();
        $title_arr = array_column($content, 'title');
        $title_string  = json_encode($title_arr);
        $this->assign("notice",$content);
        $this->assign("language",$language);
		$this->display();
	}
    
    //公告中心
    public function gglist(){
        
        $list = M("content")->where(array('status'=>1))->select();

        $this->assign("list",$list);
        $this->display();
    }
    //公告详情
    public function gginfo($id = null){
        
        if (checkstr($id)) {
			$this->error(L('您输入的信息有误'));
		}
        
        $info = M("content")->where(array('id'=>$id))->find();
        if(empty($info)){
            redirect('/Index/gglist.html');
        }
        $this->assign("info",$info);
        $this->display();
    }
    
    //红包
	public function getIcon()
	{
	    $uid = userid();
	   // if($uid >= 1){
    //         redirect('/Index/getIcon.html');
	   // }
		$this->display();
	}

}
?>