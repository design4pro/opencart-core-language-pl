<?php
/**
 * Project    OpenCart Core Language PL
 * Name       opencart-core-language-pl
 * Modified   10.07.2022, 12:42
 *
 * @category  OpenCart
 * @package   Core
 * @link      https://github.com/design4pro/opencart-core-language-pl
 *
 * @copyright Copyright (c) 2022 DESIGN4PRO OpenCart (https://opencart.design4.pro)
 * @author    DESIGN4PRO OpenCart <opencart@design4.pro>
 * @license   Commercial. All rights reserved.
 *            It is prohibited to copy and distribute in whole or in part.
 *            Licensee has the right to modify the content for your own.
 *            -- PL --
 *            Komercyjna. Wszelkie prawa zastrzeżone.
 *            Zabrania się kopiowania i rozpowszechniania w całości lub fragmentach.
 *            Właściciel licencji ma prawo do modyfikacji treści dla potrzeb własnych.
 */

// Heading
$_['heading_title']    = 'Kopia zapasowa / Przywracanie';

// Text
$_['text_success']     = 'Sukces: Pomyślnie zmodyfikowano bazę danych!';

$_['text_backup']       = 'Wykonuję kopię zapasową tabeli %s od rekordu %s do %s rekordu';
$_['text_restore']      = 'Przywracam %s z %s';
$_['text_option']       = 'Opcje kopi zapasowej';
$_['text_history']      = 'Historia kopi zapasowej';
$_['text_progress']     = 'Postęp';
$_['text_import']       = 'W przypadku dużych plików kopii zapasowych lepiej jest przesłać plik sql za pośrednictwem ftp do katalogu <strong>system/storage/backup/</strong>';

// Column
$_['column_filename']   = 'Nazwa pliku';
$_['column_size']       = 'Rozmiar';
$_['column_date_added'] = 'Data dodania';
$_['column_action']     = 'Akcje';

// Entry
$_['entry_progress']   = 'Postęp';
$_['entry_export']     = 'Eksportuj';

// Error
$_['error_permission'] = 'Ostrzeżenie: Nie masz uprawnień do modyfikowania kopi zapasowych!';
$_['error_export']     = 'Ostrzeżenie: Musisz wybrać przynajmniej jedną tablicę do wykonania kopi zapasowej!';
$_['error_table']       = 'Tabela %snie znajduje się na liście dozwolonych!! ';
$_['error_file']       = 'Plik nie został znaleziony!';
$_['error_directory']   = 'Katalog nie może zostać odnaleziony!';
$_['error_not_found']    = 'Error: Could not find file %s !';
$_['error_headers_sent'] = 'Error: Headers already sent out!';
