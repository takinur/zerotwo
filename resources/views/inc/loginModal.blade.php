@if (request()->is('candidates'))
    <!-- ======= Login Modal ======= -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
	<div class="modal-dialog" >
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-dark" id="loginModal">{{ __('Login to View Candidate Profile') }}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form  id="regForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-row">
                        <!-- Email Address -->
                        <div class="form-group col">
                            <input type="text" placeholder="Email" class="form-control form-control-lg @error('email') is-invalid @enderror"  name="email" :value="__('email')" >            
                            @error('email') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                        </div>                    
                    </div>
                    <div class="form-row">
                        <!-- Password -->
                        <div class="form-group col">
                            <input type="password" placeholder="Password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" >            
                            @error('password') <div class="invalid-feedback"> {{ $message }}</div> @enderror
                        </div>                     
                    </div>
                    <!-- Remember Me -->
                    <div class="btn-group-toggle flat-center" data-toggle="buttons">
                        <label class="btn btn-outline-info">
                        <input type="checkbox"  name="remember" id="remember_me" > Stay signed in
                        </label>
                    </div>
        
                    <div class="d-flex justify-content-end mt-4">
                        <a class="text-success mt-2 mr-3" href="{{ route('register') }}">
                                {{ __('Dont have account?') }}
                            </a>    
                            <button class="btn btn-success rounded-pill">
                                {{ __('Log in') }}
                            </button>
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>
	@section('scripts')
	@parent
		@if($errors->has('email') || $errors->has('password'))
			<script>
				$(function() {
					$('#loginModal').modal({
						show: true
					});
				});
			</script>
		@endif
	@endsection
@endif

