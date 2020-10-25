{* smarty *}
{config_load file="site.conf"}
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>{#site_title#}</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='styles/main.css'>
  <script src='main.js'></script>
</head>

<body>
  <header id="header">
    <a href="index.php">
      <img src="images/tshirtshop.png" alt="tshirtshop logo" />
    </a>
  </header>
  <div class="container">
    <nav id="main-nav">
      Site navigation
      {include file="departments_list.tpl"}
    </nav> 
    <main id="main-content">
      Place contents here.
    </main>
  </div>
  <footer id="site-footer">Footer</footer>
</body>

</html>
