<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AresPaste</title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/styles_nb.css">
	    <link rel="icon" href="assets/images/favicon.ico">

    </head>
    <body>
      <header>
          <a class="logo" href="/"><img src="assets/images/logo.png"></a>
          <nav>
              <ul class="nav__links">
                  <li><a href="#">Paste</a></li>
				  <li><a href="https://virxs.xyz/">About</a></li>
				  <li><a href="https://wiki.virxs.xyz">Wiki</a></li>
              </ul>
          </nav>
      </header>
      <div class="underline"></div>
        <div class="wrapper">
            <form method="POST" action="create.php">
                <textarea name="content"></textarea>
                <button type="submit" class="button inner">Paste</button>
            </form>
        </div>
    </body>
</html>
