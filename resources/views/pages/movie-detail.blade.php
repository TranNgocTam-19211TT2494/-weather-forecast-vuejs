@include('layouts.header')
@if($movie)
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <a href="./categories.html">Categories</a>
                    <span>{{$movie->original_name}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="anime__details__pic set-bg" data-setbg="https://image.tmdb.org/t/p/original/{{$movie->poster_path}}">
                        <div class="comment"><i class="fa fa-comments"></i> <?= htmlspecialchars($movie->vote_count) ?></div>
                        <div class="view"><i class="fa fa-eye"></i> {{$movie->popularity}}</div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3>{{$movie->name}}</h3>
                            @if($genres)
                            @foreach($genres as $genre)
                            <span>{{$genre->name}}</span>
                            @endforeach
                            @endif
                        </div>
                        <div class="anime__details__rating">
                            <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                            <span>{{$movie->vote_count}} Votes</span>
                        </div>
                        <p>{{$movie->overview}}</p>
                        <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Loại:</span> {{$movie->type}}</li>
                                        <li><span>Hãng phim:</span> Lerche</li>
                                        <li><span>Ngày phát sóng:</span><?= date('F j, Y', strtotime($movie->first_air_date)); ?></li>
                                        @if($movie->status == 'Ended')
                                        <li><span>Trạng thái:</span> Đã kết thúc</li>
                                        @else
                                        <li><span>Trạng thái:</span> Phát sóng</li>
                                        @endif
                                        <li><span>Điểm:</span> 7.31 / 1,515</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Xếp hạng:</span> {{$movie->vote_average}} / <?= htmlspecialchars($movie->episode_run_time[0]) ?> times</li>
                                        <li><span>Phẩm chất:</span> HD</li>
                                        <li><span>Lượt xem:</span> {{$movie->popularity}}</li>
                                        <li><span>Khoảng thời gian:</span> <?= htmlspecialchars($movie->episode_run_time[0]) ?> min/ep</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="anime__details__btn">
                            <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> THEO DÕI</a>
                            <a href="{{route('movie.watching',$movie->id)}}" class="watch-btn"><span>XEM BÂY GIỜ</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>NHẬN XÉT</h5>
                    </div>
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="img/anime/review-1.jpg" alt="">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>Chris Curry - <span>1 Hour ago</span></h6>
                            <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                "demons" LOL</p>
                        </div>
                    </div>
                  
                </div>
                <div class="anime__details__form">
                    <div class="section-title">
                        <h5>BÌNH LUẬN CỦA BẠN</h5>
                    </div>
                    <form action="#">
                        <textarea placeholder="Your Comment"></textarea>
                        <button type="submit"><i class="fa fa-location-arrow"></i> KIỂM TRA LẠI</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="anime__details__sidebar">
                    <div class="section-title">
                        <h5>BẠN CÓ THỂ THÍCH...</h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-1.jpg">
                        <div class="ep">18 / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="#">Boruto: Naruto next generations</a></h5>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->
@endif
@include('layouts.footer')