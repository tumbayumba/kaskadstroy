<?php
/* @var $this AppartmentsController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="l-main">
	<div class="l-main-h">
		
		<div class="l-submain for_pagehead">
			<div class="l-submain-h g-html i-cf">
				<div class="w-pagehead">
					<h1><?php echo $house->house_name;?></h1>
					<!--<p>Недорогая недвижимость без посредников в Подмосковье</p>-->
					<div class="g-breadcrumbs animate_afl">
						<?php echo CHtml::link($complex->complex_name,array('house/index','complex_id'=>$house->complex_id),array('class'=>'g-breadcrumbs-item'));?>
						<span class="g-breadcrumbs-separator">&raquo;</span>
						<span class="g-breadcrumbs-item"><?php echo $house->house_name;?></span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="l-submain">
			<div class="l-submain-h g-html i-cf">
				<div class="l-content animate_afr">
					
					<div class="g-cols">
						<div class="one-third">
							<?php echo CHtml::image('images/house/'.$house->image);?>
						</div>
						<div class="one-third">
							<?php echo $house->description;?>
						</div>
						<div class="one-third">
							<h4>Этапы строительства</h4>
							<div class="w-gallery layout_tile size_xs">
								<div class="w-gallery-h">
									<div class="w-gallery-tnails">
										<div class="w-gallery-tnails-h">
											<?php
											foreach($stages as $stage){
												echo CHtml::link('<span class="w-gallery-tnail-h">
													'.CHtml::image('images/stages/'.$house->id.'/'.$stage->image,'',array('class'=>'w-gallery-tnail-img')).'
													<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
												</span>',
												'images/stages/'.$house->id.'/'.$stage->image,
												array('class'=>'w-gallery-tnail order_1')
												);
											}
											?>
										</div>
									</div>
								</div>
							</div>
							<h4>План типового этажа</h4>
							<div class="w-gallery layout_tile size_xs">
								<div class="w-gallery-h">
									<div class="w-gallery-tnails">
										<div class="w-gallery-tnails-h">
											<?php
												echo CHtml::link('<span class="w-gallery-tnail-h">
													'.CHtml::image('images/floorplan_image/'.$house->floorplan_image,'',array('class'=>'w-gallery-tnail-img')).'
													<span class="w-gallery-tnail-title"><i class="icon-search"></i></span>
												</span>',
												'images/floorplan_image/'.$house->floorplan_image,
												array('class'=>'w-gallery-tnail order_1')
												);
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<?php $this->widget('zii.widgets.grid.CGridView', array(
						//'htmlOptions' => array('class' => 'g-table-1'),
						'itemsCssClass' => 'table-class',
						'htmlOptions' => array('class' => 'g-table-1'),
						'id'=>'complex-grid',
						'dataProvider'=>$model->mySearch($house->id),
						//'filter'=>$model,
						'summaryText' => "Помещения {start} - {end} из {count}",
						'columns'=>array(
							array(
								'name'=>'type_id',
								'value'=>'CHtml::link(AppartmentsController::getType($data->type_id),array("view","id"=>$data->id),array("style"=>"text-decoration: none;"))',
								'type'=>'raw',
								//'filter'=>CHtml::listData(Apptype::model()->findAll(),'id','name'),
							),
							//'house_id',
							'square',
							'price2square',
							'price',
							'action',
						),
					)); ?>
					
				</div>
			</div>
		</div>
		
	</div>
</div>
