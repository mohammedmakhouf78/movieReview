<header class="site-header">

      <div class="container">
            <a href="index.html" id="branding">

                  <img src="{{ asset('frontTemplate/images/logo2.png') }}" alt="" class="logo"
                        style="width: 75px;height: 75px; margin-top: -13px; margin-left: 5px; ">
                  <div class="logo-copy">
                        <h1 class="site-title"
                              style="font-weight: bolder ; font-family:     Cochin, Georgia, Times, 'Times New Roman', serif; font-weight: 30px; padding-left: 5px;">
                              Movie
                              <span style="color: #DE0A0A;">Reveviw</span>
                        </h1>
                        <small class="site-description"> Make Your Review Share Us Your Opinion
                              <br /> On Recent Movies</small>
                  </div>
            </a> <!-- #branding -->

            <div class="main-navigation">
                  <button type=" button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                  <ul class="menu"
                        style="padding: 10px; border: #333; background-color: #333;font-weight: 600; ">
                        <li class="menu-item current-menu-item"><a href="{{ route('home.index') }}"
                                    style="color: #fff; font-size: 16px; font-weight: bold;">Home</a></li>
                        @guest
                        <li class="menu-item">
                              <a href="{{ route('home.registerPage') }}" style="color: #fff; font-size: 16px; font-weight: bold;">Register</a>
                        </li>
                        <li class="menu-item">
                              <a href="{{ route('home.loginPage') }}" style="color: #fff; font-size: 16px; font-weight: bold;">Login</a>
                        </li>
                        @else
                        @role('editor')
                        <li class="menu-item">
                              <a href="{{ route('home.editor.profile') }}" style="color: #fff; font-size: 16px; font-weight: bold;">Profile</a>
                        </li>
                        @endrole
                        <li class="menu-item">
                              <a href="{{ route('home.logout') }}" style="color: #fff; font-size: 16px; font-weight: bold;">Logout</a>
                        </li>
                        @endguest
                        

                        
                        
                  </ul>
                  <div class="mobile-navigation"></div>
            </div>
</header>
