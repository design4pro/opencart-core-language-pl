<?php
/**
 * Project    OpenCart Core Languages
 * Name       opencart-core-languages
 * Modified   13.06.18 22:12
 *
 * @category  OpenCart
 * @package   Core
 * @link      https://opencart.design4.pro/core/languages
 *
 * @copyright Copyright (c) 2018 DESIGN4PRO OpenCart (https://opencart.design4.pro)
 * @author    DESIGN4PRO OpenCart <opencart@design4.pro>
 * @license   Commercial. All rights reserved.
 *            It is prohibited to copy and distribute in whole or in part.
 *            Licensee has the right to modify the content for your own.
 *            -- PL --
 *            Komercyjna. Wszelkie prawa zastrzeżone.
 *            Zabrania się kopiowania i rozpowszechniania w całości lub fragmentach.
 *            Właściciel licencji ma prawo do modyfikacji treści dla potrzeb własnych.
 */

class ModelExtensionDashboardLanguagePl extends Model
{

    public function install()
    {
        $this->load->model('localisation/language');
        $this->load->model('setting/setting');

        // Change default language to english (en-gb)
        $query = $this->db->query("SELECT `language_id` FROM `" . DB_PREFIX . "language` WHERE `code` = 'en-gb'");
        print_r($query);

        if ($query->row) {
            $setting = $this->model_setting_setting->getSetting("config");

            if (!empty($setting['config_language_id'])) {
                $this->model_setting_setting->editSettingValue("config", "config_language_id", $query->row['language_id']);
            } else {
                $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = '0', `code` = 'config', `key` = 'config_language_id', `value` = '" . $query->row['language_id'] . "'");
            }

            $this->config->set('config_language_id', $query->row['language_id']);
        }

        $data = array(
            'name' => 'Polski',
            'code' => 'pl',
            'locale' => 'pl_PL.UTF-8,pl_PL,pl-pl,polish',
            'image' => 'pl.png',
            'directory' => 'pl',
            'sort_order' => 0,
            'status' => 1
        );

        // Check if the polish language exists
        $query = $this->db->query("SELECT `language_id` FROM `" . DB_PREFIX . "language` WHERE `code` = 'pl'");
        print_r($query);
        // Add new language
        if (!$query->row) {
            $this->model_localisation_language->addLanguage($data);
        }

        $query = $this->db->query("SELECT `language_id` FROM `" . DB_PREFIX . "language` WHERE `code` = 'pl'");

        if ( $query->row ) {
            $language_id = $query->row['language_id'];

            /**
             * Sprawdzenie, czy istnieje już waluta Złoty polski w bazie danych
             */
            $query = $this->db->query( "SELECT `currency_id` FROM `" . DB_PREFIX . "currency` WHERE `code` = 'PLN'" );

            if ( !$query->row ) {
                // PLN nie istnieje, więc dodaję
                $query = $this->db->query( "INSERT INTO `" . DB_PREFIX . "currency` (`title`, `code`, `symbol_left`, `symbol_right`, `decimal_place`, `value`, `status`, `date_modified`) VALUES ('Złoty polski', 'PLN', '', 'PLN', '2', 1.00000000, 1, NOW());" );

                $currency_id = $this->db->getLastId();
            } else {
                $currency_id = $query->row['currency_id'];
            }
        }
    }

    public function uninstall()
    {
    }
}
