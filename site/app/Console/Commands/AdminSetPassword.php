<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

/** Sets an admin password from a hidden prompt in your own terminal. The password is never passed on the command line. */
class AdminSetPassword extends Command
{
    protected $signature = 'admin:set-password {email? : Admin e-mail (defaults to the only admin account)}';
    protected $description = 'Set a new password for an admin account (hidden prompt)';

    public function handle(): int
    {
        $email = $this->argument('email');
        $query = User::query()->where('role', 'admin');
        $admin = $email ? (clone $query)->where('email', $email)->first() : ((clone $query)->count() === 1 ? (clone $query)->first() : null);
        if (! $admin) {
            $this->error('Admin account not found. Pass the e-mail address: php artisan admin:set-password you@example.com');
            return self::FAILURE;
        }
        $password = (string) $this->secret('New password (min 12 characters)');
        if (mb_strlen($password) < 12) {
            $this->error('Too short. Nothing was changed.');
            return self::FAILURE;
        }
        if ($password !== (string) $this->secret('Repeat the password')) {
            $this->error('The two entries differ. Nothing was changed.');
            return self::FAILURE;
        }
        $admin->password = password_hash($password, PASSWORD_DEFAULT);
        $admin->is_verified = 1;
        $admin->save();
        $this->info('Password updated for ' . $admin->email . '.');
        return self::SUCCESS;
    }
}
