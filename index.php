<?php
//TODO page 191

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
require ROOT."/vendor/autoload.php";



//need to add chapter key to address string

/**
 * @param $chapter
 * @throws Exception
 */
function includeIndexFile( $chapter )
{
    if( file_exists(ROOT."/{$chapter}/index.php") ){
        include ROOT."/{$chapter}/index.php";
    } else {
        throw new Exception("Sorry, such file hadn't been created yet");
    }
}

try{
    includeIndexFile( $_GET['chapter'] );
} catch (Exception $e) {
    echo $e->getMessage();

}
