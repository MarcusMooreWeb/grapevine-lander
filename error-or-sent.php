<?php if (! empty( $errors ) ) : ?>
  <div class="errors">
    <p class="bg-danger"><?php echo implode( '</p><p class=a"bg-danger">', $errors ); ?></p>
  </div>
  <?php elseif ( $sent ) : ?>
  <div class="success">
    <p class="bg-success">Your email address was sent successfully. We'll be in touch!</p>
  </div>
 <?php endif; ?>