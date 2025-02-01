
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

    <?php if(isset($_POST['submit'])): ?>

        <?php if(isset($_POST['title'])): ?>
            <?php $idea_title = $_POST['title']; ?>
        <?php endif; ?>

        <?php if(isset($_POST['text'])): ?>
            <?php $idea_text = $_POST['text']; ?>
        <?php endif; ?>


        <div style="background:green;color:white; padding:10px;">
            <h3> Your idea was added succesfully:</h3>
            <p>Your idea title: <?php echo $idea_title; ?> </p>
            <p>Your idea text: <?php echo $idea_text; ?> </p>
        </div>
        <hr>
        <hr>
        <br>

    <?php endif; ?>

    <form action="" method="POST">
        <label for="title">Idea Title</label>
        <input type="text" name="title" value="<?php if(isset($_POST['title'])){echo $_POST['title'];} ?>">
        <br><br>
        <label for="text"> Idea Text</label>
        <textarea name="text" rows="8" cols="80"><?php if(isset($_POST['text'])){echo $_POST['text'];} ?></textarea>
        <br><br>
        <input type="submit" name="submit" value="Save your idea">
    </form>

    <hr>
    <hr><br>


    <table style="width:100%;background:#eee;text-align:center">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Text</th>
            <th>Delete</th>
        </tr>


        <tr>
            <th><a href="update.php">#1</a></th>
            <th>Title 1</th>
            <th>Text 1</th>
            <th><a href="delete.php" style="color:red;">X</a></th>
        </tr>
        <tr>
            <th><a href="update.php">#2</a></th>
            <th>Title 2</th>
            <th>Text 2</th>
            <th><a href="delete.php" style="color:red;">X</a></th>
        </tr>


    </table>

</body>

</html>