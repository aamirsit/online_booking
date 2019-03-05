<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class order_model extends CI_Model
{

	public function add($data) 
    {
            $extra = $data;
            unset($data['package'],$data['weight'],$data['width'],$data['height'],$data['length'],$data['description'],$data['quantity'],$data['vogoods'],$data['hprice']);
            for($i=1;$i<=$extra['package'];$i++)
            {
                unset($data["boxno".$i]);
            }
        	$other = array(
				'booking_date' => date('Y-m-d h:i:s A'),
				'schedule_date' => date('Y-m-d'),
				'awb_no' => rand(1111111111,9999999999).rand(11111,99999),
                'browser' => $_SERVER['HTTP_USER_AGENT'],
                'ip_address' => $_SERVER['REMOTE_ADDR'],
				'sender_password' => $_POST['sender_fname'].rand(1,1000).$_POST['sender_lname'],
                'ship_no' =>  rand(11111111,99999999)
			);
			$data = array_merge($data,$other);
        	//echo "<pre>";print_r($data);exit;
            $insert = $this->db->insert('tbl_order',$data);
            if($insert)
            {
            	$id=$this->db->insert_id();
            	$status = array(
            		'order_id' => $id,
            		'status' => 'Pending',
            		'remark' => 'Order Placed',
            		'date_time' => date('Y-m-d h:i:s A'),
            	);
                $insert = $this->db->insert('tbl_status',$status);
                 
                 for($i=0;$i<count($extra['weight']);$i++)
                {
                    $package = array(
                        'order_id' => $id,
                        'weight' => $extra['weight'][$i],
                        'width' => $extra['width'][$i],
                        'height' => $extra['height'][$i],
                        'length' => $extra['length'][$i],
                    );
                    $insert = $this->db->insert('tbl_package_details',$package);
                }
                $x=1;
                for($i=0;$i<count($extra['quantity']);$i++)
                {
                    $product = array(
                        'order_id' => $id,
                        'boxno' => $extra['boxno'.$x],
                        'description' => $extra['description'][$i],
                        'quantity' => $extra['quantity'][$i],
                        'vogoods' => $extra['vogoods'][$i],
                    );
                    $insert = $this->db->insert('tbl_product_details',$product);
                    $x++;
                }
            	
            }
            return $insert?$id:false;
        
    }

    public function update($data,$id) 
    {
            $extra = $data;
            unset($data['package'],$data['weight'],$data['width'],$data['height'],$data['length'],$data['description'],$data['quantity'],$data['vogoods'],$data['hprice']);
            for($i=1;$i<=$extra['package'];$i++)
            {
                unset($data["boxno".$i]);
            }
            //echo "<pre>";print_r($data);exit;
            $update = $this->db->update('tbl_order',$data,array('order_id'=>$id));
            if($update)
            {
                $delete = $this->db->delete('tbl_package_details',array('order_id'=>$id));
                 for($i=0;$i<count($extra['weight']);$i++)
                {
                    $package = array(
                        'order_id' => $id,
                        'weight' => $extra['weight'][$i],
                        'width' => $extra['width'][$i],
                        'height' => $extra['height'][$i],
                        'length' => $extra['length'][$i],
                    );
                    $insert = $this->db->insert('tbl_package_details',$package);
                }
                $x=1;
                $delete = $this->db->delete('tbl_product_details',array('order_id'=>$id));
                for($i=0;$i<count($extra['quantity']);$i++)
                {
                    $product = array(
                        'order_id' => $id,
                        'boxno' => $extra['boxno'.$x],
                        'description' => $extra['description'][$i],
                        'quantity' => $extra['quantity'][$i],
                        'vogoods' => $extra['vogoods'][$i],
                    );
                    $insert = $this->db->insert('tbl_product_details',$product);
                    $x++;
                }
                
            }
            return $insert?true:false;
        
    }

}