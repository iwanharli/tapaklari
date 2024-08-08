@extends('_layouts.portal')

@section('portal_content')
    <!-- WIDGET GLOBAL | PAGE TITLE -->
    @include('portal._widget._page-title')
    <!-- WIDGET GLOBAL | PAGE TITLE -->

    <!-- WIDGET | EVENT LIST -->
    @include('portal._widget.event_list-event')
    <!-- WIDGET | EVENT LIST -->

    <!-- WIDGET GLOBAL | CONTACT US -->
    @include('portal._widget._contact-us')
    <!-- WIDGET GLOBAL | CONTACT US -->
@endsection
