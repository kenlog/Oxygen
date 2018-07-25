# Oxygen plugin for Kanboard

This theme allows you to add special features like replacing the logo and adds syntax highlighting for Markdown code.

# Screenshot
![dashboard](https://user-images.githubusercontent.com/11728231/43210070-7cc977d0-902e-11e8-8642-721fb5a27213.jpg)
![board](https://user-images.githubusercontent.com/11728231/43210076-7f6f941a-902e-11e8-99a6-bda107345c7b.jpg)
![task1](https://user-images.githubusercontent.com/11728231/43210080-80be464a-902e-11e8-8c78-b39da8667a0a.jpg)
![task2](https://user-images.githubusercontent.com/11728231/43210082-82032d18-902e-11e8-9248-7512ed04e954.jpg)
![task3](https://user-images.githubusercontent.com/11728231/43210086-83afb302-902e-11e8-9024-102c00923661.jpg)

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
