<!DOCTYPE html>
<html <?php language_attributes(); ?>
  >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <?php wp_head(); ?>
    <!-- recupere les scripts et les styles -->
  </head>

  <body <?php body_class(); ?>
    >
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light col-12 ">
        <a class = "margin" href="<?php echo home_url( '/' ); ?>">
            <img 
              src="<?php echo get_template_directory_uri(); ?>/svg/logo-full.svg"
              alt="Logo"
            />
          </a>

          <a class="top-home" href="#"
            > <!-- Logo en background en css  -->
            <span class="sr-only">(current)</span></a
          >
       
          <a class="nav-item nav-link active" href="#"
            ><span class="black-underline">MAGASIN</span> 
            <span class="sr-only">(current)</span></a
          >
          <a class="nav-item nav-link active" href="#"
            ><span class="black-underline">ARCHITECTE D'INTERIEUR</span>
            <span class="sr-only">(current)</span></a
          >
          <a class="nav-item nav-link active" href="#"
            ><span class="black-underline">A PROPOS</span>
            <span class="sr-only">(current)</span></a
          >
          <a class="nav-item nav-link active" href="#"
            ><span class="black-underline">BLOG</span>
            <span class="sr-only">(current)</span></a
          >
          <a class="nav-item nav-link active" href="#"
            ><span class="black-underline">CONTACT</span>
            <span class="sr-only">(current)</span></a
          >
          
          <!-- Menu hamburger -->
          <button type="button" class="btn btn-hamb btn-wish" data-toggle="dropdown" id="dropdownMenuButton">
            
            <span id="wishlist">Wishlist</span><img class="burger"
              src="<?php echo get_template_directory_uri(); ?>/svg/bullet-list.svg"
              alt="burger"
            />
          </button>
                    
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            
          <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
           
                </div>
<!-- FIN NAV BAR STANDAR -->
<!-- ON VEUT LA METTRE ICI -->

      </nav>
    </header>

    <?php wp_body_open(); ?>
  </body>
</html>
