<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
};



function end_page()
{
    echo '</body> </html>' ;
}

?>

<?php
start_page('titre');
?>

<hr/><br/><strong>Test</strong><br/><hr/>

<?php
end_page();
?>


