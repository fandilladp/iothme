 <?php
    $session = session();
    ?>
    <script>
         var MQL = 992;

//primary navigation slide-in effect
if ($(window).width() > MQL) {
  var headerHeight = $('#mainNav').height();
  $(window).on('scroll', {
      previousTop: 0
    },
    function() {
      var currentTop = $(window).scrollTop();
      //check if user is scrolling up
      if (currentTop < this.previousTop) {
        //if scrolling up...
        if (currentTop > 0 && $('#mainNav').hasClass('is-fixed')) {
          $('#mainNav').addClass('is-visible');
        } else {
          $('#mainNav').removeClass('is-visible is-fixed');
        }
      } else if (currentTop > this.previousTop) {
        //if scrolling down...
        $('#mainNav').removeClass('is-visible');
        if (currentTop > headerHeight && !$('#mainNav').hasClass('is-fixed')) $('#mainNav').addClass('is-fixed');
      }
      this.previousTop = currentTop;
    });
}
    </script>
    <style>
        #mainNav {
  position: absolute;
  border-bottom: 1px solid #e9ecef;
  background-color: white;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

#mainNav .navbar-brand {
  font-weight: 800;
  color: #343a40;
}

#mainNav .navbar-toggler {
  font-size: 12px;
  font-weight: 800;
  padding: 13px;
  text-transform: uppercase;
  color: #343a40;
}

#mainNav .navbar-nav > li.nav-item > a {
  font-size: 12px;
  font-weight: 800;
  letter-spacing: 1px;
  text-transform: uppercase;
}

@media only screen and (min-width: 992px) {
  #mainNav {
    border-bottom: 1px solid transparent;
    background: transparent;
  }
  #mainNav .navbar-brand {
    padding: 10px 20px;
    color: #fff;
  }
  #mainNav .navbar-brand:focus, #mainNav .navbar-brand:hover {
    color: rgba(255, 255, 255, 0.8);
  }
  #mainNav .navbar-nav > li.nav-item > a {
    padding: 10px 20px;
    color: #fff;
  }
  #mainNav .navbar-nav > li.nav-item > a:focus, #mainNav .navbar-nav > li.nav-item > a:hover {
    color: rgba(255, 255, 255, 0.8);
  }
}

@media only screen and (min-width: 992px) {
  #mainNav {
    transition: background-color 0.2s;
    /* Force Hardware Acceleration in WebKit */
    transform: translate3d(0, 0, 0);
  }
  #mainNav.is-fixed {
    /* when the user scrolls down, we hide the header right above the viewport */
    position: fixed;
    top: -67px;
    transition: transform 0.2s;
    border-bottom: 1px solid white;
    background-color: rgba(255, 255, 255, 0.9);
  }
  #mainNav.is-fixed .navbar-brand {
    color: #212529;
  }
  #mainNav.is-fixed .navbar-brand:focus, #mainNav.is-fixed .navbar-brand:hover {
    color: #0085A1;
  }
  #mainNav.is-fixed .navbar-nav > li.nav-item > a {
    color: #212529;
  }
  #mainNav.is-fixed .navbar-nav > li.nav-item > a:focus, #mainNav.is-fixed .navbar-nav > li.nav-item > a:hover {
    color: #0085A1;
  }
  #mainNav.is-visible {
    /* if the user changes the scrolling direction, we show the header */
    transform: translate3d(0, 100%, 0);
  }
}
    </style>
 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
     <div class="container">
         <a class="navbar-brand" href="#">ITERAIOTHME</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item active">
                     <a class="nav-link" href="<?= base_url('') ?>">Home
                         <span class="sr-only">(current)</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">About</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="<?= base_url('dokumentasi/index') ?>">Documentasion</a>
                 </li>
                 <?php if ($session->get('isLoggedIn')) : ?>
                     <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('user/index') ?>">My Account</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Logout</a>
                     </li>
                 <?php else : ?>
                     <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('auth/login'); ?>">Login</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('auth/register'); ?>">Register</a>
                     </li>
                 <?php endif ?>
             </ul>
         </div>
     </div>
 </nav>