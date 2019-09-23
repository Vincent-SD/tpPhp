<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
    echo ' <h1> $title </h1> <br> <br>';
};

function end_page()
{
    echo '</body> </html>' ;
}

?>



