<?php
//Headings
$_['heading_title']                = 'Płatność Amazon';

// Text
$_['text_success']                 = 'Amazon Pay module has been updated.';
$_['text_ipn_url']				   = 'Adres URL harmonogramu zadań Cron';
$_['text_ipn_token']			   = 'Sekretny token:';
$_['text_us']					   = 'American English';
$_['text_de']					   = 'Niemiecki';
$_['text_uk']                      = 'Angielski';
$_['text_fr']                      = 'Francuski';
$_['text_it']                      = 'Włoski';
$_['text_es']                      = 'Hiszapński';
$_['text_us_region']			   = 'Stany Zjednoczone';
$_['text_eu_region']               = 'Region Euro';
$_['text_uk_region']               = 'Wielka Brytania';
$_['text_live']                    = 'Na żywo';
$_['text_sandbox']                 = 'Piaskownica';
$_['text_auth']		           	   = 'Autoryzacja';
$_['text_payment']		           = 'Płatność';
$_['text_extension']               = 'Rozszerzenia';
$_['text_account']                 = 'Konto';
$_['text_guest']				   = 'Gość';
$_['text_no_capture']              = '--- Bez automatycznego przechwytywania ---';
$_['text_all_geo_zones']           = 'Wszystkie strefy podatkowe';
$_['text_button_settings']         = 'Ustawienia przycisku przejścia do kasy';
$_['text_colour']                  = 'Kolor';
$_['text_orange']                  = 'Pomarańczowy';
$_['text_tan']                     = 'Brązowy';
$_['text_white']                   = 'Biały';
$_['text_light']                   = 'Jasny';
$_['text_dark']                    = 'Ciemny';
$_['text_size']                    = 'Rozmiar';
$_['text_medium']                  = 'Średni';
$_['text_large']                   = 'Duży';
$_['text_x_large']                 = 'Bardzo duży';
$_['text_background']              = 'Tło';
$_['text_edit']					   = 'Edytuj Amazon Pay';
$_['text_amazon_login_pay']        = '<a href="https://pay.amazon.com/uk/sp/opencart" target="_blank" title="Sign-up to Amazon Pay"><img src="view/image/payment/amazonpay.png" alt="Amazon Pay" title="Amazon Pay" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_amazon_join']             = '<a href="https://pay.amazon.com/uk/sp/opencart" target="_blank" title="Sign-up to Amazon Pay"><u>Zapisz się do Amazon Pay</u></a>';
$_['text_payment_info']			   = 'Informacja o płatności';
$_['text_capture_ok']			   = 'Przechwytywanie przebiegło pomyślnie';
$_['text_capture_ok_order']		   = 'Przechwytywanie przebiegło pomyślnie, autoryzacja została w pełni przechwycona';
$_['text_refund_ok']			   = 'Zwrot został pomyśnie zażądany';
$_['text_refund_ok_order']		   = 'Zwrot został pomyśnie zażądany, kwota w pełni zwrócona';
$_['text_cancel_ok']			   = 'Anulowanie się powiodło, status zamówienia zaktualizowany na anulowane';
$_['text_capture_status']		   = 'Płatność przechwycona';
$_['text_cancel_status']		   = 'Płatność anulowana';
$_['text_refund_status']		   = 'Płatność zwrócona';
$_['text_order_ref']			   = 'numer referencyjny zamówienia';
$_['text_order_total']			   = 'Suma autoryzowana';
$_['text_total_captured']		   = 'Suma przechwycona';
$_['text_transactions']			   = 'Transakcje';
$_['text_column_authorization_id'] = 'Identyfikator autoryzacji Amazon';
$_['text_column_capture_id']	   = 'Identyfikator przechwycenia Amazon';
$_['text_column_refund_id']		   = 'Identyfikator zwrotu Amazon';
$_['text_column_amount']		   = 'Kwota';
$_['text_column_type']			   = 'Typ';
$_['text_column_status']		   = 'Status';
$_['text_column_date_added']	   = 'Data dodania';
$_['text_confirm_cancel']		   = 'Czy na pewno checsz anulować płatność?';
$_['text_confirm_capture']		   = 'Czy na pewno chcesz przechwycić płatność?';
$_['text_confirm_refund']		   = 'Czy na pewno chcesz zwrócić płatność?';
$_['text_minimum_total']           = 'Minimalna wartość zamówienia';
$_['text_geo_zone']                = 'Strefa geograficzna';
$_['text_status']                  = 'Status';
$_['text_declined_codes']          = 'Test Decline Codes';
$_['text_sort_order']              = 'Kolejność sortowania';
$_['text_amazon_invalid']          = 'Nieprawidłowa metoda płatności';
$_['text_amazon_rejected']         = 'Odrzucone przez Amazon';
$_['text_amazon_timeout']          = 'Upłynął czas transakcji';
$_['text_amazon_no_declined']      = '--- Brak automatycznej autoryzacji odrzuconej ---';
$_['text_amazon_signup']		   = 'Zarejestruj się w usłudze Amazon Pay';
$_['text_credentials']			   = 'Tutaj wklej klucze (w formacie JSON)';
$_['text_validate_credentials']	   = 'Sprawdź poprawność i używaj poświadczeń';

// Columns
$_['column_status']                = 'Status';

//entry
$_['entry_merchant_id']            = 'Identyfikator sprzedawcy';
$_['entry_access_key']             = 'Klucz dostępu';
$_['entry_access_secret']          = 'Sekretny klucz';
$_['entry_client_id']              = 'Identyfikator klienta';
$_['entry_client_secret']          = 'Sekretny klucz klienta';
$_['entry_language']			   = 'Język';
$_['entry_login_pay_test']         = 'Tryb testowy';
$_['entry_login_pay_mode']         = 'Sposób płatności';
$_['entry_checkout']			   = 'Sposób zamówienia';
$_['entry_payment_region']		   = 'Region płatności';
$_['entry_capture_status']         = 'Status automatycznego przechwycenia';
$_['entry_pending_status']         = 'Status zamówienia oczekującego';
$_['entry_ipn_url']				   = 'Adres URL IPN';
$_['entry_ipn_token']			   = 'Sekretny token';
$_['entry_debug']				   = 'Rejestruj zdarzenia';

// Help
$_['help_pay_mode']				   = 'Płatność jest dostępna tylko dla rynku US';
$_['help_checkout']				   = 'Przycisk płatności powinien również zalogować klienta';
$_['help_capture_status']		   = 'Wybierz status zamówienia, który spowoduje automatyczne przechwycenie autoryzowanej płatności';
$_['help_ipn_url']				   = 'Ustaw to jako adres URL sprzedawcy w Amazon Seller Central';
$_['help_ipn_token']			   = 'Uczyń długim i trudnym do odgadnięcia';
$_['help_minimum_total']		   = 'Musi być większe od zera';
$_['help_debug']				   = 'Włączenie debugowania spowoduje zapisanie poufnych danych w pliku dziennika. Zawsze należy wyłączać, chyba że podano inaczej';
$_['help_declined_codes']		   = 'Jest to wyłącznie do celów testowych';

// Order Info
$_['tab_order_adjustment']         = 'Dostosowanie zamówienia';

// Errors
$_['error_permission']             = 'Nie masz uprawnień do modyfikowania modułu';
$_['error_merchant_id']			   = 'Identyfikator sprzedawcy jest wymagany';
$_['error_access_key']			   = 'Klucz dostępu jest wymagany';
$_['error_access_secret']		   = 'Sekretny klucz jest wymagany';
$_['error_client_id']			   = 'Identyfikator klienta jest wymagany';
$_['error_client_secret']		   = 'Klucz klienta jest wymagany';
$_['error_pay_mode']			   = 'Płatność jest dostępna tylko dla rynku US';
$_['error_minimum_total']		   = 'Minimalna wartość zamówienia musi być większa od zera';
$_['error_curreny']                = 'Twój sklep musi mieć zonajmniej %s walutę zainstalowaną i włączoną';
$_['error_upload']                 = 'Przesyłanie pliku niepowiodło się';
$_['error_data_missing'] 		   = 'Brakuje wymaganych danych';
$_['error_credentials'] 		   = 'Wprowadź klucze w prawidłowym formacjie JSON';


// Buttons
$_['button_capture']			   = 'Przechwyć';
$_['button_refund']				   = 'Zwrot pieniędzy';
$_['button_cancel']				   = 'Anuluj';
