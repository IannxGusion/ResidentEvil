<!-- resources/views/devilmaycry.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devil May Cry — Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            background: #000;
            font-family: 'Montserrat', sans-serif;
            color: white;
            overflow-x: hidden;
        }

        /* Background utama */
        .bg {
            position: fixed;
            inset: 0;
            background: url('dmc_bg.jpg') no-repeat center/cover;
            filter: brightness(0.25);
            z-index: -2;
        }

        /* Efek asap */
        .smoke {
            position: fixed;
            inset: 0;
            background: url('smoke.png') repeat-x;
            opacity: 0.3;
            animation: smokeMove 80s linear infinite;
            z-index: -1;
        }
        @keyframes smokeMove {
            0% { background-position: 0 0; }
            100% { background-position: 200% 0; }
        }

        /* Efek api di bawah */
        .fire {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 150px;
            background: url('fire.gif') repeat-x;
            background-size: cover;
            z-index: -1;
            opacity: 0.6;
        }

        /* Hero section */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        h1 {
            font-family: 'Cinzel Decorative', serif;
            font-size: 4.5rem;
            color: crimson;
            text-shadow: 0 0 25px crimson, 0 0 50px red;
            margin-bottom: 15px;
            animation: titleGlow 2s infinite alternate;
        }
        @keyframes titleGlow {
            0% { text-shadow: 0 0 25px crimson, 0 0 50px red; }
            100% { text-shadow: 0 0 40px red, 0 0 80px orange; }
        }

        p {
            font-size: 1.3rem;
            max-width: 650px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background: crimson;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }
        a:hover {
            background: red;
            transform: scale(1.05);
        }

        /* Grid game list */
        .game-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 50px;
            background: rgba(0, 0, 0, 0.85);
        }
        .game-card {
            background: #111;
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }
        .game-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }
        .game-card h3 {
            padding: 15px;
            font-size: 1.1rem;
            background: #000;
        }
        .game-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px crimson;
        }
    </style>
</head>
<body>

    <div class="bg"></div>
    <div class="smoke"></div>
    <div class="fire"></div>

    <section class="hero">
        <h1>Devil May Cry</h1>
        <p>Selamat datang di dunia pemburu iblis. Dari Dante hingga Nero, siapkah kamu bertarung melawan kegelapan?</p>
        <a href="#list">Lihat Semua Seri</a>
    </section>

    <section id="list" class="game-grid">
        <!-- Daftar Game -->
        <div class="game-card">
            <img src="dmc1.jpg" alt="Devil May Cry 1">
            <h3>Devil May Cry</h3>
        </div>
        <div class="game-card">
            <img src="dmc2.jpg" alt="Devil May Cry 2">
            <h3>Devil May Cry 2</h3>
        </div>
        <div class="game-card">
            <img src="dmc3.jpg" alt="Devil May Cry 3">
            <h3>Devil May Cry 3: Dante's Awakening</h3>
        </div>
        <div class="game-card">
            <img src="dmc4.jpg" alt="Devil May Cry 4">
            <h3>Devil May Cry 4</h3>
        </div>
        <div class="game-card">
            <img src="dmcd.jpg" alt="DmC Devil May Cry">
            <h3>DmC: Devil May Cry</h3>
        </div>
        <div class="game-card">
            <img src="dmc5.jpg" alt="Devil May Cry 5">
            <h3>Devil May Cry 5</h3>
        </div>
    </section>

</body>
</html>
