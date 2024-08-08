@extends('_layouts.portal')

@section('portal_content')
    <!-- WIDGET | HERO SLIDER -->
    @include('portal._widget.home_hero-slider')
    <!-- WIDGET | HERO SLIDER -->

    <!-- WIDGET | LOGO PARTNER -->
    @include('portal._widget.home_logo-partners')
    <!-- WIDGET | LOGO PARTNER -->

    <!-- WIDGET | ABOUT -->
    @include('portal._widget.home_about')
    <!-- WIDGET | ABOUT  -->

    <!-- WIDGET | BENEFIT -->
    @include('portal._widget.home_benefit')
    <!-- WIDGET | BENEFIT -->

    <!-- WIDGET | EVENT -->
    @include('portal._widget.home_event')
    <!-- WIDGET | EVENT -->

    <!-- WIDGET | COURSE -->
    @include('portal._widget.home_course')
    <!-- WIDGET | COURSE -->

    <!-- WIDGET | TESTIMONIAL -->
    @include('portal._widget.home_testimonial')
    <!-- WIDGET | TESTIMONIAL -->

    <!-- WIDGET GLOBAL | TEAM -->
    @include('portal._widget._team-member')
    <!-- WIDGET GLOBAL | TEAM -->

    <!-- WIDGET GLOBAL | BANNER -->
    @include('portal._widget._banner')
    <!-- WIDGET GLOBAL | BANNER -->

    <!-- WIDGET | BLOG -->
    @include('portal._widget.home_blog')
    <!-- WIDGET | BLOG -->

    <!-- WIDGET | REGISTER FORM -->
    @include('portal._widget.home_register-form')
    <!-- WIDGET | REGISTER FORM -->

    <div class="graphic"></div>
@endsection
