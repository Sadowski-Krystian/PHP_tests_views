<?php

class Views{
    public function loadLib($type, $pathFile, $ver=null){
        $dir = dirname(__FILE__).'/ui/';
        
        if($type="css"){
            if(!file_exists($dir.$pathFile.'css')){
                return "";
            }
            $out = '<link rel="stylesheet" href="ui/'.$pathFile.'.css" />';
        }
        if($type="js"){
            if(!file_exists($dir.$pathFile.'js')){
                return "";
            }
            $out = '<script src="ui/katalog/plik.js" ></script>';
        }
        
        return $out;
    }
}
?>