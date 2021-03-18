<?php include ('mairk_rc_config.php'); ?>

	<script 
		src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous">
	</script>
	
	<!-- recaptcha include this in the head after jquery -->
	<script 
		src="https://www.google.com/recaptcha/api.js?render=<?= $publicCaptchaKey; ?>">
	</script>
	<!-- end recaptcha head -->