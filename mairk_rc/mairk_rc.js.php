<?php include('mairk_rc_config.php'); ?>

var targetForm='<?= $targetForm; ?>';
  $(targetForm).submit(function(event) {
        event.preventDefault();
		//get email value
        var email = $('#email').val();

        grecaptcha.ready(function() {
            grecaptcha.execute('<?= $publicCaptchaKey; ?>', {action: '<?= $actionValue; ?>'}).then(function(token) {
                $(targetForm).prepend('<input type="hidden" name="token" value="' + token + '">');
                $(targetForm).prepend('<input type="hidden" name="action" value="<?= $actionValue; ?>">');
                $(targetForm).unbind('submit').submit();
            });;
        });
  });