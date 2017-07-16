<?php include '../model/database.php'; include 'include/header.php'; ?>

<h1>zelcome to our site to learn french</h1>
<button onclick="">singn in</button>
<button onclick="">singn up</button>
<div>sign in
	<form action="home.php">
		<p>enter your name or email</p>
		<input type="text" name="">
		<p>enter your password</p>
		<input type="password" name="">
		<input type="submit" value="submit">
	</form>
</div>
<div>sign up
	<form action="home.php">
		<p>enter your name</p>
		<input type="text" name="">
		<p>enter your email</p>
		<input type="text" name="">
		<p>enter your password</p>
		<input type="password" name="">
		<input type="submit" value="submit">
	</form>
</div>
<div>wellcome with us
		you sccesfauly registerd with us
		<p>ypu can go to the home page by click button bellow</p>
		<button>go to home page</button>
</div>


<?php include 'include/footer.php'; ?>