<?php
  session_start();
  $id=$_SESSION['trans'];
  $amount=$_SESSION['amount'];
?>
	<?php include("header.php");?>  
  <!-- End banner Area -->
<section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">       
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">
                Print Ticket    
              </h1> 
              <p class="text-white link-nav"><a href="index.php">Home </a>  
              <span class="lnr lnr-arrow-right"></span>  <a href="#"> Bus Search</a>
              <span class="lnr lnr-arrow-right"></span>  <a href="#"> Book Seat</a>
              <span class="lnr lnr-arrow-right"></span>  <a href="#"> Register</a></p>
              <span class="lnr lnr-arrow-right"></span>  <a href="#"> Print Ticket</a></p>
            </div>  
          </div>
        </div>
      </section>
      <!-- End banner Area -->
  <script language="javascript">
  function Clickheretoprint()
    { 
      var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
          disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
      var content_vlue = document.getElementById("print_content").innerHTML; 
    
      var docprint=window.open("","",disp_setting); 
      docprint.document.open(); 
      docprint.document.write('<html><head><title>Inel Power System</title>'); 
      docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
      docprint.document.write(content_vlue);          
      docprint.document.write('</body></html>'); 
      docprint.document.close(); 
      docprint.focus(); 
    }
  </script>
 
<div class="container">
      <h1 >Print and present this details upon boarding the bus </h1>

  <div id="print_content" style="width: 40%;">
    <strong style="color: white;">Ticket Reservation Details</strong><br><br>
  <?php
    include('db_login.php');


    $result = mysqli_query($connection,"SELECT * FROM register r, ticket t WHERE t.transactionno='$id'");
    while($row = mysqli_fetch_array($result))
	 {?>
	 	
         
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>#</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody >
      <tr>
        <td>Transaction Number:</td>
        <td><?php echo $row['transactionno'];?></td>
      </tr>
 		 <tr>
        <td>Name:</td>
        <td><?php echo $row['name'];?></td>
      </tr>
       <tr>
        <td>Address</td>
        <td><?php echo $row['address'];?></td>
      </tr>
       <tr>
        <td>Contact:</td>
        <td><?php echo $row['contact'];?></td>
      </tr>
       <tr>
        <td>Amount:</td>
        <td><?php echo $amount;?></td>
      </tr>
    </tbody>
  </table>
	
  
  <a class="btn btn-primary btn-lg" href="javascript:Clickheretoprint()">Print</a>
  <a class="btn btn-danger btn-lg" href="cancell.php?id=<?php echo $row['userid'];?>">Cancel Reservation</a>
    <?php
    break;
   }?>
   <div style="margin-top: 5px;">
    <form class="paypal" action="paypall/payments.php" method="post" id="paypal_form" target="_blank">
      <input type="hidden" name="cmd" value="_xclick" />
      <input type="hidden" name="no_note" value="1" />
      <input type="hidden" name="lc" value="UK" />
      <input type="hidden" name="currency_code" value="GBP" />
      <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
      <input type="hidden" name="first_name" value="Customer's First Name"  />
      <input type="hidden" name="last_name" value="Customer's Last Name"  />
      <input type="hidden" name="payer_email" value="customer@example.com"  />
      <input type="hidden" name="item_number" value="123456" / >
      <input type="submit" name="submit" value=" PayPal"/>
    </form>
  </div>
  </div><br>
 
  </div>
 <?php include("footer.php");?>
