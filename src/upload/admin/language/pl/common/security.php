<?php
// Heading
$_['heading_title']    = 'Ważne powiadomienie bezpieczeństwa!';

// Text
$_['text_success']     = 'Sukces: Zmodyfikowałeś folder pamięci!';
$_['text_security']    = 'To bardzo ważne aby przenieść folder przechowywania poza główny folder strony (np. public_html, www lub htdocs).';
$_['text_choose']      = 'Wybierz jak przenieść folder przechowywania';
$_['text_automatic']   = 'Przenieś automatycznie';
$_['text_manual']      = 'Przenieś ręcznie';
$_['text_move']        = 'Przenieś';
$_['text_to']          = 'do';
if ('3.0.2.1' > VERSION) {
    $_['text_admin']       = 'W pliku admin/config.php zamień linię';
    $_['text_config']      = 'W pliku config.php zamień linię';
} else {
    $_['text_config']      = 'W pliku config.php zamień linię';
    $_['text_admin']       = 'W pliku admin/config.php zamień linię';
}
$_['text_by']          = 'na';

// Entry
$_['entry_directory']  = 'Katalog';

// Button
$_['button_move']      = 'Przenieś';
$_['button_manual']    = 'Ręcznie';

// Error
$_['error_permission'] = 'Ostrzeżenie: Nie masz uprawnień do modyfikowania folderu przechowywania!';
$_['error_path']       = 'Ostrzeżenie: Nieprawidłowa ścieżka!';
$_['error_directory']  = 'Ostrzeżenie: Nieprawidłowy katalog!';
$_['error_exists']     = 'Ostrzeżenie: Katalog już istnieje!';
$_['error_writable']   = 'Ostrzeżenie: Plik config.php i admin/config.php musi mieć uprawnienia do zapisu!';
