<header>
  <a href="javascript:void(0)" class="hd-icon menuico"></a>

  <a href="/food-app" class="logo"></a>

  <?php if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]){ ?>
  <a href="javascript:void(0)" class="hd-icon cart"></a>
  <a href="javascript:void(0)" class="hd-icon alert"></a>
  <? } ?>
</header>

<div class="menu-overlay"></div>
<div class="menu-wrapper">
  <ul>
  <?php if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]){ ?>

    <li><a class="icon profile" href="/food-app/profile">Perfil</a></li>
    <li><a class="icon news" href="/food-app/news">Novedades</a></li>
    <li><a class="icon promo" href="/food-app/promo">Promociones</a></li>
    <li><a class="icon today" href="/food-app/today">Menú del día</a></li>
    <li><a class="icon join" href="/food-app/join-us">Vende con nosotros</a></li>
    <li><a class="icon question" href="/food-app/questions">Preguntas frecuentes</a></li>
    <li><a class="icon report" href="/food-app/report">Reportar incidencia</a></li>
    <li><a href="/food-app/logout">Cerrar Sesion</a></li>

    <? }else{ ?>

    <li><a href="login">Login</a></li>
    <li><a href="register">Crear Cuenta</a></li>

  <? } ?>
  </ul>
</div>
