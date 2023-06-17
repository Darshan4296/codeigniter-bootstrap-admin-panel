<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EmployeeMigration extends Migration
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
            'name'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'position'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'office'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'age'=>[
                'type'=>'INT',
                'constraint'=>10,
            ],
            'date'=>[
                'type'=>'Date',
            ],
            'salary'=>[
                'type'=>'INT',
                'constraint'=>100,
            ],
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('employee');
    }

    public function down()
    {
        $this->forge->dropTable('employee');
    }
}
