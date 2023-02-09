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
?>


<div id="database-backup-logo">
  <img src="<?php echo esc_attr(DATABASE_BACKUP_IMAGES); ?>/logo.png" width="250">
</div>
<?php
if (isset($_GET['tab']))
  $active_tab = sanitize_text_field($_GET['tab']);
else
  $active_tab = 'dashboard';
?>
<h2 class="nav-tab-wrapper">
  <a href="tools.php?page=database_backup_admin_page&tab=dashboard" class="nav-tab">Dashboard</a>
  <a href="tools.php?page=database_backup_admin_page&tab=backup" class="nav-tab">Run Backup</a>
  <a href="tools.php?page=database_backup_admin_page&tab=table" class="nav-tab">Backups Made</a>
</h2>
<?php
if ($active_tab == 'backup') {
  require_once(DATABASE_BACKUP_PATH . 'dashboard/backup.php');
} elseif ($active_tab == 'table') {
  require_once(DATABASE_BACKUP_PATH . 'dashboard/table.php');
} else {
  require_once(DATABASE_BACKUP_PATH . 'dashboard/dashboard.php');
}
