<?php 
class Item extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('item_model');
		//$this->output->enable_profiler(TRUE);// for Information generation at bottom of page
	}

	public function index()
	{
		$this->load->view('pages/fusionchart');
	}

	public function add_edit($id = "")
	{
		if(!empty($id))
		{
			$item['item'] = $this->database_model->selectBy_where_row('*','item_tbl',"item_id=".$id);
			$item['items'] = $this->database_model->displayall('item_tbl');
			if($item)
			{
				$this->load->view('pages/item_form',$item);
			}
		}
		else
		{
			$barcode = $this->database_model->order('*','item_tbl','item_id DESC',1);
			if(!$barcode)
			{
				$bar['bar'] = 987654321;	
			}
			else
			{
				$bar['bar'] = $barcode->item_barcode-10023;
			}
			$item['items'] = $this->database_model->displayall('item_tbl');
			$data = array_merge($item,$bar);
			$this->load->view('pages/item_form',$data);	
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
				$insert = $this->item_model->insert_update($_POST);
				if($insert)
				{
					redirect('item/add_edit');
					//redirect(base_url('BarcodeGenerator/index/'.$bar['bar']));
				}
			}
		}
	}

	public function delete($id)
	{
		$delete = $this->database_model->delete('item_tbl','item_id',$id);
		//unlink('assets/barcode/'.$id.'-code128.png');
		if($delete)
		{
			redirect('item/add_edit');
		}
	}
}
?>