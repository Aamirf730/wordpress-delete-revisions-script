<?php
function delete_old_revisions() {
    global $wpdb;

    // Set your desired date here
    $date = 'YYYY-MM-DD'; #Replace YYYY-MM-DD with your desired date.

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
