<?php 
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function _initialize(){
		if( !isset($_SESSION['mid']) || !isset($_SESSION['membername'])) {
			$this->redirect('Home/Login/index');
		}
		if(C('V.USER_STATUS_TITLE')==null) {
			get_memberstatus(true);
		}
	}
}