<?php

namespace Classes\Model;

class Advertisement {
    public static function GetAdvertisements() {
        return Db::Select('advertisements');
    }
}