@extends('Main.main')

@section('container')

<div class="container">
    <div id="fh5co-intro">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                <h2>Museum Nasional Indonesia</h2>
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
                        <img src="pots/{{ $post -> images1 }}"width="100px">                    </div>
                    <figcaption>
                        Museum Nasional Indonesia
                        <span class="credit">Photo in Museum Tsunmai Banda Aceh</span>
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images2 }}"width="100px">                    </div>
                    <figcaption>
                        Museum Tsunmai Banda Aceh
                        <span class="credit">Photo in Museum Tsunmai Banda Aceh</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images3 }}"width="100px">                    </div>
                    <figcaption>
                        Museum Tsunmai Banda Aceh
                        <span class="credit">Photo in Museum Tsunmai Banda Aceh</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images4 }}"width="100px">                    </div>
                    <figcaption>
                        Museum Tsunmai Banda Aceh
                        <span class="credit">Photo in Museum Tsunmai Banda Aceh</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images5 }}"width="100px">                    </div>
                    <figcaption>
                        Museum Tsunmai Banda Aceh
                        <span class="credit">Photo Museum Tsunmai Banda Aceh</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images6 }}"width="100px">                    </div>
                    <figcaption>
                        Museum Tsunmai Banda Aceh
                        <span class="credit">Photo Museum Tsunmai Banda Aceh</span>                            
                    </figcaption>
                </figure>
            </li>
        </ul>    
        <ul class="carousel__thumbnails">
            <li>
                <label for="slide-1"><img src="pots/{{ $post -> images1 }}"width="100px"></label>
            </li>
            <li>
                <label for="slide-2"><img src="pots/{{ $post -> images2 }}"width="100px"></label>
            </li>
            <li>
                <label for="slide-3"><img src="pots/{{ $post -> images3 }}"width="100px"></label>
            </li>
            <li>
                <label for="slide-4"><img src="pots/{{ $post -> images4 }}"width="100px"></label>
            </li>
            <li>
                <label for="slide-5"><img src="pots/{{ $post -> images5 }}"width="100px"></label>
            </li>
            <li>
                <label for="slide-6"><img src="pots/{{ $post -> images6 }}"width="100px"></label>
            </li>
        </ul>
    </div>


    <div class="col-md-6 col-md-push-6 sticky-parent">
        <div class="detail" id="sticky_item">
            <br>
            <br>
            <h2>Sejarah Museum Nasional Indonesia</h2>
            <p align="justify">&nbsp;&nbsp;Museum Nasional Indonesia atau Museum Gajah merupakan salah satu museum yang lahir dari pengaruh semangat abad pencerahan (Renaissance) di Eropa, tepatnya pada abad ke-18.</p>

            <p align="justify">&nbsp;&nbsp;Berdirinya Museum Nasional diawali dengan terbentuknya suatu himpunan yang bernama Bataviaasch Genootschap van Kunsten en Wetenschappen (BG). Lembaga ini didirikan oleh Pemerintah Belanda pada tanggal 24 April 1778.</p>
    
            <p align="justify">&nbsp;&nbsp;BG merupakan lembaga independen yang didirikan untuk tujuan memajukan penetitian dalam bidang seni dan ilmu pengetahuan khususnya dalam bidang-bidang ilmu biologi, fisika, arkeologi, kesusastraan, etnologi dan sejarah. Lembaga ini mempunyai semboyan “Ten Nutte van het Algemeen” (Untuk Kepentingan Masyarakat Umum).</p>

            <p align="justify">&nbsp;&nbsp;Gedung pertama dari museum ini adalah rumah dari JCM Radermacher yang terletak di Jalan Kalibesar, suatu kawasan perdagangan di Jakarta-Kota. Selain itu, ia juga menyumbangkan sejumlah koleksi benda budaya dan buku-buku miliknya. Sumbang dari JCM Radermacher inilah yang menjadi tanda berdirinya museum dan perpustakaan.</p>

            <p align="justify">&nbsp;&nbsp;Memasuki tahun 1811, ketika Jawa dibawah kendali pemerintah Inggris, Raffles memerintahkan pembangunan gedung baru yang akan digunakan sebagai museum dan ruang pertemuan untuk Literary Society (dulu disebut gedung “Societeit de Harmonie”). Gedung tersebut berlokasi di Jalan Majapahit nomor 3.</p>

            <p align="justify">&nbsp;&nbsp;Kemudian, pada tahun 1862 pemerintah Hindia Belanda memutuskan untuk kembali membangun gedung baru. Pembangunan gedung tersebut dilakukan di lokasi Museum Nasional saat ini, yaitu di Jalan Medan Merdeka Barat No. 12 (dulu disebut Koningsplein West). Tepat pada tahun 1868 atau enam tahun setelah semua pembangunan selesai dilakukan, gedung baru Museum Nasional diresmikan.</p>

            <p align="justify">&nbsp;&nbsp;Setelah kemerdekaan, tepatnya pada 26 Januari 1950 museum ini berubah nama dari Koninklijk Bataviaasch Genootschap van Kunsten en Wetenschappen menjadi Lembaga Kebudayaan Indonesia. Perubahan ini disesuaikan dengan kondisi waktu itu, sebagaimana tercermin dalam semboyan barunya: “memajukan ilmu-ilmu kebudayaan yang berfaedah untuk meningkatkan pengetahuan tentang kepulauan Indonesia dan negeri-negeri sekitarnya”.</p>

            <p align="justify">&nbsp;&nbsp;Pasca 1950, beberapa perubahan sempat terjadi dalam perjalanan museum ini, perubahan pertama terjadi pada 17 September 1962. Saat itu Lembaga Kebudayaan Indonesia menyerahkan pengelolaan museum kepada pemerintah Indonesia, yang kemudian berubah nama menjadi Museum Pusat.</p>

            <p align="justify">&nbsp;&nbsp;Selanjutnya, pada 28 Mei 1979 berdasarkan Surat Keputusan Menteri Pendidikan dan Kebudayaan, No.092/ 0/1979, Museum Pusat ditingkatkan statusnya menjadi Museum Nasional. Sejak perubahan status tersebut Museum Nasional Indonesia berada dibawah naungan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia (Kemendikbudristek RI).</p>
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
            <img src="pots/{{ $post -> event }}" class="img-responsive" alt="">
        </div>
    <h2>Harga Tiket Museum</h2>
    <br>
    <p>{!! html_entity_decode($post -> tiket ) !!}</p>
    <br>
    <h3>Jam Buka Museum</h3>
    <br>
    <p>{{ $post -> jadwal }}</p>
    <h2>Lokasi</h2>
    <br>
    <p>Jl. Medan Merdeka Barat No.12, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110</p>
    </div>  
    </div>
    @endforeach
</div> 
</div>
@endsection