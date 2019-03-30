<header>
  <a href="javascript:void(0)" class="hd-icon menuico"></a>

  <a href="/food-app"><img src="images/logo.png" height="39"></a>

  <?php if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]){ ?>
  <a href="javascript:void(0)" class="hd-icon cart"></a>
  <a href="javascript:void(0)" class="hd-icon alert"></a>
  <? } ?>
</header>

<div class="menu-overlay"></div>
<div class="menu-wrapper">
  <ul>
    <?php if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]){ ?>
    <li>Bienvenido <?php echo $_SESSION["user_name"];?></li>
    <li><a href="change-pass">Cambiar Contraseña</a></li>
    <li><a href="logout">Cerrar Sesion</a></li>

    <? }else{ ?>
    <li><a href="login">Login</a></li>
    <li><a href="register">Crear Cuenta</a></li>
    <? } ?>
  </ul>
</div>
