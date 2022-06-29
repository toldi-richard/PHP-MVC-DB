<?php

namespace Classes\View;

class PageView {
    public static function ShowContent($pageModel) {
        echo '<h1>'.$pageModel['title'].'</h1>';
    }
}