<?php
function titlef(){
    global $title;
    if (isset($title)){
        echo $title;
    }else {
        echo "default";
    }
}