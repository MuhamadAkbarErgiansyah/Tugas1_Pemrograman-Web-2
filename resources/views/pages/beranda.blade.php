@extends('layouts.landing')

@section('judul', 'Beranda - Ruang Pesisir Kreatif')

@section('konten')
    <section class="hero">
        <div class="hero-inner">
            <div>
                <h1>Tempat santai untuk isi ulang energi kreatifmu.</h1>
                <p class="intro">
                    Landing page ini dibuat dalam Bahasa Indonesia dengan visual yang elegan, modern,
                    dan ringan. Kamu bisa berpindah halaman untuk melihat info program, galeri,
                    dan kontak.
                </p>
                <div class="cta">
                    <a href="{{ route('program') }}" class="btn btn-primary">Lihat Program</a>
                    <a href="{{ route('galeri') }}" class="btn btn-soft">Jelajahi Galeri</a>
                </div>
            </div>
            <article class="side-card">
                <h3>Sesi April 2026</h3>
                <p>Workshop 3 hari: desain visual, storytelling, dan networking komunitas kreatif.</p>
                <div class="bar"><span></span></div>
            </article>
        </div>
    </section>

    <section class="grid">
        <article class="card">
            <strong>Studio Pinggir Pantai</strong>
            <p>Pencahayaan alami, suasana tenang, dan ruang kerja yang nyaman untuk fokus berkarya.</p>
        </article>
        <article class="card">
            <strong>Komunitas Terkurasi</strong>
            <p>Ketemu fotografer, desainer, dan kreator konten dalam lingkungan yang suportif.</p>
        </article>
        <article class="card">
            <strong>Jadwal Seimbang</strong>
            <p>Ada sesi belajar, waktu eksplorasi, dan istirahat supaya ide tetap segar.</p>
        </article>
    </section>
@endsection
