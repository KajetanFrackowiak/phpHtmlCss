<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD - Create</title>
    <script src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<button class="btn btn-success" onclick="redirectedToFile('main.php')">Return to main site</button>

<h1 style="text-align: center">Adding a Person</h1>
    <form action="create.php" method="POST">
        <label for="Name">Name: </label>
        <input type="text" name="Name" id="Name" required><br>
        <label for="Surname">Surname: </label>
        <input type="text" name="Surname" id="Surname" required><br>
        <label for="Pesel">Pesel: </label>
        <input type="text" name="Pesel" id="Pesel" required><br>
        <label for="Birthdate">Birthdate: </label>
        <input type="date" name="Birthdate" id="Birthdate" required><br>
        <label for="Gender">Gender: </label><br>
        Man:
        <input type="radio" name="Gender" id="Gender"> Woman:
        <input type="radio" name="Gender" id="Gender"><br>
        <button class="btn btn-primary" type="submit">Approve</button>
    </form>
</body>
</html>