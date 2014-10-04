<?php
/* @var $this MissionController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="l-main">
	<div class="l-main-h">

				<div class="l-submain for_pagehead">
					<div class="l-submain-h g-html i-cf">
						<div class="w-pagehead">
							<h1>Миссия</h1>
						</div>
					</div>
				</div>
				
				<div class="l-submain">
					<div class="l-submain-h g-html">
						
								<div class="w-tabs layout_accordion type_toggle">
									<div class="w-tabs-h">
										<?php
										$cnt = 0;
										foreach($model as $mission){
											($cnt==0)? $active = 'active' : $active = '';
											echo '<div class="w-tabs-section with_icon '.$active.' animate_afc">
													<div class="w-tabs-section-title">
														<span class="w-tabs-section-title-text">'.$mission->name.'</span>
														<span class="w-tabs-section-title-control"></span>
													</div>
													<div class="w-tabs-section-content">
														<div class="w-tabs-section-content-h">
															<p>'.$mission->description.'</p>
														</div>
													</div>
												</div>';
											$cnt++;
										}
										?>
									</div>
								</div>	
						
					</div>
				</div>
	
	</div>
</div>
