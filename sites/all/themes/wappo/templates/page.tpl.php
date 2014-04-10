<header role="heading" class="container header">
    <?php if ($logo): ?>
    <a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    </a>
    <?php endif; ?>

    <?php if (!empty($site_name)): ?>
    <a class="name" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
    <?php endif; ?>


    <?php 
    $navigation = render($page['navigation']);
    if (!empty($navigation)): ?>
      <nav role="navigation">
        <?php print render($navigation); ?>
      </nav>
    <?php endif; ?>
</header>


<div class="main-container">

  <?php 
  $header = render($page['header']);
  if (!empty($site_slogan) || $header): ?>
  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print $header;  ?>
  </header> <!-- /#page-header -->
  <?php endif; ?>

  <section role="article" <?php print $content_column_class; ?>>
    <?php if (!empty($page['highlighted'])): ?>
      <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>
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
  </section>

</div>

<footer class="footer">
    <?php print render($page['footer']); ?>
</footer>
