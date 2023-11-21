<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zarb Form</title>
</head>
<body>
    <form action="./show.php">
        <div>
            <label for="row">Row</label>
            <input type="number" id="row" name="row">
        </div>

        <div>
            <label for="column">Column</label>
            <input type="number" id="column" name="column">
        </div>

        <button type="submit">
            Send Form
        </button>
    </form>
</body>
</html>