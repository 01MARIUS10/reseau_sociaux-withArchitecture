<?php 

function dump($var){
    echo '<br> __________dump__________';
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    // }
    echo '------------------------------------<br>';
}
function dump_($var){
    echo '<br> __________dump__________';
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    // }
    echo '------------------------------------<br>';
}
function s(){
    dump(['session'=>$_SESSION]);
}
function path($root){
    return ROOTPATH.$root;
}
function script($style){
    return SERVER_ROUTE."/Public/Js/".$style;
}
function style($style){
    return SERVER_ROUTE."/Public/assets/".$style;
}
function img($style){
    return SERVER_ROUTE."/Public/img/".$style;
}



function requireAllIn($directoryPath){
    $files = scandir($directoryPath);

    foreach ($files as $file) {
        // Filtrer uniquement les fichiers.php
        if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            // Construit le chemin complet du fichier
            $filePath = $directoryPath. '/'. $file;
            
            // Charge le fichier
            require_once $filePath;
        }
    }
}


function redirect($path){
    dump('Location: '.SERVER_ROUTE.$path);
    header('Location: '.SERVER_ROUTE.$path);
    exit();
}



?>