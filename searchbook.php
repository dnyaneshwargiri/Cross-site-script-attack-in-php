<?php
	/*make db connection from config.php*/
 include("config.php");
  if($_SERVER["REQUEST_METHOD"] == "POST") {
	  $bookname="";
	  $sql="";
	  $isbn="";
	  $searchresultfor="";
	  if(isset($_POST['bookname']))
	  { $bookname = mysqli_real_escape_string($db,$_POST['bookname']);
	    $searchresultfor=$bookname;
	    $sql = "SELECT * FROM books WHERE book_name = '$bookname'";
	  }
	  if(isset($_POST['isbn']))
	  {$isbn = mysqli_real_escape_string($db,$_POST['isbn']);
	   $searchresultfor=$isbn;
	   $sql = "SELECT * FROM books WHERE isbn = '$isbn'";
	  }
      $result = mysqli_query($db,$sql);
      $error="";
      $bookrecord =array();
      $i=0;
      while( $rows = mysqli_fetch_array($result,MYSQLI_ASSOC))
      {	 foreach($rows as $row)
	 {$bookrecord[$i]=$row;
	 $i++;
	 }
     }
}
?>

<html>
 <!--
Author:Dnyaneshwar Giri
Date:26-03-2019
 -->
   <head>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
   </head>
   <body>
   <div class="container" id='container' style="s">
		<div class="row">
			<div class="hidden-xs hidden-sm col-lg-2 col-xl-2" ></div>
			<div class="col-sm-12 col-xs-12 col-lg-8 col-xl-8" >
			<?php echo('<p style="color:82B1FF;font-size:24px;"><br>Your Result For- </p>');echo $searchresultfor;?>

			<table class="table table-hover" style="font-size:16px;">
						  <thead>
							<tr>
							  <th scope="col">ISBN</th>
							  <th scope="col">Book Name</th>
							  <th scope="col">Author Name</th>
							  <th scope="col">Publication</th>
							  <th scope="col">Price</th>
							  <th scope="col">No of copies</th>
							  <!--<th scope="col">Add to cart</th>-->
							</tr>
						  </thead>

						  <tbody>
							<tr>

							   <?php
								  foreach($bookrecord as $b)
								{
									echo("<td>".$b."</td>");
								}
								?>
							 </tr>
						  </tbody>
						</table>
						<p style="text-align:center;"><button type="submit" class="btn btn-warning btn-lg text-dark form-group"  >
								<span style="font-size:16px;"> Buy </span>
								<span style="font-size:16px;"></span>
							  </button>
						</p>
				<div>
			<div class="hidden-xs hidden-sm col-lg-2 col-xl-2" ></div>
		</div>
   </div>
	<script type='text/javascript' src='js/jquery-3.3.1.js'></script>
	<script type='text/javascript' src='js/bootstrap.js'></script>
   </body>
</html>
