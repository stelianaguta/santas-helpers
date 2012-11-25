<?php include_once('common.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <title>Santa's helpers List</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Styles -->
		<?php include_once('resources.php'); ?>
     <body>
		<?php include_once('header.php'); ?>
        <section class="container page">
         <div class="row-fluid"> 
        	      <div class="span12"></div>
        	      <div class="span12"><p class="text"><?php echo $I18N[$DEFAULT_LANGUAGE]["santa_s_helpers"];?></p></div>
        	      <div class="span12"></div>
        </div>	      
        <div class="row-fluid"> 
        	<div class="span10 offset1">
        	     <table class="table">
        	      	 <tbody>
        	      	 	<tr>
	        	      	 	<th><?php echo $I18N[$DEFAULT_LANGUAGE]["first_name"];?></tg>
	        	      	 	<th><?php echo $I18N[$DEFAULT_LANGUAGE]["last_name"];?></th>
	        	      	 	<th><?php echo $I18N[$DEFAULT_LANGUAGE]["username"];?></th>
	        	      	 	<th><?php echo $I18N[$DEFAULT_LANGUAGE]["birth_day_word"];?></th>
	        	      	 	<th><?php echo $I18N[$DEFAULT_LANGUAGE]["skills"];?></th>
							</tr>
		<?php 
   		$result = mysql_query("SELECT * FROM users ORDER BY first_name ASC");
			while ($row = mysql_fetch_array($result)) 
			{
		?>
				  	 	<tr>
							<td><?php echo $row["first_name"];?></td>
						    <td><?php echo $row["last_name"];?></td>
						    <td><?php echo $row["username"];?></td>
						    <td><?php echo $row["birth_day"];?></td>
						    <td>
							<?php
						    	switch($row["skills"]){
						    		case 1:
						    			echo $I18N[$DEFAULT_LANGUAGE]["i_am_a_toy_craftsman"];
						    			break;
						    		case 2:
						    			echo $I18N[$DEFAULT_LANGUAGE]["i_can_read_letters_all_day_long"];
						    			break;
						    		case 3:
						    			echo $I18N[$DEFAULT_LANGUAGE]["i_love_to_feed_reindeers"];
						    			break;
						    		case 4:
						    			echo $I18N[$DEFAULT_LANGUAGE]["i_can_sing_and_dance_like_no_other"];
						    			break;			
						    	}
						  
						    ?>
							</td>
						</tr>
					<?php
						}
					?>
	  	 			</tbody>
				</table>
     	 	</div>         
    	</div>
  	</div> 
	</section>
		<?php include_once('footer.php'); ?>
    </body>
</html>