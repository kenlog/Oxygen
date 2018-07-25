# Oxygen plugin for Kanboard

This theme allows you to add special features like replacing the logo and adds syntax highlighting for Markdown code.

# Screenshot
![dashboard](https://user-images.githubusercontent.com/11728231/43210967-c7ed5158-9030-11e8-86ed-ec11147d5ecd.jpg)
![board](https://user-images.githubusercontent.com/11728231/43210970-c94007bc-9030-11e8-9ef9-06f6fe5a7ca2.jpg)
![task1](https://user-images.githubusercontent.com/11728231/43210973-ca70ea2a-9030-11e8-98f6-c3358dc30b04.jpg)
![task2](https://user-images.githubusercontent.com/11728231/43210981-cbea6b9c-9030-11e8-8620-5747439a3dab.jpg)
![task3](https://user-images.githubusercontent.com/11728231/43210987-cda78a5a-9030-11e8-9b6e-797148fbd4a4.jpg)

Author
------------
- Valentino Pesce
- License MIT

Requirements
------------
Kanboard >= v1.2.5  
Kanboard installed at a web server.
You can find the download at [kanboard.org](https://kanboard.org/)

Installation
------------
You have the choice between 3 methods:

1. Install the plugin from the Kanboard plugin manager in one click
2. Download the zip file and decompress everything under the directory `plugins/Oxygen`
3. Clone this repository into the folder `plugins/Oxygen`

Note: Plugin folder is case-sensitive.  
**Important: remove all unused themes**

Add options for the theme
------------
- Replace the KB logo with your own logo  
For more information have a look in the config.php

Syntax highlighting for Markdown code
------------
151 languages currently supported by Prism, with their corresponding alias, to use in place of xxxx
 
```diff
-```xxxx
class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}
-```
+```php
class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}
+```
```
Contributing or modifying the theme
------------
Clone the repository: 
```console 
git clone https://github.com/kenlog/Oxygen.git
```
Reporting Issues
------------
Please [create an issue](https://github.com/kenlog/Oxygen/issues) for any bugs you've found.
