@extends("layout")

@section("content")
	<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Change Password</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="{{ route('index') }}">Home</a></li>
						<li>Change Password</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">


		<!-- Widget -->
		<div class="col-md-4">
			@include('vendors/includes/vendor_sidebar')
		</div>

		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6  my-profile">
					<h4 class="margin-top-0 margin-bottom-30">Change Password</h4>

					<label>Current Password</label>
					<input type="password">

					<label>New Password</label>
					<input type="password">

					<label>Confirm New Password</label>
					<input type="password">

					<a href="submit-property.html" class="margin-top-20 button">Save Changes</a>
				</div>

				<div class="col-md-6">
					<div class="notification notice">
						<p>Your password should be at least 12 random characters long to be safe</p>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<div class="margin-top-55"></div>
@endsection