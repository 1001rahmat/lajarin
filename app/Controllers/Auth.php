<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\LogindataModel;
use Gregwar\Captcha\CaptchaBuilder;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->logindataModel = new LogindataModel();
        $this->captchaBuilder = new CaptchaBuilder();
    }

    public function getIndex()
    {
        return redirect()->to(base_url('auth/login'));
    }

    public function getLogin()
    {
        $data = ['pageTitle' => 'Login',
        ];
        return view('auth/login', $data);
    }

    public function getCekkode()
    {
        echo $this->session->get('captcha');
    }

    public function postCeklogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $captcha = $this->request->getPost('captcha');

        if ($this->request->getPost('red') != NULL) {
            $red = rawurldecode($this->request->getPost('red'));
        }

        $user = $this->userModel->where('username', $username)->first();

        if ($captcha === $this->session->get('captcha') && $user) {
            if (password_verify($password, $user['password'])) {
                $indate = date('Y-m-d H:i:s');
                $cookies_token = cookies_token($username);

                // insert data to logindata table
                $this->logindataModel->insert([
                    'username' => $username,
                    'cookies_token' => $cookies_token,
                    'indate' => $indate,
                ]);

                $this->session->set([
                    'isLogin' => true,
                    'username' => $username,
                    'token' => $cookies_token,
                ]);

                if ($this->request->getPost('red') != NULL) {
                    return redirect()->to(base_url($red));
                } else {
                    return redirect()->to(base_url('site/dashboard'));
                }


            } else {
                $this->session->setFlashdata('error', 'Terjadi kesalahan. Periksa apakah \'Password\' Anda sudah benar');
                if ($this->request->getPost('red') != NULL) {
                    return redirect()->to(base_url('/auth/login?red=' . $red));
                } else {
                    return redirect()->to(base_url('/auth/login'));
                }
            }
        } else {
            // set flashdata error
            $this->session->setFlashdata('error', 'Terdapat kesalahan. Periksa apakah \' Captcha \' dan/atau \'Username\' Anda benar.');
            if ($this->request->getPost('red') != NULL) {
                return redirect()->to(base_url('/auth/login?red=' . $red));
            } else {
                return redirect()->to(base_url('/auth/login'));
            }
        }
    }

    public function getCaptcha()
    {
        $this->captchaBuilder->build();
        $this->session->set('captcha', $this->captchaBuilder->getPhrase());
        header('Content-type: image/jpeg');
        $this->captchaBuilder->output();
    }

    public function getLogout()
    {
        $array = [
            'isLogout' => 1,
            'outdate' => date('Y-m-d H:i:s'),
        ];
        $exp = $this->logindataModel->set($array)->where('cookies_token', $this->session->get('token'))->update();
        if ($exp) {
            $this->session->destroy();
            return redirect()->to(base_url('/auth/login'));
        } else {
            $this->session->setFlashdata('error', 'Terjadi kesalahan saat mencoba mengeluarkan Anda. Silahkan coba lagi.');
            return redirect()->to(base_url('/site/dashboard'));
        }
    }
}
