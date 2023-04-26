<?php
class DBConn
{
    public static function PDO() : PDO
    {
        //bestaat niet maar is voor een eventuele database
        return new PDO("mysql:host=localhost;dbname=UnescoKw1c;", "root", "");
    } 
}
?>