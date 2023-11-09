
@extends('Main.main')

@section('container')

<div class="container">
    <div id="fh5co-intro">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                <h2>Museum Buleleng</h2>
            </div>
        </div>
    </div>
<div class="container">
    @foreach ($posts as $post)
    <div class="carousel">
        <input type="radio" name="slides" checked="checked" id="slide-1">
        <input type="radio" name="slides" id="slide-2">
        <input type="radio" name="slides" id="slide-3">
        <input type="radio" name="slides" id="slide-4">
        <input type="radio" name="slides" id="slide-5">
         <input type="radio" name="slides" id="slide-6">
        <ul class="carousel__slides">
            
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images1 }}" alt=""></div>
                    <figcaption>
                        Museum Buleleng
                        <span class="credit">Photo in Museum Buleleng</span>
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images2 }}" alt="">
                    </div>
                    <figcaption>
                        Museum Buleleng
                        <span class="credit">Photo in Museum Buleleng</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images3 }}" alt="">
                    </div>
                    <figcaption>
                        Museum Buleleng
                        <span class="credit">Photo in Museum Buleleng</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images4 }}" alt="">
                    </div>
                    <figcaption>
                        Museum Buleleng
                        <span class="credit">Photo in Museum Buleleng</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images5 }}" alt="">
                    </div>
                    <figcaption>
                        Museum Buleleng
                        <span class="credit"Photo in Museum Buleleng</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images6 }}" alt="">
                    </div>
                    <figcaption>
                        Museum Buleleng
                        <span class="credit">Photo in Museum Buleleng</span>                            
                    </figcaption>
                </figure>
            </li>
        </ul>    
        <ul class="carousel__thumbnails">
            <li>
                <label for="slide-1"><img src="pots/{{ $post -> images1 }}" alt=""></label>
            </li>
            <li>
                <label for="slide-2"><img src="pots/{{ $post -> images2 }}" alt=""></label>
            </li>
            <li>
                <label for="slide-3"><img src="pots/{{ $post -> images3 }}" alt=""></label>
            </li>
            <li>
                <label for="slide-4"><img src="pots/{{ $post -> images4 }}" alt=""></label>
            </li>
            <li>
                <label for="slide-5"><img src="pots/{{ $post -> images5 }}" alt=""></label>
            </li>
            <li>
                <label for="slide-6"><img src="pots/{{ $post -> images6 }}" alt=""></label>
            </li>
        </ul>
    </div>


    <div class="col-md-6 col-md-push-6 sticky-parent">
        <div class="detail" id="sticky_item">
            <br>
            <br>
            <h2>Sejarah Museum Buleleng</h2>
            <p align="justify">&nbsp;&nbsp;Museum Buleleng merupakan museum khusus yang terletak di lingkungan Pura Seni Sasana Budaya Kota Singaraja Bali. Museum ini didirikan atas gagasan dari seorang budayawan dan juga seorang seniman yang tergabung di Yayasan Pelestarian Warisan Budaya Bali Utara. Museum ini diresmikan pada 21 Desember 2001 oleh Menteri Kebudayaan dan Pariwisata, I Gede Ardika. Museum ini banyak menyimpan koleksi keluarga Raja Buleleng yaitu Ki Gusti Anglurah Panji Sakti dan koleksi purbakala seperti patung, sarkofagus, senjata, dan lainnya. Terdapat juga benda seni seperti lukisan, kain-kain, kerajinan emas, dan perak serta alat-alat pertanian dan nelayan yang berkaitan dengan masyarakat Bali Utara. Koleksi unggulan yang dimiliki museum berupa lukisan Ki Barak Panji Sakti. Untuk menambah dan memperkaya koleksi museum, pengelola mengharapkan peran masyarakat untuk ikut menyubangkan koleksi pribadinya kepada museum.</p>
        </div>
    </div>
    <div class="col-md-6 col-md-pull-6 sticky-parent">
    <div class="detail" id="sticky_item">
        <br>
        <br>
        <h2>Event-event di Museum </h2>
        <br>
        <br>
        <div class="image-item  animate-box">
            <img src="images/EventL1.jpeg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
        </div><h2>Harga Tiket Museum</h2>
        <br>
        <p>{!! html_entity_decode($post -> tiket ) !!}</p>
        <br>
        <h3>Jam Buka Museum</h3>
        <br>
        <p>{{ $post -> jadwal }}</p>
    <h2>Lokasi</h2>
    <br>
    <p>Jl. Veteran No.23, Paket Agung, Kec. Buleleng, Kabupaten Buleleng, Bali 81118</p>
    </div>  
    </div>
    @endforeach
</div> 
</div>
@endsection