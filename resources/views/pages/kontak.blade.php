@extends('layouts.landing')

@section('judul', 'Kontak - Ruang Pesisir Kreatif')

@section('konten')
    <section class="single">
        <h2>Kontak & Reservasi</h2>
        <p>
            Untuk pendaftaran dan pertanyaan, hubungi kami melalui informasi berikut.
            Halaman ini statis, jadi belum memakai form backend.
        </p>

        <ul class="list">
            <li><strong>Email:</strong> halo@ruangpesisir.id</li>
            <li><strong>WhatsApp:</strong> 0812-3456-7890</li>
            <li><strong>Instagram:</strong> @ruangpesisirkreatif</li>
            <li><strong>Alamat:</strong> Jl. Pantai Kreatif No. 17, Indonesia</li>
        </ul>

        <div class="cta" style="margin-top: 1rem;">
            <a href="{{ route('program') }}" class="btn btn-primary">Lihat Paket Program</a>
            <a href="{{ route('beranda') }}" class="btn btn-soft">Kembali ke Beranda</a>
        </div>
    </section>
@endsection
