<?php
// Heading
$_['heading_title']					 = 'Globalpay Remote';

// Text
$_['text_extension']				 = 'Rozszerzenia';
$_['text_success']					 = 'Sukces: Zmodyfikowano dane konta Globalpay!';
$_['text_edit']                      = 'Edit Globalpay Remote';
$_['text_card_type']				 = 'Typ karty';
$_['text_enabled']					 = 'Włączone';
$_['text_use_default']				 = 'Użyj domyślnych';
$_['text_merchant_id']				 = 'Identyfikator sprzedawcy';
$_['text_subaccount']				 = 'Sub Account';
$_['text_secret']					 = 'Współdzielony sekretny klucz';
$_['text_card_visa']				 = 'Visa';
$_['text_card_master']				 = 'Mastercard';
$_['text_card_amex']				 = 'American Express';
$_['text_card_switch']				 = 'Switch/Maestro';
$_['text_card_laser']				 = 'Laser';
$_['text_card_diners']				 = 'Diners';
$_['text_capture_ok']				 = 'Przechwytywanie przebiegło pomyślnie';
$_['text_capture_ok_order']			 = 'Przechwytywanie powiodło się, status zamówienia zaktualizowany do sukcesu - rozliczony';
$_['text_rebate_ok']				 = 'Rabat zakończył się sukcesem';
$_['text_rebate_ok_order']			 = 'Rabat zakończył się sukcesem, status zamówienia zaktualizowany na rabatowane';
$_['text_void_ok']					 = 'Unieważnienie zakończyło się sukcesem, status zamówienia zaktualizowany na unieważnione';
$_['text_settle_auto']				 = 'Automatycznie';
$_['text_settle_delayed']			 = 'Opóźniony';
$_['text_settle_multi']				 = 'Wielo';
$_['text_ip_message']				 = 'You must supply your server IP address to your Globalpay account manager before going live';
$_['text_payment_info']				 = 'Informacja o płatności';
$_['text_capture_status']			 = 'Płatność przechwycona';
$_['text_void_status']				 = 'Płatność unieważniona';
$_['text_rebate_status']			 = 'Płatność rabatowana';
$_['text_order_ref']				 = 'numer referencyjny zamówienia';
$_['text_order_total']				 = 'Suma autoryzowana';
$_['text_total_captured']			 = 'Suma przechwycona';
$_['text_transactions']				 = 'Transakcje';
$_['text_confirm_void']				 = 'Czy na pewno chcesz anulować płatność?';
$_['text_confirm_capture']			 = 'Czy na pewno chcesz przechwycić płatność?';
$_['text_confirm_rebate']			 = 'zy na pewno chcesz zrabatować płatność?';
$_['text_globalpay_remote']			 = '<a target="_blank" href="https://resourcecentre.globaliris.com/getting-started.php?id=OpenCart"><img src="view/image/payment/globalpay.png" alt="Globalpay" title="Globalpay" style="border: 1px solid #EEEEEE;" /></a>';

// Column
$_['text_column_amount']			 = 'Kwota';
$_['text_column_type']				 = 'Typ';
$_['text_column_date_added']		 = 'Złożone';

// Entry
$_['entry_merchant_id']				 = 'Identyfikator sprzedawcy';
$_['entry_secret']					 = 'Współdzielony sekretny klucz';
$_['entry_rebate_password']			 = 'Hasło rabatowe';
$_['entry_total']					 = 'Do zapłaty';
$_['entry_sort_order']				 = 'Kolejność sortowania';
$_['entry_geo_zone']				 = 'Strefa geograficzna';
$_['entry_status']					 = 'Status';
$_['entry_debug']					 = 'Rejestruj zdarzenia';
$_['entry_auto_settle']				 = 'Typ rozliczenia';
$_['entry_tss_check']				 = 'Kontrole TSS';
$_['entry_card_data_status']		 = 'Card info logging';
$_['entry_3d']						 = 'Enable 3D secure';
$_['entry_liability_shift']			 = 'Accept non-liability shifting scenarios';
$_['entry_status_success_settled']	 = 'Sukces - rozstrzygnięty';
$_['entry_status_success_unsettled'] = 'Sukces - nie rozstrzygnięty';
$_['entry_status_decline']			 = 'Odrzucony';
$_['entry_status_decline_pending']	 = 'Odrzucony - autoryzacja offline';
$_['entry_status_decline_stolen']	 = 'Odrzucony - zgubiona lub skradziona karta';
$_['entry_status_decline_bank']		 = 'Odrzucony - błąd banku';
$_['entry_status_void']				 = 'Unieważnione';
$_['entry_status_rebate']			 = 'Rabatowane';

// Help
$_['help_total']					 = 'Wartość zamówienia jaka musi zostać osiągnięta aby płatność była możliwa.';
$_['help_card_select']				 = 'Ask the user to choose thier card type before they are redirected';
$_['help_notification']				 = 'Musisz podać ten adres URL do GlobalPay, aby otrzymywać powiadomienia o płatnościach';
$_['help_debug']					 = 'Włączenie debugowania spowoduje zapisanie poufnych danych w pliku dziennika. Zawsze należy wyłączać, chyba że podano inaczej.';
$_['help_liability']				 = 'Accepting liability means you will still accept payments when a user fails 3D secure.';
$_['help_card_data_status']			 = 'Logs last 4 cards digits, expire, name, type and issuing bank information';

// Tab
$_['tab_api']					     = 'Szczegóły API';
$_['tab_account']				     = 'Konta';
$_['tab_order_status']				 = 'Status zamówienia';
$_['tab_payment']					 = 'Ustawienia płatności';

// Button
$_['button_capture']				 = 'Przechwyć';
$_['button_rebate']					 = 'Rabat / zwrot';
$_['button_void']					 = 'Nieważny';

// Error
$_['error_merchant_id']				 = 'Identyfikator sprzedawcy jest wymagany';
$_['error_secret']					 = 'Sekretny klucz jest wymagany';