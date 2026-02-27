@extends('layouts.landing') @section('title', 'DPAT Cargo | Jasa Pengiriman & Logistik Terpercaya Yogyakarta')
@section('meta_description', 'DPAT Cargo - Duta Pamungkas. Jasa logistik terpercaya di Yogyakarta. Layanan pengiriman darat, udara, laut, dan kirim motor ke seluruh Indonesia. Gratis jemput paket di DI Yogyakarta.')
@section('meta_keywords', 'jasa logistik, pengiriman barang, cargo Yogyakarta, kirim motor, pengiriman darat, pengiriman udara, pengiriman laut, DPAT Cargo, jasa pengiriman, distribusi cepat, logistik Yogyakarta, free pickup') @section('content')
@include('sections.navbar') @include('sections.hero')
@include('sections.service') @include('sections.goodsType')
@include('sections.whyUs')
@include('sections.about') @include('sections.stat')
@include('sections.process') @include('sections.review')
@include('sections.faq') @include('sections.contact')
@include('sections.footer') @endsection

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "DPAT Cargo - Duta Pamungkas",
    "description": "Jasa logistik dan pengiriman barang terpercaya di Yogyakarta. Layanan pengiriman darat, udara, laut, dan pengiriman motor ke seluruh Indonesia.",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('assets/images/logonobg.png') }}",
    "image": "{{ asset('assets/images/hero-3.png') }}",
    "telephone": "+6285138568164",
    "email": "dpat-cargo@gmail.com",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Jalan Gamping Lor, Ambarketawang, Gamping",
        "addressLocality": "Sleman",
        "addressRegion": "DI Yogyakarta",
        "postalCode": "55294",
        "addressCountry": "ID"
    },
    "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
        "opens": "09:00",
        "closes": "23:00"
    },
    "sameAs": [],
    "priceRange": "$$",
    "serviceType": ["Pengiriman Darat", "Pengiriman Udara", "Pengiriman Laut", "Pengiriman Motor"]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Apakah barang harus saya antar sendiri?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Bisa diantar sendiri, atau jika terlalu banyak silakan bisa request pickup, nanti akan diambil oleh tim kami di lokasi anda."
            }
        },
        {
            "@type": "Question",
            "name": "Apakah pembayarannya harus selalu cash?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "DPAT-Cargo menawarkan berbagai metode pembayaran untuk mempermudah mitra/seller dalam berkirim-kirim barang."
            }
        },
        {
            "@type": "Question",
            "name": "Syarat apa saja yang perlu saya kumpulkan untuk menjadi mitra Duta Pamungkas Cargo?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Beberapa syarat sebagai bukti kerjasama dengan kami yaitu Fotokopi KTP, dan menyerahkan beberapa data pribadi dan toko."
            }
        },
        {
            "@type": "Question",
            "name": "Apakah resi yang saya kirimkan melalui layanan DPAT-Cargo dapat dilacak?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Semua jenis resi yang menggunakan layanan DPAT-Cargo dapat dilacak mulai dari saat penyerahan barang anda di gudang kami."
            }
        },
        {
            "@type": "Question",
            "name": "Bagaimana cara menghubungi layanan pelanggan?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Anda dapat menghubungi tim kami melalui WhatsApp di nomor 0851-3856-8164 atau melalui email di dpat-cargo@gmail.com. Layanan pelanggan kami tersedia 24/7 untuk membantu Anda."
            }
        },
        {
            "@type": "Question",
            "name": "Bagaimana jika pengiriman saya tertunda atau hilang?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Kami berkomitmen untuk ketepatan waktu pengiriman. Jika terjadi keterlambatan atau kehilangan, tim kami akan segera menindaklanjuti dan memberikan solusi terbaik termasuk penggantian sesuai kebijakan asuransi yang berlaku."
            }
        }
    ]
}
</script>
@endsection
