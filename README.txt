------------------------------
Setting Up The Project/CakePHP
------------------------------

The Project files can be placed on a webserver with only a few modifications necessary

If the project is NOT at the base url, the following changes will needed to be made:
For example, if you put cake php in its own directory, such as: "www.example.com/exampledir" instead of "www.example.com"

File: ".htaccess"
Add: "RewriteBase /exampledir/" to the 3rd line

File: "app/.htaccess"
Add: "RewriteBase /exampledir/app" to the 3rd line

File: "app/webroot/.htaccess"
Add: "RewriteBase /exampledir/app/webroot" to the 3rd line

Permissions:
All files should have 755 privileges
except for app/tmp/* which need 777 privileges

chmod -R 755
chmod -R 777 app/tmp

Setting up database:

"app\Config\database.php" will need to be populated with the info for your database

-------------
Project Files
-------------

The following are all the files that have been added/modified for this project from the default Cakephp installation files

MODEL:

app/Model/Choice.php
app/Model/Member.php
app/Model/Section.php
app/Model/Status.php
app/Model/StatusOfChoice.php
app/Model/StatusOfSection.php
app/Model/SurveyAnswer.php
app/Model/User.php

VIEW:

app/View/Users/index.ctp
app/View/Users/login.ctp

app/View/Admin/sections.ctp
app/View/Admin/index.ctp
app/View/Admin/choices.ctp

app/View/Members/index.ctp
app/View/Members/select.ctp

app/View/Layout/default.ctp

CONTROLLER:

app/Controller/AppController.php
app/Controller/MembersController.php
app/Controller/UsersController.php

WEBROOT:

app/webroot/css/survey.css
app/webroot/js/utils.js

SQL:

All files in sql do not directly affect the operation of the project but have been included for convenience

----------------
Some Handy Links
----------------

[CakePHP](http://www.cakephp.org) - The rapid development PHP framework

[Cookbook](http://book.cakephp.org) - THE Cake user documentation; start learning here!

[Plugins](http://plugins.cakephp.org/) - A repository of extensions to the framework

[The Bakery](http://bakery.cakephp.org) - Tips, tutorials and articles

[API](http://api.cakephp.org) - A reference to Cake's classes
