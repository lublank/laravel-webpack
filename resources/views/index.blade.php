@extends('master')

@section('header')
    <script src="{{mix('js/index.js')}}"></script>
@stop
@section('content')
    <div class="container bg">
        <div class="">
            <h1 class="text-center">Laravel5.4 + Webpack2 Framework</h1>
        </div>
        <h2>Sprite-svg</h2>
        <div class="our-service">
            <div class="feature-item">
                <div class="item-header">
                    <div class="icon-box">
                        <div class="item-circle">
                            <svg class="icon-home-security">
                                <use xlink:href="#icon-home-security"></use>
                            </svg>
                        </div>
                    </div>
                    <p>安全可靠</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="item-header">
                    <div class="icon-box">
                        <div class="item-circle">
                            <svg class="icon-home-trust">
                                <use xlink:href="#icon-home-trust"></use>
                            </svg>
                        </div>
                    </div>
                    <p>诚信可靠</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="item-header">
                    <div class="icon-box">
                        <div class="item-circle">
                            <svg class="icon-home-business">
                                <use xlink:href="#icon-home-business"></use>
                            </svg>
                        </div>
                    </div>
                    <p>自由合作</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="item-header">
                    <div class="icon-box">
                        <div class="item-circle">
                            <svg class="icon-home-efficient">
                                <use xlink:href="#icon-home-efficient"></use>
                            </svg>
                        </div>
                    </div>
                    <p>高效便捷</p>
                </div>
            </div>
        </div>
        <div class="sprite-images">
            <h2>Sprite-image</h2>
            <div class="images-wrap">
                <div class="icon icon-1"></div>
                <div class="icon icon-2"></div>
                <div class="icon icon-3"></div>
                <div class="icon icon-4"></div>
            </div>
        </div>
    </div>
@stop