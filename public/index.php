<?php

require_once('../vendor/autoload.php');

use \Editor\Editor;

$editor = new Editor;

$editor->loadFile('../savegames/dsa3/START.GAM');

?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Das Schwarze Auge die Nordlandtrilogie Savegame Editor</title>
    <meta name="description" content="Das Schwarze Auge die Nordlandtrilogie Savegame Editor">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jquery.js"></script>
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Nordlandtrilogie</h1>

<?php

var_dump($editor->getChars());

//foreach ($editor->getChars() as $char) {
//    $name = substr($char, 0x0000, 16);
//    if (trim($name)) {
//        echo '<h2 class="name">' . $name . '</h2>';
//        $typeValue = hex(substr($char, 0x0021, 1));
//        $genderValue = hex(substr($char, 0x0022, 1));
//        echo '<p class="typ">' . $type[$genderValue][$typeValue] . '</p>';
//    }
//}

?>

</body>
</html>
