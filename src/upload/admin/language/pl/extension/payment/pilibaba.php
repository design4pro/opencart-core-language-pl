<?php
// Heading
$_['heading_title']         = 'Pilibaba dla Chińskiego zamówienia';

// Tab
$_['tab_register']          = 'Zarejestruj się';
$_['tab_settings']          = 'Ustawienia';

// Text
$_['text_extension']        = 'Rozszerzenia';
$_['text_success']          = 'Sukces: Zmodyfikowano ustawienia modułu płatności Pilibaba!';
$_['text_edit']             = 'Edytuj Pilibaba';
$_['text_pilibaba']         = '<a href="http://www.pilibaba.com" target="_blank"><img src="view/image/payment/pilibaba.png" alt="Pilibaba" title="Pilibaba"></a>';
$_['text_live']             = 'Na żywo';
$_['text_test']             = 'Tryb testowy';
$_['text_payment_info']     = 'Informacje o płatności';
$_['text_order_id']         = 'Numer zamówienia';
$_['text_amount']           = 'Kwota';
$_['text_fee']              = 'Opłata';
$_['text_date_added']       = 'Data dodania';
$_['text_tracking']         = 'Śledzenie';
$_['text_barcode']          = 'Kod kreskowy';
$_['text_barcode_info']     = '(Print out this unique barcode and stick it on the surface of the parcel)';
$_['text_confirm']          = 'Are you sure you want to update the tracking number?';
$_['text_register_success'] = 'You have successfully registered. You should receive an email shortly.';
$_['text_tracking_success'] = 'The tracking number was successfully updated.';
$_['text_other']            = 'Inne';
$_['text_email']            = 'The registered email address for your Pilibaba account is %s';

// Entry
$_['entry_email_address']   = 'Adres e-mail';
$_['entry_password']        = 'Hasło';
$_['entry_currency']        = 'Waluta';
$_['entry_warehouse']       = 'Magazyn';
$_['entry_country']         = 'Kraj';
$_['entry_merchant_number'] = 'Numer sprzedawcy';
$_['entry_secret_key']      = 'Secret Key';
$_['entry_environment']     = 'Środowisko';
$_['entry_shipping_fee']    = 'Shipping Fee';
$_['entry_order_status']    = 'Status zamówienia';
$_['entry_status']          = 'Status';
$_['entry_logging']         = 'Rejestruj logi';
$_['entry_sort_order']      = 'Kolejność sortowania';

// Help
$_['help_email_address']    = 'Please enter the email address for the owner of this business.';
$_['help_password']         = 'Please enter a password between 8 and 30 characters.';
$_['help_currency']         = 'Select the currency used on your website and to withdraw to your bank account.';
$_['help_warehouse']        = 'Select the nearest warehouse you will be shipping to. When you receive orders from Chinese customers (via Pilibaba gateway) you can deliver parcels to this warehouse.';
$_['help_country']          = 'Tell us your country, and we will inform you once a warehouse in this country is opened.';
$_['help_merchant_number']  = 'Your personal Pilibaba account merchant number.';
$_['help_secret_key']       = 'Your secret key to access the Pilibaba API.';
$_['help_shipping_fee']     = 'The shipping cost from your warehouse to Pilibaba warehouse. Use two decimal places.';
$_['help_order_status']     = 'The order status after the customer has placed the order.';
$_['help_total']            = 'Całkowita suma transakcji zamówienia musi zostać osiągnięta, zanim ta metoda płatności stanie się aktywna. Musi to być wartość bez znaku waluty.';
$_['help_logging']          = 'Włączenie debugowania spowoduje zapisanie poufnych danych w pliku dziennika. Zawsze należy wyłączać, chyba że podano inaczej.';

// Error
$_['error_warning']         = 'Ostrzeżenie: Proszę sprawdzić formularz ponieważ zawiera błędy!';
$_['error_permission']      = 'Warning: You do not have permission to modify payment Pilibaba!';
$_['error_merchant_number'] = 'Numer sprzedawcy jest wymagany!';
$_['error_secret_key']      = 'Secret Key Required!';
$_['error_shipping_fee']    = 'Shipping fee must be a decimal number!';
$_['error_not_enabled']     = 'Moduł nie jest włączony!';
$_['error_data_missing']    = 'Brakuje danych!';
$_['error_tracking_length'] = 'Tracking number must be between 1 and 50 characters!';
$_['error_email_address']   = 'Please enter your email address!';
$_['error_email_invalid']   = 'Adres e-mail jest nieprawidłowy!';
$_['error_password']        = 'Hasło musi zawierać przynajmniej 8 znaków!';
$_['error_currency']        = 'Proszę wybrać walutę!';
$_['error_warehouse']       = 'Proszę wybrać magazyn!';
$_['error_country']         = 'Proszę wybrać kraj!';
$_['error_weight']          = 'Please change your <a href="%s">Weight Class</a> setting to grams. It\'s in \'System -> Settings\' in the \'Local\' tab.';
$_['error_bad_response']    = 'An invalid response was received. Please try again later.';

// Button
$_['button_register']       = 'Zarejestruj się';
$_['button_tracking']       = 'Update Tracking Number';
$_['button_barcode']        = 'Wygeneruj kod kreskowy';