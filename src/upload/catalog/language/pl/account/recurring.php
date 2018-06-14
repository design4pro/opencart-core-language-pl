<?php
// Heading
$_['heading_title']           = 'Subskrypcje';

// Text
$_['text_account']            = 'Konto';
$_['text_recurring']          = 'Informacja o płatności za subskrypcję';
$_['text_recurring_detail']   = 'Szczegóły płatności za subskrypcję';
$_['text_order_recurring_id'] = 'Identyfikator subskrypcji';
$_['text_date_added']         = 'Data dodania:';
$_['text_status']             = 'Status:';
$_['text_payment_method']     = 'Metoda płatności:';
$_['text_order_id']           = 'Numer zamówienia:';
$_['text_product']            = 'Produkt:';
$_['text_quantity']           = 'Ilość:';
$_['text_description']        = 'Opis';
$_['text_reference']          = 'Polecający';
$_['text_transaction']        = 'Transakcje';


$_['text_status_1']           = 'Aktywne';
$_['text_status_2']           = 'Nieaktywne';
$_['text_status_3']           = 'Anulowane';
$_['text_status_4']           = 'Zawieszone';
$_['text_status_5']           = 'Wygasłe';
$_['text_status_6']           = 'Oczekujące';

$_['text_transaction_date_added'] = 'Złożone';
$_['text_transaction_payment'] = 'Płatność';
$_['text_transaction_outstanding_payment'] = 'Pozostała kwota do zapłaty';
$_['text_transaction_skipped'] = 'Płatność pominięta';
$_['text_transaction_failed'] = 'Błąd płatności';
$_['text_transaction_cancelled'] = 'Anulowane';
$_['text_transaction_suspended'] = 'Zawieszone';
$_['text_transaction_suspended_failed'] = 'Zawieszone z powodu błędu płatności';
$_['text_transaction_outstanding_failed'] = 'Błąd płatności';
$_['text_transaction_expired'] = 'Wygasłe';




$_['text_empty']                 = 'Nie znaleziono płatności za subskrypcje!';
$_['text_error']                 = 'Zamówienie subskrypcji, którego szukasz nie zostało znalezione!';








$_['text_cancelled'] = 'Płatności cykliczne zostały anulowane';

/*

		$data['status_types'] = array(
			1 => $this->language->get('text_status_inactive'),
			2 => $this->language->get('text_status_active'),
			3 => $this->language->get('text_status_suspended'),
			4 => $this->language->get('text_status_cancelled'),
			5 => $this->language->get('text_status_expired'),
			6 => $this->language->get('text_status_pending'),
		);

		$data['transaction_types'] = array(
			0 => $this->language->get('text_transaction_date_added'),
			1 => $this->language->get('text_transaction_payment'),
			2 => $this->language->get('text_transaction_outstanding_payment'),
			3 => $this->language->get('text_transaction_skipped'),
			4 => $this->language->get('text_transaction_failed'),
			5 => $this->language->get('text_transaction_cancelled'),
			6 => $this->language->get('text_transaction_suspended'),
			7 => $this->language->get('text_transaction_suspended_failed'),
			8 => $this->language->get('text_transaction_outstanding_failed'),
			9 => $this->language->get('text_transaction_expired'),
		);
		
			private $recurring_status = array(
		0 => 'Inactive',
		1 => 'Active',
		2 => 'Suspended',
		3 => 'Cancelled',
		4 => 'Expired / Complete'
	);

	private $transaction_type = array(
		0 => 'Created',
		1 => 'Payment',
		2 => 'Outstanding payment',
		3 => 'Payment skipped',
		4 => 'Payment failed',
		5 => 'Cancelled',
		6 => 'Suspended',
		7 => 'Suspended from failed payment',
		8 => 'Outstanding payment failed',
		9 => 'Expired'
	);

		
		
*/


// Column
$_['column_date_added']         = 'Data dodania';
$_['column_type']               = 'Typ';
$_['column_amount']             = 'Kwota';
$_['column_status']             = 'Status';
$_['column_product']            = 'Produkt';
$_['column_order_recurring_id'] = 'Identyfikator subskrypcji';

// Error
$_['error_not_cancelled'] = 'Błąd: %s';
$_['error_not_found']     = 'Nie można anulować subskrypcji';

// Button
$_['button_return']       = 'Zwróć';