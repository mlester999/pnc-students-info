<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserInfo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'section' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'student_number' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'contact_number' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('user_info');
    }

    public function down()
    {
        $this->forge->dropTable('user_info');
    }
}
