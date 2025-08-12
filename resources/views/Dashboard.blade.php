<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Horror Game Stories — Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Share+Tech+Mono&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        body {
            margin: 0;
            font-family: 'Share Tech Mono', monospace;
            background: #0b0b0b;
            color: #eee;
            overflow-x: hidden;
        }

        /* Background horor */
        .bg {
            position: fixed;
            inset: 0;
            background: url('/images/horor-bg.jpg') no-repeat center/cover;
            filter: brightness(0.25) contrast(1.1);
            z-index: -4;
        }
        .dark-overlay {
            position: fixed;
            inset: 0;
            background: rgba(15, 0, 0, 0.6);
            z-index: -3;
        }
        .blood-texture {
            position: fixed;
            inset: 0;
            background: url('/images/blood-texture.png') repeat;
            opacity: 0.06;
            mix-blend-mode: multiply;
            z-index: -2;
        }
        .scanline {
            position: fixed;
            inset: 0;
            background: repeating-linear-gradient(
                180deg,
                rgba(255, 0, 0, 0.06),
                rgba(255, 0, 0, 0.06) 2px,
                transparent 3px,
                transparent 5px
            );
            pointer-events: none;
            z-index: -1;
            animation: scanlineAnim 5s linear infinite;
        }
        @keyframes scanlineAnim {
            0% { background-position: 0 0; }
            100% { background-position: 0 100%; }
        }

        /* Navbar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background: rgba(0, 0, 0, 0.85);
            border-bottom: 2px solid #8B0000;
            backdrop-filter: blur(4px);
            position: sticky;
            top: 0;
            z-index: 10;
        }
        nav h1 {
            font-family: 'Cinzel Decorative', serif;
            font-size: 2.4rem;
            color: #ff0000;
            text-shadow: 0 0 15px #ff0000, 0 0 40px #8B0000;
            letter-spacing: 1px;
        }
        nav a {
            color: #bbb;
            text-decoration: none;
            margin-left: 25px;
            font-weight: 600;
            font-size: 1rem;
            transition: color 0.3s ease, text-shadow 0.3s ease;
        }
        nav a:hover {
            color: #ff1a1a;
            text-shadow: 0 0 8px #ff0000;
        }

        /* Dashboard container */
        .dashboard {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px 60px;
        }

        /* Statistik */
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }
        .stat-card {
            background: rgba(20, 0, 0, 0.8);
            border: 2px solid #8B0000;
            padding: 30px 20px;
            border-radius: 12px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: default;
        }
        .stat-card:hover {
            background: rgba(35, 0, 0, 0.95);
            transform: scale(1.07);
            box-shadow: 0 0 25px 4px #ff0000;
        }
        .stat-card h2 {
            font-size: 3rem;
            color: #ff0000;
            margin: 0 0 12px;
            font-weight: 700;
            text-shadow: 0 0 10px #ff3b3b;
        }
        .stat-card p {
            font-size: 1.25rem;
            color: #eee;
            letter-spacing: 0.05em;
        }

        /* Game Cards */
        .game-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        .game-card {
            background: rgba(30, 0, 0, 0.9);
            border: 2px solid #8B0000;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 15px #600000;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        .game-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px 5px #ff0000;
        }
        .game-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 2px solid #8B0000;
        }
        .game-card h3 {
            margin: 15px 0 20px;
            font-family: 'Cinzel Decorative', serif;
            font-size: 1.8rem;
            color: #ff0000;
            text-shadow: 0 0 8px #ff0000;
        }

        /* Update Section */
        .updates {
            background: rgba(30, 0, 0, 0.85);
            border: 2px solid #8B0000;
            border-radius: 10px;
            padding: 25px 30px;
            max-width: 800px;
            margin: 0 auto;
        }
        .updates h2 {
            color: #ff0000;
            font-family: 'Cinzel Decorative', serif;
            font-size: 2.4rem;
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 0 0 20px #ff0000;
        }
        .update-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 0;
            border-bottom: 1px solid rgba(255, 0, 0, 0.3);
            font-size: 1.1rem;
            color: #f1f1f1;
            transition: text-shadow 0.3s ease;
        }
        .update-item:last-child {
            border-bottom: none;
        }
        .update-item i {
            color: #ff0000;
            min-width: 25px;
            font-size: 1.4rem;
        }
        .update-item:hover {
            text-shadow: 0 0 10px #ff0000;
            cursor: pointer;
        }

        /* Responsive tweaks */
        @media (max-width: 600px) {
            nav {
                flex-direction: column;
                gap: 12px;
                padding: 20px;
            }
            nav a {
                margin-left: 0;
                font-size: 1.1rem;
            }
            .stats {
                grid-template-columns: 1fr;
            }
            .dashboard {
                padding: 20px 15px 40px;
            }
            .game-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <div class="bg"></div>
    <div class="dark-overlay"></div>
    <div class="blood-texture"></div>
    <div class="scanline"></div>

    <nav>
        <h1>Horror Game Stories</h1>
        <div>
            <a href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="#stats"><i class="fas fa-chart-bar"></i> Statistik</a>
            <a href="#games"><i class="fas fa-gamepad"></i> Games</a>
            <a href="#updates"><i class="fas fa-bullhorn"></i> Update Terbaru</a>
        </div>
    </nav>

    <section class="dashboard" id="stats">
        <div class="stats">
            <div class="stat-card">
                <h2>15</h2>
                <p>Total Game Horror</p>
            </div>
            <div class="stat-card">
                <h2>5</h2>
                <p>Game Favorit</p>
            </div>
            <div class="stat-card">
                <h2>Devil May Cry</h2>
                <p>Terakhir Dimainkan</p>
            </div>
        </div>

        <!-- Game Cards -->
        <div class="game-grid" id="games">
            <div class="game-card">
                <img src="/images/resident-evil.jpg" alt="Resident Evil" />
                <h3>Resident Evil Series</h3>
            </div>
            <div class="game-card">
                <img src="/images/devil-may-cry.jpg" alt="Devil May Cry" />
                <h3>Devil May Cry Series</h3>
            </div>
            <div class="game-card">
                <img src="/images/silent-hill.jpg" alt="Silent Hill" />
                <h3>Silent Hill Series</h3>
            </div>
        </div>

        <div class="updates" id="updates">
            <h2>Update Terbaru</h2>
            <div class="update-item"><i class="fas fa-gamepad"></i> Dead Space Remake — Trailer Perdana Rilis</div>
            <div class="update-item"><i class="fas fa-ghost"></i> Event Halloween Spooktacular — Mulai 31 Oktober</div>
            <div class="update-item"><i class="fas fa-bullhorn"></i> Devil May Cry 6 — Pengumuman Resmi</div>
            <div class="update-item"><i class="fas fa-skull-crossbones"></i> Resident Evil Village — Patch Terbaru</div>
        </div>
    </section>

</body>
</html>
