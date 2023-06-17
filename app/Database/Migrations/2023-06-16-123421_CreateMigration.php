<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>5,
                'unsigned'=>true,
                'auto_increment'=>true,
            ],
            'firstname'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'lastname'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
                'null'=>true,
            ],
            'email'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
                'null'=> true,
            ],
            'password'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
                'null'=>true,
            ],

        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('profile');
    }

    public function down()
    {
       $this->forge->dropTable('profile');
    }
}
