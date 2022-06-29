<?php

namespace Classes;

class Req {
    public static function Get($name) {
        if(isset($_GET[$name])) {
            return htmlspecialchars($_GET[$name]);
        }
        return null;
    }
    public static function GetPage() {
        $page = self::Get('page');
        if(!$page) $page = "home";
        
        return $page;
    }
}