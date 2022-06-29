<?php

namespace Classes\Controller;

class AdvertisementController {
    public static function Main(){
        $advertisements = \Classes\Model\Advertisement::GetAdvertisements();
        \Classes\View\AdvertisementView::ShowAdvertisementList($advertisements);
    }
}