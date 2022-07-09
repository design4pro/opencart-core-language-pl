<?php
// Heading
$_['heading_title']				= 'Płatność eWAY';

// Text
$_['text_extension']			= 'Rozszerzenia';
$_['text_success']				= 'Sukces: Zmodyfikowano szczegóły dotyczące eWAY!';
$_['text_edit']					= 'Edit eWAY';
$_['text_eway']					= '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']		= 'Authorisation';
$_['text_sale']					= 'Sprzedaż';
$_['text_transparent']			= 'Transparent Redirect (payment form on site)';
$_['text_iframe']				= 'IFrame (payment form in window)';
$_['text_connect_eway']	  = 'Start accepting credit card payments with eWAY and OpenCart in as little as 5 minutes. Don’t have an eWAY Account? <a target="_blank" href="https://myeway.force.com/success/accelerator-signup?pid=4382&pa=0012000000ivcWf">Click Here</a>';
$_['text_eway_image']	    = '<a target="_BLANK" href="https://myeway.force.com/success/accelerator-signup?pid=4382&pa=0012000000ivcWf"><img src="view/image/payment/eway_connect.png" alt="eWAY" title="eWAY" class="img-fluid" /></a>';

// Entry
$_['entry_paymode']				= 'Payment Mode';
$_['entry_test']				= 'Tryb testowy';
$_['entry_order_status']		= 'Status zamówienia';
$_['entry_order_status_refund'] = 'Status zwróconego zamówienia';
$_['entry_order_status_auth']	= 'Authorised order status';
$_['entry_order_status_fraud']	= 'Suspected Fraud order status';
$_['entry_status']				= 'Status';
$_['entry_username']			= 'eWAY Klucz API';
$_['entry_password']			= 'eWAY hasło';
$_['entry_payment_type']		= 'Typ płatności';
$_['entry_geo_zone']			= 'Strefa geograficzna';
$_['entry_sort_order']			= 'Kolejność sortowania';
$_['entry_transaction_method']	= 'Metoda transakcji';

// Error
$_['error_permission']			= 'Warning: You do not have permission to modify the eWAY payment module';
$_['error_username']			= 'eWAY API Key is required!';
$_['error_password']			= 'eWAY password is required!';
$_['error_payment_type']		= 'At least one payment type is required!';

// Help hints
$_['help_testmode']				= 'Set to Yes to use the eWAY Sandbox.';
$_['help_username']				= 'Your eWAY API Key from your MYeWAY account.';
$_['help_password']				= 'Your eWAY API Password from your MYeWAY account.';
$_['help_transaction_method']	= 'Authorisation is only available for Australian banks';

// Order page - payment tab
$_['text_payment_info']			= 'Informacja o płatności';
$_['text_order_total']			= 'Suma autoryzowana';
$_['text_transactions']			= 'Transakcje';
$_['text_column_transactionid'] = 'eWAY Transaction ID';
$_['text_column_amount']		= 'Kwota';
$_['text_column_type']			= 'Typ';
$_['text_column_created']		= 'Złożone';
$_['text_total_captured']		= 'Suma przechwycona';
$_['text_capture_status']		= 'Płatność przechwycona';
$_['text_void_status']			= 'Płatność unieważniona';
$_['text_refund_status']		= 'Płatność zwrócona';
$_['text_total_refunded']		= 'Total refunded';
$_['text_refund_success']		= 'Refund succeeded!';
$_['text_capture_success']		= 'Capture succeeded!';
$_['text_refund_failed']		= 'Refund failed: ';
$_['text_capture_failed']		= 'Capture failed: ';
$_['text_unknown_failure']		= 'Invalid order or amount';

$_['text_confirm_capture']		= 'Czy na pewno chcesz przechwycić płatność?';
$_['text_confirm_release']		= 'Czy na pewno chcesz zwolnić płatność?';
$_['text_confirm_refund']		= 'Czy na pewno chcesz zwrócić płatność?';

$_['text_empty_refund']			= 'Please enter an amount to refund';
$_['text_empty_capture']		= 'Please enter an amount to capture';

$_['btn_refund']				= 'Zwrot pieniędzy';
$_['btn_capture']				= 'Przechwyć';

// Validation Error codes
$_['text_card_message_V6000']	= 'Nieznany błąd sprawdzenia';
$_['text_card_message_V6001'] 	= 'Nieprawidłowy adres IP klienta';
$_['text_card_message_V6002'] 	= 'Nieprawidłowy DeviceID';
$_['text_card_message_V6011'] 	= 'Nieprawidłowa kwota';
$_['text_card_message_V6012'] 	= 'Nieprawidłowy opis faktury';
$_['text_card_message_V6013'] 	= 'Nieprawidłowy numer faktury';
$_['text_card_message_V6014'] 	= 'Nieprawidłowe odniesienie faktury';
$_['text_card_message_V6015'] 	= 'Nieprawidłowy kod waluty';
$_['text_card_message_V6016'] 	= 'Płatność jest wymagana';
$_['text_card_message_V6017'] 	= 'Kod waluty płatności jest wymagany';
$_['text_card_message_V6018'] 	= 'Nieznany kod płatności waluty';
$_['text_card_message_V6021'] 	= 'Imię i nazwisko posiadacza karty wymagane';
$_['text_card_message_V6022'] 	= 'Numer karty jest wymagany';
$_['text_card_message_V6023'] 	= 'CVN jest wymagane';
$_['text_card_message_V6031'] 	= 'Nieprawidłowy numer karty';
$_['text_card_message_V6032'] 	= 'Nieprawidłowy CVN';
$_['text_card_message_V6033'] 	= 'Nieprawidłowa data ważności';
$_['text_card_message_V6034'] 	= 'Nieprawidłowy numer problemu';
$_['text_card_message_V6035'] 	= 'Nieprawidłowa data początkowa';
$_['text_card_message_V6036'] 	= 'Nieprawidłowy miesiąc';
$_['text_card_message_V6037'] 	= 'Nieprawidłowy rok';
$_['text_card_message_V6040'] 	= 'Nieprawidłowy token identyfikatora klienta';
$_['text_card_message_V6041'] 	= 'Klient jest wymagany';
$_['text_card_message_V6042'] 	= 'Imię klienta jest wymagane';
$_['text_card_message_V6043'] 	= 'Nazwisko klienta jest wymagane';
$_['text_card_message_V6044'] 	= 'Kod kraju klienta jest wymagany';
$_['text_card_message_V6045'] 	= 'Tytuł klienta jest wymagany';
$_['text_card_message_V6046'] 	= 'Token identyfikatoru klienta jest wymagany';
$_['text_card_message_V6047'] 	= 'Adres URL przekierowania jest wymagany';
$_['text_card_message_V6051'] 	= 'Nieprawidłowe imię';
$_['text_card_message_V6052'] 	= 'Nieprawidłowe nazwisko';
$_['text_card_message_V6053'] 	= 'Nieprawidłowy kod kraju';
$_['text_card_message_V6054'] 	= 'Nieprawidłowy adres e-mail';
$_['text_card_message_V6055'] 	= 'Nieprawidłowy numer telefonu';
$_['text_card_message_V6056'] 	= 'Nieprawidłowy numer telefonu komórkowego';
$_['text_card_message_V6057'] 	= 'Nieprawidłowy numer faksu';
$_['text_card_message_V6058'] 	= 'Nieprawidłowy tytuł';
$_['text_card_message_V6059'] 	= 'Adres URL przekierowania jest nieprawidłowy';
$_['text_card_message_V6060'] 	= 'Adres URL przekierowania jest nieprawidłowy';
$_['text_card_message_V6061'] 	= 'Nieprawidłowe odniesienie';
$_['text_card_message_V6062'] 	= 'Nieprawidłowa nazwa firmy';
$_['text_card_message_V6063'] 	= 'Nieprawidłowy opis pracy';
$_['text_card_message_V6064'] 	= 'Nieprawidłowa nazwa ulicy 1';
$_['text_card_message_V6065'] 	= 'Nieprawidłowa naza ulicy 2';
$_['text_card_message_V6066'] 	= 'Nieprawidłowa nazwa miasta';
$_['text_card_message_V6067'] 	= 'Nieprawidłowa nazwa województwa';
$_['text_card_message_V6068'] 	= 'Nieprawidłowy kod pocztowy';
$_['text_card_message_V6069'] 	= 'Nieprawidłowy adres e-mail';
$_['text_card_message_V6070'] 	= 'Nieprawidłowy numer telefonu';
$_['text_card_message_V6071'] 	= 'Nieprawidłowy numer telefonu komórkowego';
$_['text_card_message_V6072'] 	= 'Nieprawidłowy komentarz';
$_['text_card_message_V6073'] 	= 'Nieprawidłowy numer faksu';
$_['text_card_message_V6074'] 	= 'Nieprawidłowy adres URL';
$_['text_card_message_V6075'] 	= 'Nieprawidłowe imię w adresie dostawy';
$_['text_card_message_V6076'] 	= 'Nieprawidłowe nazwisko w adresie dostawy';
$_['text_card_message_V6077'] 	= 'Nieprawidłowa ulica 1 w adresie dostawy';
$_['text_card_message_V6078'] 	= 'Nieprawidłowa ulica 2 w adresie dostawy';
$_['text_card_message_V6079'] 	= 'Nieprawidłowa nazwa miasta w adresie dostawy';
$_['text_card_message_V6080'] 	= 'Nieprawidłowa nazwa województwa w adresie dostawy';
$_['text_card_message_V6081'] 	= 'Nieprawidłowy kod pocztowy w adresie dostawy';
$_['text_card_message_V6082'] 	= 'Nieprawidłowy adres e-mail w adresie dostawy';
$_['text_card_message_V6083'] 	= 'Nieprawidłowy numer telefonu w adresie dostawy';
$_['text_card_message_V6084'] 	= 'Nieprawidłowa nazwa kraju w adresie dostawy';
$_['text_card_message_V6091'] 	= 'Nieznany kod kraju';
$_['text_card_message_V6100'] 	= 'Nieprawidłowa nazwa karty';
$_['text_card_message_V6101'] 	= 'Nieprawidłowy miesiąc ważności karty';
$_['text_card_message_V6102'] 	= 'Nieprawidłowy rok ważności karty';
$_['text_card_message_V6103'] 	= 'Nieprawidłowy miesiąc początkowy karty';
$_['text_card_message_V6104'] 	= 'Nieprawidłowy rok początkowy karty';
$_['text_card_message_V6105'] 	= 'Nieprawidłowy numer wydania karty';
$_['text_card_message_V6106'] 	= 'Nieprawidłowy kod CVN karty';
$_['text_card_message_V6107'] 	= 'Nieprawidłowy AccessCode';
$_['text_card_message_V6108'] 	= 'Nieprawidłowy CustomerHostAddress';
$_['text_card_message_V6109'] 	= 'Nieprawidłowy UserAgent';
$_['text_card_message_V6110'] 	= 'Nieprawidłowy numer karty';
$_['text_card_message_V6111'] 	= 'Nieautoryzowany dostęp API, konto nie certyfikowane przez PCI';
$_['text_card_message_V6112'] 	= 'Zbędne detale karty inne niż rok i miesiąc daty ważności';
$_['text_card_message_V6113'] 	= 'Nieprawidłowa transakcja dla zwrotu';
$_['text_card_message_V6114'] 	= 'Błąd sprawdzania bramki';
$_['text_card_message_V6115'] 	= 'Nieprawidłowy DirectRefundRequest, ID Transakcji';
$_['text_card_message_V6116'] 	= 'Nieprawidłowe dane karty na oryginalnym ID Transakcji';
$_['text_card_message_V6124'] 	= 'Nieprawidłowe elementy zamówienia. Podano elementy zamówienia, jednak sumy nie są zgodne z polem Łączna kwota';
$_['text_card_message_V6125'] 	= 'Wybrany sposób płatność nie jest włączony';
$_['text_card_message_V6126'] 	= 'Nieprawidłowy zaszyfrowany numer karty, odszyfrowanie nie powiodło się';
$_['text_card_message_V6127'] 	= 'Nieprawidłowy zaszyfrowany cvn, odszyfrowanie nie powiodło się';
$_['text_card_message_V6128'] 	= 'Nieprawidłowa metoda dla typu płatności';
$_['text_card_message_V6129'] 	= 'Transakcja nie została autoryzowana dla Przechwycenia/Anulowania';
$_['text_card_message_V6130'] 	= 'Błąd rodzajowy informacji klienta';
$_['text_card_message_V6131'] 	= 'Ogólny błąd informacji o dostawie';
$_['text_card_message_V6132'] 	= 'Transakcja została już skończona lub unieważniona, operacja niedozwolona';
$_['text_card_message_V6133'] 	= 'Zamówienie nie jest dostępne dla tego typu płatności';
$_['text_card_message_V6134'] 	= 'Nieprawidłowe ID transakcji dla Przechwycenia/Unieważnienia';
$_['text_card_message_V6135'] 	= 'Błąd zwrotu kosztów w systemie PayPal';
$_['text_card_message_V6140'] 	= 'Konto sprzedawcy zostało zawieszone';
$_['text_card_message_V6141'] 	= 'Nieprawidłowe dane konta PayPal lub podpis API';
$_['text_card_message_V6142'] 	= 'Autoryzacja jest niedostępna dla Banku/Oddziału';
$_['text_card_message_V6150'] 	= 'Nieprawidłowa kwota zwrotu';
$_['text_card_message_V6151'] 	= 'Kwota zwrotu większa niż oryginalna transakcja';
$_['text_card_message_D4406'] 	= 'Nieznany błąd';
$_['text_card_message_S5010'] 	= 'Nieznany błąd';
