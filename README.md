# MustCss
Theme for Kanboard - Kanban project management software

MustCss plugin
------------
This plugin allows you to and special features like replace the logo KB and Syntax highlight in markdown code by Prism.

Requirements
------------
Kanboard >= v1.2.5  
Kanboard installed at a web server.
You can find the download at [kanboard.org](https://kanboard.org/)

Installation
------------
Open the terminal in the plugins folder. Note that you don't need to create a new directory for MustCss, as cloning the repository via git will create a directory for you. 

Now, clone the repository: 
```console 
git clone https://github.com/kenlog/MustCss.git
```

**otherwise**
- Create a directory **MustCss** under the folder **plugins**
- Copy all source files into this new directory

Note: Plugin folder is case-sensitive.

Add options for the theme
------------
- Replace the KB logo with your own logo  
For more information have a look in the config.php

Syntax highlight code Markdown  
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

Author
------------
- Valentino Pesce
- License MIT

# Screenshot
![screen-board-3](https://user-images.githubusercontent.com/11728231/42727267-b8754144-87a3-11e8-8c3d-6151fa92b76d.jpg)
![screen-task-2](https://user-images.githubusercontent.com/11728231/42726115-91f9972c-878f-11e8-83b6-ef533f34327e.jpg)
![screen-task-1](https://user-images.githubusercontent.com/11728231/42726116-922fd0bc-878f-11e8-99da-76aecf8fd97d.jpg)
![screen-highlight](https://user-images.githubusercontent.com/11728231/42735774-4bcaa50e-885a-11e8-8018-0649620ce795.jpg)

Reporting Issues
------------
Please [create an issue](https://github.com/kenlog/MustCss/issues) for any bugs you've found.
