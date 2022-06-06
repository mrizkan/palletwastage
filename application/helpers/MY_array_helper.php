<?php
/**
 * Created by PhpStorm.
 * User: gowtham
 * Date: 5/11/15
 * Time: 8:08 AM
 */


if (!function_exists('p')) {
    function p($item)
    {
        //        if(is_array($item)){
        echo "<pre>";
        print_r($item);
        echo "</pre>";
        //        }
    }
}

if (!function_exists('unique')) {
    function unique(&$item, $k)
    {
        $temp_uids = array();
        $unique_results = array();
        foreach ($item as $result) {
            if (is_array($result)) $result = arrayToObject($result);
            if (!in_array($result->$k, $temp_uids)) {
                $temp_uids[] = $result->$k;
                $unique_results[] = $result;
            }
        }
        $item = $unique_results;
        unset($temp_uids, $unique_results);
    }
}

if (!function_exists('super_unique')) {
    function super_unique($array)
    {
        $result = array_map("unserialize", array_unique(array_map("serialize", $array)));

        foreach ($result as $key => $value) {
            if (is_array($value)) {
                $result[$key] = super_unique($value);
            }
        }

        return $result;
    }
}

if (!function_exists('array_filer')) {
    function array_filer($arrays, $val)
    {
        if (is_array($arrays)) {
            foreach ($arrays as $key => $array) {
                $array = (array)$array;
                if (is_array($val)) {
                    $keys = array_keys($val);
                    foreach ($keys as $k) {
                        if (in_array($k, array_keys($array))) {
                            if (isset($array[$k]) && $val[$k] == $array[$k]) {
                                return $key;
                            }
                        }
                    }
                } else {
                    if (in_array($val, array_values($array))) {
                        return $key;
                    }
                }
            }
        }
        return null;
    }
}