
<header class="navbar-masthead banner navbar navbar-inverse navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <a href="<?php echo home_url(); ?>">
        <!--<span class="text-hide"><?php bloginfo('name'); ?></span>-->
        <img class="img-responsive" src="/assets/img/SIR-masthead.gif">
      </a>
    </div>
    
  </div>
</header><!-- /.navbar -->

<header class="navbar-primary banner navbar navbar-inverse navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-md hidden-lg" href="<?php echo home_url(); ?>/">
        <span class="logotype hidden-md"><b>Menu</b> &rarr;</span>
      </a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header><!-- /.navbar -->

