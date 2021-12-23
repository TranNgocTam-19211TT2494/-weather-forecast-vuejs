@include('layouts.header')
<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="hero__slider owl-carousel">
            @if($sides)
            @foreach($sides as $side)
            <div class="hero__items set-bg" data-setbg="https://image.tmdb.org/t/p/original/{{$side->backdrop_path}}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label">{{$side->original_name}}</div>
                            <h2>{{$side->name}}</h2>
                            <p><?= substr($side->overview,0 , 100) ?>...</p>
                            <a href="{{route('movie.watching',$side->id)}}"><span>XEM BÂY GIỜ</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Product Section Begin -->
@include('pages.movie')
<!-- Product Section End -->
@include('layouts.footer')