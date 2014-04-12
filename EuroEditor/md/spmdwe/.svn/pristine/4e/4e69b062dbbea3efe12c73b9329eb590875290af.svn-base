Single-page Markdown Web Editor (`spmdwe`)
=====
Copyleft sdaau, 2012

Homepage and demo:

* [http://sdaaubckp.sourceforge.net/spmdwe/spmdwe.php](http://sdaaubckp.sourceforge.net/spmdwe/spmdwe.php)

Intro
---

This is a small "web application", which consists of one file, `spmdwe.php`, (_which can be renamed to `index.php`_). It can be installed on a php server, and used to edit text files with live preview for Markdown syntax.

With proper permissions on the server directory, files can also be saved on the host (a backup of the previous version is also saved). There is also a switch that disables saving, enabled at the demo page for protection.

It is based on two other open-source packages, which are downloaded separately (see Installation below):

* [PHP Markdown](http://michelf.com/projects/php-markdown/)
* [pagedown - A JavaScript Markdown converter and editor](http://code.google.com/p/pagedown/) (_see also [this post](http://stackoverflow.com/a/135155/277826)_)

While the default .css style shown here is hardly impressive, do check out the list of some [free markdown css styles](spmdwe.php?file=markdown_styles.md), which can be used instead.

Installation
---

Here are the steps needed to install this application, in the form of `bash` commands:

    # mkdir spmdwe # if downloading manually, else:
    # checkout from svn - creates `spmdwe` directory and files in it
    svn co https://sdaaubckp.svn.sourceforge.net/svnroot/sdaaubckp/spmdwe spmdwe

    chmod 775 spmdwe  # on server, else cannot save backups!
    cd spmdwe

    # see http://michelf.com/projects/php-markdown/
    wget http://michelf.com/docs/projets/php-markdown-1.0.1o.zip

    # unzip creates "PHP Markdown 1.0.1o" directory
    unzip php-markdown-1.0.1o.zip

    # rename unzipped directory
    mv PHP* php-markdown

    # see http://stackoverflow.com/a/135155/277826
    # creates "pagedown" directory
    hg clone https://code.google.com/p/pagedown/

Usage
----

The application is pretty simple:

* there is a view mode, which doesn't show an edit box, shows the html view, and shows an edit button
* there is edit mode, which shows a live html preview, edit box below it, and shows save and discard buttons at the bottom
* Both `view` and `edit` can be used as values for the `mode` query string argument (see source code for details)
* Upon save, the old version is backed up, with a filename with appended unix timestamp; the new version is saved under the original filename - and the new version is displayed in view mode
* Discard simply shows the view mode of the selected file
* A file is chosen through modifying manually the argument `file` of the URL query string, say `http://example.com/spmdwe.php?file=somefile.txt`
* If a requested file (`somefile.txt`) doesn't exist, it should be created automatically, and edit mode displayed
* Otherwise, without any other arguments, a file is loaded in view mode
* There is a small debug box, which can be hidden, and shows only in edit mode (otherwise the debug info is written as comment in the HTML source in view mode)
* If the application is called without any arguments whatsoever (say, `http://example.com/spmdwe.php`), then it loads `readme.txt` and goes into edit mode.

You can also test this application via `php-cli`; on a Linux terminal, call:

    # test with php-cli:
    QUERY_STRING="file=readme.txt" php spmdwe.php


