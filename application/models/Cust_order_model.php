<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cust_order_model extends CI_Model{
    /*
     * Get posts
     */
    
    /*
     * Insert post
     */
    public function insert_update($data,$id="") 
    {
        if(!empty($data) && !empty($id))
        {
            $data1=$data;
            unset($data1['city'],$data1['effective_date'],$data1['mrp'],$data1['wholesale_rate']);
            $update = $this->db->update('tbl_item', $data1, array('item_id'=>$id));
            if($update)
            {   
                for($i=0;$i<count($data['city']);$i++)
                {
                    $insert = $this->db->insert('tbl_item_detail', array('city'=>$data['city'][$i],'effective_date'=>$data['effective_date'][$i],'mrp'=>$data['mrp'][$i],'wholesale_rate'=>$data['wholesale_rate'][$i],'item_id'=>$id));
                } 
                return $insert?true:false;
            }
        }
        else
        {
            $data=$_POST;
            unset($_POST['item_id'],$_POST['qty'],$_POST['selled_price'],$_POST['total_amt'],$_POST['date']);
            $insert = $this->db->insert('customer_tbl', $_POST);
            if($insert)
            {   
                $id=$this->db->insert_id();
                for($i=0;$i<count($data['item_id']);$i++)
                {
                    $insert = $this->db->insert('customer_order_tbl', array('cust_id'=>$id,'item_id'=>$data['item_id'][$i],'qty'=>$data['qty'][$i],'selled_price'=>$data['selled_price'][$i],'total_amt'=>$data['total_amt'][$i],'date'=>$data['date'][$i]));

                    $query = $this->db->get_where('item_tbl', array('item_barcode' => $data['item_id'][$i]));
                    $row =  $query->row();
                    $qty = $row->item_qty - $data['qty'][$i];
                    $update = $this->db->update('item_tbl',array('item_qty'=>$qty),array('item_id'=>$row->item_id));
                } 
                return $insert?true:false;
            }
            
            
        }
        
    }
    
    public function delete($table,$id){
        $delete = $this->db->delete($table,array('item_id'=>$id));
        return $delete?true:false;
    }
}
?>