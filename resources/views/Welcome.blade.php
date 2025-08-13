<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horror Game Stories</title>
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
            background: url('residentevil.jpeg') no-repeat center/cover;
            filter: brightness(0.5);
            z-index: -2;
        }


        /* Efek kabut */
        .fog {
            position: fixed;
            inset: 0;
            background: url('fog-texture.png') repeat-x;
            opacity: 0.25;
            animation: fogMove 80s linear infinite;
            z-index: -1;
        }

        @keyframes fogMove {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        /* Hero section */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;
        }

        h1 {
            font-family: 'Cinzel Decorative', serif;
            font-size: 4rem;
            color: #ff0000;
            text-shadow: 0 0 20px red, 0 0 40px darkred;
            animation: redGlow 2s infinite alternate;
        }

        p {
            font-size: 1.2rem;
            max-width: 600px;
            color: #ddd;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background: darkred;
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

        @keyframes redGlow {
            0% {
                text-shadow: 0 0 10px red, 0 0 20px darkred;
            }

            100% {
                text-shadow: 0 0 30px crimson, 0 0 60px red;
            }
        }

        /* Game Grid */
        .game-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            padding: 50px;
            background: rgba(0, 0, 0, 0.85);
        }

        .game-card {
            background: #111;
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            border: 1px solid rgba(255, 0, 0, 0.4);
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
            color: white;
        }

        .game-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px red;
        }
    </style>
</head>

<body>

    <div class="bg"></div>
    <div class="fog"></div>

    <!-- Hero -->
    <section class="hero">
        <h1>Horror Game Stories</h1>
        <p>Jelajahi kisah-kisah menyeramkan dari berbagai dunia game — dari zombie, iblis, hingga kegelapan yang tak terbayangkan.</p>
        <a href="{{ route('Dashboard') }}">Lihat Semua Game</a>
    </section>

    <!-- Game List -->
    <section id="list" class="game-grid">
        <div class="game-card">
            <img src="resident.jpg" alt="Resident Evil">
            <h3>Resident Evil Series</h3>
        </div>
        <div class="game-card">
            <img src="devilmaycry.jpg" alt="Devil May Cry">
            <h3>Devil May Cry Series</h3>
        </div>
        <div class="game-card">
            <img src="silenthill.jpg" alt="Silent Hill">
            <h3>Silent Hill Series</h3>
        </div>
    </section>

</body>

</html>
