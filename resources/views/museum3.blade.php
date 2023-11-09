@extends('Main.main')

@section('container')

<div class="container">
    <div id="fh5co-intro">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                <h2>Museum House of Sampoerna</h2>
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
                       Museum House of Sampoerna
                        <span class="credit">Photo in  Museum House of Sampoerna</span>
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images2 }}" alt="">
                    </div>
                    <figcaption>
                       Museum House of Sampoerna
                        <span class="credit">Photo in  Museum House of Sampoerna</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images3 }}" alt="">
                    </div>
                    <figcaption>
                       Museum House of Sampoerna
                        <span class="credit">Photo in  Museum House of Sampoerna</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images4 }}" alt="">
                    </div>
                    <figcaption>
                       Museum House of Sampoerna
                        <span class="credit">Photo in  Museum House of Sampoerna</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images5 }}" alt="">
                    </div>
                    <figcaption>
                       Museum House of Sampoerna
                        <span class="credit">Photo in  Museum House of Sampoerna</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images6 }}" alt="">
                    </div>
                    <figcaption>
                       Museum House of Sampoerna
                        <span class="credit">Photo in  Museum House of Sampoerna</span>                            
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
            <h2>Sejarah Museum House of Sampoerna</h2>
            <p align="justify">&nbsp;&nbsp;Museum House of Sampoerna adalah museum di Surabaya yang menarik untuk dikunjungi. Sejarah Museum House Of Sampoerna ini membahas segala hal tentang tembakau dan sekaligus sebagai markas besar dari pabrik rokok Sampoerna. Bangunannya bergaya arsitektur Belanda yang dibuat pada tahun 1862. Sekarang dirawat sebagai warisan sejarah. Sebelumnya, bangunan ini digunakan sebagai panti asuhan yang dikelola oleh Belanda. Kemudian dibeli oleh Liem Seeng Tee yang kita kenal sebagai pendiri Sampoerna. Waktu awal berdiri, bangunan ini digunakan sebagai pabrik utama untuk memproduksi rokok.</p>

            <p align="justify">&nbsp;&nbsp;Museum ini memiliki aula pusat yang luas, dua bangunan kecil di sisi timur dan barat serta ruang terbuka di belakang aula pusat. Bangunan yang ada di samping diubah menjadi bangunan keluarga dan bangunan mirip gudang ini digunakan sebagai fasilitas produksi. Seperti  pemrosesan tembakau dan cengkeh, peracikan, melinting rokok dan pengemasan, pencetakan dan pemroses bahan jadi. Di peringatan ulang tahun Sampoerna ke sembilan puluh, kompleks pusat diperbaiki dan terbuka untuk umum. Aula pusatnya kini berubah menjadi museum dan tempat belanja. Bangunan sisi timur diubah menjadi kafe dan galeri seni. Sedangkan bangunan sisi barat tetap menjadi tempat kediaman pribadi</p>
    
            <p align="justify">&nbsp;&nbsp;Ada beberapa cara dan jadwal jika anda mengunjungi Museum House of Sampoerna. Karena letaknya berada di Surabaya, anda harus datang ke Surabaya dulu. Tepatnya di Jalan Sampoerna No. 6, Krembangan Utara, Pabean Cantian. Ada beberapa alternatif kendaraan jika anda berasal dari luar kota seperti naik pesawat, bus atau kereta. Jaman sekarang cukup mudah karena ada transportasi online. Jika naik pesawat anda akan mendarat di Bandara Juanda.</p>

            <p align="justify">&nbsp;&nbsp;Jika naik bus, anda akan mendarat di Terminal Purabaya. Jika dengan kereta anda sebaiknya turun di Stasiun Surabaya Kota karena jaraknya cukup dekat museum. Yaitu 8,4 kilometer dan waktu tempuhnya kira-kira sepuluh menit. Museum ini buka setiap hari mulai jam sembilan pagi hingga jam enam malam. Biaya masuknya gratis. Tapi jangan lupa bawa KTP. Karena meskipun gratis, masuknya wajib menunjukan KTP. Setelah membahas rute berkunjung ke museum, kita akan membahas apa saja yang kira-kira bisa kita dapatkan dari museum ini.</p>
        </div>
    </div>
    <div class="col-md-6 col-md-pull-6 sticky-parent">
    <div class="detail" id="sticky_item">
        <br>
        <br>
        <h2>Event-event Museum</h2>
        <br>
        <br>
        <div class="image-item  animate-box">
            <img src="pots/{{ $post -> event }}" class="img-responsive" alt="">
        </div>
        <h2>Harga Tiket di Museum </h2>
        <br>
        <p>{!! html_entity_decode($post -> tiket ) !!}</p>
        <br>
        <h2>Jam Buka Museum </h2>
        <br>
        <p>{{ $post -> jadwal }}</p>
    <h2>Lokasi</h2>
    <p>Taman Sampoerna No.6, Krembangan Utara, Kec. Pabean Cantikan, Kota SBY, Jawa Timur 60163</p>
    </div>  
    </div>
    @endforeach
</div> 
</div>
@endsection