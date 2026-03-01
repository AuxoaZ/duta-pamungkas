<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>@yield('title', 'DPAT Cargo | Jasa Pengiriman & Logistik Terpercaya')</title>
        <meta
            name="description"
            content="@yield('meta_description', 'DPAT Cargo - Duta Pamungkas. Jasa logistik dan pengiriman barang terpercaya di Yogyakarta. Layanan pengiriman darat, udara, laut, dan pengiriman motor ke seluruh Indonesia.')"
        />
        <meta
            name="keywords"
            content="@yield('meta_keywords', 'jasa logistik, pengiriman barang, cargo Yogyakarta, kirim motor, pengiriman darat, pengiriman udara, pengiriman laut, DPAT Cargo')"
        />
        <meta name="author" content="DPAT Cargo - Duta Pamungkas" />
        <meta name="robots" content="index, follow" />
        <meta name="theme-color" content="#047857" />

        <!-- Canonical -->
        <link rel="canonical" href="{{ url()->current() }}" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:title" content="@yield('title', 'DPAT Cargo | Jasa Pengiriman & Logistik Terpercaya')" />
        <meta property="og:description" content="@yield('meta_description', 'DPAT Cargo - Duta Pamungkas. Jasa logistik dan pengiriman barang terpercaya di Yogyakarta.')" />
        <meta property="og:image" content="@yield('og_image', asset('assets/images/hero-3.png'))" />
        <meta property="og:locale" content="id_ID" />
        <meta property="og:site_name" content="DPAT Cargo" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="@yield('title', 'DPAT Cargo | Jasa Pengiriman & Logistik Terpercaya')" />
        <meta name="twitter:description" content="@yield('meta_description', 'DPAT Cargo - Duta Pamungkas. Jasa logistik dan pengiriman barang terpercaya di Yogyakarta.')" />
        <meta name="twitter:image" content="@yield('og_image', asset('assets/images/hero-3.png'))" />

        <!-- Favicon -->
        <link
            rel="apple-touch-icon"
            href="{{ asset('assets/images/favicon.png') }}"
        />
        <link
            rel="shortcut icon"
            href="{{ asset('assets/images/favicon.ico') }}"
        />
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap"
            rel="stylesheet"
        />

        <!-- CSS Files -->
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/bootstrap.min.css') }}"
        />
        <link rel="stylesheet" href="{{ asset('assets/css/fancybox.css') }}" />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/swiper-bundle.min.css') }}"
        />
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/jarallax.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/nice-select.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/jquery.datepicker.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/jquery.timepicker.min.css') }}"
        />
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

        <!-- JSON-LD Structured Data -->
        @yield('structured_data')
        @hasSection('structured_data')
        @else
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "DPAT Cargo - Duta Pamungkas",
            "description": "Jasa logistik dan pengiriman barang terpercaya di Yogyakarta. Layanan pengiriman darat, udara, laut, dan pengiriman motor ke seluruh Indonesia.",
            "url": "{{ url('/') }}",
            "logo": "https://www.dpat-cargo.com/frontend/assets/img/logonobg.png",
            "image": "{{ asset('assets/images/hero-3.png') }}",
            "telephone": "+6285138568164",
            "email": "dpat-cargo@gmail.com",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Yogyakarta",
                "addressRegion": "DI Yogyakarta",
                "addressCountry": "ID"
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
                "opens": "00:00",
                "closes": "23:59"
            },
            "sameAs": [],
            "priceRange": "$$",
            "serviceType": ["Pengiriman Darat", "Pengiriman Udara", "Pengiriman Laut", "Pengiriman Motor"]
        }
        </script>
        @endif
    </head>

    <body>
        <div class="main-overlay"></div>

        <main>@yield('content')</main>

        <!-- Scroll Top -->
        <a href="https://api.whatsapp.com/send?phone=6285138568164">
            <div class="scroll-top">
                <svg height="100%" viewBox="-1 -1 102 102" width="100%">
                    <path></path>
                </svg>
            </div>
        </a>

        <!--Javascript
========================================================-->
        <script
            data-cfasync="false"
            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
        ></script>
        <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/lenis.min.js') }}"></script>
        <script src="{{ asset('assets/js/jarallax.min.js') }}"></script>
        <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
        <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
        <script src="{{ asset('assets/js/SplitText.js') }}"></script>
        <script src="{{ asset('assets/js/fancybox.umd.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/purecounter.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
        <script src="{{
                asset('assets/js/jquery.nice-select.min.js')
            }}"></script>
        <script src="{{
                asset('assets/js/jquery.timepicker.min.js')
            }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>

        <script>
            (function () {
                function c() {
                    var b = a.contentDocument || a.contentWindow.document;
                    if (b) {
                        var d = b.createElement("script");
                        d.innerHTML =
                            "window.__CF$cv$params={r:'9cca2a5a8adcc6b2',t:'MTc3MDg3OTE2OQ=='};var a=document.createElement('script');a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                        b.getElementsByTagName("head")[0].appendChild(d);
                    }
                }
                if (document.body) {
                    var a = document.createElement("iframe");
                    a.height = 1;
                    a.width = 1;
                    a.style.position = "absolute";
                    a.style.top = 0;
                    a.style.left = 0;
                    a.style.border = "none";
                    a.style.visibility = "hidden";
                    document.body.appendChild(a);
                    if ("loading" !== document.readyState) c();
                    else if (window.addEventListener)
                        document.addEventListener("DOMContentLoaded", c);
                    else {
                        var e = document.onreadystatechange || function () {};
                        document.onreadystatechange = function (b) {
                            e(b);
                            "loading" !== document.readyState &&
                                ((document.onreadystatechange = e), c());
                        };
                    }
                }
            })();
        </script>
    </body>
</html>
