
<!DOCTYPE html>
<html>
<head>
    <title><?php echo isset($title) ? $title:""; ?></title>
</head>
<body>
   <header>
   		
   </header>
    
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    	
    </footer>
</body>
</html>
