# **Clock Angle**
#### Charles Peden & Andrew Devlin, 2017

&nbsp;
## Description
An App that determines whether a Chess Queen can attack a given position.

## Specifications

* if the queen and the target are in the same position return false. input: queen = 1, 5 target = 1, 5 output: false
* If either the users x or y is the same as the targets x or y respectively return true. input: queen = 3, 6 target = 3, 7 output: true
* If the lesser of the x subtracted from the greater of the is = the lesser of the y subtracted from the greater of the y return true. input: queen = 1, 8 target = 6, 3 output: true


&nbsp;
## Setup/Installation Requirements
##### _To view and use this application:_
* You will need the dependency manager Composer installed on your computer to use this application. Go to [getcomposer.org] (https://getcomposer.org/) to download Composer for free.
* Install and configure Mamp, MySQL, and PDO.
* Go to my [Github repository] (https://github.com/ccbpeden/queen-attacks)
* Download the zip file via the green button
* Unzip the file and open the **queen-attacks** folder
* Open Terminal, navigate to **queen-attacks** project folder, type **_composer install_** and hit enter
* Navigate Terminal to the **queen-attacks/web** folder and set up a server by typing **_php -S localhost:8000_**
* Activate Mamp and Start Servers
* Type /Applications/MAMP/Library/bin/mysql --host=localhost -uroot proot
* In a web browser, browse to localhost:888/phpmyadmin.
* Click the import tab in the phpmyadmin gui and select the zipped database included in the project folder.
* The application should now load and be ready to use!
* Type **_localhost:8000_** into your web browser

&nbsp;
## Known Bugs
* No known bugs

&nbsp;
## Technologies Used
* PHP
* Silex
* Twig
* Composer
* Bootstrap
* CSS
* HTML

&nbsp;
_If you have any questions or comments about this program, you can contact me at [ccbpeden@warpmail.net](mailto:ccbpeden@warpmail.net)._

Copyright (c) 2017 Charles Peden & Andrew Devlin

This software is licensed under the MIT license
