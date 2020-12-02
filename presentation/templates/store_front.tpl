{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="store_front" assign="obj"}
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible'content="text/html; charset=UTF-8">
  <title>{#site_title#}</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href="{$obj->m_site_url}styles/main.css">
  <script src='main.js'></script>
</head>

<body>
  <header id="header">
    <a href="{$obj->m_site_url}">
      <img src="{$obj->m_site_url}images/tshirtshop.png" alt="tshirtshop logo" />
    </a>
  </header>
  <div class="container">
    <nav id="main-nav">
      {include file="departments_list.tpl"}
    </nav> 
    <main id="main-content">
      Place contents here.
    </main>
  </div>
  <footer id="site-footer">Footer</footer>
</body>

</html>
