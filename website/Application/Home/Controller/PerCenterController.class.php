<?php 
namespace Home\Controller;
use Think\Controller;
class PerCenterController extends Controller{
	
	public function perInfo(){
		$perInfo = D('user_info');
        
        //判断是否提交的空数据
		if(!empty($_POST) && $_POST['user_name']!=null && $_POST['user_introduce']!=null && $_POST['user_tel']!=null && $_POST['user_addr']!=null){
            //处理上传的图片
            if($_FILES['user_pic']['error']<4){
                //上传文件配置
            	$cfg = array(
            		// 设置附件上传类型 
            		'exts'=>array('jpg', 'gif', 'png', 'jpeg'),
            		'rootPath' => './Application/', //保存根路径
            		'savePath'      =>  './Public/Uploads/', //保存路径
            		'subName'  => '用户头像', //子目录创建方式
            		'replace'  => true, //存在同名是否覆盖
            	);
            	$user_id = 15;//$_session['user_id'];
            	$up = new \Think\Upload($cfg);
            	$up->saveName = $user_id.$z['ext'];
                $z = $up -> uploadOne($_FILES['user_photo']);
                $_POST['user_photo'] =  $z['savename'];
                if($_FILES['user_photo']['name']==null) {
                 $_POST['user_photo'] = $_POST['pho_addr'];
                }
                unset($_POST['pho_addr']);
            }
			$user['user_id'] = 15;//$_session['user_id'];
			$perInfo -> where($user) -> save($_POST);
            $this -> redirect('perInfo', ' ', 2, '信息保存成功');
		} else {
			//展示表单
			//session_start();
            if(!empty($_POST)){
                $this -> redirect('perInfo', ' ', 2, '请将信息填写完整');
            }
			$user['user_id'] = 15;//session['user_id']
			$info = $perInfo -> where($user) -> select();
			$this -> assign('info', $info);
		    $this -> display();
		}
	}


	public function perManage(){
		$book_manage = D('book_details');
        //收集表单信息
        if(!empty($_POST) && $_POST['book_name']!=null && $_POST['book_introduce']!=null && $_POST['book_cost']!=null && $_FILES['book_img']['name']!=null){
            //处理上传的图片
            if($_FILES['book_img']['error']<4){
            	$cfg = array(
            		// 设置图片上传类型 
            		'exts'     => array('jpg', 'gif', 'png', 'jpeg'),
            		'rootPath' => './Application/', //保存根路径
            		'savePath'      =>  './Public/Uploads/', //保存路径
            		'subName'  => '书籍封面', //子目录创建方式
            		'replace'  => true, //存在同名是否覆盖
            	);
            	$up = new \Think\Upload($cfg);
            }
            $_POST['book_data'] = date("Y-m-d");
            //$_POST['book_cat'] = 1;
            $_POST['book_owner'] = 6; //session['user_id']
            $z = $book_manage -> add($_POST);   //返回当前图书的id
            $up->saveName = $z.$i['ext'];     //用图书的id给图片命名
            $i = $up -> uploadOne($_FILES['book_img']);
            $_POST['book_img'] = $i['savename'];
            $x = $book_manage ->where("book_id=$z") -> field('book_img') -> save($_POST);
            unset($_POST);
            //exit();
            if($x){
            	$this -> redirect('perManage', ' ', 2, '书籍添加成功');
            } else{
            	$this -> redirect('perManage', ' ', 2, '书籍添加失败');
            }
        }else {
        //展示表单信息
            if(!empty($_POST)){
                $this -> redirect('perManage', ' ', 2, '请将信息填写完整');
            }
            $user_id = 6;   //session['user_id'];
            $info = $book_manage->where("book_owner=$user_id")->select();
            //dump($info);
            $this -> assign('info', $info);
		    $this->display();
		}
	}


    public function Modify(){
    	//修改表单
    	$book_manage = D('book_details');
    	if(!empty($_POST) && $_POST['book_name'] && $_POST['book_introduce'] && $_POST['book_cost']!=null){
    		$book_id['book_id'] = $_POST['book_id'];
            $z = $book_manage -> where($book_id) -> save($_POST);
            //dump($z);
    		//exit();
            if($z){
               $this -> redirect('perManage', ' ', 2, '书籍信息修改成功');
            } else{
               $this -> redirect('perManage', ' ', 2, '书籍信息修改失败');
            } 
    	}else {
            $this -> redirect('perManage', ' ', 2, '请将信息填写完整');
        }
    }


    public function Delete(){
        //删除表单
        $book_manage = D('book_details');
        if(!empty($_GET)){
            $book_id['book_id'] = $_GET['book_id'];
            $z = $book_manage -> where($book_id) -> delete();
            if($z){
               $this -> redirect('perManage', ' ', 2, '书籍删除成功');
            } else{
               $this -> redirect('perManage', ' ', 2, '书籍删除失败');
            } 
        }
    }

	public function perMsg(){
		$this->display();
	}

	public function perOrder(){
        //订单展示
        $order_list = D('order_list');
        if(!empty($_GET)){
            $id['order_id'] = $_GET['order_id'];
            $z = $order_list -> where($id) -> delete();
            if($z){
               $this -> redirect('perOrder', ' ', 2, '订单删除成功');
            } else{
               $this -> redirect('perOrder', ' ', 2, '订单删除失败');
            } 
        }
        //我已分享的订单
        $id['sharer_id'] = 6; //$_session['user_id']
        
        $result = $order_list->where($id)->join('user_info on user_info.user_id = order_list.borrower_id')->join('book_details on book_details.book_id = order_list.book_id')->select();
        // dump($result);
        $this -> assign('result',$result);
		$this->display();
	}

	public function perShare(){
        //展示表单
        
        //我的分享展示
        $book_details = D('book_details');
        $id['book_owner'] = 6; //$_session['user_id']
        $book_share = $book_details -> where($id) -> select();
        //dump($book_share);
        $this -> assign('book_share',$book_share);

        //我的借阅展示
        $order_list = D('order_list');
        $id['borrower_id'] = 6; //$_session['user_id']
        $book_id = $order_list -> where($id) -> field('book_id') -> select();
        //dump($book_id);
        //转成一维数组
        $book = array_column($book_id, "book_id");
        $z['book_id'] = array('in', $book);
        $book_borrower = $order_list -> table('book_details') -> where($z) -> select();
        $this -> assign('book_borrower',$book_borrower);
        

        //我的收藏展示
        $collect_list = D('collect_list');
        $id['user_id'] = 6; //$_session['user_id']
        $book_id = $collect_list -> where($id) -> field('book_id') -> select();

        //转成一维数组
        $book = array_column($book_id, "book_id");
        $z['book_id'] = array('in', $book);
        $book_collect = $collect_list -> table('book_details') -> where($z) -> select();
        $this -> assign('book_collect',$book_collect);

		$this->display();
	}
}


