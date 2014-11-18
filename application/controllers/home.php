<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('categories_model');
        $this->load->model('news_model');
        $this->load->model('settings_model');
    }

    public function index() {
        $data['latest_news'] = $this->news_model->latest_news();
        $data['categories_count'] = $this->news_model->categories_count();
        $data['settings'] = $this->settings_model->get_settings();

        $this->load->view('front_end/index', $data);
    }

    public function page() {
        $this->load->library("pagination");

        $config = array();
        $config["base_url"] = base_url() . "home/page";
        $config["total_rows"] = $this->news_model->get_news_count();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;
        $config['use_page_numbers'] = TRUE;

        $config['query_string_segment'] = 'page';

        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = 'البداية';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'الأخير &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'التالي &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&larr; السابق';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</a></li>';

        $config['cur_tag_open'] = '<li class="selected"><span class="skew25">';
        $config['cur_tag_close'] = '</span></li>';

        $config['num_tag_open'] = '<li><a class="skew25" href="#">';
        $config['num_tag_close'] = '</a></li>';

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['all_news'] = $this->news_model->get_news($config["per_page"], $page);
        $data["pageNumber"] = $this->pagination->create_links();
        
        $data['settings'] = $this->settings_model->get_settings();
        $data['categories_count'] = $this->news_model->categories_count();
        $this->load->view('front_end/page', $data);
    }

    public function post() {
        $postId = $this->input->get('id', TRUE);
        empty($postId) ? redirect(base_url() . 'home') : '';
        
        $this->news_model->postView($postId);
        $data['postInfo'] = $this->news_model->get_news_info($postId);
        $data['categories_count'] = $this->news_model->categories_count();
        $data['settings'] = $this->settings_model->get_settings();
        $data['postComment'] = $this->news_model->getPostComment($postId);
        $this->load->view('front_end/post', $data);
        
    }

    public function about_us() {
        $data['settings'] = $this->settings_model->get_settings();
        $this->load->view('front_end/about_us',$data);
    }

    public function contact() {
        $data['settings'] = $this->settings_model->get_settings();
        $this->load->view('front_end/contact',$data);
    }
  
    public function privacy() {
        $data['settings'] = $this->settings_model->get_settings();
        $this->load->view('front_end/privacy',$data);
    }

    public function agenda() {
        $this->load->library("pagination");

        $config = array();
        $config["base_url"] = base_url() . "home/agenda";
        $config["total_rows"] = $this->news_model->get_agenda_count();
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;
        $config['use_page_numbers'] = TRUE;

        $config['query_string_segment'] = 'page';

        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = 'البداية';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'الأخير &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'التالي &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&larr; السابق';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</a></li>';

        $config['cur_tag_open'] = '<li class="selected"><span class="skew25">';
        $config['cur_tag_close'] = '</span></li>';

        $config['num_tag_open'] = '<li><a class="skew25" href="#">';
        $config['num_tag_close'] = '</a></li>';

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['all_agenda'] = $this->news_model->all_agenda($config["per_page"],$page);
        $data["pageNumber"] = $this->pagination->create_links();

//        print_r($data);
        $data['categories_count'] = $this->news_model->categories_count();
        $data['settings'] = $this->settings_model->get_settings();
        $this->load->view('front_end/agenda',$data);
    }

    function search() {
        $text = trim($this->input->post('t'));
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "home/search";
        $config["total_rows"] = $this->news_model->search_count($text);
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;
        $config['use_page_numbers'] = TRUE;

        $config['query_string_segment'] = 'search';

        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = 'البداية';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'الأخير &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'التالي &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&larr; السابق';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</a></li>';

        $config['cur_tag_open'] = '<li class="selected"><span class="skew25">';
        $config['cur_tag_close'] = '</span></li>';

        $config['num_tag_open'] = '<li><a class="skew25" href="#">';
        $config['num_tag_close'] = '</a></li>';

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['searchResults'] = $this->news_model->search($text, $config['per_page'], $page);
        $data["pageNumber"] = $this->pagination->create_links();

        $data['settings'] = $this->settings_model->get_settings();
        $data['categories_count'] = $this->news_model->categories_count();
        $this->load->view('front_end/search', $data);
    }
    
    public function doContactMsg() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $msg = $this->input->post('message');
        $comp_email = $this->input->post('comp_email');

        if ($name && $email && $msg && $comp_email) {
            $data = array('name' => $name, 'email' => $email, 'msg' => $msg);
            $query = $this->news_model->insertContactMsg($data);

            if ($query === TRUE) {
                $message = wordwrap($msg, 70);
                mail($comp_email, 'رسالة استفسار من ' . $name, $message, "From: $email\n");
                redirect(base_url() . 'home/');
            } else {
            }
        }
    }
    
    public function doComment() {
        $submit = $this->input->post('doComment');
        $name = $this->input->post('name');
        $postId = $this->input->post('postId');
        $email = $this->input->post('email');
        $message = $this->input->post('message');


        $this->form_validation->set_rules('postId', 'رقم الخبر', 'required|trim');
        $this->form_validation->set_rules('name', 'الإسم', 'required|trim|max_length[60]');
        $this->form_validation->set_rules('email', 'البريد الإلكتروني', 'required|trim|valid_email|max_length[60]');
        $this->form_validation->set_rules('message', 'التعليق', 'required|trim|max_length[300]');


        if ($this->form_validation->run() == FALSE) {
            redirect(base_url() . 'home/post?id=' . $postId);
        } else {
            $data = array('news_id' => $postId, 'name' => $name, 'email' => $email, 'comment' => $message);
            $query = $this->news_model->insertComment($data);
            redirect(base_url() . 'home/post?id=' . $postId);
        }
    }

}

/* End of file Home.php */