<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    
    <!-- Navbar section -->
    <nav class="navbar sticky-top navbar-expand-md navbar-expand-lg navbar-dark bg-black">
      <div class="container">
        <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="navbar-brand">
          <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/uf.png" width="50" alt="Umar Farouq"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
          <ul class="navbar-nav roboto">
            <?php
              wp_nav_menu (
                array(
                  'theme_location' => 'header-menu',
                  'container' => false,
                  'items_wrap' => '%3$s',
                  'fallback_cb' => false
                )
              );
            ?>
            <li class="nav-item" data-toggle="modal" data-target="#searchModal">
              <span id="search" href="#search" class="nav-link text-danger"><span class="fa fa-search"></span></span>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="ModalSearch" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalSearch">Search for Article</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input type="text" placeholder="Search" autofocus="true" name="keyword" id="searcharticle" class="form-control roboto"/>
              </div>
            </form>
            <div id="searchresult"><!-- Search result here --></div>
          </div>
        </div>
      </div>
    </div>