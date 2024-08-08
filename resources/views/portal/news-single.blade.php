@extends('_layouts.portal')

@section('portal_content')
    <!-- WIDGET GLOBAL | PAGE TITLE -->
    @include('portal._widget._page-title')
    <!-- WIDGET GLOBAL | PAGE TITLE -->

    <!-- WIDGET | DETAIL NEWS -->
    @include('portal._widget.news_detail-news')
    <!-- WIDGET | DETAIL NEWS -->
@endsection
