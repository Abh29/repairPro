@extends('layouts.app')
@section('content')
@include('layouts.banners.profile')

<div id="wt-wrapper" class="wt-wrapper wt-haslayout">	
    <div class="wt-contentwrapper">
        <main id="wt-main" class="wt-main wt-haslayout">

            <!--Register Form Start-->
            <section class="wt-haslayout">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
                        <div class="wt-haslayout wt-dbsectionspace">
                            <div class="wt-dashboardbox wt-dashboardtabsholder">
                                <div class="wt-dashboardboxtitle">
                                    <h2>My Profile</h2>
                                </div>
                                <div class="wt-dashboardtabs">
                                    <ul class="wt-tabstitle nav navbar-nav">
                                        <li class="nav-item">
                                            <a class="active" data-toggle="tab" href="#wt-skills">Business Details &amp; Business</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wt-tabscontent tab-content">
                                    <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
                                        <div class="wt-yourdetails wt-tabsinfo">
                                            <div class="wt-tabscontenttitle">
                                                <h2>Your Are </h2>
                                            </div>
                                            <form class="wt-formtheme wt-userform editForm">
                                                @csrf
                                                <fieldset>
                                                    
                                                    <div class="form-group ">
                                                        <input type="text" name="business_name" class="form-control" placeholder="{{'Business Name'}}" required>
                                                        @error('first_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <textarea name="business_description" class="form-control" placeholder="Your Business's Description "></textarea>
                                                        @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    

                                      
                                        <div class="wt-location wt-tabsinfo">
                                            <div class="wt-tabscontenttitle">
                                                <h2>Category  </h2>
                                            </div>
                                            <form class="wt-formtheme wt-userform editForm">
                                              
                                                <fieldset>
                                                    <div class=" align-items-center">
                                                        <div class="form-group ">
                                                            <span class="wt-select">
                                                                <select name="category" form="hiddenForm" required>
                                                                    <option value="1">Electonics</option>
                                                                    <option value="2">Mechanics</option>
                                                                    <option value="3">Electro-mechanics</option>
                                                                </select>
                                                            </span>
                                                            @error('category')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div id="newForm"></div>



                                    </div>
                                </div>
                                <div>
                                    <form id="hiddenForm" method="POST" action="/upgrade" enctype="multipart/form-data" style="display:none">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="wt-updatall">
                            <i class="ti-announcement"></i>
                            <span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
                            <a class="wt-btn" onclick="submitButton()">Save &amp; Update</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="wt-haslayout wt-dbsectionspace wt-codescansidebar">
                            <div class="tg-authorcodescan wt-codescanholder">
                                <figure class="tg-qrcodeimg">
                                    <img src="images/qrcode.png" alt="img description">
                                </figure>
                                <div class="tg-qrcodedetail">
                                    <span class="lnr lnr-laptop-phone"></span>
                                    <div class="tg-qrcodefeat">
                                        <h3>Scan with your <span>Smart Phone </span> To Get It Handy.</h3>
                                    </div>
                                </div>
                                <div class="wt-codescanicons">
                                    <span>Share Your Profile</span>
                                    <ul class="wt-socialiconssimple">
                                        <li class="wt-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
                                        <li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                        <li class="wt-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li class="wt-clone"><a href="javascript:void(0);"><i class="far fa-clone"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="wt-companyad">
                                <figure class="wt-companyadimg"><img src="images/add-img.jpg" alt="img description"></figure>
                                <span>Advertisement  255px X 255px</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Register Form End-->
        </main>
        <!--Main End-->
    </div>
    <!--Content Wrapper End-->
</div>
<!--Wrapper End-->
    
@endsection
<script>
    function submitButton(){
       let forms = document.getElementsByClassName('editForm');
       let i ,j,cln;
       let myForm = document.getElementById('hiddenForm');
         for (i = 0; i < forms.length; i++) {
            let inputs = forms[i].getElementsByTagName('*');
            for(j = 0; j<inputs.length; j++){
                cln = inputs[j].cloneNode(false);
                myForm.appendChild(cln);
            }
            }
        console.log(myForm);
        myForm.submit();
    
    

        
       
       
    }

</script>