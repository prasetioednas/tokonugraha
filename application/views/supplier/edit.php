<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Supplier</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url("assets/");?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url("assets/");?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url("assets/");?>bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url("assets/");?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets/");?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?= base_url("assets/");?>dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<!-- SweetAlert -->
<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?= base_url("assets/");?>index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>T</b>N</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Toko </b>Nugraha</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?= base_url("assets/");?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?= base_url("assets/");?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
           
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?= site_url('login/logout')?>" class="btn btn-default btn-flat" onclick="return confirm('Apakah anda yakin ingin keluar ?')">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url("assets/");?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">HOME</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="<?php if ($this->uri->segment('1') == 'dashboard') {echo 'active';} ?>"><a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        </ul>

        <li class="header">DATA MASTER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="<?php if ($this->uri->segment('1') == 'supplier') {echo 'active';} ?>"><a href="<?= site_url('supplier')?>"><i class="fa fa-group"></i> <span>Supplier</span></a></li>
        <!-- <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li> -->
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Barang</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if ($this->uri->segment('1') == 'satuanbarang') {echo 'active';} ?>"><a href="<?= site_url('satuan')?>">Satuan Barang</a></li>
            <li class="<?php if ($this->uri->segment('1') == 'jenisbarang') {echo 'active';} ?>"><a href="<?= site_url('jenis')?>">Jenis Barang</a></li>
            <li class="<?php if ($this->uri->segment('1') == 'databarang') {echo 'active';} ?>"><a href="<?= site_url('databarang')?>">Data Barang</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">TRANSAKSI</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="<?php if ($this->uri->segment('1') == 'barangmasuk') {echo 'active';} ?>"><a href="<?= site_url('barangmasuk')?>"><i class="fa fa-download"></i> <span>Barang Masuk</span></a></li>
        <li class="<?php if ($this->uri->segment('1') == 'barangkeluar') {echo 'active';} ?>"><a href="<?= site_url('barangkeluar')?>"><i class="fa fa-upload"></i> <span>Barang Keluar</span></a></li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">SETTINGS</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="<?php if ($this->uri->segment('1') == 'user') {echo 'active';} ?>"><a href="<?= site_url('user')?>"><i class="fa fa-user-plus"></i> <span>User Management</span></a></li>
        <!-- <li><a href="#"><i class="fa fa-upload"></i> <span>Barang Keluar</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Supplier
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Supplier</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <section class="content">
      <div class="row">
      
    <div class="col-md-8">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">UPDATE DATA SUPPLIER</h3>
        </div>
        <!-- /.box-header -->
        <?php 
        foreach ($get as $a): ?>
        <div class="box-body">
          <!-- /.box-header -->
          <form action="<?php echo site_url('supplier/action_update');?>" method="POST">
            <div class="box-body" id="view">
              <div class="form-group">
                <div class="input-group">
                </div>
              </div>

              <div class="form-group has-feedback">
                <input type="text" value="<?= $this->uri->segment(3) ?>" class="form-control" name="id_supplier" value="<?= $a->id_supplier;?>" disabled>
              </div>
              <div class="form-group has-feedback">
                <input type="text" name="nama_supplier" class="form-control" value="<?= $a->nama_supplier;?>">
              </div>
              <div class="form-group has-feedback">
                <input type="text" name="no_telp" class="form-control" value="<?= $a->no_telp;?>">
              </div>
               <div class="form-group has-feedback">
                <input type="text" name="alamat" class="form-control" value="<?= $a->alamat;?>">
              </div>
              <div class="box-footer">
                <!-- <button type="submit" href="<?= site_url('supplier');?>" class="btn btn-default">Cancel</button> -->
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>  
        <?php 
        endforeach ?>
        
      </section>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Kerja Praktik
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 <a href="#">Trex Sejahtera</a>.</strong> All rights reserved.
  </footer>


  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?= base_url("assets/");?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url("assets/");?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url("assets/");?>dist/js/adminlte.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<!-- DataTables -->
<script src="<?= base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  });

  </script>
</body>
</html>