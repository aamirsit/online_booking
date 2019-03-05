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
  $sender_name = $order->sender_name;
  $sender_email = $order->sender_email;
  $sender_address = $order->sender_address;
  $sender_phone = $order->sender_phone;
  $sender_city = $order->sender_city;
  $receiver_name = $order->receiver_name;
  $receiver_phone = $order->receiver_phone;
  $receiver_address = $order->receiver_address;
  $receiver_country = $order->receiver_country;
  $receiver_state = $order->receiver_state;
  $receiver_city = $order->receiver_city;
  $receiver_pincode = $order->receiver_pincode;
  $weight = $order->weight;
  $length = $order->length;
  $height = $order->height;
  $width = $order->width;
  $submit = "Update Order";
}
else
{
  $sender_name = "";
  $sender_email = "";
  $sender_address = "";
  $sender_phone = "";
  $sender_city = "";
  $receiver_name = "";
  $receiver_phone = "";
  $receiver_address = "";
  $receiver_country = "";
  $receiver_state = "";
  $receiver_city = "";
  $receiver_pincode = "";
  $weight = "";
  $length = "";
  $height = "";
  $width = "";
  $submit = "Place Order";
}
  include('page-contents/frmheader.php');
?>    
<style type="text/css">
  h3{
    margin-top: 0px !important;
  }
</style>    
  <form class=" Insert_form" id="form1" method="post">
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
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                      </select>
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label>First Name</label>
                      <input type="text" id="sender_fname" name="sender_fname" class="form-control" placeholder="Sender First Name" value="">
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label>Last Name</label>
                      <input type="text" id="sender_lname" name="sender_lname" class="form-control" placeholder="Sender Last Name" value="">
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="form-group">
                    <label>Email</label>
                      <input type="text" id="sender_email" name="sender_email" class="form-control" placeholder="Sender Email" value="">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Mobile No</label>
                      <input type="text" id="sender_phone" name="sender_phone" class="form-control" placeholder="+91" value="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 1</label>
                    <input type="text" id="sender_address1" name="sender_address1" class="form-control" placeholder="Sender Address Line 1" value="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 2</label>
                    <input type="text" id="sender_address2" name="sender_address2" class="form-control" placeholder="Sender Address Line 2" value="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 3</label>
                    <input type="text" id="sender_address3" name="sender_address3" class="form-control" placeholder="Sender Address Line 3" value="">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Post Code</label>
                      <input type="text" id="sender_postcode" name="sender_postcode" class="form-control" placeholder="Sender Postcode" value="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>City</label>
                      <input type="text" id="sender_city" name="sender_city" class="form-control" placeholder="Sender City" value="">
                  </div>
                </div>
                
                <div class="col-md-3">
                <div class="form-group">
                  <label>Country</label>
                    <div class="input-group">
                      <select name="sender_country" id="sender_country" class="country" style="width:168px;"></select>
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
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                      </select>
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label>First Name</label>
                      <input type="text" id="shipping_fname" name="shipping_fname" class="form-control" placeholder="Shipping First Name" value="">
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label>Last Name</label>
                      <input type="text" id="shipping_lname" name="shipping_lname" class="form-control" placeholder="Shipping Last Name" value="">
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="form-group">
                    <label>Email</label>
                      <input type="text" id="shipping_email" name="shipping_email" class="form-control" placeholder="Shipping Email" value="">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Mobile No</label>
                      <input type="text" id="shipping_phone" name="shipping_phone" class="form-control" placeholder="+91" value="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 1</label>
                    <input type="text" id="shipping_address1" name="shipping_address1" class="form-control" placeholder="Shipping Address Line 1" value="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 2</label>
                    <input type="text" id="shipping_address2" name="shipping_address2" class="form-control" placeholder=Shipping Address Line 2" value="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 3</label>
                    <input type="text" id="shipping_address3" name="shipping_address3" class="form-control" placeholder="Shipping Address Line 3" value="">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Post Code</label>
                      <input type="text" id="shipping_postcode" name="shipping_postcode" class="form-control" placeholder="Shipping Postcode" value="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>City</label>
                      <input type="text" id="shipping_city" name="shipping_city" class="form-control" placeholder="Shipping City" value="">
                  </div>
                </div>
                
                <div class="col-md-3">
                <div class="form-group">
                  <label>Country</label>
                    <div class="input-group">
                      <select name="shipping_country" id="shipping_country" class="country" style="width:168px;"></select>
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
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                      </select>
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label>First Name</label>
                      <input type="text" id="receiver_fname" name="receiver_fname" class="form-control" placeholder="Receiver First Name" value="">
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <label>Last Name</label>
                      <input type="text" id="receiver_lname" name="receiver_lname" class="form-control" placeholder="Receiver Last Name" value="">
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="form-group">
                    <label>Email</label>
                      <input type="text" id="receiver_email" name="receiver_email" class="form-control" placeholder="Receiver Email" value="">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Mobile No</label>
                      <input type="text" id="receiver_phone" name="receiver_phone" class="form-control" placeholder="+91" value="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 1</label>
                    <input type="text" id="receiver_address1" name="receiver_address1" class="form-control" placeholder="Receiver Address Line 1" value="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 2</label>
                    <input type="text" id="receiver_address2" name="receiver_address2" class="form-control" placeholder="Receiver Address Line 2" value="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Address Line 3</label>
                    <input type="text" id="receiver_address3" name="receiver_address3" class="form-control" placeholder="Receiver Address Line 3" value="">
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Post Code</label>
                      <input type="text" id="receiver_postcode" name="receiver_postcode" class="form-control" placeholder="Receiver Postcode" value="">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>City</label>
                      <input type="text" id="receiver_city" name="receiver_city" class="form-control" placeholder="Receiver City" value="">
                  </div>
                </div>
                
                <div class="col-md-3">
                <div class="form-group">
                  <label>Country</label>
                    <div class="input-group">
                      <select name="receiver_country" class="country" style="width:168px;"></select>
                    </div>
                </div>
              </div>

              

            </div>

            </div>
          </div>
        </div>
      </div>
      <!--/.col (right) -->
      <div class="col-md-3">
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
                      <!-- <select name="package" onchange="addrowpackage(this.value);"  id="package" style="margin-left: -40px"> -->
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <table class="table table-bordered ">
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
                    <input type="hidden" name="hprice" id="hprice" value="1500">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="total_weight" name="total_weight" class="form-control" value="0" readonly="true">
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
                    <input type="text" id="price" name="price" class="form-control" value="0" readonly="true">
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
                    <input type="text" id="charges" onblur="calprice();" name="charges" class="form-control" value="0" >
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
                    <input type="text" id="total_amt" name="total_amt" class="form-control" value="0" readonly="true">
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
              <div class="row" id="product-row<?= $i?>">
                  <div class="col-md-1">  
                    <h4><label style="margin:20px 0px 0px 50px;"><?= $i?>.</label></h4>
                  </div>
                <div class="col-md-1">  
                    <div class="form-group">
                      <label>Box No</label>
                      <select name="boxno<?= $i?>" class="form-control boxno" id="boxno<?= $i?>">
                        
                      </select>  
                    </div>
                </div>

                <div class="col-md-3">  
                    <div class="form-group">
                      <label>Description</label>
                      <input type="text" name="description[]" id="description<?= $i?>" class="form-control"> 
                    </div>
                </div>

                <div class="col-md-1">  
                    <div class="form-group">
                      <label>Quantity</label>
                      <input type="text" name="quantity[]" id="quantity<?= $i?>" class="form-control"> 
                    </div>
                </div>

                <div class="col-md-2">  
                    <div class="form-group">
                      <label>Value Of Goods</label>
                      <input type="text" name="vogoods[]" id="vogoods<?= $i?>" class="form-control"> 
                    </div>
                </div>

                <div class="col-md-4">  
                    <div class="form-group">
                      <input type="button" name="add" onclick="addrowproduct(<?= $i?>);" id="add<?= $i?>" style="margin-top: 25px;" value="Add Row" class="btn btn-success"> 
                      <input type="button" name="delete" onclick="deleterowproduct(<?= $i?>);" id="delete<?= $i?>" style="margin-top: 25px;" value="Delete Row" class="btn btn-danger"> 
                    </div>
                </div>

              </div>
              
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
                  <input type="submit" name="submit" value="Next" class="btn btn-lg btn-success btn-block ">
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
  function calprice()
  {
    var weight = $('#total_weight').val();
    var price = $('#price').val();
    var charges = $('#charges').val();
    var amt = (parseFloat(weight) * parseFloat(price)) + parseFloat(charges); 
    $('#total_amt').val(amt);
  }

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
    $('#pacvweight').append("<b>Vol Weight="+vweight+"</b>");
    $('#price').val($('#hprice').val());
    if(vweight>=weight)
    {
      $('#total_weight').val(vweight);
      calprice();
    }
    else
    {
      $('#total_weight').val(weight);
      calprice();
    }
  }

  function addrowpackag()
  { 
    //$('#package-row').empty();
    var x = $('#package-row tr').length;
    x++;
        $('#package-row').append('<tr><td><label>'+x+'</label></td><td><input type="text" style="padding:0px 0px 0px 5px" onblur="calweight();"  class="form-control weight" name="weight[]"></td><td><input type="text" class="form-control height" style="padding:0px 0px 0px 5px" name="height[]"></td><td><input type="text" class="form-control width" style="padding:0px 0px 0px 5px" name="width[]"></td><td><input type="text" class="form-control length" style="padding:0px 0px 0px 5px" onblur="calvweight()" name="length[]"></td><td><label><a onclick=(this.closest("tr").remove(),optionval(),calvweight());>x</a></label></td></tr>');
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

  function optionval()
  {
    var no = $('#package-row tr').length;
    $('.boxno').empty();
    for(var x=1;x<=no;x++)
    {
      $('.boxno').append('<option value="'+x+'">'+x+'</option>');
    }
    $('#package').val(no);
  }
</script>