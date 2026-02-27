<nav>
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="top-bar-left d-flex align-items-center gap-4">
                <a href="mailto:dpat-cargo@gmail.com" class="top-bar-item">
                    <i class="fa-solid fa-envelope"></i>
                    <span>dpat-cargo@gmail.com</span>
                </a>
                <a href="tel:+6285138568164" class="top-bar-item">
                    <i class="fa-solid fa-phone"></i>
                    <span>+62 851-3856-8164</span>
                </a>
            </div>
            <div class="top-bar-right d-none d-md-flex align-items-center gap-3">
                <a href="https://api.whatsapp.com/send?phone=6285138568164" class="top-bar-social" aria-label="WhatsApp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="#" class="top-bar-social" aria-label="Instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" class="top-bar-social" aria-label="Facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Header Start -->
    <header class="header header-3">
        <div class="header-wrapper">
            <!-- Navigation Menu Start -->
            <div class="header-nav-wrapper header-sticky">
                <nav class="navbar navbar-expand-xl">
                    <div class="container ct-container">
                        <a href="{{ url('/') }}" class="navbar-brand">
                            <img
                                src="https://www.dpat-cargo.com/frontend/assets/img/logonobg.png"
                                alt="DPAT Cargo - Jasa Pengiriman dan Logistik"
                                class="img-fluid"
                                width="150px"
                            />
                        </a>
                        <button
                            class="navbar-toggler offcanvas-nav-btn"
                            type="button"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="14"
                                height="12"
                                fill="none"
                                viewBox="0 0 14 12"
                            >
                                <path
                                    fill="#020e28"
                                    d="M0 .75Q.063.063.75 0h12.5q.687.063.75.75-.063.687-.75.75H.75Q.063 1.437 0 .75m0 5Q.063 5.063.75 5h12.5q.687.063.75.75-.063.687-.75.75H.75Q.063 6.437 0 5.75m13.25 5.75H.75q-.687-.063-.75-.75.063-.687.75-.75h12.5q.687.063.75.75-.063.687-.75.75"
                                />
                            </svg>
                        </button>
                        <div class="nav-cta d-none d-md-flex order-lg-3">
                            <div
                                class="d-flex align-items-center justify-content-between gap-4"
                            >
                                <a
                                    href="https://api.whatsapp.com/send?phone=6285138568164"
                                    class="btn btn-primary btn-hover"
                                >
                                    Hubungi Kami
                                    <i class="fa-solid fa-arrow-right"></i>

                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="offcanvas offcanvas-start offcanvas-nav">
                            <div class="offcanvas-header">
                                <a href="{{ url('/') }}" class="text-inverse"
                                    ><img
                                        src="https://www.dpat-cargo.com/frontend/assets/img/logonobg.png"
                                        alt="DPAT Cargo Logo"
                                /></a>
                                <button
                                    type="button"
                                    class="btn-close bg-primary"
                                    data-bs-dismiss="offcanvas"
                                    aria-label="Close"
                                ></button>
                            </div>

                            <div
                                class="offcanvas-body pt-0 align-items-center justify-content-between"
                            >
                                <ul
                                    class="navbar-nav mx-auto align-items-lg-center"
                                >
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="{{ url('/') }}"
                                            role="button"
                                            >Beranda</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="{{ url('/#service') }}"
                                            role="button"
                                            >Layanan</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="{{ url('/#about') }}"
                                            role="button"
                                            >Tentang</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="{{ url('/#faq') }}"
                                            role="button"
                                            >FAQ</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="{{ url('/#contact') }}"
                                            role="button"
                                            >Kontak</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->
</nav>
