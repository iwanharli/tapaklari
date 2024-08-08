@extends('_layouts.portal')

@section('portal_content')
    <!-- WIDGET GLOBAL | PAGE TITLE -->
    @include('portal._widget._page-title')
    <!-- WIDGET GLOBAL | PAGE TITLE -->

    <!-- WIDGET | DESCRIPTION -->
    @include('portal._widget.about_description')
    <!-- WIDGET | DESCRIPTION -->

    <!-- WIDGET | COUNTER -->
    @include('portal._widget.about_counter')
    <!-- WIDGET | COUNTER -->

    <!-- WIDGET | MISSION -->
    @include('portal._widget.about_mission')
    <!-- WIDGET | MISSION -->

    <!-- WIDGET GLOBAL | BANNER -->
    @include('portal._widget._banner')
    <!-- WIDGET GLOBAL | BANNER -->

    <!-- WIDGET GLOBAL | TEAM -->
    @include('portal._widget._team-member')
    <!-- WIDGET GLOBAL | TEAM -->

    <!-- WIDGET GLOBAL | CONTACT US -->
    @include('portal._widget._contact-us')
    <!-- WIDGET GLOBAL | CONTACT US -->
@endsection
