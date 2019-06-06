@extends('front-end.layout.default')
@section('css-js-header')
	<link href="{{asset('css/bpr.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/productReviews.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('section-slide')
	@include('front-end.layout.section-slide')
@endsection

@section('content')
	@include('front-end.layout.section-hot-product')
	@include('front-end.layout.section-categorie-product')
	@if(count($system_follow)!=0)
		@include('front-end.layout.section-recommend-product')
	@else
	@endif
@endsection