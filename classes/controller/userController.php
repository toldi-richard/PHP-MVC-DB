<?php

namespace Classes\Controller;

class UserController {
    public static function Main($users){
        $usersData = \Classes\Model\User::GetUsers($users);
        \Classes\View\UserView::ShowUserList($usersData);
    }
}