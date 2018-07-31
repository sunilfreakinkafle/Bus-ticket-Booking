<?php 
session_start();
$inid=$_SESSION['SESS_NAME'];
?>
<?php include('header.php');?>
<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								User Panel				
							</h1>	
							
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
<div id="content" class="clearfix">

					<div class="container">	
						<div class="jumbotron" style="background-color: white; margin-top:20px; ">
					<table class="table table-hover">
							<?php
							include('../db_login.php');
							$result = mysqli_query($connection,"SELECT * FROM register r,seat s WHERE r.userid=s.userid&&r.userid='$inid'");
							while($row = mysqli_fetch_array($result))
								{?>
						    <thead>
						      <tr>
						        <th>#</th>
						        <th>INFO</th>
						        
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td> UserID </td>
						        <td><?php echo $row['userid'];?></td>
						      </tr>
						      <tr>
						        <td> Name </td>
						        <td><?php echo $row['name'];?></td>
						      </tr>
						      <tr>
						        <td> Email </td>
						        <td><?php echo $row['email'];?></td>
						      </tr>
						      <tr>
						        <td> Password </td>
						        <td><?php echo $row['password'];?></td>
						      </tr>
						      <tr>
						        <td> Address </td>
						        <td><?php echo $row['address'];?></td>
						      </tr>
						      <tr>
						        <td> Contact </td>
						        <td><?php echo $row['contact'];?></td>
						      </tr>
						      <tr>
						        <td> Message </td>
						        <td><?php echo $row['message'];?></td>
						      </tr>
						      <tr>
						        <td> Number </td>
						        <td><?php echo $row['number'];?></td>
						      </tr>
						      <tr>
						        <td> Added Date </td>
						        <td><?php echo $row['date'];?></td>
						      </tr>
						
									
									
								
					</table>
					<a href="#" id="<?php echo $row['userid'];?>" class="btn btn-danger" role="button" id="delbutton" title="Click To Delete">Delete Account</a>
					<?php }?>
				</div>
				</div>		
						<script src="js/jquery.js"></script>
 				 <script type="text/javascript">
				$(function() {


$("#delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteuser.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>

<?php include('footer.php');?>