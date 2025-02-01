<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Forms</title>
</head>

<body>
    <form action="" method="GET">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your Name" />
        <hr />
        <label for="bio">Biography</label>
        <textarea name="bio" id="" cols="30" rows="10" placeholder="Enter your Biography"></textarea>
        <hr />
        <input type="submit" name="submit" value="Save your profile" />
    </form>

    <?php

    if (isset($_GET["name"])) echo ("{$_GET["name"]} <br />");
    if (isset($_GET["bio"])) echo ("{$_GET["bio"]}<br />");
    ?>
</body>

</html>