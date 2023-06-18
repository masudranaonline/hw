<?php

    /**
     * Db class
     */

     class Db
     {
        private $Host;
        private $Name;
        private $Pass;
        private $Db;

        private $Connection;

        function __construct()
        {
            $this->Connection = new mysqli($this->Host, $this->Name, $this->Pass, $this->Db);
        }

        function execute($Query)
        {
            $Result = $this->Connection->query($Query);
            if($Result){
                return true;
            }else{
                return false;
            }
        }

        function close()
        {
            $this->close();
        }

     }

?>