<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="top-strip"></div>
    <header>
        <h1>
            <img src="/home/iksy/Bilder/zauber.jpg" alt="KochZauber">
            <span style="color: #61B536;">K</span>och<span style="color: #61B536;">Z</span>auber
        </h1>
    </header>
    <nav>
        <div class="menu">
            <img src="/home/iksy/Bilder/menue.png" alt="Menü">
            <div class="dropdown-content">
                <a href="../test.html">Home</a>
                <a href="../rezepte.html">Rezepte</a>
                <a href="../meine.html">Konto</a>
                <a href="#">Kontakt</a>
            </div>
        </div>
        <input type="text" class="search-bar" placeholder="z.B. Lasagne, Sommersalat, Nudeln">
    </nav>
    <div class="container">
        <div class="home-content">
            <img src="/home/iksy/Bilder/start.jpg" alt="Begrüßungsbild" style="border-radius: 8px;">
        </div>
    </div>
    {if isset($PHP_SELF)}
        <form name='anmeldung' action='{$PHP_SELF}' method='post'>
        <input type="hidden" name="csrfToken" value="{$csrfToken}" />
            <label for="i_name">Name</label>
            <input type="text" name="name" id="i_name" size=12><br>
            <label for="i_password">Passwort</label>
            <input type="password" name="password" id="i_password" size=12><br>
            <input type="submit" name="Button1" value="Abschicken">
        </form>
    {else}
        {if isset($keineAnmeldung)}
            Benutzername und Passwort stimmen nicht überein
        {else}
            Sie sind angemeldet. Ihre UserId ist: {$userId}.				
		{/if} 
    {/if}
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
</body>
</html>
