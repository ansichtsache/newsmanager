<?php

/** @var rex_addon $this */

// Diese Datei wird beim Update eines Addons über den Installer aufgerufen

// Anpassung der DB-Tabellen jetzt über die sql_table-Api in der install.php, die hier eingebunden wird. Funktioniert erst ab Redaxo 5.4

$this->includeFile('install.php');

// $this->getVersion() liefert die noch aktuell installierte Version

if (rex_string::versionCompare($this->getVersion(), '1.1', '<')) {

}

if (rex_string::versionCompare($this->getVersion(), '1.2', '<')) {
    // Änderungen für Nutzer die von Versionen kleiner 1.2 kommen
}


// Update kann abgebrochen werden:
// throw new rex_functional_exception('Fehlermeldung');
