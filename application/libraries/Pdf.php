<?php
/**
 * Created by PhpStorm.
 * User: Rangana Rudrigo
 * Date: 7/3/15
 * Time: 10:21 AM
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');


class Pdf {

    function pdf()
    {
        $CI = & get_instance();
        log_message('Debug', 'mPDF class is loaded.');
    }

    function load($param=NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';

//        if ($params == NULL)
        if ($param == NULL)
        {
            $param = '"en-GB-x","A4","","",10,10,10,10,6,3';
        }

        return new mPDF($param);
    }
}