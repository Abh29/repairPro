@php
    $first_name = $user->profile->identity->first_name;
    $last_name =  $user->profile->identity->last_name;
    $ratings_count = $usersRating->where('profile_id',$user->profile->id)->get()->count();
    $membership_date = date('d M Y', strtotime($user->created_at));
    $description = $user->profile->description;
    $ratingAVG = $usersRating->where('profile_id',$user->profile->id)->get()->avg('rating');
@endphp

<div class="wt-main-section wt-paddingtopnull wt-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                <div class="wt-userprofileholder">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 float-left">
                        <div class="row">
                            <div class="wt-userprofile">
                                <figure>
                                    <img src="{{$user->profile->profileImage}}" alt="img description">
                                    <div class="wt-userdropdown wt-online">
                                    </div>
                                </figure>
                                <div class="wt-title">
                                    <h3><i class="fa fa-check-circle"></i> {{$first_name.' '.$last_name}}</h3>
                                    <span>{{round($ratingAVG,1)}}/5 <a class="javascript:void(0);">({{$ratings_count}} Feedback)</a> <br>Member since {{$membership_date}} <br><a href="#comment_user">Rate user</a> <a href="#report_user" class="wt-reportuser">Report User</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 float-left">
                        <div class="row">
                            <div class="wt-proposalhead wt-userdetails">
                                <h2>Computer Repair Engiuneer</h2>
                                <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
                                    <li><span>{{$user->profile->location->wilaya}}</span></li>
                                    <li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> Save</a></li>
                                </ul>
                                <div class="wt-description">
                                    {{$description}}    
                                </div>
                            </div>

                    </div>
                </div>
    </div>
</div>
