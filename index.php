<?php 
    require_once 'classes/autoloader.php';

    use Classes\Page;
    use Classes\Req;
    use Classes\Controller;

    Page::ShowBegin();

    $page = Req::GetPage();

    
    switch ($page) {
        case 'users':
            Controller\UserController::Main($page);
            break;

        case 'advertisements':
            Controller\AdvertisementController::Main($page);
            break;
        
        default:
            Controller\PageController::Main($page);
            break;
    }

    Page::ShowEnd();

?>