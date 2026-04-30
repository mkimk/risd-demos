<!DOCTYPE html>
<html>
<head>
  <title>Participatory Page</title>
</head>
<body>

<form method="POST" enctype="multipart/form-data">
  <input type="file" name="image">
  <button type="submit">Upload</button>
</form>

<?php
$uploadDir = __DIR__ . "/uploads/";

if ($_FILES && $_FILES["image"]["tmp_name"]) {
  move_uploaded_file(
    $_FILES["image"]["tmp_name"],
    $uploadDir . basename($_FILES["image"]["name"])
  );
}

$images = glob($uploadDir . "*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
?>

<?php foreach ($images as $img): ?>
  <img src="/form-image/uploads/<?php echo basename($img); ?>" width="200">
<?php endforeach; ?>

</body>
</html>