<?php
	$this->load->view("v_header");
?>
	  <div class="banner">
			<div class="banner-info text-center">
			<h3><label>Hai,</label> Welcome</h3>
			<h1>TRANSPORTATION BUS PAYMENT</h1>
			<span></span>
			<ul>
			 <li><a class="scroll" >TRANSPORTATION</a><i class="line"></i></li>
			 <li><a class="scroll" >PAYMENT</a></li>
	  </div>
</div>


<!---strat-date-piker---->
<link rel="stylesheet" href="<?php echo base_url('assets/1/'); ?>css/jquery-ui.css" />
<script src="<?php echo base_url('assets/1/'); ?>js/jquery-ui.js"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
<!---/End-date-piker---->
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/1/'); ?>css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/1/'); ?>css/JFFormStyle-1.css" />
<script type="text/javascript" src="<?php echo base_url('assets/1/'); ?>js/JFCore.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/1/'); ?>js/JFForms.js"></script>
<!-- Set here the key for your domain in order to hide the watermark on the web server -->
<script type="text/javascript">
	(function() {
		JC.init({
			domainKey: ''
		});
	})();
</script>

</div>
<!---->
<div class="package text-center">
	 <div class="container">
	 
		 <h3>Hai,Welcome</h3>
		 <p>My Admin Server</p>
		 
		<!-- requried-jsfiles-for owl -->
				<link href="<?php echo base_url('assets/1/'); ?>css/owl.carousel.css" rel="stylesheet">
							    <script src="<?php echo base_url('assets/1/'); ?>js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : true,
							        navigationText :  false,
							        pagination : false,
							      });
							    });
							    </script>
			<!-- //requried-jsfiles-for owl -->
		  <div id="owl-demo" class="owl-carousel">
			  <div class="item text-center image-grid">	
					<ul>
					 <li><img src="<?php echo base_url('assets/1/'); ?>images/a.jpg" alt=""></li>			    
					 <li><img src="<?php echo base_url('assets/1/'); ?>images/b.jpg" alt=""></li>				 
					 <li><img src="<?php echo base_url('assets/1/'); ?>images/c.jpg" alt=""></li>
					 </ul>
			  </div>
			  <div class="item text-center image-grid">	
					<ul>
					<li> <img src="<?php echo base_url('assets/1/'); ?>images/d.jpg" alt=""></li>			    
					 <li><img src="<?php echo base_url('assets/1/'); ?>images/e.jpg" alt=""></li>				 
					 <li><img src="<?php echo base_url('assets/1/'); ?>images/f.png" alt=""></li>
					 </ul>
			  </div>
		  </div>

		  
	 </div>
</div>
<!---->
<!---->
<!-----<div class="rooms text-center">-->
	 <div class="container">


	 <?php 
$count_my_page = ("hitcounter.txt");
 $hits = file($count_my_page);
 $hits[0] ++;
 $fp = fopen($count_my_page , "w");
 fputs($fp , "$hits[0]");
 fclose($fp); 
 ?>
</div>
<!---->


</script>