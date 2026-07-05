<?php
session_start(); include 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$username=$_POST['username']; $pass=password_hash($_POST['password'],PASSWORD_DEFAULT);
$stmt=$conn->prepare("INSERT INTO users (username,password) VALUES (?,?)"); $stmt->bind_param('ss',$username,$pass);
if($stmt->execute()){echo 'ثبت نام موفق! <a href="login.php">ورود</a>';}else{echo 'خطا';}}
?><form method="post">نام کاربری: <input name="username" required><br>رمز: <input type="password" name="password" required><br><input type="submit" value="ثبت نام"></form>