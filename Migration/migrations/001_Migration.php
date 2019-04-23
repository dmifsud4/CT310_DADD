<?php

// change class number to be proper number, in filename
class Migration_001
{
    
    // change id to match class number
    public static $id = 1;
    // change description to match functionality
    public static $description = "Creates a table called 'test' with random information...";
    
    // add up and down to meet your needs
    public static function up()
    {
        \DBUtil::create_table(
            'test',
            array(
                'id' => array('type' => 'int', 'constraint' => 5, 'auto_increment' => true),
                'bool' => array('type' => 'bit', 'default' => 0),
                'first_name' => array('type' => 'varchar', 'constraint' => 50),
                'create_date' => array('type' => 'date'),
                'create_time' => array('type' => 'time'),
                'home_town' => array('type' => 'text'),
                'bank_balance' => array('type' => 'bigint', 'default' => 1000),
            ),
            array('id'));
    }
    
    public static function down()
    {
        \DBUtil::drop_table('test');
    }
    
}

?>
