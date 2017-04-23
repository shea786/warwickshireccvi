                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse top-nav" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right" >
                                <li><a href="{{ route('default.index') }}">Home</a>
                                <li><a href="#">About</a></li>
                                <li><a href="{{ route('fixtures.index') }}">Fixtures</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-single.html">Shop Single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                
                                @if (Auth::check())
                                    <li class="dropdown">
                                        <a href="/profile" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('myProfile.create') }}">Create Profile</a></li>
                                            
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                                        </ul>
                                    </li>
                                @else
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            </ul>
                        </div><!-- /.navbar-collapse -->