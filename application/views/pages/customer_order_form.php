<?php 
$table="tbl_item";
$pk="item_id";
$nm="add_edit";
$formname="Add New Item";
$list="item/index";
include('page-contents/frmheader.php');
if(isset($customer))
{
  $id = $customer->cust_id;
  $cust_name = $customer->cust_name;
  $address = $customer->address;
  $mobile = $customer->mobile;
  $submit = "Update Item";
}
else
{
  $id = "";
  $cust_name = "";
  $address = "";
  $mobile = "";
  $submit = "Insert Item";
}
?>  
  <div class="box box-default collapsed-box">
    <div class="box-header with-border">
      <h3 class="box-title">Add New Item</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <form class=" Insert_form" id="form1" method="post">
      <div class="box-body" >
        <div class="row" >

          <div class="col-md-2">
            <div class="form-group">
              <label>Customer Name</label>
              <div class="input-group">
                    <input type="text"  name="cust_name" id="cust_name" data-bvalidator="alpha,required" value="<?= $cust_name?>"  placeholder="Customer Name" class="form-control pull-right">
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label>Address</label>
              <div class="input-group">
                    <input type="text" name="address" id="address" data-bvalidator="alphanum,required" value="<?= $address?>" placeholder="Address" class="form-control pull-right">
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label>Mobile</label>
              <div class="input-group">
                    <input type="number" name="mobile" id="mobile" data-bvalidator="minlength[10],maxlength[10],required" value="<?= $mobile?>" placeholder="+91" class="form-control pull-right">
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="box-body" >
        <?php
         $i=1; 
          if(isset($order))
          {?>
            <script>
              $('.box-default').removeClass('collapsed-box');
            </script>
          <?php   
            foreach ($order as $ordr) {
               
        ?>
           <!-- Updation -->
            <div class="row" id="row<?= $i; ?>">

              <div class="col-md-2">
                <div class="form-group">
                  <label>Item Barocde</label>
                  <div class="input-group">
                        <input type="text"  name="item_id[]" id="item_id<?= $i?>" onblur="fetchbarcode(this.value,<?= $i?>);" data-bvalidator="required" value="<?= $ordr->item_id?>"  placeholder="Barcode" class="form-control pull-right item_id">
                        <b id="itemname<?= $i?>"></b>
                  </div>
                </div>
              </div>
              <script>
                function fetchbarcode(val,i)
                {
                  var length = $('.item_id').length;
                  var flag = 1;
                  if(length!=1)
                  {
                    $( ".item_id" ).each(function( index ) {
                      if(i-1!=index)
                      {
                        if($(this).val() == val && length-1>index)
                        {
                          flag=0;
                        }
                      }
                    });
                  }
                  if(flag==1)
                  {
                    $.ajax({
                      type:'post',
                      url:'../fetchbarcode',
                      data:{barcode:val},
                      success:function(data){
                        var v = data.split(':');
                        $('#itemname'+i).empty();
                        $('#fqty'+i).empty();
                        $('#selled_price'+i).val('');
                        $('#itemname'+i).append(v[0]);
                        $('#selled_price'+i).val(v[1]);
                        $('#fqty'+i).val(v[2]);
                        $('#aqty'+i).empty();
                        if(v[2]<=0)
                        {
                          $('#aqty'+i).append("Not in Stock").css({"color":"red"});
                          $('#item_id'+i).focus();

                        }
                      }
                    });
                  }
                  else
                  {
                    $('#item_id'+i).val('');
                    $('#item_id'+i).focus();
                  }
                }
              </script>
              <div class="col-md-2">
                <div class="form-group">
                  <label>Quantity</label>
                  <div class="input-group">
                        <input type="number" name="qty[]"  id="qty<?= $i?>" data-bvalidator="min[1],required" onblur="calamt(<?= $i?>);"  value="<?= $ordr->qty?>" placeholder="Quantity" class="form-control pull-right">
                        <b id="aqty<?= $i?>"></b>
                        <input type="hidden" id="fqty<?= $i?>">
                  </div>
                </div>
              </div>

              <div class="col-md-2">
                <div class="form-group">
                  <label>Selling Price</label>
                  <div class="input-group">
                        <input type="number" name="selled_price[]" id="selled_price<?= $i?>" data-bvalidator="required" onblur="calamt(<?= $i?>);" value="<?= $ordr->selled_price?>" placeholder="Rs." class="form-control pull-right">
                  </div>
                </div>
              </div>
                
              <script>
                function calamt(i)
                {
                  var fqty = $('#fqty'+i).val();
                  var selled_price = $('#selled_price'+i).val();
                  var qty = $('#qty'+i).val();
                  if(parseInt(fqty)<parseInt(qty))
                  {
                    //alert(fqty+" "+qty);
                    $('#qty'+i).focus();
                    $('#aqty'+i).empty();
                    $('#aqty'+i).append("Only "+fqty+" Quantity Available").css({"color":"red"});
                  }
                  else if(parseInt(fqty)>0)
                  {

                    $('#aqty'+i).css({"color":"green"});
                  }
                  var net = selled_price*qty;
                  $('#total_amt'+i).val('');
                  $('#total_amt'+i).val(net);
                }
              </script>

              <div class="col-md-2">
                <div class="form-group">
                  <label>Total Amount</label>
                  <div class="input-group">
                        <input type="number" name="total_amt[]" id="total_amt<?= $i?>" data-bvalidator="required"  value="<?= $ordr->total_amt?>" placeholder="Total Amount(Rs.)" class="form-control pull-right">
                  </div>
                </div>
              </div>

              <div class="col-md-2">
                <div class="form-group">
                  <label>Date</label>
                  <div class="input-group">
                        <input type="date" name="date[]" id="date<?= $i?>" data-bvalidator="required"  value="<?= $ordr->date?>" placeholder="" class="form-control pull-right">
                  </div>
                </div>
              </div>

              <div class="col-md-2">
                <div class="form-group">
                  <div class="input-group" style="padding-top:25px;">
                        <input type="button" value="Add" title="Add Row" onclick="addrow(<?= $i?>);" class="btn btn-success" style="margin-right:3px;">
                        <input type="button" value="Delete" title="Delete Row" onclick="remove(<?= $i?>);" class="btn btn-danger">
                  </div>
                </div>
              </div>  
            </div>
            <!-- /Updation -->
          <?php  
            $i++;
              }  
          }
          else
          {?>
        <!-- New Insertion -->
        <div class="row" id="row<?= $i; ?>">

          <div class="col-md-2">
            <div class="form-group">
              <label>Item Barocde</label>
              <div class="input-group">
                    <input type="text"  name="item_id[]" id="item_id<?= $i?>" onblur="fetchbarcode(this.value,<?= $i?>);" data-bvalidator="required" value=""  placeholder="Barcode" class="form-control pull-right item_id">
                    <b id="itemname<?= $i?>"></b>
              </div>
            </div>
          </div>
          <script>
            function fetchbarcode(val,i)
            {
              var length = $('.item_id').length;
              var flag = 1;
              if(length!=1)
              {
                $( ".item_id" ).each(function( index ) {
                  if(i-1!=index)
                  {
                    if($(this).val() == val && length-1>index)
                    {
                      flag=0;
                    }
                  }
                });
              }
              if(flag==1)
              {
                $.ajax({
                  type:'post',
                  url:'fetchbarcode',
                  data:{barcode:val},
                  success:function(data){
                    var v = data.split(':');
                    $('#itemname'+i).empty();
                    $('#fqty'+i).empty();
                    $('#selled_price'+i).val('');
                    $('#itemname'+i).append(v[0]);
                    $('#selled_price'+i).val(v[1]);
                    $('#fqty'+i).val(v[2]);
                    $('#aqty'+i).empty();
                    if(v[2]<=0)
                    {
                      $('#aqty'+i).append("Not in Stock").css({"color":"red"});
                      $('#item_id'+i).focus();

                    }
                  }
                });
              }
              else
              {
                $('#item_id'+i).val('');
                $('#item_id'+i).focus();
              }
            }
          </script>
          <div class="col-md-2">
            <div class="form-group">
              <label>Quantity</label>
              <div class="input-group">
                    <input type="number" name="qty[]"  id="qty<?= $i?>" data-bvalidator="min[1],required" onblur="calamt(<?= $i?>);"  value="" placeholder="Quantity" class="form-control pull-right">
                    <b id="aqty<?= $i?>"></b>
                    <input type="hidden" id="fqty<?= $i?>">
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label>Selling Price</label>
              <div class="input-group">
                    <input type="number" name="selled_price[]" id="selled_price<?= $i?>" data-bvalidator="required" onblur="calamt(<?= $i?>);" value="" placeholder="Rs." class="form-control pull-right">
              </div>
            </div>
          </div>
            
          <script>
            function calamt(i)
            {
              var fqty = $('#fqty'+i).val();
              var selled_price = $('#selled_price'+i).val();
              var qty = $('#qty'+i).val();
              if(parseInt(fqty)<parseInt(qty))
              {
                //alert(fqty+" "+qty);
                $('#qty'+i).focus();
                $('#aqty'+i).empty();
                $('#aqty'+i).append("Only "+fqty+" Quantity Available").css({"color":"red"});
              }
              else if(parseInt(fqty)>0)
              {

                $('#aqty'+i).css({"color":"green"});
              }
              var net = selled_price*qty;
              $('#total_amt'+i).val('');
              $('#total_amt'+i).val(net);
            }
          </script>

          <div class="col-md-2">
            <div class="form-group">
              <label>Total Amount</label>
              <div class="input-group">
                    <input type="number" name="total_amt[]" id="total_amt<?= $i?>" data-bvalidator="required"  value="" placeholder="Total Amount(Rs.)" class="form-control pull-right">
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label>Date</label>
              <div class="input-group">
                    <input type="date" name="date[]" id="date<?= $i?>" data-bvalidator="required"  value="" placeholder="" class="form-control pull-right">
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
        <!-- /New Insertion -->
          <?php }
         ?>
        <div class="row">
          <div class="col-md-3" style="margin-top:20px;">
            <div class="form-group">
                <input type="submit" name="submit" value="<?= $submit;?>" class="btn btn-md btn-success btn-block ">
            </div>
          </div>
          <?php if(isset($order)){?>
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
  <div class="box-header"><h3 class="box-title">Customer Order List</h3></h3></div>
  <div class="box-body">     
  <table id="example1" class="table table-striped ">
    <thead>
      <tr>
        <th>#</th>
        <th>Customer Name</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Order Details</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($customers as $customer): ?>
      <tr>
        <td><?= $customer->cust_id;?></td>
        <td><?= $customer->cust_name;?></td>
        <td><?= $customer->address;?></td>
        <td><?= $customer->mobile;?></td>
        <td>
          <table class="table ">
            <thead>
              <tr>
                <th>#</th>
                <th>Qty</th>
                <th>Selled Price</th>
                <th>Total(Rs)</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($orders as $order): if($order->cust_id==$customer->cust_id){ ?>
                <tr>
                  <td><?= $order->item_id ?></td>
                  <td><?= $order->qty ?></td>
                  <td><?= $order->selled_price ?></td>
                  <td><?= $order->total_amt ?></td>
                  <td><?= $order->date ?></td>
                </tr>
              <?php }endforeach; ?>
            </tbody>
          </table>
        </td>
        <td class="text-center">
          <a href="<?= base_url('cust_order/add_edit/').$customer->cust_id;?>" onclick="return confirm('Are Sure You want to Update ``<?= $customer->cust_name ?>`` orders?');"><i class="fa fa-pencil-square fa-2x" title="Edit"></i></a>
          <a href="<?= base_url('cust_order/delete/').$customer->cust_id;?>" onclick="return confirm('Are Sure You want to Delete ``<?= $customer->cust_name ?>`` orders?');" title="Delete"><i class="fa fa-trash fa-2x"></i></a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
<?php include('page-contents/listfooter.php'); ?>
<script>
  function addrow(i)
  {
    $('#row'+i).after('<div class="row" id="row'+(i+1)+'"><div class="col-md-2"><div class="form-group"><label>Item Barcode</label><div class="input-group"><input type="text"  name="item_id[]" id="item_id'+(i+1)+'" data-bvalidator="required" onblur="fetchbarcode(this.value,'+(i+1)+');"  value=""  placeholder="Item Barcode" class="form-control pull-right item_id"><b id="itemname'+(i+1)+'"></b></div></div></div><div class="col-md-2"><div class="form-group"><label>Quantity</label><div class="input-group"><input type="number" name="qty[]" id="qty'+(i+1)+'" data-bvalidator="required" value="" onblur="calamt('+(i+1)+');" placeholder="Quantity" class="form-control pull-right"><b id="aqty'+(i+1)+'"></b><input type="hidden" id="fqty'+(i+1)+'"></div></div></div><div class="col-md-2"><div class="form-group"><label>Selling Price</label><div class="input-group"><input type="number" name="selled_price[]" onblur="calamt('+(i+1)+');" id="selled_price'+(i+1)+'" data-bvalidator="required" value="" placeholder="Rs." class="form-control pull-right"></div></div></div><div class="col-md-2"><div class="form-group"><label>Total Amount</label><div class="input-group"><input type="number" name="total_amt[]" id="total_amt'+(i+1)+'" data-bvalidator="required" value="" placeholder="Total Amount(Rs.)" class="form-control pull-right"></div></div></div><div class="col-md-2"><div class="form-group"><label>Date</label><div class="input-group"><input type="date" name="date[]" id="date'+(i+1)+'" data-bvalidator="required" value="" placeholder="" class="form-control pull-right"></div></div></div><div class="col-md-2"><div class="form-group"><div class="input-group" style="padding-top:25px;"><input type="button" value="Add" title="Add Row" onclick="addrow('+(i+1)+');" class="btn btn-success" style="margin-right:3px;"><input type="button" value="Delete" title="Delete Row" onclick="remove('+(i+1)+');" class="btn btn-danger"></div></div></div></div>');
  }

  function remove(i)
  {
    $('#row'+i).remove();
  }
</script>
