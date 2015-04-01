<?php
/**
 * Description of filereader
 * The file has following functions
 * 
 * Function 1 - reads each character
 * 1. charreader($filename)
 * Function 2 - reads each character into array
 * 2. chararrayreader($filename)
 * Function 3 - reads file contents into array
 * 3. arrayreader($filename)
 * Function 4 - searches for similar words/ phrase in file, case sensitive
 * 4. searchwordcase($filename, $words)
 * Function 5 - searches for similar words/ phrase in file, case insensitive
 * 5. searchwordnocase($filename, $words)
 * 
 * @author: GBhat
 * @email: ganeshsurfs@gmail.com
 * @Website: N.A.
 */

include "../src/phpTextFileReader.php";

print "<i><br><br> Starting code testing \n</i><br>";

$testreader = new filereader();
$tempobject = $testreader->charreader("testing.txt");
print("<i><br>Printing Object:<br></i>");
print_r($tempobject);
print "<i><br>'charreader' function done<br></i>";

$tempobject = "";
$tempobject = $testreader->chararrayreader("testing.txt");
print("<i><br>Printing Object:<br></i>");
print_r($tempobject);
print "<i><br>'chararrayreader' function done<br></i>";

$tempobject = "";
$tempobject = $testreader->arrayreader("testing.txt");
print("<i><br>Printing Object:<br></i>");
print_r($tempobject);
print "<i><br>'arrayreader' function done<br></i>";

$tempobject = "";
$tempobject = $testreader->searchwordcase("testing.txt",'LINE');
print("<i><br>Printing Object:<br></i>");
print_r($tempobject);
print "<i><br> 'searchwordcase' search word case sensitive function done <br></i>";

$tempobject = "";
$tempobject = $testreader->searchwordnocase("testing.txt",'first LINE');
print("<i><br>Printing Object:<br></i>");
print_r($tempobject);
print "<i><br> 'searchwordnocase' search word case insensitive function done <br></i>";



print "<i><br><br> Ending code testing \n</i>";





?>