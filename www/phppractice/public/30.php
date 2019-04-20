<?php

// session
// サーバー側に保存できる
// cookieは改ざんされる可能性がある
// sessionは大きなデータを保存できる

session_start();

// $_SESSION['username'] = 'taguchi';

// echo $_SESSION['username'];

// sessionを削除する
// unset($_SESSION['username']);

// 削除した後はでない
echo $_SESSION['username'];