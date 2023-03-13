<?php

class Database {
    function connect(){
        return new MongoDB\Driver\Manager($_SERVER['MONGO_URI']);
    }
}

