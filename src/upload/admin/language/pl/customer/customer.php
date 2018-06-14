<?php
// Heading
$_['heading_title'] = 'Klienci';

// Text
$_['text_success'] = 'Sukces: Zmodyfikowano klientów!';
$_['text_list'] = 'Lista klientów';
$_['text_add'] = 'Dodaj klienta';
$_['text_edit'] = 'Edytuj klienta';
$_['text_default'] = 'Domyślne';
$_['text_balance'] = 'Saldo';

// Column
$_['column_name'] = 'Nazwa klienta';
$_['column_email'] = 'Adres poczty elektronicznej';
$_['column_customer_group'] = 'Grupy klientów';
$_['column_status'] = 'Status';
$_['column_date_added'] = 'Data dodania';
$_['column_comment'] = 'Komentarz';
$_['column_description'] = 'Opis';
$_['column_amount'] = 'Kwota';
$_['column_points'] = 'Punktów';
$_['column_ip'] = 'Adres IP';
$_['column_total'] = 'Wszystkich kont';
$_['column_action'] = 'Akcje';

// Entry
$_['entry_customer_group'] = 'Grupy klientów';
$_['entry_firstname'] = 'Imię';
$_['entry_lastname'] = 'Nazwisko';
$_['entry_email'] = 'Adres poczty elektronicznej';
$_['entry_telephone'] = 'Numer telefonu';
$_['entry_fax'] = 'Faks';
$_['entry_newsletter'] = 'Biuletyn';
$_['entry_status'] = 'Status';
$_['entry_approved'] = 'Zatwierdzony';
$_['entry_safe'] = 'Bezpieczeństwo';
$_['entry_password'] = 'Hasło';
$_['entry_confirm'] = 'Potwierdź hasło';
$_['entry_company'] = 'Firma';
$_['entry_address_1'] = 'Adres 1';
$_['entry_address_2'] = 'Adres 2';
$_['entry_city'] = 'Miasto';
$_['entry_postcode'] = 'Kod pocztowy';
$_['entry_country'] = 'Kraj';
$_['entry_zone'] = 'Województwo';
$_['entry_default'] = 'Domyślny adres';
$_['entry_comment'] = 'Komentarz';
$_['entry_description'] = 'Opis';
$_['entry_amount'] = 'Kwota';
$_['entry_points'] = 'Punktów';
$_['entry_name'] = 'Nazwa klienta';
$_['entry_ip'] = 'Adres IP';
$_['entry_date_added'] = 'Data dodania';

// Help
$_['help_safe'] = 'Zaznacz, aby ten klient nie był wyłapywany przez system zapobiegania wyłudzeniom.';
$_['help_points'] = 'Użyj znaku minus aby odejmować punkty';

// Error
$_['error_warning'] = 'Ostrzeżenie: Proszę sprawdzić formularz ponieważ zawiera błędy!';
$_['error_permission'] = 'Ostrzeżenie: Nie masz uprawnień do modyfikowania klientów!';
$_['error_exists'] = 'Ostrzeżenie: Adres poczty elektronicznej jest już zarejestrowany!';
$_['error_firstname'] = 'Imię musi zawierać od 1 do 32 znaków!';
$_['error_lastname'] = 'Nazwisko musi zawierać od 1 do 32 znaków!';
$_['error_email'] = 'Adres poczty elektronicznej wygląda na nieprawidłowy!';
$_['error_telephone'] = 'Numer telefonu musi zawierać od 3 do 32 znaków!';
$_['error_password'] = 'Hasło musi zawierać od 4 do 20 znaków!';
$_['error_confirm'] = 'Hasła różnią się od siebie!';
$_['error_address_1'] = 'Adres 1 musi zawierać od 3 do 128 znaków!';
$_['error_city'] = 'Nazwa miasta musi zawierać od 2 do 128 znaków!';
$_['error_postcode'] = 'Kod pocztowy musi zawierać od 2 do 10 znaków dla tego kraju!';
$_['error_country'] = 'Proszę wybrać kraj!';
$_['error_zone'] = 'Proszę wybrać województwo!';
if ('2.3.0.0' > VERSION) {
  $_['error_custom_field'] = '%s jest wymagane!';
  $_['error_custom_field_validate'] = '%s nieprawidłowy!';
}
