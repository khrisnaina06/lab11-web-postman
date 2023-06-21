<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <style> * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  text-align: left;
}

#container {
  max-width: 1330px;
  margin: 0 auto;
  background-color: #fff;
  padding: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  color: gray;
 
}
.artikel {
  border: 1px solid #ccc;
  padding-bottom: 10px;
  margin-bottom: 20px;
}

.header {
  text-align: center;
  margin-bottom: 20px;

}

.header h1 {
  color: gray;
}
</style>
  <div id="container">
    <div class="header">
      <h1>Layout Sederhana</h1>
    </div>
    <nav>
      <a href="<?= base_url('/'); ?>">Home</a>
      <a href="<?= base_url('/artikel'); ?>">Artikel</a>
      <a href="<?= base_url('/about'); ?>">About</a>
      <a href="<?= base_url('/contact'); ?>">Kontak</a>
    </nav>
    