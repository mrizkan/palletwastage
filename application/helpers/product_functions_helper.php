<?php


/**

 * Created by PhpStorm.

 * User: Pradeep Madusanka

 * Date: 07/02/18

 * Time: 11:08 AM

 */






if ( ! function_exists('get_product_discount'))

{

    function get_product_discount($id)
    {
        $data="<p>Sampath Credit Cards<br><span>15%</span> Rs. 114,665</p>";
        return $data;

    }

}
if ( ! function_exists('get_product_view'))

{

    function get_product_view($product,$bank,$wishlist=0)
    {
        $ci =& get_instance();
        $data['product']=$product;
        $data['today']=date('Y-m-d');
        $data['bank']=$bank;
        $data['wishList']=$wishlist;
        //p($data) ;
       // ob_start();
       return $ci->load->view('inc/product_view',$data);
       // $product_view = ob_get_contents();
        //ob_clean();

       // echo $product_view;


    }

}

