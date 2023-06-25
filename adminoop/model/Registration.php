<?php

    /**
     * Register class
     */
    class Registration
    {
        private $name;
        private $email;
        private $username;
        private $password;

        public function register($Data)
        {
            $this->name = $Data['name'];
            $this->email = $Data['email'];
            $this->username = $Data['username'];
            $this->password = $Data['password'];

            $Query = "INSERT INTO register(name, email, username, password)";
            $Query .= " VALUES('$this->name', '$this->email', '$this->username', '$this->password')";
            $Db = new Db();
            $Db->execute($Query);
            $Db->close();
            
        }
    }










?>