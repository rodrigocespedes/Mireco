<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MIRECO</title>

     <?php 
    echo link_tag('tem_adm/assets/css/bootstrap.css'); 
    echo link_tag('tem_adm/assets/css/font-awesome.css'); 
    echo link_tag('tem_adm/assets/js/morris/morris-0.4.3.min.css'); 
	echo link_tag('tem_adm/assets/css/custom.css'); 
    ?>

    <?php 
    echo link_tag('tem_pub/font-awesome/css/font-awesome.min.css'); 
    ?>

    <?php 
    //echo link_tag('tem_pub/css/freelancer.css');
    $allUsers = array(1,2,3,4,5,6);
    ?>
    <script src="<?= base_url(); ?>tem_adm/assets/js/jqueryValidation.min.js"></script>
    <script src="<?= base_url(); ?>tem_adm/assets/js/fieldsValidation.js"></script>  
    <script src="<?= base_url(); ?>tem_adm/assets/js/usersService.js"></script>  

    
     <!-- GOOGLE FONTS   <a class="navbar-brand"><h4><?= $this->session->userdata('cargo') ?></h4></a>  -->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">
		          <img src="<?= base_url(); ?>/tem_adm/assets/img/mireco.jpg" alt=""/>
           		</a>
            </div>
		</nav>  

        <?php
        $this->load->view('admin/'.'v_menu_admin');
		//$this->load->view('admin/'.$this->session->userdata('menu'));
        ?>
         
<!-- /. NAV TOP  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    
                     
