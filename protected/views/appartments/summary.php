<div class="l-main">
	<div class="l-main-h">
		
		<div class="l-submain for_pagehead">
			<div class="l-submain-h g-html i-cf">
				<div class="w-pagehead">
					<h1>Продажа квартир в новостройках</h1>
					<!--<p>Недорогая недвижимость без посредников в Подмосковье</p>-->
					<div class="g-breadcrumbs animate_afl">
						<?php echo CHtml::link('Комплексы',array('complex/index'),array('class'=>'g-breadcrumbs-item'));?>
						<span class="g-breadcrumbs-separator">&raquo;</span>
						<span class="g-breadcrumbs-item">Таблица объектов</span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="l-submain">
			<div class="l-submain-h g-html i-cf">
				<div class="l-content animate_afr">
					
					<!-- w-tabs -->
					<div class="w-tabs">
						<div class="w-tabs-h">
							
							<div class="w-tabs-list">
								<?php
								$cnt = 0;
								foreach($complex as $comp){
									($cnt == 0)? $active = 'active' : $active = '';
									echo '<div class="w-tabs-item '.$active.'">
											<span class="w-tabs-item-icon"></span>
											<span class="w-tabs-item-title">Комплекс №'.($cnt+1).'</span>
										</div>';
									$cnt++;
								}
								?>
							</div>
							<?php
							$cnt2 = 0;
							foreach($complex as $comp){
								($cnt2 == 0)? $active = 'active' : $active = '';
								echo '<div class="w-tabs-section '.$active.'">
										<div class="w-tabs-section-title">
											<span class="w-tabs-section-title-icon"></span>
											<span class="w-tabs-section-title-text">Комплекс №'.($cnt+1).'</span>
											<span class="w-tabs-section-title-control"></span>
										</div>
										<div class="w-tabs-section-content">
											<div class="w-tabs-section-content-h">';
												echo '<h4>'.$comp->complex_name.'</h4>';
												$this->widget('zii.widgets.grid.CGridView', array(
													//'htmlOptions' => array('class' => 'g-table-1'),
													'itemsCssClass' => 'table-class',
													'htmlOptions' => array('class' => 'g-table-1'),
													'id'=>'complex-grid',
													//'dataProvider'=>$model->mySearch($house->id),
													'dataProvider'=>$model->summarySearch($comp->id),
													//'filter'=>$model,
													'summaryText' => "Помещения {start} - {end} из {count}",
													'columns'=>array(
														
														//'house_id',
														array(
															'name'=>'house_id',
															'type'=>'raw',
															'value'=>'CHtml::link(AppartmentsController::getHouseName($data->house_id),array("index","house_id"=>"$data->house_id"),array())',
														),
														array(
															'name'=>'type_id',
															'value'=>'CHtml::link(AppartmentsController::getType($data->type_id),array("view","id"=>$data->id),array())',
															'type'=>'raw',
															//'filter'=>CHtml::listData(Apptype::model()->findAll(),'id','name'),
														),
														//'house_id',
														'square',
														'price2square',
														'price',
														'action',
													),
												));
											echo '</div>
										</div>
									</div>';
								$cnt2++;
							}
							?>
						</div>
					</div>
					
					<p>Современные новостройки эконом-класса Подмосковья – это комфортная и качественная недвижимость, доступная по вполне рентабельным ценам. При этом каждый регион Московской области уникален: удивительная экология и живописные окрестности, удобное расположение, спокойная, умиротворяющая атмосфера – здесь есть все, что необходимо для отдыха и комфортной жизни! </p>
					<p>Купить квартиру в новостройке в Подмосковье сегодня мечтают многие! Но привлекает москвичей не только доступность и превосходное качество такого жилья. Новостройки ближнего Подмосковья от застройщика сдаются в эксплуатацию под «черновую» отделку со всеми необходимыми коммуникациями, где уже по Вашему выбору Вы можете обустроить свою квартиру. Более того, данная недвижимость всегда является ликвидной. </p>
					<p>Поверьте, идея «Куплю квартиру в Подмосковье» может быть легко реализована. Наша компания предлагает Вашему вниманию все новостройки Москвы и Подмосковья и готова помочь Вам в приобретении жилья– с нами каждый сможет найти и купить квартиру в одной из строящихся и готовых (с отделкой) новостроек Подмосковья. </p>
					<p>К нам можно обратиться по всем вопросам продажи недвижимости – дешевых квартир в новостройках Москвы и Подмосковья. Мы сможем предложить Вам самые удобные квартиры и очень выгодные условия покупки. Цены на новостройки с черновой отделкой в Подмосковье гораздо ниже столичных.</p>
				</div>
			</div>
		</div>
		
	</div>
</div>
