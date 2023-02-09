<?php
/*
Plugin Name: Database Backup
Description: Database Backup Made Simple. 
Version: 1.01
Text Domain: database-backup
Author: Bill Minozzi
Author URI: http://billminozzi.com
License:     GPL2
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
// Make sure the file is not directly accessible.
if (!defined('ABSPATH')) {
    die('We\'re sorry, but you can not directly access this file.');
}
$database_backup_plugin_data = get_file_data(__FILE__, array('Version' => 'Version'), false);
$database_backup_plugin_version = $database_backup_plugin_data['Version'];
define('DATABASE_BACKUP_VERSION', $database_backup_plugin_version);
define('DATABASE_BACKUP_URL', plugin_dir_url(__file__));
define('DATABASE_BACKUP_PATH', plugin_dir_path(__file__));
define('DATABASE_BACKUP_IMAGES', plugin_dir_url(__file__) . 'assets/images');
// function exist...
add_action('init', "database_backup_init", 1000);
add_action('admin_enqueue_scripts', 'database_backup_enqueue', 1000);
function database_backup_init()
{
    if (is_admin())   
        add_management_page(
            'Data Base Backup',
            'Database Backup',
            'manage_options',
            'database_backup_admin_page', // slug
            'database_backup_admin_page'
        );
}
function database_backup_enqueue()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui-core');
	wp_enqueue_style('database-backup', DATABASE_BACKUP_URL . 'assets/css/styles.css');
    wp_register_script('database-backup-js', DATABASE_BACKUP_URL . 'assets/js/database-backup.js', false);
    wp_enqueue_script('database-backup-js');
}
function database_backup_admin_page()
{
    require_once DATABASE_BACKUP_PATH . "/dashboard/dashboard_container.php";
}