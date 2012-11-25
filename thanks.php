<?php include_once('common.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <title>Thank you</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Styles -->
		<?php include_once('resources.php'); ?>
	</head>
	<body>
		<?php include_once('header.php'); ?>
        <section class="container page">
        <div class="row-fluid"> 
        	      <div class="span10 offset1">
		    		<img src="images/elf-thanks.png" alt="mobi">
                    <div class="signup-form">
                     <div class="span12"></div>
                    <p class="text">Hooray, <?php echo $_GET['full_name']; ?> is now an official Santa's helper.</p>
                    </div>
                </div>         
            </div>
          </div>  
        </section>
		<?php include_once('footer.php'); ?>
    </body>
</html>
