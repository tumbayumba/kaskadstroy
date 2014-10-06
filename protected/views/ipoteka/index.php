<?php
/* @var $this ServicesController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="l-main">
	<div class="l-main-h">

		<div class="l-submain for_pagehead">
			<div class="l-submain-h g-html i-cf">
				<div class="w-pagehead">
					<h1>Ипотека</h1>
				</div>
			</div>
		</div>
		
		<div class="l-submain">
			<div class="l-submain-h g-html i-cf">
				<div>
				<p>Инвестор-застройщик ЗАО "КАСКАДСТРОЙСЕРВИС" предлагает выгодные условия приобретения доступного жилья в новом жилом микрорайоне "МАРЗ" рядом с г. Железнодорожный. Наши специалисты обсудят с Вами все нюансы приобретения жилья в ипотеку и детального объяснят условия оформления ипотечного кредита. Мы рады предложить Вам 1,2,3-х комнатные квартиры от застройщика в ипотеку в готовом (К-2) и строящихся (К-1, К-3, К-4) жилых домах микрорайона "МАРЗ". В настоящее время ЗАО "КАСКАДСТРОЙСЕРВИС" предлагает своим клиентам ипотеку от банков-партнеров ООО КБ "ИНТЕРКОММЕРЦ" и ОАО "РОСТ"</p>
				</div>
				<div class="g-cols">
					<div class="one-third animate_afl">
						<h4>Ипотека</h4>
						<?php
						foreach($ipoteka as $ip){
							if(!isset($_GET['id'])){
								$_GET['id'] = $ip->id;
							}
							($ip->id==$_GET['id'])? $bold = '<b>' : $bold = '';
							echo $bold.CHtml::link($ip->name,array('index','id'=>$ip->id),array()).'</b></p>';
						}
						?>
					</div>
					<div class="two-thirds animate_afc">
						<?php
						foreach($ipoteka as $ip){
							if($ip->id==$_GET['id']){
								echo '<h4>'.$ip->name.'</h4>';
								echo $ip->description;
							}
						}
						?>
					</div>
				</div>		
						
			</div>
		</div>
		
	</div>
</div>
