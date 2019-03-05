<?php 
class Order extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('order_model');
		//$this->output->enable_profiler(TRUE);// for Information generation at bottom of page
	}

	public function index($id="")
	{
		$order['orders'] = $this->dbase_model->selectBy_where_result('*','tbl_order',"confirm=1");
		$status['statuss'] = $this->dbase_model->order('*','tbl_status','s_id DESC');
		$package['packages'] = $this->dbase_model->displayall('tbl_package_details');
		$product['products'] = $this->dbase_model->displayall('tbl_product_details');
		$data = array_merge($order,$status,$package,$product);
		$this->load->view('pages/order_list',$data);
	}	

	public function confirm($id,$st="")
	{
		$order['order'] = $this->dbase_model->selectBy_where_row('*','tbl_order',"order_id=".$id);
		$package['packages'] = $this->dbase_model->selectBy_where_result('*','tbl_package_details',"order_id=".$id);
		$product['products'] = $this->dbase_model->selectBy_where_result('*','tbl_product_details',"order_id=".$id);
		$data = array_merge(array('st'=>$st),$order,$package,$product);
		$this->load->view('pages/confirm_order',$data);
		if(isset($_POST['submit']))
		{
			if($st!="")
			{
				unset($_POST['submit'],$_POST['shipping_same']);
				$update = $this->order_model->update($_POST,$id);
				//echo "<pre>";print_r($_POST);exit;
				if($update)
				{
					redirect('Order/index');		
				}
			}
			else
			{
				$data = $_POST;
				unset($data['weight'],$data['width'],$data['height'],$data['length'],$data['description'],$data['quantity'],$data['vogoods']);
				for($i=1;$i<=count($_POST['weight']);$i++)
	            {
	                unset($data["boxno".$i]);
	            }
				//echo "<pre>";print_r($_POST);exit;
				$update = $this->dbase_model->update('tbl_order',array('confirm'=>'1'),'order_id',$id);
				redirect('order/index');
			}
		}
	}

	public function add()
	{
		$this->load->view('pages/order_form');
		if(isset($_POST['submit']))
		{
			unset($_POST['submit'],$_POST['shipping_same']);
			//echo "<pre>";print_r($_POST);exit;
			$insert = $this->order_model->add($_POST);
			if($insert)
			{
				if($insert!='false')
				{
					redirect('Order/confirm/'.$insert,$insert);		
				}
			}

		}
	}

	public function delete($id)
	{
		$delete = $this->dbase_model->delete('tbl_order','order_id',$id);
		$delete = $this->dbase_model->delete('tbl_status','order_id',$id);
		$delete = $this->dbase_model->delete('tbl_product_details','order_id',$id);
		$delete = $this->dbase_model->delete('tbl_package_details','order_id',$id);
		if($delete)
		{
			redirect('order/index');
		}
	}

	public function printlabel($bar)
	{
		redirect(base_url('BarcodeGenerator/index/'.$bar));
	}
}
?>