<?php

use Illuminate\Database\Seeder;

/**
 * Class UsersTableSeeder
 *
 * 填充一个测试用户 admin/admin
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
        $userName = 'admin';
        $userPassword = 'admin';
        $userEmail = 'admin@qq.com';

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

    protected function userTable()
    {
        return \Illuminate\Support\Facades\DB::table('users');
    }
}
