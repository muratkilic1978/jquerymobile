<!DOCTYPE html> 
<html>
<head>
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.5/css/themes/default/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.5/_assets/css/jqm-demos.css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut" href="http://demos.jquerymobile.com/1.4.5/favicon.ico">
	<script src="http://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
	<script src="http://demos.jquerymobile.com/1.4.5/_assets/js/index.js"></script>
	<script src="http://demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
<!-- Start of first page: #one -->
<div data-role="page" id="one">

	<div data-role="header" class="alert alert-warning">
		<h1>jQuery Mobile Multi-page</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2>One</h2>

		<p>I have an <code>id</code> of "one" on my page container. I'm first in the source order so I'm shown when the page loads.</p>

		<p>This is a multi-page boilerplate template that you can copy to build your first jQuery Mobile page. This template contains multiple "page" containers inside, unlike a single page template that has just one page within it.</p>
		<p>Just view the source and copy the code to get started. All the CSS and JS is linked to the jQuery CDN versions so this is super easy to set up. Remember to include a meta viewport tag in the head to set the zoom level.</p>
		<p>You link to internal pages by referring to the <code>id</code> of the page you want to show. For example, to <a href="#two">link</a> to the page with an <code>id</code> of "two", my link would have a <code>href="#two"</code> in the code.</p>

		<h3>Show internal pages:</h3>
		<p><a href="#two" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">Forward to page "two"</a></p>
        <!-- <p><a href="#popup" class="ui-btn ui-shadow ui-corner-all" data-rel="dialog" data-transition="turn">Show page "popup" (as a dialog)</a></p> popup window-->
	</div><!-- /content -->

	<div data-role="footer" data-theme="a" class="alert alert-warning">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page one -->

<!-- Start of second page: #two -->
<div data-role="page" id="two" data-theme="a">

	<div data-role="header" class="alert alert-warning">
		<h1>Page Two</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2>Two</h2>
		<p>I have an id of "two" on my page container. I'm the second page container in this multi-page template.</p>
		<p>Notice that the theme is different for this page because we've added a few <code>data-theme</code> swatch assigments here to show off how flexible it is. You can add any content or widget to these pages, but we're keeping these simple.</p>
		<p><a href="#one" data-direction="reverse" class="ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-left">Back to page "one"</a></p>
		<p><a href="#third" data-direction="reverse" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">Forward to page "three"</a></p>

	</div><!-- /content -->

	<div data-role="footer" class="alert alert-warning">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page two -->

<!-- Start of popup page: #popuphilux -->
<div data-role="page" id="popuphilux">

	<div data-role="header" data-theme="b"  class="alert alert-dark">
		<h1>Toyota HILUX</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2>Toyota HILUX</h2>
		<p>I have an id of "popup" on my page container and only look like a dialog because the link to me had a <code>data-rel="dialog"</code> attribute which gives me this inset look and a <code>data-transition="pop"</code> attribute to change the transition to pop. Without this, I'd be styled as a normal page.</p>
        <p><img src="./img/hilux-medium1.png" alt="Toyota C-HR" style="width: 50%"></p>
		<p><a href="#fourth" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-icon-back ui-btn-icon-left">Back to page "four"</a></p>
	</div><!-- /content -->

	<div data-role="footer" class="alert alert-dark">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page popup -->

<!-- Start of popup page: #popupavensis -->
<div data-role="page" id="popupavensis">

	<div data-role="header" data-theme="b" class="alert alert-dark" >
		<h1>Toyota AVENSIS</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2>Toyota AVENSIS</h2>
		<p>I have an id of "popup" on my page container and only look like a dialog because the link to me had a <code>data-rel="dialog"</code> attribute which gives me this inset look and a <code>data-transition="pop"</code> attribute to change the transition to pop. Without this, I'd be styled as a normal page.</p>
		<p><img src="./img/avensis-medium1.png" alt="Toyota Avensis" style="width: 50%"></p>
		<p><a href="#fourth" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-icon-back ui-btn-icon-left">Back to page "four"</a></p>
	</div><!-- /content -->

	<div data-role="footer" class="alert alert-dark" >
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page popup -->

<!-- Start of popup page: #popupgt86 -->
<div data-role="page" id="popupgt86">

	<div data-role="header" data-theme="b" class="alert alert-dark">
		<h1>Toyota GT86</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2>Toyota GT86</h2>
		<p>I have an id of "popup" on my page container and only look like a dialog because the link to me had a <code>data-rel="dialog"</code> attribute which gives me this inset look and a <code>data-transition="pop"</code> attribute to change the transition to pop. Without this, I'd be styled as a normal page.</p>
		<p><img src="./img/gt86-medium.png" alt="Toyota GT86" style="width: 50%"></p>
		<p><a href="#fourth" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-icon-back ui-btn-icon-left">Back to page "four"</a></p>
	</div><!-- /content -->

	<div data-role="footer" class="alert alert-dark" >
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page popup -->

<!-- Start of popup page: #popupgt86 -->
<div data-role="page" id="popupaygo">

	<div data-role="header" data-theme="b" class="alert alert-dark">
		<h1>Toyota AYGO</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2>Toyota AYGO</h2>
		<p>I have an id of "popup" on my page container and only look like a dialog because the link to me had a <code>data-rel="dialog"</code> attribute which gives me this inset look and a <code>data-transition="pop"</code> attribute to change the transition to pop. Without this, I'd be styled as a normal page.</p>
		<p><img src="./img/aygo-medium.png" alt="Toyota GT86" style="width: 50%"></p>
		<p><a href="#fourth" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-icon-back ui-btn-icon-left">Back to page "four"</a></p>
	</div><!-- /content -->

	<div data-role="footer" class="alert alert-dark" >
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page popup -->

<!-- Start of popup page: #popupchr -->
<div data-role="page" id="popupchr">

	<div data-role="header" data-theme="b" class="alert alert-dark">
		<h1>Toyota C-HR</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2>Toyota C-HR</h2>
		<p>I have an id of "popup" on my page container and only look like a dialog because the link to me had a <code>data-rel="dialog"</code> attribute which gives me this inset look and a <code>data-transition="pop"</code> attribute to change the transition to pop. Without this, I'd be styled as a normal page.</p>
		<p><img src="./img/ch-r-medium1.png" alt="Toyota GT86" style="width: 50%"></p>
		<p><a href="#fourth" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-icon-back ui-btn-icon-left">Back to page "four"</a></p>
	</div><!-- /content -->

	<div data-role="footer" class="alert alert-dark" >
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page popup -->

<!-- Start of popup page: #popupyaris -->
<div data-role="page" id="popupyaris">

	<div data-role="header" data-theme="b" class="alert alert-dark">
		<h1>Toyota Yaris</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2>Toyota Yaris</h2>
		<p>I have an id of "popup" on my page container and only look like a dialog because the link to me had a <code>data-rel="dialog"</code> attribute which gives me this inset look and a <code>data-transition="pop"</code> attribute to change the transition to pop. Without this, I'd be styled as a normal page.</p>
		<p><img src="./img/yaris-medium1.png" alt="Toyota GT86" style="width: 50%"></p>
		<p><a href="#fourth" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-icon-back ui-btn-icon-left">Back to page "four"</a></p>
	</div><!-- /content -->

	<div data-role="footer" class="alert alert-dark" >
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page popup -->


<!-- Start of third page: -->
<div data-role="page" id="third" data-theme="a">

	<div data-role="header" class="alert alert-dark">
		<h1>Page Three</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2>Popup</h2>
		<p>I have an id of "popup" on my page container and only look like a dialog because the link to me had a <code>data-rel="dialog"</code> attribute which gives me this inset look and a <code>data-transition="pop"</code> attribute to change the transition to pop. Without this, I'd be styled as a normal page.</p>
        <p><a href="#two" data-direction="reverse" class="ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-left">Back to page "two"</a></p>
        <p><a href="#fourth" data-direction="reverse" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">Forward to page "four"</a></p>
	</div><!-- /content -->

	<div data-role="footer" class="alert alert-warning">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page three -->

<!-- Start of fourth page: -->
<div data-role="page" id="fourth" data-theme="b">

	<div data-role="header" >
		<h1>Toyota Reseller (Page Four)</h1>
	</div><!-- /header -->
    <div class="ui-field-contain">
        <img src="./img/toyota-logo-png.png" alt="toyota" style="width: 17%">
    </div>
	<div role="main" class="ui-content">
		<h2>Choose car for Test-driving</h2>
        

        <fieldset data-role="controlgroup">
            <legend>Choose Vehicle:</legend>
            
            <ul data-role="listview" data-split-icon="gear" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
			
			<li class="ui-li-has-alt ui-li-has-thumb ui-first-child"><a href="#fifth" data-info="Hilux" class="ui-btn">
				<img src="./img/hilux-mega-menu.png">
			<h2>HILUX</h2>
			<p>Toyota Aarhus Nord/Syd</p></a>
			
				<a href="#popuphilux" data-rel="dialog" data-transition="turn" class="ui-btn ui-btn-icon-notext ui-icon-info" title="Test Drive HILUX" ></a>
			</li>
			
			<li class="ui-li-has-alt ui-li-has-thumb"><a href="#fifth" data-info="Hilux" class="ui-btn">
				<img src="./img/avensis-mega-menu.png">
			<h2>AVENSIS</h2>
			<p>Toyota Aarhus Nord</p></a>
				<a href="#popupavensis" data-rel="dialog" data-transition="turn" class="ui-btn ui-btn-icon-notext ui-icon-info" title="Test Drive Avensis"></a>
			</li>
			
			<li class="ui-li-has-alt ui-li-has-thumb ui-last-child"><a href="#fifth" data-info="Avensis" class="ui-btn">
				<img src="./img/gt86-mega-menu.png">
			<h2>GT86</h2>
			<p>Toyota Aarhus Syd</p></a>
				<a href="#popupgt86" data-rel="dialog" data-transition="turn" class="ui-btn ui-btn-icon-notext ui-icon-info" title="Test Drive AYGO"></a>
			</li>
			
			<li class="ui-li-has-alt ui-li-has-thumb ui-last-child"><a href="#fifth" data-info="GT86" class="ui-btn">
				<img src="./img/aygo-mega-menu.png">
			<h2>AYGO</h2>
			<p>Toyota Aarhus Syd</p></a>
				<a href="#popupaygo" data-rel="dialog" data-transition="turn" class="ui-btn ui-btn-icon-notext ui-icon-info" title="Test Drive AYGO"></a>
			</li>
			
			<li class="ui-li-has-alt ui-li-has-thumb ui-last-child"><a href="#fifth" data-info="AYGO" class="ui-btn">
				<img src="./img/ch-r-mega-menu.png">
			<h2>Toyota C-HR</h2>
			<p>Toyota Aarhus Nord</p></a>
				<a href="#popupchr" data-rel="dialog" data-transition="turn" class="ui-btn ui-btn-icon-notext ui-icon-info" title="Test Drive Toyota CH-R"></a>
			</li>
			
			<li class="ui-li-has-alt ui-li-has-thumb ui-last-child"><a href="#fifth" data-info="Toyota C-HR" class="ui-btn">
                <img src="./img/yaris-mega-menu.png">
			<h2>Yaris</h2>
			<p>Toyota Aarhus Nord</p></a>
				<a href="#popupyaris" data-rel="dialog" data-transition="turn" class="ui-btn ui-btn-icon-notext ui-icon-info" title="Test Drive Yaris"></a>
			</li>
		</ul>    
        </fieldset>
       
    
		<p><a href="#third" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-icon-back ui-btn-icon-left">Back to page "three"</a></p>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page four -->

<!-- Start of fifth page: #five -->
<div data-role="page" id="fifth" data-theme="b">

	<div data-role="header">
	    <h1>Submit form (Page five)</h1>
		<img src="./img/toyota-logo-png.png" alt="toyota" style="width: 17%">
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2 class="well well-lg">Try a Toyota</h2>
		
		<form action="senddata.php" method="post">   
            <div class="ui-field-contain">
                <label for="fname">Firstname:</label>
                <input type="text" name="fname" id="tfname" placeholder="Text input" value="">
            </div>
             <div class="ui-field-contain">
                <label for="lname">Lastname:</label>
                <input type="text" name="lname" id="lname" placeholder="Text input" value="">
            </div>
            <div class="ui-field-contain">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="">
            </div>
            <div class="ui-field-contain">
                <label for="date">Pick date:</label>
                <input type="date" name="date" id="date" value="">
            </div>
            <div class="ui-field-contain">
                <div data-role="rangeslider" data-mini="true">
                    <label for="range-2a">Pick time-interval:</label>
                    <input type="range" name="range1" id="range" min="8" max="18" value="9">
                    <label for="range-2b">Pick time-interval:</label>
                    <input type="range" name="range2" id="range-2b" min="08" max="18" value="12">
                </div>
            </div>
            <label for="select-choice-0" class="select">Choose car model:</label>
                <select name="carmodel" id="select-choice-0">
                   <option value="Toyota Hilux">Toyota Hilux</option>
                   <option value="Toyota Avensis">Toyota Avensis</option>
                   <option value="Toyota GT86">Toyota GT86</option>
                   <option value="Toyota AYGO">Toyota AYGO</option>
                   <option value="Toyota C-HR">Toyota C-HR</option>
                   <option value="Toyota Yaris">Toyota Yaris</option>
                </select>
            <div class="ui-field-contain">
                <input type="submit" value="Submit Button" data-theme="a"/>
            </div>
           
        </form>

	</div><!-- /content -->

	<div data-role="footer" >
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page five -->


<!-- Start of senddata page: #sixth -->
<div data-role="page" id="sixth" data-theme="b">

	<div data-role="header">
	    <h1>Thank you for submitting (Page six)</h1>
		<img src="./img/toyota-logo-png.png" alt="toyota" style="width: 17%">
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<h2 class="well well-lg">Try a Toyota</h2>
		
		

	</div><!-- /content -->

	<div data-role="footer" >
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page Six -->


</body>
</html>