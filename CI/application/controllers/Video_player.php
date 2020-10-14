<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video_player extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //load this to validate the inputs in upload form
        $this->load->model('player_db');
        $this->load->model('profile_db');
    }
    public function index(){

    }

    public function play_video($video_id){
        $data = $this->player_db->get_video_details($video_id);
        $this->load->view('templates/player_header');
        $this->load->view('video_player',$data);
        if($this->session->userdata('username')){
            $userdata = $this->profile_db->get_user_details($this->session->userdata('username'));
            $user_id = $userdata['user_id'];
            $data['liked'] = $this->player_db->check_if_liked($user_id, $video_id);
        }else{
            $data['liked'] = 0;
        }
        $this->load->view('video_description',$data);
        $this->load->view('templates/footer');
    }

    public function like_video($video_id){
        if($this->session->userdata('username')){
            $userdata = $this->profile_db->get_user_details($this->session->userdata('username'));
            $user_id = $userdata['user_id'];
            $response = $this->player_db->like_video($user_id, $video_id);
            
        }else{
            $response = 0;
            redirect("");
        }
        
        echo $response;
    }
    public function dislike_video($video_id){
        if($this->session->userdata('username')){
            $userdata = $this->profile_db->get_user_details($this->session->userdata('username'));
            $user_id = $userdata['user_id'];
            $response = $this->player_db->dislike_video($user_id, $video_id);
            
        }else{
            $response = 0;
            redirect("");
        }
        
        echo $response;
    }
}
