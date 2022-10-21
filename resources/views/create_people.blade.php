<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create People</h2>
    <form action="/people/addpeople" method="post">
        @csrf
        <label for="Name">
            FullName:
            <input type="text" name="fullname">
        </label><br><br>
        <label for="Email">
            Birthday:
            <input type="text" name="birthday">
        </label><br><br>
        <label for="Password">
            Address:
            <input type="text" name="address">
        </label><br><br>
        <button type="submit">Create people</button>
    </form>
</body>
</html>