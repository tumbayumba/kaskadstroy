    <!DOCTYPE HTML>
    <html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Insert here all CSS and JS links from a sample template -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	
	<link rel="stylesheet" type="text/css" media="all" href="http://fonts.googleapis.com/css?family=PT+Sans:400,700italic,700,400italic">
	<link rel="stylesheet" type="text/css" media="all" href="http://fonts.googleapis.com/css?family=Cuprum">
	
	<link rel="stylesheet" type="text/css" media="all" href="css/motioncss.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/motioncss-widgets.css">
	
	<link rel="stylesheet" type="text/css" media="all" href="css/icons.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/rs-settings.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/switcher.css"/>
	<link rel="stylesheet" type="text/css" media="all" href="css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/animation.css">


	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="js/g-alert.js"></script>
	<script type="text/javascript" src="js/jquery.carousello.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/jquery.simpleplaceholder.js"></script>
	<script type="text/javascript" src="js/w-search.js"></script>
	<script type="text/javascript" src="js/w-switcher.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/navToSelect.js"></script>
	<script type="text/javascript" src="js/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/w-tabs.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<script type="text/javascript" src="js/w-lang.js"></script>
	<script type="text/javascript" src="js/w-timeline.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('.l-sidebar .w-nav').affix({
				offset: {
					top: 240,
					bottom: function() { return jQuery('.l-footer').outerHeight(true) + 90 }
				}
			});

		});
		</script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-11951115-7', 'agro-community.com');
	  ga('send', 'pageview');

	</script>
    </head>
    <body class="l-body">
<div class="l-background"></div>
<!-- CANVAS -->
<div class="l-canvas type_wide col_cont">
    <div class="l-canvas-h">
        <!-- HEADER -->
        <div class="l-header type_normal">
            <div class="l-header-h">
				<div class="l-subheader at_top type_fixed">
					<div class="l-subheader-h i-cf">
						
						<nav class="w-nav">
							<div class="w-nav-h">
								<div class="w-nav-select">
									<select class="w-nav-select-h">
									</select>
								</div>
								<div class="w-nav-list layout_hor width_stretch level_1">
									<div class="w-nav-list-h">
										<div class="w-nav-item level_1 active">
											<div class="w-nav-item-h">
												<a href="index.php" class="w-nav-anchor level_1"><i class="icon-home"></i></a>
											</div>
										</div>
										<div class="w-nav-item level_1 ">
											<div class="w-nav-item-h">
												<?php echo CHtml::link('О&nbspкомпании',array('about/index'),array('class'=>'w-nav-anchor level_1'));?>
											</div>
										</div>
										<div class="w-nav-item level_1 ">
											<div class="w-nav-item-h">
												<?php echo CHtml::link('Миссия',array('mission/index'),array('class'=>'w-nav-anchor level_1'));?>
											</div>
										</div>
										<div class="w-nav-item level_1 ">
											<div class="w-nav-item-h">
												<?php echo CHtml::link('Объекты',array('/complex/index'),array('class'=>'w-nav-anchor level_1'));?>
											</div>
										</div>
										<div class="w-nav-item level_1 ">
											<div class="w-nav-item-h">
												<?php echo CHtml::link('Услуги',array('/services/index'),array('class'=>'w-nav-anchor level_1'));?>
											</div>
										</div>
										<div class="w-nav-item level_1 ">
											<div class="w-nav-item-h">
												<?php echo CHtml::link('Ипотека',array('/ipoteka/index'),array('class'=>'w-nav-anchor level_1'));?>
											</div>
										</div>
										<div class="w-nav-item level_1 ">
											<div class="w-nav-item-h">
												<?php echo CHtml::link('Новости',array('/news/index'),array('class'=>'w-nav-anchor level_1'));?>
											</div>
										</div>
										<div class="w-nav-item level_1 ">
											<div class="w-nav-item-h">
												<?php echo CHtml::link('Контакты',array('/site/contact'),array('class'=>'w-nav-anchor level_1'));?>
											</div>
										</div>
										<!--<div class="w-nav-item level_1 active">
											<div class="w-nav-item-h">
												<?php //echo CHtml::link('Админка',array('/admin'),array('class'=>'w-nav-anchor level_1'));?>
											</div>
										</div>-->
									</div>
								</div>		
							</div>
						</nav>
					</div>
				</div>
            </div>
        </div>
        <div class="l-subheader at_middle" style="background-image: url(img/slides/slide3.jpg);">
			<div class="l-subheader-h i-cf">

				<div class="w-logo sloganat_bottom">
					<div class="w-logo-h">
						
						<div class="w-logo-slogan">
							<!--<div class="w-logo-slogan-h animate_afl"><h1>Каскадстройсервис</h1></div>-->
							<div class="w-logo-slogan-h animate_afl" style="margin-top:-30px;"><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/img/logo.png',''),array('/site/index'));?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- /HEADER -->
        <!-- MAIN -->
			<?php echo $content;?>
        <!-- /MAIN -->
 
    </div>
</div>
<!-- /CANVAS -->
<!-- FOOTER -->
<div class="l-footer type_normal">
	<div class="l-footer-h">

		<!-- subfooter: top -->
		<div class="l-subfooter at_top">
			<div class="l-subfooter-h g-cols cols_fluid">
				<?php
				$footer = Footer::model()->find();
					echo '<div class="two-thirds">
						<div class="widget">
							<h4>'.$footer->header.'</h4>
							<p>'.$footer->content.'</p>
						</div>
					</div>
					<div class="one-third">
						<div class="widget">
							<div class="w-contacts">
								<div class="w-contacts-h">
									<h4 class="w-contacts-title">Контакты</h4>
									<dl class="w-contacts-list">
										<dt class="w-contacts-list-key for_address">Адресс:</dt>
										<dd class="w-contacts-list-value">'.$footer->adress.'</dd>
										<dt class="w-contacts-list-key for_phone">Тел./факс:</dt>
										<dd class="w-contacts-list-value">'.$footer->phone.'</dd>
										<!--<dt class="w-contacts-list-key for_email">Email:</dt>-->
										<!--<dd class="w-contacts-list-value"><a href="mailto:info@example.com">info@example.com</a></dd>-->
									</dl>
								</div>
							</div>
						</div>
					</div>';
				?>

			</div>
		</div>

		<!-- subfooter: bottom -->
		<!--<div class="l-subfooter at_bottom">
			<div class="l-subfooter-h i-cf">

				<div class="w-copyright">Copyright &copy; <?php //echo date('Y'); ?><br/></div>

				<!--<div class="w-socials">
					<div class="w-socials-h">
						<div class="w-socials-list">

							<div class="w-socials-item rss">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-rss"></i>
								</a>
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">RSS</span>
									</div>
								</div>
							</div>
							<div class="w-socials-item email">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-email"></i>
								</a>
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">Email</span>
									</div>
								</div>
							</div>
							<div class="w-socials-item facebook">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-facebook"></i>
								</a>
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">Facebook</span>
									</div>
								</div>
							</div>
							<div class="w-socials-item twitter">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-twitter"></i>
								</a>
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">Twitter</span>
									</div>
								</div>
							</div>
							<div class="w-socials-item gplus">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-gplus"></i>
								</a>
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">Google</span>
									</div>
								</div>
							</div>

							<div class="w-socials-item linkedin">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-linkedin"></i>
								</a>
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">LinkedIn</span>
									</div>
								</div>
							</div>
							<div class="w-socials-item youtube">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-youtube-1"></i>
								</a>
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">YouTube</span>
									</div>
								</div>
							</div>
							<div class="w-socials-item vimeo">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-vimeo"></i>
								</a>
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">Vimeo</span>
									</div>
								</div>
							</div>

							<div class="w-socials-item flickr">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-flickr"></i>
								</a>
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">Flickr</span>
									</div>
								</div>
							</div>
							<div class="w-socials-item pinterest">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-pinterest"></i>
								</a>
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">Pinterest</span>
									</div>
								</div>
							</div>

							<div class="w-socials-item skype">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-skype"></i>
								</a>
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">Skype</span>
									</div>
								</div>
							</div>
							<div class="w-socials-item tumblr">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-tumblr"></i>
								</a>
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">Tumblr</span>
									</div>
								</div>
							</div>

							<div class="w-socials-item blogger">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-blogger"></i>
								</a>
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">Blogger</span>
									</div>
								</div>
							</div>
							<div class="w-socials-item dribbble">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-dribbble"></i>
								</a>
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">Dribbble</span>
									</div>
								</div>
							</div>
							<div class="w-socials-item vk">
								<a class="w-socials-item-link" target="_blank" href="javascript:void(0);">
									<i class="iconsocial-vk"></i>
								</a>. 
								<div class="w-socials-item-popup">
									<div class="w-socials-item-popup-h">
										<span class="w-socials-item-popup-text">Vkontakte</span>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>-->

			<!--</div>
		</div>

	</div>-->
</div>
<!-- /FOOTER -->
</body>
</html>
