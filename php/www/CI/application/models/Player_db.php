<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Player_db extends CI_Model
{
    //get user detils
    public function get_user_details($user_name)
    {
        $query = $this->db->get_where('login', array('user_name' => $user_name));
        $row = $query->row(0);
        $data['user_email'] = $row->user_email;
        $data['user_id'] = $row->id;
        $data['user_name'] = $user_name;
        $data['profile_file_name'] = $row->profile_file_name;
        return $data;
    }
    //get the video names of the videos uploaded by user
    public function get_video_details($video_id){
        //upload a video

        $this->db->select('id, title, description, extension,thumbnail, likes');
        $query2 = $this->db->get_where('video_details', array('id' => $video_id));
        $row2 = $query2->row(0);
        $filename = $row2->id . '.' . $row2->extension;
        $video['id'] = $row2->id;
        $video['title'] = $row2->title;
        $video['description'] = $row2->description;
        $video['extension'] = $row2->extension;
        $video['filename'] = $filename;
        $video['thumbnail'] = $row2->thumbnail;
        $video['likes'] = $row2->likes;
        return $video;
    }

    public function like_video($user_id, $video_id)
    {
        $video = $this->get_video_details($video_id);
        $data = array(
            'likes' => ($video['likes'] + 1),
            
        );
        $this->db->where('id', $video_id);
        $this->db->update('video_details', $data);
        $data1 = array(
            'user_id' => $user_id,
            'video_id' => $video_id
        );
        $this->db->insert('liked_videos',$data1);
        return 1;
    }

    public function dislike_video($user_id, $video_id)
    {
        $video = $this->get_video_details($video_id);
        $data = array(
            'likes' => ($video['likes'] - 1),
            
        );
        $this->db->where('id', $video_id);
        $this->db->update('video_details', $data);
        $data1 = array(
            'user_id' => $user_id,
            'video_id' => $video_id
        );
        $this->db->delete('liked_videos',$data1);
        return 1;
    }

    public function check_if_liked($user_id, $video_id){
        $query = $this->db->get_where('liked_videos', array('user_id' => $user_id, 'video_id' => $video_id));
        if($query->num_rows()){
            return 1;
        }else{
            return 0;
        }
    }
}
