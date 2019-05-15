<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include('head.php');?>
<!-- end head -->
	<body class="page1" id="top" style="background-color:#D7AD73">


<!--==============================header Starts=================================-->

<div style="background-color:#FFFFFF; ">
<header>
  <!-- navbar-->
    <?php include('navbar.php');?>
  <!--end navbar --->

		</header>
  </div>
<!--==============================header Ends=================================-->
<!-- slider-->
  <?php //include('slider.php');?>
<!-- end slider -->
<!--==============================Main contents starts=================================-->
				<div>

    <!--content -->



    <div class="container" style="background-color:#ffffff">
              <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                      <h2></h2>
                      <p> Send us your message and we will get back to you as soon as possible </p>

                      <form role="form" method="post" id="reused_form" action="">

                          <div class="row">
                              <div class="col-sm-6 form-group">
                                  <label for="name"> First Name:</label>
                                  <input type="text" class="form-control" id="firstname" name="firstname" maxlength="50">
                              </div>
                              <div class="col-sm-6 form-group">
                                  <label for="name"> Last Name:</label>
                                  <input type="text" class="form-control" id="lastname" name="lastname" maxlength="50">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6 form-group">
                                  <label for="email"> Email:</label>
                                  <input type="text" class="form-control" id="email" name="email" maxlength="50">
                              </div>
                              <div class="col-sm-6 form-group">
                                  <label for="email"> Phone:</label>
                                  <input type="tel" class="form-control" id="phone" name="phone" required maxlength="50">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-12 form-group">
                                  <label for="name"> Message:</label>
                                  <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-12 form-group">
                                  <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Post It! </button>
                              </div>
                          </div>
                      </form>
                      <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                      <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                  </div>
              </div>
          </div>


    <!-- end content -->
			</div>
<!--==============================Main contents ends=================================-->

			<div class="hor"></div>

  <!-- Footer -->
  <?php include('footer.php');?>
  <!-- end Footer -->

			</body>
</html>
