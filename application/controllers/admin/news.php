<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->auth->is_logged_in();
        $this->load->model('categories_model');
        $this->load->model('news_model');
    }
    
    public function index() {
        $result['news_count'] = $this->news_model->get_news_count();
        $result['comments_count'] = $this->news_model->get_comments_count();
        $result['messages_count'] = $this->news_model->get_messages_count();
        $result['comments'] = $this->news_model->latest_comments(10);
        $result['news'] = $this->news_model->news_most_viewed('views' , 10);
        $this->load->view('admin/index', $result);
    }
    
    function add_news() {
        $result['categories'] = $this->categories_model->get_categories_names_ids();
        $this->load->view('admin/add_news', $result);
    }

    function do_add_news() {
        $this->form_validation->set_rules('category_id', 'التصنيف', 'required|trim');
        $this->form_validation->set_rules('news_title', 'عنوان الخبر', 'required|trim');
        $this->form_validation->set_rules('news_description', 'نص الخبر', 'required|trim');
        $this->form_validation->set_rules('news_picture', 'صورة الخبر', 'required|trim|max_length[100]');

        if ($this->form_validation->run() == FALSE) {
            $errorMsg = validation_errors();
            echo json_encode(array('status' => false, 'msg' => htmlentities($errorMsg)));
        } else {
            $new_pic = $this->input->post('news_picture');
            if ($new_pic != NULL) {
                $file_element_name = 'news_picture';
                $imageName = $this->uploadImage($file_element_name, 'news');
                $this->generateThumb(300, 177, 'news');
                @unlink($_FILES[$file_element_name]);
            }
            $data = array(
                'category_id' => $this->input->post('category_id'),
                'news_title' => $this->input->post('news_title'),
                'news_description' => $this->input->post('news_description'),
                'news_picture' => ($imageName != 'false') ? $imageName : ''
            );

            $result = $this->news_model->do_add_news($data);
            if ($result) {
                echo json_encode(array('status' => true, 'msg' => 'تم إضافة الخبر بنجاح'));
            } else {
                if ($imageName != NULL) {
                    unlink('./uploads/news/' . $imageName);
                    unlink('./uploads/news/thumbs/' . $imageName);
                }
                echo json_encode(array('status' => false, 'msg' => htmlentities('هناك خطأ في البيانات المدخلة')));
            }
        }
    }
    
    function manage_news() {
        $result['categories'] = $this->categories_model->get_categories_names_ids();
        $this->load->view('admin/manage_news', $result);
    }

    function get_all_news() {
        $data['i_search'] = isset($_POST['sSearch']) ? $_POST['sSearch'] : '';
        $data['i_start_index'] = $this->input->post('iDisplayStart');
        $data['i_end_index'] = $this->input->post('iDisplayLength');
        $data['category_id'] = $this->input->post('category_id');
        $records_number = $this->news_model->get_news_count($data);
        $result = $this->news_model->get_all_news($data);

        $row = array();
        foreach ($result as $value) {
            $record = array();
            $options = '';
            $record[] = '<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />';
            $img = '<div class="span12">
                <div class="thumbnail">
                    <div class="item">
                        <a class="fancybox-button" data-rel="fancybox-button" title="'.$value['news_title'].'" href="' . base_url() . "uploads/news/" . $value["news_picture"] . '">
                            <div class="zoom">
                                <img width="100px" height="100px" src="' . base_url() . "uploads/news/thumbs/" . $value["news_picture"] . '" alt="Photo">
                                <div class="zoom-icon"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>';
            $record[] = $img;
            $record[] = substr($value['news_title'], 0, 100) . '...';
            $record[] = substr($value['news_description'], 0, 200) . '...';
            $record[] = $value['category_name'];
            $record[] = $value['publish_date'];
            $record[] = $value['views'];

            $options .= '<a href="update_news/' . $value['news_id'] . '" class="btn btn-small purple" title="تعديل"><i class="icon-edit"></i></a> ';
            $options .= '<a href="manage_comments/' . $value['news_id'] . '" class="btn btn-small btn-info" title="التعليقات"><i class="icon-comment"></i></a> ';
            $options .= '<a href="#myModal2" onclick="setTarget(' . $value['news_id'] . ',this);return false;" title="حـذف" class="btn btn-small btn-danger" data-toggle="modal"><i class="icon-trash"></i></a>';
            $record[] = $options;
            array_push($row, $record);
        }
        $output = $this->createOutput(intval($_POST['sEcho']), $records_number, $row);
        echo json_encode($output);
    }
    
    function delete_news() {
        $news_id = $this->input->post('news_id');
        $result = $this->news_model->delete_news($news_id);
        if ($result)
            echo json_encode(array('status' => true, 'msg' => "تم حذف الخبر بنجاح"));
        else
            echo json_encode(array('status' => false, 'msg' => 'هناك خطأ في البيانات المدخلة'));
    }
    
    function update_news($news_id = NULL) {
        $result['categories'] = $this->categories_model->get_categories_names_ids();
        $result['data'] = $this->news_model->get_news_info($news_id);
        $this->load->view('admin/update_news', $result);
    }

    public function do_update_news() {
        $this->form_validation->set_rules('category_id', 'التصنيف', 'required|trim');
        $this->form_validation->set_rules('news_title', 'عنوان الخبر', 'required|trim');
        $this->form_validation->set_rules('news_description', 'نص الخبر', 'required|trim');
        $this->form_validation->set_rules('news_picture', 'صورة الخبر', 'trim|max_length[100]|callback_check_news_picture[' . $this->input->post('old_picture') . ']');

        if ($this->form_validation->run() == FALSE) {
            $errorMsg = validation_errors();
            echo json_encode(array('status' => false, 'msg' => htmlentities($errorMsg)));
        } else {
            $new_pic = $this->input->post('news_picture');
            if ($new_pic != NULL) {
                $file_element_name = 'news_picture';
                $imageName = $this->uploadImage($file_element_name, 'news');
                $this->generateThumb(300, 177, 'news');
            }

            $news_id = $this->input->post('news_id');
            $data['category_id'] = $this->input->post('category_id');
            $data['news_title'] = $this->input->post('news_title');
            $data['news_description'] = $this->input->post('news_description');
            if ($new_pic == NULL)
                $data['news_picture'] = $this->input->post('old_picture');
            else
                $data['news_picture'] = ($imageName != 'false') ? $imageName : '';

            $result = $this->news_model->update_news($news_id, $data);
            if ($result) {
                if ($new_pic != NULL) {
                    unlink('./uploads/news/' . $this->input->post('old_picture'));
                    unlink('./uploads/news/thumbs/' . $this->input->post('old_picture'));
                }
                echo json_encode(array('status' => true, 'msg' => 'تم تعديل بيانات الخبر بنجاح'));
            } else {
                unlink('./uploads/news/' . $imageName);
                unlink('./uploads/news/thumbs/' . $imageName);
                echo json_encode(array('status' => false, 'msg' => htmlentities('هناك خطأ في البيانات المدخلة')));
            }
        }
    }
    
    function manage_comments($news_id = NULL) {
        $data['news_id'] = $news_id;
        $this->load->view('admin/manage_comments', $data);
    }

    function get_all_comments() {
        $data['i_search'] = isset($_POST['sSearch']) ? $_POST['sSearch'] : '';
        $data['i_start_index'] = $this->input->post('iDisplayStart');
        $data['i_end_index'] = $this->input->post('iDisplayLength');
        $data['news_id'] = $this->input->post('news_id');
        $records_number = $this->news_model->get_comments_count($data);
        $result = $this->news_model->get_comments($data);

        $row = array();
        foreach ($result as $value) {
            $record = array();
            $options = '';
            $record[] = '<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />';
            $record[] = $value['name'];
            $record[] = '<span title="' . $value['comment'] . '">' . substr($value['comment'], 0, 50) . '...' . '</span>';
            $record[] = $value['email'];
            $record[] = $value['publishDate'];
            if ($value['status'] == '0') {
                $options .= '<a href="#myModal1" onclick="setTarget(' . $value['comment_id'] . ',this,' . $value['status'] . ');return false;" title="قبول هذا التعليق" class="btn btn-small btn-success" data-toggle="modal"><i class="icon-eye-open"></i></a>';
            } else {
                $options .= '<a href="#myModal1" onclick="setTarget(' . $value['comment_id'] . ',this,' . $value['status'] . ');return false;" title="رفض هذا التعليق" class="btn btn-small btn-danger" data-toggle="modal"><i class="icon-eye-close"></i></a>';
            }
            $record[] = $options;
            array_push($row, $record);
        }
        $output = $this->createOutput(intval($_POST['sEcho']), $records_number, $row);
        echo json_encode($output);
    }
    
    function recent_comments() {
        $this->load->view('admin/recent_comments');
    }
    
    function get_recent_comments() {
        $data['i_search'] = isset($_POST['sSearch']) ? $_POST['sSearch'] : '';
        $data['i_start_index'] = $this->input->post('iDisplayStart');
        $data['i_end_index'] = $this->input->post('iDisplayLength');
        $data['news_id'] = $this->input->post('news_id');
        $records_number = $this->news_model->get_recent_comments_count($data);
        $result = $this->news_model->get_recent_comments($data);
        
        $row = array();
        foreach ($result as $value) {
            $record = array();
            $options = '';
            $record[] = '<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />';
            $record[] = '<a target="_blank" href="'.  base_url().'home/post?id='.$value['news_id'].'">'.substr($value['news_title'], 0,100).'...';
            $record[] = $value['name'];
            $record[] = '<span title="' . $value['comment'] . '">' . substr($value['comment'], 0, 100) . '...' . '</span>';
            $record[] = $value['email'];
            $record[] = $value['publishDate'];
            if ($value['status'] == '0') {
                $options .= '<a href="#myModal1" onclick="setTarget(' . $value['comment_id'] . ',this,' . $value['status'] . ');return false;" title="قبول هذا التعليق" class="btn btn-small btn-success" data-toggle="modal"><i class="icon-eye-open"></i></a>';
            } else {
                $options .= '<a href="#myModal1" onclick="setTarget(' . $value['comment_id'] . ',this,' . $value['status'] . ');return false;" title="رفض هذا التعليق" class="btn btn-small btn-danger" data-toggle="modal"><i class="icon-eye-close"></i></a>';
            }
            $record[] = $options;
            array_push($row, $record);
        }
        $output = $this->createOutput(intval($_POST['sEcho']), $records_number, $row);
        echo json_encode($output);
    }

    function comment_status() {
        $data['comment_id'] = $this->input->post('comment_id');
        $data['current_status'] = $this->input->post('current_status');
        $result = $this->news_model->change_comment_status($data);
        if ($result)
            echo json_encode(array('status' => true, 'msg' => "تم تغيير حالة التعليق بنجاح"));
        else
            echo json_encode(array('status' => false, 'msg' => 'هناك خطأ في البيانات المدخلة'));
    }
    
    function manage_agenda() {
        $this->load->view('admin/manage_agenda');
    }
    
    function do_add_agenda() {
        $this->form_validation->set_rules('news_description', 'نص الخبر', 'required|trim');
        $this->form_validation->set_rules('currency', 'العملة', 'required|trim');
        $this->form_validation->set_rules('expected', 'المتوقع', 'required|trim');
        $this->form_validation->set_rules('previous', 'السابق', 'required|trim]');
        $this->form_validation->set_rules('impact', 'قوة الخبر', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $errorMsg = validation_errors();
            echo json_encode(array('status' => false, 'msg' => $errorMsg));
        } else {
            $data['news_description'] = $this->input->post('news_description');
            $data['currency'] = $this->input->post('currency');
            $data['expected'] = $this->input->post('expected');
            $data['previous'] = $this->input->post('previous');
            $data['impact'] = $this->input->post('impact');
            $data['publish_date'] =  date('Y-m-d H:i:s');
            $result = $this->news_model->add_agenda($data);
            if ($result)
                echo json_encode(array('status' => true, 'msg' => 'تم إضافة الخبر بنجاح'));
            else
                echo json_encode(array('status' => false, 'msg' => 'هناك خطأ في البيانات المدخلة'));
        }
    }
    
    function get_agenda() {
        $data['i_search'] = isset($_POST['sSearch']) ? $_POST['sSearch'] : '';
        $data['i_start_index'] = $this->input->post('iDisplayStart');
        $data['i_end_index'] = $this->input->post('iDisplayLength');
        $records_number = $this->news_model->get_agenda_count($data);
        $result = $this->news_model->get_all_agenda($data);

        $row = array();
        foreach ($result as $value) {
            $record = array();
            $options = '';
            $record[] = '<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />';
            $record[] = $value['publish_date'];
            $record[] = $value['news_description'];
            $record[] = $value['currency'];
            $record[] = $value['expected'];
            $record[] = $value['previous'];
            $record[] = $value['impact'];

            $options .= '<a href="#" onclick="get_agenda_info(' . $value['news_id'] . ',this);return false;" class="btn btn-small purple" title="تعديل"><i class="icon-edit"></i></a> ';
            $options .= '<a href="#myModal2" onclick="setTarget(' . $value['news_id'] . ',this);return false;" title="حـذف" class="btn btn-small btn-danger" data-toggle="modal"><i class="icon-trash"></i></a>';
            $record[] = $options;
            array_push($row, $record);
        }
        $output = $this->createOutput(intval($_POST['sEcho']), $records_number, $row);
        echo json_encode($output);
    }
    
    function update_agenda_info() {
        $this->form_validation->set_rules('news_description', 'نص الخبر', 'required|trim|max_length[300]');

        if ($this->form_validation->run() == FALSE) {
            $errorMsg = validation_errors();
            echo json_encode(array('status' => false, 'msg' => $errorMsg));
        } else {
            $news_id = $this->input->post('news_id');
            $data['news_description'] = $this->input->post('news_description');
            $data['currency'] = $this->input->post('currency');
            $data['expected'] = $this->input->post('expected');
            $data['previous'] = $this->input->post('previous');
            $data['impact'] = $this->input->post('impact');
            $data['publish_date'] =  date('Y-m-d H:i:s');
            $result = $this->news_model->update_agenda_info($news_id, $data);
            if ($result)
                echo json_encode(array('status' => true, 'msg' => 'تم تعديل الخبر بنجاح'));
            else
                echo json_encode(array('status' => false, 'msg' => 'هناك خطأ في البيانات المدخلة'));
        }
    }
    
    function delete_agenda() {
        $news_id = $this->input->post('news_id');
        $result = $this->news_model->delete_agenda($news_id);
        if ($result)
            echo json_encode(array('status' => true, 'msg' => "تم حذف الخبر بنجاح"));
        else
            echo json_encode(array('status' => false, 'msg' => 'هناك خطأ في البيانات المدخلة'));
    }
    
    function get_agenda_info() {
        $news_id = $this->input->post('news_id');
        $result = $this->news_model->get_agenda_info($news_id);

        echo json_encode($result);
    }
    
    function createOutput($sEcho, $records_number, $aaData = array()) {
        $output = array(
            "sEcho" => $sEcho,
            "iTotalRecords" => $records_number,
            "iTotalDisplayRecords" => $records_number,
            "aaData" => $aaData
        );
        return $output;
    }
    
    /**
     * generateThumb
     * 
     * function will resize the actual image and store it into project folder
     * 
     * @access public
     * @return void
     */
    function generateThumb($width = 300, $height = 177, $location = NULL) {
        $config['new_image'] = './uploads/' . $location . '/thumbs/' . $this->upload->file_name;
        $config['source_image'] = $this->upload->upload_path . $this->upload->file_name;
        $config['maintain_ratio'] = FALSE;
        $config['width'] = $width;
        $config['height'] = $height;

        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
    }

    /**
     * uploadImage
     * 
     * function will take the actual image and store it into project folder
     * 
     * @access public
     * @return void
     */
    function uploadImage($file_element_name = NULL, $location = NULL) {
        $config['upload_path'] = './uploads/' . $location . '/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1024;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($file_element_name)) {
            $msg = $this->upload->display_errors('', '');
            return 'false';
        } else {
            $picture = $this->upload->data();
            return $picture['file_name'];
        }
    }
    
    function getNotificationsNumber(){
        $result = $this->news_model->getNotifications();
        echo json_encode($result);
    }

}

/* End of file Home.php */