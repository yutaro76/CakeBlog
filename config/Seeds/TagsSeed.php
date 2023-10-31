<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Tags seed.
 */
class TagsSeed extends AbstractSeed
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
                'title' => 'tag1',
                'created' => '2023-10-28 10:00:00',
                'modified' => '2023-10-28 10:00:00'
            ],[
                'title' => 'tag2',
                'created' => '2023-10-29 10:00:00',
                'modified' => '2023-10-29 10:00:00'
            ],[
                'title' => 'tag3',
                'created' => '2023-10-30 10:00:00',
                'modified' => '2023-10-30 10:00:00'
            ]
        ];

        $table = $this->table('tags');
        $table->insert($data)->save();

        $data = [
            [
                'post_id' => 1,
                'tag_id' => 1,
            ],[
                'post_id' => 1,
                'tag_id' => 2,
            ],[
                'post_id' => 1,
                'tag_id' => 2,
            ],[
                'post_id' => 2,
                'tag_id' => 2,
            ]
        ];

        $table = $this->table('posts_tags');
        $table->insert($data)->save();
    }
}
