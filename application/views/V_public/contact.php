    <section class="pt-30 pb-0">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-12">
					
					<div class="p-30 mtb-30 card-view">

                        <!-- <script>
                            var map;
                            function initMap() {
                                map = new google.maps.Map(document.getElementById('map'), {
                                center: {lat: -4.071795, lng: 121.624346},
                                zoom: 8
                                });
                            }
                        </script> -->

                        <script>
                            // Initialize and add the map
                            function initMap() {
                                // The location of Uluru
                                var uluru = {lat: -4.071795, lng: 121.624346};
                                // The map, centered at Uluru
                                var map = new google.maps.Map(
                                    document.getElementById('map'), {zoom: 12, center: uluru});
                                // The marker, positioned at Uluru
                                var marker = new google.maps.Marker({position: uluru, map: map});
                            }
                        </script>
                        
						<div class="map-section">
							<div id="map" style="height:400px;width: 100%"></div>							
                        </div><!-- map-section -->
                        
							
					</div><!-- card-view -->
				</div><!-- col-sm-12 -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section>
	

	<section class="pt-0 pb-20">
		<div class="container">
			<div class="row">

                <div class="col-md-12 col-lg-6">
					<div class="p-30 mb-30 card-view">
						<h4 class="p-title"><b>TENTANG KAMI</b></h4>
						<p>
                            <strong>Kolakaku</strong> adalah media online terpercaya untuk masyrakat Kolaka dengan menginformasikan berita – berita secara update dan faktual, 
                            baik berita – berita lokal yang ada dikolaka, sultra, nasional, bahkan internasional.
                        </p>
					</div><!-- card-view -->
                </div><!-- col-sm-12 -->
                
                <div class="col-md-12 col-lg-6">
					<div class="p-30 mb-30 card-view">
						<h4 class="p-title"><b>KANTOR KAMI</b></h4>
						<ul class="list-contact list-li-mb-20">
							<li><i class="ion-ios-home"></i>Jl.Perumnas Blok. No.51 Kel. Lalombaa , Kec. Kolaka , Kab. Kolaka</li>
							<li><a href="#"><i class="ion-ios-telephone"></i>(+62)823-4982-5524</a></li>
							<li><a href="#"><i class="ion-email"></i>informasikolaka@gmail.com</a></li>
						</ul>
					</div><!-- card-view -->
				</div><!-- col-sm-12 -->
				
			</div><!-- row -->
		</div><!-- container -->
    </section>
    
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPGXgoCI9ScXoTQJihT3dKU3hSs16At-o&callback=myMap"></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPGXgoCI9ScXoTQJihT3dKU3hSs16At-o&callback=myMap"></script> -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8Nkl4q13z00Fid3Vh8eOp4mqVlgfcXLA&callback=initMap"></script>