@extends('layouts.landing')

@section('title', 'Duta  Pamungkas Abadi | Jasa Logistik Terpercaya di Yogyakarta')

@section('meta_description', 'Jasa logistik terpercaya di Yogyakarta. Kami menyediakan layanan pengiriman cepat, aman, dan tepat waktu untuk bisnis Anda. Hubungi kami untuk solusi logistik terbaik.')

@section('meta_keywords', 'jasa logistik, pengiriman cepat, pengiriman aman, pengiriman tepat waktu, logistik Yogyakarta, solusi logistik, jasa pengiriman, distribusi cepat')

@section('content')
    @include('sections.hero')
    @include('sections.about')
    @include('sections.whyUs')
    @include('sections.service')
    @include('sections.stat')
    @include('sections.process')
    @include('sections.review')
    @include('sections.faq')
@endsection
