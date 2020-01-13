<nav class="navbar navbar-default navbar-fixed-top" id="admin-nav" style="min-height: 33px !important;
            margin-bottom:0;
            border-radius:0;
            background: #00954A;
            display: block;">
            <div class="container" style="list-style: none;">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">Betewat Admin</a>
                </div>
                
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form></li>
                    </ul>
                    
                
            </div>
        </nav>
        <header id="header">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 align="center"><span class="fa fa-cogs"></span> Dashboard</h2>
                    </div>
                </div>
            </div>

        </header>