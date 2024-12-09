<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Movie Rentals</title>
    <link rel="stylesheet" href="admin.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Limelight&family=DM+Serif+Display&display=swap" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <h1>RENTALS*</h1>
        <h2>ADMIN</h2>
        <ul>
            <li><a href="#">DASHBOARD</a></li>
            <li><a href="#" class="active">CATEGORIES</a></li>
            <li><a href="#">TRANSACTION</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h2>CATEGORIES</h2>
        <div class="movie-list">
            <table>
                <tr>
                    <th>FILM</th>
                    <th>GENRE</th>
                    <th>SINOPSIS</th>
                    <th>HARGA SEWA</th>
                    <th>ACTION</th>
                </tr>
                <?php
                // Contoh data film (dapat diganti dengan query database)
                $movies = [
                    [
                        "image" => "jurassic-park.jpg",
                        "title" => "Jurassic Park",
                        "genre" => "ACTION, SCI-FI, THRILL",
                        "synopsis" => "Among a select group chosen to tour an island theme park populated by dinosaurs...",
                        "price" => "IDR 55.000/MONTH"
                    ],
                    [
                        "image" => "alien.jpg",
                        "title" => "Alien",
                        "genre" => "SCI-FI, THRILL, HORROR",
                        "synopsis" => "Alien is a 1979 science fiction horror film directed by Ridley Scott...",
                        "price" => "IDR 55.000/MONTH"
                    ]
                ];

                // Loop untuk menampilkan data film
                foreach ($movies as $movie) {
                    echo "<tr>";
                    echo "<td><img src='{$movie["image"]}' alt='{$movie["title"]}'></td>";
                    echo "<td>{$movie["genre"]}</td>";
                    echo "<td>{$movie["synopsis"]}</td>";
                    echo "<td>{$movie["price"]}</td>";
                    echo "<td>";
                    echo "<button class='edit-btn'>EDIT</button>";
                    echo "<button class='delete-btn'>DELETE</button>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
