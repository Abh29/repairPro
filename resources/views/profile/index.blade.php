@extends('layouts.app')

@section('content')

@include('layouts.banners.profile')

<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor pl-0">
    <!-- User Profile Start-->

        @include('layouts.profileCarte', [$user ,$usersRating])

        <!-- User Profile End-->
        <!-- User Listing Start-->
        <div class="container">
            <div class="row">
                <div id="wt-twocolumns" class="wt-haslayout">
                    <div class="col-xs-4 col-sm-5 col-md-7 col-lg-7 col-xl-8 float-left">
                        <div class="wt-usersingle">
                            <div class="wt-clientfeedback">
                                <div class="wt-usertitle wt-titlewithselect">
                                    <h2>Client Feedback</h2>
                                    <div class="form-group">
                                        <span class="wt-select">
                                            <select>
                                                <option value="Show All">Show All</option>
                                                <option value="One Page">One Page </option>
                                                <option value="Two Page">Two Page</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>

                               @foreach ($usersRating->where('profile_id',$user->profile->id)->latest('created_at')->get() as $rating)
                                    @php
                                        $ratingUser = $user->where('id',$rating->user_id)->get()[0];
                                    @endphp

                                    <div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor mt-3 mb-0">
                                        <figure class="wt-userlistingimg">
                                            <img src="{{$ratingUser->profile->profileImage}}" alt="image description">
                                        </figure>
                                        <div class="wt-userlistingcontent">
                                            <div class="wt-contenthead">
                                                <div class="wt-title">
                                                    <a href="/profile/{{$ratingUser->id}}"><i class="fa fa-check-circle"></i>{{$ratingUser->user_name}}</a>
                                                <h3>{{$rating->description}}</h3>
                                                </div>
                                                <ul class="wt-userlisting-breadcrumb">
                                                    <li><span>{{$ratingUser->profile->location->wilaya}}</span></li>
                                                <li><span><i class="far fa-calendar"></i>{{'  '.date('d M Y', strtotime($rating->created_at))}}</span></li>
                                                    <li><span>
                                                         <star-rating 
                                                                :rating="{{$rating->rating}}"  
                                                                star-size = '25'
                                                                read-only ="true"
                                                                :increment="0.5"
                                                                inactive-color="#F2F3FA"
                                                                :glow="10" 
                                                                :rounded-corners="true" 
                                                                :star-points="[23,2, 14,17, 0,19, 10,34, 7,50, 23,43, 38,50, 36,34, 46,19, 31,17]">
                                                    </star-rating></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                               
                                   
                               @endforeach

                             
                                
                                <div class="wt-btnarea">
                                    <a href="javascript:void(0);" class="wt-btn">Load More</a>
                                </div>
                            </div>

                            
                            @guest
                                
                            @else
                            @if ($user->id != auth()->user()->id)
                                
                                
                                <div class="wt-widget wt-reportjob">
                                    <div class="wt-widgettitle">
                                        <h2 id="comment_user">Comment </h2>
                                    </div>
                                    <div class="wt-widgetcontent"> 
                                        <div class="wt-formtheme wt-formreport"  >
                                            <fieldset>
                                                <rating-component user_id="{{$user->id}}" auth_id="{{auth()->user()->id}}"></rating-component>  
                                            </fieldset>
                                        </div>
                                        
                                        
                                    </div>
                                </div>

                                <div class="wt-widget wt-reportjob">
                                    <div class="wt-widgettitle">
                                        <h2 id="report_user">Report This User</h2>
                                    </div>
                                    <div class="wt-widgetcontent">
                                        <form class="wt-formtheme wt-formreport">
                                            <fieldset>
                                                <report-component user_id="{{$user->id}}" auth_id="{{auth()->user()->id}}"></report-component>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>

                            @endif
                            @endguest

                    
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Listing End-->
    </div>
</main>
@endsection
@section('script')
  

@endsection

