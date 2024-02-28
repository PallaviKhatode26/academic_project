<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'foodname' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'price' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
    
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('food'); 
    }
    
    
    public function down()
    {
        $this->forge->dropTable('food'); 
    }
    }
    