<?php
// Heading
$_['heading_title']                 = 'Lay-Buy';
$_['heading_transaction_title']     = 'Transakcja';

// Tab
$_['tab_settings']                  = 'Ustawienia';
$_['tab_reports']                   = 'Raporty';
$_['tab_reference']                 = 'Informacje referencyjne';
$_['tab_customer']                  = 'Informacje dla klientów';
$_['tab_payment']                   = 'Harmonogram płatności';
$_['tab_modify']                    = 'Modyfikuj harmonogram';

// Text
$_['text_extension']                = 'Rozszerzenia';
$_['text_success']                  = 'Sukces: Zmodyfikowano ustawienia modułu Lay-Buy!';
$_['text_edit']                     = 'Edytuj Lay-Buy';
$_['text_laybuy']                   = '<a href="https://www.lay-buys.com" target="_blank"><img src="view/image/payment/laybuys.png" style="width:94px;height:25px" alt="Lay-Buys" title="Lay-Buys"></a>';
$_['text_cancel_success']           = 'Transakcja została anulowana pomyślnie.';
$_['text_cancel_failure']           = 'Żądanie anulowania nie powiodło się. Proszę spróbuj ponownie!';
$_['text_revise_success']           = 'Żądanie korekty przebiegło pomyślnie.';
$_['text_revise_failure']           = 'Żądanie korekty nie powiodło się. Proszę spróbuj ponownie!.';
$_['text_type_laybuy']              = 'Lay-Buy';
$_['text_type_buynow']              = 'Kup Teraz';
$_['text_status_1']                 = 'Oczekujące';
$_['text_status_5']                 = 'Zakończone';
$_['text_status_7']                 = 'Anulowane';
$_['text_status_50']                = 'Zażądano korekty';
$_['text_status_51']                = 'Poprawione';
$_['text_fetched_some']             = 'Pomyślnie uaktualniono %d transakcje(ę)';
$_['text_fetched_none']             = 'Brak transakcji do uaktualnienia.';
$_['text_transaction_details']      = 'Szczegóły transakcji';
$_['text_not_found']                = 'Brak transakcji z podanym identyfikatorem.';
$_['text_paypal_profile_id']        = 'Identyfikator profilu PayPal';
$_['text_laybuy_ref_no']            = 'Identyfikator referencyjny Lay-Buy';
$_['text_order_id']                 = 'Numer zamówienia';
$_['text_status']                   = 'Status';
$_['text_amount']                   = 'Kwota';
$_['text_downpayment_percent']      = 'Procent zaliczki';
$_['text_month']                    = 'Miesiąc';
$_['text_months']                   = 'Miesiące';
$_['text_downpayment_amount']       = 'Kwota zaliczki';
$_['text_payment_amounts']          = 'Kwoty płatności';
$_['text_first_payment_due']        = 'Pierwsza płatność';
$_['text_last_payment_due']         = 'Ostatnia płatność';
$_['text_instalment']               = 'Rata';
$_['text_date']                     = 'Data';
$_['text_pp_trans_id']              = 'Identyfikator transakcji PayPal';
$_['text_downpayment']              = 'Zniżka';
$_['text_report']                   = 'Payment Record';
$_['text_revise_plan']              = 'Popraw harmonogram';
$_['text_today']                    = 'Dzisiaj';
$_['text_due_date']                 = 'Termin płatności';
$_['text_cancel_plan']              = 'Anuluj harmonogram';
$_['text_firstname']                = 'Imię';
$_['text_lastname']                 = 'Nazwisko';
$_['text_email']                    = 'Adres e-mail';
$_['text_address']                  = 'Adres';
$_['text_suburb']                   = 'Suburb';
$_['text_state']                    = 'Województwo';
$_['text_country']                  = 'Kraj';
$_['text_postcode']                 = 'Kod pocztowy';
$_['text_payment_info']		     	= 'Informacje o płatności';
$_['text_no_cron_time']             = 'Zadanie cykliczne cron nie zostało jeszcze wykonane';
$_['text_comment'] 	                = 'Uaktualnione przez Lay-Buy';
$_['text_comment_canceled'] 	    = 'Zamówienie oraz subskrypcja PayPal #%s zostały anulowane.';
$_['text_remaining'] 	            = 'Pozostałe saldo:';
$_['text_payment'] 	                = 'Płatność';

// Column
$_['column_order_id']               = 'Numer zamówienia';
$_['column_customer']               = 'Klient';
$_['column_amount']                 = 'Kwota';
$_['column_dp_percent']             = 'Procent zaliczki';
$_['column_months']                 = 'Miesiące';
$_['column_dp_amount']              = 'Kwota zaliczki';
$_['column_first_payment']          = 'Pierwsza płatność';
$_['column_last_payment']           = 'Ostatnia płatność';
$_['column_status']                 = 'Status';
$_['column_date_added']             = 'Data dodania';
$_['column_action']                 = 'Akcje';

// Entry
$_['entry_membership_id']           = 'Identyfikator członka Lay-Buy';
$_['entry_token']                   = 'Sekretny token:';
$_['entry_minimum']                 = 'Minimalna zaliczka (%)';
$_['entry_maximum']                 = 'Maksymalna zaliczka (%)';
$_['entry_max_months']              = 'Miesiące';
$_['entry_category']                = 'Dozwolone kategorie';
$_['entry_product_ids']             = 'Wykluczone identyfikatory produktów';
$_['entry_customer_group']          = 'Dozwolone grupy klientów';
$_['entry_logging']                 = 'Rejestruj logi';
$_['entry_total']                   = 'Do zapłaty';
$_['entry_order_status_pending']    = 'Status zamówienia (Oczekujące)';
$_['entry_order_status_canceled']   = 'Status zamówienia (Anulowane)';
$_['entry_order_status_processing'] = 'Status zamówienia (Przetwarzanie)';
$_['entry_gateway_url']             = 'Adres URL bramki';
$_['entry_api_url']                 = 'Adres URL API';
$_['entry_geo_zone']                = 'Strefa geograficzna';
$_['entry_status']                  = 'Status';
$_['entry_sort_order']              = 'Kolejność sortowania';
$_['entry_cron_url']                = 'Adres URL harmonogramu zadań Cron';
$_['entry_cron_time']               = 'Ostatnie uruchomienia harmonogramu zadań cron';
$_['entry_order_id']                = 'Numer zamówienia';
$_['entry_customer']                = 'Klient';
$_['entry_dp_percent']              = 'Procent zaliczki';
$_['entry_months']                  = 'Miesiące';
$_['entry_date_added']              = 'Data dodania';

// Help
$_['help_membership_id']            = 'Twój osobisty numer członkowski Lay-Buy. (Otrzymany podczas rejestracji konta na https://www.lay-buys.com/index.php/vtmob/login)';
$_['help_token']                    = 'Wprowadź losowy token dla bezpieczeństwa lub użyj wygenerowanego.';
$_['help_minimum']                  = 'Minimalna kwota depozytu.';
$_['help_maximum']                  = 'Maksymalna kwota depozytu.';
$_['help_months']                   = 'Maksymalna liczba miesięcy do spłaty zadłużenia.';
$_['help_category']                 = 'Wybierz kategorie, dla których dostępna będzie opcja płatności. Pozostaw puste, jeśli nie ma ograniczeń.';
$_['help_product_ids']              = 'Dodaj identyfikatory produktów oddzielone przecinkami (,), dla których metoda nie będzie dostępna.';
$_['help_customer_group']           = 'Klient musi być w tych grupach klientów, zanim ta metoda płatności stanie się aktywna. Pozostaw puste, jeśli nie ma ograniczeń.';
$_['help_logging']                  = 'Włączenie debugowania spowoduje zapisanie poufnych danych w pliku dziennika. Zawsze należy wyłączać, chyba że podano inaczej.';
$_['help_total']                    = 'Całkowita suma transakcji zamówienia musi zostać osiągnięta, zanim ta metoda płatności stanie się aktywna. Musi to być wartość bez znaku waluty.';
$_['help_order_status_pending']     = 'Status zamówienia po złożeniu zamówienia przez klienta.';
$_['help_order_status_canceled']    = 'Status zamówienia po anulowaniu zamówienia przez klienta.';
$_['help_order_status_processing']  = 'Status zamówienia po opłaceniu zamówienia przez klienta.';
$_['help_cron_url']                 = 'Ustaw zadanie cron, aby wywołać ten adres URL, aby raporty były automatycznie pobierane.';
$_['help_cron_time']                = 'Jest to ostatni raz, kiedy został uruchomiony URL zadania cron.';

// Error
$_['error_permission']              = 'Ostrzeżenie: Nie masz uprawnień do modyfikowania płatności Lay-Buy!';
$_['error_membership_id']           = 'Identyfikator członka Lay-Buy jest wymagany!';
$_['error_token']                   = 'Token Lay-Buy jest wymagany!';
$_['error_min_deposit']             = 'Nie może przekroczyć kwoty maksymalnej zaliczki!';

// Button
$_['button_fetch']                  = 'Pobierz';
$_['button_revise_plan']            = 'Popraw harmonogram';
$_['button_cancel_plan']            = 'Anuluj harmonogram';