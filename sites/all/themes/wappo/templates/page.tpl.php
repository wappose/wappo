<?php
$navigation = render($page['navigation']);
if (!empty($navigation) || !empty($logo) || !empty($site_name)): ?>
<header id="header-container" role="heading" class="header">

    <?php
    if (!empty($navigation)): ?>
      <nav role="navigation" class="navbar navbar-default navbar-wappo">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#wappo-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

 <?php if (!empty($logo)) : ?>
    <a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    </a>
<?php endif; ?>


        </div>
        <div class="collapse navbar-collapse" id="wappo-navbar-collapse-1">
        <?php print render($navigation); ?>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <?php endif; ?>
</header>
<?php endif; ?>

<div id="main-container">
  <div class="container">
<?php
  $header = render($page['header']);
  if (!empty($site_slogan) || $header): ?>
  <header role="banner" id="page-header" class="row">
    <div class="col-xs-12">
      <?php if (!empty($site_slogan)): ?>
        <p class="lead"><?php print $site_slogan; ?></p>
      <?php endif; ?>
      <?php print $header;  ?>
    </div>
  </header> <!-- /#page-header -->
  <?php endif; ?>

  <section role="article" class="row">
    <div class="col-xs-12">
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </div>
  </section>
</div>
</div>


<footer id="footer-container" class="footer">
  <div class="container">
      <?php print render($page['footer']); ?>
  </div>
</footer>
