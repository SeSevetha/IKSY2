//holeRezeptZutaten.js
document.addEventListener('DOMContentLoaded', function() {
    const recipeCards = document.querySelectorAll('.recipe-card');
    
    recipeCards.forEach((card, index) => {
        const recipeId = index + 1;
        holeRezeptName(recipeId);
        holeZutaten(recipeId);
    });

    function holeRezeptName(id) {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("recipe-title-" + id).innerText = this.responseText;
            }
        };
        xhttp.open("GET", "klassen/Abfragen.php?type=recipe&id=" + id, true);
        xhttp.send();
    }

    function holeZutaten(id) {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                const zutaten = JSON.parse(this.responseText);
                const zutatenListe = zutaten.map(zutat => `<li>${zutat}</li>`).join('');
                document.getElementById("ingredients-list-" + id).innerHTML = zutatenListe;
            }
        };
        xhttp.open("GET", "klassen/Abfragen.php?type=ingredients&id=" + id, true);
        xhttp.send();
    }
});
