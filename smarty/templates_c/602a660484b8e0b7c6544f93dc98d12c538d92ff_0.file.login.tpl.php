<?php
/* Smarty version 4.2.0, created on 2024-06-20 14:56:11
  from 'E:\Studium\HS-Bochum Studium\8. SS 24\IKSY2\Projekt\smarty\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_667426ebe54875_96426745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '602a660484b8e0b7c6544f93dc98d12c538d92ff' => 
    array (
      0 => 'E:\\Studium\\HS-Bochum Studium\\8. SS 24\\IKSY2\\Projekt\\smarty\\templates\\login.tpl',
      1 => 1718888160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667426ebe54875_96426745 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmelden - KochZauber</title>
    <link rel="stylesheet" type="text/css" href="css/test.css"> <!-- Verweise auf die CSS-Datei -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Anmelden</h2>
        <form action="login.php" method="post" class="needs-validation" novalidate>
            <?php if ((isset($_smarty_tpl->tpl_vars['message']->value))) {?>
                <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['login_successful']->value) {?>
                <div class="alert alert-success">Anmeldung erfolgreich!</div>
            <?php }?>
            <div class="mb-3">
                <label for="username" class="form-label">Benutzername:</label>
                <input type="text" id="username" name="username" class="form-control" required>
                <div class="invalid-feedback">Bitte geben Sie einen Benutzernamen ein.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Passwort:</label>
                <input type="password" id="password" name="password" class="form-control" required>
                <div class="invalid-feedback">Bitte geben Sie ein Passwort ein.</div>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Anmelden</button>
        </form>
    </div>
    <?php echo '<script'; ?>
 src="js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
