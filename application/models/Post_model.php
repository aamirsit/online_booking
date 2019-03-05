<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post_model extends CI_Model{
    /*
     * Get posts
     */
    function getRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('posts', array('id' => $id));
            return $query->row();
        }else{
            $query = $this->db->get('posts');
            return $query->result();
        }
    }
    
    /*
     * Insert post
     */
    public function insert_update($data,$id="") 
    {
        if(!empty($data) && !empty($id))
        {
            $update = $this->db->update('posts', $data, array('id'=>$id ));
            return $update?true:false;
        }
        else
        {
            $insert = $this->db->insert('posts', $data);
            return $insert?true:false;
        }
        
    }
    
    public function delete($id){
        $delete = $this->db->delete('posts',array('id'=>$id));
        return $delete?true:false;
    }
    
}
?>