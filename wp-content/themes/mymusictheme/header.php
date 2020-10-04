<!-- in header -->
<head>
<?php
wp_head();
?>
</head>
<body>

<header class="header text-center">
<div class="pt-lg-4 mb-0">
    <a class="site-title pt-lg-4 mb-0" href="index.html">
        <?php echo get_bloginfo('name'); ?>
</a>
</div>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarColor01" style="">
    <?php
    if(function_exists('the_custom_logo')){
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
        
    }
    ?>
    <img class="main-nav-logo" src="<?php echo $logo[0] ?>" alt="logo">

<?php 
    wp_nav_menu(
        array(
        'menu' => 'primary',
        'container' => '',
        'theme_location' => 'primary',
        'items_wrap' => '<ul id="" class="navbar-nav mr-auto">%3$s</ul>'
    )
);
// need walker function/class to apply bootsrap 'nav-link' class to a tags in nav menu
?>

      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>