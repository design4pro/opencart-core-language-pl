<?php
// Headings
$_['heading_title']        	   = 'Ustawienia';
$_['text_openbay']             = 'OpenBay Pro';
$_['text_fba']                 = 'Realizowane przez Amazon';

// Text
$_['text_success']     		   = 'Twoje ustawienia zostały zapisane';
$_['text_status']         	   = 'Status';
$_['text_account_ok']  		   = 'Połączenie z usługą Fulfillment by Amazon';
$_['text_api_ok']       	   = 'Połączenie API Prawidłowe';
$_['text_api_status']          = 'Połączenie API';
$_['text_edit']           	   = 'Edytuj ustawienia usługi Fulfillment by Amazon';
$_['text_standard']            = 'Standardowa';
$_['text_expedited']           = 'Przyspieszona';
$_['text_priority']            = 'Priorytet';
$_['text_fillorkill']          = 'Fill or Kill';
$_['text_fillall']             = 'Wypełnij wszystko';
$_['text_fillallavailable']    = 'Fill All Available';
$_['text_prefix_warning']      = 'Nie zmieniaj tego ustawienia po wysłaniu zamówień do Amazon, ustawiaj to tylko podczas pierwszej instalacji.';
$_['text_disabled_cancel']     = 'Wyłączone - nie anuluje automatycznie spełnień';
$_['text_validate_success']    = 'Your API details are working correctly! You must press save to ensure settings are saved.';
$_['text_register_banner']     = 'Kliknij tutaj, jeśli chcesz zarejestrować konto';

// Entry
$_['entry_api_key']            = 'Token API';
$_['entry_encryption_key']     = 'Klucz szyfrujący 1';
$_['entry_encryption_iv']      = 'Klucz szyfrujący 2';
$_['entry_account_id']         = 'Identyfikator konta';
$_['entry_send_orders']        = 'Wyślij zamówienia automatycznie';
$_['entry_fulfill_policy']     = 'Polityka spełnień';
$_['entry_shipping_speed']     = 'Domyślna prędkość dostawy';
$_['entry_debug_log']          = 'Włącz zapisyanie zdarzeń';
$_['entry_new_order_status']   = 'Nowy wyzwalacz spełnienia';
$_['entry_order_id_prefix']    = 'Prefiks numeru zamówienia';
$_['entry_only_fill_complete'] = 'Wszystkie elementy muszą być FBA';

// Help
$_['help_api_key']             = 'To jest Twój token API, uzyskaj go z obszaru konta OpenBay Pro';
$_['help_encryption_key']      = 'To jest Twój klucz szyfrujący numer 1, uzyskaj go z obszaru konta OpenBay Pro';
$_['help_encryption_iv']       = 'To jest Twój klucz szyfrujący numer 2, uzyskaj go z obszaru konta OpenBay Pro';
$_['help_account_id']          = 'To jest identyfikator konta, który pasuje do zarejestrowanego konta Amazon dla OpenBay Pro, uzyskaj to z obszaru konta OpenBay Pro';
$_['help_send_orders']  	   = 'Zamówienia zawierające pasujące produkty Fulfillment by Amazon będą automatycznie wysyłane do Amazon';
$_['help_fulfill_policy']  	   = 'The default fulfillment policy (FillAll - All fulfillable items in the fulfillment order are shipped. The fulfillment order remains in a processing state until all items are either shipped by Amazon or cancelled by the seller. FillAllAvailable - All fulfillable items in the fulfillment order are shipped. All unfulfillable items in the order are cancelled by Amazon.FillOrKill - If an item in a fulfillment order is determined to be unfulfillable before any shipment in the order moves to the Pending status (the process of picking units from inventory has begun), then the entire order is considered unfulfillable. However, if an item in a fulfillment order is determined to be unfulfillable after a shipment in the order moves to the Pending status, Amazon cancels as much of the fulfillment order as possible.)';
$_['help_shipping_speed']  	   = 'Jest to domyślna prędkości dostawy, która ma zastosowanie do nowych zamówień, a różne poziomy usług mogą powodować różne koszty';
$_['help_debug_log']  		   = 'Dzienniki zdarzeń będą rejestrować informacje w pliku dziennika dotyczące czynności wykonywanych przez moduł. To powinno być włączone, aby pomóc znaleźć przyczynę jakichkolwiek problemów.';
$_['help_new_order_status']    = 'To jest status zamówienia, który spowoduje, że zamówienie zostanie utworzone do realizacji. Upewnij się, że status zostanie użyty tylko po otrzymaniu płatności.';
$_['help_order_id_prefix']     = 'Posiadanie prefiksu zamówienia pomoże zidentyfikować zamówienia, które pochodzą z Twojego sklepu, a nie z innych integracji. Jest to bardzo pomocne, gdy sprzedawcy sprzedają na wielu rynkach i używają FBA';
$_['help_only_fill_complete']  = 'Umożliwi to wysyłanie zamówień do realizacji tylko wtedy, gdy WSZYSTKIE pozycje w zamówieniu zostaną dopasowane do elementu Fulfillment by Amazon. Jeśli jakikolwiek element nie jest dopasowany, całe zamówienie pozostanie niewypełnione.';

// Error
$_['error_api_connect']        = 'Nie udało się połączyć z API';
$_['error_account_info']       = 'Nie można zweryfikować połączenia API z usługą Fulfillment by Amazon';
$_['error_api_key']    		   = 'Token interfejsu API jest nieprawidłowy';
$_['error_api_account_id']     = 'Identyfikator konta jest nieprawidłowy';
$_['error_encryption_key']     = 'Klucz szyfrujący numer 1 jest nieprawidłowy';
$_['error_encryption_iv']      = 'Klucz szyfrujący numer 2 jest nieprawidłowy';
$_['error_validation']    	   = 'Wystąpił błąd podczas sprawdzania poprawności Twoich danych';

// Tabs
$_['tab_api_info']             = 'Szczegóły API';

// Buttons
$_['button_verify']            = 'Weryfikuj dane';
