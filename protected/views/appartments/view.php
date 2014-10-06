<?php
/* @var $this AppartmentsController */
/* @var $model Appartments */
?>
<div class="l-main">
	<div class="l-main-h">
		
		<div class="l-submain for_pagehead">
			<div class="l-submain-h g-html i-cf">
				<div class="w-pagehead">
					<h1><?php echo $house->house_name;?></h1>
					<!--<p>Недорогая недвижимость без посредников в Подмосковье</p>-->
					<div class="g-breadcrumbs animate_afl">
						<?php echo CHtml::link($house->house_name,array('appartments/index','house_id'=>$house->id),array('class'=>'g-breadcrumbs-item'));?>
						<span class="g-breadcrumbs-separator">&raquo;</span>
						<span class="g-breadcrumbs-item"><?php echo $model->square.' м2';?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="l-submain">
			<div class="l-submain-h g-html i-cf">
				<div class="l-content animate_afr">
						<div class="g-cols">
							<div class="one-half">
								<?php 
								echo CHtml::image('images/appartments/'.$house->house_name.'/'.$model->image);
								?>
							</div>	
							<div class="one-half">
								<h3><?php echo $type->name;?></h3>
								<div class="w-info">
									
									<div class="w-info-item">
										<h4 class="w-info-item-title">Площадь</h4>
										<span class="w-info-item-content"><?php echo $model->square;?></span>
									</div>
																		
									<div class="w-info-item">
										<h4 class="w-info-item-title">Цена за м2:</h4>
										<span class="w-info-item-content"><?php echo $model->price2square;?></span>
									</div>
									
									<div class="w-info-item">
										<h4 class="w-info-item-title">Цена (руб.):</h4>
										<span class="w-info-item-content"><?php echo $model->price;?></span>
									</div>
									
									<div class="w-actionbox-controls animate_afr">
										<?php
										echo CHtml::link('Продажа квартир',array('appartments/summary'),array('class'=>'w-actionbox-button g-btn size_big type_color'));
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
