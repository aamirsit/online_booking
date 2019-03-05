<?php 
$table="tbl_order";
$pk="order_id";
$nm="index";
$form="order/add";
$listname="Order Details";
include('page-contents/listheader.php');
?>     
<table id="example1" class="table table-bordered ">
  <thead>
    <tr>
      <th>Ship No</th>
      <th>Sender Details</th>
      <th>Shipping Details</th>
      <th>Receiver Details</th>
      <th>Package Details</th>
      <th>Product Details</th>
      <th>Status </th>
      <th>Other Details</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($orders as $order): ?>
    <tr>
      <td class="text-center">
        <label><?= $order->ship_no?></label><br>
        <label><a href="printlabel/<?= $order->ship_no?>"><i class="fa fa-barcode fa-2x"></i></a></label>
      </td>
      <td> 
        <label class=""><?= $order->sender_title.$order->sender_fname." ".$order->sender_lname?></label>
        <br>
        <label class=""><?= $order->sender_email?></label>
        <br>
        <label class=""><?= $order->sender_phone?></label>
        <br>
        <label class=""><?= $order->sender_address1.",".$order->sender_address2.",".$order->sender_address3.",".$order->sender_city.",".$order->sender_country?></label>
        <br>
      </td>
      <td> 
        <label class="">&nbsp;<?= $order->shipping_title.$order->shipping_fname." ".$order->shipping_lname?></label>
        <br>
        <label class=""><?= $order->shipping_email?></label>
        <br>
        <label class=""><?= $order->shipping_phone?></label>
        <br>
        <label class="">&nbsp; <?= $order->shipping_address1.",".$order->shipping_address2.","?></label>
        <label class="">&nbsp; <?= $order->shipping_address3.",".$order->shipping_city.",".$order->shipping_country?></label>
        <br>
      </td>
      <td> 
        <label class="">&nbsp;<?= $order->receiver_title.$order->receiver_fname." ".$order->receiver_lname?></label>
        <br>
        <label class=""><?= $order->receiver_email?></label>
        <br>
        <label class=""><?= $order->receiver_phone?></label>
        <br>
        <label class="">&nbsp;<?= $order->receiver_address1.",".$order->receiver_address2.","?></label>
        <label class="">&nbsp;<?= $order->receiver_address3.",".$order->receiver_city.",".$order->receiver_country?></label>
        <br>
      </td>
      <td>
        <table class="table table-bordered">
          <thead>
            <tr>
              <td>Weight</td>
              <td>Length</td>
              <td>Width</td>
              <td>Height</td>
            </tr>
          </thead>
          <tbody>
            <?php 
                $weight = 0;
                foreach ($packages as $package):
                if($package->order_id == $order->order_id){
                $weight=$weight+$package->weight;
            ?>
              <tr>
                <td><?= $package->weight?></td>
                <td><?= $package->length?></td>
                <td><?= $package->width?></td>
                <td><?= $package->height?></td>
              </tr>
            <?php } endforeach; 
              $price = $weight * 5;
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="2">Weight : <?= $weight?>Kg</th>
              <th colspan="2">Price : <?= $price?>Rs.</th>
            </tr>
          </tfoot>
        </table>
      </td>
      <td>
        <table class="table table-bordered">
          <thead>
            <tr>
              <td>Boxno</td>
              <td>Description</td>
              <td>Quantity</td>
              <td>value</td>
            </tr>
          </thead>
          <tbody>
            <?php 
                foreach ($products as $product):
                if($product->order_id == $order->order_id){
            ?>
              <tr>
                <td><?= $product->boxno?></td>
                <td><?= $product->description?></td>
                <td><?= $product->quantity?></td>
                <td><?= $product->vogoods?></td>
              </tr>
            <?php } endforeach; 
            ?>
          </tbody>
        </table>
      </td>
      <td class="text-center">
        <?php foreach ($statuss as $status):
              if($status->order_id == $order->order_id){
        ?>
          <label><?= $status->status ?></label><br><i class="fa fa-arrow-up"></i>
        <?php } endforeach;?>
      </td>
      
      <td>
        <label><?= $order->awb_no?></label><br><br>
        <label><?= $order->booking_date?></label>
      </td>
      <td class="text-center">
        <a href="<?= base_url('Order/confirm/').$order->order_id."/edit";?>"><i class="fa fa-pencil-square fa-2x" title="Edit"></i></a>
        <a href="<?= base_url('order/delete/').$order->order_id;?>" onclick="return confirm('Are Sure You want to Delete This Record?');" title="Delete"><i class="fa fa-trash fa-2x"></i></a>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
<script type="text/javascript">
  $('.fa-arrow-up:last-child').remove();
</script>
<?php include('page-contents/listfooter.php'); ?>

