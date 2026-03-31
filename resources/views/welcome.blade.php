<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sunshore Creative Retreat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Prata&display=swap" rel="stylesheet">
    <style>
        :root {
            --sand: #f4ede3;
            --deep: #112427;
            --leaf: #2f6d62;
            --sun: #f6b654;
            --card: rgba(255, 255, 255, 0.7);
            --line: rgba(17, 36, 39, 0.14);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Manrope", sans-serif;
            color: var(--deep);
            background:
                radial-gradient(circle at 88% 18%, rgba(246, 182, 84, 0.34), transparent 36%),
                radial-gradient(circle at 12% 8%, rgba(47, 109, 98, 0.22), transparent 34%),
                linear-gradient(155deg, #f5efe5 0%, #efe5d8 50%, #f6efe8 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }

        .grain {
            position: fixed;
            inset: 0;
            pointer-events: none;
            background-image: radial-gradient(rgba(17, 36, 39, 0.055) 0.65px, transparent 0.65px);
            background-size: 4px 4px;
            opacity: 0.32;
            z-index: -2;
        }

        .shape {
            position: fixed;
            border-radius: 999px;
            filter: blur(18px);
            opacity: 0.55;
            z-index: -1;
            animation: drift 10s ease-in-out infinite alternate;
        }

        .shape.one {
            width: 240px;
            height: 240px;
            background: rgba(47, 109, 98, 0.25);
            left: -80px;
            top: 20vh;
        }

        .shape.two {
            width: 280px;
            height: 280px;
            background: rgba(246, 182, 84, 0.3);
            right: -90px;
            bottom: 12vh;
            animation-duration: 12s;
        }

        .wrapper {
            width: min(1080px, 92%);
            margin: 0 auto;
            padding: 2.3rem 0 2rem;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.2rem;
        }

        .logo {
            font-family: "Prata", serif;
            font-size: clamp(1.3rem, 2vw, 1.65rem);
            letter-spacing: 0.02em;
        }

        .badge {
            font-size: 0.8rem;
            font-weight: 700;
            border: 1px solid var(--line);
            background: rgba(255, 255, 255, 0.58);
            padding: 0.56rem 0.82rem;
            border-radius: 999px;
            backdrop-filter: blur(4px);
        }

        .hero {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 1rem;
            align-items: stretch;
            border: 1px solid var(--line);
            border-radius: 30px;
            background: linear-gradient(130deg, rgba(255, 255, 255, 0.74), rgba(255, 255, 255, 0.55));
            backdrop-filter: blur(8px);
            overflow: hidden;
            box-shadow: 0 12px 40px rgba(17, 36, 39, 0.1);
        }

        .hero-copy,
        .hero-art {
            padding: clamp(1.2rem, 2.8vw, 2.4rem);
        }

        .hero-copy h1 {
            font-family: "Prata", serif;
            font-size: clamp(1.95rem, 5.2vw, 4rem);
            line-height: 1.05;
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
        }

        .hero-copy p {
            max-width: 42ch;
            line-height: 1.7;
            font-size: clamp(0.95rem, 1.35vw, 1.06rem);
            opacity: 0.9;
            margin-bottom: 1.4rem;
        }

        .cta-row {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
        }

        .btn {
            border: 1px solid transparent;
            text-decoration: none;
            padding: 0.8rem 1.1rem;
            border-radius: 11px;
            font-weight: 700;
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        }

        .btn.primary {
            background: var(--deep);
            color: #fff;
            box-shadow: 0 8px 24px rgba(17, 36, 39, 0.24);
        }

        .btn.ghost {
            border-color: var(--line);
            color: var(--deep);
            background: rgba(255, 255, 255, 0.58);
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .hero-art {
            position: relative;
            display: grid;
            place-items: center;
        }

        .art-card {
            width: min(100%, 330px);
            border-radius: 24px;
            padding: 1rem;
            background: linear-gradient(160deg, #21484a, #173639);
            color: #fff;
            box-shadow: 0 14px 34px rgba(17, 36, 39, 0.3);
            transform: rotate(-3deg);
            animation: rise 1.15s ease both;
        }

        .art-card h3 {
            font-family: "Prata", serif;
            font-size: 1.45rem;
            margin-bottom: 0.45rem;
        }

        .art-card p {
            opacity: 0.86;
            line-height: 1.55;
            margin-bottom: 0.85rem;
        }

        .meter {
            border-radius: 999px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.2);
            height: 9px;
        }

        .meter span {
            display: block;
            height: 100%;
            width: 78%;
            background: linear-gradient(90deg, #f6b654, #ffde9f);
        }

        .grid {
            margin-top: 1rem;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.9rem;
        }

        .card {
            border: 1px solid var(--line);
            border-radius: 18px;
            background: var(--card);
            padding: 1rem;
            backdrop-filter: blur(6px);
            animation: rise 0.95s ease both;
        }

        .card:nth-child(2) {
            animation-delay: 0.12s;
        }

        .card:nth-child(3) {
            animation-delay: 0.22s;
        }

        .card strong {
            display: block;
            margin-bottom: 0.35rem;
            font-size: 1.02rem;
        }

        .card p {
            font-size: 0.92rem;
            line-height: 1.6;
            opacity: 0.84;
        }

        footer {
            text-align: center;
            margin-top: 1.4rem;
            font-size: 0.85rem;
            opacity: 0.76;
        }

        @keyframes rise {
            from {
                transform: translateY(16px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes drift {
            from {
                transform: translateY(-16px);
            }

            to {
                transform: translateY(16px);
            }
        }

        @media (max-width: 930px) {
            .hero {
                grid-template-columns: 1fr;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .art-card {
                transform: rotate(0deg);
                width: 100%;
                max-width: 420px;
            }
        }
    </style>
</head>
<body>
    <div class="grain"></div>
    <div class="shape one"></div>
    <div class="shape two"></div>

    <div class="wrapper">
        <header class="topbar">
            <div class="logo">Sunshore Creative Retreat</div>
            <div class="badge">Landing Page</div>
        </header>

        <main>
            <section class="hero">
                <div class="hero-copy">
                    <h1>Escape to the coast, recharge your creative energy.</h1>
                    <p>
                        A warm and calm seaside retreat concept designed for modern creators.
                        Beautiful visuals, clear hierarchy, and smooth motion without making the page feel complex.
                    </p>
                    <div class="cta-row">
                        <a href="#" class="btn primary">Book a Weekend</a>
                        <a href="#" class="btn ghost">View Program</a>
                    </div>
                </div>

                <div class="hero-art">
                    <article class="art-card">
                        <h3>Spring Session</h3>
                        <p>3 days of workshops, morning yoga, and sunset portfolio reviews by the beach.</p>
                        <div class="meter"><span></span></div>
                    </article>
                </div>
            </section>

            <section class="grid">
                <article class="card">
                    <strong>Oceanfront Studio</strong>
                    <p>Natural lighting and handcrafted interior details built to support focused creative sessions.</p>
                </article>

                <article class="card">
                    <strong>Curated Community</strong>
                    <p>Meet designers, photographers, and storytellers in a collaborative and low-pressure environment.</p>
                </article>

                <article class="card">
                    <strong>Balanced Schedule</strong>
                    <p>Structured enough to stay productive, flexible enough to rest, explore, and enjoy the coastline.</p>
                </article>
            </section>
        </main>

        <footer>
            design by Muhamad Akbar Ergiansyah 23552011411
        </footer>
    </div>
</body>
</html>
