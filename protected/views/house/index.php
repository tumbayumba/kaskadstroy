<?php
/* @var $this HouseController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="l-submain for_pagehead">
					<div class="l-submain-h g-html i-cf">
						<div class="w-pagehead">
							<h1 class="animate_afl"><?php echo $complex->complex_name;?></h1>
							<div class="g-breadcrumbs animate_afl">
								<?php echo CHtml::link('Комплексы',array('complex/index'),array('class'=>'g-breadcrumbs-item'));?>
								<span class="g-breadcrumbs-separator">&raquo;</span>
								<span class="g-breadcrumbs-item">Дома</span>
							</div>
						</div>
					</div>
				</div>
<div class="l-submain with_shadow">
					<div class="l-submain-h g-html">
					
						<!--<h1 style="text-align: center;">Perfect Template for Showing Your Products</h1>
						<p style="text-align: center;">This is Vittoria, a modern, responsive & <strong>super flexible multipurpose</strong> theme that makes it easy to show your work!<br>Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.</p>-->
						
						<!--<div class="hr hr_short">
							<span class="hr-h">
								<span class="hr-hh"></span>
							</span>
						</div>-->
						<div class="g-cols">
							<div class="two-thirds">
								<h1 style="text-align: center;"><div class="animate_afc">Наши проекты</div></h1>
								<div class="hr hr_short">
									<span class="hr-h">
										<span class="hr-hh"></span>
									</span>
								</div>
								<div class="w-portfolio columns_4">
									<div class="w-portfolio-h">
										<div class="w-portfolio-list">
										<div class="w-portfolio-list-h">
											<?php
											foreach($houses as $house){
												echo '<div class="w-portfolio-item order_1 naming webdesign">
														<div class="w-portfolio-item-h animate_wfc">';
														echo CHtml::link(
															'<div class="w-portfolio-item-image">
																	'.CHtml::image('images/house/'.$house->image,'',array()).'
																	<div class="w-portfolio-item-meta">
																		<h2 class="w-portfolio-item-title">'.$house->house_name.'</h2>
																		<span class="w-portfolio-item-text">'.$house->status.'</span>
																	</div>
																</div>',
															array('appartments/index','house_id'=>$house->id),
															array('class'=>'w-portfolio-item-anchor')
														);
														echo '</div>
														</div>';
											}
											?>
										</div>
										</div>
									</div>
								</div>
								
								<div class="hr hr_short">
									<span class="hr-h">
										<span class="hr-hh"></span>
									</span>
								</div>
								<p style="text-align: center;"><?php echo CHtml::link('Продажа квартир',array('appartments/summary'),array('class'=>'w-actionbox-button g-btn size_big type_color animate_afc'));?></p>
								<hr>
								<h2 class="w-blog-entry-title animate_afl">О комплексе:</h2>
								<div class="w-blog-entry-body animate_afc">
									<?php echo $complex->description;?>
								</div>
							</div>
							<div class="one-third">
								<h4 class="animate_afr">Схема проезда</h4><hr>
								<div class="w-gallery layout_tile size_l">
									<div class="w-gallery-h">
										<div class="w-gallery-tnails">
											<div class="w-gallery-tnails-h">
												<?php
												echo CHtml::link(
													'<span class="w-gallery-tnail-h">
														'.CHtml::image('images/driveway_image/'.$complex->driveway_image,'',array('class'=>'w-gallery-tnail-img')).'
														<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
													</span>',
													'images/driveway_image/'.$complex->driveway_image,
													array('class'=>'w-gallery-tnail order_1 animate_afr')
												);
												?>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					
					</div>
</div>
