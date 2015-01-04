**PHPoole** is a light and easy static website generator written in PHP.
It takes your content (written in [Markdown](http://daringfireball.net/projects/markdown/) plain text format), merges it with layouts ([Twig](http://twig.sensiolabs.org/) templates) and generates static HTML files.

**Q/A:**

* Why the name _PHPoole_? It is [PHP](http://www.php.net) + [Poole](http://en.wikipedia.org/wiki/Strange_Case_of_Dr_Jekyll_and_Mr_Hyde#Mr._Poole) (in reference to [Jekyll Ruby](http://jekyllrb.com))
* Is PHPoole is stable? Not really, be careful!
* Is there a demo? Yes there is, see [PHPoole/demo](https://github.com/PHPoole/demo)
* How to get support? Through [GitHub issues](https://github.com/Narno/PHPoole/issues) system
* Can I contribute? Yes you could submit a [Pull Request](https://help.github.com/articles/using-pull-requests) on [GitHub](https://github.com/Narno/PHPoole)


Quick Start
-----------

### 1. Get PHPoole
    $ curl -SO http://phpoole.narno.org/downloads/v2/phpoole.phar

### 2. Initialize a new website
    $ php phpoole.phar init

### 3. Generate the static website
    $ php phpoole.phar generate

### 4. Serve the local website
    $ php phpoole.phar serve

----

Requirements
------------

Please see the [composer.json](composer.json) file.


Usage
-----

### Get PHPoole
    
    $ curl -SO http://phpoole.narno.org/downloads/v2/phpoole.phar


### Initialize

Once PHPoole is downloaded, run the following command to build all files you need (in the curent or target folder).

    $ php phpoole.phar init [folder]

Note: You can force initialization of an already initialized folder.

    $ php phpoole.phar init [folder] --force

After ```init```, here's how the folder looks like:

    [folder]
    +-- _phpoole
        +-- assets
        |   +-- css
        |   +-- img
        |   +-- js
        +-- config.ini
        +-- content
        |   +-- pages
        |   |   +-- *.md
        +-- layouts
        |   +-- *.html
        +-- router.php

#### _config.ini_

Website configuration file:

##### Site
| Setting           | Description                                    |
| ----------------- | ---------------------------------------------- |
| ```name```        | The name of your website                       |
| ```baseline```    | The baseline of your website                   |
| ```description``` | The description of your website                |
| ```base_url```    | The URL of your website                        |
| ```language```    | The Language of your website (Use IETF format) |

##### Author
| Setting           | Description                                    |
| ----------------- | ---------------------------------------------- |
| ```name```        | Your name                                      |
| ```email```       | Your e-mail address                            |
| ```home```        | The URL of your own website                    |

#### _layouts_

Layouts folder: PHPoole use [Twig](http://twig.sensiolabs.org) layouts (```default.html``` by default) to generate static HTML files.

#### _assets_

Assets folder: CSS, Javascript, images, fonts, etc.

#### _content_

Content folder: Where you can put your content (pages in [Markdown](http://daringfireball.net/projects/markdown/) format).


### Generate

Run the following command to generate your static website.

    $ php phpoole.phar generate [folder]

After ```generate```, here's how the folder looks like:

    [folder]
    +-- _phpoole
    |   +-- [...]
    +-- assets
    |   +-- css
    |   +-- img
    |   +-- js
    +-- *.html
    +-- README.md


### Serve

Run the following command to launch the built-in server to test your website before deployment.

    $ php phpoole.phar serve [folder]

Then browse [http://localhost:8000](http://localhost:8000).

If you want to generate then serve:
```$ php phpoole.phar generate [folder] --serve```
