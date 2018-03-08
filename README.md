# myOnlineCV

<p align="center">
  <img src="http://dhawalagrawal.decoder.co.in/IMAGES/mylogo.png" width="70"/>
</p> 

[![Join the chat at https://gitter.im/DhawalAgrawal](https://badges.gitter.im/DhawalAgrawal.svg)](https://gitter.im/DhawalAgrawal?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

>This is a portal to my online cv. http://dhawalagrawal.decoder.co.in/

# License
This repository is licensed under MIT License

## How to Setup

Setting up myOnlineCV on your local machine is really easy.
Follow this guide to setup your development enviroment.

### Requirements :

1. PHP > 5.6
2. MySQL
3. XAMPP
4. Adobe Dreamweaver
5. git


### Installation :

1. Get the source code on your machine via git.

	```shell
    git clone https://github.com/DhawalAgrawal/myOnlineCV.git
    ```

2. Install VOZ

	```
	Copy all the files to the htdoccs folder of Xampp server
	```

3. Setting up the Dreamweaver.

	```
	Open the index.php page in Dreamweaver
	 Click files on the right side of the window
   Manage sites
   New
   Site name myOnlineCV
   Local root folder < path\xampp\htdocs\myOnlineCV\
   HTTP Address < http://localhost/myOnlineCV/
   Server-Mode PHP MySQL
   Access LOCAL/NETWORK
   Testing server folder < path\xampp\htdocs\myOnlineCV\
   URL prefix < http://localhost/myOnlineCV/
   OK
	```


4. Create an empty sql database and run import database.

	```
	Start MySQL as Admin in XAMMP
	Create new database called myOnlineCV
	import database < path\myOnlineCV\sql\myOnlineCV.sql
	```

That's it, now start development at [http://localhost/myOnlineCV/index.php](http://localhost/myOnlineCV/index.php) in your browser

## Contribution guidelines

If you are interested in contributing to myOnlineCV, Open Issues, send PR and Don't forget to star the repo.
> Feel free to code and contribute
