# WordPress Database Backup and check Tables Automated With Scheduler 2024 Plugin #
Contributors: sminozzi
Tags: One-click WordPress database backup, One-click database backup, backup database, db backup, wordpress database backup
Requires at least: 5.2
Tested up to: 6.6
Stable tag: 2.28
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Database Backup Made Simple enables one-click backup and scheduled automatic backups. It provides added security with skip-extended-insert.

## Description ##


Do you feel concerned whenever WordPress displays a warning on your dashboard, prompting you to backup your database before proceeding? 
Well, worry no more! Just install this amazing plugin and with a single click, your backup is ready.

This plugin offers additional features like check tables and scheduling an automatic daily or weekly backup and determining how long you want to keep the backup files. 
The database backup creation process is incredibly fast and secure since the plugin uses mySQLdump to create the backup without compressing the file. 
If you prefer, there's an option to create a separate zip file for the backup. 
This helps avoid the nightmare of restoring a backup file if the compressed file is broken.

Additionally, with your favorite text editor, you can edit the backup file and select a single or multiple tables to restore if necessary.

This plugin prioritizes security, and backups are created with skip-extended-insert, ensuring there's one INSERT statement for each data row.

== How to Restore the Database: Free Plugin ==
<a href="https://bigdumprestore.com">How restore normal or very large Database Backup</a>


== Cloning or Moving and also How update old URLs and broken links on your database. ==
If you're planning on cloning or moving your site, you might encounter issues with old URLs in your content, excerpts, links, and custom fields. 
Luckily, with the free Easy Update URLs plugin, you can quickly and easily fix these problems in your database. 
This plugin is designed to help you seamlessly update old URLs and prevent broken links or missing content after the cloning or moving process. 
So, no need to worry about manually editing your database - the Easy Update URLs plugin takes care of everything for you.
<a href="https://wordpress.org/plugins/easy-update-urls">How update old URLs and broken links on your database.</a>


== Important ==
By security, download yours backups to your local computer 
or copy to your S3 cloud storage with our cloud plugins below.

<a href="https://s3cloudplugin.com">Free Plugin for Contabo S3 Object Storage</a>

<a href="https://toolsfors3.com">Free Plugin for Amazon AWS S3 Object Storage</a>

== Server Requirements ==
shell_exec php function available.
mySQLdump available.
**Backing up MySQL files is a delicate and crucial task. 
The safest way to do it is by using the `mysqldump` utility. 
Developed and maintained by the MySQL development team, it's both fast and secure. 
However, to execute this command, your PHP's `shell_exec` must be enabled. 
Without it, you can't utilize `mysqldump`.**
If you have questions, ask to your hosting company.

== Multisite ==
This plugin was not tested with Multisite. 

== Online Documentation of Database Backup ==
<a href="https://database-backup.com/">Online Documentation</a>
<a href="https://youtu.be/1PVCz4YlitA">Demo Video</a>

== Screenshots ==
1. Plugin Dashboard
1. Settings (Automatize Backups)
1. Plugin Run Backup Now
1. Backups Made (Zip, Download, Delete)
1. Plugin Check Tables Now


== Installation ==


1) Install via wordpress.org

2) Activate the plugin through the 'Plugins' menu in WordPress

or

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.


== Frequently Asked Questions ==

= Why is it important to have my PHP `shell_exec` enabled? =
Backing up MySQL files is a delicate and crucial task. The safest way to do it is by using the `mysqldump` utility. Developed and maintained by the MySQL development team, it's both fast and secure. However, to execute this command, your PHP's `shell_exec` must be enabled. Without it, you can't utilize `mysqldump`.

= What are dumps in SQL? =
A database dump contains a record of the table structure and/or the data from a database and is usually in the form of a list of SQL statements ("SQL dump"). 
A database dump is most often used for backing up a database so that its contents can be restored in the event of data loss.

= How do I create and Download a SQL dump? =
Install our free plugin Database Backup.

= How to Make a Database Backup in WordPress? =
Our free Database Backup Plugin is a simple and easy-to-use database backup solution to make a database backup in WordPress. Here are the steps to follow:

Install the Plugin: First, install and activate our free Database Backup Plugin from the WordPress plugin repository.

Create WP Database Backup Instantly: The plugin allows you to create a database backup in WordPress instantly with a simple click. No configuration is necessary.

Follow Best Practices: For best practices for WordPress database backups, ensure you store the backup in a secure location and schedule regular backups to maintain data integrity.

By using this plugin, you can easily create WP database backup files and ensure your data is safe. This database backup solution is designed to be user-friendly, making it easy for anyone to make a database backup in WordPress without any hassle.

= How restore my very large sql database backup? =
<a href="https://bigdumprestore.com">Use our free plugin Bigdump Restore.</a>

= What does 'skip-extended-insert' mean, and what are the advantages of using it? =
That means one INSERT statement for each data row. 
Backups with "skip-extended-insert" are considered more secure because they generate individual INSERT statements for each row of data instead of combining multiple rows into a single INSERT statement. 
This reduces the risk of data corruption or loss in case of an error during the restoration process, as each row is inserted individually, making it easier to identify and address any issues. 
Additionally, it provides better compatibility with version control systems and facilitates easier data recovery in case of a failure.

= How to Download a WordPress Database Backup? =

Downloading a backup of your WordPress database is straightforward with our plugin, database-backup. Here’s a step-by-step guide that integrates relevant topics:

1. **Install Our Free Plugin**: Start by installing our free database-backup plugin from the WordPress plugin repository, ensuring it’s the **best wordpress backup plugin** for your needs.

2. **Access the Plugin Dashboard**: Once installed, navigate to your WordPress admin panel and access the plugin dashboard to manage **database backup wordpress** options.

3. **Navigate to “Backups Made” Tab**: Within the plugin dashboard, locate and click on the “Backups Made” tab to view all available backups.

4. **Download Your Backup**: Find the backup you wish to download and click on the Download Link provided. This process is efficient and aligns with **wordpress database backup and download** practices.

By following these straightforward steps, you can effortlessly manage and download your WordPress database backups using our plugin, ensuring your data is always secure and accessible.

= How to Compress WordPress Database Backup? =

Compressing your WordPress database backup is crucial for optimizing storage and transfer efficiency. Here’s how it fits into related topics:

- **Best Practices for WordPress Database Backups**: Implementing compression ensures backups consume less space and are easier to manage, adhering to best practices.

- **Database Backup Solution**: Our plugin offers compression features as part of its comprehensive **database backup solution**, enhancing data management and security.

- **Speed Up WordPress Database Backup**: Compression speeds up the backup process by reducing the size of data transferred and stored.

- **Optimize WordPress Database Backup**: Utilizing compression optimizes resource usage and improves overall backup performance.

By compressing your WordPress database backups, you enhance efficiency while maintaining data integrity and security, crucial for effective website management.

= How Can I Activate Automatic Database Backup? =

To activate automatic database backup for your WordPress site using our plugin, follow these streamlined steps:

1. **Navigate to Plugin Settings**: Access the plugin dashboard and locate the “Settings” tab.

2. **Set Backup Frequency**: Within the settings, configure the backup frequency to schedule WordPress database backups. This includes options for **automated backup of WordPress database using cron**.

By implementing automatic WordPress database backup, your site’s data will be regularly secured without manual intervention. This automated system not only saves time but also enhances data protection and reliability. For advanced customization, explore features such as scheduled WordPress database backup to tailor backups according to your specific requirements.

= How Can I Speed Up and Optimize My WordPress Database Backup? =

If you're concerned about the performance of your database backup, our plugin, Database Backup, offers a highly efficient solution. Here are some key points to **speed up WordPress database backup** and **optimize WordPress database backup** processes:

1. **Use Our Database Backup Plugin**: Our plugin is designed to be the **best database backup for WordPress**, utilizing `mysqldump` to ensure maximum speed and efficiency.

2. **Optimize Your Database**: Regularly clean up your database by removing unnecessary data such as spam comments, post revisions, and transient options. This will reduce the size of your backup and further **speed up WordPress database backup** times.

3. **Leverage Our Reliable Database Backup Solution**: Our plugin provides a robust **database backup solution** that minimizes the impact on your website's performance while ensuring that backups are fast and reliable.

By choosing our Database Backup plugin, you can benefit from its optimized performance and **speed up WordPress database backup** processes effectively.


= Can I Do a One-Click Backup of WordPress Database? =

Yes, you can perform a one-click backup of your WordPress database using our plugin. Here’s how it aligns with various aspects related to database backups:

- **Best Practices for WordPress Database Backups**: Our plugin simplifies the backup process, adhering to best practices by making it easy and efficient to create backups.
  
- **Database Backup Solution**: It serves as a comprehensive **database backup solution** that ensures your data is secure and readily available for restoration.

- **Automated WordPress Database Backup**: If you schedule a backup using our plugin, it becomes fully automated, running at specified intervals without manual intervention.

- **Scheduled WordPress Database Backup**: By scheduling backups, you ensure regular updates of your data, enhancing data protection and workflow efficiency.

By utilizing our plugin, you benefit from its capability to facilitate swift **WordPress database backup** with minimal effort, ensuring your website data is safeguarded effectively.


= How can your plugin help me maintain data security with Automated Database Backup? =
Our plugin, Database Backup, allow you to do scheduled database backups of your WordPress database at regular intervals. 
This ensures your data is protected against unexpected losses or technical issues, enabling easy and quick recovery when needed.


== Tags Português ==
Este é um plugin WordPress gratuito simples e fácil de usar para fazer um backup de banco de dados para WordPress. Ele pode criar um backup do banco de dados instantaneamente, com um simples clique, nenhuma configuração é necessária.

== Tags Italiano ==
Questo è un plugin WordPress gratuito semplice e facile da usare per eseguire un backup del database per WordPress. Può creare un backup istantaneamente, con un semplice clic, non è necessaria alcuna configurazione.

== Changelog ==
2024-06-01   - Version 2.27/28 - Security improvements.
2024-05-31   - Version 2.26 - Security improvements.
2024-05-20   - Version 2.25 - Improved Read me and other security improvements.
2023-12-05   - Version 2.23/24 - Small Improvements.
2023-10-17   - Version 2.21/22 - Small Improvements.
2023-09-15   - Version 2.20 - Small Improvements.
2023-09-04   - Version 2.17/19 - Improved user interface.
2023-08-30   - Version 2.16 - Improved user interface.
2023-08-29   - Version 2.14/15 - Improved user interface.
2023-08-28   - Version 2.10/13 - Improved user interface.
2023-05-04   - Version 2.09 - Improved Cron services.
2023-04-04   - Version 2.08 - Added Option how many days you want keep the files.
2023-04-03   - Version 2.07 - Added automatic Cron Backup daily and weekly.
2023-03-06   - Version 2.06 - Integrated with BigDump Restore plugin.
2023-02-22   - Version 2.03/2.05 - Changed the Backup files place.
2023-02-20   - Version 2.01/2.02 - Minor Improvements.
2023-02-18   - Version 2.00 - Added Download and Zip options.
2023-02-08   - Version 1.01 - Minor Improvements.
2023-01-18   - Version 1.00 - Initial Release.

