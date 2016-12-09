<?php
namespace Home\Controller;
class UserController extends \Think\Controller {
	protected $model = null;
	public function __construct() {
		parent::__construct();
		$this->model = D('user');
	}

	public function login() {
		if(IS_POST) {
			if(!$this->checkv()) {
				echo "验证码不正确";exit;
			}

			$username = I('username');
			if(!($user = $this->model->where("username='" . $username . "'")->find())) {
				echo "用户名不存在";exit;
			}

			if($user['passwd'] !== $this->model->enc(I('passwd').$user['salt'])) {
				echo "密码不正确";exit;
			}

			cookie('name', $user['username']);
			cookie('passwd', $user['passwd']);
			cookie('cc',$this->model->enc($user['username'] . $user['passwd']));
			$this->assign('cookie',cookie);

			$this->redirect('/');
		}
		$this->display('user_login');
	}

	public function reg() {
		if(IS_POST) {
			if(!$this->model->create()) {
				echo $this->model->geterror();
			} else {
				$_POST['salt'] = $this->rand();
				$_POST['passwd'] = $this->enc($_POST['passwd'].$_POST['salt']);
				$_POST['regtime'] = time();
				$this->model->add($_POST);
			}
		}
		$this->display('user_login');
	}

	public function logout() {
		cookie('name', null);
		cookie('passwd', null);
		cookie('cc',null);

		$this->redirect('/');
	}

	public function vcode() {
		$Verify = new \Think\Verify();
		$Verify->entry();
	}

	public function checkv() {
		$Verify = new \Think\Verify();
		return $Verify->check(I('vcode'));
	}

}