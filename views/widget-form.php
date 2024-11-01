<div class="whatapp-wrapper">
    <form class="whatapp-form" id="whatapp-widget-form">
        <p class="whatapp-text"><?php 
echo  $text ;
?></p>
        <?php 
if ( get_option( 'wp-phone-message-name-active-widget' ) ) {
    echo  '<input type="text" class="wp-phone-message-name" id="wp-phone-message-widget-name" placeholder="' . get_option( 'wp-phone-message-name-widget' ) . '"  ' . get_option( 'wp-phone-message-name-mandatory-widget' ) . ' />' ;
}
if ( get_option( 'wp-phone-message-phone-active-widget' ) ) {
    echo  '<input type="tel" class="wp-phone-message-phone" id="wp-phone-message-widget-phone" placeholder="' . get_option( 'wp-phone-message-phone-widget' ) . '"  ' . get_option( 'wp-phone-message-phone-mandatory-widget' ) . ' />' ;
}
?>
        <textarea class="wp-phone-message-message" id="wp-phone-message-widget-message" placeholder="<?php 
echo  get_option( 'wp-phone-message-textarea-widget' ) ;
?>" required></textarea>
        <p class="whatapp-error" id="whatapp-widget-error" ></p>
        <input type="submit" class="wp-phone-message-button" id="wp-phone-message-widget-button" value="<?php 
echo  get_option( 'wp-phone-message-button-widget' ) ;
?>" />
    </form>
</div>