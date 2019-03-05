<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Item_model extends CI_Model{
    public function insert_update($data,$id="") 
    {
        if(!empty($data) && !empty($id))
        { 
                for($i=0;$i<count($data['item_name']);$i++)
                {
                   $update = $this->db->update('item_tbl', array('item_barcode'=>$data['item_barcode'][$i],'item_name'=>$data['item_name'][$i],'buy_price'=>$data['buy_price'][$i],'sell_price'=>$data['sell_price'][$i],'item_qty'=>$data['item_qty'][$i],'updated_at'=>date('Y-m-d')), array('item_id'=>$id));
                } 
                return $update?true:false;
        }
        else
        {
            for($i=0;$i<count($data['item_name']);$i++)
            {
                $insert = $this->db->insert('item_tbl', array('item_barcode'=>$data['item_barcode'][$i],'item_name'=>$data['item_name'][$i],'buy_price'=>$data['buy_price'][$i],'sell_price'=>$data['sell_price'][$i],'item_qty'=>$data['item_qty'][$i],'created_at'=>date('Y-m-d'),'updated_at'=>date('Y-m-d')));
            } 
            return $insert?true:false;
        }
        
    }
}
?>