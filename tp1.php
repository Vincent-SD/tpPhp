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
start_page('test');
?>

<?php
$jour = date('l F d, Y');
?>



<?php
$jour = date('d/m/Y', strtotime('2020-04-01'));
?>

<?php
end_page();
?>


