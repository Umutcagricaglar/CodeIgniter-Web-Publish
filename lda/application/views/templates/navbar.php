<div class="menu1">
	<nav class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="<?php echo site_url()?>">LDA</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
			<span class="navbar-toggler-icon" ></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url()?>">Ana Sayfa <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url("research")?>">Araştırmalar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url("aboutus")?>">Hakkımızda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url("contacts")?>">İletişim</a>
				</li>
				<?php
				$usertype=$this->session->userdata('user_type');

				if($usertype == 'admin')
				{
					echo '

				

				<li class="nav-item" style="float:right">
					<a class="nav-link" href="'; ?>
					<?php echo site_url("grades")?>
					<?php echo '">Notlar</a>
				</li>';
				}
				else{

				}
				?>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
					   aria-haspopup="true" aria-expanded="false">
						Forum
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo site_url("forum/posts")?>">İletiler</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo site_url("forum/posts/create")?>">Yeni İleti</a>
					</div>

				</li>
				<?php
				$usertype=$this->session->userdata('user_type');

				if($usertype == 'admin')
				{
				echo '

				

				<li class="nav-item" style="float:right">
					<a class="nav-link" href="'; ?>
				<?php echo site_url("admin/adminhome")?>
				<?php echo '">Admin Panel</a>
				</li>';
				}
				else{

				}
				?>

			</ul>
<!--							!!!DROPDOWN_Starts-->


			<?php

			if(!$this->session->userdata('name'))
			{
				echo '

				<ul class="navbar-nav" >

				<li class="nav-item" style="float:right">
					<a class="nav-link" href="'; ?>
					<?php echo site_url("login/login")?>
			<?php echo '">Giriş Yap</a>
				</li>'?>

			<?php echo '
				<li class="nav-item">

					<a class="nav-link" href= "'?>

			<?php echo site_url("register/register")?> <?php echo '">Kayıt Ol</a>
				</li>

			</ul>
				' ;
			}
			else

			{

				$username=$this->session->userdata('name');
				$usern = ucfirst($username);
				echo '

				<ul class="navbar-nav">

				<li class="nav-item" style="float: right">
					<a  class="nav-link username" style="color: #f9f8da">Merhaba
				'?>

				<?php echo "$usern!"?>
				<?php echo '</a> </li><li class="nav-item">

					<a class="nav-link" href= "'?>

				<?php echo base_url()."classes/logout"?> <?php echo '">Çıkış Yap</a>
				</li>

			</ul>
				' ;


			}
			?>





<!--				!!!DROPDOWN_Starts-->
<!--				<li class="nav-item dropdown">-->
<!--					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"-->
<!--					   aria-haspopup="true" aria-expanded="false">-->
<!--						Example-->
<!--					</a>-->
<!--					<div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--						<a class="dropdown-item" href="#">Example4</a>-->
<!--						<div class="dropdown-divider"></div>-->
<!--						<a class="dropdown-item" href="#">Example5</a>-->
<!---->
<!---->
<!--					</div>-->
<!--				</li>-->
					</div>
	</nav>
</div>
