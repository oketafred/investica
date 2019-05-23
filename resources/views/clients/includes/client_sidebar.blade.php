<div class="sidebar left">

		<div class="my-account-nav-container">
			
			
			<ul class="my-account-nav">
				<li class="sub-nav-title">Manage Listings</li>
				<li><a href="{{ route('client-dashboard') }}" class="current"><i class="sl sl-icon-docs"></i> List of Properties</a></li>
				<li><a href="{{ route('bookmark_list') }}"><i class="sl sl-icon-star"></i> Bookmarked Listings</a></li>
			</ul>

			<ul class="my-account-nav">
				<li class="sub-nav-title">Manage Account</li>
				<li><a href="{{ route('my_profile') }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
			</ul>
			<ul class="my-account-nav">
				<li><a href="{{ route('client_change_password') }}"><i class="sl sl-icon-lock"></i> Change Password</a></li>
				<li>
					<form action="{{ route('logout') }}" method="POST" id="form-logout">
						
						{{ csrf_field() }}

						<a href="javascript:void(0)" onclick="document.getElementById('form-logout').submit()"><i class="sl sl-icon-power"></i> Log Out</a>
						
					</form>
				</li>
			</ul>

		</div>

	</div>