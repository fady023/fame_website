 <!-- Start Header -->
    <header class="header js-header-scroll">
        <nav hidden>
            <div class="nav-header">
                <a href="#" class="brand">
                    <img src="{{asset('frontend/assets/brand/logo.png')}}" class="logo" alt="Smooth" />
                </a>
                <button class="toggle-bar">
                    <span class="fa fa-bars"></span>
                </button>
            </div>
            <!-- Start Header menu for mobile -->
            <div class="header__mobile js-header-menu">
                <a href="#" class="header__mobile-brand">Menu</a>
                <button class="toggle-bar header__mobile-toggle">
                    <span class="fa fa-remove"></span>
                </button>
            </div>
            <!-- End Header menu for mobile -->
            <ul class="menu">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#prtofoilio">Prtofoilio</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
            <!--<ul class="attributes">
                <li class="header__button"><a href="https://themeforest.net/user/99webpage/portfolio" class="btn btn-primary btn-rounded btn-xs btn-header">Get a Free Demo Now</a></li>
                <li class="header__download-icon"><a href="https://themeforest.net/user/99webpage/portfolio"><i class="fa fa-download"></i></a></li>
            </ul>-->
            <ul class="attributes">
                <li><a href="#" class="footer__widget-network-link"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="footer__widget-network-link"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="footer__widget-network-link"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" class="footer__widget-network-link"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </nav>
    </header>
    <!-- End Header -->

      <script>
               document.querySelectorAll('li').forEach(item => {
                   item.addEventListener('click', event => {
                       //alert(item.outerHTML);
                       document.querySelectorAll('li').forEach(item => {
                           if (item.className === "active") {
                               item.classList.remove("active");
                           }
                       });
                       item.classList.add("active");

                   });

               })

           </script>