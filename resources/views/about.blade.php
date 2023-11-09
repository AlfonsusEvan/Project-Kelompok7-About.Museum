@extends('Main.main')

@section('container')

<div class="container">
    <div id="fh5co-intro">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                <h2>What is a Museum?</h2>
            </div>
        </div>
    </div>
    <div id="fh5co-portfolio">
        <div class="row">

            <div class="col-md-4 col-md-push-8 sticky-parent">
                <div class="detail" id="sticky_item">
                    {!! html_entity_decode($content->content) !!}
                    <!--<div class="animate-box">
                        <h2>Apa sih Museum itu ? </h2>
                        
                        <p>Museum adalah lembaga yang berfungsi melindungi, mengembangkan, memanfaatkan koleksi, dan mengomunikasikannya kepada masyarakat.</p>
                        <p>Secara etimologis, museum berasal dari kata Yunani, Μουσεῖον atau mouseion, yang sebenarnya merujuk kepada nama kuil untuk sembilan Dewi Muses, anak-anak Dewa Zeus yang melambangkan ilmu dan kesenian.</p>
                        <p><a class="btn btn-primary btn-demo" href="https://id.wikipedia.org/wiki/Museum"></i>Info lengkap</a></p>
                    </div>-->
                </div>
            </div>

            <div class="col-md-7 col-md-pull-4 image-content">
                @foreach ($content2 as $key)
                    <div class="image-item  animate-box">
                        <img src="images/{{ $key->content }}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                    </div>
                @endforeach
                <!--<div class="image-item  animate-box">
                    <img src="images/About2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                </div>
                <div class="image-item  animate-box">
                    <img src="images/About3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                </div>
                <div class="image-item  animate-box">
                    <img src="images/About4.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                </div>
                <div class="image-item  animate-box">
                    <img src="images/About5.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                </div>
                <div class="image-item  animate-box">
                    <img src="images/About1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
                </div>-->
            </div>
            
        </div>
    </div>
</div><!-- END container-wrap -->



    
@endsection