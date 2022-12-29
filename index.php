<?
	session_start();
?>
<div class="links">
	<a href="signup.php">Регистрация</a>
	<a href="login.php">Войти</a>
</div>
<a href="admin.php">Админка</a>	

<button class="btn">Выйти из аккаунта</button>

<script type="text/javascript">
	let links = document.querySelector('.links');
	let btn = document.querySelector('.btn');

	let number = 0;

	number = <? echo $_SESSION['user_id'];?>;

	if (number > 0) {
		links.style.display = 'none';
	}

	btn.onclick = function() {
		<?
			session_destroy();
		?>
		location.reload()
	}
</script>