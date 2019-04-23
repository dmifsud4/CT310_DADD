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
//         $stat = \DB::query('SELECT status FROM migration WHERE migration_id = '.$id.';')->execute()->as_array();
        $stat = \DB::select('status')->from('migration')->where('migration_id', $id)->execute()[0]['status'];
//         die("stat: ".$stat);
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
        
        if ($stat == 0) {
//             die("whaaaaat");
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
                if ($oldid == 1){
						\DB::query('UPDATE migration SET status = 0 WHERE migration_id = 2;')->execute();
						\DB::query('UPDATE migration SET status = 0 WHERE migration_id = 3;')->execute();
                }
            }
            else {
                die();
            }
        }
    }
    
    public static function update_migrations() {
        
        foreach (\DB::select('migration_id')->from('migration')->where('status', 0)->execute() as $key => $elem) {
            
            $id = $elem['migration_id'];
            if ($id < 10) {
                $id = '00'.$id;
            }
            else if ($id < 100) {
                $id = '0'.$id;
            }
            else {
                $id = ''.$id;
            }
        
            if ((include APPPATH.'migrations/'.$id.'_Migration.php') == true) {
                $class = 'Migration_'.$id;
                $class::up();
                \DB::query('UPDATE migration SET status = 1 WHERE migration_id = '.$elem['migration_id'].';')->execute();
            }
            else {
                die();
            }
            
        }
        
    }
    
}

?>
