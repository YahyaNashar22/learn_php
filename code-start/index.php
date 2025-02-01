<?php require_once("config.php"); ?>
<?php $page_title = 'Add your idea'; ?>
<?php $page_heading = 'Share your idea with us'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1> <?php echo $page_heading; ?> </h1>

    <?php

    $idea_title = '';
    $idea_text = '';

    if (isset($_POST['submit'])): ?>

        <?php if (isset($_POST['title'])): ?>
            <?php $idea_title = $_POST['title']; ?>
        <?php endif; ?>

        <?php if (isset($_POST['content'])): ?>
            <?php $idea_text = $_POST['content']; ?>
        <?php endif; ?>


        <div style="background:green;color:white; padding:10px;">
            <h3> Your idea was added successfully:</h3>
            <p>Your idea title: <?php echo $idea_title; ?> </p>
            <p>Your idea text: <?php echo $idea_text; ?> </p>
        </div>
        <hr>
        <hr>
        <br>

    <?php endif; ?>

    <?php $new_idea = ['title' => $idea_title, 'content' => $idea_text]; ?>
    <?php $keys_string = implode(',', array_keys($new_idea)); ?>

    <?php $keys_placeholder = ':' . implode(', :', array_keys($new_idea)); ?>

    <?php echo $keys_string; ?>
    <?php echo $keys_placeholder; ?>

    <?php
    $connection = new PDO($dsn, $db_user, $db_password, $options);

    $sql = sprintf(
        "INSERT INTO %s (%s) VALUES (%s)",
        'ideasTable',
        $keys_string,
        $keys_placeholder
    );

    $statement = $connection->prepare($sql);
    $statement->execute($new_idea);

    ?>

    <form action="" method="POST">
        <label for="title">Idea Title</label>
        <input type="text" name="title" value="<?php if (isset($_POST['title'])) {
                                                    echo $_POST['title'];
                                                } ?>">
        <br><br>
        <label for="text"> Idea Text</label>
        <textarea name="content" rows="8" cols="80"><?php if (isset($_POST['content'])) {
                                                        echo $_POST['content'];
                                                    } ?></textarea>
        <br><br>
        <input type="submit" name="submit" value="Save your idea">
    </form>

    <hr>
    <hr><br>


    <?php
    $connection = new PDO($dsn, $db_user, $db_password, $options);
    $sql = "SELECT * FROM ideasTable;";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $results = $statement->fetchAll();
    ?>


    <table style="width:100%;background:#eee;text-align:center">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Text</th>
            <th>Delete</th>
        </tr>

        <?php foreach ($results as $row): ?>
            <tr>
                <th><a href="update.php"><?php echo $row["id"]; ?></a></th>
                <th><?php echo $row["title"]; ?></th>
                <th><?php echo $row["content"]; ?></th>
                <th><a href="delete.php" style="color:red;">X</a></th>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>