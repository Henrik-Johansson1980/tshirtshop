<?php /* Smarty version 2.6.31, created on 2020-12-02 10:54:56
         compiled from store_front.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'store_front.tpl', 2, false),array('function', 'load_presentation_object', 'store_front.tpl', 3, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "site.conf"), $this);?>

<?php echo smarty_function_load_presentation_object(array('filename' => 'store_front','assign' => 'obj'), $this);?>

<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible'content="text/html; charset=UTF-8">
  <title><?php echo $this->_config[0]['vars']['site_title']; ?>
</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href="<?php echo $this->_tpl_vars['obj']->m_site_url; ?>
styles/main.css">
  <script src='main.js'></script>
</head>

<body>
  <header id="header">
    <a href="<?php echo $this->_tpl_vars['obj']->m_site_url; ?>
">
      <img src="<?php echo $this->_tpl_vars['obj']->m_site_url; ?>
images/tshirtshop.png" alt="tshirtshop logo" />
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