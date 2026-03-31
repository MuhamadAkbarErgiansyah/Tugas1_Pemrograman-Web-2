@extends('layouts.landing')

@section('judul', 'Program - Ruang Pesisir Kreatif')

@section('konten')
    <section class="single">
        <h2>Program Utama</h2>
        <p>
            Kami menyiapkan beberapa paket kegiatan untuk berbagai kebutuhan kreator.
            Semua program dirancang praktis, tidak terlalu padat, tapi tetap berdampak.
        </p>

        <ul class="list">
            <li><strong>Paket Basic (1 Hari):</strong> Sesi inspirasi, mini workshop, dan konsultasi karya.</li>
            <li><strong>Paket Pro (3 Hari):</strong> Workshop intensif, mentoring personal, dan review portofolio.</li>
            <li><strong>Paket Tim (Custom):</strong> Cocok untuk komunitas atau organisasi dengan topik khusus.</li>
        </ul>

        <div class="cta" style="margin-top: 1rem;">
            <a href="{{ route('kontak') }}" class="btn btn-primary">Daftar Sekarang</a>
            <a href="{{ route('beranda') }}" class="btn btn-soft">Kembali ke Beranda</a>
        </div>
    </section>
@endsection
