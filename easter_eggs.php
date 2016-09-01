<html>
    <head>
        <meta charset="UTF-8">
        <title>My First Easter Egg!</title>
    </head>
    <body>
        <h1>My First Easter Egg!</h1>
        <form method="get" action="<?= $_SERVER['PHP_SELF'] ?>">
            <input type="text" name="searched_text" id="egg-text" placeholder="search..." accesskey="s">
            <input type="submit" value="search">
        </form>
    </body>
</html>

<?php

if (! empty($_GET['searched_text'])){
 echo '<h3>you are searched for: '.$_GET['searched_text'].'</h3>';
    if (strcasecmp($_GET['searched_text'],'Qnarik')==0){
     echo '<script type="text/javascript"> alert ("yes I know, I\'m so cool!")</script>';
    }
}
?>    