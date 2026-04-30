<!DOCTYPE html>
<html>
<head>
  <title>Participatory Page</title>
</head>
<body>
    <form method="POST">
    <input name="title" placeholder="Write something">
    <button type="submit">Submit</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        file_put_contents("data.txt", $_POST['title'] . "\n", FILE_APPEND);
        }

        $entries = file_exists("data.txt") ? file("data.txt") : [];
    ?>

    <?php foreach ($entries as $entry): ?>
        <h1><?php echo htmlspecialchars($entry); ?></h1>
    <?php endforeach; ?>

</body>
</html>