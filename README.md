# g00341288_LReidy_WAD
A simple Angular/jQuery PHP online store web application 

## phoMart is a web application with a basic client-server architecture implemented in AngularJS, jQuery and PHP. 
The application is submitted in partial fulfillment of the requirements for the Web Application Development module 
of the BSc in Web Technologies and Programming at Galway-Mayo Institute of Technology (2016).

## Setup
To install and run the application you will need to have an appropriate development environment. Prerequisites include: 

* HTTP Server (Apache)
* PHP interpreter
* MySQL DB (MariaDb)
* Git
* NodeJS
* Bower

### Server-side Requirements

XAMPP or WAMP are suitable choices. XAMPP, much like WAMP, combines the Apache HTTP server, a MySQL database (MariaDB), 
and a selection of interpreters for scripts written in several languages, including PHP and Perl. XAMPP also comes 
bundled with phpMyAdmin a dashboard front-end to MySQL/MariaDB. The default XAMPP installation should be appropriate 
for this purpose. If you have not installed it already, you can find XAMPP [here](https://www.apachefriends.org/index.html). 

See the application manual for more information on preparing and configuring the database. 

### Client-side Requirements

The application exploits AngularJS and a number of third-party Angular modules, as well as jQuery. These can be installed
painlessly with the bower package manager. The easiest way to install bower is to first install [git](https://git-scm.com/)
and [NodeJS](https://nodejs.org/en/). The NodeJS installers come bundled with npm, the Node package manager. This can be used 
to install [bower](https://bower.io/)

To install bower with npm, execute the following command at the command line: 

`npm install -g bower`

The phoMart root directory includes a bower manifest file: bower.json. This collects information about the application's
dependenices and is used by the package manager to identify, download and install them. To install the application's
client-side dependencies execute the following at the command line in the root directory: 

`bower install`



