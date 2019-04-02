<?php
?>

<html>
 <!--
Author:Dnyaneshwar Giri
Date:26-03-2019
 -->
   <head>
      <title>Book Search</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
      <style type = "text/css">
		#searchform{
			display:block;
			margin-left: auto;
			margin-right: auto;
			width: 30%;
		}
		#submit{
			display:block;
			margin-left: auto;
			margin-right: auto;
			text-align:center;
			font-family: 'Quicksand', sans-serif;
			}
      </style>
   </head>
   <body >
    <div class="container-fluid" id='container' style="margin:0;padding:0;">
			<div class="row">
				<div  class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="height:180px;color:82B1FF;">
					<p style="font-size:80px;text-align:center;">Pick-a-Book <i class="fas fa-book-open"></i></p>
				</div>
				<div  class="col-md-3 col-lg-3"></div>
				<div class="col-sm-12 col-xs-12 col-lg-6 col-md-6" style="background-color:E1BEE7;">
						<br/>
						<br/>
					   <form action="searchbook.php" name="searchform"  method="POST">
							  <p style="text-align:center;font-size:24px;">Bookname <i class="fas fa-book"></i></p>
							  <p style="text-align:center;font-size:24px;"><input type="text" name="bookname"   class="form-group input-lg"></p>
							  <p style="text-align:center;font-size:24px;">Or</p>
							  <p style="text-align:center;font-size:24px;">ISBN <i class="fas fa-barcode"></i></p>
							  <p style="text-align:center;font-size:24px;"><input type="text" name="isbn"   class="form-group input-lg"></p>
							  <button type="submit" id="submit"  class="btn btn-warning btn-lg text-dark form-group"  >
								<span style="font-size:24px;"> Search </span>
								<span style="font-size:24px;"><i class="fa fa-search"></i></span>
							  </button>
						</form>
				</div>
				<div style="" class="col-md-3 col-lg-3"></div>
			</div>
	   </div>
    <script type='text/javascript' src='js/jquery-3.3.1.js'></script>
		<script type='text/javascript' src='js/bootstrap.js'></script>
		<script type='text/javascript'>
	</script>
   </body>
</html>
