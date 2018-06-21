    <nav class="navbar navbar-static-top" style="margin-bottom:0px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                
                <div style="margin-bottom:13;"></div>
                <b><a class="navbar-brand text-muted" href="/" style="color:black; font-size:200%; margin-top:13px;">Household Accounts</a></b>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right pager">
                    @if (Auth::check())
                        <li>
                            
                        </li>
                
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">menus</li>
                                <li>{!! link_to_route('logout', 'Logout',['class' => 'btn btn-warning']) !!}</li>
                            </ul>
                        </li>
                    
                    @endif
                    
                </ul>
            </div>
        </div>
    </nav>