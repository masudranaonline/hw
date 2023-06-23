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

        function execute($Query)
        {
            $Result = $this->Connection->query($Query);
            if($Result){
                return $Result;
            }else{
                return false;
            }
        }

        function close()
        {
            $this->Connection->close();
        }
     }








?>