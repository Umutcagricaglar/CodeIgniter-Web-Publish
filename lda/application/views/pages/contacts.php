<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img class="mess" src="<?php base_url()?>assets/icons/message.png" alt="image"/>
				<h2>İletişim Formu</h2>
				<h4></h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<form method="post" action="<?= base_url() ?>Pages/savedata">
				<div class="form-group">
					<div class="form-group">
						<label class="control-label col-sm-2" for="topic">Konu:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="topic" placeholder="Konuyu giriniz" name="topic">
						</div>
					</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="first_name">İsim:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="fname" placeholder="Adınızı Giriniz" name="first_name">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="last_name">Soyisim:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="lname" placeholder="Soyadınızı Giriniz" name="last_name">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Email:</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" placeholder="E-posta Adresinizi Giriniz" name="email">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="message">Mesajınız:</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="5" id="comment" name="msg"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" name="save" value="Save Data" class="btn btn-default">Formu Gönder</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
