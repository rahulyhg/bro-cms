<!DOCTYPE html>
<html>
    <head>
        <title>Bros page</title>
    </head>
    <body>
        <h1>Bro page</h1>
        <p>Welcome to the bro page.</p>
        <label><?= $welcomeText ?></label>
		<form action="/postHandler.php" method="post">
			<input type="text" name="name_of_site"/>
			<input type="text" name="url_of_site"/>
			<input type="submit" value="submit"/>
		</form>
	</body>
</html>
