<?php 
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function _initialize(){
		if( !isset($_SESSION['uid']) ) {
			$this->redirect('Admin/Login/index');
		}
		if(C('V.USER_STATUS_TITLE')==null) {
			get_memberstatus(true);
		}
	}
}