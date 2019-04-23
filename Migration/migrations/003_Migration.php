<?php

// change class number to be proper number, in filename
class Migration_003
{

    // change id to match class number
    public static $id = 3;
    // change description to match functionality
    public static $description = "Third Migration";
    
    // add up and down to meet your needs
    public static function up()
    {
        \DBUtil::modify_fields('test', array('bool' => array('type' => 'varchar', 'constraint' => 50)));
    }
    
    public static function down()
    {
        \DBUtil::modify_fields('test', array('bool' => array('type' => 'bit', 'default' => 0)));
    }
    
}

?>
