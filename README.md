# phpTextFileReader



### Description of phpTextFileReader. 
The file has following functions:
 
1. Function 1 - reads each character. 
 * charreader($filename)

2. Function 2 - reads each character into array
 * chararrayreader($filename)

3. Function 3 - reads file contents into array
 * arrayreader($filename)

4. Function 4 - searches for similar words/ phrase in file, case sensitive
 * searchwordcase($filename, $words)

5. Function 5 - searches for similar words/ phrase in file, case insensitive
 * searchwordnocase($filename, $words)

###### ($filename - The actual filename with the path. The folder should have read permissions.)

The usage is very simple and has been included as demos. The Demos have been included as tests (not unit tests) along with the type of file needed for all tests.
