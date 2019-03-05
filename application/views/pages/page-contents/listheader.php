<?php include("head.php");?>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">

  <?php include("header.php");?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php include("leftside.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $nm ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url($form); ?>"><i class="fa fa-dashboard"></i>Add New</a></li>
        <li><a href="masterview.php">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header"><?= $listname ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
          
          