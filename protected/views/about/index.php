<?php
/* @var $this AboutController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="l-main">
	<div class="l-main-h">
		
		<div class="l-submain">
			<div class="l-submain-h g-html">
				<div class="w-timeline-section active animate_afb">
					<h2 style="text-align: center;">О компании</h2>
				</div>
				<div class="w-timeline">
					<div class="w-timeline-h">
								<div class="w-timeline-list">
									<div class="w-timeline-list-h">
										<div class="w-timeline-item active">
											<span class="w-timeline-item-bullet"></span>
										</div>

									</div>
								</div>
								<div class="w-timeline-sections">
									<div class="w-timeline-section active animate_rfc">
										<div class="w-timeline-section-h">
											<?php
											foreach($abouts as $about){
												echo '<div class="w-timeline-section-title">
															<span class="w-timeline-section-title-bullet"></span>
														</div>
														<div class="w-timeline-section-content">
															<div class="g-cols">
																<div>
																	<p>'.$about->description.'</p>
																</div>
															</div>
														</div>';
											}
											?>
											
										</div>
									</div>


								</div>
					</div>
				</div>
			
			</div>
		</div>
		
	</div>
</div>
