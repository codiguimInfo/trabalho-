<?php
session_start();
?>
<form action='../controller/auth.php' method='post'>
        <label>Email:</label>
        <input type="email" name='email' placeholder="seu email">
        <label>Senha:</label>
        <input type="password" name="senha" placeholder='sua senha'>
        <button type='submit' name='entrar'>entrar</button>
        <div>
                <a href="./cadastrar.php">cadastrar</a>
        </div>
</form>

