<?php
error_reporting(0);
require('dbconnect.php');
session_start();
if (!isset($_POST['email'])) {
	header('Location: index.php');
	exit();
	}
if (!empty($_POST)) {
	// ログインの処理
	if ($_POST['email'] != '' && $_POST['password'] != '') {
		$login = $db->prepare('SELECT * FROM members WHERE email=? AND
			password=?');
			$login->execute(array(
				$_POST['email'],
				hash('sha256',$_POST['password'])
			));
			$member = $login->fetch();
			if ($member) {
				// ログイン成功
				$_SESSION['id'] = $member['id'];
				$_SESSION['time'] = time();

				// ログイン情報を記録する
				if ($_POST['save'] == 'on') {
				setcookie('email', $_POST['email'], time()+60*60*24*14);
				setcookie('password', $_POST['password'], time()+60*60*24*14);
				}
				$_SESSION['email'] = $_POST['email'];
				$url = "mypage.php";
				header("Location: {$url}"); exit();
			} else {
				$alert = "<script type='text/javascript'>alert('ログインに失敗しました、もう一度お試しください。');</script>";
				$_SESSION['message'] = $alert ;
				header('Location: index.php'); exit();
			}
		}
	}
	?>