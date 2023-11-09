@extends('Main.main')

@section('container')
    

<div class="container">
    <div id="fh5co-intro">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                <h2>Museum of Indonesia <br> <span><em>by</em><a>Kelompok-7</a></span></h2>
            </div>
        </div>
    </div>
    <aside id="fh5co-hero">s
        <div class="flexslider">
            <ul class="slides">
               <li style="background-image: url(images/MuseumGeologi.jpg);">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-xs-8 col-md-offset-1 slider-text">
                               <div class="slider-text-inner">
                                   <h1><a href="#">Museum Geologi</a></h1>
                                    <h2>Jl. Diponegoro No.57, Cihaur Geulis, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40122</h2>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
               <li style="background-image: url(images/MuseumAngkut.jpg)">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-xs-8 col-md-offset-1 slider-text">
                               <div class="slider-text-inner">
                                   <h1><a href="#">Museum Angkut</a></h1>
                                    <h2>Jl. Terusan Sultan Agung No.2, Ngaglik, Kec. Batu, Kota Batu, Jawa Timur 65314</h2>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
               <li style="background-image: url(images/MuseumMacan.jpg)">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-xs-8 col-md-offset-1 slider-text">
                               <div class="slider-text-inner">
                                   <h1><a href="#">Museum Macan</a></h1>
                                    <h2>AKR Tower, Jl. Perjuangan No.5, RT.11/RW.10, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</h2>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
               <li style="background-image: url(images/MuseumUllenSentalu.jpg)">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-xs-8 col-md-offset-1 slider-text">
                               <div class="slider-text-inner">
                                   <h1><a href="#">Ullen Sentalu Museum</a></h1>
                                    <h2>Jl. Boyong No.KM 25, Kaliurang, Hargobinangun, Kec. Pakem, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55582</h2>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>	   	
              </ul>
          </div>
    </aside>
    <div id="fh5co-portfolio">
        <div class="row nopadding">
            <div class="col-md-6 padding-right">
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <a href="museum2" class="portfolio-grid">
                            <img src="images/MuseumTsunamiAceh.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                            <div class="desc">
                                <h3>Museum Tsunami Banda Aceh</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 animate-box">
                        <a href="museum4" class="portfolio-grid">
                            <img src="images/MuseumBatik.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                            <div class="desc">
                                <h3>Museum Batik Indonesia</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 animate-box">
                        <a href="museum6" class="portfolio-grid">
                            <img src="images/MuseumBuleleng.png" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                            <div class="desc">
                                <h3>Museum Buleleng</h3>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-6 padding-left">
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <a href="museum1" class="portfolio-grid">
                            <img src="images/MuseumNasionalIndonesia.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                            <div class="desc">
                                <h3>Museum Nasional Indonesia</h3>		
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 animate-box">
                        <a href="museum3" class="portfolio-grid">
                            <img src="images/MuseumSampurna.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                            <div class="desc">
                                <h3>Museum House of Sampoerna</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 animate-box">
                        <a href="museum5" class="portfolio-grid">
                            <img src="images/MuseumWayang.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                            <div class="desc">
                                <h3>Museum Wayang</h3>	
                            </div>
                        </a>
                    </div>

                    <div class="col-md-12 animate-box">
                        <a href="museum7" class="portfolio-grid">
                            <img src="images/MuseumRekorMuri.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                            <div class="desc">
                                <h3>Museum Rekor Muri</h3>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div><!-- END container -->


@endsection