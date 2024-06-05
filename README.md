# WordPress Delete Old Revisions Script

This repository contains a script to delete old revisions in WordPress up to a specific date using the Code Snippets plugin.

## How to Use

1. Install and activate the Code Snippets plugin on your WordPress site.
2. Create a new snippet and add the following code:

   ```php
   <?php
   /*
    * This script deletes old revisions in WordPress up to a specific date using the Code Snippets plugin.
    * Replace `YYYY-MM-DD` with your desired date before running the script.
    */

   function delete_old_revisions() {
       global $wpdb;

       // Set your desired date here
       $date = 'YYYY-MM-DD';

       $delete_revisions = $wpdb->query(
           $wpdb->prepare(
               "DELETE FROM $wpdb->posts
               WHERE post_type = 'revision'
               AND post_date < %s",
               $date
           )
       );

       if ($delete_revisions !== false) {
           echo "Old revisions deleted successfully.";
       } else {
           echo "Failed to delete old revisions.";
       }
   }

   // Run the function once
   delete_old_revisions();
   ?>

#Replace YYYY-MM-DD with your desired date.

#Save and activate the snippet.

#After the script runs, deactivate the snippet to prevent it from running again.
