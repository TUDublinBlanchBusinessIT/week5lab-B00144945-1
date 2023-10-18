# Week 5 Lab
Clone this repo into your www folder under laragon. In the command prompt cd into the \laragon\www folder. Make sure that you are in the correct folder and that laragon\www appears in the command prompt. Type git clone your-repo-url (Get your repo url from github after creating the repo). Then ***cd*** into the folder you have just cloned by typing ***cd week5Lab-yourgithubid***. Once you are in the correct folder, keep this command window open so you can type in your git commands as required.

This lab includes a number of steps to create a new booking in the Tennisclub database. By the end of this lab students will be able to:
- use the PHP include statement to incorporate code from another file
- use a loop to create a HTML dropdown based on data from a database
- create a UI that allows for capturing data to be stored in a DB based on dynamically changing data from the DB

# Part 1
Make three modifications to the newBooking.html form. 
- Change the method on the form from GET to POST. 
- Change the action on the form so that when the Submit button is pushed the form data will be submitted to a PHP file called createNewBooking.php. 
- Add two input boxes to the HTML form one which gets the member's ID for the booking and a second which gets the court ID make sure these input boxes use the names memberID and courtID respectively. Note the capitalisation on these names.
- Modify the createBooking.php file so that it contains an include statement that pulls in code from a file called dbcon.php. This file should contain your database credentials.
When you have completed these changes try to create a new tennisclub booking using your form - visit http://localhost/week5lab-yourgithubid/newBooking.html. Use memberID = 2 and courtID = 3. This will output some SQL code to the screen. If the code looks correct, comment out the line in createNewBooking.php that echoes the screen and uncomment the subsequent block of code which executes the SQL command against the connection to the database. Try submitting your form again, it should say added new record successfully. To see if it worked, type ***Select * from booking*** in the HeidiSQL database application. Is your booking there? Try it again with values memberID = 13 and courtID = 15. What happened? Why was this? Write a comment in the PHP code of createNewBooking.php which explains why these numbers don't work. Commit and push your changes.

# Part 2
Copy the file called showMembers.php to a new file, call the new file **createMemberDropdown.php**. Replace the credentials and the database connection lines of code in the file with a single line that includes all this code from the pre-existing file in your repo called dbcon.php. Modify this code so that rather than producing a HTML table, the code produces a HTML dropdown using the **&lt;SELECT&gt;** tag. Make sure that your select tag uses the ***name='memberID'***. To test and see your dropdown visit ***http://localhost/week5lab-yourghithubid/createMemberDropdown.php***. You should see a dropdown list of the members in the database. Do a ***Git add .*** to add your new file to the repo. Commit and push your changes.

# Part 3
Copy the newBooking.html file to a new file, call the new file newBooking.php. This will allow us to include PHP statements in this file which will then be executed on the server before the form is served up by the server. Modify this new file, replace the first input box for memberID that you included in Part 1 with the following "snippet" of PHP. **&lt;?PHP include createMemberDropDown.php;?&gt;**. Try this out by visiting ***http://localhost/week5Lab-yourgithubid/newBooking.php***. You should see the same form that you created in Part 1 except that the input box is now replaced with a drop down list of all the members of the tennis club from the database. Considering the error msg you got at the end of Part 2, what benefit does this new approach have in relation to that error? Include your answer in a comment in your newBooking.php file. Do a ***Git add .*** to add your new file to the repo. Commit and push your changes.






