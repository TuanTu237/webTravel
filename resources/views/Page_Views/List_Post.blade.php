@extends('Page_Views.Pages_Layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_4">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>blog</h3>
                    <p>Bài viết du lịch</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->


<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach($Post as $key=>$p)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" width="600" height="400" src="{{asset('uploads/posts/thumb/'.$p->post_thumb)}}"
                                alt="">
                            <a href="#" class="blog_item_date">

                                <p>{{date('d-m-Y', strtotime($p->updated_at))}}</p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="{{URL::to('/post/'.$p->post_title)}}">
                                <h2>{{$p->post_title}}</h2>
                            </a>
                            <p>{{$p->post_desc}}</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-eye"></i>{{$p->post_view}} Lượt xem</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> Comment</a></li>
                            </ul>
                        </div>
                    </article>

                    @endforeach


                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            {{ $Post->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <h3 class="widget_title">Tạo bài viết của riêng bạn</h3>
                        <?php
                                   $customer_id = Session::get('customer_id');
                                   if($customer_id!=NULL){ 
                                 ?>
                        <a href="{{URL::to('them-bai-viet')}}"
                            class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn">Tạo bài viết</a>
                        <?php 
                    }else{
                                 ?>
                        <a href="{{URL::to('login-index')}}"
                            class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn">Tạo bài viết</a>
                        <?php 
                             }
                                 ?>
                    </aside>


                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        @foreach($Blog as $key=>$B)
                        <div class="media post_item">
                            <img class="img-fluid1" src="{{asset('uploads/posts/thumb/'.$B->post_thumb)}}" alt="post">
                            <div class="media-body">
                                <a href="{{URL::to('/post/'.$B->post_title)}}">
                                    <h3>{{$B->post_title}}</h3>
                                </a>
                                <p>{{date('d-m-Y', strtotime($B->updated_at))}}</p>
                            </div>
                        </div>
                        @endforeach

                    </aside>

                    <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="img/post/post_5.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="img/post/post_6.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="img/post/post_7.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="img/post/post_8.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="img/post/post_9.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="img/post/post_10.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </aside>


                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Subscribe</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
@endsection