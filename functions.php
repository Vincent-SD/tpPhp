<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
    echo '<hr/><br/><strong>' . PHP_EOL . $title . '</strong><br/><hr/>';
};

function end_page()
{
    echo '</body> </html>' ;
}

?>



