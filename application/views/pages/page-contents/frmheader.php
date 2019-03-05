<?php include('head.php');?>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">

<?php include("header.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->

<?php include('leftside.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       	<?= $formname ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url($list); ?>"><i class="fa fa-list"></i> List Page</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active"><?= $formname ?></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      
            <!-- /.box-header -->
            <!-- form start -->
       
   
            
