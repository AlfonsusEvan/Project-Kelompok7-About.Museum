@extends('Main.main')

@section('container')

<div class="container">
    <div id="fh5co-intro">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                <h2>Museum Tsunami Banda Aceh</h2>
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
                        <img src="pots/{{ $post -> images1 }}" alt="">
                    </div>
                    <figcaption>
                        Museum Tsunmai Banda Aceh
                        <span class="credit">Photo in Museum Tsunmai Banda Aceh</span>
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images2 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Tsunmai Banda Aceh
                        <span class="credit">Photo in Museum Tsunmai Banda Aceh</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images3 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Tsunmai Banda Aceh
                        <span class="credit">Photoin Museum Tsunmai Banda Aceh</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images4 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Tsunmai Banda Aceh
                        <span class="credit">Photo in Museum Tsunmai Banda Aceh</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images5 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Tsunmai Banda Aceh
                        <span class="credit">Photo in Museum Tsunmai Banda Aceh</span>                            
                    </figcaption>
                </figure>
            </li>
            <li class="carousel__slide">
                <figure>
                    <div>
                        <img src="pots/{{ $post -> images6 }}" alt="">
                    </div>
                    <figcaption>
                       Museum Tsunmai Banda Aceh
                        <span class="credit">Photo in Museum Tsunmai Banda Aceh</span>                            
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
            <h2>Sejarah Museum Tsunami Banda Aceh</h2>
            <p align="justify">&nbsp;&nbsp;Daerah atau wilayah Aceh adalah daerah yang rawan terjadi gempa. Karena area ini berada di tepian benturan antara lempengan Benua Asia dan lempengan Samudera Hindia. Para ahli gempa bumi memiliki catatan atau rekam jejak gempa yang pernah terjadi di wilayah ini magnitude yang besar. Sejarah gempa tidak hanya ratusan tahun yang lalu. Para ahli menduga ada aktivitas gempa beberapa abad yang lalu di wilayah ini. Ini dibuktikan dengan rumah panggung khas Aceh dengan bahan yang bisa menahan goncangan gempa.</p>

            <p align="justify">&nbsp;&nbsp;Serta Kerajaan Samudra Pasai yang didirikan jauh dari pantai. Ini membuktikan bahwa nenek moyang bangsa Indonesia khususnya di Aceh sudah siap siaga akan terjadinya gempa. Yang terbaru dan yang kita ketahui adalah gempa bumi Samudra Hindia pada tahun 2004. Gempa bumi Samudra Hindia 2004 terjadi pada pukul delapan lebih lima puluh delapan menit. Episenter berada di pesisir barat atau lepas pantai Sumatra. Kekuatan gempa cukup tinggi yaitu mencapai skala 9,1 hingga 9,3 menurut satuan intensitas Mercalli. Gempa terjadi selama 8,3 hingga 10 menit. Ketahui pula mengenai Peninggalan Kerajaan Aceh.</p>
    
            <p align="justify">&nbsp;&nbsp;Anda bisa menilai, skala 9,1 hingga 9,3 menjelaskan bahwa gempa bumi sangat besar sehingga tercatat sebagai gempa bumi terbesar ketiga sepanjang sejarah setelah gempa bumi Valdivia di Chili pada tanggal 22 Mei 1960 (kekuatan 9,4 hingga 9,6) dan gempa bumi Alaska di Amerika Serikat pada tanggal 27 Maret 1964. Saking kuatnya, gempa bumi Samudra Hindia ini membuat planet bergetar satu centimeter dan memicu gempa bumi di Alaska. Energi yang dilepaskan sebesar 1,1×1017 Joule atau setara dengan 26 megaton TNT atau setara dengan 1500 kali bom atom Hiroshima.</p>

            <p align="justify">&nbsp;&nbsp;Gempa bumi yang muncul adalah jenis megathrust bawah laut yang terjadi karena Lempeng Burma mendorong Lempeng Hindia  ke bawah. Atau dengan kata lain tumbukan antar lempeng bumi. Dorongan antar dua lempeng ini mengakibatkan tsunami raksasa yang menghantam semua pesisir daratan yang berbatasan langsung dengan Samudra Hindia. Tinggi tsunami mencapai seratus kaki atau tiga puluh meter. Korban total mencapai 230000 hingga 280000 jiwa dari 14 negara dan pemukiman di pesisir tenggelam ditelan tsunami.</p>

            <p align="justify">&nbsp;&nbsp;14 negara tersebut adalah Indonesia, Sri Lanka, India, Thailand, Maladewa, Malaysia, Myanmar, Madagaskar, Somalia, Kenya, Tanzania dan Afrika Selatan. Tapi dampak yang paling parah adalah Indonesia. Kerugian materiil karena tsunami diperkirakan hampir mencapai tiga milyar dollar. Kejadian ini direspon oleh para dermawan dari seluruh dunia dengan donasi total mencapai 14 miliar dollar. Kalangan peneliti menyebut bencana ini sebagai gempa bumi Sumatra-Andaman. Beberapa kalangan lain juga memberi julukan seperti tsunami Samudra Hindia 2004, tsunami Indonesia, tsunami Asia Selatan, tsunami Natal (karena terjadi setelah hari natal) dan tsunami Boxing Day.</p>
            <p align="justify">&nbsp; &nbsp; </p>
            <p align="justify">&nbsp; &nbsp; </p>
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
    <h2>Harga Tiket di Museum </h2>
    <br>
    <p>{!! html_entity_decode($post -> tiket ) !!}</p>
    <br>
    <h2>Jam Buka Museum </h2>
    <br>
    <p>{{ $post -> jadwal }}</p>
    <h2>Lokasi</h2>
    <p>Jl. Sultan Iskandar Muda, Sukaramai, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23116</p>
    </div>  
    </div>
    @endforeach
</div> 
</div>
@endsection