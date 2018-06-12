
<!DOCTYPE html>
<html>
<head>
    <title> <?php echo $title; ?> </title>
</head>
<body>
   <header>
   		This is my Header
   </header>
    
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    	This is my footer.
    </footer>
</body>
</html>
