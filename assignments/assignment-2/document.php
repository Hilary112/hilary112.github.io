<?php $title = 'Assignment 2'; ?>
<?php $title3 = 'Document' ;?>

<!DOCTYPE html>
<html>
<head>
    <title>My Website - <?php echo $title?></title>
    <?php include './components/head.php'; ?>
</head>

<body>
  <?php include './components/nav-menu.php'; ?>
    
  <p><?php echo $title3, $title2 ?></p>
  <?php /* include './components/document.pdf'; */?> 

  <div class="container">
    <embed src="./components/document.pdf" type="application/pdf"  height="700px" width="500">
  </div>
  <?php include './components/footer.php'; ?>

</body>
</html>
    