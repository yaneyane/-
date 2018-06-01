<?php
class Activity extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('activity_model');
        $this->load->model('award_model');
        $this->load->helper('url_helper');
    }


    public function index()
    {
        $data['activity'] = $this->activity_model->get_activity();
        $data['ActivityName'] = '所有活动';

        //$this->load->view('templates/header', $data);
        $this->load->view('activity/index', $data);
       // $this->load->view('templates/footer');
    }



    public function view($ActivityID = NULL) //所有活动
    {
        $data['activity_item'] = $this->activity_model->get_activity($ActivityID);
        if (empty($data['activity_item']))
        {
            show_404();
        }
        $data['ActivityName'] = $data['activity_item']['ActivityName'];
        $data['StartTime'] = $data['activity_item']['StartTime'];
        $data['ActivityID'] = $data['activity_item']['ActivityID'];
        //$this->load->view('templates/header', $data);
        $this->load->view('activity/view', $data);
        //$this->load->view('templates/footer');
    }


    public function get_activityid()
    {
        $acid = $this->activity_model->get_acid();
        return $acid;
    }
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = '发起活动';

        $this->form_validation->set_rules('ActivityName', 'ActivityName1', 'required');
        $this->form_validation->set_rules('EndTime', 'EndTime1', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            //$this->load->view('templates/header', $data);
            $this->load->view('activity/create');
          //  $this->load->view('templates/footer');

        }
        else
        {
            $this->activity_model->set_activity();
            self::get_activityid();
            $this->load->view('activity/success');
        }
    }



}