<?php
// Heading
$_['heading_title']					 = 'First Data EMEA Connect (3DSecure włączone)';

// Text
$_['text_extension']				 = 'Rozszerzenia';
$_['text_success']					 = 'Sukces: Zmodyfikowano ustawienia modułu!';
$_['text_edit']                      = 'Edytuj płatność';
$_['text_notification_url']			 = 'Notification URL';
$_['text_live']						 = 'Na żywo';
$_['text_demo']						 = 'Wersja testowa';
$_['text_enabled']					 = 'Włączone';
$_['text_merchant_id']				 = 'Identyfikator sklepu';
$_['text_secret']					 = 'Współdzielony sekretny klucz';
$_['text_capture_ok']				 = 'Przechwytywanie przebiegło pomyślnie';
$_['text_capture_ok_order']			 = 'Przechwytywanie powiodło się, status zamówienia zaktualizowany do sukcesu - rozliczony';
$_['text_void_ok']					 = 'Unieważnienie zakończyło się sukcesem, status zamówienia zaktualizowany na unieważnione';
$_['text_settle_auto']				 = 'Sprzedaż';
$_['text_settle_delayed']			 = 'Pre auth';
$_['text_success_void']				 = 'Transaction has been voided';
$_['text_success_capture']			 = 'Transaction has been captured';
$_['text_firstdata']				 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_payment_info']				 = 'Informacja o płatności';
$_['text_capture_status']			 = 'Płatność przechwycona';
$_['text_void_status']				 = 'Płatność unieważniona';
$_['text_order_ref']				 = 'numer referencyjny zamówienia';
$_['text_order_total']				 = 'Suma autoryzowana';
$_['text_total_captured']			 = 'Suma przechwycona';
$_['text_transactions']				 = 'Transakcje';
$_['text_column_amount']			 = 'Kwota';
$_['text_column_type']				 = 'Typ';
$_['text_column_date_added']		 = 'Złożone';
$_['text_confirm_void']				 = 'Czy na pewno chcesz anulować płatność?';
$_['text_confirm_capture']			 = 'Czy na pewno chcesz przechwycić płatność?';

// Entry
$_['entry_merchant_id']				 = 'Identyfikator sklepu';
$_['entry_secret']					 = 'Współdzielony sekretny klucz';
$_['entry_total']					 = 'Do zapłaty';
$_['entry_sort_order']				 = 'Kolejność sortowania';
$_['entry_geo_zone']				 = 'Strefa geograficzna';
$_['entry_status']					 = 'Status';
$_['entry_debug']					 = 'Rejestruj zdarzenia';
$_['entry_live_demo']				 = 'Live / Demo';
$_['entry_auto_settle']			  	 = 'Typ rozliczenia';
$_['entry_card_select']				 = 'Wybierz kartę';
$_['entry_tss_check']				 = 'Kontrole TSS';
$_['entry_live_url']				 = 'Adress URL Live';
$_['entry_demo_url']				 = 'Adres URL Demo';
$_['entry_status_success_settled']	 = 'Sukces - rozstrzygnięty';
$_['entry_status_success_unsettled'] = 'Sukces - nie rozstrzygnięty';
$_['entry_status_decline']		 	 = 'Odrzucony';
$_['entry_status_void']				 = 'Unieważnione';
$_['entry_enable_card_store']		 = 'Enable card storage tokens';

// Help
$_['help_total']					 = 'Wartość zamówienia jaka musi zostać osiągnięta aby płatność była możliwa.';
$_['help_notification']				 = 'You need to supply this URL to First Data to get payment notifications';
$_['help_debug']					 = 'Włączenie debugowania spowoduje zapisanie poufnych danych w pliku dziennika. Zawsze należy wyłączać, chyba że podano inaczej';
$_['help_settle']					 = 'If you use pre-auth you must complete a post-auth action within 3-5 days otherwise your transaction will be dropped'; 

// Tab
$_['tab_account']					 = 'Informacje API';
$_['tab_order_status']				 = 'Status zamówienia';
$_['tab_payment']					 = 'Ustawienia płatności';
$_['tab_advanced']					 = 'Zaawansowane';

// Button
$_['button_capture']				 = 'Przechwyć';
$_['button_void']					 = 'Nieważny';

// Error
$_['error_merchant_id']				 = 'Store ID is required';
$_['error_secret']					 = 'Sekretny klucz jest wymagany';
$_['error_live_url']				 = 'Adres URL Live jest wymagany';
$_['error_demo_url']				 = 'Adres URL Demo jest wymagany';
$_['error_data_missing']			 = 'Brakuje daty';
$_['error_void_error']				 = 'Unable to void transaction';
$_['error_capture_error']			 = 'Unable to capture transaction';