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
echo '<div class="wrap-database-backup">' . "\n";
echo '<h2 class="title">Plugin database-backup Instructions</h2>' . "\n";
echo '<p class="database-description">';
echo esc_attr__("This plugin can make a backup of your database.", "database-backup") . '</p>' . "\n";

echo  esc_attr__('Server Requirements:',"database-backup");
echo '<br> ';

echo  esc_attr__('shell_exec php function available. Talk with your hosting company, if you have questions.',"database-backup");
echo '<br> ';
echo  esc_attr__('mySQLdump available. Talk with your hosting company.',"database-backup");
echo '<br> ';
echo '<br> ';
echo  esc_attr__('Go to Tab Run Backup and click Create Now button.', "database-backup");
echo '<br> ';
echo  esc_attr__("You can see your backups at tab Backups Made.", "database-backup");
echo '<br> ';
echo '<br> ';
echo  esc_attr__("If you need restore one backup, use phpMyAdmin from your hosting panel.", "database-backup");
echo '<br> ';
echo  esc_attr__("If you have large file, the best option is run mySQL command from your linux terminal.", "database-backup");
echo '<br> ';
echo  esc_attr__("You can find your backup Files Path at tab Backups Made. (look at their footer)", "database-backup");
echo '<br> ';
echo '<br>';
echo '<br> ';
esc_attr_e('Visit the plugin site for more details.', 'database_backup');
echo '<br>';
echo '<br>';
echo '<a href="https://database-backup.com/" class="button button-primary">' . esc_attr__('Plugin Site', 'database-backup') . '</a>';
echo '&nbsp;&nbsp;';



echo '</div>';
