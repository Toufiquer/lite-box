<?php get_header();?>

<!-- Start Google Ranking -->
<style>
    .google_text{
        display: none;
    }
</style>
<article>
<div class="google_text">
<!-- ************************************************************ -->
<?php
	$args = array(
		'post_type'  =>  'google_seo',
	);
	$google_seo = new WP_Query( $args );
	if ( have_posts() ):
		while ( $google_seo->have_posts() ): $google_seo->the_post();
			?>
				<article>
					<?php the_post_thumbnail('post-thumbnail', ['class' => 'class_for_img']); ?>
					<h2><?php the_title(); ?></h2>
					<p><?php echo the_content(); ?></p>
				</article>
			<?php
        endwhile;
    endif;
?>
<!-- ************************************************************ -->
</div>
</article>
<!-- Stop Google Ranking -->



















<div id="article-btn"></div>
<!-- ******************************************************************************** -->
<!-- ***************  Start Article 1  |  Start Root Css  *************************** -->
<!-- ******************************************************************************** -->
<style>
	/* Start Article 1  |  Start Root Css */
	:root{
		--t-c-crimson-: crimson;
		--t-c-white-: white;
		--t-c-yellow-: yellow;
		--t-c-black-: rgba(0,0,0);
		--t-c-transparent-: rgba(0,0,0,0);
		--t-c-black-transparent-: rgba(0,0,0,0.6);
		--theme-glass-1-: linear-gradient( to right bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.98) );
		--theme-glass-2-: linear-gradient( to right bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6) );
		--theme-glass-3-: linear-gradient( to right bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) );
		--theme-glass-4-: rgba( 255, 255, 255, 0.25 );
		--font-family-: "Times New Roman" ;
	}
	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
	html,body{
		overflow-x: hidden;
		scroll-behavior: smooth;
		font-family: 'Times New Roman', Times, serif;
	}
	a{
		text-decoration: none;
	}
	a:hover{
		text-decoration: none;
		color: var(--t-c-yellow-);
	}
	hr{
		background: var(--t-c-yellow-);
	}
	img{
		height: 100%;
		width: 100%;
		object-fit: cover;
	}
	p{
		color: var(--t-c-black-);
		font-size:18px;
		margin-top: 5px;
		line-height: 18px;
		font-weight: 300;
	}
	.line-one {
		height: 1px;
		width: 200px;
		background: var(--t-c-white-);
		display: block;
		margin: 0 auto;
		padding: 0;
	}
	.active {
		color: var(--t-c-yellow-);
	}
	.inactive {
		color: var(--t-c-white-);
	}
	.sticky {
		position: fixed;
		top: 0;
		width: 100%;
		z-index: 999;
	}
	.card, .card-img-overlay, .card-header, .card-footer{
		border-radius: 0px !important;
		border: 0px !important;
	}
	.card-img, .card-img-top {
		border-top-left-radius: calc(0rem - 0px);
		border-top-right-radius: calc(0rem - 0px);
	}
	.p-top{
		padding-top: 65px;
	}
	/* End Article 1 |  End Root Css */
</style>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 1|  End Root Css  ********************************* -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************   Start Article 1.2  |  Start LogIn & Appointment  ************* -->
<!-- ******************************************************************************** -->
<style>
	/* Start LogIn */
	.um .um-form input{
		background: var(--theme-glass-3-)!important;
		color: var(--t-c-yellow-);
	}
	.um .um-button.um-alt{
		background: var(--theme-glass-3-)!important;
		color: var(--t-c-yellow-);
	}
	/* End LogIn */

	/* Start Appointment */
	.dfield input{
		width: 100% !important;
		background: var(--theme-glass-1-);
		margin-bottom: 10px;
		color: var(--t-c-yellow-);
	}
	#fbuilder .slots div a {
		background: var(--theme-glass-1-) !important;
	} 
	.pbSubmit{
		background: var(--theme-glass-1-)!important;
		color: var(--t-c-yellow-)!important;
		border: 1px solid!important;
		float: right!important;
	}
	/* End Appointment */
</style>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 1.2  |  End LogIn & Appointment ******************* -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 2  |  Start Preloader   ************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 2  |  Start Preloader */
        #article-2 .preloader {
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            font-family: "proxima-nova-soft", sans-serif;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 99999;
            overflow: hidden;
        }
        #article-2 .preloader .vertical-centered-box {
            position: absolute;
            width: 100%;
            height: 100%;
            text-align: center;
        }
        #article-2 .preloader .vertical-centered-box:after {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
            margin-right: -0.25em;
        }
        #article-2 .preloader .vertical-centered-box .content {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: inline-block;
            vertical-align: middle;
            text-align: left;
            font-size: 0;
        }
        #article-2 .preloader * {
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }
        #article-2 .preloader {
            background: #2c2d44;
        }
        #article-2 .preloader .loader-circle {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.1);
            margin-left: -60px;
            margin-top: -60px;
        }
        #article-2 .preloader .loader-line-mask {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 60px;
            height: 120px;
            margin-left: -60px;
            margin-top: -60px;
            overflow: hidden;
            -webkit-transform-origin: 60px 60px;
            -moz-transform-origin: 60px 60px;
            -ms-transform-origin: 60px 60px;
            -o-transform-origin: 60px 60px;
            transform-origin: 60px 60px;
            -webkit-animation: rotate 1.2s infinite linear;
            -moz-animation: rotate 1.2s infinite linear;
            -o-animation: rotate 1.2s infinite linear;
            animation: rotate 1.2s infinite linear;
        }
        #article-2 .preloader .loader-line-mask .loader-line {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.5);
        }
        #article-2 .preloader #particles-background,
        #particles-foreground {
            left: -51%;
            top: -51%;
            width: 202%;
            height: 202%;
            -webkit-transform: scale3d(0.5, 0.5, 1);
            -moz-transform: scale3d(0.5, 0.5, 1);
            -ms-transform: scale3d(0.5, 0.5, 1);
            -o-transform: scale3d(0.5, 0.5, 1);
            transform: scale3d(0.5, 0.5, 1);
        }
        #article-2 .preloader #particles-background {
            background: #2c2d44;
            background-image: -moz-linear-gradient(45deg, #3f3251 2%, #002025 100%);
            background-image: -webkit-linear-gradient(45deg, #3f3251 2%, #002025 100%);
            background-image: linear-gradient(45deg, #3f3251 2%, #002025 100%);
        }
        #article-2 .preloader img{
            height:118px;
            width: 118px;
        }
        lesshat-selector {
            -lh-property: 0; } 
        @-webkit-keyframes rotate{ 0% { -webkit-transform: rotate(0deg);} 100% { -webkit-transform: rotate(360deg);}}
        @-moz-keyframes rotate{ 0% { -moz-transform: rotate(0deg);} 100% { -moz-transform: rotate(360deg);}}
        @-o-keyframes rotate{ 0% { -o-transform: rotate(0deg);} 100% { -o-transform: rotate(360deg);}}
        @keyframes rotate{ 0% {-webkit-transform: rotate(0deg);-moz-transform: rotate(0deg);-ms-transform: rotate(0deg);transform: rotate(0deg);} 100% {-webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);-ms-transform: rotate(360deg);transform: rotate(360deg);}}
        [not-existing] {
            zoom: 1;
        }
        lesshat-selector {
            -lh-property: 0; } 
        @-webkit-keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
        @-moz-keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
        @-o-keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
        @keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
        [not-existing] {
            zoom: 1;
        }
        lesshat-selector {
            -lh-property: 0; } 
        @-webkit-keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
        @-moz-keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
        @-o-keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
        @keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
        [not-existing] {
            zoom: 1;
        }
		/* End Article 2 |  End Preloader  */
	</style>
	<article id="article-2">
		<!-- Start Article 2  |  Start Preloader -->
        <div class="preloader">
            <div id="particles-background" class="vertical-centered-box"></div>
            <div id="particles-foreground" class="vertical-centered-box"></div>
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/preloader.svg" alt="X" />
                </div>
            </div>
        </div>
		<!-- End Article 2  |  End Preloader  -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 2 |  End Preloader   ****************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 3  |  Start Background  ************************* -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 3  |  Start Background */
		.background-bg{
			background: url("<?php bloginfo('template_directory'); ?>/assets/img/bg.jpg");
		}
		.background-color{
			background: var(--theme-glass-3-);
		}
		.background-color-black{
			background: var(--t-c-black-);
		}
		.background{
			width: 100%;
			align-items: center;
			justify-content: center;
			background-size: cover;
			background-attachment: fixed;
			background-position: top center;
			position: relative;
			z-index: 1;
		}
		.background::after{
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			height: 100%;
			width: 100%;
			background: var(--theme-glass-1-);
			opacity: .8;
			z-index: -1;
		}
		#article-3 #myVideo{
			position: fixed;
			right: 0;
			bottom: 0;
			min-width: 100%;
			min-height: 100%;
			z-index: -1;
		}
		/* End Article 3 |  End Background */
	</style>
	<article id="article-3">
		<!-- Start Article 3  |  StartBackground -->
		<video autoplay muted loop id="myVideo">
			<source src="<?php bloginfo('template_directory'); ?>/assets/video/bg-2.mp4" type="video/mp4">
		</video>
		<!-- End Article 3  |  End Background -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 3 |  End Background  ****************************** -->
<!-- ******************************************************************************** -->















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 4  |  Start Top Address  ************************ -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 4  |  Start Top Address */
		#article-4{
			height: 30px;
			padding:0;
			color: var(--t-c-white-);
			font-size: 18px;
			overflow: hidden;
		}
		#article-4 .address{
			float: left;
		}
		#article-4 .icon{
			float: right;
		}
		#article-4 .icon a i{
			color: var(--t-c-yellow-);
			padding: 0px 5px;
		}
		@media only screen and (max-width: 1200px) {
			#article-4 .address{
				width: 780px;
			}
		}
		@media only screen and (max-width: 991px) {
			#article-4 .address{
				width: 460px;
			}
		}
		@media only screen and (max-width: 767px) {
			#article-4 .address{
				width: 170px;
			}
		}
		@media only screen and (max-width: 575px) {
			#article-4 .address{
				width: 170px;
			}
		}
		/* End Article 4 |  End Top Address */
	</style>
	<article id="article-4" class="background-color">
		<!-- Start Article 4  |  Start Top Address-->
		<div class="container">
			<div class="address">
				<i class="bi bi-telephone-fill"></i> (+880) 1991075127 | 
				<i class="bi bi-geo-alt"></i> 98/1 Bijoyshoroni, Tejgaon, Dhaka | 
				<i class="bi bi-envelope"></i> toufiquerabc@gmail.com 
			</div>
			<div class="icon">
				<a target="blank" href="https://www.facebook.com/abc.toufiquer.rahman"><i class="bi bi-facebook"></i></a>
				<a target="blank" href="https://twitter.com/ToufiquerRahma2"><i class="bi bi-twitter"></i></a>
				<a target="blank" href="https://www.linkedin.com/in/toufiquer-rahman-06060b1b9/"><i class="bi bi-linkedin"></i></a>
				<a target="blank" href="https://www.instagram.com/tofiquerabc/"><i class="bi bi-instagram"></i></a>
			</div>
		</div>
		<!-- End Article 4  |  End Top Address -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 4 |  End Top Address ****************************** -->
<!-- ******************************************************************************** -->
















<!-- ******************************************************************************** -->
<!-- ***************  Start Article 5  |  Start Navbar | Menu  ********************** -->
<!-- ******************************************************************************** -->
<div>
	<style>
		/* Start Article 5  |  Start Navbar | Menu */
		.sticky {
			position: fixed;
			top: 0;
			width: 100%;
			z-index: 999;
		}
		.line-one-navbar{
			width: 100%;
			background: var(--t-c-yellow-);
		}
		#article-5{
			z-index: 9999;
			background: var(--theme-glass-3-);
		}
		#article-5 .brand img{
			height: 65px;
			width: 300px;
		}
		#article-5 .brand h1 a{
			font-size: 28px;
			text-transform: uppercase;
			color: var(--t-c-yellow-);
			padding-left: 12px;
		}
		#article-5 .header{
			min-height: 65px;
			transition: .3s ease background-color;
		}
		#article-5 .nav-bar{
			display: flex;
			align-items: center;
			justify-content: space-between;
			width: 100%;
			height: 100%;
			max-width: 1300px;
		}
		#article-5 .nav-list ul{
			list-style: none;
			position: fixed;
			width: 100vw;
			height: 100vh;
			left: 100%;
			top: 0;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			z-index: 2;
			overflow-x: hidden;
			transition: .5s ease left;
			margin-bottom: 0;
		}
		#article-5 .nav-list ul.active {
			background: var(--theme-glass-1-);
			left: 0%;
		}
		#article-5 .nav-list ul a {
			font-size: 25px;
			font-weight: 500;
			text-decoration: none;
			color: var(--t-c-white-);
			text-transform: uppercase;
			padding: 20px;
			display: block;
		}
		#article-5 .nav-list ul li:hover a::after {
			transform: translate(-50%, -50%) scale(1);
			letter-spacing: initial;
		}
		#article-5 .nav-list ul li:hover a {
			color: var(--t-c-yellow-);
		}
		#article-5 .nav-list ul li a.active {
			color: var(--t-c-yellow-); 
		}
		#article-5 .hamburger {
			height: 60px;
			width: 60px;
			display: inline-block;
			border: 3px solid white;
			border-radius: 50%;
			position: relative;
			display: flex;
			align-items: center;
			justify-content: center;
			z-index: 100;
			cursor: pointer;
			transform: scale(.8);
			margin-right: 20px;
			margin-top: 5px;
		}
		#article-5 .hamburger:after {
			position: absolute;
			content: '';
			height: 100%;
			width: 100%;
			border-radius: 50%;
			border: 3px solid var(--t-c-white-);
			animation: hamburger-puls 1s ease infinite;
		}
		#article-5 .hamburger .bar {
			height: 2px;
			width: 30px;
			position: relative;
			background-color: var(--t-c-white-);
			z-index: -1;
		}
		#article-5 .hamburger .bar::after,
		#article-5 .hamburger .bar::before {
			content: '';
			position: absolute;
			height: 100%;
			width: 100%;
			left: 0;
			background-color: var(--t-c-white-);
			transition: .3s ease;
			transition-property: top, bottom;
		}
		#article-5 .hamburger .bar::after {
			top: 8px;
		}
		#article-5 .hamburger .bar::before {
			bottom: 8px;
		}
		#article-5 .hamburger.active .bar::before {
			bottom: 0;
		}
		#article-5 .hamburger.active .bar::after {
			top: 0;
		}
		/* Keyframes */
		@-webkit-keyframes hamburger-puls {
			0% {
				opacity: 1;
				transform: scale(1);
			}
			100% {
				opacity: 0;
				transform: scale(1.4);
			}
		}
		@-moz-keyframes hamburger-puls {
			0% {
				opacity: 1;
				transform: scale(1);
			}
			100% {
				opacity: 0;
				transform: scale(1.4);
			}
		} 
		@-o-keyframes hamburger-puls {
			0% {
				opacity: 1;
				transform: scale(1);
			}
			100% {
				opacity: 0;
				transform: scale(1.4);
			}
		} 
		@keyframes hamburger-puls {
			0% {
				opacity: 1;
				transform: scale(1);
			}
			100% {
				opacity: 0;
				transform: scale(1.4);
			}
		}
		/* Media Query For Extra Large Device */
		@media only screen and (min-width: 1023px) {
			#article-5 .header {
				z-index: 999;
			}
			#article-5 .hamburger {
				display: none;
			}
			#article-5 .nav-list ul {
				position: initial;
				display: block;
				height: auto;
				width: fit-content;
				background-color: transparent;
			}
			#article-5 .nav-list ul.active {
				background: none;
			}
			#article-5 .nav-list ul li {
				display: inline-block;
			}
			#article-5 .nav-list ul li a {
				font-size: 18px;
			}
			#article-5 .nav-list ul a:after {
				display: none;
			}
		}
		@media only screen and (max-width: 320px) {
			#article-5 .brand img{
				width: 250px;
			}
		}
		/* End Article 5 |  End Navbar | Menu */
	</style>
	<div class="line-one line-one-navbar"></div>
	<article id="article-5" class="">
		<!-- Start Article 5  |  Start Navbar | Menu-->
		<div class="header">
			<div class="container">
				<div class="nav-bar">
					<div class="brand">
						<h1><a href="">Toufiquer</a></h1>
						<!-- <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="logo"> -->
					</div>
					<div class="nav-list">
						<div class="hamburger"><div class="bar"></div></div>
						<div class="follfo">
							<nav id="navigation">
								<ul>
								  <li><a class="" href="#nav-spy-1">Home</a></li>
								  <li><a class="" href="#nav-spy-2">Services</a></li>
								  <li><a class="" href="#nav-spy-3">Portfolio</a></li>
								  <li><a class="" href="#nav-spy-4">About</a></li>
								  <li><a class="" href="#nav-spy-5">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Article 5  |  End Navbar | Menu -->
	</article>
</div>
<!-- ******************************************************************************** -->
<!-- ***************  End Article 5 |  End Navbar | Menu  *************************** -->
<!-- ******************************************************************************** -->















<!-- ----------------------------------------- -->
<style>
	.section-nav{
		background: var(--theme-glass-3-);
		backdrop-filter: blur(1px);
	}
</style>
<!-- ----------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section id="nav-spy-1" class="section-nav">
	<!-- ******************************************************************************** -->
	<!-- ***************  Start Article 6  |  Start Hero  ******************************* -->
	<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 6  |  Start Hero */
			#article-6{
				min-height: 100vh;
				width: 100%;
			}
			#article-6 .title-wrapper {
				height: 100vh;
				color: var(--t-c-white-);
				text-shadow: 0 0 55px black;
				font-size: 45px;
				padding-top: 25px;
				text-align: center;
				position: relative;
			}
			#article-6 .title-wrapper .text-wrapper {
				bottom: 25%;
				position: absolute;
				width: 100%;
			}
			#article-6 h1 {
				font-size: 45px;
			}
			#article-6 h1.cd-headline.letters.rotate-2 {
				color: var(--t-c-white-);
				font-size: 55px;
			}
			#article-6 em {
				font-size: 25px;
				color: var(--t-c-yellow-);
			}
			#article-6 a.btn.btn-hero.btn-l-m {
				color: var(--t-c-white-);
				border: 1px solid currentColor;
				font-size: 18px;
				margin-left: 7px;
				margin-top: -35px;
			}
			#article-6 a.btn.btn-hero.btn-l-m :hover {
				transition: all .7s;
				color: var(--t-c-yellow-);
			}
			#article-6 a.btn.btn-hero {
				color: var(--t-c-white-);
				border: 1px solid currentColor;
				margin-top: -35px;
				font-size: 18px;
				margin-left: -10px;
				background: var(--theme-glass-2-);
			}
			#article-6 a.btn.btn-hero:hover {
				transition: all .7s;
				color: var(--t-c-yellow-);
			}
			#article-6 .right-box{
				position: relative;
				height: 100vh;
				width: 100%;
			}
			#article-6 .first, #article-6 .second {
				color: var(--t-c-white-);
				padding: 9px 25px 9px 25px;
				background: var(--theme-glass-4-);
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
				position: absolute;
				bottom: 25%;
				max-width: 78%;
				text-align: center;
			}
			#article-6 .first .timer-sub {
				font-size: 18px;
				color: var(--t-c-yellow-);
			}
			#article-6 .first .h2{
				font-size: 35px;
			}
			#article-6 .first p {
				display: inline-block;
				color: var(--t-c-white-);
				font-size: 18px;
				text-shadow: 0 0 var(--t-c-black-);
				line-height: 18px;
			}
			#article-6 .first .contact {
				text-align: center;
			}
			#article-6 .first .icon {
				font-size: 25px;
			}
			#article-6 .first a {
				color: var(--t-c-yellow-);
				margin: 0px 3px;
			}
			#article-6 .timer {
				font-size: 25px;
			}
			#article-6 div#days-2 {
				display: inline;
				font-size: 22px;
				color: var(--t-c-yellow-);
			}
			#article-6 div#hours-2 {
				display: inline;
				font-size: 22px;
				color: var(--t-c-yellow-);
			}
			#article-6 div#minutes-2 {
				display: inline;
				font-size: 22px;
				color: var(--t-c-yellow-);
			}
			#article-6 div#seconds-2 {
				display: inline;
				font-size: 22px;
				color: var(--t-c-yellow-);
			}
			#article-6 .second p {
				color: var(--t-c-white-);
				font-size: 25px;
				display: inline-block;
				line-height: 25px;
			}
			#article-6 span.span-2.days-2 {
				display: inline;font-size: 22px;color: var(--t-c-yellow-);
			}
			#article-6 span.span-2.hours-2 {
				display: inline;
				font-size: 22px;
				color: var(--t-c-yellow-);
			}
			#article-6 span.span-2.minute-2 {
				display: inline;
				font-size: 22px;
				color: var(--t-c-yellow-);
			}
			#article-6 span.span-2.second-2 {
				display: inline;
				font-size: 22px;
				color: var(--t-c-yellow-);
			}
			#article-6 .btn.btn-appointment{
				font-size: 17px;
				color: var(--t-c-yellow-);
				border: 1px solid currentColor;
				background: var(--theme-glass-2-);
			}
			#article-6 .btn.btn-appointment:hover{
				color: var(--t-c-white-);
				background: var(--theme-glass-2-);
			}
			@media only screen and (min-width:1200px){
				#article-6 .title-wrapper {
					height: 100vh;
				}
				#article-6 .title-wrapper {
					text-align: start;
				}
				#article-6 .title-wrapper .text-wrapper {
					bottom: 20%;
					left: 5%;
			}
			}
			@media only screen and (max-width:425px){
				#article-6 .right-box{
					position: relative;
					height: 50vh;
					width: 100%;
				}
			}
			@media only screen and (max-width:767px){
				#article-6 .first, #article-6 .second{
					max-width: 100%;
				}
				#article-6 .title-wrapper .cd-headline-wrapper {
					display: flex;
					width: 100%;
					height: fit-content;
					align-items: center;
				}
				#article-6 .title-wrapper .cd-headline-wrap {
					margin: 0 auto;
				}
			}
			@media only screen and (min-width:2000px){
				
				#article-6 .title-wrapper {
					font-size: 105px;
				}
				#article-6 h1 {
					font-size: 105px;
				}
				#article-6 h1.cd-headline.letters.rotate-2 {
					font-size: 105px;
				}
				#article-6 em {
					font-size: 75px;
				}
				#article-6 a.btn.btn-hero.btn-l-m {
					font-size: 43px;
				}
				
				#article-6 a.btn.btn-hero {
					font-size: 43px;
				}
					
				#article-6 .first .timer-sub {
					font-size: 55px;
				}
				#article-6 .first .h2{
					font-size: 85px;
				}
				#article-6 .first p {
					font-size: 55px;
					line-height: 55px;
				}
				#article-6 .first .icon {
					font-size: 75px;
				}
				#article-6 .timer {
					font-size: 75px;
				}
				#article-6 div#days-2 {
					display: inline;
					font-size: 82px;
				}
				#article-6 div#hours-2 {
					display: inline;
					font-size: 72px;
				}
				#article-6 div#minutes-2 {
					font-size: 72px;
				}
				#article-6 div#seconds-2 {
					display: inline;
					font-size: 72px;
				}
				#article-6 .second p {
					font-size: 55px;
					line-height: 55px;
				}
				#article-6 span.span-2.days-2 {
					font-size: 72px;
				}
				#article-6 span.span-2.hours-2 {
					font-size: 72px;
				}
				#article-6 span.span-2.minute-2 {
					font-size: 72px;
				}
				#article-6 span.span-2.second-2 {
					font-size: 72px;
				}
				#article-6 .btn.btn-appointment{
					font-size: 45px;
				}
			}
			/* End Article 6 |  End Hero */
		</style>
		<article id="article-6">
			<!-- Start Article  6 |  Start Hero -->
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="title-wrapper">
						<div class="text-wrapper">
							<h1>Hello, I'm</h1>
							<h1>Toufiquer Rahman</h1>
							<div class="cd-headline-wrapper">
								<div class="cd-headline-wrap">
									<h1 class="cd-headline letters rotate-2">
										<p class="cd-heading">
											<span class="cd-words-wrapper">
												<b class="is-visible">Web Designer</b>
												<b>Web Developer</b>
												<b>WordPress Developer</b>
												<b>WordPress Customize</b>
												<b>UX, UI Designer</b>
											</span>
										</p>
									</h1>
								</div>
							</div>
							<a href="#nav-spy-3" class="btn btn-hero btn-l-m">Portfolio</a>
							<a target="blank" href="https://toufiquer.com/resume/toufiquer.pdf" class="btn btn-hero">Resume</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="right-box">
						<div class="row">
							<?php
							date_default_timezone_set('Asia/Dhaka');
							$hour = date('H');
							if( $hour >= 22 ){  ?>

						    <div class="first">
								<div class="col-12">
									<div class="h2">Now, I Am Available </div>
									<div class="timer-sub">Contact Me for the Better experience</div>
									<p>What Do You Think About I Will Contact You In One Hour?</p>
									<hr>
									<div class="contact">
										<div class="icon">
											<a target="blank" href="https://www.facebook.com/abc.toufiquer.rahman"><i class="bi bi-facebook"></i></a>
											<a target="blank" href="https://twitter.com/ToufiquerRahma2"><i class="bi bi-twitter"></i></a>
											<a target="blank" href="https://www.linkedin.com/in/toufiquer-rahman-06060b1b9/"><i class="bi bi-linkedin"></i></a>
											<a target="blank" href="https://www.instagram.com/tofiquerabc/"><i class="bi bi-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
							<?php }else{ ?>
							<div class="second">
								<div class="timer">Now, I Am Not Available, </br> I Will Be Available In,</div>
								<div class="timer-count">
									<div id="days-2"></div><span class="span-2 days-2">D, </span>
									<div id="hours-2"></div><span class="span-2 hours-2">H, </span>
									<div id="minutes-2"></div><span class="span-2 minute-2">M, </span>
									<div id="seconds-2"></div><span class="span-2 second-2">S </span>
								</div>
								<p>Fix An Appointment For The Better Solution.</p>
								<div class="col-12">
									<a href="https://toufiquer.com/appointment/" class="btn btn-appointment">Appointment </a>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 6  |  End Hero -->
		</article>
		
		<script>
			var date = new Date();
			var v_minute = date.getMinutes();
			var v_hour = date.getHours();
			/* var v_hour = 22; */
			var v_date = date.getDate() ;
			var v_month = date.getMonth() +1;
			var v_year = date.getFullYear();
			var newYear____ = v_month+ " " +v_date + " " + " " + v_year + " " + "22" +  ":" + "00" + ":00";
			console.log(newYear____);
			var newYear__ = newYear____;
			/* var newYear__ = "2 17 2022 22:38:47 "; */
			var countdown__ = function (e__) {
				var diff = new Date(e__).valueOf() - new Date().valueOf();
				var total = Math.floor(diff / 1000);
				var days__ = Math.floor(total / 3600 / 24);
				var hours__ = Math.floor((total / 3600) % 24);
				var minutes__ = Math.floor(total / 60) % 60;
				var seconds = Math.floor(total) % 60;
				ui__(days__, hours__, minutes__, seconds);
			};
			var ui__ = function (d__, h__, m__, s__) {
				var days__ = document.querySelector('#days-2');
				var hours__ = document.querySelector('#hours-2');
				var minutes__ = document.querySelector('#minutes-2');
				var seconds = document.querySelector('#seconds-2');
				days__.innerText = zero(d__);
				hours__.innerText = zero(h__);
				minutes__.innerText = zero(m__);
				seconds.innerText = zero(s__);
			};
			var zero = function (e__) { return (e__ < 10 ? ("0" + e__).toString() : e__.toString()); };
			/* ></> */
			countdown__(newYear__);
			setInterval(function () { return countdown__(newYear__); }, 1000);
		</script>
	</div>
	<!-- ******************************************************************************** -->
	<!-- ***************  End Article 6 |  End Hero  ************************************ -->
	<!-- ******************************************************************************** -->
</section>
<!-- ---------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section id="nav-spy-2" class="p-top section-nav">
	<!-- ******************************************************************************** -->
	<!-- ***************  Start Article 8  |  Start How We Work ************************* -->
	<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 8  |  Start How We Work */
			#article-8{
				overflow: hidden;
				height: auto;
			}
			#article-8 h1{
				font-size: 35px;
				color: var(--t-c-crimson-);
				font-weight: bolder;
			}
			#article-8 h2{
				font-size: 35px;
				color: var(--t-c-yellow-);
			}
			#article-8 p{
				color: var(--t-c-white-);
				text-align: justify;
			}
			#article-8 .image-0{
				padding:0;
			}
			#article-8 .line-dell{
				height: 1px;
				width: 100%;
				background: var(--t-c-white-);
				display: block;
				padding: 0;
			}
			#article-8 .article-item{
				background: var(--theme-glass-4-);
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
				border: 1px solid rgba( 255, 255, 255, 0.18 );
				color: var(--t-c-white-);
				margin-bottom: 20px;
			}
			/* End Article 8 |  End How We Work*/
		</style>
		<article id="article-8">
			<!-- Start Article 8  |  Start How We Work -->
				<div class="title">
					<div class="container py-5">
						<div class="text-center">
							<h1>How I Work</h1> 
						</div>
						<div class="line-one"></div>
					</div>
				</div>
				
				<div class="container" data-aos="fade-up" data-aos-duration="1000">
					<div class="row article-item">
						<div class="col-12 col-lg-6 image-0">
							<div class="image">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/uxui.jpg" alt="How We Work" />
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="article">
								<h2>Web Design (UX UI Based)</h2>
								<div class="line-dell"></div>
								<p>First of all, I Design a Website template based on UX(User experience) and UI(User interface). Because UX is all about developing a better digital world for humanity. It’s a field that requires innovation, but that is constantly evolving. In this sense, UX-UI can help provide an indication of all kinds of directions your future projects should take. I design a web template, such that the user is not confused and also they become to know that how they will be benefited from this place. I also try to make sure that all the customers who visited this website are happy and they all remember this website for a long time.</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="container" data-aos="fade-up" data-aos-duration="1000">
					<div class="row article-item">
						<div class="col-12 col-lg-6 image-0">
							<div class="image">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/development.jpg" alt="How We Work" />
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="article">
								<h2>WordPress Theme Development</h2>
								<div class="line-dell"></div>
								<p>After that, I Starting to make it dynamic. So that The owner can customize his own website easily and smoothly. I usually used WordPress tool to Dynamic or Development a website. Because it can be tailored to fit just about any site need Plus, there are tons of themes to choose from to make your website look unique and lots of plugins to add cool features. And all of them are available online and will give you the skills you need to go from a newbie to a WordPress pro. Also, I ensure that the security of the website is strong enough to protect it from hackers. I am trying to make it faster for everyone. It helps with google SEO.</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="container" data-aos="fade-up" data-aos-duration="1000">
					<div class="row article-item">
						<div class="col-12 col-lg-6 image-0">
							<div class="image">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/seo.jpg" alt="How We Work" />
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="article">
								<h2>Google Ranking </h2>
								<div class="line-dell"></div>
								<p>Nowadays, Google is the most powerful tool for marketing. I am trying to get the first rank on google's front page. It Covers Google, Bing, Yahoo news, updates, and SEO. Also covers topics such as SEO tools, SEO interviews, affiliate marketing, search technology, social search, legal search issues, web promotion, SEM companies, search theory, and much more. The purpose behind the Search Engine Rotatable is to report on the most interesting threads taking place at the SEM (Search Engine Marketing) forums.</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="container" data-aos="fade-up" data-aos-duration="1000">
					<div class="row article-item">
						<div class="col-12 col-lg-6 image-0">
							<div class="image">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/bg-google.png" alt="How We Work" />
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="article">
								<h2>Ranking List</h2>
								<div class="line-dell"></div>
								<h4>Search in google for test</h4>
								<p>1. Toufiquer Rahman Web Developer</p>
								<p>2. Toufiquer Rahman WordPress Theme Developer</p>
								<p>3. Toufiquer Rahman Backend Developer</p>
								<p>4. Toufiquer Rahman Web Designer and Developer</p>
							</div>
						</div>
					</div>
				</div>
			<!-- End Article 8  |  End How We Work-->
		</article>
	</div>
	<!-- ******************************************************************************** -->
	<!-- ***************  End Article 8 |  End  How We Work  **************************** -->
	<!-- ******************************************************************************** -->


	<!-- ******************************************************************************** -->
	<!-- ***************  Start Article 10  |  Start Review   *************************** -->
	<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 10  |  Start Review */
			#article_10{
				color: var(--t-c-crimson-);
				position: relative;
			}
			#article_10 h1{
				font-size: 35px;
			}
			#article_10 h4{
				font-size: 25px;
			}
			#article_10 .item{
				margin: 0 12px;
			}
			#article_10 .card{
				background: none;
			}
			#article_10 .text-box{
				background: rgba( 47, 89, 175, 0.20 );
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 6.5px );
				-webkit-backdrop-filter: blur( 6.5px );
				/* border-radius: 10px; */
				border: 1px solid rgba( 255, 255, 255, 0.18 );
			}
			#article_10 .text-box p{
				color: var(--t-c-white-);
			}
			#article_10 .text-box a.btn {
				color: var(--t-c-yellow-);
				border: 1px solid;
				font-size: 15px;
			}
			#article_10 .text-box a:hover.btn {
				background: var(--theme-glass-1-);
			}
			#article_10 .line-one{
				height: 1px;
				width: 100%;
				background: var(--t-c-white-);
				display: block;
				padding: 0;
			}
			#article_10 .owl-nav{
				display: none;
			}
			#article_10 .owl-dots{
				margin: 6px auto;
			}
			#article_10  .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
                background: #ffff03;
            }
			/* End Article 10 |  End Review */
		</style>
		<article id="article_10" data-aos="fade-up" data-aos-duration="1000">
			<!-- Start Article 10  |  Start Review -->
			<div class="title">
				<div class="container py-5">
					<div class="text-center">
						<h1>The Better Solution </h1> 
					</div>
					<div class="line-one"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="owl-carousel-2 owl-carousel owl-theme">
							
							<div class="item card">
								<div class="card">
									<img class="img-cut card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/img/uxui-2.jpg" alt="Services Title" />
									<div class="card-body text-box">
										<h4>Web Design (UX UI Based)</h4>
										<div class="line-one"></div>
										<p>Starting At $8 Per Hour, Recognitions and Negotiable</p>
										<a class="btn" href="https://www.freelancer.com/u/abcToufiquer">Place Order</a>
									</div>
								</div>
							</div>
							
							<div class="item card">
								<div class="card">
									<img class="img-cut card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/img/develop-2.jpg" alt="Services Title" />
									<div class="card-body text-box">
										<h4>WordPress Theme Development</h4>
										<div class="line-one"></div>
										<p>Starting At $8 Per Hour, Recognitions and Negotiable</p>
										<a class="btn" href="https://www.freelancer.com/u/abcToufiquer">Place Order</a>
									</div>
								</div>
							</div>
							
							<div class="item card">
								<div class="card">
									<img class="img-cut card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/img/google-ranking.jpg" alt="Services Title" />
									<div class="card-body text-box">
										<h4>Google Ranking (SEO)</h4>
										<div class="line-one"></div>
										<p>Starting At $8 Per Hour, Recognitions and Negotiable</p>
										<a class="btn" href="https://www.freelancer.com/u/abcToufiquer">Place Order</a>
									</div>
								</div>
							</div>
							
							<div class="item card">
								<div class="card">
									<img class="img-cut card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/img/ssl.png" alt="Services Title" />
									<div class="card-body text-box">
										<h4> SSL Certification</h4>
										<div class="line-one"></div>
										<p>Starting At $8 Per Hour, Recognitions and Negotiable</p>
										<a class="btn" href="https://www.freelancer.com/u/abcToufiquer">Place Order</a>
									</div>
								</div>
							</div>
							
							<div class="item card">
								<div class="card">
									<img class="img-cut card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/img/appoint.jpg" alt="Services Title" />
									<div class="card-body text-box">
										<h4>Form & Appoint Booking</h4>
										<div class="line-one"></div>
										<p>Starting At $8 Per Hour, Recognitions and Negotiable</p>
										<a class="btn" href="https://www.freelancer.com/u/abcToufiquer">Place Order</a>
									</div>
								</div>
							</div>

							<div class="item card">
								<div class="card">
									<img class="img-cut card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/img/boost.jpg" alt="Services Title" />
									<div class="card-body text-box">
										<h4>Backup & Boost Website</h4>
										<div class="line-one"></div>
										<p>Starting At $8 Per Hour, Recognitions and Negotiable</p>
										<a class="btn" href="https://www.freelancer.com/u/abcToufiquer">Place Order</a>
									</div>
								</div>
							</div>

							<div class="item card">
								<div class="card text-info">
									<img class="img-cut card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/img/client.jpg" alt="Services Title" />
									<div class="card-body text-box">
										<h4>Combo</h4>
										<div class="line-one"></div>
										<p class=" text-info">First Two Month I Will Provide Free Services And Total Cost $<del>300</del> $200</p>
										<a class="btn" href="https://www.freelancer.com/u/abcToufiquer">Place Order</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- End Article 10  |  End Review -->
		</article>
	</div>
	<!-- ******************************************************************************** -->
	<!-- ***************  End Article 10 |  End Review  ********************************* -->
	<!-- ******************************************************************************** -->
</section>
<!-- ---------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section id="nav-spy-3" class="p-top section-nav">
	<!-- ******************************************************************************** -->
	<!-- ***************    Start Article 25  | Start Card Filter    ******************** -->
	<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 25  | Start Card Filter */
			/* Center website */
			#article_25 h2 {
				color: var(--t-c-crimson-);
				font-size: 35px;
				text-align: center;
			}
			#article_25 #myBtnContainer {
				padding: 9px 0px;
				font-size:18px;
				text-align: center;
			}
			#article_25 .main {
				max-width: 1000px;
				margin: auto;
			}
			#article_25 .content h4{
				padding-top: 5px;
				color: var(--t-c-white-);

			}
			#article_25 .content p{
				padding-top: 3px;
				color: var(--t-c-white-);

			}
			#article_25 a{
				float: right;
				position: absolute;
				bottom: 15px;
				right: 10px;
				font-size: 16px;
				color: var(--t-c-yellow-);
				border: 1px solid currentColor;
			}
			#article_25 a:hover{
				color: var(--t-c-crimson-);
				border: 1px solid currentColor;
				background: none;
			}
			/* Add padding BETWEEN each column (if you want) */
			#article_25 .row,
			#article_25 .row > .column {
				padding: 8px;
			}
			/* Create three equal columns that floats next to each other */
			#article_25 .column {
				/* float: left; */
				/* width: 33.33%; */
				display: none; /* Hide columns by default */
			}
			/* Clear floats after rows */
			#article_25 .row:after {
				content: "";
				display: table;
				clear: both;
			}
			/* Content */
			#article_25 .content {
				background: var(--theme-glass-3-);
				position: relative;
				padding: 10px;
			}
			/* The "show" class is added to the filtered elements */
			#article_25 .show {
				display: block;
			}
			/* Style the buttons */
			#article_25 #myBtnContainer .my-btn {
				font-size: 18px;
				color: var(--t-c-white-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				outline: none;
				padding: 8px 8px;
			}
			/* Add a grey background color on mouse-over */
			#article_25 #myBtnContainer button:hover {
				color: var(--t-c-yellow-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				cursor: pointer;
			}
			/* Add a dark background color to the active button */
			#article_25 #myBtnContainer .active-filter{
				display: inline;
			}
			#article_25 #myBtnContainer .active .my-btn{
				color: var(--t-c-crimson-);
				border: 1px solid currentColor;
				background-color: var(--t-c-black-transparent-);
				cursor: pointer;
			}
			/* End Article 25  | End Card Filter */
		</style>
		<article id="article_25">
			<!-- Start Article 25  | Start Card Filter -->
			<h2>PORTFOLIO</h2>
			<div class="line-one"></div>
			<div id="myBtnContainer">
				<div class="active-filter active"><button class="my-btn" onclick="filterSelection('all-my-card')"> Show all</button></div>
				<div class="active-filter"><button class="my-btn" onclick="filterSelection('my-dvl')">Developed</button></div>
				<div class="active-filter"><button class="my-btn" onclick="filterSelection('mt-des')">Design</button></div>
				<div class="active-filter"><button class="my-btn" onclick="filterSelection('full-p')">Fullpage</button></div>
			</div>

			<!-- Portfolio Gallery Grid -->
			<div class="container">
				<div class="row">

					<div class="column full-p col-12 col-lg-6">
						<div class="content">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/n3.png" alt="Mountains" style="width:100%">
							<h4>Mountains</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="https://toufiquer.com/N3/" id="filter_btn">View</a>
						</div>
					</div>

					<div class="column full-p col-12 col-lg-6">
						<div class="content">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/n2.png" alt="Mountains" style="width:100%">
							<h4>Mountains</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="https://toufiquer.com/N3/" id="filter_btn">View</a>
						</div>
					</div>

					<div class="column mt-des col-12 col-lg-6">
						<div class="content">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/n22.png" alt="Mountains" style="width:100%">
							<h4>Mountains</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="https://toufiquer.com/N2/" id="filter_btn">View</a>
						</div>
					</div>

					<div class="column mt-des col-12 col-lg-6">
						<div class="content">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/n1.png" alt="Mountains" style="width:100%">
							<h4>Mountains</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="https://toufiquer.com/N1/" id="filter_btn">View</a>
						</div>
					</div>

					<div class="column my-dvl col-12 col-lg-6">
						<div class="content">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/p1.png" alt="Mountains" style="width:100%">
							<h4>Mountains</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="https://toufiquer.com/p1/" id="filter_btn">View</a>
						</div>
					</div>

					<div class="column my-dvl col-12 col-lg-6">
						<div class="content">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/p2.png" alt="Mountains" style="width:100%">
							<h4>Mountains</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="https://toufiquer.com/P2/" id="filter_btn">View</a>
						</div>
					</div>

					<div class="column my-dvl col-12 col-lg-6">
						<div class="content">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/p3.png" alt="Mountains" style="width:100%">
							<h4>Mountains</h4>
							<p>Lorem ipsum dolor..</p>
							<a target="blanck" class="btn" href="https://toufiquer.com/p3/" id="filter_btn">View</a>
						</div>
					</div>

				</div>
			</div>
			<!-- END GRID -->
			<!-- End Article 25  | End Card Filter -->
		</article>
		<script>
			// Start Article 25  | Start Card Filter
				filterSelection("all-my-card")
				function filterSelection(c) {
				var x, i;
				x = document.getElementsByClassName("column");
				if (c == "all-my-card") c = "";
					for (i = 0; i < x.length; i++) {
						w3RemoveClass(x[i], "show");
						if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
					}
				}
				function w3AddClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
					for (i = 0; i < arr2.length; i++) {
						if (arr1.indexOf(arr2[i]) == -1) {
						element.className += " " + arr2[i];
						}
					}
				}
				function w3RemoveClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
				for (i = 0; i < arr2.length; i++) {
					while (arr1.indexOf(arr2[i]) > -1) {
					arr1.splice(arr1.indexOf(arr2[i]), 1);
					}
				}
				element.className = arr1.join(" ");
				}

				var elements = document.getElementsByClassName("active-filter");
				for(var i = 0; i < elements.length; i++)
				{
					elements[i].onclick = function(){
						
						// remove class from sibling
						
						var el = elements[0];
						while(el)
						{
							if(el.tagName === "DIV"){
								//remove class
								el.classList.remove("active");
								
							}
							// pass to the new sibling
							el = el.nextSibling;
						}
						
					this.classList.add("active");  
					};
				}
			// End Article 25  | End Card Filter
		</script>
	</div>
	<!-- ******************************************************************************** -->
	<!-- ***************    End Article 25  | End Card Filter    ************************ -->
	<!-- ******************************************************************************** -->
</section>
<!-- ---------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section id="nav-spy-4" class="p-top section-nav">

	<!-- ******************************************************************************** -->
	<!-- ***************  Start Article 19  |  Start Skill bar  ************************* -->
	<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 19  |  Start Skill bar */
			#article-19 .title h3{
				font-size: 30px;
				color: var(--t-c-yellow-);
			}
			#article-19 .skill-bars{
				padding-right: 5px;
			}
			#article-19 .skill-bars .bar{
				margin: 20px 0;
			}
			#article-19 .skill-bars .bar:first-child{
				margin-top: 0px;
			}
			#article-19 .skill-bars .bar .info{
				margin-bottom: 5px;
			}
			#article-19 .skill-bars .bar .info span{
				color: var(--t-c-white-);
				font-weight: 500;
				font-size: 17px;
				opacity: 0;
				animation: showText 0.5s 1s linear forwards;
			}
			#article-19 .line-one{
				height: 1px;
				width: 100%;
				background: var(--t-c-white-);
				display: block;
				padding: 0;
			}
			#article-19 .glass-effect {
				padding: 5px;
				background: rgba( 36, 241, 255, 0.20 );
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 2.0px );
				-webkit-backdrop-filter: blur( 2.0px );
				border: 1px solid rgba( 255, 255, 255, 0.18 );
			}
			#article-19 .article h2{
				color: var(--t-c-crimson-);
				font-size: 33px;
				font-weight: bolder;
			}
			#article-19 article p{
				text-align: justify;
				color: var(--t-c-white-);
			}
			@keyframes showText {
			100%{
				opacity: 1;
			}
			}
			#article-19 .skill-bars .bar .progress-line{
				height: 10px;
				width: 100%;
				background: #f0f0f0;
				position: relative;
				transform: scaleX(0);
				transform-origin: left;
				animation: animate 1s cubic-bezier(1,0,0.5,1) forwards;
			}
			@keyframes animate {
			100%{
				transform: scaleX(1);
			}
			}
			#article-19 .bar .progress-line span{
				height: 100%;
				position: absolute;
				transform: scaleX(0);
				transform-origin: left;
				background: #6665ee;
				animation: animate 1s 1s cubic-bezier(1,0,0.5,1) forwards;
			}
			#article-19 .progress-line span::before{
				position: absolute;
				content: "";
				top: -10px;
				right: 0;
				height: 0;
				width: 0;
				border: 7px solid transparent;
				border-bottom-width: 0px;
				border-right-width: 0px;
				border-top-color: #000;
				opacity: 0;
				animation: showText2 0.5s 1.5s linear forwards;
			}
			#article-19 .progress-line span::after{
				position: absolute;
				top: -28px;
				right: 0;
				font-weight: 500;
				background: #000;
				color: #fff;
				padding: 1px 8px;
				font-size: 12px;
				opacity: 0;
				animation: showText2 0.5s 1.5s linear forwards;
			}
			@keyframes showText2 {
			100%{
				opacity: 1;
			}
			}
			#article-19 .image-0{
				padding: 0px;
			}
			/* End Article 19 |  End Skill bar */
		</style>
			<style>
			#article-19 .bar .progress-line.html span{
			width: 90%;
			}
			#article-19 .bar .progress-line.css span{
			width: 90%;
			}
			#article-19 .bar .progress-line.jquery span{
			width: 75%;
			}
			#article-19 .bar .progress-line.python span{
			width: 55%;
			}
			#article-19 .bar .progress-line.mysql span{
			width: 55%;
			}
			#article-19 .progress-line.html span::after{
			content: "90%";
			}
			#article-19 .progress-line.css span::after{
			content: "90%";
			}
			#article-19 .progress-line.jquery span::after{
			content: "75%";
			}
			#article-19 .progress-line.python span::after{
			content: "55%";
			}
			#article-19 .progress-line.mysql span::after{
			content: "55%";
			}
			</style>
		<article id="article-19">
			<!-- Start Article 19  |  Start Skill bar -->
			<div class="container">
				<div class="row p-4">
					<div class="col-12 col-md-6 image-0">
						<div class="image">
							<img class="img-fluit" src="<?php bloginfo('template_directory'); ?>/assets/img/skill-2.jpg" alt="Gallery Title" />
						</div>
					</div>
						<div class="col-12 col-md-6 glass-effect">
							<article class="article">
								<h2>WHO I AM?</h2>
								<div class="line-one"></div>
								<p>I am a young, energetic, and pleasing personality who has the ability to adjust to any situation at different levels. I have a number of good qualities. That makes me stronger to achieve success. On this platform, you will get all the necessary services that you used to grow up for your business. I am always trying to give you my best ability to achieve success. Because your success is our mission. I have 3 years of experience in this field. I compiled about 30+ projects. I have been working as a Web Developer & Graphics Designer as well. I have also been involved in e-commerce based websites. <br> I have higher experience in WordPress themes. I can create the WordPress theme. If you work with me you don't need to buy a WordPress theme for your website. Moreover, I am always aware of the project's deadlines and I am fluent in English which is very important for our communication. I have responded in my works. As usual, I try to deliver projects timely. This is why I think my skills are ideal for your project. I am always trying to give my best to your project. We care about your time.</p>
							</article>
						<hr>
						<div class="title">
							<h3>My Skill</h3>
						</div>
						<div class="skill-bars">
							<div class="bar">
								<div class="info">
									<span>HTML</span>
								</div>
								<div class="progress-line html">
									<span></span>
								</div>
							</div>
							<div class="bar">
								<div class="info">
									<span>CSS</span>
								</div>
								<div class="progress-line css">
									<span></span>
								</div>
							</div>
							<div class="bar">
								<div class="info">
									<span>WORDPRESS</span>
								</div>
								<div class="progress-line jquery">
									<span></span>
								</div>
							</div>
							<div class="bar">
								<div class="info">
									<span>JQUERY</span>
								</div>
								<div class="progress-line python">
									<span></span>
								</div>
							</div>
							<div class="bar">
								<div class="info">
									<span>PHP</span>
								</div>
								<div class="progress-line mysql">
									<span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 19  |  End Skill bar -->
		</article>
	</div>
	<!-- ******************************************************************************** -->
	<!-- ***************  End Article 19 |  End Skill bar  ****************************** -->
	<!-- ******************************************************************************** -->

	<!-- ******************************************************************************** -->
	<!-- ***************  Start Article 27  |  Start Logo    **************************** -->
	<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 27  |  Start Logo */
			#article-27{
				width: 100%;
				background: rgba( 255, 255, 255, 0.25 );
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
			}
			#article-27 .title h1{
				color: var(--t-c-yellow-);
				font-size: 35px;
			}
			#article-27 .content{
				position: relative;
			}
			#article-27 .content button{
				margin: 9px 9px;
				height: 170px;
				width: 150px;
				height: auto;
				background: transparent;
				backdrop-filter: blur(4px);
			}
			#article-27 .content button img{
				border: 1px solid var(--t-c-transparent-);
			}
			#article-27 .content button p{
				text-align: center;
				color: var(--t-c-yellow-);
			}
			#article-27 .content button:hover{
				border: 1px solid var(--t-c-yellow-);
			}
			#article-27 .content .modal {
				display: none;
				position: fixed;
				z-index: 1;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgb(0,0,0);
				background-color: rgba(0,0,0,0.4);
			}
			#article-27-x .modal-content {
				background: var(--theme-glass-1-);
				backdrop-filter: blur(4px);
				margin: 5% auto;
				padding: 20px;
				border: 1px solid var(--t-c-black-);
				width: 100%;
				height: 100%;
				position: relative;
				margin-top: 65px;
				border-top: 1px solid currentColor;
			}
			#article-27-x .modal-content img{
				width: 60%;
				height: auto;
				margin: 0 auto;
			}
			#article-27-x .modal-content p{
				text-align: center;
				color: var(--t-c-yellow-);
			}
			#article-27-x .close-x{
				color: var(--t-c-yellow-);
				position: absolute;
				right: 15px;
				top: 0px;
				font-size: 28px;
				font-weight: bold;
				height: 25px;
				width: 25px;
			}
			#article-27-x .close-x:hover, #article-27-x .close-x:focus {
				color: var(--t-c-white-);
				text-decoration: none;
				cursor: pointer;
			}
			@media only screen and (max-width: 768px) {
				#article-27-x .modal-content img{
					width: 96%;
					margin-top: 15px;
				}
			}
			/* End Article 27 |  End Logo */
		</style>
		<article id="article-27">
			<!-- Start Article 27  |  Start Logo -->
			<div class="title">
				<div class="container py-5">
					<div class="text-center">
						<h1>Service at a Glance</h1> 
					</div>
					<div class="line-one"></div>
				</div>
			</div>
			<div class="container">
				<marquee onMouseOver="this.stop()" onMouseOut="this.start()" behavior="smooth" direction="left">
					<div class="content-wrapper">
						<div class="content">
							<button id="myBtn-1"><img src="<?php bloginfo('template_directory'); ?>/assets/img/client.jpg" alt="Logo"><p>Read more...</p></button>
							<button id="myBtn-2"><img src="<?php bloginfo('template_directory'); ?>/assets/img/uxui-2.jpg" alt="Logo"><p>Read more...</p></button>
							<button id="myBtn-3"><img src="<?php bloginfo('template_directory'); ?>/assets/img/develop-2.jpg" alt="Logo"><p>Read more...</p></button>
							<button id="myBtn-4"><img src="<?php bloginfo('template_directory'); ?>/assets/img/google-ranking.jpg" alt="Logo"><p>Read more...</p></button>
							<button id="myBtn-5"><img src="<?php bloginfo('template_directory'); ?>/assets/img/ssl.png" alt="Logo"><p>Read more...</p></button>
							<button id="myBtn-6"><img src="<?php bloginfo('template_directory'); ?>/assets/img/appoint.jpg" alt="Logo"><p>Read more...</p></button>
							<button id="myBtn-7"><img src="<?php bloginfo('template_directory'); ?>/assets/img/boost.jpg" alt="Logo"><p>Read more...</p></button>
							<button id="myBtn-8"><img src="<?php bloginfo('template_directory'); ?>/assets/img/client.jpg" alt="Logo"><p>Read more...</p></button>
						</div>
					</div>	
				</marquee>
			</div>
			<!-- End Article 27 |  End Logo -->
		</article>
	</div>
	<!-- ******************************************************************************** -->
	<!-- ***************      End Article 27 |  End Logo    ***************************** -->
	<!-- ******************************************************************************** -->
</section>
<!-- ---------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------- -->
<section id="nav-spy-5" class="section-nav">
	<!-- ******************************************************************************** -->
	<!-- ***************  Start Article 14  |  Start Google Map & Contact  ************** -->
	<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 14  |  Start Google Map & Contact */
			#article-14{
				border-bottom:1px solid var(--t-c-white-);
				background: rgba( 255, 255, 255, 0.25 );
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
				border: 1px solid rgba( 255, 255, 255, 0.18 );
			}
			#article-14 .title h1{
				font-size: 35px;
				color: var(--t-c-yellow-);
				margin-bottom: 9px;
			}
			/* End Article 14 |  End Google Map & Contact */
		</style>
		<article id="article-14">
			<!-- Start Article 14  |  Start Google Map & Contact -->
			<div class="container p-top">
				<div class="row">
					<div class="col-12 text-center title">
						<h1>Contact Me</h1> <div class="line-one"></div>
					</div>
					<div class="col-12">
						<div class="google-map">
							<div class="mapouter"><div class="gmap-canvas"><iframe width="100%" height="300" id="gmap-canvas" src="https://maps.google.com/maps?q=Dhaka&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}</style><style>.gmap-canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style></div></div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Article 14  |  End Google Map & Contact -->
		</article>
	</div>
	<!-- ******************************************************************************** -->
	<!-- ***************  End Article 14 |  End Google Map & Contact  ******************* -->
	<!-- ******************************************************************************** -->

	<!-- ******************************************************************************** -->
	<!-- ***********  Start Article 15  |  Start Contact address & Contact Form  ******** -->
	<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 15  |  Start Contact address & Contact Form */
			#article-15{
				border-top: 1px solid var(--t-c-white-);
				background: rgba( 255, 255, 255, 0.25 );
				box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
				backdrop-filter: blur( 4px );
				-webkit-backdrop-filter: blur( 4px );
				border: 1px solid rgba( 255, 255, 255, 0.18 );
			}
			#article-15 .title h1{
				font-size: 35px;
				color: var(--t-c-yellow-);
			}
			#article-15 .address h4{
				font-size: 22px;
			}
			#article-15 .address{
				color: var(--t-c-white-);
			}
			#article-15 form label{
				font-size: 20px;
				color: var(--t-c-yellow-);
			}
			#article-15 form input{
				font-size: 18px;
				background: var(--theme-glass-2-);
				backdrop-filter: blur(4px);
				color: var(--t-c-white-);
			}
			#article-15 form small{
				font-size: 17px;
				color: var(--t-c-crimson-)!important;
				text-shadow: var(--t-c-black-);
				font-weight: bolder;
			}
			#article-15 form textarea{
				min-height: 135px;
				font-size: 17px;
				background: var(--theme-glass-2-);
				backdrop-filter: blur(4px);
				color: var(--t-c-white-);
			}
			#article-15 form .submit{
				float: right;
				font-size: 17px;
				color: var(--t-c-white-);
				border: 1px solid currentColor;
				margin-top: 10px;
				background: var(--theme-glass-2-);
				backdrop-filter: blur(4px);
			}
			#article-15 form .submit:hover{
				color: var(--t-c-crimson-);
				border: 1px solid currentColor;
			}
			#article-15 .wpcf7-response-output {
                color: var(--t-c-yellow-);
                font-size: 18px;
                background: var(--theme-glass-3-);
                backdrop-filter: blur(4px);
            }
			/* End Article 15 |  End Contact address & Contact Form */
		</style>
		<article id="article-15">
			<!-- Start Article 15  |  Start Contact address & Contact Form -->
			<div class="container py-5">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="title">
							<div class="pt-5">
								<div class="text-center">
									<h1>Address</h1> 
								</div>
								<div class="line-one"></div>
							</div>
						</div>
						<div class="address py-5">
							<h4>98/1 Bijoyshoroni, Tejgaon, Dhaka-1215, Bangladesh.</h4>
							<h4>Mobile: (+880)1991075127</h4>
							<h4>Email: toufiquerabc@gmail.com</h4>
						</div>
					</div>
					<div class="col-12 col-md-6">
							<?php
                            	$args = array(
                            		'post_type'  =>  'contact_form',
                            	);
                            	$contact_form = new WP_Query( $args );
                            	if ( have_posts() ):
                            		while ( $contact_form->have_posts() ): $contact_form->the_post();
                            			  echo the_content(); 
                                    endwhile;
                                endif;
                            ?>
					</div>
				</div>
			</div>
			<!-- End Article 15  |  End Contact address & Contact Form -->
		</article>
	</div>
	<!-- ******************************************************************************** -->
	<!-- ************  End Article 15 |  End  Contact address & Contact Form  *********** -->
	<!-- ******************************************************************************** -->

	<!-- ******************************************************************************** -->
	<!-- ***************  Start Article 29  |  Start Mega Footer  *********************** -->
	<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 29  |  Start Mega Footer */
			#article-29{
				background: var(--theme-glass-2-);
				border-bottom: 1px solid var(--t-c-white-);
				backdrop-filter: blur(4px);
			}
			#article-29 .nb-footer {
				border-top: 4px solid var(--t-c-yellow-);
			}
			#article-29 .nb-footer .about .social-media ul li a:hover {
				background: var(--t-c-yellow-);;
			}
			#article-29 .nb-footer .about {
				margin: 0 auto;
				margin-top: 40px;
				max-width: 1170px;
				text-align: center;
			}
			#article-29 .nb-footer .about p {
				font-size: 22px;
				line-height: 25px;
				color: var(--t-c-white-);
				margin-top: 30px;
			}
			#article-29 .nb-footer .about .social-media .list-inline li {
				display: inline;
			}
			#article-29 .nb-footer .about .social-media {
				margin-top: 15px;
			}
			#article-29 .nb-footer .about .social-media ul li a {
				display: inline-block;
				width: 45px;
				height: 45px;
				line-height: 45px;
				border-radius: 50%;
				font-size: 16px;
				color: var(--t-c-white-);
				border: 1px solid rgba(255, 255, 255, 0.3);
			}
			#article-29 .nb-footer .about .social-media ul li a:hover {
				color: var(--t-c-black-);
				border-color: var(--t-c-white-);
			}
			#article-29 .nb-footer .footer-info-single {
				margin-top: 30px;
			}
			#article-29 .nb-footer .footer-info-single .title {
				color: var(--t-c-white-);
				text-transform: uppercase;
				font-size: 22px;
				border-left: 4px solid var(--t-c-yellow-);;
				padding-left: 5px;
			}
			#article-29 .nb-footer .footer-info-single ul li a {
				display: block;
				color: var(--t-c-white-);
				padding: 2px 0;
				font-size:18px;
			}
			#article-29 .nb-footer .footer-info-single ul li a:hover {
				color: var(--t-c-yellow-);
			}
			#article-29 .nb-footer .footer-info-single p {
				font-size: 18px;
				line-height: 20px;
				color: var(--t-c-white-);
			}
			/* End Article 29 |  End Mega Footer */
		</style>
		<article id="article-29">
			<!-- Start Article  17 |  Start Mega Footer -->
			<footer class="nb-footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="about">
								<p>I'm Toufiquer Rahman and I'm a Professional WordPress Theme Designer & Developer. My goal is to satisfy my clients and want to grow their business. I have more than 3 years of experience. I will work on your given design or on my own design. The completed product will be completed according to your requirements and will be fully responsive. Here is some information about why I'm the best candidate for the project. <br> Over the three years, I have been doing web design and development jobs as a freelancer. I don't have good reviews on my profile. I hope I will get reviews on my profile soon. I have created many websites during this time. I provide WordPress theme customization, use of plugins, errors, bugs, CSS problems fix, backup and cloning, WordPress migration, speed optimization.</p>

								<div class="social-media">
									<ul class="list-inline">
										<li><a target="blank" href="https://www.facebook.com/abc.toufiquer.rahman"><i class="fa fa-facebook"></i></a></li>
										<li><a target="blank" href="https://twitter.com/ToufiquerRahma2"><i class="fa fa-twitter"></i></a></li>
										<li><a target="blank" href="https://www.linkedin.com/in/toufiquer-rahman-06060b1b9/"><i class="fa fa-linkedin"></i></a></li>
										<li><a target="blank" href="https://www.instagram.com/tofiquerabc/"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- End Article 29  |  End Mega Footer -->
		</article>
	</div>
	<!-- ******************************************************************************** -->
	<!-- ***************  End Article 29 |  End  Mega Footer **************************** -->
	<!-- ******************************************************************************** -->

	<!-- ******************************************************************************** -->
	<!-- ***************  Start Article 30  |  Start Footer  **************************** -->
	<!-- ******************************************************************************** -->
	<div>
		<style>
			/* Start Article 30  |  Start Footer */
			#article-30{
				padding: 9px 0px;
				background: var(--theme-glass-1-);
			}
			#article-30 p{
				font-size: 18px;
				text-align: center;
				color: var(--t-c-white-);
			}
			/* End Article 30 |  End Footer */
		</style>
		<article id="article-30">
			<!-- Start Article 30 |  Start Footer -->
			<div>
				<p>Copyright &copy; Toufiquer Rahman</p>
			</div>
			<!-- End Article 30  |  End Footer -->
		</article>
	</div>
	<!-- ******************************************************************************** -->
	<!-- ***************  End Article 30 |  End Footer  ********************************* -->
	<!-- ******************************************************************************** -->
</section>
<!-- ---------------------------------------------------------------------------------- -->

<!-- --------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------- -->
<div>
	<style>
		.up-btn::before{
			background: var(--t-c-black-);
			border-radius: 10px;
		}
		.up-btn{
			position: fixed;
			opacity: 0;
			transition: .4s;
			z-index: 999;
			bottom: 15px;
			right: 15px;
			color: var(--t-c-yellow-);
			font-size:35px;
		}
		.up-btn:hover{
			color: var(--t-c-crimson-);
		}
		.up-btn.active{
			opacity: 1;
		}
	</style>
		<a class="black-bg" href="#article-btn"><i class="up-btn bi bi-arrow-up-square"></i></a>
	<script>
		const toTop = document.querySelector(".up-btn");
		window.addEventListener("scroll", () => {
		if (window.pageYOffset > 200) {
			toTop.classList.add("active");
		} else {
			toTop.classList.remove("active");
		}
		});
	</script>
</div>
<!-- --------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------- -->




















<!-- --------------------------------------------------------------------------------- -->
<!-- 									Mouse Click Disabled	   					   -->
<!-- --------------------------------------------------------------------------------- -->
<script>
	// document.addEventListener("contextmenu",function(mouseFunction){mouseFunction.preventDefault();});
</script>
<!-- --------------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------------- -->




	<!-- ******************************************************************************** -->
	<!-- ***************  Start Article 27  |  Start Logo    **************************** -->
	<!-- ******************************************************************************** -->
	<div id="article-27-x">
		<!-- Start Modal Body -->
		<div id="myModal-1" class="modal">
			<div class="modal-content">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/client.jpg" alt="Logo">
			<span class="close-1 close-x">&times;</span>
			<p>All facilities Starting At <del>$300</del> $200 Recognitions and Negotiable<a target="blanck" href="https://www.freelancer.com/u/abcToufiquer"> Order Now</a></p>
			</div>
		</div>
		<div id="myModal-2" class="modal">
			<div class="modal-content">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/uxui-2.jpg" alt="Logo">
			<span class="close-2 close-x">&times;</span>
			<p>Starting At $8 Per Hour, Recognitions and Negotiable<a target="blanck" href="https://www.freelancer.com/u/abcToufiquer"> Order Now</a></p>
			</div>
		</div>
		<div id="myModal-3" class="modal">
			<div class="modal-content">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/develop-2.jpg" alt="Logo">
			<span class="close-3 close-x">&times;</span>
			<p>Starting At $8 Per Hour, Recognitions and Negotiable<a target="blanck" href="https://www.freelancer.com/u/abcToufiquer"> Order Now</a></p>
			</div>
		</div>
		<div id="myModal-4" class="modal">
			<div class="modal-content">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/google-ranking.jpg" alt="Logo">
			<span class="close-4 close-x">&times;</span>
			<p>Starting At $8 Per Hour, Recognitions and Negotiable<a target="blanck" href="https://www.freelancer.com/u/abcToufiquer"> Order Now</a></p>
			</div>
		</div>
		<div id="myModal-5" class="modal">
			<div class="modal-content">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/ssl.png" alt="Logo">
			<span class="close-5 close-x">&times;</span>
			<p>Starting At $8 Per Hour, Recognitions and Negotiable<a target="blanck" href="https://www.freelancer.com/u/abcToufiquer"> Order Now</a></p>
			</div>
		</div>
		<div id="myModal-6" class="modal">
			<div class="modal-content">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/appoint.jpg" alt="Logo">
			<span class="close-6 close-x">&times;</span>
			<p>Starting At $8 Per Hour, Recognitions and Negotiable<a target="blanck" href="https://www.freelancer.com/u/abcToufiquer"> Order Now</a></p>
			</div>
		</div>
		<div id="myModal-7" class="modal">
			<div class="modal-content">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/boost.jpg" alt="Logo">
			<span class="close-7 close-x">&times;</span>
			<p>Starting At $8 Per Hour, Recognitions and Negotiable<a target="blanck" href="https://www.freelancer.com/u/abcToufiquer"> Order Now</a></p>
			</div>
		</div>
		<div id="myModal-8" class="modal">
			<div class="modal-content">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/client.jpg" alt="Logo">
			<span class="close-8 close-x">&times;</span>
			<p>Starting At <del>$300</del> $200 Recognitions and Negotiable<a target="blank" href="https://www.freelancer.com/u/abcToufiquer"> Order Now</a></p>
			</div>
		</div>
		<!-- End Modal Body -->
	</div>
	<script>
		/* 1 */
		var modal1 = document.getElementById("myModal-1");
		var btn1 = document.getElementById("myBtn-1");
		var span1 = document.getElementsByClassName("close-1")[0];
		btn1.onclick = function() {
			modal1.style.display = "block";
		}
		span1.onclick = function() {
			modal1.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal1) {
				modal1.style.display = "none";
			}
		}

		/* 2 */
		var modal2 = document.getElementById("myModal-2");
		var btn2 = document.getElementById("myBtn-2");
		var span2 = document.getElementsByClassName("close-2")[0];
		btn2.onclick = function() {
			modal2.style.display = "block";
		}
		span2.onclick = function() {
			modal2.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal2) {
				modal2.style.display = "none";
			}
		}

		/* 3 */
		var modal3 = document.getElementById("myModal-3");
		var btn3 = document.getElementById("myBtn-3");
		var span3 = document.getElementsByClassName("close-3")[0];
		btn3.onclick = function() {
			modal3.style.display = "block";
		}
		span3.onclick = function() {
			modal3.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal3) {
				modal3.style.display = "none";
			}
		}

		/* 4 */
		var modal4 = document.getElementById("myModal-4");
		var btn4 = document.getElementById("myBtn-4");
		var span4 = document.getElementsByClassName("close-4")[0];
		btn4.onclick = function() {
			modal4.style.display = "block";
		}
		span4.onclick = function() {
			modal4.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal4) {
				modal4.style.display = "none";
			}
		}

		/* 5 */
		var modal5 = document.getElementById("myModal-5");
		var btn5 = document.getElementById("myBtn-5");
		var span5 = document.getElementsByClassName("close-5")[0];
		btn5.onclick = function() {
			modal5.style.display = "block";
		}
		span5.onclick = function() {
			modal5.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal5) {
				modal5.style.display = "none";
			}
		}

		/* 6 */
		var modal6 = document.getElementById("myModal-6");
		var btn6 = document.getElementById("myBtn-6");
		var span6 = document.getElementsByClassName("close-6")[0];
		btn6.onclick = function() {
			modal6.style.display = "block";
		}
		span6.onclick = function() {
			modal6.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal6) {
				modal6.style.display = "none";
			}
		}

		/* 7 */
		var modal7 = document.getElementById("myModal-7");
		var btn7 = document.getElementById("myBtn-7");
		var span7 = document.getElementsByClassName("close-7")[0];
		btn7.onclick = function() {
			modal7.style.display = "block";
		}
		span7.onclick = function() {
			modal7.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal7) {
				modal7.style.display = "none";
			}
		}

		/* 8 */
		var modal8 = document.getElementById("myModal-8");
		var btn8 = document.getElementById("myBtn-8");
		var span8 = document.getElementsByClassName("close-8")[0];
		btn8.onclick = function() {
			modal8.style.display = "block";
		}
		span8.onclick = function() {
			modal8.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == modal8) {
				modal8.style.display = "none";
			}
		}
	</script>
	<!-- ******************************************************************************** -->
	<!-- ***************      End Article 27 |  End Logo    ***************************** -->
	<!-- ******************************************************************************** -->

<!-- ******************************************************************************** -->
<?php   get_footer();