@extends('layouts.landing') @section('title', 'DPAT Cargo | Duta Pamungkas')
@section('meta_description', 'Jasa logistik terpercaya. Kami menyediakan layanan
pengiriman cepat, aman, dan tepat waktu untuk bisnis Anda. Hubungi kami untuk
solusi logistik terbaik.') @section('meta_keywords', 'jasa logistik, pengiriman
cepat, pengiriman aman, pengiriman tepat waktu, logistik Yogyakarta, solusi
logistik, jasa pengiriman, distribusi cepat') @section('content')
@include('sections.navbar') @include('sections.hero')
@include('sections.service') @include('sections.goodsType')
@include('sections.whyUs')
@include('sections.about') @include('sections.stat')
@include('sections.process') @include('sections.review')
@include('sections.faq') @include('sections.contact')
@include('sections.footer') @endsection
