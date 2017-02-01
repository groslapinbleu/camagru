<?php
  require __DIR__ . '/app/control/app_create_account.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Camagru - creation de compte</title>
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="stylesheet" href="css/application.css" />
</head>
<div class="container">
<?php
    include('app/view/header.php');
    include('app/view/content_create_account.php');
    include('app/view/footer.php');
?>
</div>
</html>