santas-helpers
==============

The story
-------

Santa won't come to your office unless he can find some helpers. There are too many
iPads and laptops to carry so he cannot handle it all by himself on the narrow dutch stairs.
So, make sure you sign-up for the position of "Official Stanta Helper" (OSH from now on).
This simple  HTML5/CSS/JS + PHP/SQL app is made with the one single purpose in mind: help Santa
get as many helpers as possible. Being online will make this more visible and hopefully Santa
will actually come. If he doesn't that means there weren't enough helpers....

Screenshots
-------

![Signup](https://github.com/stelianaguta/santas-helpers/blob/master/screenshots/santas_helpers_signup.png)
![Thank you](https://github.com/stelianaguta/santas-helpers/blob/master/screenshots/santas_helpers_thankyou.png)
![List](https://github.com/stelianaguta/santas-helpers/blob/master/screenshots/santas_helpers_list.png)

Technical details
-------

### HTML/CSS & JavaScript :
* [Twitter Bootstrap fluid grid](http://twitter.github.com/bootstrap/scaffolding.html#fluidGridSystem) for responsive layouts 
* [jQuery and jQuery validation](http://docs.jquery.com/Plugins/Validation) for form validation
* defined custom jQuery validation rule/method
* custom error & standard messages
* [jQuery datepicker](http://jqueryui.com/datepicker/)
* tested in Safari, Chrome, Opera, Firefox

### PHP & SQL :
* used i18N dictionary with messages in English and French (extensible to other languages)
* used PHP session to hold the current selected language
* defined settings in a separate file (as static variables) for easy deployment
	
### The app is separated into several files : 
* common  (ie. langauage, database connection)
* language dictionary
* settings
* header & footer
* files for screens

Deployment instructions
-------
1. clone the reposiory
2. create an mySQL database and add username/password credentials for it
3. fill in the placeholders in settings.php so that the application knows how to connect to your DB
4. execute the SQL script in "deployment/init_database.sql" to create the table(s) inside the database 
5. copy the entire folder "santas-helpers" into the web root of a PHP5 enabled web server (ie. Apache HTTPD)
6. DONE. Use your browser to access http://your_domain/santas-helpers/  