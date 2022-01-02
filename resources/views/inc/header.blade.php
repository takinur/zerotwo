    <div class="container d-flex align-items-center">
       <a href="/" class="logo mr-auto"><img src="{{ asset('storage/images/logo.png') }}" alt="Zero Two Logo" class="img-fluid"></a>
      <nav class="nav-menu d-none d-lg-block">
        <ul>		
			@auth
				@if (Auth::user()->hasRole('employer'))			

					<li class="{{ request()->is('find-talent') ? 'active' : '' }}"><a href="/find-talent">Find Talent</a></li>
					<li class="{{ request()->is('pricing') ? 'active' : '' }}"><a href="/pricing">Pricing</a></li>
					<li  class="{{ request()->is('about') ? 'active' : '' }}"><a href="/about">Why ZeroTwo</a></li>  
					<li  class="{{ request()->is('contact') ? 'active' : '' }} mr-2"><a href="/contact">Contact</a></li>  

				@elseif((Auth::user()->hasRole('candidate')))

					<li class="{{ request()->is('find-work') ? 'active' : '' }}"><a href="/find-work" >Find Work</a></li>
					<li class="{{ request()->is('profile') ? 'active' : '' }}"><a href="/profile" >View Profile</a></li>
					<li  class="{{ request()->is('about') ? 'active' : '' }}"><a href="/about">Why ZeroTwo</a></li> 
					<li  class="{{ request()->is('contact') ? 'active' : '' }} mr-2"><a href="/contact">Contact</a></li>  

				@elseif((Auth::user()->hasRole('admin')))
					<li class=""><a href="/dashboard" >With Great Power, Comes Great Responibility! </a></li>
				@endif 

			@endauth

			@guest
				<li class="{{ request()->is('find-talent') ? 'active' : '' }}"><a href="/find-talent">Find Talent</a></li>
				<li class="{{ request()->is('find-work') ? 'active' : '' }}"><a href="/find-work" >Find Work</a></li>
				<li class="{{ request()->is('pricing') ? 'active' : '' }}"><a href="/pricing">Pricing</a></li>
				<li  class="{{ request()->is('about') ? 'active' : '' }}"><a href="/about">Why ZeroTwo</a></li>  
				<li  class="{{ request()->is('contact') ? 'active' : '' }} mr-2"><a href="/contact">Contact</a></li>  
			@endguest
				
      	     

        </ul>
      </nav><!-- .nav-menu --     
	  -->
	  @guest
		<a class="btn btn-link text-decoration-none"  href="{{ route('login') }}">{{ __('Login') }}</a>
		@if (Route::has('register'))
			<a class="sign-up-in-btn" href="{{ route('register') }}">{{ __('Register') }}</a>
		@endif
		@else
		<a href="/dashboard" class="btn btn-link ml-4"><i class="fas fa-user-alt"></i> {{ Auth::user()->fname}} </a>

		<a href="{{ route('logout') }}"
			class="sign-up-in-btn" style="background-color: #de3226"
			onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
			{{ csrf_field() }}
		</form>
  	  @endguest

    </div>

	


