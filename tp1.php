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
$heure = date('g : i , a ')
?>


<?php
$jour2 = date('d/m/Y', strtotime($jour));

echo $jour2;
?>
<br>
<?php
echo $jour;
echo ',';
echo $heure;
?>

<?php
end_page();
?>


