<?php
class MY_Controller extends CI_Controller
{

    var $permission = [],
        $user = null,
        $obj = null,
        $controller = null,
        $img_width = 100,
        $img_height = 100,
        $thumb_width = 120,
        $thumb_height = 120;

    function __construct()
    {
        parent::__construct();

        $this->_checkLogin();
        $this->form_validation->set_error_delimiters("<div class='text-danger small' >", "</div>");
        $this->user = $this->session->userdata("user")->UserId;
    }

    function _checkLogin()
    {
        if (!$this->session->has_userdata('user')) {
            $this->session->set_userdata('url', current_url());
            redirect(base_url());
        } else {
            if ($this->session->userdata('role') == 2) {
                $this->session->sess_destroy();
                redirect(current_url());
            }
        }

        if ($this->session->has_userdata('url'))
            $this->session->unset_userdata('url');
    }

    function common($url = "index")
    {
        if (is_callable(array($this, $url))) {
            call_user_func(array($this, $url));
        } else {
            show_404($page = '', $log_error = TRUE);
        }
    }

    function view($data = array())
    {
        $data['user'] = $this->session->userdata('user');
        $this->load->view("pages/{$data['page']}", $data);
    }


    public function do_upload()
    {

        $this->load->helper(array('form', 'url', 'file'));
        $upload_path_url = base_url() . 'uploads/';

        $config['upload_path'] = FCPATH . 'media/img/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '30000';
        $config['file_name'] = time();

        $this->load->library('upload', $config);

        if ($this->upload->do_upload()) {
            $data = $this->upload->data();
            $this->crop($data);
            $this->resize($data);

            $info = new stdClass();
            $info->name = $data['file_name'];
            $info->url = $upload_path_url . $data['file_name'];
            // I set this to original file since I did not create thumbs.  change to thumbnail directory if you do = $upload_path_url .'/thumbs' .$data['file_name']

            $info->error = null;

            $files[] = $info;
            if ($this->input->is_ajax_request()) {
                echo json_encode(array("files" => $files));
            } else {
                $file_data['upload_data'] = $this->upload->data();
                echo json_encode($file_data);
            }
        }
    }

    public function do_upload_adz()
    {

        $this->load->helper(array('form', 'url', 'file'));
        $upload_path_url = base_url() . 'uploads/';

        $config['upload_path'] = FCPATH . 'media/img/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '30000';
        $config['file_name'] = time();

        $this->load->library('upload', $config);

        if ($this->upload->do_upload()) {
            $data = $this->upload->data();
//            $this->crop($data);
//            $this->resize($data);

            $info = new stdClass();
            $info->name = $data['file_name'];
            $info->url = $upload_path_url . $data['file_name'];
            // I set this to original file since I did not create thumbs.  change to thumbnail directory if you do = $upload_path_url .'/thumbs' .$data['file_name']

            $info->error = null;

            $files[] = $info;
            if ($this->input->is_ajax_request()) {
                echo json_encode(array("files" => $files));
            } else {
                $file_data['upload_data'] = $this->upload->data();
                echo json_encode($file_data);
            }
        }
    }

    public function do_upload_banner()
    {

        $this->load->helper(array('form', 'url', 'file'));
        $upload_path_url = base_url() . 'uploads/';

        $config['upload_path'] = FCPATH . 'media/img/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '30000';
        $config['file_name'] = time();
        $config['maintain_ratio'] = TRUE;
        $config['width']         = 75;
        $config['height']       = 50;
//        $config['width'] = 100;
//        $config['height'] = 100;
//        $config['max_width'] = '400';
//        $config['max_height'] = '400';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload()) {
            $data = $this->upload->data();
//            $this->crop($data);
//            $this->resize($data);

            $info = new stdClass();
            $info->name = $data['file_name'];
            $info->url = $upload_path_url . $data['file_name'];
            // I set this to original file since I did not create thumbs.  change to thumbnail directory if you do = $upload_path_url .'/thumbs' .$data['file_name']

            $info->error = null;

            $files[] = $info;
            if ($this->input->is_ajax_request()) {
                echo json_encode(array("files" => $files));
            } else {
                $file_data['upload_data'] = $this->upload->data();
                echo json_encode($file_data);
            }
        }
    }

    public function do_doc_upload()
    {

        $this->load->helper(array('form', 'url', 'file'));
        $upload_path_url = base_url() . 'uploads/';

        $config['upload_path'] = FCPATH . 'media/doc/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '30000';
        $config['file_name'] = time();

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('userfiledoc') == true) {
                echo json_encode($this->upload->data('file_name'));
        }
    }

    function crop($data)
    {

        $config['image_library'] = 'gd2';
        $config['source_image'] = $data['full_path'];
        $config['x_axis'] = 0;
        $config['y_axis'] = 0;
        $config['maintain_ratio'] = FALSE;

        $source_ratio = $data['image_width'] / $data['image_height'];
        $new_ratio = $this->img_width / $this->img_height;
        if ($source_ratio != $new_ratio) {
            if ($new_ratio > $source_ratio || (($new_ratio == 1) && ($source_ratio < 1))) {
                $config['width'] = $data['image_width'];
                $config['height'] = round($data['image_width'] / $new_ratio);
                $config['y_axis'] = round(($data['image_height'] - $config['height']) / 2);
                $config['x_axis'] = 0;
            } else {
                $config['width'] = round($data['image_height'] * $new_ratio);
                $config['height'] = $data['image_height'];
                $size_config['x_axis'] = round(($data['image_width'] - $config['width']) / 2);
                $size_config['y_axis'] = 0;
            }
        }
        $config['new_image'] = $data['full_path'];
        $this->load->library('image_lib', $config);
        $this->image_lib->crop();
        $this->image_lib->clear();
    }

    function resize($data)
    {
        $config = array();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $data['full_path'];
        $config['create_thumb'] = FALSE;
        $config['new_image'] = FCPATH . 'media/img/thumbs/' . $data['file_name'];
//        $config['new_image'] = realpath(IMG_THUMBS_UPLOAD_REAL_PATH).'/'. $data['file_name'];
        $config['maintain_ratio'] = FALSE;
        $config['width'] = $this->thumb_width;
        $config['height'] = $this->thumb_height;
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();
    }

    function watermark($data)
    {
        $config['image_library'] = 'gd2';
        $config['source_image'] = $data['full_path'];
        $config['wm_type'] = 'overlay';
        $config['wm_overlay_path'] = './image/logo.png'; //the overlay image
        $config['wm_opacity'] = 10;
        $config['wm_vrt_alignment'] = 'middle';
        $config['wm_hor_alignment'] = 'center';
        $config['wm_padding'] = 0;

        $this->image_lib->initialize($config);
        $this->image_lib->watermark();
        $this->image_lib->clear();
    }


    public function deleteImage($file)
    {//gets the job done but you might want to add error checking and security

        $this->load->helper(array('form', 'url', 'file'));
        $success = unlink(FCPATH . 'uploads/' . $file);
        $success = unlink(FCPATH . 'uploads/thumbs/' . $file);
        //info to see if it is doing what it is supposed to
        $info = new StdClass;
        $info->sucess = $success;
        $info->path = base_url() . 'uploads/' . $file;
        $info->file = is_file(FCPATH . 'uploads/' . $file);
        if ($this->input->is_ajax_request()) {
            //I don't think it matters if this is set but good for error checking in the console/firebug
            echo json_encode(array($info));
        } else {
            //here you will need to decide what you want to show for a successful delete
            $file_data['delete_data'] = $file;
            $this->load->view('upload/delete_success', $file_data);
        }
    }

    function remove($id)
    {
        echo json_encode(array('result' => $this->model->update($id, array('status' => 0)) ? 1 : 0));
    }
}

