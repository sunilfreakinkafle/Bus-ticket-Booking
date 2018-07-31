<?php include("header.php");?>	
 <!-- End banner Area -->
<section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">       
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">
                Book Seats   
              </h1> 
              <p class="text-white link-nav"><a href="index.php">Home </a>  
              <span class="lnr lnr-arrow-right" ></span>  <a href="#"> Bus Search</a>
              <span class="lnr lnr-arrow-right" style="color: grey;"></span>  <a style="color: grey;" href="#"> Book Seat</a>
              <span class="lnr lnr-arrow-right" style="color: grey;"></span>  <a style="color: grey; "href="#"> Register</a></p>
              <span class="lnr lnr-arrow-right" style="color: grey;"></span>  <a href="#" style="color: grey;"> Print Ticket</a></p>
            </div>  
          </div>
        </div>
      </section>
      <!-- End banner Area -->
<?php
	session_start();
	include('db_login.php');
	$_SESSION['date'] =$_POST['doj'];
	$route=$_POST['route'];
	?>
	<div class="container" style="margin: 60px; min-height: 400px; ">	
		<table class="table table-bordered" style="background-color: white;">
			<thead class="thead-dark">
			
				<th>Type</th>
				<th>Route</th>
				<th>Number of Seats</th>
				<th>Price</th>
				<th>Time</th>
				<th>Book</th>

			</tr>
			<tr>
				<?php
							$result = mysqli_query($connection,"SELECT * FROM bus b, route r , runs s where b.id=s.bus_id and r.id='$route'");
							while($row = mysqli_fetch_array($result))
								{	

									echo '<tr>';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['type'].'</td>';
									echo '<td><div align="right">'.$row['route'].'</a></div></td>';
									echo '<td><div align="right">'.$row['seat_no'].'</div></td>';
									echo '<td><div align="right">'.$row['price'].'</div></td>';
									echo '<td><div align="right">'.$row['time'].'</div></td>';
									
									echo '<td><a class="btn btn-danger" href="seat.php" align="right" role="button">Book Now</a></td>';
									echo '</tr>';
									
									$_SESSION["tprice"] = $row['price'];	
								}
								
							?> 
			</tr>
		</table>
	</div>

<?php include("footer.php");?>	
