<?php get_header(); ?>

<main>
<?php
if ( isset( $_POST['note'] ) ) {
    if ( isset( $_POST['amit_nonce'] )
        && wp_verify_nonce( $_POST['amit_nonce'], 'amit_save_action' ) ) {
        echo '<p>Saved: ' . esc_html( $_POST['note'] ) . '</p>';
    } else {
        echo '<p>Security check failed.</p>';
    }
}
?>
    <form method="post">
        <?php wp_nonce_field( 'amit_save_action', 'amit_nonce' ); ?>
        <input type="text" name="note">
        <button type="submit">Save</button>
    </form>
</main>

<?php get_footer(); ?>