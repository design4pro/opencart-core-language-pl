<?php
/**
 * Project    OpenCart Core Language PL
 * Name       opencart-core-language-pl
 * Modified   10.07.2022, 12:42
 *
 * @category  OpenCart
 * @package   Core
 * @link      https://github.com/design4pro/opencart-core-language-pl
 *
 * @copyright Copyright (c) 2022 DESIGN4PRO OpenCart (https://opencart.design4.pro)
 * @author    DESIGN4PRO OpenCart <opencart@design4.pro>
 * @license   Commercial. All rights reserved.
 *            It is prohibited to copy and distribute in whole or in part.
 *            Licensee has the right to modify the content for your own.
 *            -- PL --
 *            Komercyjna. Wszelkie prawa zastrzeżone.
 *            Zabrania się kopiowania i rozpowszechniania w całości lub fragmentach.
 *            Właściciel licencji ma prawo do modyfikacji treści dla potrzeb własnych.
 */

// Heading
$_['heading_title']          = 'Plany subskrypcji';

// Text
$_['text_success']           = 'Success: You have modified subscription plans!';
$_['text_list']              = 'Lista planów abonamentowych';
$_['text_add']               = 'Dodaj plan abonamentowy';
$_['text_edit']              = 'Edytuj plan abonamentowy';
$_['text_subscription']      = 'Abonament';
$_['text_trial']             = 'Okres próbny';
$_['text_day']               = 'Dzień';
$_['text_week']              = 'Tydzień';
$_['text_semi_month']        = 'Pół miesiąca';
$_['text_month']             = 'Miesiąc';
$_['text_year']              = 'Rok';

// Entry
$_['entry_name']            = 'Nazwa planu abonamentowego';
$_['entry_trial_price']     = 'Cena okresu próbnego';
$_['entry_trial_duration']  = 'Czas trwania okresu próbnego';
$_['entry_trial_cycle']     = 'Cykl okresu próbnego';
$_['entry_trial_frequency'] = 'Częstotliwość okresu próbnego';
$_['entry_trial_status']    = 'Status okresu próbnego';
$_['entry_price']           = 'Cena';
$_['entry_duration']        = 'Czas trwania';
$_['entry_cycle']           = 'Cykl';
$_['entry_frequency']       = 'Częstotliwość';
$_['entry_status']          = 'Status';
$_['entry_sort_order']      = 'Kolejność sortowania';

// Column
$_['column_name']           = 'Nazwa planu abonamentowego';
$_['column_sort_order']     = 'Kolejność sortowania';
$_['column_action']         = 'Akcje';

// Help
$_['help_duration']         = 'The duration is the number of times the user will make a payment, set this to 0 if you want payments until they are cancelled.';
$_['help_cycle']            = 'Subscription amounts are calculated by the frequency and cycles.';
$_['help_frequency']        = 'If you use a frequency of "week" and a cycle of "2", then the user will be billed every 2 weeks.';

// Error
$_['error_warning']         = 'Ostrzeżenie: Proszę sprawdzić formularz ponieważ zawiera błędy!';
$_['error_permission']      = 'Warning: You do not have permission to modify subscription plans!';
$_['error_name']            = 'Subscription Plan Name must be greater than 3 and less than 255 characters!';
$_['error_trial_duration']  = 'Trial duration must be greater than 0!';
$_['error_product']         = 'Warning: This subscription plans cannot be deleted as it is currently assigned to %s products!';
