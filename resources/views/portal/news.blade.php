@extends('_layouts.portal')

@section('portal_content')
    <!-- WIDGET GLOBAL | PAGE TITLE -->
    @include('portal._widget._page-title')
    <!-- WIDGET GLOBAL | PAGE TITLE -->

    <!-- WIDGET | NEWS LIST -->
    @include('portal._widget.news_list-news')
    <!-- WIDGET | NEWS LIST -->
@endsection
