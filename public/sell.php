<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj ogłoszenie</title>
    <link rel="stylesheet" href="styles/AddAnnoucment.css">
</head>

<body>

    <header class="headerIndex">
        <div class="logoContainer">
            <img class="logo" src="assets/logo.png" alt="logo">
            <p>Auto Local</p>
        </div>

    </header>

    <div class="edit-container">
        <h2>Edytuj ogłoszenie</h2>

        <form action="edit_listing.php" method="POST" enctype="multipart/form-data">

            <!-- 📌 SEKJA 1: Dane podstawowe -->
            <fieldset>
                <legend>Dane podstawowe</legend>

                <label for="cena">Cena (PLN):</label>
                <input type="number" id="cena" name="cena" required>

                <label for="rok_produkcji">Rok produkcji:</label>
                <input type="number" id="rok_produkcji" name="rok_produkcji" required>

                <label for="przebieg">Przebieg (km):</label>
                <input type="number" id="przebieg" name="przebieg" required>

                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="nowy">Nowy</option>
                    <option value="uzywany">Używany</option>
                    <option value="uszkodzony">Uszkodzony</option>
                </select>
            </fieldset>

            <!-- 🚗 SEKJA 2: Dane techniczne -->
            <fieldset>
                <legend>Dane techniczne</legend>

                <label for="moc_silnika">Moc silnika (KM):</label>
                <input type="number" id="moc_silnika" name="moc_silnika" required>

                <label for="vin">VIN:</label>
                <input type="text" id="vin" name="vin" required>

                <label for="lokalizacja">Lokalizacja:</label>
                <input type="text" id="lokalizacja" name="lokalizacja" required>
            </fieldset>

            <!-- 📝 SEKJA 3: Opis i dodatkowe informacje -->
            <fieldset>
                <legend>Opis</legend>

                <label for="opis">Opis:</label>
                <textarea id="opis" name="opis" rows="4"></textarea>

                <label for="marka">Marka:</label>
                <input type="text" id="marka" name="marka" required>

                <label for="model">Model:</label>
                <input type="text" id="model" name="model" required>

                <label for="data_dodania">Data dodania:</label>
                <input type="date" id="data_dodania" name="data_dodania" required>
            </fieldset>

            <!-- 📸 SEKJA 4: Dodawanie zdjęć -->
            <fieldset>
                <legend>Zdjęcia</legend>

                <label for="zdjecia">Dodaj zdjęcia:</label>
                <input type="file" id="zdjecia" name="zdjecia[]" multiple>
            </fieldset>

            <!-- ✅ Przycisk zapisu -->
            <button type="submit">Zapisz zmiany</button>
        </form>
    </div>

</body>

</html>