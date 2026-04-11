<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>We'll Be Right Back | First United Methodist Church</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700|playfair-display:700,700i" rel="stylesheet" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <style>
        :root {
            --red: #EA0129;
            --teal: #048BA8;
            --teal-dark: #036878;
            --teal-tint: #f2f9fb;
        }
        * { box-sizing: border-box; }
        html, body { margin: 0; padding: 0; }
        body {
            min-height: 100vh;
            font-family: 'Instrument Sans', system-ui, -apple-system, sans-serif;
            color: #111;
            background: #fff;
            display: flex;
            flex-direction: column;
            -webkit-font-smoothing: antialiased;
        }
        .hero {
            background: linear-gradient(to right, var(--teal), var(--teal-dark));
            color: #fff;
            padding: 3rem 1.5rem;
            text-align: center;
        }
        .hero h1 {
            font-size: 1.875rem;
            font-weight: 700;
            letter-spacing: -0.01em;
            margin: 0;
        }
        .hero .divider {
            width: 4rem;
            border: 0;
            border-top: 4px solid rgba(255,255,255,.3);
            margin: 1rem auto 0;
        }
        .hero .code {
            margin: 1rem 0 0;
            font-family: 'Playfair Display', Georgia, serif;
            font-style: italic;
            font-weight: 700;
            font-size: 3.75rem;
            line-height: 1;
        }
        main {
            flex: 1;
            background: var(--teal-tint);
            padding: 4rem 1.5rem;
            display: flex;
            justify-content: center;
        }
        .card {
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: .375rem;
            box-shadow: 0 1px 2px rgba(0,0,0,.04);
            padding: 2rem;
            max-width: 36rem;
            width: 100%;
            text-align: center;
        }
        .card p {
            font-size: 1rem;
            line-height: 1.7;
            color: #404040;
            margin: 0;
        }
        .card .small {
            margin-top: 2rem;
            font-size: .9rem;
            color: #737373;
        }
        .card .small a {
            color: var(--teal);
            text-decoration: none;
            font-weight: 600;
        }
        .card .small a:hover { text-decoration: underline; }
        footer {
            background: #171717;
            color: rgba(255,255,255,.7);
            padding: 1.5rem;
            text-align: center;
            font-size: .875rem;
        }
        @media (min-width: 640px) {
            .hero { padding: 4rem 1.5rem; }
            .hero h1 { font-size: 2.25rem; }
            .hero .code { font-size: 4.5rem; }
            .card { padding: 3rem; }
            .card p { font-size: 1.125rem; }
        }
    </style>
</head>
<body>
    <section class="hero">
        <h1>We'll Be Right Back</h1>
        <hr class="divider">
        <p class="code">503</p>
    </section>

    <main>
        <div class="card">
            <p>{{ $exception->getMessage() ?: "We're making a few updates to the site. Please check back in a little while — we'll be back online shortly." }}</p>
            <p class="small">Need to reach us? Email <a href="mailto:texarkanamethodist@gmail.com">texarkanamethodist@gmail.com</a>.</p>
        </div>
    </main>

    <footer>
        &copy; {{ date('Y') }} First United Methodist Church
    </footer>
</body>
</html>
