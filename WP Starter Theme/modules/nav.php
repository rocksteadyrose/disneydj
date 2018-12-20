<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <!-- the path below places the directory into the theme folder -->
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Be Our Guest</a>
      <!-- <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/harmonyfavicon.png" height="35" alt="harmony img"></a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="navbar-nav nav navbar-right">
       <li class="active nav-item">
          <a class="nav-link" href="#">About <span class="sr-only">(Current)</span></a></li>
       <li class="nav-item">
          <a class="nav-link" href="#">Events</a></li>
       <li class="nav-item">
          <a class="nav-link" href="#">Photos</a></li>
       <li class="nav-item">
          <a class="nav-link" href="#">Press</a></li>
      <!--setting for the theme location and header menu in WP -->
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>