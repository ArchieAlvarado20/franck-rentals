<div>
<nav>
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#" class="logo">
              <img src="{{url('assets/logo-dark.png')}}" alt="logo" class="logo-white" />
              <img src="{{url('assets/logo-dark.png')}}" alt="logo" class="logo-dark" />
              <span></span>
            </a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a wire:navigate href="/">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#deals">Rental Deals</a></li>
          <li><a href="#choose">Why Choose Us</a></li>
          @auth
          <li><a href="#client">Book now</a></li>
          <li><a href="#client">Testimonials</a></li>
          @endauth
        </ul>
        <div class="nav__btns">
            @guest
            <div class="">
              <a wire:navigate class="btn block w-full text-sm text-slate-500 text-center" href="/login">
                Log in
              </a>
            </div>
            @endguest
            @auth
            <div class="flex mb-2" style="width: 380px; justify-content: end;">
            <h1 class="mt-3 text-md font-bold me-2">
                Hi! client {{ucfirst(auth()->user()->name)}}
            </h1>
            <a href="/logout" class="btn w-full text-sm text-gray-900 text-center">
                Logout
              </a>
              @endauth
          </div> 
        
        </div>
      </nav>
</div>
