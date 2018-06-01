<?php

class Activity_model extends CI_Model {
public  $acname;
public  $acid;
    public function __construct()
    {
        $this->load->database();
    }
    public function get_activity($ActivityID = NULL) //所有活动
    {
        if ($ActivityID === NULL)
        {
            $query = $this->db->get('activity');
            return $query->result_array();
        }

        $query = $this->db->get_where('activity', array('ActivityID' => $ActivityID));//正在进行的活动
        return $query->row_array();
    }



    public function set_activity()
    {
        $this->load->helper('url');
        $data = array(
            'ActivityName' => $this->input->post('ActivityName'),
            'EndTime' => $this->input->post('EndTime'),
            'StartTime' => date("Y-m-d H:i:s" ),
            'status'=>0
        );
        $this->acname=$this->input->post('ActivityName');
        return $this->db->insert('activity', $data);

    }
    public function get_acid()
    {
        $query = $this->db->get('activity');
        $number = $query->num_rows();
        $query1 = $this->db->get_where('activity', array('ActivityID' => $number));
        $data1['activity_item']= $query1->row_array();
        if(empty($data1['activity_item']))
        {
            echo 'no here';
        }
        $data1['ActivityName'] = $data1['activity_item']['ActivityName'];
        $data1['StartTime'] = $data1['activity_item']['StartTime'];
        $data1['ActivityID'] = $data1['activity_item']['ActivityID'];
     //   echo $data1['ActivityName'];
    //    echo $data1['ActivityID'];
        $this->acid=$data1['ActivityID'];
        return $this->acid;
    }


}
