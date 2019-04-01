<?php
    include_once './../config/config.php';

    class DB {
        public static $connection = NULL;
        public $table = NULL;

        /**
         * --Constructor
         */ 
        public function __construct()
        {
            if(!self::$connection) {
                self::$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
                mysqli_set_charset(self::$connection, 'utf8');
            }
        }

        ///
        public function query($sql) 
        {
            $data = mysqli_query(self::$connection, $sql);
            return $data;
        }

        //
        public function select($sql)
        {
            $item = array();
            $sql->execute();
            $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $item;
        }
    }
?>