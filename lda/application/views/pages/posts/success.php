<div class="container">
<div class="row justify-content-center">
	<div class="col-sm-10">
		<div>
			<h5 style="text-align: center" ">Foruma yeni bir yazı yazdınız!<br> Forum sayfasına <span id="seconds">5</span> saniye içerisinde yönlendirileceksiniz. <br><br> <a class="nav-link" href="<?php echo site_url("forum/posts"); ?>"></i>Yönlendirilmezseniz buraya tıklayın</a></h5>

			<script>setTimeout(function(){ window.location.href="<?php echo site_url("forum/posts"); ?>" },5000);</script>
		</div>

	</div>
</div>

<script>
	timeLeft = 5;

	function countdown() {
		timeLeft--;
		document.getElementById("seconds").innerHTML = String( timeLeft );
		if (timeLeft > 0) {
			setTimeout(countdown, 1000);
		}
	};

	setTimeout(countdown, 1000);
</script>
</div>
