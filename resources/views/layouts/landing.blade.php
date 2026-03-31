<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul', 'Ruang Pesisir Kreatif')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Prata&display=swap" rel="stylesheet">
    <style>
        :root {
            --dalam: #122428;
            --teal: #2f6d62;
            --emas: #f6b654;
            --krem: #f5eee3;
            --garis: rgba(18, 36, 40, 0.16);
            --kartu: rgba(255, 255, 255, 0.72);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Manrope", sans-serif;
            color: var(--dalam);
            min-height: 100vh;
            background:
                radial-gradient(circle at 88% 15%, rgba(246, 182, 84, 0.34), transparent 36%),
                radial-gradient(circle at 10% 10%, rgba(47, 109, 98, 0.2), transparent 30%),
                linear-gradient(150deg, #f6efe5 0%, #efe4d5 45%, #f7efe6 100%);
            overflow-x: hidden;
        }

        .grain {
            position: fixed;
            inset: 0;
            z-index: -2;
            pointer-events: none;
            opacity: 0.3;
            background-image: radial-gradient(rgba(18, 36, 40, 0.06) 0.65px, transparent 0.65px);
            background-size: 4px 4px;
        }

        .blob {
            position: fixed;
            border-radius: 999px;
            filter: blur(18px);
            opacity: 0.48;
            z-index: -1;
            animation: goyang 10s ease-in-out infinite alternate;
        }

        .blob.a {
            width: 250px;
            height: 250px;
            left: -80px;
            top: 18vh;
            background: rgba(47, 109, 98, 0.25);
        }

        .blob.b {
            width: 290px;
            height: 290px;
            right: -100px;
            bottom: 10vh;
            background: rgba(246, 182, 84, 0.3);
            animation-duration: 12s;
        }

        .wrapper {
            width: min(1120px, 92%);
            margin: 0 auto;
            padding: 2rem 0 1.6rem;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 1.2rem;
        }

        .brand {
            font-family: "Prata", serif;
            font-size: clamp(1.2rem, 2vw, 1.55rem);
            letter-spacing: 0.02em;
        }

        .menu {
            display: flex;
            gap: 0.55rem;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .menu a {
            text-decoration: none;
            color: var(--dalam);
            border: 1px solid var(--garis);
            background: rgba(255, 255, 255, 0.58);
            backdrop-filter: blur(5px);
            padding: 0.54rem 0.88rem;
            border-radius: 999px;
            font-size: 0.9rem;
            font-weight: 700;
            transition: transform 0.2s ease, background 0.2s ease;
        }

        .menu a:hover {
            transform: translateY(-2px);
            background: rgba(255, 255, 255, 0.82);
        }

        .menu a.active {
            background: var(--dalam);
            color: #fff;
            border-color: var(--dalam);
        }

        .hero {
            border: 1px solid var(--garis);
            border-radius: 28px;
            background: linear-gradient(130deg, rgba(255, 255, 255, 0.76), rgba(255, 255, 255, 0.58));
            box-shadow: 0 12px 34px rgba(18, 36, 40, 0.11);
            backdrop-filter: blur(8px);
            overflow: hidden;
            margin-bottom: 0.95rem;
            animation: naik 0.8s ease both;
        }

        .hero-inner {
            padding: clamp(1.2rem, 2.8vw, 2.3rem);
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 1rem;
            align-items: center;
        }

        h1 {
            font-family: "Prata", serif;
            font-size: clamp(2rem, 5vw, 3.6rem);
            line-height: 1.06;
            margin-bottom: 0.9rem;
        }

        .intro {
            line-height: 1.7;
            max-width: 43ch;
            opacity: 0.92;
            margin-bottom: 1rem;
        }

        .cta {
            display: flex;
            gap: 0.65rem;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            font-weight: 700;
            border-radius: 12px;
            padding: 0.78rem 1.1rem;
            border: 1px solid transparent;
            transition: transform 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary {
            background: var(--dalam);
            color: #fff;
            box-shadow: 0 8px 22px rgba(18, 36, 40, 0.2);
        }

        .btn-soft {
            border-color: var(--garis);
            color: var(--dalam);
            background: rgba(255, 255, 255, 0.62);
        }

        .side-card {
            border-radius: 22px;
            background: linear-gradient(160deg, #21484a, #173639);
            color: #fff;
            padding: 1rem;
            transform: rotate(-2deg);
            box-shadow: 0 14px 30px rgba(18, 36, 40, 0.27);
            animation: naik 1.1s ease both;
        }

        .side-card h3 {
            font-family: "Prata", serif;
            margin-bottom: 0.4rem;
        }

        .side-card p {
            opacity: 0.88;
            line-height: 1.55;
            margin-bottom: 0.8rem;
        }

        .bar {
            height: 9px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.2);
            overflow: hidden;
        }

        .bar span {
            display: block;
            width: 80%;
            height: 100%;
            background: linear-gradient(90deg, #f6b654, #ffe1ab);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.85rem;
        }

        .card {
            border: 1px solid var(--garis);
            border-radius: 17px;
            background: var(--kartu);
            backdrop-filter: blur(6px);
            padding: 0.95rem;
            animation: naik 0.85s ease both;
        }

        .card strong {
            display: block;
            margin-bottom: 0.3rem;
            font-size: 1rem;
        }

        .card p {
            line-height: 1.62;
            font-size: 0.92rem;
            opacity: 0.88;
        }

        .single {
            border: 1px solid var(--garis);
            border-radius: 22px;
            background: var(--kartu);
            backdrop-filter: blur(6px);
            padding: clamp(1rem, 2.8vw, 1.8rem);
            line-height: 1.75;
        }

        .single h2 {
            font-family: "Prata", serif;
            margin-bottom: 0.5rem;
            font-size: clamp(1.5rem, 3vw, 2.1rem);
        }

        .list {
            margin-top: 0.7rem;
            display: grid;
            gap: 0.55rem;
        }

        .list li {
            list-style: none;
            border: 1px dashed var(--garis);
            border-radius: 12px;
            padding: 0.65rem 0.8rem;
            background: rgba(255, 255, 255, 0.55);
        }

        footer {
            margin-top: 1.3rem;
            text-align: center;
            font-size: 0.86rem;
            opacity: 0.78;
        }

        @keyframes naik {
            from {
                opacity: 0;
                transform: translateY(14px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes goyang {
            from {
                transform: translateY(-14px);
            }

            to {
                transform: translateY(14px);
            }
        }

        @media (max-width: 930px) {
            .hero-inner {
                grid-template-columns: 1fr;
            }

            .side-card {
                transform: rotate(0deg);
            }

            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="grain"></div>
    <div class="blob a"></div>
    <div class="blob b"></div>

    <div class="wrapper">
        <nav class="nav">
            <div class="brand">Ruang Pesisir Kreatif</div>
            <div class="menu">
                <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('program') }}" class="{{ request()->routeIs('program') ? 'active' : '' }}">Program</a>
                <a href="{{ route('galeri') }}" class="{{ request()->routeIs('galeri') ? 'active' : '' }}">Galeri</a>
                <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak</a>
            </div>
        </nav>

        @yield('konten')

        <footer>
            design by Muhamad Akbar Ergiansyah 23552011411
        </footer>
    </div>
</body>
</html>
