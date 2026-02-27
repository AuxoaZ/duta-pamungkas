<footer class="footer footer-3 bg-cover jarallax" data-jarallax data-speed=".7">
    <img
        src="{{ asset('assets/images/footer-bg.jpg') }}"
        alt=""
        class="jarallax-img"
    />
    <div class="parallax-overly"></div>
    <div class="container">
        <!-- <div
          class="d-md-flex justify-content-between align-items-center footer-top"
        >
          <div class="subs-head">
            <h2 class="display-4 text-white">Subscribe Our Newsletter</h2>
          </div>
          <div class="subs-widget">
            <form action="#" class="position-relative">
              <input type="email" placeholder="Your email" />
              <button class="icon-md bg-primary rounded-5">
                Subscribe <img src="{{ asset('assets/images/icons/paper-plane.png') }}" alt="" />
              </button>
            </form>
          </div>
        </div> -->
        <div class="row footer-widgets">
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="footer-widget about-footer">
                    <div class="f-logo">
                        <a href="{{ url('/') }}"
                            ><img
                                src="https://www.dpat-cargo.com/frontend/assets/img/logonobg.png"
                                width="200px"
                                alt="DPAT Cargo - Jasa Pengiriman dan Logistik Terpercaya"
                        /></a>
                    </div>
                    <p>
                        Kami menyediakan layanan logistik terintegrasi untuk
                        pengiriman cepat, aman, dan tepat waktu.
                    </p>
                    <div class="social-share">
                        <a href="https://www.instagram.com/paketcargojogja/"
                            ><i class="fab fa-instagram"></i
                        ></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 offset-sm-1 offset-lg-0">
                <div class="footer-widget">
                    <h3 class="widget-title">Tautan</h3>
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#service">Layanan</a></li>
                        <li><a href="#about">Tentang</a></li>
                        <li><a href="#faq">FAQ's</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 ps-lg-5 col-sm-6">
                <div class="footer-widget">
                    <h3 class="widget-title">Layanan</h3>
                    <ul>
                        <li>
                            <p>Pengiriman Darat</p>
                        </li>
                        <li>
                            <p>Pengiriman Udara</p>
                        </li>
                        <li>
                            <p>Pengiriman Laut</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-4 offset-sm-1 offset-lg-0">
                <div class="footer-widget contact-widget">
                    <h3 class="widget-title">Kontak</h3>
                    <div class="opening-inner">
                        <div
                            class="d-flex align-items-center justify-content-between mb-3"
                        >
                            <span
                                >Jalan, Gamping Lor, Ambarketawang, Gamping,
                                Sleman Regency, Special Region of Yogyakarta
                                55294</span
                            >
                        </div>
                        <div
                            class="d-flex align-items-center justify-content-between mb-3"
                        >
                            <span>Email: dpat-cargo@gmail.com</span>
                        </div>
                        <div
                            class="d-flex align-items-center justify-content-between mb-3"
                        >
                            <span>Phone: 0851-3856-8164</span>
                        </div>
                    </div>
                    <a
                        href="https://api.whatsapp.com/send?phone=6285138568164"
                        class="btn btn-info btn-xs mt-4"
                        >Hubungi Kami <span></span
                    ></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div
                class="d-flex flex-wrap justify-content-between align-items-center"
            >
                <p class="text-info copy-right mb-0 order-2 order-md-1">
                    Copyright &copy; 2026
                    <a class="text-primary" href="#">DPAT</a> All Rights
                    Reserved.
                </p>
                <nav class="footer-nav order-1 order-md-2">
                    <ul>
                        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('terms-condition') }}">Terms & Condition</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>
