<?php /* Smarty version Smarty-3.1.14, created on 2016-01-09 00:47:41
         compiled from ".\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1016956900b55c0c719-02331191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97d060df136bc68287855ad0037b446ebb85b73d' => 
    array (
      0 => '.\\templates\\home.tpl',
      1 => 1445758294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1016956900b55c0c719-02331191',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56900b55c5a915_92095405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56900b55c5a915_92095405')) {function content_56900b55c5a915_92095405($_smarty_tpl) {?><div class="login" >
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