<?php
	require_once('php/connect.php');
	require_once('php/constants.php');
	session_start();
	
	$loginStatus = $NO_LOGIN;
	
	if(isset($_SESSION['email']) && isset($_SESSION['password'])){
		$result = mysqli_query($SQL, "select * from users where email='$_SESSION[email]' and password='$_SESSION[password]';");
		if($result -> num_rows === 1){
			$entry = $result -> fetch_assoc();
			if($_SESSION['email'] === $entry['email'] && $_SESSION['password'] === $entry['password']){
				$loginStatus = $LOGIN_SUCCESS;
			} else{
				$loginStatus = $LOGIN_FAIL;
				unset($_SESSION['email']);
				unset($_SESSION['password']);
				unset($_SESSION['notify']);
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>News</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css">
<link rel="stylesheet" href="css/responsive.css">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_400.font.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_700.font.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script src="js/css3-mediaqueries.js"></script>
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg{ behavior: url(js/PIE.htc); }
	</style>
  <![endif]-->
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->

</head>

<body id="page2">

<script src="script/msg_box.js"></script>
<script src="script/global_vars.js"></script>
<script type='text/javascript'>
// SCRIPTS ADDED BY PHP
<?php
	echo "isLogin = false;";
	if($loginStatus === $LOGIN_FAILED){
		echo "createAlert('Login attempt failed!');";
	} else if($loginStatus === $LOGIN_SUCCESS){
		echo "isLogin = true;";
		if(isset($_SESSION['notify']) && $_SESSION['notify'] === 1){
			$_SESSION['notify'] = 0;
			echo "createNotif('Login success!');";
		}
	}
?>
</script>

	<div class="body1">
	<div class="body2">
	<div class="body5">
		<div class="main zerogrid">
<!-- header -->
			<header>
				<div class="wrapper rơw">
				<h1><a href="index.php" id="logo"><img src="images/logo.png" /></a></h1>
				<nav>
					<ul id="menu">
						<li id="nav1"><a href="index.php">Home<span>Welcome!</span></a></li>
						<li id="nav2" class="active"><a href="News.php">News<span>Fresh</span></a></li>
						<li id="nav3"><a href="Services.php">Services<span>for you</span></a></li>
						<li id="nav4"><a href="Products.php">Products<span>The best</span></a></li>
						<li id="nav5"><a href="Contacts.php">Contacts<span>Our Address</span></a></li>
					</ul>
				</nav>
				</div>
			</header>
<!-- header end-->
		</div>
	</div>
	</div>
	</div>
	<div class="body3">
		<div class="main zerogrid">
<!-- content -->
			<article id="content">
				<div class="wrapper tabs">
					<div class="tab-content" id="tab1">
						<h5><span class="dropcap"><strong>28</strong><span>06</span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="pad_bot1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>25</strong><span>06</span></span>Duis aute irure dolor in reprehenderit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<p class="pad_bot1">Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>21</strong><span>06</span></span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
							<p class="pad_bot1">Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.</p>
							<a href="#" class="link1">Read More</a>
						</div>
					</div>
					<div class="tab-content" id="tab2">

						<h5><span class="dropcap"><strong>25</strong><span>06</span></span>Duis aute irure dolor in reprehenderit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<p class="pad_bot1">Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>21</strong><span>06</span></span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
							<p class="pad_bot1">Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>28</strong><span>06</span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="pad_bot1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
							<a href="#" class="link1">Read More</a>
						</div>
					</div>
					<div class="tab-content" id="tab3">
						<h5><span class="dropcap"><strong>21</strong><span>06</span></span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
							<p class="pad_bot1">Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>28</strong><span>06</span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="pad_bot1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>25</strong><span>06</span></span>Duis aute irure dolor in reprehenderit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<p class="pad_bot1">Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
							<a href="#" class="link1">Read More</a>
						</div>
					</div>
					<div class="tab-content" id="tab4">
						<h5><span class="dropcap"><strong>28</strong><span>06</span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="pad_bot1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>25</strong><span>06</span></span>Duis aute irure dolor in reprehenderit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<p class="pad_bot1">Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>21</strong><span>06</span></span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
							<p class="pad_bot1">Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.</p>
							<a href="#" class="link1">Read More</a>
						</div>
					</div>
					<div class="tab-content" id="tab5">

						<h5><span class="dropcap"><strong>25</strong><span>06</span></span>Duis aute irure dolor in reprehenderit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<p class="pad_bot1">Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>21</strong><span>06</span></span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
							<p class="pad_bot1">Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>28</strong><span>06</span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="pad_bot1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
							<a href="#" class="link1">Read More</a>
						</div>
					</div>
					<div class="tab-content" id="tab6">
						<h5><span class="dropcap"><strong>21</strong><span>06</span></span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
							<p class="pad_bot1">Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>28</strong><span>06</span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="pad_bot1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>25</strong><span>06</span></span>Duis aute irure dolor in reprehenderit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<p class="pad_bot1">Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
							<a href="#" class="link1">Read More</a>
						</div>
					</div>
					<ul class="nav">
						<li class="selected"><a href="#tab1">1</a></li>
						<li><a href="#tab2">2</a></li>
						<li><a href="#tab3">3</a></li>
						<li><a href="#tab4">4</a></li>
						<li><a href="#tab5">5</a></li>
						<li><a href="#tab6">6</a></li>
					</ul>
				</div>

			</article>
		</div>
	</div>
	<div class="body4">
		<div class="main zerogrid">
			<article id="content2">
				<div class="wrapper row">
					<section class="col-1-4">
					<div class="wrap-col">
						<h4>Why Us?</h4>
						<ul class="list1">
							<li><a href="#">Lorem ipsum dolor sit</a></li>
							<li><a href="#">Dmet, consectetur</a></li>
							<li><a href="#">Adipisicing elit eiusmod </a></li>
							<li><a href="#">Tempor incididunt ut</a></li>
						</ul>
					</div>
					</section>
					<section class="col-1-4">
					<div class="wrap-col">
						<h4>Address</h4>
						<ul class="address">
							<li><span>Country:</span>USA</li>
							<li><span>City:</span>San Diego</li>
							<li><span>Phone:</span>8 800 154-45-67</li>
							<li><span>Email:</span><a href="mailto:">progress@mail.com</a></li>
						</ul>
					</div>
					</section>
					<section class="col-1-4">
					<div class="wrap-col">
						<h4>Follow Us</h4>
						<ul id="icons">
							<li><a href="#"><img src="images/icon1.jpg" alt="">Facebook</a></li>
							<li><a href="#"><img src="images/icon2.jpg" alt="">Twitter</a></li>
							<li><a href="#"><img src="images/icon3.jpg" alt="">LinkedIn</a></li>
							<li><a href="#"><img src="images/icon4.jpg" alt="">Delicious</a></li>
						</ul>
					</div>
					</section>
					<section class="col-1-4">
					<div class="wrap-col">
						<h4>Newsletter</h4>
						<form id="newsletter" method="post">
							<div>
								<div class="wrapper">
									<input class="input" type="text" value="Type Your Email Here"  onblur="if(this.value=='') this.value='Type Your Email Here'" onfocus="if(this.value =='Type Your Email Here' ) this.value=''" >
								</div>
								<a href="#" class="button" onclick="document.getElementById('newsletter').submit()">Subscribe</a>
							</div>
						</form>
					</div>
					</section>
				</div>
			</article>
<!-- content end -->
		</div>
	</div>
		<div class="main zerogrid">
<!-- footer -->
			<footer>
				<a href="http://www.zerotheme.com/432/free-responsive-html5-css3-website-templates.html" target="_blank">Html5 Templates</a> by <a href="http://www.templatemonster.com/" target="_blank">Templatesmonster.com</a><br>
				<a href="http://www.zerotheme.com/432/free-responsive-html5-css3-website-templates.html" target="_blank">Responsive Themes</a> by <a href="http://www.zerotheme.com/" target="_blank">Zerotheme.com</a><br>
			</footer>
<!-- footer end -->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
<script>
	$(document).ready(function() {
		tabs.init();
	})
</script>
<script src='script/main.js'></script>
</body>
</html>