<!DOCTYPE html>
<html>
    <head>
        <title>Bros page</title>
        <script src="/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <h1>Bro page</h1>
        <p>Welcome to the bro page.</p>
        <label><?= $welcomeText ?></label>
		<form action="/postHandler.php" method="post">
			<input type="text" name="BrosWebsite[name]"/>
			<input type="text" name="BrosWebsite[url]"/>
			<input type="submit" value="submit"/>
		</form>
	</body>
</html>
