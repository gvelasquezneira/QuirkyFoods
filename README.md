# Sock Market

This is a simple database application for beginners. It uses:

* A MySQL database
* HTML5 forms
* Vanilla JavaScript with `fetch()`
* PHP scripts to connect to the database and write new data into the database

This application can:

* Create a new record and add it to the database
* View all records in the database
* Update an existing record
* Delete an existing record

As an exercise in [a web development course](https://webappsplus.wordpress.com/), this is the students' second experience with PHP and MySQL.

Supplemental docs (Google docs):

* [Using the Sock Market files](https://bit.ly/mm-sockmarket-part2) — shows the *relationships* among all the files in this repo

* [Sock Market: MySQL and PHP](https://bit.ly/mm-sockmarket) — explains the JavaScript and PHP code for viewing the database records and adding a new record, with PHP `mysqli_` commands to prevent SQL injection

* [Import or Export a Database Table](https://bit.ly/export-import-db) — how to do this in phpMyAdmin (MySQL)

[You can try the live application here.](https://weimergeeks.com/sockmarket/)

## PHP without JavaScript

Because of an earlier assignment in the course, the Sock Market uses JavaScript to enter a new record into the database. The form is in the file *enter_new_record.php*. The JavaScript file called on submit is *js/enter.js*. That JavaScript file communicates with *enter.php* on the server, which sends a response back to *js/enter.js*, which in turn **rewrites the HTML** in *enter_new_record.php*.

It's possible to eliminate the JavaScript in that process and just use PHP instead.

The alternative files *enter_new_record_NOJS.php* and *enter_NOJS.php* provide all the changes necessary to eliminate the JavaScript, reducing three files to two. [You can try it out.](https://weimergeeks.com/sockmarket/enter_new_record_NOJS.php)

The code in *enter_new_record_NOJS.php* has very few differences from the code in *enter_new_record.php*.

However, you can see a larger number of differences in *enter_NOJS.php* if you compare it with *enter.php*. You'll see that a lot of HTML was added to *enter_NOJS.php* to make it work as the response page.

In the original *enter_new_record.php*, when the server returns a response saying that the new record has been written to the database (or not), the JavaScript there would write that response text **directly into the HTML** &mdash; and also hide the form. The response message would appear on *enter_new_record.php*.

If you look at the browser address bar after you submit a new record with *enter_new_record_NOJS.php* instead, you'll see that the response is on *enter_NOJS.php* and NOT on the original form page.

## File permissions on the server

If you're getting a 500 internal server error on a PHP file at your hosted website, it could be because of a permissions problem. Make sure all **folders** in your app have 755 and all **files** have 644.

.
