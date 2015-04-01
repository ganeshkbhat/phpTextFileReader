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

class filereader {
// Starting filereader Class
    
    /*
     * Definining variables used for functions
     */
    private $files; 
    private $fileopen;     
    private $filechar; 
    private $filearray; 
    private $location;     
    private $filename; 
    private $words;
    private $word;    
    private $handle;
    private $contents;
    private $locations;
    private $pos;
    private $offset;

    /*
     * Construct Function for the filereader Class
     */
    public function __construct(){       
        // Initialize a variable or value here, if needed, when customising
    }
    
    /*
     * Destruct Function for filereader Class
     */
    public function __destruct(){
        // Destroying declared Variables here
        //$files = "";
        //$fileopen = "";
        //$filechar = "";
        //$filearray = "";
        //$location = "";
        //$filename = "";
        //$words = "";
        //$handle = "";
        //$contents = "";
        //$locations = "";
        //$pos = "";
        //$offset = "";
        /* 
         * unset($files,$fileopen,$filechar,$filearray,$location,$filename,$words,$handle,$contents,$locations,$pos,$offset);
        */
    }

    /*
     * File Character read function with each character read
     */    
    public function charreader($filename){
    // Starting Function filecharreader here
        
        $files = fopen($filename,"r") or exit("Unable to open file!");        
        $filechar = array();
        while (!feof($files)){
            $filechar = fgetc($files);
            //echo $filechar;
            $filearray[] = $filechar;
        }                                 
        fclose($files);
        return $filearray;
        
    // Ending function filecharreader here
    }
    
    
    /*
     * File Character read function returning array
     */
    public function chararrayreader($filename){
    // Starting Function filechararrayreader here
        
        $filesopen = fopen($filename,"r") or exit("Unable to open file!");        
        $filearray = "";
        while (!feof($filesopen)){
            $filechar = fgetc($filesopen);
            $filearray .= $filechar;
            // echo $filearray;
        }
        fclose($filesopen);
        return $filearray;
        
    // Ending function filecharreader here
    }

    /*
     * File Complete Function Contents Reader
     */    
    public function arrayreader($filename){
    // Starting Function filereader here

        $filearray = file_get_contents($filename);
        // TEST FUNCTION: Printing filearray character.
        // var_dump($filearray);
        return $filearray;

    // Ending function filereader here
    }
    
    /*
     * SEARCH FOR SPECIFIC WORDS IN A TEXT FILE
     */
    public function searchwordcase($filename, $words){
    // Starting function WordSearch here
        
        $offset = null;
        $handle = fopen($filename, "r");
        $contents = fread($handle, filesize($filename));        
        fclose($handle);
        $locations = array();
        $pos = strpos($contents, $words, $offset);
        while ($pos !== false) {
        $locations[] = $pos;
        //print_r($pos);
        $offset = $pos + 1;
        $pos = strpos($contents, $words, $offset);
        }
        return $locations;
        //print_r($locations);
        
    // Ending Function WordSearch here  
    }
    
    /*
     * SEARCH FOR SPECIFIC WORDS IN A TEXT FILE, case insensitive
     */
    public function searchwordnocase($filename, $words){
    // Starting function WordSearch here
        
        $offset = null;
        $handle = fopen($filename, "r");
        $contents = fread($handle, filesize($filename));        
        //$word = "testing";
        fclose($handle);
        $content = strtoupper($contents);
        $word = strtoupper($words);
        $locations = array();
        $pos = strpos($content, $word, $offset);
        while ($pos !== false) {
        $locations[] = $pos;
        //print_r($pos);
        $offset = $pos + 1;
        $pos = strpos($content, $word, $offset);
        }
        return $locations;
        //print_r($locations);
        
    // Ending Function WordSearch here           
    }    
    
// Closing File Reader Class    
}

?>