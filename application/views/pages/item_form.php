<?php 
$table="tbl_item";
$pk="item_id";
$nm="add_edit";
$formname="Add New Item";
$list="item/index";
include('page-contents/frmheader.php');
if(isset($item))
{
  $id = $item->item_id;
  $item_barcode = $item->item_barcode;
  $item_name = $item->item_name;
  $buy_price = $item->buy_price;
  $sell_price = $item->sell_price;
  $item_qty = $item->item_qty;
  $submit = "Update Item";
  $barcode="";
}
else
{
  $id = "";
  $item_barcode = "";
  $barcode=$bar;
  $item_name = "";
  $buy_price = "";
  $sell_price = "";
  $item_qty = "";
  $submit = "Insert Item";
}
?>  
  <div class="box box-default collapsed-box">
    <div class="box-header with-border">
      <h3 class="box-title">Add New Item</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> -->
      </div>
    </div>
    <!-- /.box-header -->
    <form class=" Insert_form" id="form1" method="post">
      <div class="box-body" >
        <?php $i=1; ?>
        <div class="row" id="row<?= $i; ?>">

          <div class="col-md-2">
            <div class="form-group">
              <label>Barcode</label>
              <div class="input-group">
                    <input type="text"  name="item_barcode[]" id="item_barcode<?= $i?>"  value="<?= $item_barcode;?>"  placeholder="Barcode" class="form-control pull-right">
                    <a id="gb<?= $i ?>" style="cursor: default;" onclick="genbar(<?= $barcode; ?>,<?= $i?>,<?= $i?>);" >Generate Barcode</a>
              </div>
            </div>
          </div>
          <script type="text/javascript">
            function genbar(bar,v,i)
            {
              if(i==1)
              bar=bar;
              else
              bar=bar+v;
              $('#item_barcode'+i).val(bar);
            }
          </script>
          <div class="col-md-2">
            <div class="form-group">
              <label>Item Name</label>
              <div class="input-group">
                    <input type="text" name="item_name[]" id="item_name<?= $i?>"  value="<?= $item_name;?>" placeholder="Item Name" class="form-control pull-right">
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label>Buy Price</label>
              <div class="input-group">
                    <input type="number" name="buy_price[]" id="buy_price<?= $i?>"  value="<?= $buy_price?>" placeholder="Rs." class="form-control pull-right">
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label>Sell Price</label>
              <div class="input-group">
                    <input type="number" name="sell_price[]" id="sell_price<?= $i?>"  value="<?= $sell_price?>" placeholder="Rs." class="form-control pull-right">
              </div>
            </div>
          </div>
          
          <div class="col-md-2">
            <div class="form-group">
              <label>Quantity</label>
              <div class="input-group">
                    <input type="number" name="item_qty[]" id="item_qty<?= $i?>"  value="<?= $item_qty?>" placeholder="Quantity" class="form-control pull-right">
              </div>
            </div>
          </div>
          <?php if(!isset($item)){?>
          <div class="col-md-2">
            <div class="form-group">
              <div class="input-group" style="padding-top:25px;">
                    <input type="button" value="Add" title="Add Row" onclick="addrow(<?= $i?>);" class="btn btn-success" style="margin-right:3px;">
                    <input type="button" value="Delete" title="Delete Row" onclick="remove(<?= $i?>);" class="btn btn-danger">
              </div>
            </div>
          </div>  
          <?php }else{ ?>
            <script>
              $('.box-default').removeClass('collapsed-box');
            </script>
          <?php }?>
        </div>
        
        <div class="row">
          <div class="col-md-3" style="margin-top:20px;">
            <div class="form-group">
                <input type="submit" name="submit" value="<?= $submit;?>" class="btn btn-md btn-success btn-block ">
            </div>
          </div>
          <?php if(isset($item)){?>
            <div class="col-md-1" style="margin-top:20px;">
              <div class="form-group">
                  <a href="../add_edit" class="btn btn-md btn-default btn-block">Cancel</a>
              </div>
            </div>
          <?php } ?>
        </div>
        
      </div>
    </form>
    <!-- /.box-body -->
  </div> 
</div>
<div class="box">
  <div class="box-header"><h3 class="box-title">Item List</h3></h3></div>
  <div class="box-body">     
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
          <a href="<?= base_url('item/add_edit/').$item->item_id;?>" onclick="return confirm('Are Sure You want to Update ``<?= $item->item_name ?>`` item?');"><i class="fa fa-pencil-square fa-2x" title="Edit"></i></a>
          <a href="<?= base_url('item/delete/').$item->item_id;?>"    " title="Delete"><i class="fa fa-trash fa-2x"></i></a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
<?php include('page-contents/listfooter.php'); ?>
<script>
  function addrow(i)
  {
    $('#row'+i).after('<div class="row" id="row'+(i+1)+'"><div class="col-md-2"><div class="form-group"><label>Barcode</label><div class="input-group"><input type="text"  name="item_barcode[]" id="item_barcode'+(i+1)+'"  value=""  placeholder="Barcode" class="form-control pull-right"><a id="gb'+(i+1)+'" style="cursor: default;" onclick="genbar(<?= $barcode; ?>,'+(i)+','+(i+1)+');" >Generate Barcode</a></div></div></div><div class="col-md-2"><div class="form-group"><label>Item Name</label><div class="input-group"><input type="text" name="item_name[]" id="item_name'+(i+1)+'"  value="" placeholder="Item Name" class="form-control pull-right"></div></div></div><div class="col-md-2"><div class="form-group"><label>Buy Price</label><div class="input-group"><input type="number" name="buy_price[]" id="buy_price'+(i+1)+'"  value="" placeholder="Rs." class="form-control pull-right"></div></div></div><div class="col-md-2"><div class="form-group"><label>Sell Price</label><div class="input-group"><input type="number" name="sell_price[]" id="sell_price'+(i+1)+'"  value="" placeholder="Rs." class="form-control pull-right"></div></div></div><div class="col-md-2"><div class="form-group"><label>Quantity</label><div class="input-group"><input type="number" name="item_qty[]" id="item_qty'+(i+1)+'"  value="" placeholder="Quantity" class="form-control pull-right"></div></div></div><div class="col-md-2"><div class="form-group"><div class="input-group" style="padding-top:25px;"><input type="button" value="Add" title="Add Row" onclick="addrow('+(i+1)+');" class="btn btn-success" style="margin-right:3px;"><input type="button" value="Delete" title="Delete Row" onclick="remove('+(i+1)+');" class="btn btn-danger"></div></div></div></div>');
  }

  function remove(i)
  {
    $('#row'+i).remove();
  }
</script>
