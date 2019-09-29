<?php
/* Smarty version 3.1.33, created on 2019-06-23 08:01:09
  from 'C:\xampp\htdocs\therapy\app\views\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0f15a5d03b74_48198508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67d01e4a5d2cb8acaabb4b9d850172338257c3f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\therapy\\app\\views\\footer.tpl',
      1 => 1561266743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0f15a5d03b74_48198508 (Smarty_Internal_Template $_smarty_tpl) {
require ('c:/xampp/htdocs/therapy/loader/assets_loader.php');
require ('c:/xampp/htdocs/therapy/loader/path_loader.php');


foreach($css as $style){
echo "<link href='http://localhost://therapy/assets/css/$style.css' rel='stylesheet'></link>";

}
?>
</BODY>
</HTML>
<?php }
}
