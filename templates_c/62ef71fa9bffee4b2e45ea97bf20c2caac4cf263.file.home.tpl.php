<?php /* Smarty version Smarty-3.1.14, created on 2015-10-25 13:32:38
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:585182173562b9b2d7b1018-66454493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1445758293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '585182173562b9b2d7b1018-66454493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562b9b2d7f3359_51309077',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b9b2d7f3359_51309077')) {function content_562b9b2d7f3359_51309077($_smarty_tpl) {?><div class="login" >
    <div class="head">
        <h2>Login to your Account</h2>
        <p style="color:#777; text-shadow: 0px 1px 1px #fff;">Enter your email and password to login</p>
    </div>
    <form action="login.php" method="post">
        <table align="cemter">
            <tr>
                <td>Username <em>*</em></td>
                <td><input type="text" name="username" size="35"/></td>
            </tr>
            <tr>
                <td>Password <em>*</em></td>
                <td><input type="password" name="password" size="35"/></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right"><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
    </form>
</div><?php }} ?>