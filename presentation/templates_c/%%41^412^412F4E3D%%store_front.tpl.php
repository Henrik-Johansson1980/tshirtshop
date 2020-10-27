<?php /* Smarty version 2.6.31, created on 2020-10-27 21:02:57
         compiled from store_front.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'store_front.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "site.conf"), $this);?>

<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title><?php echo $this->_config[0]['vars']['site_title']; ?>
</title>
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
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "departments_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </nav> 
    <main id="main-content">
      Place contents here.
    </main>
  </div>
  <footer id="site-footer">Footer</footer>
</body>

</html>