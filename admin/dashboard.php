<?php include('functions.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/x-icon" href="fav.png">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">  

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../assets/css/admin.css?v=<?php echo time(); ?>">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

<?php include("app/includes/adminHeader.php") ?>

<!-- Admin Page Wrapper -->
<div class="admin-wrapper">

<?php include("app/includes/adminSidebar.php") ?>
        
<!-- Admin Content -->
<div class="admin-content">

<div class="content">

    <h2 class="page-title">Dashboard</h2>

    <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

    

</div>

</div>
<!-- // Admin Content -->

</div>
<!-- // Page Wrapper -->


</body>
</html>