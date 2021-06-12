<style>
.dropbtn {
  background-color: #9587CF;
  color: white;
  padding: 9px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #9587CF;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #D8005F; text-decoration: none;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #D8005F;}
</style>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" >
                <a class="navbar-brand">
                    <img src="/images/NTC logo.png" height="50" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="d-flex" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="font-family:'Adobe Devagnari';">
                      

                      @guest
                      <li>
                        @if (\Request::is('profil'))
                        <a href="/profil" class="nav-link" style="font-weight: bold; color: #4D4378">PROFIL</a>
                        @else
                        <a href="/profil" class="nav-link">PROFIL</a>
                        @endif
                      </li>
                      <!--
                      <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                      -->
                      <li>
                        @if (\Request::is('/'))
                        <a href="/" class="nav-link" style="font-weight: bold; color: #4D4378">BERANDA</a>
                        @else
                        <a href="/" class="nav-link">BERANDA</a>
                        @endif
                      </li>
                      <li>
                        @if (\Request::is('galeri'))
                        <a href="/galeri" class="nav-link" style="font-weight: bold; color: #4D4378">GALERI</a>
                        @else
                        <a href="/galeri" class="nav-link">GALERI</a>
                        @endif
                      </li>
                      <li>
                        @if (\Request::is('program'))
                        <a href="/program" class="nav-link" style="font-weight: bold; color: #4D4378">PROGRAM</a>
                        @else
                        <a href="/program" class="nav-link">PROGRAM</a>
                        @endif
                      </li>
                      <li>
                        @if (\Request::is('contact'))
                        <a href="/contact" class="nav-link" style="font-weight: bold; color: #4D4378">CONTACT US</a>
                        @else
                        <a href="/contact" class="nav-link">CONTACT US</a>
                        @endif
                      </li>
                      <!--
                      <li class="nav-item{{ request()->is('login') ? ' active' : '' }}">
                                <a href="{{ route('login') }}"><button class="dropbtn">{{ __('Login') }}</button></a>
                                
                            </li> 
                            -->
                        @else
                        <li>
                          @if (\Request::is('posts'))
                          <a href="/posts" class="nav-link" style="font-weight: bold; color: #4D4378">BERANDA</a>
                          @else
                          <a href="/posts" class="nav-link">BERANDA</a>
                          @endif
                        </li>
                        <li>
                          @if (\Request::is('galeris'))
                          <a href="/galeris" class="nav-link" style="font-weight: bold; color: #4D4378">GALERI</a>
                          @else
                          <a href="/galeris" class="nav-link">GALERI</a>
                          @endif
                        </li>
                        <li>
                          @if (\Request::is('programs'))
                          <a href="/programs" class="nav-link" style="font-weight: bold; color: #4D4378">PROGRAM</a>
                          @else
                          <a href="/programs" class="nav-link">PROGRAM</a>
                          @endif
                        </li>

                        <div class="dropdown">
                          <button class="dropbtn">{{ Auth::user()->name }}</button>
                          <div class="dropdown-content">
                            <a href="{{ route('register') }}">Register</a>
                            <a href="{{ route('logout') }}">Log Out</a>
                          </div>
                        </div>
                        
                        @endguest
                        
                    </ul>
                </div>
            </div>
        </nav>