<?php

include("imap_driver.php");

$imap_driver = new imap_driver();

if ($imap_driver->init('ssl://imap.gmail.com', 993) === false) {

    echo "init() failed: " . $imap_driver->error . "\n";
    exit;
}
else {
    #echo "Iniciou! ";
}

if ($imap_driver->login('humanity.openletters@gmail.com', 'xugfoxzvhtpblnms') === false) {
    echo "login() failed: " . $imap_driver->error . "\n";
    exit;
}
else {
    #echo "Logado! ";
}

if ($imap_driver->select_folder("INBOX") === false) {
    echo "select_folder() failed: " . $imap_driver->error . "\n";
    return false;
}
else {
    #echo "Selecionado: INBOX! ";
}

$ids = $imap_driver->get_uids_by_search('ALL');
if ($ids === false)
{
    echo "get_uids_failed: " . $imap_driver->error . "\n";
    exit;
}
else {
    #echo "ID's armazenados!";
}

echo "<br>";

foreach ($ids as $id => $lettersId) {

    #echo $lettersId;

    $headers = $imap_driver->get_body_from_uid($lettersId);

    $carta = 'F'.implode($headers);
    $carta = str_replace(' )', '', $carta);
    $carta = str_replace('F ', '', $carta);
    #$carta = nl2br ($carta."\n");

    echo "<p style='font-size: 2rem; background-color: #EAE7D5; border: 0.5em solid #EAE7D5; border-radius: 1em;'>'' {$carta} ''</p>";

}

?>