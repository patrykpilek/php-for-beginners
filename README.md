# Php for beginners - Tutorial

## Docker & Docker Compose:

- Nginx
- PHP
- MySQL
- phpMyAdmin

## Branches:

- [x] Variables (E.g.: http://localhost:8000/variables/hello.php)
    - Display a message in your web browser
    - What they are, how to create them, and how to name them
    - Basic variable types; String and Numbers
    - Basic variable types; Boolean and Null
    - Perform operations on variables: Operators
    - Strings: Using single or double quotes and variable interpolation
- [x] Arrays
    - Introduction to Arrays: Create an Array and Access its elements
    - Assign manual array indexes and create associative arrays
    - Create and access multidimensional arrays
    - Process each element of an arrays: foreach loops
    - Process the value and index of each array element using a foreach loop
- [x] Control structures
  - Run code conditionally: the if construct
  - Compare one value to another: comparison operators
  - Run code multiple times based on a condition: while loops
  - Run code a specific number of times: for loops
  - Add more conditions to an if statement suing elseif
  - Perform different actions based on different conditions: the switch statement
- [x] An Introduction to HTML
  - The language of web pages: an introduction to html
  - Use head and body elements to structure an html document
  - Structure the content of your page using heading and paragraph elements
  - Give text emphasis or importance using the em and strong elements
  - Display ordered and unordered lists of items
  - Insert images into an HTML document
  - Add a link from one page to another using a hyperlink
  - Add semantic structures to the body of an html document
- [x] Mixing PHP and HTML
  - Create dynamic content: mixing html and php
  - Use PHP control structures mixed with HTML
  - Make HTML more readable:use whitespace and comments
  - Make PHP easier to maintain: use comments and coding standards
- [x] An Introduction to Databases
  - Where to store data in a dynamic website: an introduction to databases
  - Access the database server using phpMyAdmin and create a database
  - Use tables to store structured data in database
  - Select some data from the database, an introduction to SQL
  - Using indexes: make queries faster and order the result set
  - Connect to the database from PHP
  - Query the database form PHP and get the results
  - Combine PHP and HTML to show a formatted list of article
- [x] Multiple Pages in PHP
  - Add a new page to show a single article
  - Passing data in the URL:send the article ID using the query string
  - Avoid SQL Injection: validate the ID passed in from the query string
  - Don't repeat yourself: extract repeated code to a separate file
  - Organise and secure access to the included files
- [x] An Introduction to HTML Forms
  - Getting data from the user: an introduction to form in HTML
  - Change the method the form uses to send its data: get vs post
  - Get different types of data from the user: basic input types
  - Access data from the form on the server
  - Add a multi-line text control: the textarea element
  - Present a fixed list of options: the select element
  - Toggle an Option on or off: checkboxes
  - Select only one option from a list: radio buttons
  - Add an accessible caption to each input: the label element
  - Make the form easier to use: fieldsets and placeholders
  - Common form control attributes: readonly, disabled and autofocus
  - Validate input using HTML5 form validation
- [x] Inserting Data Into the Database from PHP
  - Add a form to insert a new article
  - Insert a new article into the database and get the ID of the new record
  - Avoid SQL Injection attacks: escape input
  - Avoid SQL Injection attacks: use prepared statements
- [x] An Introduction to Functions and Validation in PHP
  - Functions: define and call a function in PHP
  - Create a function to connect to the database
  - Validate the form data and redisplay the form with error messages if invalid
  - Maintain previously - supplied data when redisplaying an invalid form
  - Avoid cross-site scripting (XSS) attacks: escape untrusted content
  - Insert NULL if the publication date is empty
  - Validate the publication date is a valid date and time
  - Redirect to the article page after inserting a new article
- [x] Editing Data in the Database from PHP
  - Editing existing articles: create a function to get a single article
  - Add a form for editing an existing article
  - Add a validation function and validate the form data
  - Update and existing article in the database
  - Create a function to redirect to another URL
- [x] Deleting Data from the Database from PHP
  - Delete an existing article in the database
  - Use the POST request method to delete the article
  - Get confirmation from the user before deleting the article
  - Improve database performance: only use SELECT * when necessary
- [x] Using Sessions to Log in and Restrict Access
  - Make the web browser remember you between visits: an introduction to sessions
  - Store data in the browser: cookies in PHP
  - Store a value in the session to log in and log out a user
  - Add a login form and process the user's login credentials
  - Completely destroy the session on logout and redirect back to the index page
  - Increase security: prevent session fixation attacks
  - Restrict access to a page to a logged-in user only
- [x] An Introduction to Object-Oriented PHP
  - Classes and objects: an introduction to object-oriented PHP
  - Object attributes: adding properties to a class
  - Object functions: adding methods to a class
  - Object initialisation: adding methods to a class
  - Control Access: public and private visibility of properties and methods
  - Public properties vs getter and setter methods
  - Static properties and methods
  - Constants: using define and const to create constant values
  - Inheritance: using the extends keyword to reuse code and reduce repetition
  - Overriding methods and using the parent keyword to call the parent class code
  - Control Access: Protected visibility of properties and methods
- [x] PDO: PHP Data Objects
  - Add a database class and connect to the database using php data objects (PDO)
  - Queries in PDO: Change the index page to use the new database class
  - Catch database errors using exception and try ... catch blocks
  - Prepared statements with named parameters in PDO: view an individual article
  - Create an article class and use it on the index and article pages
  - Fetch the Database record as on object instead of an array
  - Update the article record using PDO
  - Move the validation function to the article class
  - Delete the article record using PDO
  - Insert a ndw article record using PDO and get the ID if the new record
- [x] Authentication Using the Database
  - Create a user class and method to authenticate a user
  - Create a table to store user data in the database
  - Authenticate the user with data from the database
  - Store passwords securely: PHP password hashing functions
- [x] Class Autoloading
  - Convert the auth include into a class
  - Convert the url include into a class
  - Autoloading classes: require class files automatically
  - Add an initialisation script including an autoloader
  - Returning a value using require: add a script to get the database connection
- [x] Site Administration
  - Move all authentication-related code to the auth class
  - Create an Admin index and load classes relative to the site root directory
  - Displaying tabular data in HTML: Tables
  - Display the admin list of articles in a table and restrict access to the page
  - Add sitewide navigation links
  - Move the edit and delete article scripts to the admin area
  - Move the new article script to the admin area
- [x] Pagination
  - Add a method to the article class to get a single page of article records
  - Add a paginator class and calculate the offset and limit from the page number
  - Get the page number from the query string
  - Validate the page number using the filter_var function
  - Add previous and next pagination links
  - Calculate the total number of records and pages
  - Add pagination to the admin index and create shared pagination links
- [x] Uploading Files
  - Add a form to upload an article image
  - Handle the upload error code
  - Restrict the size of all uploaded files using PHP configuration settings
  - Restrict the size of an uploaded file in an individual form
  - Restrict the type of an uploaded file
  - Create a folder for uploads and move the uploaded file into it
  - Sanitise the uploaded filename as a security precaution
  - Don't overwrite existing file in the uploads folder
  - Save the filename to the article record in the database
  - Display the uploaded image if an article has one
  - Delete the previous image file when an article image is updated
  - Add an option to delete an article's image file
- [x] Database Relationships
- [x] Using Relationships: Article Categories
  - Show and article's categories on the individual article page
  - Get an article's categories in an object method
  - Add a category class and form inputs to edit an article's categories
  - Insert article categories while avoiding duplicate records in the JOIN Table
  - Insert article categories more efficiently using a single query
  - Delete article category records if unchecked in the form
  - Add categories when inserting a new article record
  - Pagination and JOINS: show categories in the index page
- [x] JavaScript and PHP
  - Execute code in the browser: an introduction to javascript
  - Using the jQuery library
  - Add jQuery and a custom script file to the CMS
  - Add delete confirmation using JavaScript and POST
  - Client-side form validation using the jQuery validation
  - An introduction to Ajax with PHP
  - Use JSON to safely encode structured data in an Ajax request
- [x Dates and Times
  - Only show an individual article if it's been published
  - Only show published articles on the index page
  - Use the DateTimes class and the Time element to show the published date and time
  - Show the published date and time of articles in the admin area
  - Publish unpublished articles using an Ajax request
- [x] An Introduction to CSS
  - Add styling and formatting to HTML: an introduction to CSS
  - Using CSS frameworks: Bootstrap et al
  - Add a general layout and style the navigation links
  - Add styling and layout to forms and tables
  - Add a custom stylesheet and style the list of articles
  - Add a Date and Time Picker plugin to make selecting dates and times easier
- [ ] Sending Emails from PHP
  - Add a contact page for sending an email
- [ ] Configuration and Error Handling