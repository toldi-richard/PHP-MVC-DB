<?php

namespace Classes\Controller;

class PageController {
    public static function Main($page){
        $pageData = \Classes\Model\Page::GetPageData($page);
        \Classes\View\PageView::ShowContent($pageData);
    }
}