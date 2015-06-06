<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Documentation</title>
</head>
<body>
	<h1>Precure Setup Documentation</h1>
	<h2>Table of contents</h2>
	<ul>
		<li><a href="#configuration">Configuring your application</a></li>
		<li><a href="#dbsetup">Setting up the database</a></li>
		<li><a href="#view">Editing a View file</a></li>
		<li><a href="#helper">Adding Global helper Functions</a></li>
	</ul>

	<h3 id="configuration">Configuring your application</h3>
	<p>
		Precure works with a MySQL database server and it is object oriented (OOP). Download and unzip the precure.zip file,
		then open the precure folder and open config.php file with any text editor like notepad. The file contains an array named
		<code>dbconfig</code>. The array is in a hastable format with string keys consisting of <code>username</code>,
		<code>password</code>,<code>host</code>,<code>database</code>. Read the <a href="#dbsetup">database configuration section</a> on how
		to configure the database. The config file also has a site array with a url key. This URL should match with the location of precure
		on your server. For default cases, if using a WAMP server application, your precure folder should be stored in:
		<pre>C:\Wamp\www\precure</pre>
		and in XAMPP server application, it should be stored in
		<pre>C:\xampp\htdocs\precure</pre>
		If using a Linux Operating system, it should be placed in the directory:
		<pre>/var/www/precure</pre>
		Following the directory placement above, your site url in the config file should be stored as:
		<pre>http://localhost/precure</pre>
		Making the config in this format:
		<pre>'url' => 'http://joseph.rex/projects/precure'</pre>
		If you will be adding more external libraries in the future, include them in the vendor array and use their service identifiers as
		key. They can be loaded from the autoload.php file.
	</p>
	<h3 id="dbsetup">Setting up the database</h3>
	<p>
		To set up the database, the application needs the database name, your hostname, your MySQL username, and MySQL password. The
		database can be created by firing up a MySQL console to write the following command:
		<pre>CREATE DATABASE precure;</pre>
		If you will rather have it done without <acronym title="Command Line Interface">CLI</acronym> (Command Line Interface),
		then you may use phpMyAdmin which has a friendly interface. If you have it installed with your server. You should be able to access
		it from here: <a href="http://localhost/phpmyadmin">http://localhost/phpmyadmin</a>.
		The password should be set to '' if you do not have a database password.
	</p>
	<h3 id="view">Editing a view file</h3>
	<p>
		Precure has a <acronym title="Model View Controller">MVC</acronym> structure. In order to avoid adding too much logic to the view
		files (HTML), most of the logic is done in the controllers like any MVC system. To edit contents of pages, you should check for the
		file in the view folder. To make a new view, it has to be registered in the <code>routes.php</code> file like so:
		<pre>'view-newfile'</pre>
		If you set a route like above then you have to create a file called newfile.php in your view folder.
	</p>
	<h3 id="helper">Adding Global helper Functions</h3>
	<p>
		Precure code is receptive to new functions by any developer that may be updating it. To add your own functions that will be globally
		available, edit the helpers.php and add functions as you may want.
	</p>
	<hr>
	<address>Need more help? Shoot me an email: <a href="mailto:joerex@ostrich-dev.com">joerex@ostrich-dev.com</a></address>
</body>
</html>