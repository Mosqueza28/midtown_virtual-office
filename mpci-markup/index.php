<!--
 - Filename: index.php
 - Created On: January 16, 2017
 - Version: 1
 - Author: Your Name <your.email>
 - Function:
   - This a sample template for every file we make to monitor the authors of our codes
   - Ex: This is the main template for the site.
-->

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/fonts/font-awesome.min" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	  <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
 <?php include "navigation.php"; ?>
<div class="col-md-10 no--space">
  <header class="col-md-12"><p class="text__title">Home</p></header>
  <div class= "col-md-12 breadcrumbs"><span>Home>Page</span></div>
  <main>
    <?php include "account-control.php"; ?>
  </main>
</div>
  <?php include "footer.php"; ?>
</body>
</html>
