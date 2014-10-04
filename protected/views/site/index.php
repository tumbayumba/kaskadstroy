<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<!-- gallery -->
		<div class="l-subheader at_bottom"  style="height:250px;">
					<div class="l-subheader-h i-cf">

						<div class="fullwidthbanner-container">
							<div class="fullwidthbanner">
								<ul>
									<li data-transition="fade">
										<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
										<img src="img/slides/slide4.jpg"/>
										<div class="caption medium_color lfr"
											 data-x="100"
											 data-y="200"
											 data-speed="500"
											 data-start="1800"
											 data-easing="easeOutExpo"  >Недвижимость и квартиры в Подмосковье</div>
										<div class="caption medium_white lfr"
											 data-x="100"
											 data-y="238"
											 data-speed="500"
											 data-start="2000"
											 data-easing="easeOutExpo"  >Купить квартиру в новостройках Подмосковья</div>
										<div class="caption medium_black lfr"
											 data-x="100"
											 data-y="276"
											 data-speed="500"
											 data-start="2200"
											 data-easing="easeOutExpo"  >Спецпредложения</div>
									</li>
									<li data-transition="papercut">
										<!-- THE MAIN IMAGE IN THE 2 SLIDE -->
										<img src="img/slides/slide5.jpg" alt="" />
										<div class="caption large_text lfr"
											 data-x="100"
											 data-y="130"
											 data-speed="300"
											 data-start="800"
											 data-easing="easeOutExpo"  >ЗАО «КАСКАДСТРОЙСЕРВИС»</div>
										<div class="caption medium_text lfr"
											 data-x="100"
											 data-y="200"
											 data-speed="400"
											 data-start="1000"
											 data-easing="easeOutExpo"  >Квартиры в ближнем Подмосковье без посредников</div>
										<div class="caption button_color lfb"
											 data-x="100"
											 data-y="255"
											 data-speed="500"
											 data-start="1200"
											 data-easing="easeOutExpo"  ><a href="http://themeforest.net/item/vittoria-responsive-html5-template/4751524?ref=upsolution" target="_blank">Связаться с нами</a></div>
									</li>
									<li data-transition="random">
										<!-- THE MAIN IMAGE IN THE 3 SLIDE -->
										<img src="img/slides/orange_flat.jpg" alt="" /><!--slide7.jpg-->

										<div class="caption large_text randomrotate"
											 data-x="100"
											 data-y="150"
											 data-speed="500"
											 data-start="800"
											 data-easing="easeOutExpo"  >Купить квартиру</div>
										<div class="caption medium_white randomrotate"
											 data-x="100"
											 data-y="220"
											 data-speed="500"
											 data-start="1200"
											 data-easing="easeOutExpo"  >в новостройках Подмосковья</div>
									</li>
									
								</ul>
							</div>
						</div>

					</div>
				</div>
				
<div class="l-main-h">
    <div class="l-submain for_pagehead">
        <div class="l-submain-h i-cf">
			<div class="element animate_afr">
				<h1>Недвижимость и квартиры в Подмосковье</h1>
			</div>
<!-- Page head content (this section is optional) -->
		</div>
	</div>
	<div class="l-submain">
		<div class="l-submain-h">
<!-- Page content -->
			<div class="element animate_afc">
				<div class="g-cols">
					<div class="two-thirds">

						<div class="w-services">
							<div class="w-services-h">
								<div class="w-services-list">
									
									<?php 
									foreach($mainpage as $mp){
										echo '<div class="w-services-item">
											<div class="w-services-item-h animate_wfc">
												<div class="w-services-item-icon">
													<!--<i class="icon-html5"></i>-->
													<div class="w-services-item-icon-img">
														<img src="img/icon-example.png" alt="icon"/>
													</div>
												</div>											
												<div class="w-services-item-text">
													<!--<h3>Web Design</h3>-->
													<p style="font-size:12px; text-align: justify;">'.$mp->description.'</p>
												</div>
											</div>
										</div>';
									}
									?>
								
								</div>
							</div>
						</div>
						
					</div>
					<div class="one-third">
						<div class="widget">
							<div class="w-bloglist date_atbottom">
								<h4 class="w-bloglist-title">Последние новости</h4>
								<div class="w-bloglist-list">
										<?php
										foreach($newz as $news){
											$date = explode(' ',$news->create_date);
											echo '<div class="element animate_afr">
													  <div class="w-bloglist-entry">
														<a class="w-bloglist-entry-link" href="blog-post.html">'.CHtml::link($news->header).'</a>
														<span class="w-bloglist-entry-date">'.$date[0].'</span>
													  </div>
												  </div>';
										}
										echo '<div class="element animate_afr">';
										echo CHtml::link('Новости',array('news/index'),array('class'=>'w-blog-entry-more g-btn size_small type_color'));
										echo '</div>';
										?>
								</div>
							</div>
						</div>
					</div><!--<div class="one-third">-->
				
				</div>
			</div>
			
			
		</div>
	</div>
</div>

