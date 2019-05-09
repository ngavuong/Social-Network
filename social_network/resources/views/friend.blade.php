@extends('layouts.master')
@section('content')
    @include('partials.headers-navigations.right-panel')

    @include('partials.headers-navigations.right-panel-responsive')

    @include('partials.headers-navigations.header-BP')

    @include('partials.headers-navigations.header-BP-responsive')

    <div class="header-spacer"></div>

    @include('partials.headers-navigations.top-header-profile')
    <div class="container">
        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block responsive-flex">
                    <div class="ui-block-title">
                        <div class="h6 title">{{$user->first_name.'’s Friends ('.sizeof($friends).')'}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Friends -->

    <div class="container">
        <div class="row">
            <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="ui-block">

                    <!-- Friend Item -->
                    @for ($i = 0; $i < count($friends); $i++)
                        <div class="friend-item">
                            <div class="friend-header-thumb">
                                <img src="{{asset($profile_friends[$i]->header_path)}}" alt="friend" width="318" height="122">
                            </div>

                            <div class="friend-item-content">

                                <!-- <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')}}"></use></svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">Report Profile</a>
                                        </li>
                                        <li>
                                            <a href="#">Block Profile</a>
                                        </li>
                                        <li>
                                            <a href="#">Turn Off Notifications</a>
                                        </li>
                                    </ul>
                                </div> -->
                                <div class="friend-avatar">
                                    <div class="author-thumb">
                                        <img src="{{asset($profile_friends[$i]->avatar_path)}}" alt="author" width="92" height="92">
                                    </div>
                                    <div class="author-content">
                                        <a href="#" class="h5 author-name">{{$friends[$i]->first_name.' '.$friends[$i]->last_name}}</a>
                                        <div class="country">{{$profile_friends[$i]->address}}</div>
                                    </div>
                                </div>
                                <div class="h6" data-swiper-parallax="-100">
                                    <div class="friend-about" data-swiper-parallax="-500">
                                        <span class="title">{{$profile_friends[$i]->about_me}}</span>
                                    </div>
                                </div>
                                <div class="control-block-button" data-swiper-parallax="-100">
                                    <a href="#" class="btn btn-control bg-blue">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')}}"></use></svg>
                                    </a>

                                    <a href="#" class="btn btn-control bg-purple">
                                        <svg class="olymp-chat---messages-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-chat---messages-icon')}}"></use></svg>
                                    </a>

                                </div>
                                            
                                <!-- <div class="swiper-container" data-slide="fade">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="friend-count" data-swiper-parallax="-500">
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">52</div>
                                                    <div class="title">Friends</div>
                                                </a>
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">240</div>
                                                    <div class="title">Photos</div>
                                                </a>
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">16</div>
                                                    <div class="title">Videos</div>
                                                </a>
                                            </div>
                                            
                                        </div>

                                        <div class="swiper-slide">
                                            

                                            <div class="friend-since" data-swiper-parallax="-100">
                                                <span>Friends Since:</span>
                                                <div class="h6">December 2014</div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="swiper-pagination"></div>
                                </div> -->
                            </div>
                        </div>
                    @endfor
                    <!-- ... end Friend Item -->
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Friends -->
@endsection