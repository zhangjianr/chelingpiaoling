<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function _initialize()
    {
        $this->News = M('News');
        $this->Product = M('Product');
        $this->Carousel = M('Carousel');
        $this->Productcenter = M('Productcenter');
    }

    public function index(){
        $data = $this->Product->order('ord')->select();
        $result = $this->Carousel->order('ord')->select();
        self::assign('product',$data);
        self::assign('carousel',$result);
	 	self::display();
    }

    public function contactAdd()
    {
    	if(IS_AJAX){
    		$data = I('post.');
    		$data['time'] = time();
			M('Piaoling')->add($data);
			echo json_encode(array('msg'=>1));
		}else{
			echo json_encode(array('msg'=>2));
		}
    }

    public function about()
    {
        self::display();
    }

    public function news(){
        $result = $this->News->order('id desc')->select();
        self::assign('arr',$result);
        self::display();
    }

    public function product(){
        $result = $this->Productcenter->order('id desc')->select();
        self::assign('arr',$result);
        self::display();
    }

    public function productDetails()
    {
        $where['id'] = I('get.id');
        $result = $this->Productcenter->where($where)->find();
        self::assign('arr',$result);
        self::display();
    }

    public function newsDetails()
    {
        $where['id'] = I('get.id');
        $result = $this->News->where($where)->find();
        self::assign('arr',$result);
        self::display();
    }

    public function trial(){
        self::display();
    }

    public function trialAdd()
    { 
        if(IS_AJAX){
            $_POST['time'] = time();
            M('Trial')->add(I('post.'));
            echo json_encode(array('msg'=>1));
        }else{
            echo json_encode(array('msg'=>2));
        } 
    }
}
