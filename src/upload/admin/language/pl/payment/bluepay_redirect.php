<?php
// Heading
$_['heading_title']					= 'BluePay Redirect (Requires SSL)';

// Text
$_['text_payment']					= 'Płatność';
$_['text_success']					= 'Sukces: Zmodyfikowano ustawienia modułu!';
$_['text_edit']                     = 'Edytuj płatność';
$_['text_bluepay_redirect']			= '<a href="http://www.bluepay.com/preferred-partner/opencart" target="_blank"><img src="view/image/payment/bluepay.jpg" alt="BluePay Redirect" title="BluePay Redirect" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_sim']						= 'Symulator';
$_['text_test']						= 'Tryb testowy';
$_['text_live']						= 'Na żywo';
$_['text_sale']					    = 'Sprzedaż';
$_['text_authenticate']				= 'Authorize';
$_['text_release_ok']				= 'Release was successful';
$_['text_release_ok_order']			= 'Release was successful';
$_['text_rebate_ok']				= 'Rebate was successful';
$_['text_rebate_ok_order']			= 'Rebate was successful, order status updated to rebated';
$_['text_void_ok']					= 'Void was successful, order status updated to voided';
$_['text_payment_info']				= 'Informacja o płatności';
$_['text_release_status']			= 'Payment released';
$_['text_void_status']				= 'Payment voided';
$_['text_rebate_status']			= 'Payment rebated';
$_['text_order_ref']				= 'Order ref';
$_['text_order_total']				= 'Total authorised';
$_['text_total_released']			= 'Total released';
$_['text_transactions']				= 'Transakcje';
$_['text_column_amount']			= 'Kwota';
$_['text_column_type']				= 'Typ';
$_['text_column_date_added']		= 'Złożone';
$_['text_confirm_void']				= 'Are you sure you want to void the payment?';
$_['text_confirm_release']			= 'Are you sure you want to release the payment?';
$_['text_confirm_rebate']			= 'Are you sure you want to rebate the payment?';

// Entry
$_['entry_vendor']					= 'Account ID';
$_['entry_secret_key']				= 'Secret Key';
$_['entry_test']					= 'Transaction Mode';
$_['entry_transaction']				= 'Metoda transakcji';
$_['entry_total']					= 'Do zapłaty';
$_['entry_order_status']			= 'Status zamówienia';
$_['entry_geo_zone']				= 'Strefa geograficzna';
$_['entry_status']					= 'Status';
$_['entry_sort_order']				= 'Kolejność sortowania';
$_['entry_debug']					= 'Debug logging';
$_['entry_card']					= 'Store Cards';

// Help
$_['help_total']					= 'Wartość zamówienia jaka musi zostać osiągnięta aby płatność była możliwa.';
$_['help_debug']					= 'Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise';
$_['help_transaction']				= 'Sale will charge customer immediately. Authorization will put funds on hold for future capture.';
$_['help_cron_job_token']			= 'Make this long and hard to guess';
$_['help_cron_job_url']				= 'Set a cron job to call this URL';

// Button
$_['button_release']				= 'Release';
$_['button_rebate']					= 'Rebate / refund';
$_['button_void']					= 'Void';

// Error
$_['error_permission']				= 'Warning: You do not have permission to modify payment BluePay!';
$_['error_account_id']				= 'Account ID Required!';
$_['error_secret_key']				= 'Secret Key Required!';