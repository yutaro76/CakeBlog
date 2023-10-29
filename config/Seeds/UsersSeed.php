<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Authentication\PasswordHasher\DefaultPasswordHasher;
/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'username' => 'admin',
                'password' => $this->_setPassword('admin'),
                'created' => '2023-10-29 10:00:00',
                'modified' => '2023-10-29 10:00:00'
            ],[
                'username' => 'shiki',
                'password' => $this->_setPassword('shiki'),
                'created' => '2023-10-29 10:00:00',
                'modified' => '2023-10-29 10:00:00'
            ]   
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }

    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
