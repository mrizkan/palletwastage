<?php



/**

 * Created by PhpStorm.

 * User: Gowtham

 * Date: 5/4/2016

 * Time: 3:34 PM

 */

class Front_Controller extends CI_Controller

{



    function __construct()

    {

        parent::__construct();

        $this->load->helper('text');

        if (!defined('IMG')) define('IMG', base_url('images') . "/");

        if (!defined('UP')) define('UP', base_url('uploads') . "/");

        if (!defined('UPT')) define('UPT', base_url('uploads/thumbs') . "/");

    }



    function view($page, $data = [])

    {

         if(!isset($data['siteTitle'])){
            $data['siteTitle']=TITLE;
        }
        if(!isset($data['metaDescription'])){
            $data['metaDescription']=META_DESCRIPTION;
        }
        if(!isset($data['metakeywords'])){
            $data['metakeywords']=META_KEYWORDS;
        }


        $this->load->view($page, $data);

    }



    static function convertCurrency($amount, $from, $to){

        $url  = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";

        $data = file_get_contents($url);

        preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);

        $converted = preg_replace("/[^0-9.]/", "", $converted[1]);

        return round($converted, 3);

    }





}