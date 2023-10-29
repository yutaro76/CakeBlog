<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
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
                'title' => 'first post',
                'description' => 'first description',
                'body' => 'first body',
                'published' => 1,
                'created' => '2023-10-29 10:00:00',
                'modified' => '2023-10-29 10:00:00'
            ],[
                'title' => 'second post',
                'description' => 'second description',
                'body' => 'second body',
                'published' => 1,
                'created' => '2023-10-29 10:30:00',
                'modified' => '2023-10-29 10:30:00'
            ],[
                'title' => 'test tile',
                'description' => 'test tile description',
                'body' => 'test tile body',
                'published' => 1,
                'created' => '2023-05-01 10:30:00',
                'modified' => '2023-05-01 10:30:00'
            ],[
                'title' => 'not displayed tile',
                'description' => 'not displayed tile description',
                'body' => 'not displayed tile body',
                'published' => 0,
                'created' => '2023-05-03 10:30:00',
                'modified' => '2023-05-03 10:30:00'
            ],[
                'title' => 'last tile',
                'description' => 'last tile description',
                'body' => 'last tile body',
                'published' => 0,
                'created' => '2023-05-04 10:30:00',
                'modified' => '2023-05-04 10:30:00'
            ],            
        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
