<!DOCTYPE html>
<html>
<head>
<title>Upload image using ajax with preview in php - Idiot Developer</title>
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script.js"></script>
</head>

<body>

<div class="upload-form-wrapper">
  <h2>Upload image using ajax with preview in php</h2>
  <div class="photo-preview"></div>
  <div class="photo-action"></div>
    <form id="ajax-form" method="post" action="upload.php" enctype="multipart/form-data">
      <label for="photo">Select Image:</label>
      <input type="file" name="photo" id="photo">
      <button type="submit" class="upload-btn">Upload</button>
    </form>
</div>

</body>
</html>
