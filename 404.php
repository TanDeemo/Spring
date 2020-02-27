<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!doctype html>
<!--[if (IE 8)&!(IEMobile)]>
<html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (gte IE 9)| IEMobile |!(IE)]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

  <title>404 — Page not found</title>

  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes"/>

  <link rel="shortcut icon" href="<?= $this->options->logoUrl ?>">
  <meta http-equiv="cleartype" content="on">

  <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/ghost.min.css?v=37cfc8869c'); ?>"/>

</head>
<body>
<main role="main" id="main">
  <div class="gh-app">
    <div class="gh-viewport">
      <div class="gh-view">
        <section class="error-content error-404 js-error-container">
          <section class="error-details">
            <section class="error-message">
              <h1 class="error-code">404</h1>
              <h2 class="error-description">Page not found</h2>
              <a data-pjax class="error-link" href="<?php $this->options->siteUrl(); ?>">Go to the front page →</a>
            </section>
          </section>
        </section>

      </div>
    </div>
  </div>
</main>
</body>
</html>
