<?php

namespace Classes\Model;

class User {
    public static function GetUsers($pageId) {
        return Db::Select('users');
    }
}