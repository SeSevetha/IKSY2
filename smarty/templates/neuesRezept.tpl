<!DOCTYPE html>
<!-- neuesRezept.tpl -->
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neues Rezept erstellen</title>
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
    <nav>
        <div class="menu">
            <img src="../Bilder/menue.webp" alt="Menü">
            <div class="dropdown-content">
                <a href="../index.php">Home</a>
                <a href="./rezepte.php">Rezepte</a>
                <a href="./meine.php">Konto</a>
                <a href="#">Kontakt</a>
            </div>
        </div>
        <input type="text" class="search-bar" placeholder="z.B. Lasagne, Sommersalat, Nudeln">
    </nav>
    <div class="container">
        <div class="form-container">
            <h2>Neues Rezept erstellen</h2>
            {if $logged_in}
                {if isset($success_message)}
                    <div class="alert alert-success">{$success_message}</div>
                {/if}
                {if isset($error_message)}
                    <div class="alert alert-danger">{$error_message}</div>
                {/if}

                <form method="post" action="neuesRezept.php">
                    <input type="hidden" name="csrfToken" value="{$csrfToken}">
                    <label for="benutzername">Benutzername:</label><br>
                    <input type="text" id="benutzername" name="benutzername" required><br><br>
                    
                    <label for="rezeptname">Rezeptname:</label><br>
                    <input type="text" id="rezeptname" name="rezeptname" required><br><br>
                    
                    <label>Zutaten:</label><br>
                    <div id="ingredientContainer">
                        <div class="ingredient-row">
                            <input type="text" name="zutaten[]" required placeholder="Zutat">
                            <input type="text" name="mengen[]" required placeholder="Menge">
                            <select name="einheiten[]">
                                <option value="1">ml</option>
                                <option value="2">Stück</option>
                                <option value="3">Gramm</option>
                            </select>
                            <button type="button" onclick="removeIngredientRow(this)">Entfernen</button>
                            <br><br>
                        </div>
                    </div>
                    <button type="button" onclick="addIngredientRow()">Weitere Zutat hinzufuegen</button>
                    <br><br>
                    
                    <label for="beschreibung">Zubereitung:</label><br>
                    <textarea id="beschreibung" name="beschreibung" rows="4" required></textarea><br><br>
                    
                    <button type="submit">Rezept speichern</button>
                </form>
                <script>
                    function addIngredientRow() {
                        var container = document.getElementById('ingredientContainer');
                        var row = document.createElement('div');
                        row.classList.add('ingredient-row');
                        row.innerHTML = `
                            <input type="text" name="zutaten[]" required placeholder="Zutat">
                            <input type="text" name="mengen[]" required placeholder="Menge">
                            <select name="einheiten[]">
                                <option value="1">ml</option>
                                <option value="2">Stück</option>
                                <option value="3">Gramm</option>
                            </select>
                            <button type="button" onclick="removeIngredientRow(this)">Entfernen</button>
                            <br><br>
                        `;
                        container.appendChild(row);
                    }

                    function removeIngredientRow(button) {
                        var row = button.parentNode;
                        var container = row.parentNode;
                        container.removeChild(row);
                    }
                </script>
            {else}
                <p>Sie sind nicht eingeloggt. Bitte <a href="../klassen/anmeldung.php">melden Sie sich an</a>.</p>
            {/if}
        </div>
    </div>
    <div class="footer">
        &copy; 2024 KochZauber. Alle Rechte vorbehalten.
    </div>
</body>
</html>
