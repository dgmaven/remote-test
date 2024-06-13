<?php

class Flasher {

    public static function setFlash($key, $info, $action, $type)
    {
        $_SESSION ['flash'] = [
            'key' => $key,
            'info' => $info,
            'action' => $action,
            'type' => $type

        ];

    }

    public static function flash()
    {
        if ( isset ($_SESSION['flash']) ) {
            echo    '<div class="alert alert-'.$_SESSION['flash']['type'].' alert-dismissible fade show" role="alert">
                        '.$_SESSION['flash']['key'].' <strong>'.$_SESSION['flash']['info'].'</strong> '.$_SESSION['flash']['action'].'
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            
            unset($_SESSION['flash']);
        }
    }
}