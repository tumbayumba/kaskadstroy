<?php
/* @var $this ComplexController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="l-main">
			<div class="l-main-h">

				<div class="l-submain for_pagehead">
					<div class="l-submain-h g-html i-cf">
						<div class="w-pagehead">
							<h1>Нашы объекты</h1>
							<p>Недорогая недвижимость без посредников в Подмосковье</p>
						</div>
					</div>
				</div>
				
				<div class="l-submain">
					<div class="l-submain-h g-html i-cf">
						<div class="l-content">
						<div class="l-content-h">

							<div class="g-cols">
								<div class="two-thirds">
									
									<div class="w-blog imgpos_attop meta_all">
										<div class="w-blog-h">
											<div class="w-blog-list">
												<?php
												foreach($objects as $complex){
													echo '<div class="w-blog-entry">
															<div class="w-blog-entry-h  animate_afl">
																<a class="w-blog-entry-link" href="#">
																	<span class="w-blog-entry-img animate_afc">
																		<!--<img class="w-blog-entry-img-h" src="img/placeholder/1000x500.gif" alt="">-->
																		'.CHtml::image('images/complex/'.$complex->image,'',array()).'
																	</span>

																	<h2 class="w-blog-entry-title">
																		<span class="w-blog-entry-title-h">'.CHtml::link($complex->complex_name,array('house/index','complex_id'=>$complex->id),array()).'</span>
																	</h2>
																</a>
																<div class="w-blog-entry-body">
																	<div class="w-blog-entry-meta animate_afc">
																		<div class="w-blog-entry-meta-author">
																			<a class="w-blog-entry-meta-author-h" >'.$complex->adress.'</a>
																		</div>
																		<!--<div class="w-blog-entry-meta-date">
																			<i class="icon-time"></i>
																			<span class="w-blog-entry-meta-date-month">March</span>
																			<span class="w-blog-entry-meta-date-day">23,</span>
																			<span class="w-blog-entry-meta-date-year">2013</span>
																		</div>

																		<div class="w-blog-entry-meta-author">
																			<i class="icon-user"></i>
																			<a class="w-blog-entry-meta-author-h" href="javascript:void(0);">Admin</a>
																		</div>

																		<div class="w-blog-entry-meta-tags">
																			<i class="icon-tags"></i>
																			<a href="javascript:void(0);">Web Design</a>,
																			<a href="javascript:void(0);">Branding</a>
																		</div>

																		<div class="w-blog-entry-meta-comments">
																			<i class="icon-comments"></i>
																			<a class="w-blog-entry-meta-comments-h" href="javascript:void(0);">13 comments</a>
																		</div>-->
																	</div>

																	<div class="w-blog-entry-short">
																		<p>'.$complex->description.'</p>
																	</div>
																	'.CHtml::link('Подробнее',array('house/index','complex_id'=>$complex->id),array('class'=>'w-blog-entry-more g-btn size_small type_color')).'
																</div>
															</div>
														</div>';
												}
												?>
												
												
											</div><!--<div class="w-blog imgpos_attop meta_all">-->
										</div><!--<div class="w-blog-h">-->
									</div><!--<div class="w-blog-list">-->
									
								</div><!--<div class="two-thirds">-->
									
									<div class="one-third animate_afr">
										<div class="widget">
											<div class="w-links">
												<div class="w-links-h">
													<h4 class="w-links-title">Комплексы</h4>
													<div class="w-links-list">
														<?php
														foreach($objects as $complex){
															echo '<div class="w-links-item">';
															echo CHtml::link('<span class="w-links-anchor-title"></span>'.$complex->complex_name,array('house/index','complex_id'=>$complex->id),array('class'=>'w-links-anchor'));
															echo '</div>';
														}
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="w-actionbox-controls animate_afr">
										<?php
										echo CHtml::link('Продажа квартир',array('appartments/summary'),array('class'=>'w-actionbox-button g-btn size_big type_color'));
										?>
									</div>
									<!--<div class="one-third animate_afr">
										<h4 class="w-links-title">Схемы проезда</h4>
										<a class="w-gallery-tnail order_1" href="img/placeholder/1200x800.gif">
											<span class="w-gallery-tnail-h">
												<img class="w-gallery-tnail-img" src="img/placeholder/220x220.gif" alt="Tit 1"/>
												<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
											</span>
										</a>
									</div>-->
							</div>
							
						</div>
						</div>
						
						<div class="l-sidebar at_left">
							<div class="l-sidebar-h">
							
							</div>
						</div>		
						
						
						
					</div>
				</div>
				
			</div>
		</div>

