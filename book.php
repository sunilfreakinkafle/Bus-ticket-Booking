
<?php
session_start();
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
              <span class="lnr lnr-arrow-right" ></span>  <a "href="#"> Register</a></p>
              <span class="lnr lnr-arrow-right" style="color: grey;"></span>  <a href="#" style="color: grey;"> Print Ticket</a></p>
            </div>  
          </div>
        </div>
      </section>
      <!-- End banner Area -->
		<div class="container">
			
	       	
			<?php
					$qty=0;
					// check for a successful form post
					if (isset($_GET['s'])) 
					{
						 $transactionno=$_GET['id'];
						echo "<div class=\"alert alert-success\">".$_GET['s']." You will be automatically redirected after 2 seconds.</div>";
//						echo "You will be automatically redirected after 5 seconds.";
						header("refresh: 2; print.php");
					}

					// check for a form error
					elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";

			?> 
			<div class="jumbotron" style="margin-top: 20px; width:70%;">
				<h1>Book the tickets</h1>
			<form class="col-md-8" name="contactForm" action="register.php" method="POST">

    <div class="form-group">

      <label for="Seat no">Seat Numbers</label>
      <?php 
								for($i=1; $i<31; $i++)
								{
								$chparam = "ch" . strval($i);
								if(isset($_POST[$chparam]))
									{
									echo "<input type='text' class='form-control' name=ch".$i." value=".$i." readonly/><br>";
									$qty++;
									}
								}
							
							$_SESSION['qt']=$qty;
							?>
      
    </div>
     <div class="form-group">

      <label for="Seat no">Date of journey</label>
      <?php
						if(isset($_POST['doj']))
						{
							echo "<input type='text' name='journey_date' id='input1' class='form-control' value=". $_POST['doj'] ." readonly />";
								
						}
					?>
      
    </div>
     <div class="form-group">

      <label for="Seat no">Name</label>
      <input type="text" value="charmin" name="user_name" id="input1" placeholder="Type your name" class="form-control" pattern="[A-z ]{3,}" title="Please enter a valid name." required>
    </div>

     <div class="form-group">

      <label for="Seat no">Address</label>
      <input type="text" name="address" value="shakya" id="input2" placeholder="Type your address" class="form-control" required>
     
    </div>
     <div class="form-group">

      <label for="Seat no">Contact No</label>
      <input type="text" name="mobile" value="9812121211" pattern=".{10}" title="Please enter 10 digit no." class="form-control" placeholder="Type your mobile number" maxlength="10" required/>
    </div>
     <div class="form-group">

      <label for="Seat no">UserId</label>
    	<input type="text" class="form-control" placeholder="Type your user id" name="userid" pattern="[A-z ]{3,}" title="Please enter a valid username." required/>
    </div>
     <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" placeholder="Type your email id" name="email" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$" title="Please enter a valid email id." value="a@gmail.com" required/>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" value="hello" name="password" placeholder="Type your password" required/>
    
    </div>
     <div class="form-group">
      <label for="pwd">Message:</label>
      <textarea class="form-control" rows="3" value="hello" name="message" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,150}$" title="Please enter a valid message." ></textarea>
     
    </div>
    <input type="hidden" name="save" value="contact">
    <button type="submit" class="primary-btn text-uppercase">Submit</button>
  </form>
		</div>
	</div>
		<?php include('footer.php');?>