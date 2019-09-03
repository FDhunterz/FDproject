<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" src="{{asset('assets/img/profile_small.jpg')}}" />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> 
                        <span class="block m-t-xs"> 
                            <strong class="font-bold">
                                
                            </strong>
                        </span> 
                        <span class="text-navbar text-xs block">
                            <b class="caret"></b>
                        </span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    WIB+
                </div>
            </li>
            
                <li class="{{Request::is('home') ? 'active nav-active' : '' || Request::is('/') ? 'active nav-active' : ''}}">
                    <a href="{{route('home')}}"><i class="fa fa-home"></i> <span class="nav-label">Dashboards</span></a>
                </li>
        </ul>

    </div>
</nav>
