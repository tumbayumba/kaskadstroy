<?php
/* @var $this ServicesController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="l-main">
	<div class="l-main-h">

		<div class="l-submain for_pagehead">
			<div class="l-submain-h g-html i-cf">
				<div class="w-pagehead">
					<h1>Новости</h1>
				</div>
			</div>
		</div>
		
		<div class="l-submain">
			<div class="l-submain-h g-html i-cf">
				<div class="g-cols">
					<div class="one-third animate_afl">
						<h4>Новости</h4>
						<?php
						foreach($news as $n){
							$date = explode(' ',$n->create_date);
							if(!isset($_GET['id'])){
								$_GET['id'] = $n->id;
							}
							($n->id==$_GET['id'])? $bold = '<b>' : $bold = '';
							//echo $bold.CHtml::link($n->header,array('index','id'=>$n->id),array()).'</b></p>';
							echo '<div class="element animate_afr">
										<div class="w-bloglist-entry">';
											echo $bold.CHtml::link($n->header.'<br>',array('index','id'=>$n->id),array()).'</b>';
											echo '<i class="icon-time"></i> ';
											echo '<span class="w-bloglist-entry-date">'.$date[0].'</span>
										  </div>
								  </div>';
						}
						?>
					</div>
					<div class="two-thirds animate_afc">
						<?php
						foreach($news as $n){
							if($n->id==$_GET['id']){
								$date = explode(' ',$n->create_date);
								echo '<h4>'.$n->header.'</h4>';
								echo '<i class="icon-time"></i> ';
								echo '<span class="w-bloglist-entry-date">'.$date[0].'</span><br>';
								echo $n->content;
							}
						}
						?>
					</div>
				</div>		
						
			</div>
		</div>
		
	</div>
</div>
