<div class="navbar navbar-fixed-top" >
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i></a>
                <img src="images/TPC.png" alt="tpc" class="brand"  width="120" height="120">
                <h1 class="name">Welcome Talibon Polytechnic College's Librarian!</h1> 
            <div class="nav-collapse collapse navbar-inverse-collapse">
                <ul class="nav pull-right">
                    <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('images/Profile.png') }}" class="nav-avatar" />{{ auth()->user()->username }}
                        <b class="caret"></b></a>
                        <!-- <ul class="dropdown-menu">
                            <li><a href="{{ URL::route('account-sign-out') }}">Logout</a></li>
                        </ul> -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>