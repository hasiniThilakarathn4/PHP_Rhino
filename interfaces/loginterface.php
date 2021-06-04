<?php

interface BookInfo {

    public function get_book_name();
}

interface UserInfo {

    public function get_username();
}

//an interface extending from more than one interfaces
interface BookLog extends BookInfo, UserInfo {

    public function get_book_log();
}


class DBConnect implements BookLog {

    public function get_book_name() {
    
        echo "New Book\n";
    }

    public function get_username() {
    
        echo "User1\n";
    }

    public function get_book_log() {
    
        echo "Borrowed\n";
    }

    public function connect() {
    
        echo "Connecting to the database\n";
    }
}

$db = new DBConnect();
$db->get_book_name();
$db->get_username();
$db->get_book_log();
$db->connect();