<?php
/**
 * @ Author: Bill Minozzi
 * @ Copyright: 2022 www.BillMinozzi.com
 * Created: 2023 - Jan 16 23
 * 
 */
if (!defined('ABSPATH')) {
    die('We\'re sorry, but you can not directly access this file.');
}


/*
// Nonce ...
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('max_execution_time', 300);
@ini_set( 'memory_limit', '512M' );
*/




    if(isset($_GET['action']) and trim(sanitize_text_field($_GET['action'])) == 'removebackup' ){
      if(isset($_GET['namefile']) ) {
        //... die('Remove: '.$_GET['namefile']);
        $file = sanitize_text_field($_GET['namefile']);
        $filepath = DATABASE_BACKUP_PATH.'backups/'.$file;
        echo '<br>';
        if(unlink($filepath)){
            ?>
            <div class="notice notice-success is-dismissible">
            <p><?php _e( 'File Deleted!', 'database-backup' ); ?></p>
            </div>
            <?php
          }
        else
           echo '<f3>Delete Fail!</f3>';
        echo '<br>';
        echo '<br>';
      }
    }


    echo '<p></p>';
    echo '<h2 class="title">Database Backup</h2>' . "\n";

    $files = scandir(DATABASE_BACKUP_PATH.'backups/');
    $database_backup_ctd = 0;
    foreach ( $files as $file ) {
        $file = trim($file);
        if($file == '.' or $file == '..' or $file == 'index.php')
          continue;
        else
          $database_backup_ctd++;
    }
    if ( $files and $database_backup_ctd > 0 ) {
        echo '<table id="database-backup-table" >';
        echo '<th id="database-backup-thead">Date</th>';
        echo '<th id="database-backup-thead">Backup File</th>';
        echo '<th id="database-backup-thead">Size</th>';
        echo '<th id="database-backup-thead">Action</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody id="database-backup-tbody">';
        foreach ( $files as $file ) {
          if($file == '.' or $file == '..' or $file == 'index.php')
              continue;
              $nonce =  wp_create_nonce('backupdatabase_manage'); 
              $filepath = DATABASE_BACKUP_PATH.'backups/'.$file;
            echo '<tr id="database-backup-tr">';
            echo '<td id="database-backup-td">';
            echo  date ("F d Y H:i:s", filemtime(esc_attr($filepath)));
            echo '</td>';
            echo '<td id="database-backup-td">';
            echo $file;
            echo '</td>';

            if(! function_exists('database_backup_getHumanReadableSize')){
              function database_backup_getHumanReadableSize($bytes)
              {
                  if ($bytes > 0) {
                      $base = floor(log($bytes) / log(1024));
                      $units = ["B", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB"]; //units of measurement
                      return number_format($bytes / pow(1024, floor($base)), 3) .
                          " $units[$base]";
                  } else {
                      return "0 bytes";
                  }
              }
          }

            echo '<td id="database-backup-td">';
            echo database_backup_getHumanReadableSize(filesize($filepath));
            echo '</td>';

            echo '<td id="database-backup-td">';


            echo '<a title="Remove Database Backup" onclick="return confirm(\'Are you sure you want to delete database backup?\')" href="' . esc_url( site_url() ) . '/wp-admin/tools.php?page=database_backup_admin_page&action=removebackup&tab=table&_wpnonce=' . esc_attr( $nonce ) . '&namefile=' . esc_attr( ( $file ) ) . '" > Remove <a/> ';


            echo '</tr>';
        }
        echo '</tbody>';
        echo ' </table>';
    } else {
       echo '<p>No Database Backups Created!</p>';
    }
    echo '<br>';
    echo '<br>';
    echo 'The Backup files location is: '. esc_attr(DATABASE_BACKUP_PATH).'backups/';
