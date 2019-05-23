@extends('layout')

@section('title', '')

@section('content')
	<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Titlebar
================================================== -->



<!-- Contact
================================================== -->

<!-- Container -->
<div class="container">

	<div class="row">
	<div class="col-md-4 col-md-offset-4">


	<!--Tab -->
	<div class="my-account style-1 margin-top-5 margin-bottom-40">

		<ul class="">
			<h3>Log In</h3>
		</ul>

		<div class="tabs-container alt">

			<!-- Login -->
			<div class="tab-content">
				<form method="post" id="loginForm" class="login" action="{{ route("login") }}" data-parsley-validate>

					{{ csrf_field() }}

					@if(session('error'))
						<div class="notification error closeable">
							<p><span>Error!</span> {{ session('error') }}</p>
							<a class="close" href="#"></a>
						</div>
	                @endif

	                @if(session('success'))
						<div class="notification success closeable">
							<p><span>Success!</span> {{ session('success') }}</p>
							<a class="close" href="#"></a>
						</div>
	                @endif

	                @if (count($errors) > 0)

	                    @foreach($errors->all() as $error)

	                        <div class="notification error closeable">
								<p><span>Error!</span> {{ $error }}</p>
								<a class="close" href="#"></a>
							</div>
	                    @endforeach

	                @endif

					<p class="form-row form-row-wide">
						<label for="email">Email:
							<input type="email" class="input-text" name="email" value="{{ old('email' )}}" required />
						</label>
					</p>

					<p class="form-row form-row-wide">
						<label for="password">Password:
							<input class="input-text" type="password" name="password" required/>
						</label>
					</p>

					<p class="form-row">
						<input type="submit" class="button border margin-top-10" name="login" value="Login" />

						<label for="rememberme" class="rememberme">
						<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
					</p>

					<p class="lost_password">
						<a href="#" >Lost Your Password?</a>
					</p>
					
				</form>
			</div>


		</div>
	</div>



	</div>
	</div>

</div>
<!-- Container / End -->



<!-- Footer
================================================== -->
<div class="margin-top-55"></div>
@endsection