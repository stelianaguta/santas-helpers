<?php include_once('common.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <title>Sign up as one of Santa's helpers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Styles -->
		<?php include_once('resources.php'); ?>
        <!-- jQuery validation -->
		 <script>
 		 $(document).ready(function(){
 
         $.validator.addMethod("confirmedPassword", 
                              function(value) {
                                  return ($("#password_first").val() === $("#password_second").val());
                              }, 
                              "Both password fields must be the same."
      	 );
        $.validator.addMethod("alphaNumeric", 
        	function(value) {
            expression = /^[a-zA-Z0-9]+$/; 
			return expression.test(value);                                  
          	}, 
          	"Alphanumeric characters only."
      	);
	 	var validator = $("#signupForm").validate({
	    rules: {
	        first_name: { 
	        	required: true,
	        	minlength: 2,
	        },
	        last_name: { 
	        	required: true,
	        	minlength: 2,
	        },
	        username: {
	            required: true,
	            minlength: 2,
	            alphaNumeric:true
	        },
	        birth_day: {
	        	required: true
	        },	
	        password_first: {
	            required: true,
	            minlength: 5
	        },
	        password_second: {
	            required: true,
	            minlength: 5,
	        	confirmedPassword: true
	        }        
	    },
	    messages: {
	        first_name: {
	        	required: "<?php echo $I18N[$DEFAULT_LANGUAGE]["please_enter_your_first_name"];?>",
	            minlength: jQuery.format("<?php echo $I18N[$DEFAULT_LANGUAGE]["please_enter_at_least_two_characters"];?>")
	        },    
	        last_name: {
	        	required: "<?php echo $I18N[$DEFAULT_LANGUAGE]["please_enter_your_last_name"];?>",
	            minlength: jQuery.format("<?php echo $I18N[$DEFAULT_LANGUAGE]["please_enter_at_least_two_characters"];?>")
	        },    
	        username: {
	            required: "<?php echo $I18N[$DEFAULT_LANGUAGE]["please_enter_a_username"];?>",
	            minlength: jQuery.format("<?php echo $I18N[$DEFAULT_LANGUAGE]["please_enter_at_least_two_characters"];?>"),
	            alphaNumeric: "<?php echo $I18N[$DEFAULT_LANGUAGE]["please_no_funny_signs"];?>"
	    	},
	    	birth_day: {
	            required: "<?php echo $I18N[$DEFAULT_LANGUAGE]["this_field_is_required"];?>"
	        },
	        password_first: {
	            required: "<?php echo $I18N[$DEFAULT_LANGUAGE]["please_enter_a_password"];?>",
	            minlength: jQuery.format("<?php echo $I18N[$DEFAULT_LANGUAGE]["please_enter_at_least_five_characters"];?>")
	    	},    	
	        password_second: {
	            required: "<?php echo $I18N[$DEFAULT_LANGUAGE]["please_retype__your_password"];?>",
	            minlength: jQuery.format("<?php echo $I18N[$DEFAULT_LANGUAGE]["please_enter_at_least_five_characters"];?>"),
	            confirmedPassword: "<?php echo $I18N[$DEFAULT_LANGUAGE]["password_dont_match"];?>"
	    		}    	
			},
			errorPlacement: function(error, element) {
				$("#error_for_"+element.attr('id')).html(error[0].innerHTML);
			},
			success: function(element) {
						console.log(element);		
				$("#error_for_"+element.attr('id')).html("");
			}	 
		 			 
	 		});
		});
 		 </script>
         <!-- jQuery datepicker -->
 		 <script>
   			 $(function() {
      		 $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
   		 });
    	</script>
	</head>
	<body>
		<?php include_once('header.php'); ?>
		<section class="container page">
			<div class="row-fluid"> 
	    	  <div class="span10 offset1">
    			   <img src="images/elf-helper.png" alt="mobi">
	     		   <div class="signup-form">
            	   <p class="text"><?php echo $I18N[$DEFAULT_LANGUAGE]["give_the_helper_a_face"];?></p>
             		<!-- SIGN UP FORM - BEGIN -->
	            	<form id="signupForm" method="post" action="submit.php">
	            	   <div class="error" id="error_for_first_name"></div>
	                   <p><input type="text" name="first_name" id="first_name" placeholder="<?php echo $I18N[$DEFAULT_LANGUAGE]["first_name"];?>"></p>
	                    <div class="error" id="error_for_last_name"></div>
	 				   <p><input type="text" name="last_name" id="last_name" placeholder="<?php echo $I18N[$DEFAULT_LANGUAGE]["last_name"];?>"></p>
	 				   <div class="error" id="error_for_username"></div>
	                   <p><input type="text" name="username" id="username" placeholder="<?php echo $I18N[$DEFAULT_LANGUAGE]["username"];?>"></p>
	 				   <div class="error" id="error_for_birth_day"></div>
	                   <p><input type="text" name="birth_day" id="datepicker" placeholder="<?php echo $I18N[$DEFAULT_LANGUAGE]["birth_day"];?>"></p>    
	                  <p><select type="text" id="Skills" name="skills">
				            <option value="1"><?php echo $I18N[$DEFAULT_LANGUAGE]["i_am_a_toy_craftsman"];?></option>
				            <option value="2"><?php echo $I18N[$DEFAULT_LANGUAGE]["i_can_read_letters_all_day_long"];?></option>
				            <option value="3"><?php echo $I18N[$DEFAULT_LANGUAGE]["i_love_to_feed_reindeers"];?></option>
				            <option value="4"><?php echo $I18N[$DEFAULT_LANGUAGE]["i_can_sing_and_dance_like_no_other"];?></option>
	        		   </select></p>
	        		   <div class="error" id="error_for_password_first"></div>
	                   <p><input type="password" name="password_first" id="password_first" placeholder="<?php echo $I18N[$DEFAULT_LANGUAGE]["password"];?>"></p>
	                   <div class="error" id="error_for_password_second"></div>
	                   <p><input type="password" name="password_second" id="password_second" placeholder="<?php echo $I18N[$DEFAULT_LANGUAGE]["confirm_password"];?>"></p>
	                   <p><input type="submit" id="btnSubmit" value="<?php echo $I18N[$DEFAULT_LANGUAGE]["become_a_helper"];?>"></p>
	      			</form>
      		  	    <!-- SIGN UP FORM - END -->
	       		 </div>
       		   </div>         
    		</div>
  		</div>  
	</section>
		<?php include_once('footer.php'); ?>
    </body>
</html>