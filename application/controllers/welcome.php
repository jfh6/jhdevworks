<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -  
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

    public function index()
    {

        $data['codeOfTheDay'] = $this->main->codeOfTheDay();
        $data['subcontent'] = "main/homeData";
        $this->load->view('template/site', $data);
    }
    public function contactForm()
    {
        $data['subcontent'] = "main/contact";
        $this->load->view('template/site', $data);
    }
    public function contact()
    {
        $this->load->library('email');
        $name = $this->input->post('fromName');
        $email = $this->input->post('fromEmail');
        $message = $this->input->post('message');
        $subject = $this->input->post('subject');
        
        $toEmailList = $this->main->toEmailList();
        for($i=0; $i<count($toEmailList); $i++){

        $this->email->from($email, $name);
        $this->email->to($toEmailList[$i]);

        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send())
        {
            $data['message'] = "template/contactSuccess";
            $data['subcontent'] = "main/contact";
        $this->load->view('template/site', $data);
        }else{
            $data['message'] = "template/contactError";
            $data['subcontent'] = "main/contact";
        $this->load->view('template/site', $data);
        }
        }
    }
}

    /* End of file welcome.php */
    /* Location: ./application/controllers/welcome.php */
