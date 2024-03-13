<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rhythmicplay - Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            background-color: #81c784;
            padding: 20px;
            text-align: center;
        }

        .song-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .song {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .song:hover {
            background-color: #f0f0f0;
        }

        .music-note {
            font-size: 24px;
            margin-right: 10px;
            color: #4caf50;
        }

        .song a {
            color: #4caf50;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
        }

        .song a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #81c784;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Rhythmicplay</h1>
    </header>

    <div class="song-container">
        <div class="song">
            <span class="music-note">&#9835;</span>
            <a href="song1.php">Paraluman by Adie</a>
        </div>

        <div class="song">
            <span class="music-note">&#9835;</span>
            <a href="song2.php">214 by Rivermaya</a>
        </div>

        <div class="song">
            <span class="music-note">&#9835;</span>
            <a href="song3.php">Mahika by Adie & Janine Berdin</a>
        </div>

        <div class="song">
            <span class="music-note">&#9835;</span>
            <a href="song4.php">Yellow by Coldplay</a>
        </div>

        <div class="song">
            <span class="music-note">&#9835;</span>
            <a href="song5.php">Locked Out Of Heaven Chords by Bruno Mars</a>
        </div>
    </div>

    <!-- Footer section -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Rhythmicplay. All rights reserved.</p>
    </footer>
</body>

</html>
