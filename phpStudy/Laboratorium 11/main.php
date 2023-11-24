<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <script src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="accordion-header" style="text-align: center">
    <h1>Hello in CRUD!</h1>
    <h2>Choose where you would like to go: </h2>
</div>
<div class="container d-flex justify-content-center">
    <button class="btn btn-success" onclick=redirectedToFile('createIndex.php')>Support for adding a person</button>

    <button class="btn btn-warning" onclick="redirectedToFile('readIndex.php')">Support for displaying a persons</button>

    <button class="btn btn-danger">Support for deleting a person</button>

    <button class="btn btn-secondary">Support for changing a person's data</button>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous">

</script>
</body>
</html>