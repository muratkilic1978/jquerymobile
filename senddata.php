    <?php
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $preferedDate = $_POST['date'];
        $startTime = $_POST['range1'];
        $endTime = $_POST['range2'];
        $selectedCarModel = $_POST['carmodel'];
    ?>

    <div data-role="page" data-theme="b">

	<div data-role="header" >
		<h1>Toyota Reseller (Page Four)</h1>
	</div><!-- /header -->
    <div class="ui-field-contain">
        <img src="./img/toyota-logo-png.png" alt="toyota" style="width: 17%">
    </div>
	<div role="main" class="ui-content" id="ui-content-senddata">
        <h1>Thank you!</h1>
        <h2>You will recieve a confirmation mail very soon.</h2>
        <h3>Your submitted data:</h3>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="fname">Firstname:</label>
                <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $firstname; ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="lname">Lastname:</label>
                <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $lastname; ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $email; ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="date">Prefered Date:</label>
                <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $preferedDate; ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="timeslot">Preferd time slot:</label>
                <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $startTime . ' to ' . $endTime; ?></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="carmodel">Prefered car model:</label>
                <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $selectedCarModel ?></p>
                </div>
            </div>
        </form>
        <p><a href="index.php" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-icon-back ui-btn-icon-left">Back to page "one"</a></p>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page four -->
