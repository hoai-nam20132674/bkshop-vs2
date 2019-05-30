@extends('front-end.layout.default')
@section('section-slide')
	@include('front-end.layout.section-slide')
@endsection
@section('title')
	SIÊU GIẢM GIÁ
@endsection
@section('content')
	@include('front-end.layout.section-new-product')
	@include('front-end.layout.section-hot-sale')
	@include('front-end.layout.section-categorie-product')
	@include('front-end.layout.section-recommend-product')
@endsection