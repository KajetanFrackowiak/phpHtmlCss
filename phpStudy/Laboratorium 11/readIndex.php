<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - Read</title>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<button class="btn btn-success" onclick="redirectedToFile('main.php')">Return</button>

</button>
<div class="container">
    <h1>Search for a Person</h1>
    <form id="searchForm" action="read.php" method="get">
        <div class="mb-3">
            <label for="personId" class="form-label">Person ID:</label>
            <input type="text" class="form-control" id="personId" name="personId" required>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <div id="searchResults" class="mt-3"></div>
</div>

<script>
    const searchForm = document.getElementById('searchForm');
    const searchResults = document.getElementById('searchResults');

    searchForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const personId = document.getElementById('personId').value;

        axios.get(`read.php?personId=${personId}`)
            .then(function (response) {
                const person = response.data;
                const personData = `
                        <h2>Person Details</h2>
                        <p>ID: ${person.Id}</p>
                        <p>Name: ${person.Imie}</p>
                        <p>Surname: ${person.Nazwisko}</p>
                        <p>Pesel: ${person.Pesel}</p>
                        <p>Birthdate: ${person.Data_urodzenia}</p>
                        <p>Gender: ${person.Plec}</p>
                    `;
                searchResults.innerHTML = personData;
            })
            .catch(function (error) {
                console.error(error);
                searchResults.innerHTML = 'Error occurred while searching for the person.';
            });
    });
</script>
</body>
</html>
