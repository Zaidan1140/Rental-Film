<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Entry - Admin</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Limelight&family=DM+Serif+Display&display=swap" rel="stylesheet">

    <!-- Link ke file CSS eksternal -->
    <link rel="stylesheet" href="film-entry.css">
</head>
<body>
    <div class="sidebar">
        <h1>RENTALS*</h1>
        <h2>ADMIN</h2>
        <ul>
            <li><a href="#">DASHBOARD</a></li>
            <li><a href="categories.php">CATEGORIES</a></li>
            <li><a href="#">TRANSACTION</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h2>INPUT CATEGORIES</h2>
        <div class="form-container">
            <!-- Form untuk input data -->
            <form action="process-film-entry.php" method="POST" enctype="multipart/form-data">
                <label for="categories">CATEGORIES</label>
                <input type="text" id="categories" name="categories" placeholder="Enter film category" required>

                <label for="harga-sewa">HARGA SEWA</label>
                <input type="number" id="harga-sewa" name="harga_sewa" placeholder="Enter rental price" required>

                <label for="sinopsis">SINOPSIS</label>
                <textarea id="sinopsis" name="sinopsis" rows="5" placeholder="Enter film synopsis" required></textarea>

                <label for="poster">POSTER</label>
                <input type="file" id="poster" name="poster" required>

                <button type="submit">SUBMIT</button>
            </form>
        </div>
    </div>
</body>
</html>
