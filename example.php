<?php
	
include ('utility.php');
	
$string = "I love PHP!";	
$result = Utility::contains($string, 'PHP');
echo '<pre>Contains<br>';
echo '$string = "I love PHP!";<br />';
echo '$result = Utility::contains($string, \'PHP\');';
echo '</pre>';
echo 'returns: '.$result;

$string = "I love cats!";	
$result = Utility::contains($string, 'PHP');
echo '<pre>Contains<br>';
echo '$string = "I love cats!";<br />';
echo '$result = Utility::contains($string, \'PHP\');';
echo '</pre>';
echo 'returns: '.$result;

	
$mypath = '/somedir/somedir/somedir/myfile.txt';
$result = Utility::getFilenameWithExt ( $mypath );
echo '<pre>Get filename with extension<br>';
echo '$mypath = \'/somedir/somedir/somedir/myfile.txt\';<br />';
echo '$result = Utility::getFilenameWithExt ( $filepath );';
echo '</pre>';
echo 'returns: '.$result;	
	

$mypath = '/somedir/somedir/somedir/myfile.txt';
$result = Utility::getFilenameNoExt ( $mypath );
echo '<pre>Get filename with out extension<br>';
echo '$mypath = \'/somedir/somedir/somedir/myfile.txt\';<br />';
echo '$result = Utility::getFilenameNoExt ( $filepath );';
echo '</pre>';
echo 'returns: '.$result;


$mypath = '/somedir/somedir/somedir/myfile.txt';
$result = Utility::getDirName ( $mypath );
echo '<pre>Get directory name<br>';
echo '$mypath = \'/somedir/somedir/somedir/myfile.txt\';<br />';
echo '$result = Utility::getDirName ( $filepath );';
echo '</pre>';
echo 'returns: '.$result;

$mypath = '/somedir/somedir/somedir/myfile.txt';
$result = Utility::getDirPath ( $mypath );
echo '<pre>Get directory path<br>';
echo '$mypath = \'/somedir/somedir/somedir/myfile.txt\';<br />';
echo '$result = Utility::getDirPath ( $filepath );';
echo '</pre>';
echo 'returns: '.$result;



?>