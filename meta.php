<?php session_start(); ?>
<?php include 'functions/fun.php';$info = new Host();$get = $_GET;?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo $info->style('master.css');?>">
    <link rel="stylesheet" href="<?php echo $info->style('font-awesome.css');?>">
    <link rel="stylesheet" href="<?php echo $info->style('animate.css');?>">
    <link rel="stylesheet" href="<?php echo $info->style('layout.css');?>">
    <link rel="stylesheet" href="<?php echo $info->style('require.css');?>">
    <link rel="stylesheet" href="<?php echo $info->style('blog.css');?>">
    <link rel="stylesheet" href="<?php echo $info->style('style.css');?>">
    <link rel="stylesheet" href="<?php echo $info->style('account.css');?>">
    <link rel="stylesheet" href="<?php echo $info->style('mobile.css');?>">
    <link rel="stylesheet" href="<?php echo $info->style('admin.css');?>">
    <link rel="stylesheet" href="<?php echo $info->root_url('Vendors/dropzone/min/dropzone.min.css');?>">
    <script src="<?php echo $info->script('jquery.js');?>" charset="utf-8"></script>
    <script src="<?php echo $info->script('app.js');?>" async charset="utf-8"></script>
    <script src="<?php echo $info->script('users.js');?>" async charset="utf-8"></script>
    <script src="<?php echo $info->root_url('Vendors/dropzone/min/dropzone.min.js');?>" charset="utf-8"></script>
    <title>TheNorth - Africa Channel</title>
    <link rel="icon" href="<?php echo $info->image('logo.png');?>">
  </head>
  <body class="index">
