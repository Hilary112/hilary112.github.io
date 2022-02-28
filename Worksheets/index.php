<?php $title = 'MY Website'; ?>
<?php $title2 =  'Hello World Hello'; ?>
<?php $title3 = 'I am a PHP website!' ;?>

<!DOCTYPE html>
<html>
<head>
    <title>My Website - <?php echo $title?></title>
    <?php include './components/head.php'; ?>
</head>

<body>
  <?php include './components/nav-menu.php'; ?>

  <h3><?php echo $title?></h3>
    
  <p><?php echo $title3, $title2 ?></p>
  <?php /* include './components/I_am_a_pdf.pdf'; */?> 

  <div class="container">
    <embed src="./components/I_am_a_pdf.pdf" type="application/pdf" width="100%" height="100%">
  </div>

  <?php include './components/footer.php'; ?>
</body>
</html>