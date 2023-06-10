<?php
// Import config.php
require_once("config.php");

if(!isset($_GET["p"])){
    exit("Error p not defined.");
}

$content = "";

if($stmt = mysqli_prepare($mysqli, "SELECT content FROM pastes WHERE id = ?")){
    mysqli_stmt_bind_param($stmt, "s", $param_id);
    $param_id = $_GET["p"];

    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $temp_content);

    while( $stmt->fetch() ) {
        $content = $temp_content;
    }
}

?>
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
        <script src="//unpkg.com/alpinejs" defer></script>
		<link rel="icon" href="assets/images/favicon.ico">
    </head>
    <body>
		<header>
          <a class="logo" href="/"><img src="assets/images/logo.png"></a>
          <nav>
              <ul class="nav__links">
                  <li><a href="https://paste.virxs.xyz">Paste</a></li>
                  <li><a href="https://virxs.xyz/">About</a></li>
				  <li><a href="https://wiki.virxs.xyz">Wiki</a></li>
              </ul>
          </nav>
      </header>
      <div class="underline"></div>
        <div class="wrapper" x-data>
            <form>
                <div x-ref="paste" class="paste-link">
                    <input type="text" x-ref="link" value="<?php echo BASE_URL . '/paste.php?p=' . (isset($_GET['p']) ? $_GET['p'] : '') ?>" /><button x-on:click="$event.preventDefault(); navigator.clipboard.writeText($refs.link.value); $refs.paste.classList.add('enabled'); $el.innerHTML = 'Copied'" x-ref="btn">Copy</button>
                </div>
                <div class="center">
                    <textarea x-ref="textarea" name="content" readonly><?php echo htmlspecialchars($content); ?></textarea>
                </div>
                <button class="primary-button" x-on:click="$event.preventDefault(); navigator.clipboard.writeText($refs.textarea.value); $el.innerHTML = 'Copied'; $el.classList.add('enabled')">Copy</button>
            </form>
		</div>
    </body>
</html>
