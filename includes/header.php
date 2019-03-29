<header>
  <a href="javascript:void(0)" id="go-back">
    <img src="images/go-back.png" height="16">
  </a>
  <a href="/">
    <img src="images/logo.png" height="39">
  </a>

  <?php if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]){ ?>
    
    <a href="#" class="hd-icon cart"></a>
    <a href="#" class="hd-icon alert"></a>

  <? } ?>

</header>
