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

if ( function_exists('set_time_limit')) {
    @set_time_limit( 15 * 60 );
}
if ( function_exists('ini_set')) {
    @ini_set( 'memory_limit', '128M' );
}



echo '<h2 class="title">Database Backup</h2>' . "\n";



if (isset($_POST['process']) && $_POST['process'] == 'run_backup') {
    
    database_backup_run();

}
else {
    echo '<big>';
    echo '<div id="database-backup-help-run">';
    echo 'Just click the button to create a new database backup now.';
    echo '</div>';
    echo '</big>';
    echo "<br><big>After click, please, wait a few seconds... and don't reload page neither click back or stop in your browser.";
    echo '</big><br>';
    echo '<br>';

    echo '<form id="database-backup-form-run"  method="post" action="admin.php?page=database_backup_admin_page&tab=backup">';
    echo '<input type="hidden" name="process" value="run_backup" />';


    ?>
    <div id="database-backup-spinner">
      <img id="database_backup_snake"  src="<?php echo esc_attr(DATABASE_BACKUP_IMAGES); ?>/snake.gif" width="32">
    </div>
    <?php

    echo '<input id="database-backup-run-backup" class="database-backup -submit button-primary"  type="submit" value="Create Now"> ';
    echo '</form>' . "\n";
}
    return;
function database_backup_run() {
    $start_time = microtime(true); 
    $sql_filename = 'db_bup.sql'.'-'.strval(time()). strval(rand(11111,99999));
    if ( ! database_backup_mysqldump( DATABASE_BACKUP_PATH . 'backups/' . $sql_filename ) ) {
        echo('<h3>Fail to Create Backup!</h3>');
        return;
    }
    ?>
    <div class="notice notice-success is-dismissible">
    <p><?php _e( 'Please, confirm if your backup was created on Tab Backups Made.', 'database-backup' ); ?></p>
    </div>
    <?php
}
function database_backup_is_shell_exec_available()  {
    try {
        if (function_exists("shell_exec")) {
            $loadresult = @shell_exec('uptime');
            if (trim($loadresult) == NULL) 
                return false;
            else 
                return true;
        }
    } catch (Exception $e) {
        // echo 'Message: ' .$e->getMessage();
    }
    return false;
}
function database_backup_mysqldump( $sql_filename ) {
    if ( ! database_backup_is_shell_exec_available() ) {
        echo '<br>';
        echo '<h2>shell_exec is not available on your server. Please, talk with your hosting company to release it.<h2>';
        return false;
    }
    $mysqldump_method = 'mysqldump';
    $host = explode( ':', DB_HOST );
    $host = reset( $host );
    $port = strpos( DB_HOST, ':' ) ? end( explode( ':', DB_HOST ) ) : '';
    // Path to the mysqldump executable.
    $cmd =  database_backup_get_mysqldump_command_path();
    if(!$cmd) {
        echo '<h3>Fail to get mysqldump command path on your server!</h3>';
        return;
    }
    else
       $cmd = escapeshellarg($cmd);
    // don't want to create a new DB.
    $cmd .= ' --no-create-db';
    // Allow lock-tables to be overridden.
    if ( ! defined( 'WPDB_MYSQLDUMP_SINGLE_TRANSACTION' ) || WPDB_MYSQLDUMP_SINGLE_TRANSACTION !== false ) {
        $cmd .= ' --single-transaction';
    }
    // binary data is exported properly.
    $cmd .= ' --hex-blob';
    // Username.
    $cmd .= ' -u ' . escapeshellarg( DB_USER );
    // Don't pass the password if it's blank.
    if ( DB_PASSWORD ) {
        $cmd .= ' -p' . escapeshellarg( DB_PASSWORD );
    }
    // Set up the host.
    $cmd .= ' -h ' . escapeshellarg( $host );
    // The file we're saving.
    $cmd .= ' -r ' . escapeshellarg( $sql_filename );
    // The database.
    $cmd .= ' ' . escapeshellarg( DB_NAME );
    // Pipe STDERR to STDOUT.
    $cmd .= ' 2>&1';
 // Store any returned data if error.

    try{
       $stderr = shell_exec( $cmd ); // phpcs:ignore
    }
    catch(Exception $e) {
        error_log($e->getMessage());
        // wp_die($e->getMessage());
    }



    // Skip the new password warning that is output in mysql > 5.6.
    if ( trim( $stderr ) === 'Warning: Using a password on the command line interface can be insecure.' ) {
        $stderr = '';
    }
    if ( $stderr ) {
        echo '<h3>'.esc_attr($stderr).'<h3>';
        echo 'For details, look your error log file.';
        echo '<br>';
        return false;
    }
    return true;
}
function database_backup_get_mysqldump_command_path() {
    // Array with possible mysqldump locations.
    $mysqldump_locations = array(
        '/usr/local/bin/mysqldump',
        '/usr/local/mysql/bin/mysqldump',
        '/usr/mysql/bin/mysqldump',
        '/usr/bin/mysqldump',
        '/opt/local/lib/mysql6/bin/mysqldump',
        '/opt/local/lib/mysql5/bin/mysqldump',
        '/opt/local/lib/mysql4/bin/mysqldump',
        '/xampp/mysql/bin/mysqldump',
        '/Program Files/xampp/mysql/bin/mysqldump',
        '/Program Files/MySQL/MySQL Server 6.0/bin/mysqldump',
        '/Program Files/MySQL/MySQL Server 5.5/bin/mysqldump',
        '/Program Files/MySQL/MySQL Server 5.4/bin/mysqldump',
        '/Program Files/MySQL/MySQL Server 5.1/bin/mysqldump',
        '/Program Files/MySQL/MySQL Server 5.0/bin/mysqldump',
        '/Program Files/MySQL/MySQL Server 4.1/bin/mysqldump',
    );
    $mysqldump_command_path = false;
    // Find the one which works.
    foreach ( $mysqldump_locations as $location ) {
        if ( is_executable( $location ) )  {
            $mysqldump_command_path =  $location ;
        }
    }
    return $mysqldump_command_path;
}
