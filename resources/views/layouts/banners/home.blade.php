<div class="banner_water_effect wt-haslayout wt-bannerholder">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                <div class="wt-bannercontent">
                    <div class="wt-bannerhead">
                        <div class="wt-title">
                            <h1><span>SEARCH FOR YOUR OWN</span> TECHNICIEN</h1>
                        </div>
                        <div class="wt-description">
                            <p>The first algerien platform for searching and finding technicians and freelancers</p>
                        </div>
                    </div>
                    <form class="wt-formtheme wt-formbanner" action="/search" method="GET">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="searchTag" class="form-control" placeholder="I’m looking for">
                                <div class="wt-formoptions">
                                    <div class="wt-dropdown">
                                        <span>In: <em class="selected-search-type">Electronics </em><i class="lnr lnr-chevron-down"></i></span>
                                    </div>
                                    <div class="wt-radioholder">
                                        <span class="wt-radio">
                                            <input id="wt-freelancers" data-title="Electronics" type="radio" name="category" value="1" checked>
                                            <label for="wt-freelancers">Electronics</label>
                                        </span>
                                        <span class="wt-radio">
                                            <input id="wt-jobs"  data-title="Mechanics" type="radio" name="category" value="2" >
                                            <label for="wt-jobs">Mechanics</label>
                                        </span>
                                        <span class="wt-radio">
                                            <input id="wt-company"  data-title="Electro-Mechanics" type="radio" name="category" value="3" >
                                            <label for="wt-company">Electro-Mechanics</label>
                                        </span>
                                    </div>
                                    <a href="userlisting.html" type="submit" class="wt-searchbtn"><i class="lnr lnr-magnifier"></i></a>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
                         <button id="showMapButton" class="my-map btn btn-lg  btn-outline-info">
                                   <span>	<i class="my-map-icon  fa fa-map-o	"> </i> show map</span>
                          </button>
             </div>
               <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                <div class="wt-bannerimages">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("showMapButton").onclick = function() {showMap()};

    function showMap(){
    
                   	
        var x = document.getElementById("map");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
    
    }
</script>