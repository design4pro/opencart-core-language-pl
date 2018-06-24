<?php
// Heading
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Ustawienia';
$_['tab_order_status']              = 'Status zamówienia';

// Text
$_['text_extension']                = 'Rozszerzenia';
$_['text_success']                  = 'Sukces: Zmodyfikowano ustawienia modułu płatności CardConnect!';
$_['text_edit']                     = 'Edytuj CardConnect';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Płatność';
$_['text_authorize']                = 'Authorize';
$_['text_live']                     = 'Na żywo';
$_['text_test']                     = 'Tryb testowy';
$_['text_no_cron_time']             = 'Zadanie cykliczne cron nie zostało jeszcze wykonane';
$_['text_payment_info']             = 'Informacje o płatności';
$_['text_payment_method']           = 'Metoda płatności';
$_['text_card']                     = 'Karta';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Polecający';
$_['text_update']                   = 'Uaktualnij';
$_['text_order_total']              = 'Wartość zamówienia';
$_['text_total_captured']           = 'Suma przechwycona';
$_['text_capture_payment']          = 'Przechwyć płatność';
$_['text_refund_payment']           = 'Zwrot pieniędzy';
$_['text_void']                     = 'Void';
$_['text_transactions']             = 'Transakcje';
$_['text_column_type']              = 'Typ';
$_['text_column_reference']         = 'Polecający';
$_['text_column_amount']            = 'Kwota';
$_['text_column_status']            = 'Status';
$_['text_column_date_modified']     = 'Data modyfikacji';
$_['text_column_date_added']        = 'Data dodania';
$_['text_column_update']            = 'Uaktualnij';
$_['text_column_void']              = 'Void';
$_['text_confirm_capture']          = 'Are you sure you want to capture the payment?';
$_['text_confirm_refund']           = 'Are you sure you want to refund the payment?';
$_['text_inquire_success']          = 'Zapytanie zakończyło się sukcesem';
$_['text_capture_success']          = 'Żądanie przechwytywania powiodło się';
$_['text_refund_success']           = 'Prośba o zwrot środków została zrealizowana';
$_['text_void_success']             = 'Żądanie unieważnienia zakończyło się powodzeniem';

// Entry
$_['entry_merchant_id']             = 'Identyfikator sprzedawcy';
$_['entry_api_username']            = 'Nazwa użytkownika API';
$_['entry_api_password']            = 'Hasło API';
$_['entry_token']                   = 'Sekretny token:';
$_['entry_transaction']             = 'Transakcja';
$_['entry_environment']             = 'Środowisko';
$_['entry_site']                    = 'Strona';
$_['entry_store_cards']             = 'Store Cards';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Do zapłaty';
$_['entry_geo_zone']                = 'Strefa geograficzna';
$_['entry_status']                  = 'Status';
$_['entry_logging']                 = 'Rejestruj logi';
$_['entry_sort_order']              = 'Kolejność sortowania';
$_['entry_cron_url']                = 'Adres URL harmonogramu zadań Cron';
$_['entry_cron_time']               = 'Ostatnie uruchomienia harmonogramu zadań cron';
$_['entry_order_status_pending']    = 'Oczekujące';
$_['entry_order_status_processing'] = 'Przetwarzanie';

// Help
$_['help_merchant_id']              = 'Twój osobisty identyfikator sprzedawcy konta CardConnect.';
$_['help_api_username']             = 'Twoja nazwa użytkownika, aby uzyskać dostęp do interfejsu API CardConnect.';
$_['help_api_password']             = 'Twoje hasło, aby uzyskać dostęp do interfejsu API CardConnect.';
$_['help_token']                    = 'Wprowadź losowy token dla bezpieczeństwa lub użyj wygenerowanego.';
$_['help_transaction']              = 'Choose \'Payment\' to capture the payment immediately or \'Authorize\' to have to approve it.';
$_['help_site']                     = 'This determines the first part of the API URL. Only change if instructed.';
$_['help_store_cards']              = 'Whether you want to store cards using tokenization.';
$_['help_echeck']                   = 'Whether you want to offer the ability to pay using an eCheck.';
$_['help_total']                    = 'Całkowita suma transakcji zamówienia musi zostać osiągnięta, zanim ta metoda płatności stanie się aktywna. Musi to być wartość bez znaku waluty.';
$_['help_logging']                  = 'Włączenie debugowania spowoduje zapisanie poufnych danych w pliku dziennika. Zawsze należy wyłączać, chyba że podano inaczej.';
$_['help_cron_url']                 = 'Set a cron job to call this URL so that the orders are auto-updated. It is designed to be ran a few hours after the last capture of a business day.';
$_['help_cron_time']                = 'Jest to ostatni raz, kiedy został uruchomiony URL zadania cron.';
$_['help_order_status_pending']     = 'The order status when the order has to be authorized by the merchant.';
$_['help_order_status_processing']  = 'The order status when the order is automatically captured.';

// Button
$_['button_inquire_all']            = 'Wszystkie zapytania';
$_['button_capture']                = 'Przechwyć';
$_['button_refund']                 = 'Zwrot pieniędzy';
$_['button_void_all']               = 'Wszystkie unieważnione';
$_['button_inquire']                = 'Zapytania';
$_['button_void']                   = 'Nieważny';

// Error
$_['error_permission']              = 'Ostrzeżenie: Nie masz uprawnień do modyfikowania ustawień modułu płatności CardConnect!';
$_['error_merchant_id']             = 'Identyfikator sprzedawcy jest wymagany!';
$_['error_api_username']            = 'Nazwa użytkownika API wymagana!';
$_['error_api_password']            = 'Hasło API wymagane!';
$_['error_token']                   = 'Sekretny token jest wymagany!';
$_['error_site']                    = 'Strona jest wymagana!';
$_['error_amount_zero']             = 'Kwota musi być większa od 0!';
$_['error_no_order']                = 'Brak pasujących informacji o zamówieniu!';
$_['error_invalid_response']        = 'Otrzymano nieprawidłową odpowiedź!';
$_['error_data_missing']            = 'Brakujące dane!';
$_['error_not_enabled']             = 'Moduł nie jest włączony!';