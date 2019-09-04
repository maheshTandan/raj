<?php
class Index_controller extends CI_Controller {
	public function index()
	{
		$this->load->view('raj/index');
	}


	public function login()
	{
		$this->load->model('admin_models');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user','User Name','required');
		$this->form_validation->set_rules('pass','Password', 'required');
		if($this->form_validation->run() == false ){
			$this->load->view('raj/login');
		}else{
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			//$this->admin_models->show($user, $pass);

			if($result['data'] = $this->admin_models->show($user, $pass)){
				$result['event'] = $this->admin_models->events();
				$this->load->view('raj/keka', $result);
				
			}else{?>
					<script>
						alert('Username or Password does not match');
					</script>
			<?php 
					redirect('index_controller/login', 'refresh');
				}
		}
	}


	public function register()
	{
		$this->load->model('admin_models');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('mobile','Mobile');
		$this->form_validation->set_rules('date', 'Date of Birth', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[admin.email]');
		$this->form_validation->set_rules('pass','Password', 'required|matches[cpass]');
		$this->form_validation->set_rules('cpass', 'Confirm Password', 'required');

		$this->form_validation->set_message('is_unique', 'This %s is already registered');

		if($this->form_validation->run() == false ){
			$this->load->view('raj/register');
		}else{
			$name = $this->input->post('name');
			$mobile = $this->input->post('mobile');
			$date = $this->input->post('date');
			$email = $this->input->post('email');
			$pass = $this->input->post('pass');
			$cpass = $this->input->post('cpass');

			$this->admin_models->input($name, $mobile, $date, $email, $pass, $cpass);	

			?>
			<script>
				alert("Registration Successfull");
			</script>
			<?php 
			redirect('index_controller/login', 'refresh');
		}
	}
}