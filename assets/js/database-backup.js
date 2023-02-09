jQuery(document).ready(function(jQuery){
   // database-backup-run-backup



    jQuery('*').click(function(event) {
        var clsname = event.target.className;
        var idname = event.target.id;
        if(idname === 'database-backup-run-backup')
        {
            event.stopPropagation();
            event.preventDefault();
            console.log('id '+idname);
            jQuery('#database-backup-spinner').show(); 
            jQuery('#database-backup-help-run').hide(); 
            jQuery('#database-backup-spinner').css("display", "block");
            jQuery('#database-backup-run-backup').prop( "disabled", true );



            setTimeout(function() {
                document.getElementById("database-backup-form-run").submit();
            }, 5000);

        }
    });
   /* jQuery('#database-backup-spinner-help2').hide(); */
    jQuery( document ).ajaxStart(function() {
      jQuery( "#database-backup-spinner-help2" ).show();
    });
    jQuery( document ).ajaxComplete(function( event,request, settings ) {
        jQuery( "#database-backup-spinner-help2" ).hide();
    });
}); // end jQuery ready  
