<?php $title = 'Assignment 2'; ?>
<?php $title3 = 'Wireframe' ;?>

<!DOCTYPE html>
<html>
<head>
    <title>Wireframe - <?php echo $title?></title>
    <?php include './components/head.php'; ?>
</head>

<body>
  <?php include './components/nav-menu.php'; ?>
    
  <p><?php echo $title3, $title2 ?></p>
  <?php /* include './components/filmfree.pdf'; */?> 

  <div class="container">
    <embed src="./components/filmfree.pdf" type="application/pdf"  height="700px" width="500">
  </div>

  <?php include './components/footer.php'; ?>
</body>
</html>
    