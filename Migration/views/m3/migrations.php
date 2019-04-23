<!DOCTYPE html>

<?php

//     $count = 0;
//     $descriptions = array();
// 
//     foreach (glob(APPPATH.'migrations/*.php') as $filename)
//     {
//         if ((include $filename) == TRUE)
//         {
//             $class_name = substr($filename, -13, 9).'_'.substr($filename, -17, 3);
//             $descriptions[$count] = array($class_name::$id, $class_name::$description);
//             $count++;
//         }
//         else
//         {
//             echo 'NOT OK';
//         }
//     }
?>

<header><h1>Migrations Dashboard</h1></header>

<br><br>

<table class="small table-striped table-bordered" id="migration_table">

<?php

//     var_dump($migrations[0]);

    $columns = array('migration_id', 'status');
    $result = DB::select_array($columns)->from('migration')->execute();

    echo '<tr><th>Migration ID</th><th>Description</th><th>Status</th><th>Actions</th></tr>';
    $count2 = 0;
    
    /*LATEST PROBLEM:
        I am able to "run up" the first migration when the form open and form
        close are outside of the foreach loop.  However, when they are outside
        "run down" does not work properly.  When I put the form open and form
        close inside the for each loop, like done below, nothing works.
        
        Q: Where do I put the form open and form close??
    */
    
    echo '<input type="submit" value="Update to Current">';
    foreach ($result as $row) {
        echo Form::open(array('action' => 'index/migration/run_migrations', 'method' => 'post'));
        $id = $row['migration_id'];
        echo '<tr>';
        if ($row['status'] == false) {
//             echo Form::open(array('action' => 'index/m3/run_migrations'));
            $status = "not run";
            $link = Form::submit("runup".$id, "Run Up");
        }
        else {
            $status = "ran";
            $link = Form::submit("rundown".$id, "Run Down");
        }
        echo Form::input('migrid', $id, array('id' => 'migr'.$id, 'class' => 'migrationsInput'));
        echo Form::input('migrst', $row['migration_id'], array('id' => 'migr'.$id.'stat', 'class' => 'migrationsInput'));
        echo '<td>'.$id.'</td>';
        echo '<td>'.$migrations[$id].'</td>';
        echo '<td>'.$status.'</td>';
        
        echo '<td>'.$link.'</td>';
        echo '</tr>';
        echo Form::close();
}
//     echo Form::input('migrid', $id, array('id' => 'migr'.$id, 'class' => 'migrationsInput'));
//     echo Form::input('migrst', $row['migration_id'], array('class' => 'migrationsInput'));
    
    
//     echo '<div>'.

?>

</table>
