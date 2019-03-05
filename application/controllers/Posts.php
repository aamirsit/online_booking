<?php 
class Posts extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
		//$this->output->enable_profiler(TRUE);// for Information generation at bottom of page
	}

	public function index()
	{
		$data['posts'] = $this->post_model->displayall('posts','id');
		echo "<pre>";print_r($data);exit;
		$this->load->view('pages/view_post', $data);
	}

	public function add_edit($id = "")
	{
		if(!empty($id))
		{
			$data['edit'] = $this->post_model->getrows($id);
			if($data)
			{
				$this->load->view('pages/add_post',$data);
			}
		}
		else
		{
			$this->load->view('pages/add_post');	
		}
		if(isset($_REQUEST['submit']))
		{
			if(!empty($id))
			{
				unset($_POST['submit']);
				$edit = $this->post_model->insert_update($_POST,$id);
				if($edit)
				{
					redirect('posts/index');
				}
			}
			else
			{
				unset($_POST['submit']);
				//echo "<pre>";print_r($_POST);exit;
				$insert = $this->post_model->insert_update($_POST);
				if($insert)
				{
					redirect('posts/index');
				}
			}
		}
	}

	public function delete($id)
	{
		$delete = $this->post_model->delete($id);
		if($delete)
		{
			redirect('posts/index');
		}
	}
}
?>