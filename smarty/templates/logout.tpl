<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="top-strip"></div>
    <header>
        <h1>
            <img src="../Bilder/zauber.jpg" alt="KochZauber">
            <span style="color: #61B536;">K</span>och<span style="color: #61B536;">Z</span>auber
        </h1>
    </header>
    <div class="container">
        <div class="home-content">
            <img src="../Bilder/start.jpg" alt="Begrüßungsbild" style="border-radius: 8px;">
        </div>
    </div>
    <div class="container">
        <h2>Sie sind jetzt ausgeloggt.
        <br>
        Sie werden in wenigen Sekunden zur Startseite weitergeleitet.
        </h2>
    </div>
    <script type="text/javascript">
        setTimeout(function() {
            window.location.href = "../index.php";
        }, 3000); // 3 Sekunden Verzögerung
    </script>
</body>
</html>

