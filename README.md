# Utility
Various text functions I use regularly.

## Getting started

Clone or download this project into your project folder. Then you'll need to include the 'utility.php' file.


### Prerequisites

This was created and tested using Php 5.6 but it is pretty simple and I assume it would work for any verion of Php 5.

##Examples

```
Contains
$string = "I love PHP!";
$result = Utility::contains($string, 'PHP');
returns: 1

Contains
$string = "I love cats!";
$result = Utility::contains($string, 'PHP');
returns:

Get filename with extension
$mypath = '/somedir/somedir/somedir/myfile.txt';
$result = Utility::getFilenameWithExt ( $filepath );
returns: myfile.txt

Get filename with out extension
$mypath = '/somedir/somedir/somedir/myfile.txt';
$result = Utility::getFilenameNoExt ( $filepath );
returns: myfile

Get directory name
$mypath = '/somedir/somedir/somedir/myfile.txt';
$result = Utility::getDirName ( $filepath );
returns: /somedir/somedir

Predump
$myarray = array(
	1 => "toast",
	2 => "eggs",
	3 => "potatoes",
	4 => "bacon",
	5 => "juice"
);predump("breakfast:", $myarray);
returns:
/somedir/somedir
breakfast:

array(5) {
  [1]=>
  string(5) "toast"
  [2]=>
  string(4) "eggs"
  [3]=>
  string(8) "potatoes"
  [4]=>
  string(5) "bacon"
  [5]=>
  string(5) "juice"
}


```




## Authors

* **Graham Sprague** - *Initial work* - [grahamsprague](https://github.com/grahamsprague/)
