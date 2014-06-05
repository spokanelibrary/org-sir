<?php
/*
Template Name: - Home Page
*/
?>

<?php get_template_part('templates/page', 'header'); ?>
<!--
<div class="page-header">
    <h1>
      News &amp; new ideas
      <small>from your local Library</small>
    </h1>
    <?php// get_template_part('templates/entry-meta'); ?>
  </div>
-->
<h3 class="text-success" style="margin-top:0;">
  Published monthly, with occasional special editions
  <small></small>
</h3>

<div clas="row">
  <div class="col-md-4">
    <div class="alert alert-warning" style="border-left-width:4px;">

      <p class="lead">
        <small class="glyphicon glyphicon-bullhorn"></small>
        In the current issue
      </p>

      <?php echo do_shortcode('[spl_mailgun_current format=toc link_posts=true]'); ?>
      <hr>
      <?php echo do_shortcode('[spl_mailgun_current title="Read the current issue &rarr;" class="btn btn-block btn-warning"]'); ?>
    </div>
  </div>
  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <p class="text-muted lead" style="margin:0; padding:0;">
          <small class="glyphicon glyphicon-envelope"></small>
          Stay in touch: Library News delivered to your inbox
        </p>
      </div>
      <div class="panel-body">
        <p>
          <a class="btn btn-block btn-primary" href="/subscribe/">
            Sign me up for Library News →
          </a>
        </p>

        <?php get_template_part('templates/content', 'page'); ?>

      </div>
    </div>
    
  </div>
</div>





