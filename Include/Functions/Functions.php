<?php
    function Title(){
        global $title;
        if ( isset($title) ){
            echo $title;
        }
    }