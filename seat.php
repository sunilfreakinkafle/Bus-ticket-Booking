
<?php
	session_start();
	include('db_login.php');

	?>

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
              <span class="lnr lnr-arrow-right"></span>  <a href="#"> Bus Search</a>
              <span class="lnr lnr-arrow-right"></span>  <a href="#"> Book Seat</a>
              <span class="lnr lnr-arrow-right" style="color: grey;"></span>  <a style="color: grey; "href="#"> Register</a></p>
              <span class="lnr lnr-arrow-right" style="color: grey;"></span>  <a href="#" style="color: grey;"> Print Ticket</a></p>
            </div>  
          </div>
        </div>
      </section>
      <!-- End banner Area -->

		
		<div class="container">
			<div class="row well" >
				<div class="col-lg-8">
					<form action="book.php" method="POST" onsubmit="return validateCheckBox();">
						<div class="jumbotron" style="width:70%; margin-top: 20px;">
						<ul class="thumbnails">
						<?php
							
							$date = strip_tags( utf8_decode( $_SESSION['date'] ) );
							$query = "select * from seat where date = '" . $date . "'";
							$result = mysqli_query($connection,$query);
							if ( mysqli_num_rows($result) == 0 )
							{
								for($i=1; $i<31; $i++)
								{
									echo "<li class='span1'>";
										echo "<a href='#' class='thumbnail' title='Available'>";
											echo "<img src='img/available.png' alt='Available Seat'/>";
											echo "<label class='checkbox'>";
												echo "<input type='checkbox' name='ch".$i."'/>Seat".$i;
											echo "</label>";
										echo "</a>";
									echo "</li>";								
								}
							}
							else
							{	
								$seats = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
								while($row = mysqli_fetch_array($result))
								{
									$pnr = explode("-", $row['PNR']);
									$pnr[3] = intval($pnr[3]) - 1;
									$seats[$pnr[3]] = 1;
								}
								for($i=1; $i<31; $i++)
								{
									$j = $i - 1;
									if($seats[$j] == 1)
									{
										echo "<li class='span1'>";
											echo "<a href='#' class='thumbnail' title='Booked'>";
												echo "<img src='img/occupied.png' alt='Booked Seat'/>";
												echo "<label class='checkbox'>";
													echo "<input type='checkbox' name='ch".$i."' disabled/>Seat".$i;
												echo "</label>";
											echo "</a>";
										echo "</li>";
									}
									else
									{
										echo "<li class='span1'>";
											echo "<a href='#' class='thumbnail' title='Available'>";
												echo "<img src='img/available.png' alt='Available Seat'/>";
												echo "<label class='checkbox'>";
													echo "<input type='checkbox' name='ch".$i."'/>Seat".$i;
												echo "</label>";
											echo "</a>";
										echo "</li>";
									}
								}									
								
							}
						?>
						</ul>
						<center>
							<label>Date of Journey</label>
							<?php
								echo "<input type='text' class='span2' name='doj' value='". $date ."' readonly/>";
							?>
							<br><br>
							<button type="submit" class="btn btn-info">
								<i class="icon-ok icon-white"></i> Submit
							</button>
							<button type="reset" class="btn">
								<i class="icon-refresh icon-black"></i> Clear
							</button>
							<a href="./index.php" class="btn btn-danger"><i class="icon-arrow-left icon-white"></i> Back </a>
						</center>
					</div>	
					
						
					
					</form>

				</div>
				<div class="col-lg-2">
				<img src="img/seat.png" width="500px;">
				</div>
			</div>
			
		</div>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript">
			function validateCheckBox()
			{
				var c = document.getElementsByTagName('input');
				for (var i = 0; i < c.length; i++)
				{
					if (c[i].type == 'checkbox')
					{
						if (c[i].checked) 
						{
							return true;
							
						}
					}
				}
				alert('Please select at least 1 ticket.');
				return false;
			}
		</script>
<?php include('footer.php');?>