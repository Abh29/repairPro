@extends('layouts.app')

@section('content')

@include('layouts.banners.searchResult')


    			<!--Main Start-->
                <main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor pl-0">
                    <div class="wt-main-section wt-haslayout">
                        <!-- User Listing Start-->
                        <div class="wt-haslayout">
                            <div class="container">
                                <div class="row">
                                    <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                                            <div class="wt-usersidebaricon">
                                                <span class="fa fa-cog wt-usersidebardown">
                                                    <i></i>
                                                </span>
                                            </div>
                                            <aside id="wt-sidebar" class="wt-sidebar wt-usersidebar">
                                                <div class="wt-widget wt-effectiveholder">
                                                    <div class="wt-widgettitle">
                                                        <h2>Categories</h2>
                                                    </div>
                                                    <div class="wt-widgetcontent">
                                                        <form class="wt-formtheme wt-formsearch">
                                                            <fieldset>
                                                                <div class="form-group">
                                                                    <input type="text" name="Search" class="form-control" placeholder="Search Category">
                                                                    <a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
                                                                </div>
                                                            </fieldset>
                                                            <fieldset>
                                                                <div class="wt-checkboxholder wt-verticalscrollbar">
                                                                    <span class="wt-checkbox">
                                                                        <input id="wordpress" type="checkbox" name="description" value="company" checked>
                                                                        <label for="wordpress"> Electronics</label>
                                                                    </span>
                                                                    <span class="wt-checkbox">
                                                                        <input id="graphic" type="checkbox" name="description" value="company">
                                                                        <label for="graphic"> Mechanics</label>
                                                                    </span>
                                                                    <span class="wt-checkbox">
                                                                        <input id="website" type="checkbox" name="description" value="company">
                                                                        <label for="website"> Electro-Mechanics</label>
                                                                    </span>
    
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="wt-widget wt-effectiveholder">
                                                    <div class="wt-widgettitle">
                                                        <h2>Location</h2>
                                                    </div>
                                                    <div class="wt-widgetcontent">
                                                        <form class="wt-formtheme wt-formsearch">
                                                            <fieldset>
                                                                <div class="form-group">
                                                                    <input type="text" name="fullname" class="form-control" placeholder="Search Location">
                                                                    <a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
                                                                </div>
                                                            </fieldset>
                                                            <fieldset>
                                                                <div class="wt-checkboxholder wt-verticalscrollbar">
    
    
                                                                    <span class="wt-checkbox">
                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                        <label for="wt-description"> Adrar</label></span>
                                                                            <span class="wt-checkbox">
                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                <label for="wt-description"> Chlef</label></span>
                                                                                    <span class="wt-checkbox">
                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                        <label for="wt-description"> Laghouat</label></span>
                                                                                            <span class="wt-checkbox">
                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                <label for="wt-description"> Oum El Bouaghi</label></span>
                                                                                                    <span class="wt-checkbox">
                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                        <label for="wt-description"> Batna</label></span>
                                                                                                            <span class="wt-checkbox">
                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                <label for="wt-description"> Béjaïa</label></span>
                                                                                                                    <span class="wt-checkbox">
                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                        <label for="wt-description"> Biskra</label></span>
                                                                                                                            <span class="wt-checkbox">
                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                <label for="wt-description"> Béchar</label></span>
                                                                                                                                    <span class="wt-checkbox">
                                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                        <label for="wt-description"> Blida</label></span>
                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                <label for="wt-description"> Bouira</label></span>
                                                                                                                                                    <span class="wt-checkbox">
                                                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                        <label for="wt-description"> Tamanrasset</label></span>
                                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                <label for="wt-description"> Tébessa</label></span>
                                                                                                                                                                    <span class="wt-checkbox">
                                                                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                        <label for="wt-description"> Tlemcen</label></span>
                                                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                <label for="wt-description"> Tiaret</label></span>
                                                                                                                                                                                    <span class="wt-checkbox">
                                                                                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                        <label for="wt-description"> Tizi Ouzou</label></span>
                                                                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                <label for="wt-description"> Alger</label></span>
                                                                                                                                                                                                    <span class="wt-checkbox">
                                                                                                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                        <label for="wt-description"> Djelfa</label></span>
                                                                                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                <label for="wt-description"> Jijel</label></span>
                                                                                                                                                                                                                    <span class="wt-checkbox">
                                                                                                                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                        <label for="wt-description"> Sétif</label></span>
                                                                                                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                <label for="wt-description"> Saïda</label></span>
                                                                                                                                                                                                                                    <span class="wt-checkbox">
                                                                                                                                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                        <label for="wt-description"> Skikda</label></span>
                                                                                                                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                <label for="wt-description"> Sidi Bel Abbès</label></span>
                                                                                                                                                                                                                                                    <span class="wt-checkbox">
                                                                                                                                                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                        <label for="wt-description"> Annaba</label></span>
                                                                                                                                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                                <label for="wt-description"> Guelma</label></span>
                                                                                                                                                                                                                                                                    <span class="wt-checkbox">
                                                                                                                                                                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                                        <label for="wt-description"> Constantine</label></span>
                                                                                                                                                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                                                <label for="wt-description"> Médéa</label></span>
                                                                                                                                                                                                                                                                                    <span class="wt-checkbox">
                                                                                                                                                                                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                                                        <label for="wt-description"> Mostaganem</label></span>
                                                                                                                                                                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                                                                <label for="wt-description"> M'Sila</label></span>
                                                                                                                                                                                                                                                                                                    <span class="wt-checkbox">
                                                                                                                                                                                                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                                                                        <label for="wt-description">Mascara</label></span>
                                                                                                                                                                                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                                                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                                                                                <label for="wt-description">Ouargla</label></span>
                                                                                                                                                                                                                                                                                                                    <span class="wt-checkbox">
                                                                                                                                                                                                                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                                                                                        <label for="wt-description">Oran</label></span>
                                                                                                                                                                                                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                                                                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                                                                                                <label for="wt-description">El Bayadh</label></span>
                                                                                                                                                                                                                                                                                                                                    <span class="wt-checkbox">
                                                                                                                                                                                                                                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                                                                                                        <label for="wt-description">Illizi</label></span>
                                                                                                                                                                                                                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                                                                                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                                                                                                                <label for="wt-description">Bordj Bou Arreridj</label></span>
                                                                                                                                                                                                                                                                                                                                                    <span class="wt-checkbox">
                                                                                                                                                                                                                                                                                                                                                        <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                                                                                                                        <label for="wt-description">Boumerdès</label></span>
                                                                                                                                                                                                                                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                                                                                                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                                                                                                                                <label for="wt-description">El Tarf</label></span>
                                                                                                                                                                                                                                                                                                                            <span class="wt-checkbox">
                                                                                                                                                                                                                <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                            <label for="wt-description">Tindouf</label></span>
                                                                                                                                                                                <span class="wt-checkbox">
                                                                                                                                                                                    <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                    <label for="wt-description">Tissemsilt</label></span>
                                                                                                                                                                                        <span class="wt-checkbox">
                                                                                                                                                                                            <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                            <label for="wt-description">El Oued</label></span>
                                                                                                                                                                                                <span class="wt-checkbox">
                                                                                                                                                                                                    <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                    <label for="wt-description">Khenchela</label></span>
                                                                                                                                                                                                        <span class="wt-checkbox">
                                                                                                                                                                                                            <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                            <label for="wt-description">Souk Ahras</label></span>
                                                                                                                                                                                                                <span class="wt-checkbox">
                                                                                                                                                                                                                    <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                    <label for="wt-description">Tipaza</label></span>
                                                                                                                                                                                                                        <span class="wt-checkbox">
                                                                                                                                                                                                                            <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                            <label for="wt-description">Mila</label></span>
                                                                                                                                                                                                                                <span class="wt-checkbox">
                                                                                                                                                                                                                                    <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                    <label for="wt-description">Aïn Defla</label></span>
                                                                                                                                                                                                                                        <span class="wt-checkbox">
                                                                                                                                                                                                                                            <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                            <label for="wt-description">Naâma</label></span>
                                                                                                                                                                                                                                                <span class="wt-checkbox">
                                                                                                                                                                                                                                                    <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                    <label for="wt-description">Aïn Témouchent</label></span>
                                                                                                                                                                                                                                                        <span class="wt-checkbox">
                                                                                                                                                                                                                                                            <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                            <label for="wt-description">Ghardaïa</label></span>
                                                                                                                                                                                                                                                                <span class="wt-checkbox">
                                                                                                                                                                                                                                                                    <input id="wt-description" type="checkbox" name="description" value="company" checked>
                                                                                                                                                                                                                                                                    <label for="wt-description">Relizane</label></span>
    
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
    
    
                                                <div class="wt-widget wt-applyfilters-holder">
                                                    <div class="wt-widgetcontent">
                                                        <div class="wt-applyfilters">
                                                            <span>Click “Apply Filter” to apply latest<br> changes made by you.</span>
                                                            <a href="javascript:void(0);" class="wt-btn">Apply Filters</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                                            <div class="wt-userlistingholder wt-userlisting wt-haslayout">
                                                <div class="wt-userlistingtitle">
                                                <span>01 - 48 of 57143 results for <em>{{$sTag.' '}}</em>in  <em>"Electronics"</em> </span>
                                                </div>


                                                <div class="wt-filterholder">
                                                    <ul class="wt-filtertag">
                                                        <li class="wt-filtertagclear">
                                                            <a href="javascrip:void(0)"><i class="fa fa-times"></i> <span>Clear All Filter</span></a>
                                                        </li>
                                                         <li class="alert alert-dismissable fade in">
                                                            <a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Graphic Design</span></a>
                                                        </li>
                                                        <li class="alert alert-dismissable fade in">
                                                            <a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Any Hourly Rate</span></a>
                                                        </li>
                                                        <li class="alert alert-dismissable fade in">
                                                            <a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Any Freelancer Type</span></a>
                                                        </li>
                                                        <li class="alert alert-dismissable fade in">
                                                            <a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Chinese</span></a>
                                                        </li>
                                                        <li class="alert alert-dismissable fade in">
                                                            <a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>English</span></a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                @foreach ($profiles as $profile)
                                                    @php
                                                        $ratingAVG = $usersRating::where('profile_id',$profile->user_id)->get()->avg('rating');
                                                        $ratingAvg = round($ratingAVG,1);
                                                        $count = $usersRating::where('profile_id',$profile->user_id)->get()->count();
                                                    @endphp

                                                
                                                <div class="wt-userlistinghold wt-featured">
                                                <a href="/profile/{{$profile->id}}">
                                                            <figure class="wt-userlistingimg">
                                                            <img src="{{$profile->profileImage}}" alt="image description">
                                                            </figure>
                                                       </a>
                                                        <div class="wt-userlistingcontent">
                                                            <div class="wt-contenthead">
                                                                <div class="wt-title">
                                                                    <a href="usersingle.php"><i class="fa fa-check-circle"></i> {{$profile->identity->first_name.' '.$profile->identity->last_name}}</a>
                                                                    <h2>Mobile Fixer</h2>
                                                                </div>
                                                                <ul class="wt-userlisting-breadcrumb">
                                                                    <li><span>  {{$profile->location->wilaya}}</span></li>
                                                                    <li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> Save</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="wt-rightarea">
                                                                <span class="wt-starsvtwo">
                                                                    @for ($i = 0; $i < (int)$ratingAvg; $i++)
                                                                        <i class="fa fa-star fill "></i>
                                                                    @endfor
                                                                    @for ($i = (int)$ratingAvg; $i < 5; $i++)
                                                                        <i class="fa fa-star "></i>
                                                                    @endfor
                                                                    
                                                                </span>
                                                                <span class="wt-starcontent">{{$ratingAvg}}/<sub>5</sub> <em>({{$count}} Feedback)</em></span>
                                                            </div>
                                                        </div>
                                                        <div class="wt-description">
                                                        <p> {{$profile->description}}</p>
                                                        </div>  
                                                </div>
                                                
                                                @endforeach
                                                
                                                <nav class=" wt-pagination">
                                                   {{ $profiles->links() }}
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- User Listing End-->
                    </div>
                </main>
                <!--Main End-->













@endsection