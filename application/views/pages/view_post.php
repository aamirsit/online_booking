<?php 
$table="post";
$pk="id";
$nm="view_post";
$form="posts/add_edit";
$listname="Posts Lists";
include('page-contents/listheader.php');
?>     
<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Content</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($posts as $post): ?>
    <tr>
      <td><?= $post->id;?></td>
      <td><?= $post->title;?></td>
      <td><?= $post->content;?></td>
      <td>
        <a href="<?= base_url('posts/add_edit/').$post->id;?>"><i class="fa fa-pencil-square fa-2x" title="Edit"></i></a>
        <a href="<?= base_url('posts/delete/').$post->id;?>" onclick="return confirm('Are Sure You want to Delete ``<?= $post->title ?>`` Post?');" title="Delete"><i class="fa fa-trash fa-2x"></i></a>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<?php include('page-contents/listfooter.php'); ?>

