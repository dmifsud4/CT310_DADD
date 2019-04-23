<?php

namespace Model;

class Form extends \Model {
    
    public static function get_migrations() {
        
        $files = \File::read_dir(APPPATH.'migrations/');
        
        $count = 0;
        
        foreach ($files as $file) {
            if ((include APPPATH.'migrations/'.$file) == true) {
                $class = substr($file, 4, 9).'_'.substr($file, 0, 3);
//                 $migrations[$count] = array($class::$id, $class::$description);
                $migrations[$class::$id] = $class::$description;
                $count++;
            }
            else {
                die();
            }
        }
        
        return $migrations;
        
    }
    
    public static function run_migration($id, $status) {
        $oldid = $id;
        if ($id < 10) {
            $id = '00'.$id;
        }
        else if ($id < 100) {
            $id = '0'.$id;
        }
        else {
            $id = ''.$id;
        }
        
        if ($status == 0) {
            if ((include APPPATH.'migrations/'.$id.'_Migration.php') == true) {
                $class = 'Migration_'.$id;
                $class::up();
                \DB::query('UPDATE migration SET status = 1 WHERE migration_id = '.$oldid.';')->execute();
            }
            else {
                die();
            }
        }
        else {
            if ((include APPPATH.'migrations/'.$id.'_Migration.php') == true) {
                $class = 'Migration_'.$id;
                $class::down();
                \DB::query('UPDATE migration SET status = 0 WHERE migration_id = '.$oldid.';')->execute();
            }
            else {
                die();
            }
        }
    }
    
}

?>
