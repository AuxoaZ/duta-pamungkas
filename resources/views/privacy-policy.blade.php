@extends('layouts.landing')

@section('title', 'Privacy Policy | DPAT Cargo')
@section('meta_description', 'Kebijakan Privasi DPAT Cargo - Duta Pamungkas. Informasi mengenai bagaimana kami mengumpulkan, menggunakan, dan melindungi data pribadi Anda.')
@section('meta_keywords', 'privacy policy, kebijakan privasi, DPAT Cargo, perlindungan data')

@section('content')
@include('sections.navbar')

<section class="legal-page sec-padding">
    <div class="container">
        <div class="legal-header text-center mb-5">
            <h1 class="sec-title">Privacy Policy</h1>
            <p class="text-mute">Terakhir diperbarui: 26 Februari 2026</p>
        </div>

        <div class="legal-content">
            <div class="legal-block">
                <h2>1. Pendahuluan</h2>
                <p>
                    Selamat datang di DPAT Cargo ("kami", "milik kami"). Kami berkomitmen untuk melindungi privasi dan keamanan data pribadi Anda. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, menyimpan, dan melindungi informasi pribadi Anda saat menggunakan layanan kami.
                </p>
            </div>

            <div class="legal-block">
                <h2>2. Informasi yang Kami Kumpulkan</h2>
                <p>Kami dapat mengumpulkan informasi berikut:</p>
                <ul>
                    <li><strong>Data Identitas:</strong> Nama lengkap, alamat, nomor telepon, dan alamat email.</li>
                    <li><strong>Data Pengiriman:</strong> Alamat pengirim dan penerima, detail paket, serta informasi terkait pengiriman.</li>
                    <li><strong>Data Transaksi:</strong> Riwayat transaksi, metode pembayaran, dan detail pembayaran.</li>
                    <li><strong>Data Teknis:</strong> Alamat IP, jenis browser, perangkat yang digunakan, dan data log akses situs web kami.</li>
                </ul>
            </div>

            <div class="legal-block">
                <h2>3. Penggunaan Informasi</h2>
                <p>Informasi yang kami kumpulkan digunakan untuk:</p>
                <ul>
                    <li>Memproses dan mengelola pesanan pengiriman Anda.</li>
                    <li>Menghubungi Anda terkait status pengiriman dan layanan pelanggan.</li>
                    <li>Meningkatkan kualitas layanan dan pengalaman pengguna.</li>
                    <li>Memenuhi kewajiban hukum dan peraturan yang berlaku.</li>
                    <li>Mengirimkan informasi promosi dan penawaran (dengan persetujuan Anda).</li>
                </ul>
            </div>

            <div class="legal-block">
                <h2>4. Perlindungan Data</h2>
                <p>
                    Kami menerapkan langkah-langkah keamanan teknis dan organisasi yang sesuai untuk melindungi data pribadi Anda dari akses yang tidak sah, pengubahan, pengungkapan, atau pemusnahan. Langkah-langkah ini meliputi enkripsi data, kontrol akses, dan audit keamanan berkala.
                </p>
            </div>

            <div class="legal-block">
                <h2>5. Berbagi Informasi</h2>
                <p>Kami tidak menjual data pribadi Anda kepada pihak ketiga. Namun, kami dapat membagikan informasi Anda dengan:</p>
                <ul>
                    <li>Mitra pengiriman dan logistik untuk memproses pengiriman barang.</li>
                    <li>Penyedia layanan pembayaran untuk memproses transaksi.</li>
                    <li>Pihak berwenang jika diwajibkan oleh hukum yang berlaku.</li>
                </ul>
            </div>

            <div class="legal-block">
                <h2>6. Hak Anda</h2>
                <p>Anda memiliki hak untuk:</p>
                <ul>
                    <li>Mengakses dan memperoleh salinan data pribadi Anda yang kami simpan.</li>
                    <li>Meminta perbaikan data pribadi yang tidak akurat.</li>
                    <li>Meminta penghapusan data pribadi Anda (sesuai ketentuan hukum).</li>
                    <li>Menarik persetujuan atas penggunaan data Anda untuk tujuan pemasaran.</li>
                </ul>
            </div>

            <div class="legal-block">
                <h2>7. Cookie</h2>
                <p>
                    Situs web kami menggunakan cookie untuk meningkatkan pengalaman browsing Anda. Cookie membantu kami memahami bagaimana Anda menggunakan situs kami dan memungkinkan kami menyediakan fitur tertentu. Anda dapat mengatur preferensi cookie melalui pengaturan browser Anda.
                </p>
            </div>

            <div class="legal-block">
                <h2>8. Perubahan Kebijakan</h2>
                <p>
                    Kami dapat memperbarui Kebijakan Privasi ini dari waktu ke waktu. Perubahan akan dipublikasikan di halaman ini dengan tanggal pembaruan terbaru. Kami menyarankan Anda untuk meninjau halaman ini secara berkala.
                </p>
            </div>

            <div class="legal-block">
                <h2>9. Hubungi Kami</h2>
                <p>
                    Jika Anda memiliki pertanyaan mengenai Kebijakan Privasi ini atau ingin menggunakan hak Anda terkait data pribadi, silakan hubungi kami melalui:
                </p>
                <ul>
                    <li><strong>WhatsApp:</strong> <a href="https://api.whatsapp.com/send?phone=6285138568164">+62 851-3856-8164</a></li>
                    <li><strong>Email:</strong> <a href="mailto:dpat-cargo@gmail.com">dpat-cargo@gmail.com</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@include('sections.footer')
@endsection
