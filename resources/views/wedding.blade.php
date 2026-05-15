<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Joel & Stephanie Wedding RSVP</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Great+Vibes&family=Jost:wght@200;300;400&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #f9f5ef;
            --paper: #faf8f3;
            --gold: #a8722a;
            --gold-mid: #c49240;
            --gold-light: #d4aa78;
            --gold-pale: #ead5b0;
            --text: #4a3b2e;
            --muted: #8a7560;
            --warm-white: #fdf9f3;
        }

        * { margin:0; padding:0; box-sizing:border-box; }
        html { scroll-behavior:smooth; }

        body {
            background-color: var(--bg);
            color: var(--text);
            font-family: 'Cormorant Garamond', serif;
            overflow-x: hidden;
        }

        body::after {
            content:''; position:fixed; inset:0;
            background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
            pointer-events:none; z-index:9999; opacity:.5;
        }

        img { width:100%; display:block; }
        a { text-decoration:none; }
        .container    { width:min(1150px,92%); margin:auto; }
        .container-sm { width:min(760px,92%);  margin:auto; }
        .section      { position:relative; padding:8rem 0; overflow:hidden; }
        .center       { text-align:center; }

        .eyebrow {
            font-family:'Jost',sans-serif;
            font-size:.68rem; letter-spacing:.55em;
            text-transform:uppercase; color:var(--gold-mid);
            margin-bottom:1.2rem;
        }
        .title {
            font-size:clamp(3rem,6vw,5rem);
            font-weight:300; color:var(--gold);
            line-height:1; font-style:italic;
        }
        .divider {
            display:flex; align-items:center; justify-content:center;
            gap:.8rem; margin:2rem auto 0;
        }
        .divider::before,.divider::after {
            content:''; height:1px; width:55px;
            background:linear-gradient(90deg,transparent,var(--gold-light),transparent);
        }
        .div-ornament { color:var(--gold-light); font-size:1rem; }

        /* ── FLORAL CORNERS ── */
        .floral { position:absolute; z-index:1; pointer-events:none; }
        .floral-tl { top:0; left:0;  width:clamp(200px,27vw,370px); }
        .floral-br { bottom:0; right:0; width:clamp(200px,27vw,370px); transform:rotate(180deg); }
        .floral-tr { top:0; right:0; width:clamp(170px,22vw,290px); transform:scaleX(-1); }
        .floral-bl { bottom:0; left:0; width:clamp(170px,22vw,290px); transform:scaleY(-1); }

        /* ── GLITTER ── */
        .glitter-canvas { position:absolute; inset:0; pointer-events:none; overflow:hidden; z-index:2; }
        .glitter-dot {
            position:absolute; border-radius:50%; background:var(--gold-light);
            animation:glitterPop ease-in-out infinite alternate;
        }
        @keyframes glitterPop {
            0%   { opacity:.08; transform:scale(.7); }
            100% { opacity:.45; transform:scale(1.3); }
        }

        /* ── FLOATING PETALS ── */
        .petals-canvas { position:absolute; inset:0; pointer-events:none; overflow:hidden; z-index:2; }
        .petal {
            position:absolute; border-radius:50% 0 50% 0; opacity:0;
            animation:floatPetal linear infinite;
        }
        @keyframes floatPetal {
            0%   { opacity:0;  transform:translateY(0)      rotate(0deg); }
            8%   { opacity:.3; }
            92%  { opacity:.2; }
            100% { opacity:0;  transform:translateY(-110vh) rotate(700deg); }
        }

        /* ── HERO ── */
        .hero {
            min-height:100vh;
            display:flex; align-items:center; justify-content:center;
            position:relative; overflow:hidden;
            background:radial-gradient(ellipse 90% 80% at 50% 50%,#fdfaf4 0%,#f4e8d6 100%);
        }

        /* Concentric rings */
        .hero-arc {
            position:absolute; border-radius:50%;
            border:1px solid rgba(196,146,64,.15);
            pointer-events:none; z-index:1;
        }
        .hero-arc-1 { width:700px; height:700px; top:50%; left:50%; transform:translate(-50%,-50%); }
        .hero-arc-2 { width:540px; height:540px; top:50%; left:50%; transform:translate(-50%,-50%); }
        .hero-arc-3 { width:380px; height:380px; top:50%; left:50%; transform:translate(-50%,-50%); }

        /* Watercolor polygon SVG */
        .hero-polygon { position:absolute; pointer-events:none; z-index:1; }
        .hero-polygon-left  { left:-6%; top:50%; transform:translateY(-54%) rotate(-5deg); width:clamp(240px,28vw,400px); opacity:.65; }
        .hero-polygon-right { right:-6%; top:50%; transform:translateY(-46%) rotate(7deg); width:clamp(240px,28vw,400px); opacity:.58; }

        .hero-content { position:relative; z-index:5; text-align:center; padding:3rem 2rem; }

        /* Monogram ring */
        .monogram-ring {
            width:76px; height:76px; border-radius:50%;
            border:1px solid rgba(196,146,64,.38);
            display:inline-flex; align-items:center; justify-content:center;
            margin-bottom:1.6rem; position:relative;
        }
        .monogram-ring::before {
            content:''; position:absolute; inset:5px; border-radius:50%;
            border:1px solid rgba(196,146,64,.18);
        }

        .save-date {
            font-family:'Jost',sans-serif;
            font-size:.72rem; letter-spacing:.6em;
            text-transform:uppercase; color:var(--gold-mid); margin-bottom:2rem;
        }
        .names {
            font-family:'Great Vibes',cursive;
            font-size:clamp(5.5rem,13vw,10rem);
            color:var(--gold); line-height:.9; font-weight:400;
        }
        .ampersand-wrap { margin:1.2rem 0; }
        .ampersand {
            font-family:'Cormorant Garamond',serif;
            font-size:2rem; color:var(--gold-mid);
            font-style:italic; font-weight:300;
        }
        .hero-tagline {
            margin-top:2.2rem; color:var(--muted);
            font-size:1.12rem; font-style:italic; font-weight:300;
            line-height:2; letter-spacing:.03em;
        }
        .date-badge {
            display:inline-block; margin-top:1.8rem;
            padding:.9rem 2.8rem;
            border-top:1px solid var(--gold-pale);
            border-bottom:1px solid var(--gold-pale);
            position:relative;
        }
        .date-badge::before,.date-badge::after {
            content:'✦'; color:var(--gold-light); font-size:.55rem;
            position:absolute; top:50%; transform:translateY(-50%);
        }
        .date-badge::before { left:.8rem; }
        .date-badge::after  { right:.8rem; }
        .hero-date p { font-size:1.3rem; font-weight:400; color:var(--text); letter-spacing:.05em; }
        .hero-date p:last-child { font-size:1.05rem; margin-top:.4rem; color:var(--muted); font-style:italic; }

        .btn {
            display:inline-block; margin-top:3rem;
            border:1px solid var(--gold); color:var(--gold);
            padding:1.1rem 3.5rem;
            font-family:'Jost',sans-serif; font-size:.68rem;
            letter-spacing:.35em; text-transform:uppercase;
            transition:all .45s ease;
            position:relative; overflow:hidden; background:transparent; cursor:pointer;
        }
        .btn span { position:relative; z-index:1; }
        .btn::before {
            content:''; position:absolute; inset:0; background:var(--gold);
            transform:scaleX(0); transform-origin:left;
            transition:transform .45s cubic-bezier(.77,0,.18,1);
        }
        .btn:hover { color:white; }
        .btn:hover::before { transform:scaleX(1); }

        /* ── SECTION ORNATE FRAME ── */
        .section-frame {
            position:absolute; inset:2.5rem;
            border:1px solid rgba(196,146,64,.09);
            pointer-events:none; z-index:0;
        }
        .section-frame::before,.section-frame::after {
            content:''; position:absolute;
            width:22px; height:22px;
            border-color:var(--gold-light); border-style:solid; opacity:.45;
        }
        .section-frame::before { top:-2px; left:-2px; border-width:2px 0 0 2px; }
        .section-frame::after  { bottom:-2px; right:-2px; border-width:0 2px 2px 0; }

        /* ── TIMELINE ── */
        .timeline {
            margin-top:5rem; display:grid;
            grid-template-columns:repeat(3,1fr); gap:0; position:relative;
        }
        .timeline::before {
            content:''; position:absolute; top:1.35rem; left:16.66%; right:16.66%; height:1px;
            background:linear-gradient(90deg,transparent,var(--gold-pale) 30%,var(--gold-pale) 70%,transparent);
        }
        .timeline-item { text-align:center; padding:0 2.5rem; position:relative; }
        .timeline-node {
            width:12px; height:12px;
            border:1.5px solid var(--gold); background:var(--warm-white);
            transform:rotate(45deg); margin:0 auto 2.2rem; position:relative; z-index:1;
        }
        .timeline-node::after {
            content:''; position:absolute; inset:-5px;
            border:1px solid rgba(196,146,64,.28); transform:rotate(0deg);
        }
        .timeline-title { font-size:1.9rem; color:var(--gold); margin-bottom:.8rem; font-style:italic; font-weight:400; }
        .timeline-text { line-height:1.9; color:var(--muted); font-size:1.05rem; }

        /* ── LOVE QUOTE BAND ── */
        .quote-band {
            padding:6rem 0; text-align:center;
            background:linear-gradient(135deg,#f5ebe0 0%,#faf5ed 50%,#f5ebe0 100%);
            position:relative; overflow:hidden;
        }
        .quote-text {
            font-family:'Great Vibes',cursive;
            font-size:clamp(2rem,5vw,3.5rem);
            color:var(--gold); line-height:1.5;
            position:relative; z-index:2; padding:0 2rem;
        }
        .quote-attr {
            margin-top:1.5rem;
            font-family:'Jost',sans-serif; font-size:.65rem;
            letter-spacing:.4em; text-transform:uppercase; color:var(--muted);
            position:relative; z-index:2;
        }

        /* ── GALLERY ── */
        .gallery { margin-top:5rem; display:grid; grid-template-columns:1.2fr 1fr; gap:.7rem; }
        .gallery-col { display:grid; gap:.7rem; }
        .gallery-img-wrap { overflow:hidden; position:relative; background:#ede6da; }
        .gallery-img-wrap img {
            height:100%; object-fit:cover;
            transition:transform .9s cubic-bezier(.25,.46,.45,.94), filter .9s ease;
            filter:brightness(.97) saturate(.92) sepia(.05);
        }
        .gallery-img-wrap:hover img { transform:scale(1.07); filter:brightness(1.02) saturate(1.05) sepia(0); }
        .gallery-img-wrap::before {
            content:''; position:absolute; inset:0; z-index:1;
            background:linear-gradient(to bottom,transparent 50%,rgba(74,59,46,.5));
            opacity:0; transition:opacity .5s ease;
        }
        .gallery-img-wrap:hover::before { opacity:1; }
        .img-caption {
            position:absolute; bottom:0; left:0; right:0; z-index:2;
            padding:1.8rem 1.5rem 1.2rem; color:rgba(255,255,255,.92);
            font-size:1.05rem; font-style:italic; letter-spacing:.05em;
            transform:translateY(100%); transition:transform .5s cubic-bezier(.25,.46,.45,.94);
        }
        .gallery-img-wrap:hover .img-caption { transform:translateY(0); }
        .corner-tl,.corner-br {
            position:absolute; z-index:3; width:20px; height:20px;
            border-color:rgba(212,170,120,.7); border-style:solid;
            opacity:0; transition:opacity .4s ease,transform .4s ease;
        }
        .corner-tl { top:10px; left:10px; border-width:2px 0 0 2px; transform:translate(-4px,-4px); }
        .corner-br { bottom:10px; right:10px; border-width:0 2px 2px 0; transform:translate(4px,4px); }
        .gallery-img-wrap:hover .corner-tl,
        .gallery-img-wrap:hover .corner-br { opacity:1; transform:translate(0,0); }

        /* ── VENUE ── */
        .venue { margin-top:5rem; text-align:center; }
        .venue-title { font-size:clamp(2.5rem,5vw,3.8rem); color:var(--gold); margin-bottom:1.2rem; font-style:italic; font-weight:300; }
        .venue-description { max-width:680px; margin:auto; line-height:2.1; color:var(--muted); font-size:1.1rem; }
        .venue-time {
            display:inline-block; margin-top:1.8rem;
            font-family:'Jost',sans-serif; font-size:.68rem;
            color:var(--gold); letter-spacing:.35em; text-transform:uppercase;
            border:1px solid var(--gold-pale); padding:.65rem 2rem; position:relative;
        }
        .venue-time::before,.venue-time::after {
            content:'✦'; font-size:.5rem;
            position:absolute; top:50%; transform:translateY(-50%); color:var(--gold-light);
        }
        .venue-time::before { left:.5rem; }
        .venue-time::after  { right:.5rem; }
        .venue-images { margin-top:3rem; display:grid; gap:.7rem; }
        .venue-img-wrap { overflow:hidden; position:relative; background:#ede6da; }
        .venue-img-wrap img {
            object-fit:cover;
            transition:transform 1s cubic-bezier(.25,.46,.45,.94),filter 1s ease;
            filter:brightness(.96) saturate(.88) sepia(.04);
        }
        .venue-img-wrap:hover img { transform:scale(1.04); filter:brightness(1.02) saturate(1.05) sepia(0); }
        .venue-overlay {
            position:absolute; inset:0; z-index:1;
            display:flex; align-items:center; justify-content:center;
            background:rgba(74,59,46,0); transition:background .5s ease;
        }
        .venue-img-wrap:hover .venue-overlay { background:rgba(74,59,46,.1); }
        .venue-overlay span {
            font-family:'Jost',sans-serif; font-size:.62rem;
            letter-spacing:.45em; text-transform:uppercase; color:white;
            opacity:0; transform:translateY(8px); transition:all .5s ease .1s;
        }
        .venue-img-wrap:hover .venue-overlay span { opacity:1; transform:translateY(0); }
        .venue-img-wrap::after {
            content:''; position:absolute; inset:8px; z-index:2;
            border:1px solid rgba(212,170,120,0); transition:border-color .5s ease; pointer-events:none;
        }
        .venue-img-wrap:hover::after { border-color:rgba(212,170,120,.3); }

        /* ── COUNTDOWN ── */
        .countdown-band {
            padding:6rem 0; text-align:center;
            background:linear-gradient(135deg,#f9f5ef 0%,#f2e8d9 100%);
            position:relative; overflow:hidden;
        }
        .countdown-grid {
            display:inline-flex; gap:2.5rem;
            margin-top:3rem; flex-wrap:wrap; justify-content:center;
        }
        .count-item { text-align:center; min-width:80px; }
        .count-num {
            font-family:'Cormorant Garamond',serif;
            font-size:clamp(3rem,6vw,5rem); color:var(--gold); font-weight:300; line-height:1;
        }
        .count-label {
            font-family:'Jost',sans-serif; font-size:.6rem;
            letter-spacing:.35em; text-transform:uppercase; color:var(--muted);
            margin-top:.4rem; display:block;
        }
        .count-sep { font-size:2.5rem; color:var(--gold-pale); align-self:center; padding-bottom:.5rem; }

        /* ── RSVP ── */
        .rsvp-wrap { background:var(--warm-white); position:relative; overflow:hidden; }
        .rsvp-box {
            max-width:680px; margin:4rem auto 0;
            background:rgba(255,255,255,.72);
            border:1px solid rgba(196,146,64,.18);
            padding:4.5rem 4rem; backdrop-filter:blur(6px); position:relative;
        }
        .rsvp-box::before {
            content:''; position:absolute; top:10px; left:10px; right:10px; bottom:10px;
            border:1px solid rgba(196,146,64,.1); pointer-events:none;
        }
        .form-group { margin-bottom:2.2rem; }
        label {
            display:block; margin-bottom:.8rem;
            font-family:'Jost',sans-serif; font-size:.62rem;
            letter-spacing:.38em; text-transform:uppercase; color:var(--muted);
        }
        .input {
            width:100%; border:none; border-bottom:1px solid rgba(196,146,64,.28);
            background:transparent; padding:.85rem 0;
            font-size:1.1rem; font-family:'Cormorant Garamond',serif;
            color:var(--text); transition:border-color .3s ease;
        }
        .input:focus { outline:none; border-color:var(--gold); }
        textarea.input { resize:none; height:110px; }
        .attendance { display:flex; gap:.8rem; }
        .choice {
            flex:1; padding:1.1rem;
            border:1px solid rgba(196,146,64,.28); background:transparent; color:var(--gold);
            cursor:pointer; font-family:'Jost',sans-serif; font-size:.62rem;
            letter-spacing:.25em; text-transform:uppercase; transition:all .35s ease;
        }
        .choice.active,.choice:hover { background:var(--gold); color:white; border-color:var(--gold); }
        .conditional { display:none; }
        .conditional.show { display:block; }
        select.input { appearance:none; cursor:pointer; }

        /* ── FOOTER ── */
        footer {
            padding:7rem 1rem 5rem; text-align:center;
            background:linear-gradient(180deg,#f5ebe0 0%,#fdf9f3 100%);
            position:relative; overflow:hidden;
        }
        .footer-names { font-family:'Great Vibes',cursive; font-size:clamp(3rem,8vw,5.5rem); color:var(--gold); line-height:1; }
        .footer-ornament {
            margin:2rem auto; display:flex; align-items:center; justify-content:center; gap:1rem;
        }
        .footer-ornament::before,.footer-ornament::after {
            content:''; width:80px; height:1px;
            background:linear-gradient(90deg,transparent,var(--gold-light));
        }
        .footer-ornament::after { transform:scaleX(-1); }
        .footer-ornament-icon { color:var(--gold-light); font-size:1.4rem; }
        .footer-date { font-family:'Jost',sans-serif; color:var(--muted); letter-spacing:.32em; text-transform:uppercase; font-size:.68rem; }
        .footer-note { margin-top:1.5rem; font-size:1.1rem; color:var(--muted); font-style:italic; }

        /* ── MUSIC BTN ── */
        .music-btn {
            position:fixed; bottom:1.8rem; right:1.8rem;
            width:48px; height:48px; border-radius:50%;
            border:1px solid rgba(196,146,64,.38);
            background:rgba(253,249,244,.92); color:var(--gold);
            display:flex; align-items:center; justify-content:center;
            cursor:pointer; z-index:9998; backdrop-filter:blur(8px);
            transition:all .3s ease; font-size:1.15rem;
        }
        .music-btn:hover { background:var(--gold); color:white; border-color:var(--gold); }
        .music-btn.playing { animation:pulse 2s ease-out infinite; }
        @keyframes pulse {
            0%   { box-shadow:0 0 0 0 rgba(168,114,42,.35); }
            70%  { box-shadow:0 0 0 14px rgba(168,114,42,0); }
            100% { box-shadow:0 0 0 0 rgba(168,114,42,0); }
        }

        /* ── REVEAL ── */
        .reveal { opacity:0; transform:translateY(32px); transition:opacity .9s cubic-bezier(.16,1,.3,1),transform .9s cubic-bezier(.16,1,.3,1); }
        .reveal.active { opacity:1; transform:translateY(0); }
        .reveal-delay-1 { transition-delay:.12s; }
        .reveal-delay-2 { transition-delay:.24s; }
        .reveal-delay-3 { transition-delay:.36s; }
        .reveal-delay-4 { transition-delay:.48s; }

        .bg-warm  { background:#faf6f0; }
        .bg-paper { background:var(--warm-white); }

        @media(max-width:768px){
            .gallery { grid-template-columns:1fr; }
            .timeline { grid-template-columns:1fr; gap:3rem; }
            .timeline::before { display:none; }
            .attendance { flex-direction:column; }
            .rsvp-box { padding:2.5rem 1.6rem; }
            .hero-arc-1,.hero-arc-2,.hero-arc-3 { display:none; }
            .countdown-grid { gap:1.5rem; }
            .hero-polygon { display:none; }
        }
    </style>
</head>
<body>

    <button class="music-btn" id="musicButton" title="Toggle Music">♫</button>
    <audio id="weddingMusic" src="{{ asset('wedding-assets/music/tahanan.mp3') }}" loop></audio>

    <!-- ══════════ HERO ══════════ -->
    <section class="hero">

        <div class="hero-arc hero-arc-1"></div>
        <div class="hero-arc hero-arc-2"></div>
        <div class="hero-arc hero-arc-3"></div>

        {{-- <img src="{{ asset('wedding-assets/images/floral-top-left.png') }}"    class="floral floral-tl" aria-hidden="true">
        <img src="{{ asset('wedding-assets/images/floral-bottom-right.png') }}" class="floral floral-br" aria-hidden="true">
        <img src="{{ asset('wedding-assets/images/floral-top-left.png') }}"    class="floral floral-tr" aria-hidden="true">
        <img src="{{ asset('wedding-assets/images/floral-bottom-right.png') }}" class="floral floral-bl" aria-hidden="true"> --}}

        <!-- Left polygon -->
        <svg class="hero-polygon hero-polygon-left" viewBox="0 0 380 420" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <filter id="blurL"><feGaussianBlur stdDeviation="14"/></filter>
                <radialGradient id="wL" cx="50%" cy="50%" r="50%">
                    <stop offset="0%"   stop-color="#e2b97a" stop-opacity=".5"/>
                    <stop offset="100%" stop-color="#f0d5b0" stop-opacity="0"/>
                </radialGradient>
            </defs>
            <ellipse cx="185" cy="210" rx="155" ry="140" fill="url(#wL)" filter="url(#blurL)"/>
            <polygon points="120,60 280,45 340,180 300,340 150,355 60,240 80,100" stroke="#b8925a" stroke-width="1.4" fill="none" opacity=".6"/>
            <polygon points="130,75 270,62 328,192 291,328 160,342 72,234 90,112" stroke="#c9a86e" stroke-width=".7" fill="none" opacity=".35"/>
        </svg>

        <!-- Right polygon -->
        <svg class="hero-polygon hero-polygon-right" viewBox="0 0 380 420" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <filter id="blurR"><feGaussianBlur stdDeviation="14"/></filter>
                <radialGradient id="wR" cx="50%" cy="50%" r="50%">
                    <stop offset="0%"   stop-color="#d9a86a" stop-opacity=".42"/>
                    <stop offset="100%" stop-color="#edd8b8" stop-opacity="0"/>
                </radialGradient>
            </defs>
            <ellipse cx="195" cy="210" rx="148" ry="135" fill="url(#wR)" filter="url(#blurR)"/>
            <polygon points="120,60 280,45 340,180 300,340 150,355 60,240 80,100" stroke="#b8925a" stroke-width="1.4" fill="none" opacity=".55"/>
            <polygon points="130,75 270,62 328,192 291,328 160,342 72,234 90,112" stroke="#c9a86e" stroke-width=".7" fill="none" opacity=".3"/>
        </svg>

        <div class="glitter-canvas" id="glitterCanvas" aria-hidden="true"></div>
        <div class="petals-canvas"  id="petalsCanvas"  aria-hidden="true"></div>

        <div class="hero-content">

            <div class="monogram-ring reveal">
                <svg viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" width="36" height="36">
                    <text x="50%" y="56%" dominant-baseline="middle" text-anchor="middle"
                          font-family="Great Vibes, cursive" font-size="18" fill="#a8722a">J&amp;S</text>
                </svg>
            </div>

            <p class="save-date reveal">Save The Date</p>
            <h1 class="names reveal reveal-delay-1">Joel</h1>
            <div class="ampersand-wrap reveal reveal-delay-2"><span class="ampersand">&amp;</span></div>
            <h1 class="names reveal reveal-delay-2">Stephanie</h1>

            <p class="hero-tagline reveal reveal-delay-3">
                Together With Their Families<br>
                Request The Pleasure of Your Company
            </p>

            <div class="date-badge reveal reveal-delay-3">
                <div class="hero-date">
                    <p>Wednesday, the Seventh of October</p>
                    <p>Two Thousand Twenty-Six</p>
                </div>
            </div>

            <a href="#rsvp" class="btn reveal reveal-delay-4"><span>RSVP Now</span></a>
        </div>
    </section>

    <!-- ══════════ TIMELINE ══════════ -->
    <section class="section bg-warm">
        <div class="section-frame"></div>
        <img src="{{ asset('wedding-assets/images/floral-top-left.png') }}"    class="floral floral-tl" style="width:140px;opacity:.28;" aria-hidden="true">
        <img src="{{ asset('wedding-assets/images/floral-bottom-right.png') }}" class="floral floral-br" style="width:140px;opacity:.28;" aria-hidden="true">

        <div class="container">
            <div class="center reveal">
                <p class="eyebrow">The Celebration</p>
                <h2 class="title">Wedding Timeline</h2>
                <div class="divider"><span class="div-ornament">✦</span></div>
            </div>
            <div class="timeline">
                <div class="timeline-item reveal reveal-delay-1">
                    <div class="timeline-node"></div>
                    <h3 class="timeline-title">The Ceremony</h3>
                    <p class="timeline-text">Two o'clock in the afternoon<br>St. John Vianney Church<br>Lalaan II, Silang, Cavite</p>
                </div>
                <div class="timeline-item reveal reveal-delay-2">
                    <div class="timeline-node"></div>
                    <h3 class="timeline-title">The Reception</h3>
                    <p class="timeline-text">Following the ceremony<br>Fruella's Tagaytay<br>Lalaan II, Silang, Cavite</p>
                </div>
                <div class="timeline-item reveal reveal-delay-3">
                    <div class="timeline-node"></div>
                    <h3 class="timeline-title">The Date</h3>
                    <p class="timeline-text">Wednesday<br>October 7, 2026</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════ LOVE QUOTE ══════════ -->
    <section class="quote-band">
        <img src="{{ asset('wedding-assets/images/floral-top-left.png') }}"    class="floral floral-tl" style="width:150px;opacity:.35;" aria-hidden="true">
        <img src="{{ asset('wedding-assets/images/floral-bottom-right.png') }}" class="floral floral-br" style="width:150px;opacity:.35;" aria-hidden="true">

        <svg style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:min(480px,80vw);opacity:.15;" viewBox="0 0 400 300" fill="none">
            <polygon points="200,18 370,108 340,268 78,278 28,128" stroke="#b8925a" stroke-width="1.5" fill="rgba(232,205,160,.22)"/>
            <polygon points="200,32 354,113 326,256 92,266 43,130"  stroke="#c9a86e" stroke-width=".8" fill="none"/>
        </svg>

        <div class="container-sm" style="position:relative;z-index:2;">
            <p class="quote-text reveal">"Two souls, one heartbeat —<br>a love story written in the stars"</p>
            <p class="quote-attr reveal reveal-delay-1">Joel &amp; Stephanie · October 2026</p>
        </div>
    </section>

    <!-- ══════════ GALLERY ══════════ -->
    <section class="section bg-paper">
        <img src="{{ asset('wedding-assets/images/floral-top-left.png') }}"    class="floral floral-tr" style="width:155px;opacity:.25;" aria-hidden="true">
        <img src="{{ asset('wedding-assets/images/floral-bottom-right.png') }}" class="floral floral-bl" style="width:155px;opacity:.25;" aria-hidden="true">

        <div class="container">
            <div class="center reveal">
                <p class="eyebrow">A Glimpse of</p>
                <h2 class="title">Our Celebration</h2>
                <div class="divider"><span class="div-ornament">✦</span></div>
            </div>
            <div class="gallery">
                <div class="gallery-col">
                    <div class="gallery-img-wrap reveal">
                        <img src="{{ asset('wedding-assets/images/gallery1.jpg') }}" alt="Gallery 1">
                        <div class="corner-tl"></div><div class="corner-br"></div>
                        <div class="img-caption">A moment of joy</div>
                    </div>
                    <div class="gallery-img-wrap reveal reveal-delay-2">
                        <img src="{{ asset('wedding-assets/images/gallery2.jpg') }}" alt="Gallery 2">
                        <div class="corner-tl"></div><div class="corner-br"></div>
                        <div class="img-caption">Together forever</div>
                    </div>
                </div>
                <div class="gallery-col">
                    <div class="gallery-img-wrap reveal reveal-delay-1">
                        <img src="{{ asset('wedding-assets/images/gallery3.jpg') }}" alt="Gallery 3">
                        <div class="corner-tl"></div><div class="corner-br"></div>
                        <div class="img-caption">Our love story</div>
                    </div>
                    <div class="gallery-img-wrap reveal reveal-delay-3">
                        <img src="{{ asset('wedding-assets/images/gallery4.jpg') }}" alt="Gallery 4">
                        <div class="corner-tl"></div><div class="corner-br"></div>
                        <div class="img-caption">Into forever</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════ CEREMONY ══════════ -->
    <section class="section bg-warm">
        <div class="section-frame"></div>
        <img src="{{ asset('wedding-assets/images/floral-top-left.png') }}"    class="floral floral-tl" style="width:148px;opacity:.28;" aria-hidden="true">
        <img src="{{ asset('wedding-assets/images/floral-bottom-right.png') }}" class="floral floral-br" style="width:148px;opacity:.28;" aria-hidden="true">

        <div class="container">
            <div class="venue reveal">
                <p class="eyebrow">The Ceremony</p>
                <h2 class="venue-title">St. John Vianney Church</h2>
                <p class="venue-description">Our love story begins its new chapter in the beautiful and sacred St. John Vianney Church. Join us as we exchange our vows before God, family, and friends in an intimate and blessed ceremony.</p>
                <div><span class="venue-time">2:00 PM · October 7, 2026</span></div>
                <div class="venue-images">
                    <div class="venue-img-wrap">
                        <img src="{{ asset('wedding-assets/images/church.jpg') }}" alt="Church exterior">
                        <div class="venue-overlay"><span>St. John Vianney Church</span></div>
                    </div>
                    {{-- <div class="venue-img-wrap">
                        <img src="{{ asset('wedding-assets/images/church1.jpg') }}" alt="Church interior">
                        <div class="venue-overlay"><span>The Ceremony</span></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════ RECEPTION ══════════ -->
    <section class="section bg-paper">
        <img src="{{ asset('wedding-assets/images/floral-top-left.png') }}"    class="floral floral-tr" style="width:150px;opacity:.25;" aria-hidden="true">
        <img src="{{ asset('wedding-assets/images/floral-bottom-right.png') }}" class="floral floral-bl" style="width:150px;opacity:.25;" aria-hidden="true">

        <div class="container">
            <div class="venue reveal">
                <p class="eyebrow">The Reception</p>
                <h2 class="venue-title">Fruella's Tagaytay</h2>
                <p class="venue-description">After the ceremony, we invite you to celebrate with us at the stunning Fruella's Tagaytay. Enjoy an evening of dining, dancing, and unforgettable memories surrounded by lush greenery and cool mountain air.</p>
                <div class="venue-images">
                    <div class="venue-img-wrap">
                        <img src="{{ asset('wedding-assets/images/reception1.jpg') }}" alt="Reception venue">
                        <div class="venue-overlay"><span>Fruella's Tagaytay</span></div>
                    </div>
                    {{-- <div class="venue-img-wrap">
                        <img src="{{ asset('wedding-assets/images/reception2.jpg') }}" alt="Reception setup">
                        <div class="venue-overlay"><span>An Evening to Remember</span></div>
                    </div>
                    <div class="venue-img-wrap">
                        <img src="{{ asset('wedding-assets/images/reception3.jpg') }}" alt="Reception decor">
                        <div class="venue-overlay"><span>Celebrate With Us</span></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════ COUNTDOWN ══════════ -->
    <section class="countdown-band">
        <img src="{{ asset('wedding-assets/images/floral-top-left.png') }}"    class="floral floral-tl" style="width:148px;opacity:.32;" aria-hidden="true">
        <img src="{{ asset('wedding-assets/images/floral-bottom-right.png') }}" class="floral floral-br" style="width:148px;opacity:.32;" aria-hidden="true">

        <svg style="position:absolute;right:4%;bottom:4%;width:190px;opacity:.1;" viewBox="0 0 280 280" fill="none">
            <polygon points="140,15 258,82 258,198 140,265 22,198 22,82" stroke="#b8925a" stroke-width="1.5" fill="rgba(232,205,160,.28)"/>
        </svg>

        <div class="container" style="position:relative;z-index:2;">
            <div class="center reveal">
                <p class="eyebrow">Counting Down to</p>
                <h2 class="title">The Big Day</h2>
                <div class="divider"><span class="div-ornament">✦</span></div>
            </div>
            <div class="countdown-grid reveal reveal-delay-1" id="countdown">
                <div class="count-item"><div class="count-num" id="cnt-days">—</div><span class="count-label">Days</span></div>
                <div class="count-sep">·</div>
                <div class="count-item"><div class="count-num" id="cnt-hours">—</div><span class="count-label">Hours</span></div>
                <div class="count-sep">·</div>
                <div class="count-item"><div class="count-num" id="cnt-mins">—</div><span class="count-label">Minutes</span></div>
                <div class="count-sep">·</div>
                <div class="count-item"><div class="count-num" id="cnt-secs">—</div><span class="count-label">Seconds</span></div>
            </div>
        </div>
    </section>

    <!-- ══════════ RSVP ══════════ -->
    <section class="section rsvp-wrap" id="rsvp">
        <img src="{{ asset('wedding-assets/images/floral-top-left.png') }}"    class="floral floral-tl" style="width:175px;opacity:.28;" aria-hidden="true">
        <img src="{{ asset('wedding-assets/images/floral-bottom-right.png') }}" class="floral floral-br" style="width:175px;opacity:.28;" aria-hidden="true">
        <img src="{{ asset('wedding-assets/images/floral-top-left.png') }}"    class="floral floral-tr" style="width:135px;opacity:.18;" aria-hidden="true">
        <img src="{{ asset('wedding-assets/images/floral-bottom-right.png') }}" class="floral floral-bl" style="width:135px;opacity:.18;" aria-hidden="true">

        <svg style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:min(680px,90vw);opacity:.055;" viewBox="0 0 600 500" fill="none">
            <polygon points="300,20 560,150 520,420 100,440 30,170" stroke="#b8925a" stroke-width="2" fill="rgba(232,205,160,.4)"/>
        </svg>

        <div class="container-sm">
            <div class="center reveal">
                <p class="eyebrow">We Hope You Can Make It</p>
                <h2 class="title">Kindly Respond</h2>
                <div class="divider"><span class="div-ornament">✦</span></div>
            </div>

            <div class="rsvp-box reveal">
                <form method="POST" action="{{ route('wedding.rsvp.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" class="input" required placeholder="Your full name">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="input" placeholder="your@email.com">
                    </div>
                    <div class="form-group">
                        <label>Will You Attend?</label>
                        <input type="hidden" id="attending" name="attending">
                        <div class="attendance">
                            <button type="button" class="choice" data-attending="yes">Joyfully Accept</button>
                            <button type="button" class="choice" data-attending="no">Respectfully Decline</button>
                        </div>
                    </div>
                    <div id="guestFields" class="conditional">
                        <div class="form-group">
                            <label>Number of Guests</label>
                            <select name="guests" class="input">
                                <option value="1">1 Guest</option>
                                <option value="2">2 Guests</option>
                                {{-- <option value="3">3 Guests</option>
                                <option value="4">4 Guests</option> --}}
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Message for the Couple</label>
                        <textarea name="message" class="input" placeholder="Share your wishes..."></textarea>
                    </div>
                    <div class="center">
                        <button type="submit" class="btn"><span>Send RSVP</span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- ══════════ FOOTER ══════════ -->
    <footer>
        <img src="{{ asset('wedding-assets/images/floral-top-left.png') }}"    class="floral floral-tl" style="width:140px;opacity:.25;" aria-hidden="true">
        <img src="{{ asset('wedding-assets/images/floral-bottom-right.png') }}" class="floral floral-br" style="width:140px;opacity:.25;" aria-hidden="true">

        <svg style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);width:min(400px,70vw);opacity:.06;" viewBox="0 0 400 360" fill="none">
            <polygon points="200,20 370,130 330,310 100,320 30,150" stroke="#b8925a" stroke-width="1.8" fill="rgba(232,205,160,.35)"/>
        </svg>

        <div style="position:relative;z-index:2;">
            <h2 class="footer-names">Joel &amp; Stephanie</h2>
            <div class="footer-ornament"><span class="footer-ornament-icon">✦</span></div>
            <p class="footer-date">October 7, 2026 &nbsp;·&nbsp; Tagaytay, Philippines</p>
            <p class="footer-note">With love, joy, and everlasting gratitude</p>
        </div>
    </footer>

    <script>
        /* ── GLITTER ── */
        const gc = document.getElementById('glitterCanvas');
        for (let i = 0; i < 55; i++) {
            const d = document.createElement('div');
            d.className = 'glitter-dot';
            const sz = Math.random() * 3 + 1;
            d.style.cssText = `left:${Math.random()*100}%;top:${Math.random()*100}%;width:${sz}px;height:${sz}px;animation-duration:${Math.random()*3+2}s;animation-delay:${Math.random()*4}s;`;
            gc.appendChild(d);
        }

        /* ── PETALS ── */
        const pc = document.getElementById('petalsCanvas');
        const petalColors = ['rgba(220,185,148,.4)','rgba(240,210,175,.35)','rgba(200,165,120,.3)','rgba(235,200,160,.38)'];
        for (let i = 0; i < 18; i++) {
            const p = document.createElement('div');
            p.className = 'petal';
            const w = Math.random()*10+5, h = w*(Math.random()*.6+.5);
            p.style.cssText = `left:${Math.random()*100}%;bottom:-5%;width:${w}px;height:${h}px;background:${petalColors[Math.floor(Math.random()*4)]};animation-duration:${Math.random()*15+12}s;animation-delay:${Math.random()*12}s;`;
            pc.appendChild(p);
        }

        /* ── REVEAL ── */
        const observer = new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('active'); });
        }, { threshold:.1 });
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        /* ── RSVP ── */
        document.querySelectorAll('.choice').forEach(c => {
            c.addEventListener('click', () => {
                document.querySelectorAll('.choice').forEach(b => b.classList.remove('active'));
                c.classList.add('active');
                document.getElementById('attending').value = c.dataset.attending;
                document.getElementById('guestFields').classList.toggle('show', c.dataset.attending === 'yes');
            });
        });

        /* ── COUNTDOWN ── */
        function updateCountdown() {
            const diff = new Date('2026-10-07T14:00:00+08:00') - new Date();
            if (diff <= 0) return;
            document.getElementById('cnt-days').textContent  = Math.floor(diff / 86400000);
            document.getElementById('cnt-hours').textContent = Math.floor((diff % 86400000) / 3600000);
            document.getElementById('cnt-mins').textContent  = Math.floor((diff % 3600000) / 60000);
            document.getElementById('cnt-secs').textContent  = Math.floor((diff % 60000) / 1000);
        }
        updateCountdown(); setInterval(updateCountdown, 1000);

        /* ── MUSIC AUTOPLAY ── */
        const audio = document.getElementById('weddingMusic');
        const btn   = document.getElementById('musicButton');
        let playing = false;
        audio.volume = .45;
        function setPlaying(v) { playing=v; btn.textContent=v?'♬':'♫'; btn.classList.toggle('playing',v); }
        function tryPlay() { audio.play().then(()=>setPlaying(true)).catch(()=>setPlaying(false)); }
        window.addEventListener('load', tryPlay);
        const fi = () => { if (!playing) tryPlay(); ['click','scroll','touchstart'].forEach(ev=>document.removeEventListener(ev,fi)); };
        ['click','scroll','touchstart'].forEach(ev => document.addEventListener(ev, fi));
        btn.addEventListener('click', e => {
            e.stopPropagation();
            playing ? (audio.pause(),setPlaying(false)) : audio.play().then(()=>setPlaying(true)).catch(()=>{});
        });
    </script>
</body>
</html>