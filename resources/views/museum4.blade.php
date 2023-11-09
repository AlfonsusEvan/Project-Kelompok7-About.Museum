@extends('Main.main')

@section('container')

<div class="container">
    <div id="fh5co-intro">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                <h2>Museum Batik Indonesia</h2>
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
                        <img src="pots/{{ $post -> images1 }}" alt=""> </div>
                    <figcaption>
                       Museum Barik Indonesia
                        <span class="credit">Photo: Tim Marshall</span>
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images2 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Barik Indonesia
                        <span class="credit">Photo: Christian Joudrey</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images3 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Barik Indonesia
                        <span class="credit">Photo in Museum Batik Indonesia</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images4 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Barik Indonesia
                        <span class="credit">Photo in Museum Batik Indonesia</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images5 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Barik Indonesia
                        <span class="credit">Photo in Museum Batik Indonesia</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images6 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Barik Indonesia
                        <span class="credit">Photo in Museum Batik Indonesia</span>                            
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
            <h2>Sejarah Museum Batik Indonesia</h2>
            <p align="justify">&nbsp;&nbsp;Museum Batik Indonesia merupakan museum khusus yang berlokasi di Taman Mini Indonesia Indah (TMII), Jakarta Timur. Museum ini didirikan sebagai wujud tindak lanjut atas penetapan Batik Indonesia sebagai Representative List of the Intangible Cultural Heritage of Humanity oleh UNESCO pada tanggal 2 Oktober 2009. Masuknya batik ke dalam daftar tersebut membuat pemerintah merasa perlu untuk mendirikan tempat pewarisan pengetahuan sekaligus budaya batik menjadi jati diri dan identitas Bangsa Indonesia.</p>

            <p align="justify">&nbsp;&nbsp;Museum Batik Indonesia mulai dibangun pada tahun 2014 oleh Kementerian Pendidikan dan Kebudayaan dan selesai dibangun pada tahun 2018. Saat ini pengelolaannya berada di bawah Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</p>
    
            <p align="justify">&nbsp;&nbsp;Secara arsitektural, bentuk denah bangunan Museum Batik Indonesia menyerupai lipatan kain. Pada bagian depan bangunan museum dihias dengan beberapa motif batik, salah satunya adalah motif Kawung.</p>

            <p align="justify">&nbsp;&nbsp;Ruang pameran tetap Museum Batik Indonesia terbagi menjadi tujuh, yaitu Ruang Sejarah Batik Nusantara, Ruang Khazanah Batik Nusantara, Ruang Teknik Pembuatan Batik, Ruang Penggunaan Batik secara Tradisional, Ruang Perkembangan Batik, Galeri Kemasyuran dan Ruang Kesimpulan.</p>
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
    <p>Ceger, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13820</p>
    </div>  
    </div>
    @endforeach
</div> 
</div>
@endsection