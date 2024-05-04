@extends('frontend.master')
@section('content')
    <!--=============================
            BANNER START
        ==============================-->
    @include('frontend.components.banner')
    <!--=============================
            BANNER END
        ==============================-->


    <!--=============================
            WHY CHOOSE START
        ==============================-->
    @include('frontend.components.whyChooseUs')
    <!--=============================
            WHY CHOOSE END
        ==============================-->


    <!--=============================
            OFFER ITEM START
        ==============================-->
    @include('frontend.components.Offer')
    <!-- CART POPUT START -->
    @include('frontend.components.Popup')
    <!-- CART POPUT END -->
    <!--=============================
            OFFER ITEM END
        ==============================-->


    <!--=============================
            MENU ITEM START
        ==============================-->
    @include('frontend.components.MenuItem')
    <!--=============================
            MENU ITEM END
        ==============================-->


    <!--=============================
            ADD SLIDER START
        ==============================-->
    @include('frontend.components.slider')
    <!--=============================
            ADD SLIDER END
        ==============================-->


    <!--=============================
            TEAM START
        ==============================-->
    @include('frontend.components.team')
    <!--=============================
            TEAM END
        ==============================-->


    <!--=============================
            DOWNLOAD APP START
        ==============================-->
    @include('frontend.components.downloadApp')
    <!--=============================
            DOWNLOAD APP END
        ==============================-->


    <!--=============================
           TESTIMONIAL  START
        ==============================-->
    @include('frontend.components.testimonial')
    <!--=============================
            TESTIMONIAL END
        ==============================-->


    <!--=============================
            COUNTER START
        ==============================-->
    @include('frontend.components.counter')
    <!--=============================
            COUNTER END
        ==============================-->


    <!--=============================
            BLOG 2 START
        ==============================-->
    @include('frontend.components.blog2')
    <!--=============================
            BLOG 2 END
        ==============================-->
@endsection
