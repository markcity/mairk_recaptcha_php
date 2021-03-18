<html>
  <head>
    <title>Subscribe to Newsletter</title>
	<!-- mairk recaptcha #https://sandbox.projektordigital.com/rc/example.php  -->
    <?php include('mairk_rc/mairk_rc_head.php');  ?>
  </head>
  <body>
    <div>
      <b>Subscribe Newsletter</b>
    </div>
  
    <form id="newsletterForm" action="subscribe.php" method="post">
      <div>
          <div>
              <input type="email" id="email" name="email">
          </div>
          <div>
              <input type="submit" value="submit">
          </div>
      </div>
    </form>
  
	<!-- mairk_rc this goes before end of body -->
    <script src='mairk_rc/mairk_rc.js.php'></script>
    
  </body>
</html>