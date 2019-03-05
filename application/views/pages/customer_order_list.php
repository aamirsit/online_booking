<?php 
$table="tbl_item";
$pk="item_id";
$nm="index";
$form="item/add_edit";
$listname="Items Lists";
include('page-contents/listheader.php');
?>     
<table id="example1" class="table table-bordered ">
  <thead>
    <tr>
      <th>#</th>
      <th>Customer Name</th>
      <th>Order Date</th>
      <th>Is Deliver</th>
      <th>Other Details</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($orders as $order){ ?>
    <tr>
      <td><?= $order->co_id;?></td>
      <td>
        <?php
            foreach($customers as $customer){
              if($customer->cust_id==$order->cust_id){
                echo $customer->cust_name;
                }
              }
        ?>
      </td>
      <td><?= $order->co_dt;?></td>
      <td class="text-center">
        <?php
          if($order->is_deliver=='1'){
        ?>
          <i class="fa fa-check" style="color:green"></i>
        <?php   
         }else{
        ?>
          <i class="fa fa-circle" style="color:red"></i>
        <?php }?></td>
      <td>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Barcode</th>
              <th>Weight Per Bag</th>
              <th>Rate</th>
              <th>Quantity</th>
              <th>Total(Kg)</th>
              <th>Total Amount</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($orderdetails as $orderdetail){ 
                    if($orderdetail->co_id==$order->co_id){
              ?>
              <tr>
                <td><?= $orderdetail->barcode ?></td>
                <td><?= $orderdetail->wpb?></td>
                <td><?= $orderdetail->rate?></td>
                <td><?= $orderdetail->qty?></td>
                <td><?= $orderdetail->total_kg?></td>
                <td><?= $orderdetail->total_amt?></td>  
              </tr>
            <?php } } ?>
          </tbody>
        </table>
      </td>
      <td class="text-center">
        <a href="<?= base_url('cust_order/add_edit/').$order->co_id;?>"><i class="fa fa-pencil-square fa-2x" title="Edit"></i></a>
        <a href="<?= base_url('cust_order/delete/').$order->co_id;?>" onclick="return confirm('Are Sure You want to Delete this Order?');" title="Delete"><i class="fa fa-trash fa-2x"></i></a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>

<?php include('page-contents/listfooter.php'); ?>

