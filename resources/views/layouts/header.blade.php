<header id="wt-header" class="wt-header wt-haslayout shadow bg-white">
        <div class="wt-navigationarea">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <strong class="wt-logo">
                            <a href="/">
                                <img src="{{asset('images/logo.png')}}" alt="company logo here">
                            </a>
                        </strong>
                        @if ($_SERVER['REQUEST_URI'] != '/')
                        <form class="wt-formtheme wt-formbanner wt-formbannervtwo" action="/search" method="GET">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="searchTag" class="form-control" placeholder="I’m looking for">
                                    <div class="wt-formoptions">
                                        <div class="wt-dropdown">
                                            <span> <em class="selected-search-type">categories </em><i class="lnr lnr-chevron-down"></i></span>
                                        </div>
                                        <div class="wt-radioholder">

                                            <option class="wt-radio">
                                                <input id="wt-freelancers" data-title="Electronics" type="radio" name="searchtype" value="1">
                                                <label for="wt-freelancers">Electronics</label>
                                            </option>
                                            <option class="wt-radio">
                                                <input id="wt-jobs"  data-title="Mechanics" type="radio" name="searchtype" value="2" >
                                                <label for="wt-jobs">Mechanics</label>
                                            </option>
                                            <option class="wt-radio">
                                                <input id="wt-company"  data-title="Electro-Mechanics" type="radio" name="searchtype" value="3" >
                                                <label for="wt-company">Electro-Mechanics</label>
                                            </option>
                                        </div>
                                        <a  class="wt-searchbtn" type="submit"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        @endif
                        <div class="wt-rightarea">
                        
    
                            @guest
                            
                            <div class="wt-loginarea">
                                <figure class="wt-userimg">
                                    <img src="{{asset('images/user-login.png')}}" alt="img description">
                                </figure>
                                <div class="wt-loginoption">
                                    <a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Login</a>
                                    <div class="wt-loginformhold">
                                        <div class="wt-loginheader">
                                            <span>Login</span>
                                            <a href="javascript:;"><i class="fa fa-times"></i></a>
                                        </div>
                                        <form class="wt-formtheme wt-loginform " method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <fieldset>
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" required autocomplete="user_name" autofocus>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                     @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                                                    @error('password')
                                                     <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
                                                </div>
    
    
                                                <div class="wt-logininfo">
                                                    <button type='submit' class="wt-btn do-login-button">Login</button>
                                                    <span class="wt-checkbox">
                                                        <input id="wt-login" type="checkbox" name="rememberme" {{ old('remember') ? 'checked' : '' }}>
                                                        <label for="wt-login">Keep me logged in</label>
                                                    </span>
    
                                                    
                                                </div>
                                            </fieldset>
                                            <div class="wt-loginfooterinfo">
                                                
                                                @if (Route::has('password.request'))
                                                      <a class="wt-forgot-password" href="javascript:;">
                                                         {{ __('Forgot Password?') }}
                                                      </a>
                                                @endif
                                                
                                                <a href="{{ route('register') }}">Create account</a>
                                            </div>
                                        </form>
    
                                        <form class="wt-formtheme wt-loginform do-forgot-password-form wt-hide-form" method="POST" action="{{route('password.email')}}">
                                            @csrf
                                            <fieldset>
                                                <div class="form-group">
                                                    <input id="email" type="email" name="email" class="form-control get_password @error('email') is-invalid @enderror" placeholder="Email" required autocomplete="email" autofocus>
                                                       
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror   
    
                                                </div>
    
                                                <div class="wt-logininfo">
                                                    @if (Route::has('password.request'))
                                                      <button type="submit" class="wt-btn do-get-password" href="{{ route('password.request') }}">
                                                         {{ __('Get Password') }}
                                                      </button>
                                                    @endif
                                                </div>
                                            </fieldset>
                                            <div class="wt-loginfooterinfo">
                                                <a href="javascript:void(0);" class="wt-show-login">Login</a>
                                                <a href="{{ route('register') }}">Create account</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <a href="{{ route('register') }}" class="wt-btn">Join Now</a>
                            </div>
                            @else
                                <div class="wt-userlogedin d-flex">
                                    <figure class="wt-userimg">
                                        <img src="{{auth()->user()->profile->profileImage}}" alt="image description">
                                    </figure>
                                    <div class="wt-username">
                                        <h3>{{auth()->user()->user_name}}</h3>
                                        <span>{{auth()->user()->profile->title}}</span>
                                    </div>
                                    <nav class="wt-usernav">
                                        <ul>
                                            <li class="menu-item-has-children page_item_has_children">
                                                <a href="javascript:void(0);">
                                                    <span>Insights</span>
                                                </a>
                                                <ul class="sub-menu children">
                                                    <li><a href="dashboard-insights.html">Insights</a></li>
                                                    <li><a href="dashboard-insightsuser.html">Insights User</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="/edit">
                                                    <span>My Profile</span>
                                                </a>
                                            </li>
        
        
                                            <li>
                                                <a href="/profileSetings">
                                                    <span>Account Settings</span>
                                                </a>
                                            </li>
                                            @if (!auth()->user()->isAServiceProvider)
                                            <li>
                                            <a href="/upgrade">
                                                    <span>become a service provider</span>
                                                </a>
                                            </li>
                                             @endif
        
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                 {{ __('Logout') }}
                                             </a>
         
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                 @csrf
                                             </form>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                        
                            
                            
    
                            @endguest
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>
