-------<!--<!DOCTYPE html>
// pierwsza wersja
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona z płynnym rozwijaniem list</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .list-container {
            margin-bottom: 15px;
        }

        .list-title {
            font-size: 18px;
            background-color: #007BFF;
            color: white;
            padding: 10px;
            cursor: pointer;
            border: none;
            text-align: left;
            width: 100%;
            outline: none;
        }

        .list-content {
            padding: 0 10px; /* Padding na bokach, ale nie na górze/dole */
            background-color: #f9f9f9;
            max-height: 0;
            overflow: hidden;
            border: 1px solid #ddd;
            transition: max-height 0.5s ease-out, padding 0.5s ease-out;
            box-sizing: border-box; /* Zapobiega wychodzeniu elementów poza kontener */
        }

        .list-content ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .list-content li {
            margin: 5px 0;
        }

        /* Klasa aktywna do rozszerzenia max-height i paddingu */
        .active {
            max-height: 300px; /* Przykładowa maksymalna wysokość; można dostosować */
            padding: 10px; /* Padding pojawia się przy rozwijaniu */
        }
    </style>
</head>
<body>

    <h1>Strona z płynnym rozwijaniem list</h1>

    <?php
    // Lista danych - może być dynamicznie generowana w PHP
    /* $lists = [
        'Lista 1' => ['Element 1.1', 'Element 1.2', 'Element 1.3'],
        'Lista 2' => ['Element 2.1', 'Element 2.2', 'Element 2.3'],
        'Lista 3' => ['Element 3.1', 'Element 3.2', 'Element 3.3'],
        'Lista 4' => ['Element 4.1', 'Element 4.2', 'Element 4.3']
    ];

    foreach ($lists as $listTitle => $listItems) {
        echo '<div class="list-container">';
        echo '<button class="list-title">' . $listTitle . '</button>';
        echo '<div class="list-content"><ul>';
        foreach ($listItems as $item) {
            echo '<li>' . $item . '</li>';
        }
        echo '</ul></div>';
        echo '</div>';
    }
    */
    ?>

    <script>
        // Pobierz wszystkie przyciski rozwijające
        var listTitles = document.querySelectorAll('.list-title');

        // Dodaj zdarzenie kliknięcia do każdego przycisku
        listTitles.forEach(function(title) {
            title.addEventListener('click', function() {
                // Znajdź następujący element z klasą 'list-content'
                var content = this.nextElementSibling;

                // Przełącz klasę 'active' odpowiedzialną za animację
                content.classList.toggle('active');
            });
        });
    </script>
</body>
    </html>
-->-------



<!DOCTYPE html>
// druga wersja
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona z płynnym rozwijaniem list</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .list-container {
            margin-bottom: 15px;
        }

        .list-title {
            font-size: 18px;
            color: #007BFF;
            padding: 10px;
            cursor: pointer;
            border: none;
            text-align: left;
            width: 100%;
            outline: none;
            position: relative;
        }

        /* Niebieski pasek pod tytułem listy */
        .list-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #007BFF;
        }

        .list-content {
            padding: 0 10px; /* Padding na bokach, ale nie na górze/dole */
            background-color: #f9f9f9;
            max-height: 0;
            overflow: hidden;
            border: 1px solid #ddd;
            transition: max-height 0.5s ease-out, padding 0.5s ease-out;
            box-sizing: border-box; /* Zapobiega wychodzeniu elementów poza kontener */
        }

        .list-content ul {
            margin: 0;
            padding: 0;
            list-style-type: disc; /* Wypunktowanie */
            padding-left: 20px; /* Odsunięcie wypunktowania od lewej krawędzi */
        }

        .list-content li {
            margin: 5px 0;
        }

        /* Klasa aktywna do rozszerzenia max-height i paddingu */
        .active {
            max-height: 300px; /* Przykładowa maksymalna wysokość; można dostosować */
            padding: 10px; /* Padding pojawia się przy rozwijaniu */
        }
    </style>
</head>
<body>

    <h1>Strona z płynnym rozwijaniem list</h1>

    <?php
    // Lista danych - może być dynamicznie generowana w PHP
    $lists = [
        'Lista 1' => ['Element 1.1', 'Element 1.2', 'Element 1.3'],
        'Lista 2' => ['Element 2.1', 'Element 2.2', 'Element 2.3'],
        'Lista 3' => ['Element 3.1', 'Element 3.2', 'Element 3.3'],
        'Lista 4' => ['Element 4.1', 'Element 4.2', 'Element 4.3']
    ];

    foreach ($lists as $listTitle => $listItems) {
        echo '<div class="list-container">';
        echo '<button class="list-title">' . $listTitle . '</button>';
        echo '<div class="list-content"><ul>';
        foreach ($listItems as $item) {
            echo '<li>' . $item . '</li>';
        }
        echo '</ul></div>';
        echo '</div>';
    }
    ?>

    <script>
        // Pobierz wszystkie przyciski rozwijające
        var listTitles = document.querySelectorAll('.list-title');

        // Dodaj zdarzenie kliknięcia do każdego przycisku
        listTitles.forEach(function(title) {
            title.addEventListener('click', function() {
                // Znajdź następujący element z klasą 'list-content'
                var content = this.nextElementSibling;

                // Przełącz klasę 'active' odpowiedzialną za animację
                content.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
