<?php

// change class number to be proper number, in filename
class Migration_002
{
    
    // change id to match class number
    public static $id = 2;
    // change description to match functionality
    public static $description = "Second Migration";
    
    // add up and down to meet your needs
    public static function up()
    {
        \DBUtil::drop_fields('test', 'bank_balance');
    }
    
    public static function down()
    {
        \DBUtil::add_fields('test', array('bank_balance' => array('type' => 'bigint', 'default' => 1000),));
    }
    
}

?>
