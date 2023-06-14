<?php

    require_once("config.php");

    class Resources extends Config {
        
        public function getResource($lang) {

            var_dump($lang);

            if ($lang === 'pt-PT') {
                var_dump('entrou');
                
                return parse_ini_file(__DIR__ . '/../Resources_PT.ini');

            } else if ($lang === 'en-GB') {

                return parse_ini_file(__DIR__ . '/../Resources_EN.ini');
            }
            var_dump('false');
        }
    }
