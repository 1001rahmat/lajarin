<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\LearningvideoModel;
use App\Models\LogindataModel;
use App\Models\TugasModel;
use App\Models\UploadTugasModel;

class Site extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->lvModel = new LearningvideoModel();
        $this->lgdModel = new LogindataModel();
        $this->tugasModel = new TugasModel();
        $this->uptModel = new UploadTugasModel();
    }

    public function getIndex()
    {
        return $this->redirect->to(base_url('site/dashboard'));
    }

    public function getDashboard()
    {
        $user = $this->userModel->where('username', $this->session->get('username'))->first();
        $data = [
            'user' => $user,
            'pageTitle' => 'Dasbor',
            'token' => $this->session->get('token'),
            'uname' => $this->session->get('username'),
        ];

        return view('site/dashboard', $data);
//        dd($this->session->has('username'));
    }


    public function getVideo()
    {
        $user = $this->userModel->where('username', $this->session->get('username'))->first();
        $lvideo = $this->lvModel->findAll();
        $data = [
            'user' => $user,
            'pageTitle' => 'Video Pembelajaran',
            'video' => $lvideo,
            'token' => $this->session->get('token')
        ];

        return view('site/video', $data);
    }

    public function getUnduhmedia()
    {
        if (isset($_GET['path'], $_GET['val'], $_GET['token'])) {
            $path = $this->request->getGet('path');
            $val = $this->request->getGet('val');

            // convert URI to string
            $tkn = urldecode($this->request->getGet('token'));

            // change space to plus sign
            $tkn = str_replace(' ', '+', $tkn);

            // cek apakah token valid dan masih aktif
            $lgd = $this->lgdModel->where('cookies_token', $tkn)->first();
            if ($lgd) {
                if ($lgd['isLogout'] !== 1 && $lgd['outdate'] < date('Y-m-d H:i:s')) {
                    // find file in 'media/$path' folder, is exist mp4 files begin with name $val.*.*.mp4
                    $files = glob('media/' . $path . '/' . $val . '.*.*.mp4');

                    // if file exist, Zip to 'temp_dl/zip_download' folder, then download it
                    if ($files) {
                        $zip = new \ZipArchive();
                        $zip_name = 'temp_dl/zip_download/' . $val . '_' . $this->session->get('username') . '.zip';
                        if ($zip->open($zip_name, \ZipArchive::CREATE) !== TRUE) {
                            exit("Maaf, terjadi kesalahan. Kami tidak dapat membuka: <$zip_name>\n");
                        }
                        foreach ($files as $file) {
                            $zip->addFile($file);
                        }
                        $zip->close();
                        header('Content-Type: application/zip');
                        header('Content-disposition: attachment; filename=' . 'Video Pembahasan Soal P' . $val . '_'
                            . $this->session->get('username') . '.zip');
                        header('Content-Length: ' . filesize($zip_name));
                        readfile($zip_name);
                        unlink($zip_name);
                    } else {
                        echo 'File tidak ditemukan';
                    }

                } else {
                    return "Kesalahan karena Logout dan Sesi Berakhir";
                }
            }
        } else {
            return "Akses tidak sah";
        }
    }

    public function getTugas()
    {
        $user = $this->userModel->where('username', $this->session->get('username'))->first();

        $data = [
            'user' => $user,
            'pageTitle' => 'Kumpulkan Tugas',
            'tugas' => $this->tugasModel->get_assignment_submissions($this->session->get('username'), null)
        ];

        return view('site/tugas', $data);
//        dd($data);
    }

    public function getTugasdetail()
    {
        // dd user POST var
//        dd($this->request->getPost());
        $user = $this->userModel->where('username', $this->session->get('username'))->first();
        $tugas = $this->tugasModel->get_assignment_submissions($this->session->get('username'), $this->request->getGet
        ('id_tugas'));
        $data = [
            'user' => $user,
            'pageTitle' => 'Kumpulkan Tugas',
            'tugas' => $tugas
        ];
//
        return view('site/tugasdetail', $data);
    }

    public function postUploadtugas()
    {
        if (!$this->request->withMethod('post')) {
            return redirect()->to(base_url('site/tugas'));
        }

        $file = $this->request->getFile('file');
        $ext = $file->getClientExtension();
        $namaFile = $this->request->getPost('namaFile') . "." . $ext;
        $id_tugas = $this->request->getPost('id_tugas');

        // cek apakah file diunggah dengan benar
        if (!$file->isValid()) {
            return $this->response->setStatusCode(400)->setBody('File tidak valid');
        }

        // loop token with submit_token() helper until token not exist in uptModel
        $id_submit = submit_token();
        while ($this->uptModel->where('token', $id_submit)->first()) {
            $id_submit = submit_token();
        }

        // update data di database
        // simpan file ke folder 'media/kumpul_tugas'
        $simpan = $file->move('media/kumpul_tugas/', $id_submit . '_' . $namaFile);

        $sql = $this->uptModel->where(['username' => $this->session->get('username'), 'id_tugas' => $id_tugas])->set([
            'path' => 'media/kumpul_tugas/' . $id_tugas . '_' . $namaFile,
            'submitted' => 1, 'id_submit' => $id_submit])->update();

        if ($simpan === true && $sql === true) {
            $msg = $this->response->setStatusCode(200)->setBody('Berhasil mengunggah file');
            return $this->response->setJSON($msg);
        } else {
            $msg = $this->response->setStatusCode(400)->setBody('Gagal mengunggah file');
            return $this->response->setJSON($msg);

        }
    }

    public function getEmateri()
    {
        $user = $this->userModel->where('username', $this->session->get('username'))->first();
        $data = [
            'user' => $user,
            'pageTitle' => 'E-Materi Elastisitas',
            'token' => $this->session->get('token'),
            'uname' => $this->session->get('username'),
        ];

        return view('site/emateri', $data);
    }

    public function getProsedural()
    {
        return redirect()->to('https://lajarin.live/blog');
    }
}
