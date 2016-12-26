<?php

/**
 * Created by PhpStorm.
 * User: Amit
 * Date: 3/9/2016
 * Time: 12:51 PM
 */
class Db_Controller
{
    private $host = 'localhost';
    private $username = 'root' ;
    private $password = 'root';
    private  $database = 'ashokvih_lps';

    function __construct()
    {
       $conn = $this->connectDB();

        if(!empty($conn)){
            $this->selectDB($conn);
        }
    }

    function connectDB(){
        $conn = mysql_connect($this->host,$this->username,$this->password);
        return $conn;
    }

    function selectDB($conn){
        mysql_select_db($this->database,$conn);
    }

    function runAssocQuery($query){
        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);
        $resultArray[] = $row;

        if(!empty($resultArray))
            return $resultArray;

    }

    function numRows($query) {
        $result  = mysql_query($query);
        $rowcount = mysql_num_rows($result);
        return $rowcount;
    }

    function runObjectQuery($query){
        $result = mysql_query($query);
        while($row = mysql_fetch_object($result)){
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }

    function runArrayQuery($query) {
        $result = mysql_query($query);
        while($row=mysql_fetch_array($result)) {
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }

    function runQuery($query){
        $result  = mysql_query($query);
        return $result;
    }
}