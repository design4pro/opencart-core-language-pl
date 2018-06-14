<?php
$this->load->model( 'localisation/language' );
$this->load->model( 'setting/setting' );

// Ustawienie domyślnego języka na angielski
$query = $this->db->query( "SELECT `language_id` FROM `" . DB_PREFIX . "language` WHERE `code` = 'en-gb'" );
print_r($query);

if ( $query->row ) {
    $setting = $this->model_setting_setting->getSetting( "config" );

    if ( !empty( $setting['config_language_id'] ) ) {
        $this->model_setting_setting->editSettingValue( "config", "config_language_id", $query->row['language_id'] );
    } else {
        $this->db->query( "INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = '0', `code` = 'config', `key` = 'config_language_id', `value` = '" . $query->row['language_id'] . "'" );
    }

    $this->config->set( 'config_language_id', $query->row['language_id'] );
}

// Parametry
if ( '2.0.0.0' == VERSION ) {
  $data = array(
    'name' => 'Polski',
    'code' => 'pl',
    'locale' => 'pl_PL.UTF-8,pl_PL,pl-pl,polish',
    'image' => 'pl.png',
    'directory' => 'polish',
    'filename' => 'polish',
    'sort_order' => 0,
    'status' => 1
  );
} else {
  $data = array(
    'name' => 'Polski',
    'code' => 'pl',
    'locale' => 'pl_PL.UTF-8,pl_PL,pl-pl,polish',
    'image' => 'pl.png',
    'directory' => 'pl',
    'sort_order' => 0,
    'status' => 1
  );
}

// Sprawdzenie, czy istnieje już jezyk polski w bazie danych
$query = $this->db->query( "SELECT `language_id` FROM `" . DB_PREFIX . "language` WHERE `code` = 'pl'" );

// Dodaję język
if ( !$query->row ) {
    $this->model_localisation_language->addLanguage( $data );
}

$query = $this->db->query( "SELECT `language_id` FROM `" . DB_PREFIX . "language` WHERE `code` = 'pl'" );
print_r($query);

if ( $query->row ) {
    $language_id = $query->row['language_id'];
    if ( '2.2.0.0' == VERSION ) {
        // Podczas dodawania nowego języka nie zapisują się wszystkie dane
        $this->db->query( "UPDATE " . DB_PREFIX . "language SET locale = '" . $this->db->escape( $data['locale'] ) . "', directory = '" . $this->db->escape( $data['directory'] ) . "', image = '" . $this->db->escape( $data['image'] ) . "' WHERE language_id = '" . (int) $language_id . "'" );

        $this->cache->delete( 'language' );
    }
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
    /**
     * Sprawdzenie, czy istnieje już strefa Polska w bazie danych
     */
    $query = $this->db->query( "SELECT `geo_zone_id` FROM `" . DB_PREFIX . "geo_zone` WHERE `name` = 'Polska'" );

    if ( !$query->row ) {
        $query = $this->db->query( "INSERT INTO `" . DB_PREFIX . "geo_zone` (`name`, `description`, `date_modified`, `date_added`) VALUES ('Polska', 'Cała Polska', NOW(), NOW());" );

        $geo_zone_id = $this->db->getLastId();
    } else {
        $geo_zone_id = $query->row['geo_zone_id'];
    }
    /**
     * Kraj w bazie danych
     */
    $query = $this->db->query( "SELECT `country_id` FROM `" . DB_PREFIX . "country` WHERE `iso_code_2` = 'PL' AND `iso_code_3` = 'POL'" );

    if ( !$query->row ) {
        $query = $this->db->query( "INSERT INTO `" . DB_PREFIX . "country` ( `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES ('Polska', 'PL', 'POL', '{company}\r\n{firstname} {lastname}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}', 1, 1);" );

        $country_id = $this->db->getLastId();
    } else {
        $country_id = $query->row['country_id'];

        $this->db->query( "UPDATE `" . DB_PREFIX . "country` SET `name` = 'Polska', `address_format` = '{company}\r\n{firstname} {lastname}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}', `postcode_required` = '1' WHERE `country_id` = '" . (int) $country_id . "'" );
    }

    /**
     * Poprawa nazw województw w bazie danych
     */
    $query = $this->db->query( "SELECT `zone_id`, `country_id`, `code` FROM `" . DB_PREFIX . "zone` WHERE `country_id` = '" . (int) $country_id . "'" );

    if ( !$query->rows ) {
        $query = $this->db->query( "INSERT INTO `" . DB_PREFIX . "_zone` (`country_id`, `name`, `code`, `status`) VALUES
      (" . $country_id . ", 'Dolnośląskie', 'DO', 1),
      (" . $country_id . ", 'Kujawsko-Pomorskie', 'KP', 1),
      (" . $country_id . ", 'Lubelskie', 'LL', 1),
      (" . $country_id . ", 'Łódzkie', 'LO', 1),
      (" . $country_id . ", 'Lubuskie', 'LU', 1),
      (" . $country_id . ", 'Małopolskie', 'ML', 1),
      (" . $country_id . ", 'Opolskie', 'OP', 1),
      (" . $country_id . ", 'Podlaskie', 'PL', 1),
      (" . $country_id . ", 'Pomorskie', 'PM', 1),
      (" . $country_id . ", 'Podkarpackie', 'PP', 1),
      (" . $country_id . ", 'Śląskie', 'SL', 1),
      (" . $country_id . ", 'Świętokrzyskie', 'SW', 1),
      (" . $country_id . ", 'Warmińsko-Mazurskie', 'WM', 1),
      (" . $country_id . ", 'Wielkopolskie', 'WP', 1),
      (" . $country_id . ", 'Zachodniopomorskie', 'ZA', 1),
      (" . $country_id . ", 'Mazowieckie', 'MZ', 1);" );

        $zone_id = $this->db->getLastId();
    } else {
        // Uaktualnienie nazw województw zawierających polskie znaki
        foreach ( $query->rows as $row ) {
            if ( 'DO' == $row['code'] ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "zone` SET `name` = 'Dolnośląskie' WHERE `zone_id` = '" . (int) $row['zone_id'] . "'" );
            }
            if ( 'LO' == $row['code'] ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "zone` SET `name` = 'Łódzkie' WHERE `zone_id` = '" . (int) $row['zone_id'] . "'" );
            }
            if ( 'ML' == $row['code'] ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "zone` SET `name` = 'Małopolskie' WHERE `zone_id` = '" . (int) $row['zone_id'] . "'" );
            }
            if ( 'SL' == $row['code'] ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "zone` SET `name` = 'Śląskie' WHERE `zone_id` = '" . (int) $row['zone_id'] . "'" );
            }
            if ( 'SW' == $row['code'] ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "zone` SET `name` = 'Świętokrzyskie' WHERE `zone_id` = '" . (int) $row['zone_id'] . "'" );
            }
            if ( 'WM' == $row['code'] ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "zone` SET `name` = 'Warmińsko-Mazurskie' WHERE `zone_id` = '" . (int) $row['zone_id'] . "'" );
            }
        }

        $query = $this->db->query( "SELECT `zone_id` FROM `" . DB_PREFIX . "zone` WHERE `name` = 'Mazowieckie' AND `code` = 'MZ'" );

        $zone_id = $query->row['zone_id'];
    }

    /**
     * Przypisanie strefy do kraju i województwa
     */
    $query = $this->db->query( "SELECT `country_id` FROM `" . DB_PREFIX . "zone_to_geo_zone` WHERE `country_id` = '" . (int) $country_id . "' AND `zone_id` = '" . (int) $zone_id . "' AND `geo_zone_id` = '" . (int) $geo_zone_id . "'" );

    if ( !$query->rows ) {
        $this->db->query( "INSERT INTO `" . DB_PREFIX . "zone_to_geo_zone` (`country_id`, `zone_id`, `geo_zone_id`, `date_added`, `date_modified`) VALUES ('" . (int) $country_id . "', '" . (int) $zone_id . "', '" . (int) $geo_zone_id . "', NOW(), NOW())" );
    }

    /**
     * Dodanie nowej reguły podatkowej w bazie danych
     */
    $query = $this->db->query( "SELECT `tax_class_id` FROM `" . DB_PREFIX . "tax_class` WHERE `title` = 'Podatek VAT'" );

    if ( !$query->row ) {
        $query = $this->db->query( "INSERT INTO `" . DB_PREFIX . "tax_class` (`title`, `description`, `date_added`, `date_modified`) VALUES ('Podatek VAT', 'Podatek VAT', NOW(), NOW());" );

        $tax_class_id = $this->db->getLastId();
    } else {
        $tax_class_id = $query->row['tax_class_id'];
    }

    /**
     * Dodanie nowej stawki podatkowej w bazie danych
     */
    $query = $this->db->query( "SELECT `tax_rate_id` FROM `" . DB_PREFIX . "tax_rate` WHERE `geo_zone_id` = '" . $geo_zone_id . "' AND `name` = 'VAT (23%)'" );

    if ( !$query->row ) {
        $query = $this->db->query( "INSERT INTO `" . DB_PREFIX . "tax_rate` (`geo_zone_id`, `name`, `rate`, `type`, `date_added`, `date_modified`) VALUES (" . $geo_zone_id . ", 'VAT (23%)', 23.0000, 'P', NOW(), NOW());" );

        $tax_rate_id = $this->db->getLastId();
    } else {
        $tax_rate_id = $query->row['tax_rate_id'];
    }

    $query = $this->db->query( "SELECT `tax_rate_id` FROM `" . DB_PREFIX . "tax_rule` WHERE `tax_rate_id` = '" . (int) $tax_rate_id . "' AND `tax_class_id` = '" . (int) $tax_class_id . "' AND `based` = 'store'" );

    if ( !$query->row ) {
        $this->db->query( "INSERT INTO `" . DB_PREFIX . "tax_rule` (`tax_rate_id`, `tax_class_id`, `based`, `priority`) VALUES ('" . (int) $tax_rate_id . "', '" . (int) $tax_class_id . "', 'store', 0)" );
    }

    $query = $this->db->query( "SELECT `tax_rate_id` FROM `" . DB_PREFIX . "tax_rule` WHERE `tax_rate_id` = '" . (int) $tax_rate_id . "' AND `tax_class_id` = '" . (int) $tax_class_id . "' AND `based` = 'payment'" );

    if ( !$query->row ) {
        $this->db->query( "INSERT INTO `" . DB_PREFIX . "tax_rule` (`tax_rate_id`, `tax_class_id`, `based`, `priority`) VALUES ('" . (int) $tax_rate_id . "', '" . (int) $tax_class_id . "', 'payment', 1)" );
    }

    $query = $this->db->query( "SELECT `tax_rate_id` FROM `" . DB_PREFIX . "tax_rule` WHERE `tax_rate_id` = '" . (int) $tax_rate_id . "' AND `tax_class_id` = '" . (int) $tax_class_id . "' AND `based` = 'shipping'" );

    if ( !$query->row ) {
        $this->db->query( "INSERT INTO `" . DB_PREFIX . "tax_rule` (`tax_rate_id`, `tax_class_id`, `based`, `priority`) VALUES ('" . (int) $tax_rate_id . "', '" . (int) $tax_class_id . "', 'shipping', 2)" );
    }

    /**
     * Grupy użytkowników w bazie danych
     */
    $query = $this->db->query( "SELECT `customer_group_id`, `name` FROM `" . DB_PREFIX . "customer_group_description` WHERE `language_id` = '1'" );

    if ( $query->rows ) {
        foreach ( $query->rows as $row ) {
            if ( 'Default' == $row['name'] ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "customer_group_description` SET `name` = '" . $this->db->escape( 'Domyślna' ) . "' WHERE `customer_group_id` = '" . (int) $row['customer_group_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );

                $query = $this->db->query( "SELECT `customer_group_id` FROM `" . DB_PREFIX . "tax_rate_to_customer_group` WHERE `tax_rate_id` = '" . (int) $tax_rate_id . "' AND `customer_group_id` = '" . (int) $row['customer_group_id'] . "'" );

                if ( !$query->row ) {
                    $this->db->query( "INSERT INTO `" . DB_PREFIX . "tax_rate_to_customer_group` (`tax_rate_id`, `customer_group_id`) VALUES ('" . (int) $tax_rate_id . "', '" . (int) $row['customer_group_id'] . "')" );
                }
            }
        }
    }

    /**
     * Tłumaczenie jednostek długości w bazie danych
     */
    $query = $this->db->query( "SELECT `length_class_id`, `title` FROM `" . DB_PREFIX . "length_class_description` WHERE `language_id` = '1'" );

    if ( $query->rows ) {
        foreach ( $query->rows as $row ) {
            if ( 'Centimeter' == trim( $row['title'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "length_class_description` SET `title` = '" . $this->db->escape( 'Centymetr' ) . "', `unit` = '" . $this->db->escape( 'cm' ) . "' WHERE `length_class_id` = '" . (int) $row['length_class_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Millimeter' == trim( $row['title'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "length_class_description` SET `title` = '" . $this->db->escape( 'Milimetr' ) . "', `unit` = '" . $this->db->escape( 'mm' ) . "' WHERE `length_class_id` = '" . (int) $row['length_class_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Inch' == trim( $row['title'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "length_class_description` SET `title` = '" . $this->db->escape( 'Cal' ) . "', `unit` = '" . $this->db->escape( 'in' ) . "' WHERE `length_class_id` = '" . (int) $row['length_class_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }
        }
    }

    $this->cache->delete( 'length_class' );

    /**
     * Tłumaczenie stron w bazie danych
     */
    $query = $this->db->query( "SELECT `information_id`, `title` FROM `" . DB_PREFIX . "information_description` WHERE `language_id` = '1'" );

    if ( $query->rows ) {
        foreach ( $query->rows as $row ) {
            if ( 'About Us' == trim( $row['title'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "information_description` SET `title` = '" . $this->db->escape( 'O Nas' ) . "' WHERE `information_id` = '" . (int) $row['information_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Terms &amp; Conditions' == trim( $row['title'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "information_description` SET `title` = '" . $this->db->escape( 'Regulamin zakupów' ) . "' WHERE `information_id` = '" . (int) $row['information_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Privacy Policy' == trim( $row['title'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "information_description` SET `title` = '" . $this->db->escape( 'Polityka Prywatności' ) . "' WHERE `information_id` = '" . (int) $row['information_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Delivery Information' == trim( $row['title'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "information_description` SET `title` = '" . $this->db->escape( 'Koszt i sposoby dostawy' ) . "' WHERE `information_id` = '" . (int) $row['information_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }
        }
    }

    $this->cache->delete( 'information' );
    /**
     * Tłumaczenie układów w bazie danych
     */
    $query = $this->db->query( "SELECT `layout_id`, `name` FROM `" . DB_PREFIX . "layout`" );

    if ( $query->rows ) {
        foreach ( $query->rows as $row ) {
            if ( 'Home' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape( 'Strona główna' ) . "' WHERE `layout_id` = '" . (int) $row['layout_id'] . "'" );
            }

            if ( 'Product' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape( 'Produkt' ) . "' WHERE `layout_id` = '" . (int) $row['layout_id'] . "'" );
            }

            if ( 'Category' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape( 'Kategoria' ) . "' WHERE `layout_id` = '" . (int) $row['layout_id'] . "'" );
            }

            if ( 'Default' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape( 'Domyślny' ) . "' WHERE `layout_id` = '" . (int) $row['layout_id'] . "'" );
            }

            if ( 'Manufacturer' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape( 'Producent' ) . "' WHERE `layout_id` = '" . (int) $row['layout_id'] . "'" );
            }

            if ( 'Account' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape( 'Konto' ) . "' WHERE `layout_id` = '" . (int) $row['layout_id'] . "'" );
            }

            if ( 'Checkout' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape( 'Podsumowanie' ) . "' WHERE `layout_id` = '" . (int) $row['layout_id'] . "'" );
            }

            if ( 'Contact' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape( 'Kontakt' ) . "' WHERE `layout_id` = '" . (int) $row['layout_id'] . "'" );
            }

            if ( 'Sitemap' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape( 'Mapa strony' ) . "' WHERE `layout_id` = '" . (int) $row['layout_id'] . "'" );
            }

            if ( 'Affiliate' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape( 'Partner' ) . "' WHERE `layout_id` = '" . (int) $row['layout_id'] . "'" );
            }

            if ( 'Information' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape( 'Informacja' ) . "' WHERE `layout_id` = '" . (int) $row['layout_id'] . "'" );
            }

            if ( 'Compare' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape( 'Porównanie' ) . "' WHERE `layout_id` = '" . (int) $row['layout_id'] . "'" );
            }

            if ( 'Search' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape( 'Szukaj' ) . "' WHERE `layout_id` = '" . (int) $row['layout_id'] . "'" );
            }
        }
    }

    $this->cache->delete( 'information' );
    /**
     * Opcje w bazie danych
     */
    $query = $this->db->query( "SELECT `option_id`, `name` FROM `" . DB_PREFIX . "option_description` WHERE `language_id` = '1'" );

    if ( $query->rows ) {
        foreach ( $query->rows as $row ) {
            if ( 'Radio' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "option_description` SET `name` = '" . $this->db->escape( 'Pojedynczy wybór' ) . "' WHERE `option_id` = '" . (int) $row['option_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Checkbox' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "option_description` SET `name` = '" . $this->db->escape( 'Wielokrotny wybór' ) . "' WHERE `option_id` = '" . (int) $row['option_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Text' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "option_description` SET `name` = '" . $this->db->escape( 'Pole jednowierszowe' ) . "' WHERE `option_id` = '" . (int) $row['option_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Textarea' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "option_description` SET `name` = '" . $this->db->escape( 'Pole wielowierszowe' ) . "' WHERE `option_id` = '" . (int) $row['option_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Date' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "option_description` SET `name` = '" . $this->db->escape( 'Data' ) . "' WHERE `option_id` = '" . (int) $row['option_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'File' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "option_description` SET `name` = '" . $this->db->escape( 'Pliki' ) . "' WHERE `option_id` = '" . (int) $row['option_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Select' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "option_description` SET `name` = '" . $this->db->escape( 'Lista rozwijana' ) . "' WHERE `option_id` = '" . (int) $row['option_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Time' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "option_description` SET `name` = '" . $this->db->escape( 'Czas' ) . "' WHERE `option_id` = '" . (int) $row['option_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Date &amp; Time' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "option_description` SET `name` = '" . $this->db->escape( 'Data i czas' ) . "' WHERE `option_id` = '" . (int) $row['option_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Delivery Date' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "option_description` SET `name` = '" . $this->db->escape( 'Data dostawy' ) . "' WHERE `option_id` = '" . (int) $row['option_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Size' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "option_description` SET `name` = '" . $this->db->escape( 'Rozmiar' ) . "' WHERE `option_id` = '" . (int) $row['option_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }
        }
    }
    /**
     * Statusy zamówień w bazie danych
     */
    $query = $this->db->query( "SELECT `order_status_id`, `name` FROM `" . DB_PREFIX . "order_status` WHERE `language_id` = '1'" );

    if ( $query->rows ) {
        foreach ( $query->rows as $row ) {
            if ( 'Pending' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "order_status` SET `name` = '" . $this->db->escape( 'Oczekujące' ) . "' WHERE `order_status_id` = '" . (int) $row['order_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Processing' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "order_status` SET `name` = '" . $this->db->escape( 'Przetwarzane' ) . "' WHERE `order_status_id` = '" . (int) $row['order_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Shipped' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "order_status` SET `name` = '" . $this->db->escape( 'Dostarczone' ) . "' WHERE `order_status_id` = '" . (int) $row['order_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Complete' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "order_status` SET `name` = '" . $this->db->escape( 'Zakończone' ) . "' WHERE `order_status_id` = '" . (int) $row['order_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Canceled' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "order_status` SET `name` = '" . $this->db->escape( 'Anulowane' ) . "' WHERE `order_status_id` = '" . (int) $row['order_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Denied' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "order_status` SET `name` = '" . $this->db->escape( 'Odmowa' ) . "' WHERE `order_status_id` = '" . (int) $row['order_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Canceled Reversal' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "order_status` SET `name` = '" . $this->db->escape( 'Anulowane - Ponowna sprzedaż' ) . "' WHERE `order_status_id` = '" . (int) $row['order_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Failed' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "order_status` SET `name` = '" . $this->db->escape( 'Zakończone błędem' ) . "' WHERE `order_status_id` = '" . (int) $row['order_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Refunded' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "order_status` SET `name` = '" . $this->db->escape( 'Zwrócone' ) . "' WHERE `order_status_id` = '" . (int) $row['order_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Reversed' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "order_status` SET `name` = '" . $this->db->escape( 'Ponowna sprzedaż' ) . "' WHERE `order_status_id` = '" . (int) $row['order_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Chargeback' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "order_status` SET `name` = '" . $this->db->escape( 'Zwrot pieniędzy' ) . "' WHERE `order_status_id` = '" . (int) $row['order_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Expired' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "order_status` SET `name` = '" . $this->db->escape( 'Wygasło' ) . "' WHERE `order_status_id` = '" . (int) $row['order_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Processed' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "order_status` SET `name` = '" . $this->db->escape( 'Przetworzone' ) . "' WHERE `order_status_id` = '" . (int) $row['order_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Voided' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "order_status` SET `name` = '" . $this->db->escape( 'Wygasa' ) . "' WHERE `order_status_id` = '" . (int) $row['order_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }
        }
    }

    $this->cache->delete( 'order_status' );
    /**
     * Statusy zwrotów w bazie danych
     */
    $query = $this->db->query( "SELECT `return_status_id`, `name` FROM `" . DB_PREFIX . "return_status` WHERE `language_id` = '1'" );

    if ( $query->rows ) {
        foreach ( $query->rows as $row ) {
            if ( 'Pending' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "return_status` SET `name` = '" . $this->db->escape( 'Oczekująca' ) . "' WHERE `return_status_id` = '" . (int) $row['return_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Complete' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "return_status` SET `name` = '" . $this->db->escape( 'Zakończona' ) . "' WHERE `return_status_id` = '" . (int) $row['return_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Awaiting Products' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "return_status` SET `name` = '" . $this->db->escape( 'Przetwarzana' ) . "' WHERE `return_status_id` = '" . (int) $row['return_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }
        }
    }
    /**
     * Zwroty w bazie danych
     */
    $query = $this->db->query( "SELECT `return_action_id`, `name` FROM `" . DB_PREFIX . "return_action` WHERE `language_id` = '1'" );

    if ( $query->rows ) {
        foreach ( $query->rows as $row ) {
            if ( 'Refunded' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "return_action` SET `name` = '" . $this->db->escape( 'Zwrot pieniędzy' ) . "' WHERE `return_action_id` = '" . (int) $row['return_action_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Credit Issued' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "return_action` SET `name` = '" . $this->db->escape( 'Przyznany kredyt' ) . "' WHERE `return_action_id` = '" . (int) $row['return_action_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Replacement Sent' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "return_action` SET `name` = '" . $this->db->escape( 'Nowy produkt wysłany' ) . "' WHERE `return_action_id` = '" . (int) $row['return_action_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }
        }
    }

    /**
     * Powody zwrotów w bazie danych
     */
    $query = $this->db->query( "SELECT `return_reason_id`, `name` FROM `" . DB_PREFIX . "return_reason` WHERE `language_id` = '1'" );

    if ( $query->rows ) {
        foreach ( $query->rows as $row ) {
            if ( 'Dead On Arrival' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "return_reason` SET `name` = '" . $this->db->escape( 'Uszkodzony podczas dostawy' ) . "' WHERE `return_reason_id` = '" . (int) $row['return_reason_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Received Wrong Item' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "return_reason` SET `name` = '" . $this->db->escape( 'Produkt niezgodny z zamówieniem' ) . "' WHERE `return_reason_id` = '" . (int) $row['return_reason_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Order Error' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "return_reason` SET `name` = '" . $this->db->escape( 'Błąd w zamówieniu' ) . "' WHERE `return_reason_id` = '" . (int) $row['return_reason_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Faulty, please supply details' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "return_reason` SET `name` = '" . $this->db->escape( 'Wadliwy, proszę podać szczegóły' ) . "' WHERE `return_reason_id` = '" . (int) $row['return_reason_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Other, please supply details' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "return_reason` SET `name` = '" . $this->db->escape( 'Inny, proszę podać szczegóły' ) . "' WHERE `return_reason_id` = '" . (int) $row['return_reason_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }
        }
    }
    /**
     * Statusy magazynowe w bazie danych
     */
    $query = $this->db->query( "SELECT `stock_status_id`, `name` FROM `" . DB_PREFIX . "stock_status` WHERE `language_id` = '1'" );

    if ( $query->rows ) {
        foreach ( $query->rows as $row ) {
            if ( 'In Stock' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "stock_status` SET `name` = '" . $this->db->escape( 'Dostępne' ) . "' WHERE `stock_status_id` = '" . (int) $row['stock_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Pre-Order' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "stock_status` SET `name` = '" . $this->db->escape( 'Przedsprzedaż' ) . "' WHERE `stock_status_id` = '" . (int) $row['stock_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Out Of Stock' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "stock_status` SET `name` = '" . $this->db->escape( 'Brak' ) . "' WHERE `stock_status_id` = '" . (int) $row['stock_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( '2-3 Days' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "stock_status` SET `name` = '" . $this->db->escape( '2-3 Dni' ) . "' WHERE `stock_status_id` = '" . (int) $row['stock_status_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }
        }
    }

    $this->cache->delete( 'stock_status' );
    /**
     * Nazwy szablonów w bazie danych
     */
    $query = $this->db->query( "SELECT `voucher_theme_id`, `name` FROM `" . DB_PREFIX . "voucher_theme_description` WHERE `language_id` = '1'" );

    if ( $query->rows ) {
        foreach ( $query->rows as $row ) {
            if ( 'Christmas' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "voucher_theme_description` SET `name` = '" . $this->db->escape( 'Święta' ) . "' WHERE `voucher_theme_id` = '" . (int) $row['voucher_theme_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Birthday' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "voucher_theme_description` SET `name` = '" . $this->db->escape( 'Urodziny' ) . "' WHERE `voucher_theme_id` = '" . (int) $row['voucher_theme_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'General' == trim( $row['name'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "voucher_theme_description` SET `name` = '" . $this->db->escape( 'Ogólne' ) . "' WHERE `voucher_theme_id` = '" . (int) $row['voucher_theme_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }
        }
    }

    $this->cache->delete( 'voucher_theme' );
    /**
     * Tłumaczenie jednostek wagi w bazie danych
     */
    $query = $this->db->query( "SELECT `weight_class_id`, `title` FROM `" . DB_PREFIX . "weight_class_description` WHERE `language_id` = '1'" );

    if ( $query->rows ) {
        foreach ( $query->rows as $row ) {
            if ( 'Pound' == trim( $row['title'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "weight_class_description` SET `title` = '" . $this->db->escape( 'Funt' ) . "' WHERE `weight_class_id` = '" . (int) $row['weight_class_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }

            if ( 'Ounce' == trim( $row['title'] ) ) {
                $this->db->query( "UPDATE `" . DB_PREFIX . "weight_class_description` SET `title` = '" . $this->db->escape( 'Uncja' ) . "' WHERE `weight_class_id` = '" . (int) $row['weight_class_id'] . "' AND `language_id` = '" . (int) $language_id . "'" );
            }
        }
    }

    $this->cache->delete( 'weight_class' );
    /**
     * Zmiana ustawień domyślnego sklepu
     */
    $this->model_setting_setting->editSettingValue( 'config', 'config_country_id', (int) $country_id );
    $this->model_setting_setting->editSettingValue( 'config', 'config_zone_id', (int) $zone_id );
    $this->model_setting_setting->editSettingValue( 'config', 'config_language', 'pl' );
    $this->model_setting_setting->editSettingValue( 'config', 'config_admin_language', 'pl' );
    $this->model_setting_setting->editSettingValue( 'config', 'config_currency', 'PLN' );
    /**
     * Uaktualnienie wartości walut
     */
    $this->load->model( 'localisation/currency' );

    if ( '2.0.0.0' == VERSION ) {
        $this->model_localisation_currency->updateCurrencies();
    } else {
        $this->model_localisation_currency->refresh();
    }
}
