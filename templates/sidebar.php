<div class="alert alert-warning" style="border-left-width:4px; margin-top:60px;">

  <p class="lead">
    <small class="glyphicon glyphicon-bullhorn"></small>
    In the current issue
  </p>

  <?php echo do_shortcode('[spl_mailgun_current format=toc link_posts=true]'); ?>
  <hr>
  <?php echo do_shortcode('[spl_mailgun_current title="Read the current issue &rarr;" class="btn btn-block btn-warning"]'); ?>

</div>

<?php dynamic_sidebar('sidebar-primary'); ?>