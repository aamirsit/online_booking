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
      <th>Barcode</th>
      <th>Item Name</th>
      <th>Buy Price</th>
      <th>Sell Price</th>
      <th>Available Quantity</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($items as $item): ?>
    <tr>
      <td><?= $item->item_barcode;?></td>
      <td><?= $item->item_name;?></td>
      <td><?= $item->buy_price;?></td>
      <td><?= $item->sell_price;?></td>
      <td><?= $item->item_qty;?></td>
      <td class="text-center">
        <a href="<?= base_url('item/add_edit/').$item->item_id;?>"><i class="fa fa-pencil-square fa-2x" title="Edit"></i></a>
        <a href="<?= base_url('item/delete/').$item->item_id;?>" onclick="return confirm('Are Sure You want to Delete ``<?= $item->item_name ?>`` item?');" title="Delete"><i class="fa fa-trash fa-2x"></i></a>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<?php include('page-contents/listfooter.php'); ?>

