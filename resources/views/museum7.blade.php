@extends('Main.main')

@section('container')

<div class="container">
    <div id="fh5co-intro">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                <h2>Museum Rekor Muri</h2>
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
                        <img src="pots/{{ $post -> images1 }}" alt="">                    </div>
                    <figcaption>
                       Museum Rekor Muri
                        <span class="credit">Photo in Museum Rekor Muri</span>
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images2 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Rekor Muri
                        <span class="credit">Photo in Museum Rekor Muri</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images3 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Rekor Muri
                        <span class="credit">Photo in Museum Rekor Muri</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images4 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Rekor Muri
                        <span class="credit">Photo in Museum Rekor Muri</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images5 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Rekor Muri
                        <span class="credit">Photo in Museum Rekor Muri</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images6 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Rekor Muri
                        <span class="credit">Photo in Museum Rekor Muri</span>                            
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
            <h2>Sejarah Museum Rekor Muri</h2>
            <p align="justify">&nbsp;&nbsp;Di balik setiap Rekor MURI, tersirat kisah perjuangan manusia menciptakan karsa dan karya terbaik di bidang kemampuan masing-masing. Museum Rekor Dunia Indonesia diresmikan pada tanggal 27 Januari 1990 di kawasan perindustrian Jamu Jago, Srondol, Semarang Selatan. MURI didirikan oleh Jaya Suprana demi menegakkan pilar-pilar kebanggaan nasional agar bangsa Indonesia lebih mampu dan lebih menghargai karsa dan karya bukan bangsa asing namun bangsa Indonesia sendiri.</p>

            <p align="justify">&nbsp;&nbsp;MURI di awal berdiri pada tahun 1990 atas prakarsa Jaya Suprana dan dukungan kelompok perusahaan JAMU JAGO secara sangat sederhana dan tanpa target yang muluk-muluk ternyata berhasil dikembangkan. Dengan dukungan laskar pejuang yang terdiri dari para tatalaksanawan profesional yang tergabung di Institut Prestasi Nusantara, hingga kini Museum Rekor Dunia Indonesia menjadi lembaga yang menyatupadu pada kehidupan masyarakat Indonesia yang bangga atas prestasi superlatif karsa dan karya peradaban dan kebudayaan bangsa Indonesia</p>
        </div>
    </div>
    <div class="col-md-6 col-md-pull-6 sticky-parent">
    <div class="detail" id="sticky_item">
        <br>
        <br>
        <h2>Event-event di Museum</h2>
        <br>
        <br>
        <div class="image-item  animate-box">
            <img src="images/EventW2.jpeg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
        </div> <h2>Harga Tiket Museum</h2>
        <br>
        <p>{!! html_entity_decode($post -> tiket ) !!}</p>
        <br>
        <h3>Jam Buka Museum</h3>
        <br>
        <p>{{ $post -> jadwal }}</p>
    <h2>Lokasi</h2>
    <p>Mall of Indonesia, Jalan Boulevard Barat Raya Kelapa Gading, RT.18/RW.8, West Kelapa Gading, Kelapa Gading, North Jakarta City, Jakarta 14240</p>
    </div>  
    </div>
    @endforeach
</div> 
</div>
@endsection