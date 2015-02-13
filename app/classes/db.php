<?php
//Algorithm dealing with database
    class Db{     
        public function  Db(){
            mysql_connect("localhost","root","123456");
            mysql_select_db("test");  
        }
        public static function Counter(){
            $sql=mysql_query('select SUM(num_id) from numbers');
            return $sql;
        }
        public static function Configuration(){
            if(self::Myconfiguration() == false?self::EventNotifier("notConfigured"):true);
            if(self::MyConfiguration() !==false?self::EventNotifier($kindOfevent):false);
            
        }
        public static  function Myconfiguration(){
            return false;
        }
        private static function EventNotifier($kindOfevent){
            if($kindOfevent==="notConfigured"?$notify="You did not configure your account!":false);
            echo $notify;
        }
    }
    
?>