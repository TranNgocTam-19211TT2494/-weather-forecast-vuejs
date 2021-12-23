<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>ĐANG LÀ XU HƯỚNG</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">XEM TẤT CẢ <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    
                        @if($movies)
                        @foreach($movies as $mov)

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="https://image.tmdb.org/t/p/original/{{$mov->poster_path}}">
                                    <div class="ep">18 / 18</div>
                                    <div class="comment"><i class="fa fa-comments"></i>{{$mov->vote_count}}</div>
                                    <div class="view"><i class="fa fa-eye"></i>{{$mov->popularity}}</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Tích cực</li>
                                        <li>Bộ phim</li>
                                    </ul>
                                   
                                    <h5><a href="{{route('movie.detail',$mov->id)}}">{{$mov->name}}</a></h5>
                                    
                                </div>
                            </div>
                        </div>
                       
                        @endforeach
                        @endif
                      
                    </div>
                </div>
                <div class="popular__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>CHƯƠNG TRÌNH NỔI TIẾNG</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">XEM TẤT CẢ <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="fontend/img/popular/popular-1.jpg">
                                    <div class="ep">18 / 18</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Tích cực</li>
                                        <li>Bộ phim</li>
                                    </ul>
                                    <h5><a href="#">Sen to Chihiro no Kamikakushi</a></h5>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <div class="recent__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>CÁC CHƯƠNG TRÌNH ĐƯỢC THÊM GẦN ĐÂY</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">XEM TẤT CẢ <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="fontend/img/recent/recent-1.jpg">
                                    <div class="ep">18 / 18</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Tích cực</li>
                                        <li>Bộ phim</li>
                                    </ul>
                                    <h5><a href="#">Great Teacher Onizuka</a></h5>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="live__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>HÀNH ĐỘNG TRỰC TIẾP</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">XEM TẤT CẢ <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="fontend/img/live/live-1.jpg">
                                    <div class="ep">18 / 18</div>
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Tích cực</li>
                                        <li>Bộ phim</li>
                                    </ul>
                                    <h5><a href="#">Shouwa Genroku Rakugo Shinjuu</a></h5>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="product__sidebar">
                    <div class="product__sidebar__view">
                        <div class="section-title">
                            <h5>LƯỢT XEM HÀNG ĐẦU</h5>
                        </div>
                        <ul class="filter__controls">
                            <li class="active" data-filter="*">Ngày</li>
                            <li data-filter=".week">Tuần</li>
                            <li data-filter=".month">Tháng</li>
                            <li data-filter=".years">Năm</li>
                        </ul>
                        <div class="filter__gallery">
                            <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="fontend/img/sidebar/tv-1.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Boruto: Naruto next generations</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                                data-setbg="fontend/img/sidebar/tv-2.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix week years"
                                data-setbg="fontend/img/sidebar/tv-3.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix years month"
                                data-setbg="fontend/img/sidebar/tv-4.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix day" data-setbg="fontend/img/sidebar/tv-5.jpg">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Fate stay night unlimited blade works</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product__sidebar__comment">
                        <div class="section-title">
                            <h5>BÌNH LUẬN MỚI</h5>
                        </div>
                        <div class="product__sidebar__comment__item">
                            <div class="product__sidebar__comment__item__pic">
                                <img src="fontend/img/sidebar/comment-1.jpg" alt="">
                            </div>
                            <div class="product__sidebar__comment__item__text">
                                <ul>
                                    <li>Tích cực</li>
                                    <li>Bộ phim</li>
                                </ul>
                                <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                <span><i class="fa fa-eye"></i> 19.141 Lượt xem</span>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>