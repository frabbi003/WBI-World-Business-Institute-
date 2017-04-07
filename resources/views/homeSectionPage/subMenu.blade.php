@extends('layouts.master')
@section('slider')
    <div class="row">
        <div class="col-md-12">
            @foreach($getSubMenuData as $getSubMenu)
                <div class="main-breadcrumb collaboration-breadcrumb"
                     style="background: rgba(0, 0, 0, 0) url({{ asset('img/'.$getSubMenu->sub_menu_img) }}) no-repeat scroll center center;">
                    {{--<ol class="breadcrumb">--}}
                        {{--<li><a href="{{ url('/') }}">Home</a></li>--}}
                        {{--<li>{{ $getSubMenu->sub_menu_name }}</li>--}}
                    {{--</ol>--}}
                </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-md-9">
        <div class="body-left-part">
            <div class="collaboration-content">
                <h3>{{ $getSubMenu->sub_menu_name }}</h3> <br>
                {!! $getSubMenu->sub_menu_desc !!}
            </div>
        </div>
        @endforeach
    </div>
@endsection