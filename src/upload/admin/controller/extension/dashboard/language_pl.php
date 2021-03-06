<?php
/**
 * Project    OpenCart Core Langauge PL
 * Name       opencart-language-pl
 * Modified   16.06.18 12:09
 *
 * @category  OpenCart
 * @package   Core
 * @link      https://opencart.design4.io/language-pl
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

class ControllerExtensionDashboardLanguagePl extends Controller {
    public function index() {
        $this->load->language('extension/dashboard/language_pl');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=dashboard', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/dashboard/language_pl', 'user_token=' . $this->session->data['user_token'], true)
        );

        $language_variables = array(
            'heading_title',
            'text_main'
        );

        foreach ($language_variables as $language_variable) {
            $data[$language_variable] = $this->language->get($language_variable);
        }

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=dashboard', true);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/dashboard/language_pl_info', $data));
    }

    public function install() {
        $this->load->model('extension/dashboard/language_pl');

        $this->model_extension_dashboard_language_pl->install();
    }

    public function uninstall() {
        $this->load->model('extension/dashboard/language_pl');

        $this->model_extension_dashboard_language_pl->uninstall();
    }
}
