<?php 
class Cust_order extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('cust_order_model');
		//$this->output->enable_profiler(TRUE);// for Information generation at bottom of page
	}

	public function index()
	{
		$this->load->view('pages/fusionchart');
	}

	public function add_edit($id = "")
	{
		$order['orders'] = $this->database_model->displayall('customer_order_tbl');
		$customer['customers'] = $this->database_model->displayall('customer_tbl');
		$data = array_merge($order,$customer);
		
		if(!empty($id))
		{
			$custorder['customer'] = $this->database_model->selectBy_where_row('*','customer_tbl',"cust_id=".$id);
			$custorder['order'] = $this->database_model->selectBy_where_result('*','customer_order_tbl',"cust_id=".$id);
			$data1 = array_merge($custorder,$data);
			if($custorder)
			{
				$this->load->view('pages/customer_order_form',$data1);
			}
		}
		else
		{
			$this->load->view('pages/customer_order_form.php',$data);
		}
		if(isset($_REQUEST['submit']))
		{
			if(!empty($id))
			{
				unset($_POST['submit']);
				//echo "<pre>";print_r($_POST);exit;
				$edit = $this->item_model->insert_update($_POST,$id);
				if($edit)
				{
					redirect('item/add_edit');
				}
			}
			else
			{
				unset($_POST['submit']);
				
				//echo "<pre>";print_r($_POST);exit;
				$insert = $this->cust_order_model->insert_update($_POST);
				if($insert)
				{
					redirect('cust_order/add_edit');
					//redirect(base_url('BarcodeGenerator/index/'.$bar['bar']));
				}
			}
		}
	}

	public function delete($id)
	{
		$delete = $this->database_model->delete('customer_tbl','cust_id',$id);
		$delete = $this->database_model->delete('customer_order_tbl','cust_id',$id);
		//unlink('assets/barcode/'.$id.'-code128.png');
		if($delete)
		{
			redirect('cust_order/add_edit');
		}
	}

	public function fetchbarcode()
	{
		$itemname = $this->database_model->selectBy_where_row('item_name,sell_price,item_qty','item_tbl',"item_barcode=".$_POST['barcode']);
		echo $itemname->item_name.":".$itemname->sell_price.":".$itemname->item_qty;
	}
}
?>

