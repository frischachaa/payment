<!DOCTYPE html>
<html>
<head>
<title>Payment Transportasi</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url('assets/css/bootstrap.css'); ?> " rel="stylesheet" media="screen">
    <!-- Bootstrap core CSS -->
		<script src="<?php echo base_url('assets/js/jquery.js'); ?> "></script>
		<script src="<?php echo base_url('assets/js/bootstrap.js'); ?> "></script>
	<link href="<?php echo base_url('assets/css/jquery.dataTables.css'); ?> " rel="stylesheet" media="screen">
	
<link href="<?php echo base_url('assets/1/'); ?>css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="<?php echo base_url('assets/1/'); ?>css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="<?php echo base_url('assets/1/'); ?>js/jquery.min.js"></script>
</head>
<body>
<!--header starts-->
<div class="header">
	 <div class="top-header">
	 
		 <div class="container">
			 <div class="logo">
				
			 </div>
			 <span class="menu"> </span>
			 <div class="m-clear"></div>
			 <div class="top-menu">
				<ul>
					<li class="mt" <?php if($this->uri->segment(1) == "/beranda" || $this->uri->segment(1) == ""){echo ' class="active"';}?>>
					<a href="<?php echo site_url(); ?>/beranda">
                          <i class="fa fa-dashboard"></i>
                          <span>BERANDA</span>
                     </a>
                  </li>
				  
					
					<li class="mt add" <?php if($this->uri->segment(1) == "/data_penumpang" || $this->uri->segment(1) == ""){echo ' class="active"';}?>>
					<a href="<?php echo site_url(); ?>/data_penumpang" class="add">
                          <i class="fa fa-dashboard add"></i>
                          <span>DATA PENUMPANG</span>
                    </a>
					</li>
					
					
					<li class="mt add" <?php if($this->uri->segment(1) == "/data_halte" || $this->uri->segment(1) == ""){echo ' class="active"';}?>>
					<a href="<?php echo site_url(); ?>/data_halte" class="add">
                          <i class="fa fa-dashboard add"></i>
                          <span>DATA HALTE</span>
                    </a>
					</li>
						<li class="mt add" <?php if($this->uri->segment(1) == "/data_transaksi" || $this->uri->segment(1) == ""){echo ' class="active"';}?>>
					<a href="<?php echo site_url(); ?>/transaksi" class="add">
                          <i class="fa fa-dashboard add"></i>
                          <span>TRANSAKSI</span>
                    </a>
					</li>
				  
					<li class="mt" <?php if($this->uri->segment(1) == "/read_idtags" || $this->uri->segment(1) == ""){echo ' class="active"';}?>>
					<a href="<?php echo site_url(); ?>/read_idtags">
                          <i class="fa fa-dashboard"></i>
                          <span>READ TAG ID</span>
                    </a>
                    </li>
				</ul>
				<script>
					$("span.menu").click(function(){
						$(".top-menu ul").slideToggle(200);
					});
				</script>
			 </div>
			 <div class="clearfix"></div>
		  </div>
	  </div>
	  