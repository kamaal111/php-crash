<?php

if (isset($_POST['submit'])) {
  $uploaded_file_data = $_FILES['upload'] ?? null;
  if (!empty($uploaded_file_data)) {
    $file_name = $uploaded_file_data['name'];


    // Get file extension
    $file_extension = explode('.', $file_name);
    $file_extension = strtolower(end($file_extension));

    // Validate file
    $allowed_extensions = ['png', 'jpg', 'jpeg', 'gif'];
    if (in_array($file_extension, $allowed_extensions)) {
      $file_size = $uploaded_file_data['size'];
      if ($file_size <= (1000 * 1000)) {
        $file_tmp = $uploaded_file_data['tmp_name'];
        $target_dir = "uploads/${file_name}";

        move_uploaded_file($file_tmp, $target_dir);

        $message = '<p style="color: green;">File uploaded</p>';
      } else {
        $message = '<p style="color: red;">File is too large</p>';
      }
    } else {
      $message = '<p style="color: red;">Invalid file type</p>';
    }
  } else {
    $message = '<p style="color: red;">Please choose a file</p>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>

<body>
</body>
<?php echo $message ?? null; ?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="upload">
  <input type="submit" value="Submit" name="submit">
</form>

</html>