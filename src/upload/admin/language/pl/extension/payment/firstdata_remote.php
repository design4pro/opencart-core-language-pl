<?php
// Heading
$_['heading_title']					 = 'First Data EMEA Web Service API';

// Text
$_['text_firstdata_remote']			 = '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']					 = 'Rozszerzenia';
$_['text_success']					 = 'Sukces: Zmodyfikowano ustawienia modułu!';
$_['text_edit']                      = 'Edit First Data EMEA Web Service API';
$_['text_card_type']				 = 'Typ karty';
$_['text_enabled']					 = 'Włączone';
$_['text_merchant_id']				 = 'Identyfikator sklepu';
$_['text_subaccount']				 = 'Subkonto';
$_['text_user_id']					 = 'Identyfikator użytkownika';
$_['text_capture_ok']				 = 'Przechwytywanie przebiegło pomyślnie';
$_['text_capture_ok_order']			 = 'Przechwytywanie powiodło się, status zamówienia zaktualizowany do sukcesu - rozliczony';
$_['text_refund_ok']				 = 'Refund was successful';
$_['text_refund_ok_order']			 = 'Refund was successful, order status updated to refunded';
$_['text_void_ok']					 = 'Unieważnienie zakończyło się sukcesem, status zamówienia zaktualizowany na unieważnione';
$_['text_settle_auto']				 = 'Sprzedaż';
$_['text_settle_delayed']			 = 'Pre auth';
$_['text_mastercard']				 = 'Mastercard';
$_['text_visa']						 = 'Visa';
$_['text_diners']					 = 'Diners';
$_['text_amex']						 = 'American Express';
$_['text_maestro']					 = 'Maestro';
$_['text_payment_info']				 = 'Informacja o płatności';
$_['text_capture_status']			 = 'Płatność przechwycona';
$_['text_void_status']				 = 'Płatność unieważniona';
$_['text_refund_status']			 = 'Płatność zwrócona';
$_['text_order_ref']				 = 'numer referencyjny zamówienia';
$_['text_order_total']				 = 'Suma autoryzowana';
$_['text_total_captured']			 = 'Suma przechwycona';
$_['text_transactions']				 = 'Transakcje';
$_['text_column_amount']			 = 'Kwota';
$_['text_column_type']				 = 'Typ';
$_['text_column_date_added']		 = 'Złożone';
$_['text_confirm_void']				 = 'Czy na pewno chcesz anulować płatność?';
$_['text_confirm_capture']			 = 'Czy na pewno chcesz przechwycić płatność?';
$_['text_confirm_refund']			 = 'Czy na pewno chcesz zwrócić płatność?';

// Entry
$_['entry_certificate_path']		 = 'Certificate path';
$_['entry_certificate_key_path']	 = 'Private key path';
$_['entry_certificate_key_pw']		 = 'Private key password';
$_['entry_certificate_ca_path']		 = 'CA path';
$_['entry_merchant_id']				 = 'Identyfikator sklepu';
$_['entry_user_id']					 = 'Identyfikator użytkownika';
$_['entry_password']				 = 'Hasło';
$_['entry_total']					 = 'Do zapłaty';
$_['entry_sort_order']				 = 'Sort order';
$_['entry_geo_zone']				 = 'Geo zone';
$_['entry_status']					 = 'Status';
$_['entry_debug']					 = 'Rejestruj zdarzenia';
$_['entry_auto_settle']				 = 'Typ rozliczenia';
$_['entry_status_success_settled']	 = 'Sukces - rozstrzygnięty';
$_['entry_status_success_unsettled'] = 'Sukces - nie rozstrzygnięty';
$_['entry_status_decline']			 = 'Odrzucony';
$_['entry_status_void']				 = 'Unieważnione';
$_['entry_status_refund']			 = 'Zwrócone';
$_['entry_enable_card_store']		 = 'Enable card storage tokens';
$_['entry_cards_accepted']			 = 'Card types accepted';

// Help
$_['help_total']					 = 'Wartość zamówienia jaka musi zostać osiągnięta aby płatność była możliwa.';
$_['help_certificate']				 = 'Certificates and private keys should be stored outside of your public web folders';
$_['help_card_select']				 = 'Ask the user to choose thier card type before they are redirected';
$_['help_notification']				 = 'You need to supply this URL to First Data to get payment notifications';
$_['help_debug']					 = 'Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise .';
$_['help_settle']					 = 'If you use pre-auth you must complete a post-auth action within 3-5 days otherwise your transaction will be dropped';

// Tab
$_['tab_account']					 = 'Informacje API';
$_['tab_order_status']				 = 'Status zamówienia';
$_['tab_payment']					 = 'Ustawienia płatności';

// Button
$_['button_capture']				 = 'Przechwyć';
$_['button_refund']					 = 'Zwrot pieniędzy';
$_['button_void']					 = 'Nieważny';

// Error
$_['error_merchant_id']				 = 'Store ID is required';
$_['error_user_id']					 = 'User ID is required';
$_['error_password']				 = 'Hasło jest wymagane';
$_['error_certificate']				 = 'Certificate path is required';
$_['error_key']						 = 'Certificate key is required';
$_['error_key_pw']					 = 'Certificate key password is required';
$_['error_ca']						 = 'Certificate Authority (CA) is required';