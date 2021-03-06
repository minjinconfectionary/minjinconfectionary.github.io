<?php
// Free Bootstrap Themes : www.365bootstrap.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = $email
	$subject = "Minjin Confectionary";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "minjinconfectionary@gmail.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Mijnin Confectionary - Buy bithday cakes, Cafe">
    <meta name="author" content="https://www.minjinconfectionary.github.io">

	<title>Minjin Confectionary (M) Sdn Bhd</title>
  
	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	
</head>

 <body>


	<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Minjin Confectionary (M) Sdn Bhd</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="single.html">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="menu.html">Menu</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="archive.html">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->
	<header class="container">
		<p class="text-center">Monday - Sunday <strong>10AM to 10PM</strong></p>
		<marquee behavior="alternate" direction="left">
			<p align="text-center">Everyday <strong>After 8PM</strong>, 30% Discount <strong>For all products</strong>
			<img src="images/new.gif" alt="" width="30" height="15" border="0"></img></p>
		</marquee>
		<!-- CAROUSEL -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="4000">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
		 
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/banner1.jpg" alt="...">
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<h1>Quality and<br/>Delicious</h1></br>
						<p>If you can dream it, we can design & bake it.<br/>Fresh. Not frozen.</p></br>
						<a href="#" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
					</div><!-- /header-text -->
				</div>
				<div class="item">
					<img src="images/banner2.jpg" alt="...">
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<h1>Quality and<br/>Delicious</h1></br>
						<p>Everyone is happy with a cupcake in their hand. <br/>Expressions with confection.</p></br>
						<a href="#" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
					</div><!-- /header-text -->
				</div>
				<div class="item">
					<img src="images/banner3.jpg" alt="...">
					<!-- Static Header -->
					<div class="header-text hidden-xs">
						<h1>Quality and<br/>Delicious</h1></br>
						<p>Beautiful design. Exceptional taste. <br/>Because every cake has a story to tell.</p></br>
						<a href="#" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
					</div><!-- /header-text -->
				</div>
			</div>
		 
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div> <!-- Carousel -->
	</header>

	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">
		<div id="main-content">
			<div class="container">
				<article>
					<div class="heading">
						<h2>
							<span class="hr">Contact</span>
						</h2>
					</div>
					<div class="row">
						<div class='embed-container maps'>
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8149819.804819924!2d109.6181485!3d4.140634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4ceb488b9d6d%3A0x28b3a64c94a0aa1e!2sMinjin!5e0!3m2!1sen!2smy!4v1505537879979" width="100%" height="450px" frameborder="0" style="border:0"></iframe>
						</div>
						<div class="col-md-4 box-item">
							<h3>Contact Info</h3>
							<span>Minjin Confectionary Sdn Bhd<br>
							Summit USJ & Damen Mall - Malaysia<br></span>
						   <span>+603-8081 4112</span>
						<span>minjinconfectionary@gmail.com</span>
						</div>
						<div class="col-md-8">
							<h3>Contact Form</h3>
							<!--Warning-->
							<center><?php echo $text;?></center>
							<!---->
							<form name="form1" method="post" action="contact.php">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
											placeholder="Message" style="height: 190px;"></textarea>
										</div>						
										<button type="submit" class="btn btn-skin btn-block" name="submit" id="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
	
	<!-- FOOTER -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row"> 
					<div class="wrap-footer">
						<div class="container">
							<div class="row"> 
								<div class="col-footer col-md-3">
									<h2 class="footer-title">CONTACT</h2>
									<span>Minjin Confectionary Sdn Bhd<br>
										Summit USJ & Damen Mall - Malaysia<br></span>
									   <span>+603-8081 4112</span>
									<span>minjinconfectionary@gmail.com</span>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>Copyright &copy - Minjin Confectionary (M) Sdn Bhd 2017</a></p>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="https://www.facebook.com/pages/Minjin-Bakery/136436886710881"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
  
	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<!-- Custom Theme JavaScript -->
	<script src="js/agency.js"></script>

	<!-- Plugin JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
	
	<!-- carousel -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-brand").owlCarousel({
        autoPlay: 3000,
        items : 1,
		itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,2],
		navigation: false,
      });
    });
    </script>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
</body>
</html>