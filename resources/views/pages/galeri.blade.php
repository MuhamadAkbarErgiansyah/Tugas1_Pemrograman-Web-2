@extends('layouts.landing')

@section('judul', 'Galeri - Ruang Pesisir Kreatif')

@section('konten')
    <section class="single" style="margin-bottom: 0.9rem;">
        <h2>Galeri Suasana</h2>
        <p>
            Preview visual aktivitas retreat, ruang kelas, dan momen kolaborasi.
            Bagian ini dibuat sederhana tapi tetap enak dilihat.
        </p>
    </section>

    <section class="grid">
        <article class="card">
            <strong>Pagi Kreatif</strong>
            <p>Peserta memulai hari dengan brainstorming ringan dan coffee talk di area terbuka.</p>
        </article>
        <article class="card">
            <strong>Sesi Kelas</strong>
            <p>Materi praktik desain konten dengan pendekatan langsung dan feedback real-time.</p>
        </article>
        <article class="card">
            <strong>Sunset Review</strong>
            <p>Penutupan hari dengan evaluasi karya sambil menikmati suasana sore.</p>
        </article>
    </section>
@endsection
