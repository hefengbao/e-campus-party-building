<?php

namespace App\Console\Commands;

use App\Models\Admin;
use Illuminate\Console\Command;
use function Laravel\Prompts\password;
use function Laravel\Prompts\text;

class InitAdminAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:init-admin-account';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '初始化超级管理员账号';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $admin = Admin::find(1);

        if (!$admin) {
            $name = text(
                label: '请输入用户名',
                required: true
            );

            $email = text(
                label: '请输入邮箱',
                required: true
            );

            $password = password(
                label: '请输入密码',
                required: true
            );

            $confirm_password = password(
                label: '请输入确认密码',
                required: true
            );

            if ($password != $confirm_password) {
                $this->error('密码和确认密码不一致!');

                return Command::INVALID;
            }

            $bar = $this->output->createProgressBar(1);

            $bar->start();

            $admin = new Admin();
            $admin->name = $name;
            $admin->email = $email;
            $admin->password = \Hash::make($password);
            $admin->save();

            $bar->finish();

            $this->line('');

            $this->info('初始化【超级管理员】完成。');
        } else {
            $this->info('【超级管理员】已存在。');
        }

        return Command::SUCCESS;
    }
}
