<?php

class Views{
    public function loadLib($type, $pathFile, $ver=null){
        $dir = dirname(__FILE__).'/ui/';
        $version = ($ver!=null && is_array($ver)) ? '?v='.$vet['ver'] : '';
        if($type="css"){
            if(!file_exists($dir.$pathFile.'css')){
                return "";
            }
            $out = '<link rel="stylesheet" href="ui/'.$pathFile.'.css'.$version.'" />';
        }
        if($type="js"){
            if(!file_exists($dir.$pathFile.'js')){
                return "";
            }
            $out = '<script src="ui/katalog/plik.js'.$version.'" ></script>';
        }
        
        return $out;
    }
}
?>