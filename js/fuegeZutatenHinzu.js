 
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