@extends('Main.main')

@section('container')

<div class="container">
    <div id="fh5co-intro">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                <h2>Museum Wayang</h2>
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
                       Museum Wayang
                        <span class="credit">Photo in Museum Wayang</span>
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images2 }}" alt="">
                    </div>
                    <figcaption>
                        Museum Wayang
                        <span class="credit">Photo in Museum Wayang</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images3 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Wayang
                        <span class="credit">Photo in Museum Wayang</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images4 }}" alt="">
                    </div>
                    <figcaption>
                        Museum Wayang
                        <span class="credit">Photo in Museum Wayang</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images5 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Wayang
                        <span class="credit">Photo in Museum Wayang</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images6 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Wayang
                        <span class="credit">Photo in Museum Wayang</span>                            
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
            <h2>Sejarah Museum Wayang</h2>
            <p align="justify">&nbsp;&nbsp;Bangunan Museum Wayang mulanya merupakan gereja tua yang  didirikan VOC pada tahun 1640 dengan nama ‘de oude Hollandsche Kerk’. Hingga tahun 1732 gedung ini berfungsi sebagai tempat peribadatan penduduk sipil dan tentara Belanda yang tinggal di Batavia.</p>

            <p align="justify">&nbsp;&nbsp;Pada tahun 1733 gereja tersebut dipugar dan namanya diubah menjadi “de nieuwe Hollandsche Kerk” yang berdiri terus sampai tahun 1808. Di halaman gereja yang kini menjadi taman terbuka Museum Wayang terdapat prasasti-prasasti yang berjumlah 9 (sembilan) buah yang menampilkan nama-nama pejabat Belanda yang pernah dimakamkan di halaman gereja tersebut.</p>
    
            <p align="justify">&nbsp;&nbsp;Akibat terjadinya gempa, bangunan Gereja Belanda tersebut sempat rusak. Selanjutnya di lokasi tersebut dibangun kembali sebuah gedung yang difungsikan sebagai gudang milik perusahaan Geo Wehry & Co.  Bagian depan museum ini dibangun pada tahun 1912 dengan gaya Noe Reinaissance, dan pada tahun 1938 seluruh bagian gedung ini dipugar dan disesuaikan dengan gaya rumah Belanda pada zaman Kolonial.</p>

            <p align="justify">&nbsp;&nbsp;Pada tanggal 14 Agustus 1936 gedung beserta tanahnya ditetapkan menjadi monumen. Selanjutnya dibeli oleh Bataviaasch Genootschap van Kunsten en Wetenschappen (BG) yaitu lembaga independen yang bertujuan memajukan penelitian dalam bidang seni dan ilmu pengetahuan khususnya dalam bidang-bidang ilmu biologi, fisika, arkeologi, kesusastraan, etnologi dan sejarah, serta menerbitkan hasil penelitian. Pada tahun 1937 lembaga tersebut menyerahkan gedung kepada Stichting oud Batavia dan kemudian dijadikan museum dengan nama “de oude Bataviasche Museum “ atau museum Batavia Lama yang pembukaannya dilakukan oleh Gubernur Jenderal Hindia Belanda terakhir, Jonkheer Meester Aldius Warmoldu Lambertus Tjarda van Starkenborg Stachouwer, pada 22 Desember 1939.</p>

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
            <img src="pots/{{ $post -> event }}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
        </div><h2>Harga Tiket Museum</h2>
        <br>
        <p>{!! html_entity_decode($post -> tiket ) !!}</p>
        <br>
        <h3>Jam Buka Museum</h3>
        <br>
        <p>{{ $post -> jadwal }}</p>
    <h2>Lokasi</h2>
    <br>
    <p>Jalan Pintu Besar Utara No.27 Pinangsia, RT.3/RW.6, Kota Tua, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11110s</p>
    </div>  
    </div>
    @endforeach
</div> 
</div>
@endsection