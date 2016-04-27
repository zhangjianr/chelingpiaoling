<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function _initialize(){
		if(!session('uid')){
			self::redirect('Login/index');
		}

		$this->News = M('News');
		$this->Trial = M('Trial');
		$this->Product = M('Product');
		$this->Carousel = M('Carousel');
		$this->Piaoling = M('Piaoling');
		$this->Productcenters = M('Productcenter');
	}

	public function index(){
		self::display();
	}

	public function desktop(){
		self::display();
	}

	public function carousel(){
		$count      = $this->Carousel->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $this->Carousel->limit($Page->firstRow.','.$Page->listRows)->order("id desc")->select();
		self::assign('list',$list);// 赋值数据集
		self::assign('page',$show);// 赋值分页输出
		self::assign('count',$count);
		self::display();
	}

	public function carouselAdd(){
		self::display();
	}

	public function carouselSave(){
		$path = getcwd().'/Public/lib/webuploader/0.1.5/server/upload/';
		$img = I('post.carousel');
		if(file_exists($path.$img)){
			$pathinfo = pathinfo($img);
			$fileName = md5(time().$img).'.'.$pathinfo['extension'];
			if(rename($path.$img,$path.$fileName)){
				$data['carousel'] = 'lib/webuploader/0.1.5/server/upload/'.$fileName;
				$this->Carousel->add($data);
				echo json_encode(array('msg'=>1));
			}else{
				echo json_encode(array('msg'=>2));
			}
		}else{
			echo json_encode(array('msg'=>2));
		}
	}

	public function carouselDel()
	{
		$where['id'] = I('post.id');
		$result = $this->Carousel->where($where)->delete();
		if($result){
			unlink(getcwd().'/Public/'.I('post.carousel'));
			echo json_encode(array('msg' => 1));
		}else{
			echo json_encode(array('msg' => 2));
		}
	}

	public function carouselOrd()
	{
		$array = explode(',',I('post.data'));
		array_pop($array);
		$count = count($array);
		$num = $count/2;
		$n = 0;
		for ($i=0; $i < $num; $i++) { 
			$data['ord'] = $array[$n];
			$n++;
			$where['id'] = $array[$n];
			$this->Carousel->where($where)->save($data);
			$n++;
		}
		echo json_encode(array('msg' => 1));
	}

	public function product(){
		$count      = $this->Product->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $this->Product->limit($Page->firstRow.','.$Page->listRows)->order("id desc")->select();
		self::assign('list',$list);// 赋值数据集
		self::assign('page',$show);// 赋值分页输出
		self::assign('count',$count);
		self::display();
	}

	public function productAdd()
	{
		self::display();
	}

	public function productSave()
	{
		$path = getcwd().'/Public/lib/webuploader/0.1.5/server/upload/';
		$img = I('post.product');
		if(file_exists($path.$img)){
			$pathinfo = pathinfo($img);
			$fileName = md5(time().$img).'.'.$pathinfo['extension'];
			if(rename($path.$img,$path.$fileName)){
				$data['product'] = 'lib/webuploader/0.1.5/server/upload/'.$fileName;
				$this->Product->add($data);
				echo json_encode(array('msg'=>1));
			}else{
				echo json_encode(array('msg'=>2));
			}
		}else{
			echo json_encode(array('msg'=>2));
		}
	}

	public function productDel()
	{
		$where['id'] = I('post.id');
		$result = $this->Product->where($where)->delete();
		if($result){
			unlink(getcwd().'/Public/'.I('post.product'));
			echo json_encode(array('msg' => 1));
		}else{
			echo json_encode(array('msg' => 2));
		}
	}

	public function productOrd()
	{
		$array = explode(',',I('post.data'));
		array_pop($array);
		$count = count($array);
		$num = $count/2;
		$n = 0;
		for ($i=0; $i < $num; $i++) { 
			$data['ord'] = $array[$n];
			$n++;
			$where['id'] = $array[$n];
			$this->Product->where($where)->save($data);
			$n++;
		}
		echo json_encode(array('msg' => 1));
	}

	public function contact()
	{
		$count      = $this->Piaoling->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $this->Piaoling->limit($Page->firstRow.','.$Page->listRows)->order("id desc")->select();
		self::assign('list',$list);// 赋值数据集
		self::assign('page',$show);// 赋值分页输出
		self::assign('count',$count);
		self::display();
	}

	public function contactDel()
	{
		$where['id'] = I('post.id');
		$result = $this->Piaoling->where($where)->delete();
		if($result){
			echo json_encode(array('msg' => 1));
		}else{
			echo json_encode(array('msg' => 2));
		}
	}

	public function productCenter()
	{
		$count      = $this->Productcenters->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $this->Productcenters->limit($Page->firstRow.','.$Page->listRows)->order("id desc")->select();
		self::assign('list',$list);// 赋值数据集
		self::assign('page',$show);// 赋值分页输出
		self::assign('count',$count);
		self::display();
	}

	public function productCenterAdd()
	{
		self::display();
	}

	public function productCenterSave()
	{
		$path = getcwd().'/Public/lib/webuploader/0.1.5/server/upload/';
		$img = I('post.image');
		if(file_exists($path.$img)){
			$pathinfo = pathinfo($img);
			$fileName = md5(time().$img).'.'.$pathinfo['extension'];
			if(rename($path.$img,$path.$fileName)){
				$_POST['image'] = 'lib/webuploader/0.1.5/server/upload/'.$fileName;
				$_POST['time'] = time();
				$this->Productcenters->add(I('post.'));
				echo json_encode(array('msg'=>1));
			}else{
				echo json_encode(array('msg'=>2));
			}
		}else{
			echo json_encode(array('msg'=>2));
		}
	}

	public function productCenterEdit()
	{
		$where['id'] = I('get.id');
		$result = $this->Productcenters->where($where)->find();
		self::assign('arr',$result);
		self::display();
	}

	public function productCenterUpda()
	{
		$where['id'] = I('post.id');
		unset($_POST['id']);
		$_POST['time'] = time();
		if(I('post.image')){
			$path = getcwd().'/Public/lib/webuploader/0.1.5/server/upload/';
			$img = I('post.image');			
			if(file_exists($path.$img)){
				$pathinfo = pathinfo($img);
				$fileName = md5(time().$img).'.'.$pathinfo['extension'];

				$_POST['image'] = 'lib/webuploader/0.1.5/server/upload/'.$fileName;
				if(strcmp(I('post.image'),I('post.delimg'))){
					unlink(getcwd().'/Public/'.I('post.delimg'));
					unset($_POST['delimg']);
					rename($path.$img,$path.$fileName);
				}
				$re = $this->Productcenters->where($where)->save(I('post.'));
				if($re){
					echo json_encode(array('msg'=>1));
				}else{
					echo json_encode(array('msg'=>3));
				}	
			}else{
				echo json_encode(array('msg'=>2));
			}
		}else{
			unset($_POST['delimg']);
			$re = $this->Productcenters->where($where)->save(I('post.'));
			if($re){
				echo json_encode(array('msg'=>1));
			}else{
				echo json_encode(array('msg'=>3));
			}
		}
	}

	public function productCenterDel()
	{
		$where['id'] = I('post.id');
		$result = $this->Productcenters->where($where)->delete();
		if($result){
			unlink(getcwd().'/Public/'.I('post.image'));
			echo json_encode(array('msg' => 1));
		}else{
			echo json_encode(array('msg' => 2));
		}
	}

	public function news()
	{
		$count      = $this->News->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $this->News->limit($Page->firstRow.','.$Page->listRows)->order("id desc")->select();
		self::assign('list',$list);// 赋值数据集
		self::assign('page',$show);// 赋值分页输出
		self::assign('count',$count);
		self::display();
	}

	public function newsAdd()
	{
		self::display();
	}

	public function newsSave()
	{
		$path = getcwd().'/Public/lib/webuploader/0.1.5/server/upload/';
		$img = I('post.image');
		if(file_exists($path.$img)){
			$pathinfo = pathinfo($img);
			$fileName = md5(time().$img).'.'.$pathinfo['extension'];
			if(rename($path.$img,$path.$fileName)){
				$_POST['image'] = 'lib/webuploader/0.1.5/server/upload/'.$fileName;
				$_POST['time'] = time();
				$this->News->add(I('post.'));
				echo json_encode(array('msg'=>1));
			}else{
				echo json_encode(array('msg'=>2));
			}
		}else{
			echo json_encode(array('msg'=>2));
		}
	}

	public function newsEdit()
	{
		$where['id'] = I('get.id');
		$result = $this->News->where($where)->find();
		self::assign('arr',$result);
		self::display();
	}

	public function newsUpda()
	{
		$where['id'] = I('post.id');
		unset($_POST['id']);
		$_POST['time'] = time();
		if(I('post.image')){
			$path = getcwd().'/Public/lib/webuploader/0.1.5/server/upload/';
			$img = I('post.image');
			if(file_exists($path.$img)){
				$pathinfo = pathinfo($img);
				$fileName = md5(time().$img).'.'.$pathinfo['extension'];
				$_POST['image'] = 'lib/webuploader/0.1.5/server/upload/'.$fileName;
				if(strcmp(I('post.image'),I('post.delimg'))){
					unlink(getcwd().'/Public/'.I('post.delimg'));
					unset($_POST['delimg']);
					rename($path.$img,$path.$fileName);
				}
				$re = $this->News->where($where)->save(I('post.'));
				if($re){
					echo json_encode(array('msg'=>1));
				}else{
					echo json_encode(array('msg'=>3));
				}	
			}else{
				echo json_encode(array('msg'=>2));
			}
		}else{
			unset($_POST['delimg']);
			$re = $this->News->where($where)->save(I('post.'));
			if($re){
				echo json_encode(array('msg'=>1));
			}else{
				echo json_encode(array('msg'=>3));
			}
		}
	}

	public function newsDel()
	{
		$where['id'] = I('post.id');
		$result = $this->News->where($where)->delete();
		if($result){
			unlink(getcwd().'/Public/'.I('post.image'));
			echo json_encode(array('msg' => 1));
		}else{
			echo json_encode(array('msg' => 2));
		}
	}

	public function trial()
	{
		$count      = $this->Trial->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $this->Trial->limit($Page->firstRow.','.$Page->listRows)->order("id desc")->select();
		self::assign('list',$list);// 赋值数据集
		self::assign('page',$show);// 赋值分页输出
		self::assign('count',$count);
		self::display();
	}

	public function trialAdopt()
	{
		$where['id'] = I('post.id');
		$result = $this->Trial->where($where)->save(array('status'=>1));
		if($result){
			echo json_encode(array('msg' => 1));
		}else{
			echo json_encode(array('msg' => 2));
		}
	}

	public function trialRefuse()
	{
		$where['id'] = I('post.id');
		$result = $this->Trial->where($where)->save(array('status'=>2));
		if($result){
			echo json_encode(array('msg' => 1));
		}else{
			echo json_encode(array('msg' => 2));
		}
	}

	public function trialDel()
	{
		$where['id'] = I('post.id');
		$result = $this->Trial->where($where)->delete();
		if($result){
			echo json_encode(array('msg' => 1));
		}else{
			echo json_encode(array('msg' => 2));
		}
	}

}
