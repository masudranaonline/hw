<?php

    /**
     * Db class
     */

     class Db
     {
        private $Host = 'localhost';
        private $Name = 'root';
        private $Pass = '';
        private $Db   = 'sms';

        private $Connection;

        function __construct()
        {
           $this->Connection = new mysqli($this->Host, $this->Name, $this->Pass, $this->Db);
        }

        public function execute($Query)
        {
            $Result = $this->Connection->query($Query);
            if($Result){
                return true;
            }else{
                return false;
            }
        }

        public function fetchData($Query)
        {
            $Result = $this->Connection->query($Query);
            if(mysqli_num_rows($Result) == 0){
                return null;
            }else{
                while($Rows = mysqli_fetch_assoc($Result)){
                    $Data[] = $Rows;
                }
                return $Data;
            }
        }

        public function close()
        {
            $this->Connection->close();
        }

     }

?>