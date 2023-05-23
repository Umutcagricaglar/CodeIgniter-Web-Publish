<br>
<div class="container intro-sm-10 text-center border border-primary">


	<br>
	<h3 align="center">
		Kayıt Sayfası
	</h3>
	<br>
	<div class="panel panel-default" >
		<div class="panel-heading" > Kayıt Ol</div>
		<div class="panel-body" >
			<?php
			if($this->session->flashdata('message'))
			{
				echo'
				<div class="alert alert-success">'.$this->session->flashdata("message").'
				</div>
				';
			}
			?>
			<form method="post" action="<?php echo base_url();?>register/validation">
				<div class="form-group">
					<label> Kullanıcı Adı Giriniz</label>
					<input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>"
						 <span class="text-danger"><?php echo form_error('user_name'); ?></span>
				</div>
				<div class="form-group">
					<label>E-posta Adresi Giriniz</label>
					<input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>">
					<span class="text-danger"><?php echo form_error("user_email");?></span>
				</div>
				<div class="form-group">
					<label>Şifre Giriniz</label>
					<input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>">
					<span class="text-danger"><?php echo form_error("user_password"); ?></span>
				</div>
				<div class="form-group">
					<input type="submit" name="register" value="Kayıt Ol" class="btn btn-info">
				</div>
			</form>
		</div>
	</div>

</div>


