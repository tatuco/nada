<?php


namespace App\Core;


class Utils
{
    static function calculatePorcentage($part, $total)
    {
        $resp = 0;
        if ($part > 0 && $total > 0)
            $resp = ($part / $total) * 100;

        return round($resp, 0);
    }

     static function convert_from_latin1_to_utf8_recursively($dat)
    {
        if (is_string($dat)) {
            return utf8_encode($dat);
        } elseif (is_array($dat)) {
            $ret = [];
            foreach ($dat as $i => $d) $ret[ $i ] = self::convert_from_latin1_to_utf8_recursively($d);

            return $ret;
        } elseif (is_object($dat)) {
            foreach ($dat as $i => $d) $dat->$i = self::convert_from_latin1_to_utf8_recursively($d);

            return $dat;
        } else {
            return $dat;
        }
    }

    static function charactersSpecials($string) {
        $permitidos = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-""_[]{}:,=';
        for ($i=0; $i<strlen($string); $i++){
            if (strpos($permitidos, substr($string,$i,1))===false){
                echo substr($string, $i, 1);
                return false;
            }
        }
        return true;
    }
}
