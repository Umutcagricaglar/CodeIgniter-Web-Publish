
<br>
<br>


<div class="grid-container">

	<div class="grid-item item1 text-center border border-primary" >
		<div class="wrapper">
			<a onclick="document.getElementById('frame').style.display = 'block'; document.getElementById('frame2').style.display = 'none';" class="button" href="#" style="color:white; text-decoration: none">Saf Madde</a>
		</div>
		<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
			<defs>
				<filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
					<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
					<feComposite in="SourceGraphic" in2="goo" operator="atop"/>
				</filter>
			</defs>
		</svg>
	</div>

	<div class="grid-item item2 text-center border border-primary" style="border-color: #ffc122 !important; border-width: 5px !important; border-style:solid !important;">
			<a style="display: block" id=frame href="<?php echo base_url('materials/science1')?>"><br><img src="<?php echo base_url('assets/icons/science1.png')?>"><br>Saf Madde Konusuna <br>Başlamak İçin Buraya Tıkla</a>
			<a style="display: none" id=frame2 href="<?php echo base_url('materials/science2')?>"><br><img src="<?php echo base_url('assets/icons/science1.png')?>"><br>Besinler Konusuna <br>Başlamak İçin Buraya Tıkla</a>
<!--		<iframe id="frame" src="--><?php //echo base_url('assets/materials/fen1/story.html')?><!--" width="1125" height="700" style="display: block; float: right "></iframe>-->
	</div>

	<div class="grid-item item4 text-center border border-primary" >
		<div class="wrapper">
			<a onclick="document.getElementById('frame2').style.display = 'block'; document.getElementById('frame').style.display = 'none';" class="button" href="#" style="color:white; text-decoration: none">Besinler</a>

		</div>
		<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg"
			 version="1.1">
			<defs>
				<filter id="goo">
					<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
					<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
								   result="goo" />
					<feComposite in="SourceGraphic" in2="goo" operator="atop" />
				</filter>
			</defs>
		</svg>
	</div>

	<div class="grid-item item5 text-center border border-primary" >
		<div class="wrapper">
			<a class="button" href="#" style="color:white; text-decoration: none">Topic 3</a>
		</div>
		<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg"
			 version="1.1">
			<defs>
				<filter id="goo">
					<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
					<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
								   result="goo" />
					<feComposite in="SourceGraphic" in2="goo" operator="atop" />
				</filter>
			</defs>
		</svg>
	</div>
</div>
