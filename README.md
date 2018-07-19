# Oxygen plugin for Kanboard

This theme allows you to add special features like replacing the logo and adds syntax highlighting for Markdown code.

# Screenshot
![screen-board-3](https://user-images.githubusercontent.com/11728231/42727267-b8754144-87a3-11e8-8c3d-6151fa92b76d.jpg)
![screen-task-2](https://user-images.githubusercontent.com/11728231/42726115-91f9972c-878f-11e8-83b6-ef533f34327e.jpg)
![screen-task-1](https://user-images.githubusercontent.com/11728231/42726116-922fd0bc-878f-11e8-99da-76aecf8fd97d.jpg)
![screen-highlight](https://user-images.githubusercontent.com/11728231/42735774-4bcaa50e-885a-11e8-8018-0649620ce795.jpg)

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

Add options for the theme
------------
- Replace the KB logo with your own logo  
For more information have a look in the config.php

Syntax highlighting for Markdown code
------------
151 languages currently supported by Prism, with their corresponding alias, to use in place of php
- And if you'd like to use syntax highlighting, include the language:  
```diff
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
