<?php

namespace Classes\Model;

class Page {
    public static function GetPageData($pageId) {
        $title = "Content";
        if ($pageId == "advertisement") {$title = "Advertisements";} 
        elseif ($pageId == "users") {$title = "Users";}
        
        return [
            'title' => $title
        ];
    }
}