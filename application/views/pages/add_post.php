<?php 
$table="post";
$pk="id";
$nm="add_post";
$formname="Add New Post";
$list="posts/index";
include('page-contents/frmheader.php');
if(isset($edit))
{
  $id = $edit->id;
  $title = $edit->title;
  $content = $edit->content;
}
else
{
  $id = "";
  $title = "";
  $content = "";
}
?>         
  <form class=" Insert_form" id="form1" method="post">
    <div class="row" style="min-height:460px;">
      <div class="box-body">
      <div class="col-md-12">

        <div class="col-md-offset-3 col-md-6">
          <h1 class="text-center">ADD NEW POST</h1>
          <hr style="background-color:grey;height:1px;">
        </div>

        <div class="col-md-offset-3 col-md-6">
          <div class="form-group">
            <label>Title</label>
            <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-text-height"></i>
                  </div>
                  <input type="text" data-bvalidator="minlength[10],alphanum,required" name="title" value="<?= $title ?>" placeholder="Post Title" class="form-control pull-right">
            </div>
          </div>
        </div>

        <div class="col-md-offset-3 col-md-6">
          <div class="form-group">
            <label>Content</label>
            <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-align-center"></i>
                  </div>
                  <input type="textarea" name="content" data-bvalidator="minlength[30],alphanum,required" value="<?= $content ?>" placeholder="Post Content" class="form-control pull-right">
            </div>
          </div>
        </div>
        <div class="col-md-offset-3 col-md-6" style="margin-top:20px;">
          <div class="form-group">
              <input type="submit" name="submit" class="btn btn-lg btn-success btn-block ">
          </div>
        </div>

      </div>
    </div>
  </div>
</form>
<?php include('page-contents/frmfooter.php'); ?>

