<?php

namespace Classes\View;

class UserView {
    public static function ShowUserList($users) {
        echo '<h1>Users</h1>';
        foreach ($users as $user) {
            echo '<p>'.$user['name'].'</p>';
        }
    }
}