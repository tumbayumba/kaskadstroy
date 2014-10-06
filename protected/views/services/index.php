<?php
/* @var $this ServicesController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="l-main">
	<div class="l-main-h">

		<div class="l-submain for_pagehead">
			<div class="l-submain-h g-html i-cf">
				<div class="w-pagehead">
					<h1>Услуги компании «Каскадстройсервис»</h1>
					<p>Квартиры в ближнем Подмосковье без посредников</p>
				</div>
			</div>
		</div>
		
		<div class="l-submain">
			<div class="l-submain-h g-html i-cf">
				
				<div class="g-cols">
					<div class="one-third animate_afl">
						<h4>Услуги</h4>
						<?php
						foreach($services as $service){
							if(!isset($_GET['id'])){
								$_GET['id'] = $service->id;
							}
							($service->id==$_GET['id'])? $bold = '<b>' : $bold = '';
							echo $bold.CHtml::link($service->name,array('index','id'=>$service->id),array()).'</b></p>';
						}
						?>
					</div>
					<div class="two-thirds animate_afc">
						<?php
						foreach($services as $service){
							if($service->id==$_GET['id']){
								echo '<h4>'.$service->name.'</h4>';
								echo $service->content;
							}
						}
						?>
					</div>
				</div>		
						
			</div>
		</div>
		
	</div>
</div>
