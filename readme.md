# Code Test
The code included here is a basic example of a shop front.
It includes opening times. We would like you to use this code and work through the exercises below to enhance it. Please document all code added.

1. There are some errors in the code. Please fix them. There are also some warnings. Please fix the warnings in the code.
2. Update the project to add the classes to represent the top 5 most popular products for this store. Please follow existing patterns for how models and views might work. Please include images for these products from free sources.
3. Add a database backend for all models in the project. 
4. Update HTML of the "Opening times" to render as a table.
5. Add a contact form with validation. The form must send the responses via email. The form must have the following fields: Name, email address, message.  
6. Save the contact form submissions to the database.

## Extra information
We use PHP 7.4 or 8.1, so please use this version and conform to the standards.

## Please share your code with pandrews@arden.ac.uk as a git repository.

## Changes
1. Resolved errors and warnings, such as correcting typos or fixing include paths.
2. Added ItemsModel, ItemsController, and ItemsView to handle the five most popular products. These mirror how the
opening times equivalents work.
3. Created a SQLite DB (So it could be packaged here without Docker.) to hold information about opening/closing times,
the five chosen products (name, image file path, price, qty), as well as form submissions. Also created a new DB.php 
class to handle all DB operations.
4. Converted the Items and Opening Times to render as HTML tables, with W3.css for styling. This change is in the 
respective render methods on the View classes, and uses Foreach loops to cycle through assoc arrays.
5. Added the contact form by creating another View class called FormView.php - this renders the form and uses the 
ContactSubmit.php file to process the POST data.
6. Submissions are saved by passing the POST data to a DB.php function, which creates a prepared statement to insert.
