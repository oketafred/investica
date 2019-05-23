<div class="right-side">
                <!-- Header Widget -->
    <div class="header-widget">
        
        <!-- User Menu -->
        <div class="user-menu">
            <div class="user-name"><span><img src="images/agent-03.jpg" alt=""></span>Hi, {{ Sentinel::getUser()->full_name }}!</div>
            <ul>
                @if(Sentinel::getUser()->roles()->first()->slug == "vendor")
                    <li><a href="{{ route('profile') }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
                    <li><a href="{{ route('vendor_bookmark_list') }}"><i class="sl sl-icon-star"></i> Bookmarks</a></li>
                    <li><a href="{{ route('vendor-dashboard') }}"><i class="sl sl-icon-docs"></i> My Properties</a></li>
                @endif

                @if(Sentinel::getUser()->roles()->first()->slug == "client")
                    <li><a href="{{ route('my_profile') }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
                    <li><a href="{{ route('bookmark_list') }}"><i class="sl sl-icon-star"></i> Bookmarks</a></li>
                    <li><a href="{{ route('client-dashboard') }}"><i class="sl sl-icon-docs"></i> My Properties</a></li>
                @endif
                
                <li>
                    <form action="{{ route('logout') }}" method="POST" id="form-logout">

                        {{ csrf_field() }}
                        <a href="javascript:void(0)" onclick="document.getElementById('form-logout').submit()"><i class="sl sl-icon-power"></i> Log Out</a></li>
                    </form>
            </ul>
        </div>

        @if(Sentinel::getUser()->roles()->first()->slug == "vendor")
            <a href="{{ route('vendor-dashboard') }}" class="button border">My Account</a>
        @endif

        @if(Sentinel::getUser()->roles()->first()->slug == "client")
            <a href="{{ route('client-dashboard')}}" class="button border">My Account</a>
        @endif

    </div>
    <!-- Header Widget / End -->
</div>