<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lang extends CI_Controller {

    public function switch($language = "")
    {
        if ($language == 'th') {
            $language = 'thai';
        } elseif ($language == 'en') {
            $language = 'english';
        }

        $language = ($language != "") ? $language : "thai";

        $this->session->set_userdata('site_lang', $language);

        redirect($_SERVER['HTTP_REFERER']);
    }
}