<?php


class User_model extends MY_Model
{
    var $_table = "user_tab",
        $primary_key = "UserId";

    var $before_create = ['prop_data_before_create'];
    var $before_update = ['prop_data_before_update'];
}