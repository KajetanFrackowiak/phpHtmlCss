<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Web and database application design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="cssfontello/fontello.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
<div class="container">
    <h1 style="text-align: center">Osoby</h1>
    <div>
        <div class="add">
            <button class="btn btn-success" onclick="redirectedToFile('addindex.php')">
                <span class="mr-1">+</span> Dodaj
            </button>
        </div><br>
        <form method="GET" action="Zad1.php" id="searchForm">
            <div class="d-flex align-items-center">
                <div class="ml-3">
                    <div class="input-group">
                        <div class="input-group-append">
                            <label for="search"></label><input type="text" class="form-control" name="search" id="search" autocomplete="off">
                            <button type="button" class="input-group-text search-icon" onclick="performSearch()"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="ml-3">
                    <button class="btn btn-primary" onclick="resetForm()">Reset</button>
                </div>
            </div>
        </form>
    </div>
    <?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=zadania", "root", "");

        // Sprawdzamy czy przesłano parametr 'search'
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $stmt = $pdo->prepare("SELECT * FROM osoba WHERE Imie LIKE :search OR Nazwisko LIKE :search ORDER BY Nazwisko ASC");
            $stmt->execute(['search' => "%$search%"]);

        } else {
            $stmt = $pdo->prepare("SELECT * FROM osoba ORDER BY Nazwisko ASC");
            $stmt->execute();
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) > 0) {
            echo "<table class='table'>";
            echo "<thead><tr><th>Imie</th><th>Nazwisko</th><th>Pesel</th></tr></thead>";
            echo "<tbody>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row["Imie"] . "</td>";
                echo "<td>" . $row["Nazwisko"] . "</td>";
                echo "<td>" . $row["Pesel"] . "</td>";
                echo '<td><a href="details.php?private_key=' . $row["Id"] . '"><i class="demo-icon icon-eye"></i></a></td>';
                echo '<td><a href="edit_lab11.php?private_key=' . $row["Id"] . '"><i class="demo-icon icon-pencil"></i></a></td>';
                echo '<td><a href="delete_lab11.php?private_key=' . $row["Id"] . '"><i class="demo-icon icon-trash-empty"></i></a></td>';
                echo "<tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>No results found</p>";
        }
    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
    }
    ?>
</div>

<script>
    function resetForm() {
        document.getElementById("myForm").reset()
    }

    function performSearch() {
        const searchInput = document.getElementById("search");
        const searchTerm = searchInput.value.trim();

        // perform a search action using the value entered in the search field

        // example action, redirect to page Zad1.php with search parameter
        window.location.href = "Zad1.php?search=" + encodeURIComponent(searchTerm);
    }

    function redirectedToFile(file) {
        window.location.href = file;
    }


    const searchInput = document.getElementById("search");
    searchInput.addEventListener("keydown", function (event) {
        if (event.keyCode === 13) {
            // if Enter is pressed, perform a search
            performSearch();
        }
    })
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
