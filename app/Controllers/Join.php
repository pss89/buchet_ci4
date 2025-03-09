<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\Database\ConnectionInterface;

class Join extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect(); // DB 연결
    }

    public function index(): string
    {
        $loadFileName = $this->isMobile ? 'user/join_mobile' : 'user/join_pc';
        $viewParams = [
            'title' => '회원가입',
            'jsFileLoadType' => 'user',
        ];
        return view($loadFileName, $viewParams);
    }

    public function store() 
    {
        $result = false;
        $message = null;
        $this->db->transBegin();

        try {
            if (!$this->request->isAJAX()) {
                throw new \Exception('잘못된 접근입니다.');
            }
            
            $request = service('request');
            $user_id = $request->getPost('user_id');
            $password = $request->getPost('password');
            $user_name = $request->getPost('user_name');
            $user_phone = $request->getPost('user_phone');
            $user_email = $request->getPost('user_email');

            $data = [
                'user_id' => $user_id,
                'user_pwd' => password_hash($password, PASSWORD_DEFAULT),
                'user_name' => $user_name,
                'user_phone' => $user_phone,
                'user_email' => $user_email,
            ];

            // $this->db->transStart(); // 🔥 트랜잭션 시작

            $this->db->table('tb_user')->insert($data);
            
            $lastId = $this->db->insertID();
            $addData = [
                'user_table_id' => $lastId,
                'user_id' => $user_id,
            ];
            $this->db->table('tb_test_user')->insert($addData);

            if ($this->db->transStatus() === false) {
                $this->db->transRollback();
                throw new \Exception('트랜잭션 처리 중 오류가 발생했습니다.');
            } else {
                $this->db->transCommit();
                $result = true;
                $message = "회원가입이 완료되었습니다.";
            }
        } catch (\Exception $e) {
            $message = "회원가입 실패: ".$e->getMessage();
        }

        $response = [
            'result' => $result,
            'message' => $message,
        ];

        return $this->response->setJSON($response);
    }
}
