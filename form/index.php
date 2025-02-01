<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Forms</title>
</head>

<body>
    <form action="hello.php">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your Name" />
        <hr />
        <label for="bio">Biography</label>
        <textarea name="bio" id="" cols="30" rows="10">Your Biography</textarea>
        <hr />
        <input type="submit" name="submit" value="Save your profile" />
    </form>
</body>

</html>