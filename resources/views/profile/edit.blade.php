@extends('layouts.app')

@section('content')

	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Preloader Start -->
	<div class="preloader-outer">
		<div class="loader"></div>
	</div>
	<!-- Preloader End -->
	<!-- Wrapper Start -->
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
												<a class="active" data-toggle="tab" href="#wt-skills">Personal Details &amp; Skills</a>
											</li>
										</ul>
									</div>
									<div class="wt-tabscontent tab-content">
										<div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
											<div class="wt-yourdetails wt-tabsinfo">
												<div class="wt-tabscontenttitle">
													<h2>Your Details</h2>
												</div>
                                                <form class="wt-formtheme wt-userform editForm"  >
                                                    @csrf
                                                    @method('PATCH')
													<fieldset>
														
														<div class="form-group form-group-half">
                                                            <input type="text" name="first_name" class="form-control" placeholder="{{auth()->user()->profile->identity->first_name ? auth()->user()->profile->identity->first_name : 'First Name'}}" value="{{auth()->user()->profile->identity->first_name}}" required>
                                                            @error('first_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
														</div>
														<div class="form-group form-group-half">
                                                            <input type="text" name="last_name" class="form-control" placeholder="{{auth()->user()->profile->identity->last_name ? auth()->user()->profile->identity->last_name : 'Last Name'}}" value="{{auth()->user()->profile->identity->last_name}}" required>
                                                            @error('last_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
														</div>
														<div class="form-group">
                                                        <input type="text" name="title" class="form-control" placeholder="{{auth()->user()->profile->title ? auth()->user()->profile->title : 'Putt You Title Here'}}"  value="{{auth()->user()->profile->title}}"required>
                                                            @error('title')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
														</div>
														<div class="form-group">
                                                            <textarea name="description" class="form-control" placeholder="{{auth()->user()->profile->description ? auth()->user()->profile->description : 'You Description'}}"  value="{{auth()->user()->profile->description}}"></textarea>
                                                            @error('description')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
														</div>
													</fieldset>
												</form>
											</div>
											<div class="wt-profilephoto wt-tabsinfo">
												<div class="wt-tabscontenttitle">
													<h2>Profile Photo</h2>
												</div>
												<div class="wt-profilephotocontent">
													<div class="wt-description">
														<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua aut enim ad minim veniamac quis nostrud exercitation ullamco laboris.</p>
													</div>
                                                    <form class="wt-formtheme wt-formprojectinfo wt-formcategory editForm"  >
                                                       
														<fieldset>
															<div class="form-group form-group-label">
																<div class="wt-labelgroup">
																	
																		<span class="wt-btn">Select Files</span>
																		<input type="file" name="profileImage" id="profileImage">
																	
																	<span>Drop files here to upload</span>
																	<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                                                </div>
                                                                @error('profileImage')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
															</div>
															
														</fieldset>
													</form>
												</div>
											</div>

											<div class="wt-location wt-tabsinfo">
												<div class="wt-tabscontenttitle">
													<h2>Your Location</h2>
												</div>
												<form class="wt-formtheme wt-userform editForm" >
                                                   
                                                    <fieldset>
														<div class="form-group form-group-half">
															<span class="wt-select">
																<select name="wilaya" form="hiddenForm">
																	<option value="Adrar">Adrar</option>
																	<option value="Chlef">Chlef</option>
																	<option value="Laghouat">Laghouat</option>
																	<option value="Oum El Bouaghi">Oum El Bouaghi</option>
																	<option value="Batna">Batna</option>
																	<option value="Bejaia">Bejaia</option>
																	<option value="Biskra">Biskra</option>
																	<option value="Bechar">Bechar</option>
																	<option value="Blida">Blida</option>
																	<option value="Bouira">Bouira</option>
																	<option value="Tamanrasset">Tamanrasset</option>
																	<option value="Tebessa">Tebessa</option>
																	<option value="Tlemcen">Tlemcen</option>
																	<option value="Tiaret">Tiaret</option>
																	<option value="Tizi Ouzou">Tizi Ouzou</option>
																	<option value="Alger">Alger</option>
																	<option value="Djelfa">Djelfa</option>
																	<option value="Jijel">Jijel</option>
																	<option value="Setif">Setif</option>
																	<option value="Saïda">Saïda</option>
																	<option value="Skikda">Skikda</option>
																	<option value="Sidi Bel Abbes">Sidi Bel Abbes</option>
																	<option value="Annaba">Annaba</option>
																	<option value="Guelma">Guelma</option>
																	<option value="Constantine">Constantine</option>
																	<option value="Medea">Medea</option>
																	<option value="Mostaganem">Mostaganem</option>
																	<option value="M'sila">M'sila</option>
																	<option value="Mascara">Mascara</option>
																	<option value="Ouargla">Ouargla</option>
																	<option value="Oran">Oran</option>
																	<option value="Bayadh">Bayadh</option>
																	<option value="Illizi">Illizi</option>
																	<option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
																	<option value="Boumerdes">Boumerdes</option>
																	<option value="El Taref">El Taref</option>
																	<option value="Tindouf">Tindouf</option>
																	<option value="Tissemsilt">Tissemsilt</option>
																	<option value="El Oued">El Oued</option>
																	<option value="Khenchela">Khenchela</option>
																	<option value="Souk Ahras">Souk Ahras</option>
																	<option value="Tipaza">Tipaza</option>
																	<option value="Mila">Mila</option>
																	<option value="Ain Defla">Ain Defla</option>
																	<option value="Naâma">Naâma</option>
																	<option value="Ain Temouchent">Ain Temouchent</option>
																	<option value="Ghardaia">Ghardaia</option>
																	<option value="Relizane">Relizane</option>
																	<option value="El Meniaa">El Meniaa</option>
																	<option value="Ouled Djellal">Ouled Djellal</option>
																	<option value="Bordj Baji Mokhtar">Bordj Baji Mokhtar</option>
																	<option value="Beni Abbes">Beni Abbes</option>
																	<option value="Timimoun">Timimoun</option>
																	<option value="Touggourt">Touggourt</option>
																	<option value="Djanet">Djanet</option>
																	<option value="Ain Salah">Ain Salah</option>
																	<option value="Ain Guezzam">Ain Guezzam</option>
																</select>
                                                            </span>
                                                            @error('wilaya')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
														</div>
														<div class="form-group form-group-half">
                                                            <input type="text" name="commune" class="form-control" placeholder="{{auth()->user()->profile->location->commune ? auth()->user()->profile->location->commune : 'Commune'}}"  value="{{auth()->user()->profile->location->commune}}" required>
                                                            @error('commune')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
														</div>

														<div class="form-group">
                                                            <input type="text" name="adress" class="form-control" placeholder="{{auth()->user()->profile->location->adress ? auth()->user()->profile->location->adress : 'Your Adress'}}"  value="{{auth()->user()->profile->location->adress}}" required>
                                                            @error('adress')
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
													<h2>Contact </h2>
												</div>
												<form class="wt-formtheme wt-userform editForm">
                                                  
                                                    <fieldset>
														<div class=" align-items-center">
														    <div class="form-group col-2">
    															<span class="wt-select">
    																<select name="fix" form="hiddenForm">
    																	<option value="1">fix</option>
    																	<option value="0">mobile</option>
    																</select>
                                                                </span>
                                                                @error('fix')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
    														</div>
    														<div class="form-group col-8">
                                                                <input type="text" name="phone" class="form-control" placeholder="{{auth()->user()->profile->contact->phone ? auth()->user()->profile->contact->phone : 'Phone Number'}}"  value="{{auth()->user()->profile->contact->phone}}" required>
                                                                @error('phone')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
    														</div>
    
    														<div class="form-group col-2">
    															<a href="#" class=" btn btn-info" style="height:48px"> add</a>
    														</div>
    														
														</div>
													</fieldset>
												</form>
                                            </div>
                                            <div id="newForm"></div>



										</div>
                                    </div>
                                    <div>
                                        <form id="hiddenForm" method="POST" action="/edit" enctype="multipart/form-data" style="display:none">
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

@endsection