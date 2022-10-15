<?php
/*define('DB_USER', "nymfruekertrzs"); // Usuario
define('DB_PASSWORD', "bf39f16d1394414ceb824a3e23fdd6321aca423409b49269bed74e7bdd333b86"); // Password
define('DB_DATABASE', "d2fg8il1hct838"); // Nombre de la base de datos
define('DB_SERVER', "ec2-54-225-121-235.compute-1.amazonaws.com"); //host server*/
define('DB_USER', "uxcmnz7aw4xoriyz"); // Usuario
define('DB_PASSWORD', "a7LIjoEaiAjw9ivW1tN4"); // Password
define('DB_DATABASE', "bnzi5ztz8qqxe4pj35zj"); // Nombre de la base de datos
define('DB_SERVER', "bnzi5ztz8qqxe4pj35zj-mysql.services.clever-cloud.com"); //host server
   

/*
$host = "ec2-3-224-125-117.compute-1.amazonaws.com";
    $port = "5432";
    $dbname = "d1ootp6i0c4s08";
    $username = "hqvegpoqyfpjad";
    $password = "540f7a9d37e51591bb9d580fda605ceef1890d607a466f98da13e063d4267d63";


    try {
        $db = new PDO("pgsql:host={$host};dbname={$dbname}", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception){
        die("Connection error: " . $exception->getMessage());
    }

function format_uri( $string, $separator = '-' )
{
$accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|Grave|lig|orn|ring|slash|th|tilde|uml);~i';
$special_cases = array( '&' => 'and', "'" => '');
$string = mb_strtolower( trim( $string ), 'UTF-8' );
$string = str_replace( array_keys($special_cases), array_values( $special_cases), $string );
$string = preg_replace( $accents_regex, '$1', htmlentities( $string, ENT_QUOTES, 'UTF-8' ) );
$string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
$string = preg_replace("/[$separator]+/u", "$separator", $string);
return $string;
}*/


?>