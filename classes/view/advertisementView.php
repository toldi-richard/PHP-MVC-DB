<?php

namespace Classes\View;

class AdvertisementView {
    public static function ShowAdvertisementList($advertisements) {
        echo '<h1>Advertisements</h1>';

        foreach ($advertisements as $advertisement) {   

            switch ($advertisement['userid']) {
                case '1':
                    $name ='Gabriella Ágoston';
                    break;
                
                case '2':
                    $name ='János Ágoston';
                    break;
                
                case '3':
                    $name ='Amerigo Szilvia';
                    break;
                
                default:
                $name ='Hiba';
                    break;
            }

            echo '
                <p>'
                    .$name.' - '.$advertisement['title'].'
                </p>';
        }
    }
}