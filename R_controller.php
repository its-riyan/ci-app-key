<?php
defined('BASEPATH') or exit('No direct script access allowed');

class R_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function app_key()
    {
        get_method();
        $data['title'] = "App Key";
        $data['description'] = "CodeIgniter 3 App Key Generator";
        $data["active_page"] = "";

        $this->load->view('@frontend/__components/header.html', $data);
        $this->load->view('@frontend/app_key/app_key.html', $data);
        $this->load->view('@frontend/__components/footer.html');

    }

    function generate_token ($len = 32)
    {
        // Array of potential characters, shuffled.
        $chars = array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
            'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
            'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
            '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
        );
        shuffle($chars);
    
        $num_chars = count($chars) - 1;
        $token = '';
    
        // Create random token at the specified length.
        for ($i = 0; $i < $len; $i++)
        {
            $token .= $chars[mt_rand(0, $num_chars)];
        }
    
        return $token;
    
    }
}
