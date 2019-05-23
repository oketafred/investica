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
			<h3>Register</h3>
		</ul>

		<div class="tabs-container alt">

			<!-- Register -->
			<div class="tab-content" id="tab2">

				<form method="post" class="register" action="{{ route("register") }}" data-parsley-validate>
					{{ csrf_field() }}
					

				@if(session('error'))
					<div class="notification error closeable">
						<p><span>Error!</span> {{ session('error') }}</p>
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
					<label for="full_name">Full Name:
						<input type="text" class="input-text" name="full_name" id="fullname" required />
					</label>
				</p>
					
				<p class="form-row form-row-wide">
					<label for="email">Email Address:
						<input type="text" class="input-text" name="email" id="email" required />
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="password">Password:
						<input class="input-text" type="password" name="password" id="password" required/>
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="password2">Repeat Password:
						<input class="input-text" type="password" name="confirm-password" id="confirm-password" required/>
					</label>
				</p>

				<p class="form-row">
					<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
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