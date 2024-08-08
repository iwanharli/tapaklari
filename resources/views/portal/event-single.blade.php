@extends('_layouts.portal')

@section('portal_content')
    <!-- WIDGET GLOBAL | PAGE TITLE -->
    @include('portal._widget._page-title')
    <!-- WIDGET GLOBAL | PAGE TITLE -->

    <!-- WIDGET | DETAIL EVENT -->
    @include('portal._widget.event_detail-event')
    <!-- WIDGET | DETAIL EVENT -->

    <!-- WIDGET GLOBAL | CONTACT US -->
    @include('portal._widget._contact-us')
    <!-- WIDGET GLOBAL | CONTACT US -->
@endsection
