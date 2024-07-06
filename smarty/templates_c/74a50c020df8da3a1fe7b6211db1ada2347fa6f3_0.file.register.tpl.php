<?php
/* Smarty version 4.2.0, created on 2024-06-20 11:52:37
  from 'E:\Studium\HS-Bochum Studium\8. SS 24\IKSY2\Projekt\smarty\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6673fbe5eda1a8_11859248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74a50c020df8da3a1fe7b6211db1ada2347fa6f3' => 
    array (
      0 => 'E:\\Studium\\HS-Bochum Studium\\8. SS 24\\IKSY2\\Projekt\\smarty\\templates\\register.tpl',
      1 => 1718877102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673fbe5eda1a8_11859248 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrieren - KochZauber</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/test.css"> <!-- Verweise auf die CSS-Datei -->
</head>
<body>
    <div class="container mt-5">
        <h2>Registrieren</h2>
        <?php if ((isset($_smarty_tpl->tpl_vars['message']->value))) {?>
            <div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
        <?php }?>
        <form action="register.php" method="post" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="username" class="form-label">Benutzername:</label>
                <input type="text" id="username" name="username" class="form-control" required>
                <div class="invalid-feedback">Bitte geben Sie einen Benutzernamen ein.</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-Mail:</label>
                <input type="email" id="email" name="email" class="form-control" required>
                <div class="invalid-feedback">Bitte geben Sie eine gültige E-Mail-Adresse ein.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Passwort:</label>
                <input type="password" id="password" name="password" class="form-control" required>
                <div class="invalid-feedback">Bitte geben Sie ein Passwort ein.</div>
            </div>
            <button type="submit" name="register" class="btn btn-primary">Registrieren</button>
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
