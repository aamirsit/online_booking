<?php 
$table="post";
$pk="id";
$nm="add_post";
$formname="Order";
$list="order/index";
// make directory
// if (!is_dir('assets/bar')) {
//     mkdir('assets/bar', 0777, true);
// }
if(isset($order))
{
  $sender_title = $order->sender_title;
  $sender_fname = $order->sender_fname;
  $sender_lname = $order->sender_lname;
  $sender_email = $order->sender_email;
  $sender_phone = $order->sender_phone;
  $sender_address1 = $order->sender_address1;
  $sender_address2 = $order->sender_address2;
  $sender_address3 = $order->sender_address3;
  $sender_postcode = $order->sender_postcode;
  $sender_city = $order->sender_city;
  $sender_country = $order->sender_country;
  $shipping_title = $order->shipping_title;
  $shipping_fname = $order->shipping_fname;
  $shipping_lname = $order->shipping_lname;
  $shipping_email = $order->shipping_email;
  $shipping_phone = $order->shipping_phone;
  $shipping_address1 = $order->shipping_address1;
  $shipping_address2 = $order->shipping_address2;
  $shipping_address3 = $order->shipping_address3;
  $shipping_postcode = $order->shipping_postcode;
  $shipping_city = $order->shipping_city;
  $shipping_country = $order->shipping_country;
  $receiver_title = $order->receiver_title;
  $receiver_fname = $order->receiver_fname;
  $receiver_lname = $order->receiver_lname;
  $receiver_email = $order->receiver_email;
  $receiver_phone = $order->receiver_phone;
  $receiver_address1 = $order->receiver_address1;
  $receiver_address2 = $order->receiver_address2;
  $receiver_address3 = $order->receiver_address3;
  $receiver_postcode = $order->receiver_postcode;
  $receiver_city = $order->receiver_city;
  $receiver_country = $order->receiver_country;
}
else
{
  
}
  include('page-contents/frmheader.php');
?>  
    
  <form class="Insert_form" id="form1" method="post">
    <!-- Sender & Shipping Details-->
    <div class="row">
        <div class="col-md-6">
          <div class="box box-info">
            <div class="row">
              <div class="box-body">
              <div class="col-md-12">
                  
                <h3><i class="fa fa-upload"></i> Sender Details</h3>
                <hr style="background-color:silver;height:1px;">
                
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Title</label>
                      <select class="form-control" id="sender_title" name="sender_title" style="padding-left: 5px;">
                        <option value="Mr." <?php if($sender_title=='Mr.')echo "selected='selected'";?>>Mr.</option>
                        <option value="Mrs." <?php if($sender_title=='Mrs.')echo "selected='selected'";?>>Mrs.</option>
                      </select>
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label>First Name</label>
                      <input type="text" id="sender_fname" name="sender_fname" class="form-control" placeholder="Sender First Name" value="<?= $sender_fname?>">
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label>Last Name</label>
                      <input type="text" id="sender_lname" name="sender_lname" class="form-control" placeholder="Sender Last Name" value="<?= $sender_lname?>">
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="form-group">
                    <label>Email</label>
                      <input type="text" id="sender_email" name="sender_email" class="form-control" placeholder="Sender Email" value="<?= $sender_email?>">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Mobile No</label>
                      <input type="text" id="sender_phone" name="sender_phone" class="form-control" placeholder="+91" value="<?= $sender_phone?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 1</label>
                    <input type="text" id="sender_address1" name="sender_address1" class="form-control" placeholder="Sender Address Line 1" value="<?= $sender_address1?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 2</label>
                    <input type="text" id="sender_address2" name="sender_address2" class="form-control" placeholder="Sender Address Line 2" value="<?= $sender_address2?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 3</label>
                    <input type="text" id="sender_address3" name="sender_address3" class="form-control" placeholder="Sender Address Line 3" value="<?= $sender_address3?>">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Post Code</label>
                      <input type="text" id="sender_postcode" name="sender_postcode" class="form-control" placeholder="Sender Postcode" value="<?= $sender_postcode?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>City</label>
                      <input type="text" id="sender_city" name="sender_city" class="form-control" placeholder="Sender City" value="<?= $sender_city?>">
                  </div>
                </div>
                
                <div class="col-md-3">
                <div class="form-group">
                  <label>Country</label>
                    <div class="input-group">
                      <select name="sender_country" id="sender_country" class="country" style="width:168px;"></select>
                      <input type="hidden" value="<?= $sender_country?>" class="sender_country">
                    </div>
                </div>
              </div>

              </div>
              </div>
            </div>
          </div>
        </div>
        <!--/.col (right) -->
         <!-- Shipping Details -->
        <div class="col-md-6">
          <div class="box box-info">
            <div class="row">
              <div class="box-body">
              <div class="col-md-12">
                  
                <h3><i class="fa fa-truck"></i> Shipping Details 
                  <input type="checkbox" name="shipping_same" id="shipping_same" style="margin-left: 20px;" >
                  <small>Same as Sender Details</small>
                </h3>
                <script type="text/javascript">
                  $('#shipping_same').click(function(){
                    if($(this). prop("checked") == true){
                      //$('#ship_div').css({'display':'none'});
                      $('#shipping_title').val($('#sender_title').val());
                      $('#shipping_fname').val($('#sender_fname').val());
                      $('#shipping_lname').val($('#sender_lname').val());
                      $('#shipping_email').val($('#sender_email').val());
                      $('#shipping_address1').val($('#sender_address1').val());
                      $('#shipping_address2').val($('#sender_address2').val());
                      $('#shipping_address3').val($('#sender_address3').val());
                      $('#shipping_city').val($('#sender_city').val());
                      $('#shipping_postcode').val($('#sender_postcode').val());
                      $('#shipping_country').val($('#sender_country').val()).trigger('change');
                      $('#shipping_phone').val($('#sender_phone').val());
                    }
                    else{
                      //$('#ship_div').css({'display':'block'});
                      $('#shipping_title').val('');
                      $('#shipping_fname').val('');
                      $('#shipping_lname').val('');
                      $('#shipping_email').val('');
                      $('#shipping_address1').val('');
                      $('#shipping_address2').val('');
                      $('#shipping_address3').val('');
                      $('#shipping_city').val('');
                      $('#shipping_postcode').val('');
                      $('#shipping_country').val('').trigger('change');
                      $('#shipping_phone').val('');
                    }
                  });
                </script>
                <hr style="background-color:silver;height:1px;">
                <div id="ship_div">
                  <div class="col-md-2">
                  <div class="form-group">
                    <label>Title</label>
                      <select class="form-control" name="shipping_title" id="shipping_title" style="padding-left: 5px;">
                        <option value="Mr." <?php if($shipping_title=='Mr.')echo "selected='selected'";?>>Mr.</option>
                        <option value="Mrs." <?php if($shipping_title=='Mrs.')echo "selected='selected'";?>>Mrs.</option>
                      </select>
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label>First Name</label>
                      <input type="text" id="shipping_fname" name="shipping_fname" class="form-control" placeholder="Shipping First Name" value="<?= $shipping_fname?>">
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label>Last Name</label>
                      <input type="text" id="shipping_lname" name="shipping_lname" class="form-control" placeholder="Shipping Last Name" value="<?= $shipping_lname?>">
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="form-group">
                    <label>Email</label>
                      <input type="text" id="shipping_email" name="shipping_email" class="form-control" placeholder="Shipping Email" value="<?= $shipping_email?>">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Mobile No</label>
                      <input type="text" id="shipping_phone" name="shipping_phone" class="form-control" placeholder="+91" value="<?= $shipping_phone?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 1</label>
                    <input type="text" id="shipping_address1" name="shipping_address1" class="form-control" placeholder="Shipping Address Line 1" value="<?= $shipping_address1?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 2</label>
                    <input type="text" id="shipping_address2" name="shipping_address2" class="form-control" placeholder=Shipping Address Line 2" value="<?= $shipping_address2?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 3</label>
                    <input type="text" id="shipping_address3" name="shipping_address3" class="form-control" placeholder="Shipping Address Line 3" value="<?= $shipping_address3?>">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Post Code</label>
                      <input type="text" id="shipping_postcode" name="shipping_postcode" class="form-control" placeholder="Shipping Postcode" value="<?= $shipping_postcode?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>City</label>
                      <input type="text" id="shipping_city" name="shipping_city" class="form-control" placeholder="Shipping City" value="<?= $shipping_city?>">
                  </div>
                </div>
                
                <div class="col-md-3">
                <div class="form-group">
                  <label>Country</label>
                    <div class="input-group">
                      <select name="shipping_country" id="shipping_country" class="country" style="width:168px;"></select>
                      <input type="hidden" value="<?= $shipping_country?>" class="shipping_country">
                    </div>
                </div>
              </div>

                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      <!-- Receiver & Package Details -->
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <div class="box box-info">
          <div class="row">
            <div class="box-body">
            
            <div class="col-md-12">
                
              <h3><i class="fa fa-download"></i> Receiver Details</h3>
              <hr style="background-color:silver;height:1px;">
              
              <div class="col-md-2">
                  <div class="form-group">
                    <label>Title</label>
                      <select class="form-control" name="receiver_title" style="padding-left: 5px;">
                        <option value="Mr." <?php if($receiver_title=='Mr.')echo "selected='selected'";?>>Mr.</option>
                        <option value="Mrs." <?php if($receiver_title=='Mrs.')echo "selected='selected'";?>>Mrs.</option>
                      </select>
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label>First Name</label>
                      <input type="text" id="receiver_fname" name="receiver_fname" class="form-control" placeholder="Receiver First Name" value="<?= $receiver_fname?>">
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label>Last Name</label>
                      <input type="text" id="receiver_lname" name="receiver_lname" class="form-control" placeholder="Receiver Last Name" value="<?= $receiver_lname?>">
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="form-group">
                    <label>Email</label>
                      <input type="text" id="receiver_email" name="receiver_email" class="form-control" placeholder="Receiver Email" value="<?= $receiver_email?>">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Mobile No</label>
                      <input type="text" id="receiver_phone" name="receiver_phone" class="form-control" placeholder="+91" value="<?= $receiver_phone?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 1</label>
                    <input type="text" id="receiver_address1" name="receiver_address1" class="form-control" placeholder="Receiver Address Line 1" value="<?= $receiver_address1?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 2</label>
                    <input type="text" id="receiver_address2" name="receiver_address2" class="form-control" placeholder="Receiver Address Line 2" value="<?= $receiver_address2?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 3</label>
                    <input type="text" id="receiver_address3" name="receiver_address3" class="form-control" placeholder="Receiver Address Line 3" value="<?= $receiver_address3?>">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Post Code</label>
                      <input type="text" id="receiver_postcode" name="receiver_postcode" class="form-control" placeholder="Receiver Postcode" value="<?= $receiver_postcode?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>City</label>
                      <input type="text" id="receiver_city" name="receiver_city" class="form-control" placeholder="Receiver City" value="<?= $receiver_city?>">
                  </div>
                </div>
                
                <div class="col-md-3">
                <div class="form-group">
                  <label>Country</label>
                    <div class="input-group">
                      <select name="receiver_country" id="receiver_country" class="country" style="width:168px;"></select>
                      <input type="hidden" value="<?= $receiver_country?>" class="receiver_country">
                    </div>
                </div>
              </div>

              

            </div>

            </div>
          </div>
        </div>
      </div>
      <!--/.col (right) -->
      <div class="col-md-3" >
        <div class="box box-info">
          <div class="row" >
            <div class="box-body">
            <div class="col-md-12">
                
              <h3><i class="fa fa-briefcase"></i> Package Details</h3>
              <hr style="background-color:silver;height:1px;">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-8 control-label">Number Of Package :</label>

                    <div class="col-sm-4">
                      <input type="text" name="package" readonly="true" id="package" style="margin-left: -40px;width: 40px;height:25px;padding:0px 5px 0px 5px; " class="form-control">
                      <!-- <select name="package" onchange="addrowpackage(this.value);"  id="package" style="margin-left: -40px">
                      </select> -->
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <table class="table table-striped ">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Weight</th>
                        <th>Height</th>
                        <th>Width</th>
                        <th>Length</th>
                        <th>X</th>
                      </tr>
                    </thead>
                    <tbody id="package-row">
                       <?php $cnt=0; foreach($packages as $package): ?>
                          <tr>
                            <td><label><?= ($cnt+1)."."?></label></td>
                            <td><label><input type="text" style="padding:0px 0px 0px 5px" class="form-control weight" name="weight[]" value="<?= $package->weight?>"></label></td>
                            <td><label><input type="text"  style="padding:0px 0px 0px 5px" class="form-control height" name="height[]" value="<?= $package->height?>"></label></td>
                            <td><label><input type="text" style="padding:0px 0px 0px 5px" class="form-control width" name="width[]" value="<?= $package->width?>"></label></td>
                            <td><label><input type="text" style="padding:0px 0px 0px 5px" onblur="calvweight()" class="form-control length" name="length[]" value="<?= $package->length?>"></label></td>
                            <td><label><a onclick=(this.closest("tr").remove(),optionval(),calvweight());>x</a></label></td>
                          </tr>
                       <?php $cnt++; endforeach;?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="3" id="pactweight"></td>
                        <td colspan="3" id="pacvweight"></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="button" name="addrowpackage" onclick="addrowpackag();" id="addrowpackage" value="Add Box" class="btn btn-success">
                  </div>
                </div>
              </div>

            </div>

            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="box box-info">
          <div class="row" >
            <div class="box-body">
            <div class="col-md-12">
                
              <h3><i class="fa fa-gbp"></i> Charges</h3>
              <hr style="background-color:silver;height:1px;">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Total Weight</label>
                    <input type="hidden" name="hprice" id="hprice" value="1600">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="total_weight" name="total_weight" class="form-control" value="<?= $order->total_weight?>" readonly="true">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Price</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="price" name="price" class="form-control" value="<?= $order->price?>" readonly="true">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Packing Charges</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="charges" onblur="calprice();" name="charges" class="form-control" value="<?= $order->charges?>" >
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Total Amount</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="total_amt" name="total_amt" class="form-control" value="<?= $order->total_amt?>" readonly="true">
                  </div>
                </div>
              </div>

            </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Product Details -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="row">
            <div class="box-body">
            <div class="col-md-12">
                
              <h3><i class="fa fa-archive"></i> Product Details</h3>
              <hr style="background-color:silver;height:1px;">
              <?php $i=1;?>
              <?php foreach($products as $product): ?>
              <div class="row" id="product-row<?= $i?>">
                  <div class="col-md-1">  
                    <h4><label style="margin:20px 0px 0px 50px;"><?= $i?>.</label></h4>
                  </div>
                <div class="col-md-1">  
                    <div class="form-group">
                      <label>Box No</label>
                      <select name="boxno<?= $i?>" class="form-control boxno" id="boxno<?= $i?>">
                        <option><?= $product->boxno?></option>
                      </select>  
                    </div>
                </div>

                <div class="col-md-3">  
                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" name="description[]" id="description<?= $i?>" class="form-control" value="<?= $product->description?>"> 
                    </div>
                </div>

                <div class="col-md-1">  
                    <div class="form-group">
                      <label>Quantity</label>
                      <input type="text" name="quantity[]" id="quantity<?= $i?>" class="form-control" value="<?= $product->quantity?>"> 
                    </div>
                </div>

                <div class="col-md-2">  
                    <div class="form-group">
                      <label>Value Of Goods</label>
                      <input type="text" name="vogoods[]" id="vogoods<?= $i?>" class="form-control" value="<?= $product->vogoods?>"> 
                    </div>
                </div>

                <div class="col-md-4">  
                    <div class="form-group">
                      <input type="button" name="add" onclick="addrowproduct(<?= $i?>);" id="add<?= $i?>" style="margin-top: 25px;" value="Add Row" class="btn btn-success"> 
                      <input type="button" name="delete" onclick="deleterowproduct(<?= $i?>);" id="delete<?= $i?>" style="margin-top: 25px;" value="Delete Row" class="btn btn-danger"> 
                    </div>
                </div>

              </div>

              <?php $i++; endforeach; ?>
            </div>
            </div>

            </div>
          </div>
        </div>
    </div>
    <!-- Submit Button -->
    <div class="row">
      <div class="col-md-12">
        <div class="box ">
          <div class="row">
            <div class="box-body">
            <div class="col-md-12">
                <div class="col-md-offset-4 col-md-4" style="margin-top:20px;">
              <div class="form-group">
                  <input type="submit" name="submit" value="Confirm" class="btn btn-lg btn-success btn-block ">
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

    

</form>
<?php include('page-contents/frmfooter.php'); ?>
<script type="text/javascript">
  function optionval()
  {
    var no = $('#package-row tr').length;
    $('#package').val(no);
    $('.boxno').empty();
    for(var x=1;x<=no;x++)
    {
      $('.boxno').append('<option value="'+x+'">'+x+'</option>');
    }

    <?php 
$i=1;
foreach($products as $product): ?>
    $('#boxno'+<?= $i?>).val(<?= $product->boxno?>).trigger('change');
<?php $i++; endforeach; ?>
  }
</script>
<?php 
  if($st=="")
  {?>
    <script type="text/javascript">
      $('#sender_country').removeClass('country').addClass('form-control').append('<option value="'+$('.sender_country').val()+'">'+$('.sender_country').val()+'</option>');
      $('#shipping_country').removeClass('country').addClass('form-control').append('<option value="'+$('.shipping_country').val()+'">'+$('.shipping_country').val()+'</option>');
      $('#receiver_country').removeClass('country').addClass('form-control').append('<option value="'+$('.receiver_country').val()+'">'+$('.receiver_country').val()+'</option>');
    </script>
  
<script type="text/javascript">
  $(':input').attr('readonly','true');
  $('#package,#shipping_same').attr('disabled','true');
  $(':input[type=button]').attr('disabled','true');

</script> 
<?php }else{
?>
<script type="text/javascript">
  $(document).ready(function(){
    $('#sender_country').val('<?= $order->sender_country?>').trigger('change');
    $('#shipping_country').val('<?= $order->shipping_country?>').trigger('change');
    $('#receiver_country').val('<?= $order->receiver_country?>').trigger('change');
  });
  $('#package').val(<?= $cnt?>);
  optionval();
</script>
<?php } ?>
<script type="text/javascript">
  calvweight();
  function calvweight()
  {
    var height= [];
    var width = [];
    var length = [];
    var weight = 0;
    var vweight = 0;
    $('.height').each(function(index1){
      height[index1] = $(this).val();
    });
    $('.width').each(function(index2){
      width[index2] = $(this).val();
    });
    $('.length').each(function(index3){
      length[index3] = $(this).val();
    });
    $('.weight').each(function(index){
      weight = parseFloat(weight) + parseFloat($(this).val());
      vweight = vweight + (height[index]*width[index]*length[index])/5000;
    });
    $('#pactweight').empty();
    $('#pacvweight').empty();
    $('#pactweight').append("<b>Total Weight="+weight+"</b>");
    $('#pacvweight').append("<b>Vol Weight="+vweight.toFixed(3)+"</b>");
    $('#price').val($('#hprice').val());
    if(vweight>=weight)
    {
      $('#total_weight').val(Math.ceil(vweight));
      calprice();
    }
    else
    {
      $('#total_weight').val(Math.ceil(weight));
      calprice();
    }
  }

  function calprice()
  {
    var weight = $('#total_weight').val();
    var price = $('#price').val();
    var charges = $('#charges').val();
    var amt = (parseFloat(weight) * parseFloat(price)) + parseFloat(charges); 
    $('#total_amt').val(amt);
  }
  function addrowpackag()
  { 
    var x = $('#package-row tr').length;
    x++;
        $('#package-row').append('<tr><td><label>'+x+'</label></td><td><input type="text" class="form-control weight" style="padding:0px 0px 0px 5px"name="weight[]" ></td><td><input type="text" class="form-control height" style="padding:0px 0px 0px 5px" name="height[]"></td><td><input type="text" class="form-control width" style="padding:0px 0px 0px 5px" name="width[]"></td><td><input type="text" class="form-control length" style="padding:0px 0px 0px 5px" onblur="calvweight()" name="length[]"></td><td><label><a onclick=(this.closest("tr").remove(),optionval(),calvweight());>x</a></label></td></tr>');
    optionval();
  }
  
  function addrowproduct(i)
  {
    $('#product-row'+i).after('<div class="row" id="product-row'+(i+1)+'"><div class="col-md-1"><h4><label style="margin:20px 0px 0px 50px;">'+(i+1)+'.</label></h4></div><div class="col-md-1"><div class="form-group"><label>Box No</label><select name="boxno'+(i+1)+'" class="form-control boxno" id="boxno'+(i+1)+'"></select></div></div><div class="col-md-3"><div class="form-group"><label>Description</label><input type="text" name="description[]" id="description'+(i+1)+'" class="form-control"></div></div><div class="col-md-1"><div class="form-group"><label>Quantity</label><input type="text" name="quantity[]" id="quantity'+(i+1)+'" class="form-control"></div></div><div class="col-md-2"><div class="form-group"><label>Value Of Goods</label><input type="text" name="vogoods[]" id="vogoods'+(i+1)+'" class="form-control"></div></div><div class="col-md-4"><div class="form-group"><input type="button" name="add" onclick="addrowproduct('+(i+1)+');" id="add'+(i+1)+'" style="margin-top: 25px;" value="Add Row" class="btn btn-success"><input type="button" name="delete" onclick="deleterowproduct('+(i+1)+');" id="delete'+(i+1)+'" style="margin-top: 25px;margin-left:3px;" value="Delete Row" class="btn btn-danger"></div></div></div>');

    optionval();
  }

  function deleterowproduct(i)
  {
    $('#product-row'+i).remove();
  }


</script>