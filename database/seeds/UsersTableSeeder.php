<?php

use Illuminate\Database\Seeder;

/**
 * Class UsersTableSeeder
 *
 * 填充测试用户 admin/admin
 */
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getUsers() as $user) {
            $this->insertUser($user);
        }
    }

    protected function insertUser($user)
    {
        $userName = $user['name'];
        $userPassword = $user['password'];
        $userEmail = $user['mail'];

        $user = $this->userTable()
            ->where('name', $userName)
            ->first();

        if (is_null($user)) {
            $this->userTable()->insert([
                'name' => $userName,
                'email' => $userEmail,
                'password' => bcrypt($userPassword),
            ]);
        }
    }

    protected function getUsers()
    {
        return [
            [
                'name' => 'admin',
                'password' => 'admin',
                'mail' => 'admin@qq.com',
            ],
            [
                'name' => 'test1',
                'password' => 'test1',
                'mail' => 'test1@qq.com',
            ],
            [
                'name' => 'test2',
                'password' => 'test2',
                'mail' => 'test2@qq.com',
            ],
            [
                'name' => 'test3',
                'password' => 'test3',
                'mail' => 'test3@qq.com',
            ],
            [
                'name' => 'test4',
                'password' => 'test4',
                'mail' => 'test4@qq.com',
            ],
            [
                'name' => 'test5',
                'password' => 'test5',
                'mail' => 'test5@qq.com',
            ],
            [
                'name' => 'test6',
                'password' => 'test6',
                'mail' => 'test6@qq.com',
            ],
            [
                'name' => 'test7',
                'password' => 'test7',
                'mail' => 'test7@qq.com',
            ],
            [
                'name' => 'test8',
                'password' => 'test8',
                'mail' => 'test8@qq.com',
            ],
            [
                'name' => 'test9',
                'password' => 'test9',
                'mail' => 'test9@qq.com',
            ],
        ];
    }

    protected function userTable()
    {
        return \Illuminate\Support\Facades\DB::table('users');
    }
}
