 <!-- Start Header -->
 <header class="header js-header-scroll">
     <nav hidden>
         <div class="container-fluid">

             <div class="nav-header">
                 <a href="/index#home" class="brand">
                     <img src="{{ asset('frontend/assets/brand/logo.png') }}" class="logo" alt="Smooth" />
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
                 <li class="active"><a href="/index#home">Home</a></li>
                 <li class="has-drop">
                     <a href="/index#services" role="button" data-toggle="dropdown" aria-expanded="false">Services <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                     <div class="dropdown-menu">
                         <a class="dropdown-item" href="{{ url('/services/web_mobile_services') }}">Web and Mobile Development</a>
                         <a class="dropdown-item" href="{{ url('/services/digital_marketing') }}">Digital Marketing</a>
                         <a class="dropdown-item" href="{{ url('/services/media_production') }}">Media Production</a>
                         <a class="dropdown-item" href="{{ url('/services/pr_com') }}">PR & Communication</a>
                         <a class="dropdown-item" href="{{ url('/services/display_design') }}">3D Booths and Display Design</a>
                         <a class="dropdown-item" href="{{ url('/services/branding') }}">Branding</a>
                         <a class="dropdown-item" href="{{ url('/services/business_startup') }}">Business Startup</a>
                     </div>
                 </li>
                 <li><a href="/index#about">About</a></li>
                 <li><a href="/index#prtofoilio">Prtofoilio</a></li>
                 <li><a href="/index#contact">Contact</a></li>
                 <li><a href="/list_blogs">Blog</a></li>
             </ul>
             <!--<ul class="attributes">
                    <li class="header__button"><a href="https://themeforest.net/user/99webpage/portfolio" class="btn btn-primary btn-rounded btn-xs btn-header">Get a Free Demo Now</a></li>
                    <li class="header__download-icon"><a href="https://themeforest.net/user/99webpage/portfolio"><i class="fa fa-download"></i></a></li>
                </ul>-->
             <ul class="attributes">
                 <a href="{{ url('/qoute') }}" class="btn btn-outline">Free consultation</a>
             </ul>
         </div>
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
