<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

	<head lang="en">
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>I&Me Portfolio Web App</title>

	<!-- Framework CSS -->
	<link rel="stylesheet" href="assets/blueprint-css/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="assets/blueprint-css/print.css" type="text/css" media="print">
	<link rel="stylesheet" href="assets/blueprint-css/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
	<!--[if lt IE 8]>
		<link rel="stylesheet" href="assets/blueprint-css/ie.css" type="text/css" media="screen, projection">
	<![endif]-->

	<style type="text/css" media="screen">
		p, table, hr, .box {
			margin-bottom:25px;
		}
		.box p {
			margin-bottom:10px;
		}
		.center_img {
			display: block;
			margin: 0 auto;
			margin-bottom: 30px;
		}
		.required {
			color: #F00;
			font-size: 12px;
			font-weight: bold;	
		}
	</style>

	<!-- Syntax Highlighter -->
	<link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shCore.css" media="all">
	<link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shThemeDefault.css" media="all">
	</head>

	<body>
	<div class="container">
		<h3 class="center alt">I&Me Portfolio Web App Documentation by &ldquo;theunexpected1&rdquo; v1.0</h3>
		<hr>
		<h1 class="center">I&Me Portfolio Web App Documentation</h1>
		<div class="borderTop">
			<div class="span-6 colborder info prepend-1">
				<p class="prepend-top"> <strong> Created: 26/08/2012<br>
					By: theunexpected1<br>
					Email: <a href="mailto:rahul.vagadiya@gmail.com">rahul.vagadiya@gmail.com</a> </strong> </p>
			</div>
			<!-- end div .span-6 -->
			
			<div class="span-12 last">
				<p class="prepend-top append-0">Thank you for purchasing my theme. If you have any questions that are beyond the scope of this help file, please feel free to email via my user page contact form <a href="http://themeforest.net/user/theunexpected1" target="_blank">here</a>. Thanks a lot.</p>
			</div>
		</div>
		<!-- end div .borderTop -->
		
		<hr>
		<h2 id="toc" class="alt">Table of Contents</h2>
		<img width=260" src="assets/images/app.jpg" alt="App" style="float:right; margin-top: -70px;">
		<ol>
			<li><a href="#1">Template Overview</a></li>
			<li><a href="#2">Theme Customizations</a></li>
			<li><a href="#3">Typography Elements &amp; Usage</a></li>
			<li><a href="#4">Technical Structure</a></li>
			<li><a href="#5">Third Party Components</a></li>
			<li><a href="#6">PHP/Ajax Submission</a></li>
			<li><a href="#7">Fonts</a></li>
			<li><a href="#8">Sources, Credits and Helpful Links</a></li>
		</ol>
		<div style="clear:both;float: none;"></div>

    <hr>
		<h2 id="1"><strong>1. Template overview</strong> - <a href="#toc">top</a></h2>
		<p>The template is built with the latest standards of front end development, compatible with all smartphones and tablet devices available in the market including but not limited to iPhone, iPad, Android devices, Blackberry and Windows Phone 7.</p>
		<p>The tempalte uses quality techniques like LESS CSS to reduce coding time by re-using common code, bringing programming hierarchy into styling and makes the template really easy to customize.
		Say, for example, changing the entire template's color theme can be just 1 line-changer.</p>
		
		<p><strong>Template features:</strong></p>
		<ul>
		  <li><b>Native Mobile Application</b> like design components</li>
		  <li>Huge but aesthetic <b>touch-optimized</b> links and buttons</li>
		  <li><b>Navigation bar</b>: Go home or view Next page.</li>
		  <li><b>All Personal portfolio pages</b>: About | Resume | Portfolio Gallery | Contact | [Add more pages]</li>
		  <li>iPhone application-style <b>Portfolio Gallery</b></li>
		  <li>Portfolio Gallery - <b>List And Grid style</b></li>
		  <li>Web Compatible <b>standard typography</b></li>
		  <li>Pivot <b>endless tabs</b> concept (Demo-ed in Resume page)</li>
		  <li>Working <b>AJAX Contact form with Validation</b> and Email Submission</li>
		  <li><b>Google Maps</b></li>
		  <li>Page sections, Notification boxes, column layouts, 6 buttons, 100+ icons</li>
		  <li>Contact Card and Quick social links from every page</li>
	  </ul>
		<br/>
		<img src="assets/images/3-devices.png" />
		<br/>
		<br/>
		
	<hr>
		<h2 id="2"><strong>2. Theme Customizations</strong> - <a href="#toc">top</a></h2>
		<p>This template is unique in it's own way - it can allow you to specify a "theme" color for your template, and it automatically styles the whole website based on that theme color. This is a single "css" property change on your part, and the website uses light and dark shades of your primary color throughout the template - it works like magic, using <a target="_blank" href="http://lesscss.org/">{less} CSS</a>!</p>
		
		<pre class="brush: css;" id="front-html-structure-pre">
			/*
			File: /css/styles.less
			*/
			
			/* less codes */
			
			/*THEME green */
			@themeColor1: #509b75;
			
			@themeColor2: darken(@themeColor1, 10%);
			@shadowMeColor: darken(@themeColor1, 36.5%);
			@textShadowColor: darken(@themeColor1, 25%);
		</pre>
        <hr>
		<h2 id="3"><strong>3. Typography Elements &amp; Usage</strong> - <a href="#toc">top</a></h2>
		<p>This template comes packed with a handful of typography components, below is how you can use these within your pages:</p>
        <hr>
		<ol style="list-style: lower-alpha;">
			<li>
				<h3><strong>Basic Paragraph</strong></h3>
				
				<p>This code is to write a basic paragraph.</p>
        
				<pre class="brush: html;" id="front-html-structure-pre">
				<div class="columnContainer column-1">
					<p class="column">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
				
				</pre>
			
			</li>
			<li>
				<h3><strong>Two-Column Paragraph</strong></h3>
				
				<p>This code is to write a 2-column paragraph.</p>
        
				<pre class="brush: html;" id="front-html-structure-pre">
				<div class="columnContainer column-2">
					<p class="column"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<p class="column"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<div class="clearfix"></div>
				</div>
				</pre>
			
			</li>
			<li>
				<h3><strong>Buttons </strong></h3>
				
				<p>Stylish CSS3 UI Buttons </p>
        
				<pre class="brush: html;" id="front-html-structure-pre">
					<button class="ui-corner-all ui-button">Default</button>
					<button class="ui-button-error ui-corner-all ui-button">Danger</button>
					<button class="ui-button-primary ui-corner-all ui-button">Primary</button>
					<button class="ui-button-success ui-corner-all ui-button">Success</button>

					<a class="button ui-corner-all ui-button">Anchor</a>
					<input type="submit" class="button ui-corner-all ui-button" value="Submit"/>
										
					<!-- theme button -->
			                <input type="submit" class="button buttonStrong" value="Send" name="buttonSubmit" value="submit">
				</pre>
			
			</li>
			
			
			<li>
				<h3><strong>Notice Styles</strong></h3>
				<p>There are 10 different styles of Notices available for various purposes:</p>
				<pre class="brush: html;" id="front-html-structure-pre">
					
				      <div class="ui-widget">
					<div class="ui-state-highlight ui-corner-all">
					  <p><span class="ui-icon ui-icon-info"></span>
					  Sample ui-state-highlight style.</p>
					</div>
				      </div>
			  
				      <div class="ui-widget">
					<div class="ui-state-error ui-corner-all">
					  <p><span class="ui-icon ui-icon-alert"></span>
					  Sample ui-state-error style.</p>
					</div>
				      </div>
			  
			  
				      <div class="ui-widget">
					<div class="ui-state-default ui-corner-all">
					  <p><span class="ui-icon ui-icon-mail-closed"></span>
					  Sample ui-state-default style.</p>
					</div>
				      </div>
					
				</pre>
			</li>
			
			<li>
				<h3><strong>Icon Packs Included</strong></h3>
				<p>There are over 150 iPhone icons included in the template for your use!</p>
				<pre class="brush: html;" id="front-html-structure-pre">
					<ul>
						<li class="ui-state-default ui-button ui-corner-all" title=".ui-icon-carat-1-n"><span class="ui-icon ui-icon-carat-1-n"></span></li>
						<li class="ui-state-default ui-button ui-corner-all" title=".ui-icon-triangle-1-e"><span class="ui-icon ui-icon-triangle-1-e"></span></li>
						<li class="ui-state-default ui-button ui-corner-all" title=".ui-icon-arrow-1-ne"><span class="ui-icon ui-icon-arrow-1-ne"></span></li>
						<li class="ui-state-default ui-button ui-corner-all" title=".ui-icon-arrowthick-1-se"><span class="ui-icon ui-icon-arrowthick-1-se"></span></li>
					</ul>
				</pre>
			</li>

		</ol>
		
	<hr>
		<h2 id="4"><strong>4. Technical Structure</strong> - <a href="#toc">top</a></h2>
		<p>Below is a technical structure of how the template is formed.</p>
		
		<ol style="list-style: lower-alpha;">
			<li>
				HTML<br/><br/>
				<p></p>
				<strong> Contact Card </strong>
				<br/>
				To display the contact card that is present in each page, here is the HTML markup.
				<br/>
				<br/>
				<img src="assets/images/contactCard.jpg" alt="Contact Card">
				<pre class="brush: html;">
				        <div class="profileArea">
						<div class="profilePicAreaContainer left">
						    <div class="profilePicArea">
							<!-- shadow for the image -->
							<img class="shadow" src="img/profile-pic-bg.png" alt="Profile Pic Shadow">
							<!-- your image goes next -->
							<img src="img/profile-pic-2.jpg" alt="Profile Pic">
						    </div>
						</div>
						<div class="profileInfoArea left">
						    <div class="name"> John Darwington</div>
						    <div class="position"> Programming Guru</div>
						    <div class="location"> NY, United States</div>
						    <!-- your custom social bar -->
						    <div class="social"> <a href="#" class="qtipLinker"><img src="img/social.png" alt="Social"> </a></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</pre>
				<br/>
				<br/>
				<br/>

				
				
				
				<strong> Home page links </strong>
				<br/>
				These are the 6 links on the Home page to navigate to other pages of the website.
				<br/>
				<br/>
				<img src="assets/images/homeLinks.jpg" alt="White boxes">

				<pre class="brush: html;">
					<div class="pagesMenu">
						
						<a href="about.php" id="linkAbout" class="pageLink">
						  <div class="iconBox">
						    <img src="img/home/icon-about.jpg" alt="About">
						  </div>
						  <div class="titleBox">
						    About
						  </div>
						</a>
						
						<!-- copy this and repeat after changing the Icon and Title-->
						<!-- start -->
						<a href="resume.php" id="linkResume" class="pageLink" >
						  <div class="iconBox">
						    <img src="img/home/icon-resume.jpg" alt="Resume">
						  </div>
						  <div class="titleBox">
						    Resume
						  </div>
						</a>
						<!-- end-->
						
					</div>
				</pre>
				<br/>
				<br/>
				<br/>

				
				
				
				<strong> Pivot Endless Tabs like "Resume" Page</strong>
				<br/>
				Just place the following code to display the tabs, and change the title and respective Tab reference.
				<br/>
				<br/>
				<img src="assets/images/pivotTabs.jpg" alt="Pivot Tabs">
				<br/>
				<br/>
				<strong> The Tabs </strong>

				<pre class="brush: html;">
					<div id="pivotTabs" class="pivotTabs">
						<div id="scroller">
							<ul id="thelist">
								<li> <a href="#" data-value="#qualificationsTab"> qualifications</a> </li>
								<!-- copy this and change the data-value to that section's ID which you wish to display on Tap-->
								<!-- start -->
								<li> <a href="#" data-value="#skillsTab"> skills </a> </li>
								<!-- end-->
								
								<!-- sample -->
								<li> <a href="#" data-value="#NewDiv"> show me new div</a> </li>
							</ul>
						</div>
					</div>
				</pre>
				
				<br/>
				<strong> The Tabs Containers </strong>

				<pre class="brush: html;">
					<!-- just make sure the ID is same as the reference provided above -->
					<!-- do not remove the class "pivotTab" -->
					<div id="NewDiv" class="pivotTab">
						Anything can come here
					</div>
					
				</pre>
				<br/>
				<br/>
				<br/>
				<br/>

				
				
				
				<strong> The White boxes & Section titles</strong>
				<br/>
				These are the White boxes that are containing all the content in the website, much like blocks of text.<br/>
				These are really important, as they are the primary elements in making this website look like an application. <br/><br/>
				This is because each content is treated as a repetitive block of content. <br/> Much like it would be in Apps (ItemTemplate, per say).
				<br/>
				<br/>
				<img src="assets/images/groupBox.jpg" alt="White boxes">
		
				<pre class="brush: html;">				
					<!-- gives the upcoming block a title  --> 
					<h5 class="sectionTitle"> Personal </h5>
					
					<div class="groupBox">
					  <ul>
					    <li class="first">
						<p class="value"> John Darwington </p>
						<p class="key"> Name </p>
					    </li>
					  </ul>
					</div>
				</pre>
				<br/>
				<br/>
				<br/>
				<br/>

				
				
				
				<strong> Social drop down links</strong>
				<br/>
				These are the White boxes that are containing all the content in the website, much like blocks of text.<br/>
				These are really important, as they are the primary elements in making this website look like an application. <br/><br/>
				This is because each content is treated as a repetitive block of content. <br/> Much like it would be in Apps (ItemTemplate, per say).
				<br/>
				<br/>
				<img src="assets/images/socialLinks.jpg" alt="Social links">
				<pre class="brush: html;">				
					<div class="qtipLinks">
						<div class="socialLinks">
							<!-- change anything and everything here -->
							<!-- start -->
							<a href="tel:+971501010101"> Call </a>
							<a href="fb://profile?john_doe"> Facebook </a>
							<a target="_blank" href="http://twitter.com/john_doe"> Twitter</a>
							<a href="http://linkedin.com/john_doe"> Linked In</a>
							<a href="https://plus.google.com/"> Google+</a>
							<a href="contact.php"> Contact Me</a>
							<!-- end-->
						</div>
					</div>
				</pre>
				<br/>
				<br/>
				<br/>
				<br/>
				
				<br/>

			</li>
			<li>CSS<br/><br/>
				<p>All template styles related to layout and design (except third party) can be found in: <b>/css/styles.less</b></p>
				<p><b>Powerful Less CSS</b><br/>
				The template leverages the power of dynamic and structured CSS writing style, and makes writing CSS a lot more readable and easier. Use of variables reduces your work and makes the code less messier. Below is an example:</p>
				<p>Nesting CSS Classes:</p>
				<pre class="brush: css;">
					/* You can write the below: */
					.parent-container {
						padding: 10px;
						
						.child-container {
							border: 1px solid #000;
							padding: 5px;
						}
					}
					
					/* Old-style not required like the below: */
					.parent-container {
						padding: 10px;
					}	
					.parent-container .child-container {
						border: 1px solid #000;
						padding: 5px;
					}
				</pre>
				<p>Use of Variables:</p>
				<pre class="brush: css;">
					/* You can write the below: */
					@themeColor: #ec12e3;
					
					/* You will see that this variable can be easily used instead of
					writing real color, making it easier to change your website "theme"
					at the snap of your fingers - so easy! Below example: */
					.heading {
						color: @themeColor;
					}
					p {
						background-color: @themeColor;
					}
				</pre>
				
				<p><b>Traditional CSS alternative</b><br/>
				For some reason if you decide to not use the power of lessCSS, you can anytime start writing normal simple css, as well - the template supports both styles</p>
				<pre class="brush: css;">
					/* Below will also work if you don't want lessCSS: */
					.parent-container {
						padding: 10px;
					}	
					.parent-container .child-container {
						border: 1px solid #000;
						padding: 5px;
					}
				</pre>
				<br/><br/>
				To learn more, head to <a href="http://lesscss.org/" target="_blank"> {Less} CSS </a>
				<br/>
				<br/>
			</li>
			<li>JS<br/><br/>
				<p>The javascript related to the website is written in: <b>/js/script.js</b></p>
				<p>
					The core functionality is only within the following function calls<br/><br/>
					
					<b>App.init</b>: Which initializes all components (if any), initiates binding, runs form validator and runs any page load functions<br/>
					<b>App.Forms</b>: This does the actual form validation for mobiles (For browsers, html5 native validation overrides if browser supports)<br/>
					<b>App.portfolioTabChange</b>: This is run whenever the portfolio tab is changed (Grid/List)<br/>
					<b>App.enablePivotTab</b>: Hides open tab container, and shows the respective tab that is tapped. <br/>
				</p>
			</li>

		</ol>
        <hr>
	
	<h2 id="6"><strong>6. PHP/Ajax Submission</strong> - <a href="#toc">top</a></h2>	
	<p>This template uses PHP for Contact Form, it's called "submit_contact.php"</p>
	<pre class="brush: php">

&lt;?php
	if($_POST){
	    $to = 'your.email@domain.com'; /*Put Your Email Address Here*/
	    $subject = "You have been contacted from Mobile Website.";
	    $from_name = $_POST['contactName'];
	    $from_email = $_POST['contactEmail'];
	    $from_phone = $_POST['contactPhone'];
	    $message = "<b> Name: " . $from_name . "<br/> Email: " . $from_email . " <br/> Phone: " .  $from_phone . "<br/></b><br/>----------------------------------------------- <br/><br/> " . $_POST['contactMessage'];
	    
	    $header = "From: $from_name <$from_email-->";
	    mail($to, $subject, $message, $header);
	    echo "1"; //should echo 0 if there is any error in above mail function. This is not included in demo version
	}
?&gt;
	</pre>
	
	
	
		<hr>
			<h2 id="7"><strong>7. Web Fonts</strong> - <a href="#toc">top</a></h2>
			<p>This template uses <b>Source Sans Pro</b> font style throughout, and the font is available from Google Web Fonts service, by simply including the following tag:</p>
			<pre class="brush: html">
				<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro%3A200%2C400%2C600' rel='stylesheet' type='text/css'>
			</pre>
		<hr>
			<h2 id="8"><strong>8. Sources, Credits and Helpful Links</strong> - <a href="#toc">top</a></h2>
			<p>Following are the sources that made this project possible, and some helpful links:</p>
			<ol style="list-style: lower-alpha;">
				<li>Icons and Icon Sets:<br/>
					- IconFinder: <a href="http://www.iconfinder.com/" target="_blank">http://www.iconfinder.com/</a> <br/>
					- AddyOsmani's jQuery UI Bootstrap: <a href="http://addyosmani.github.com/jquery-ui-bootstrap/" target="_blank">http://addyosmani.github.com/jquery-ui-bootstrap/</a>
				</li>
				<li>Javascript Components:<br/>
					- PhotoSwipe: <a href="http://www.photoswipe.com/" target="_blank">http://www.photoswipe.com/</a> <br/>
					- Google Web Fonts: <a href="http://www.google.com/webfonts/" target="_blank">http://www.google.com/webfonts/</a>
					- iScroll for Pivot Tabs' Scrollin and dragging: <a href="http://cubiq.org/iscroll-4" target="_blank">http://cubiq.org/iscroll-4</a>
				</li>
				<li>Others:<br/>
					- HTML Mobile Boilerplate: <a href="http://html5boilerplate.com/mobile" target="_blank">http://html5boilerplate.com/mobile</a> <br/>
				</li>
			</ol>
		
		<hr>
	


		<h2><strong>End of documentation</strong></h2>
		<hr>
		<p>Once again, thank you so much for purchasing this theme. As I said at the beginning, I'd be glad to help you if you have any questions relating to this theme. I'll do my best to assist. If you have a more general question relating to the themes on ThemeForest, you might consider visiting the forums and asking your question in the "Item Discussion" section.</p>
		<p class="append-bottom alt large"><strong>theunexpected1</strong></p>
		<p><a href="#toc">Go To Table of Contents</a></p>
		<hr class="space">
	

	</div>
	<!-- end div .container --> 

	<script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script> 
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script> 
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script> 
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script> 
	<script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script> 
	<script type="text/javascript">
     SyntaxHighlighter.all()
</script>
</body>
</html>