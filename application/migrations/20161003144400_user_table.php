<?php

class Migration_User_table extends CI_Migration
{

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "UserId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "EmployeeId" => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0
            ],
            "Type" => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 1
            ],
            "Name" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Username" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Password" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CreatedBy" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "CreatedDate" => [
                'type' => 'DATETIME'
            ],
            "ModifiedBy" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "ModifiedDate" => [
                'type' => 'TIMESTAMP'
            ],
            "IsDeleted" => [
                'type' => 'INT',
                'constraint' => 0,
                'default' => 0
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('UserId', TRUE);
        $this->dbforge->create_table('user_tab', TRUE);

        $this->db->insert_batch('user_tab',
            [
                [
                    'EmployeeId' => '0',
                    'Type' => '1',
                    'Name' => 'Admin',
                    'Username' => 'admin',
                    'Password' => '7c4a8d09ca3762af61e59520943dc26494f8941b', //123456
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedBy' => '1',
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ],
                [
                    'EmployeeId' => '0',
                    'Type' => '1',
                    'Name' => 'Rangana',
                    'Username' => 'rangana',
                    'Password' => '7c4a8d09ca3762af61e59520943dc26494f8941b',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedBy' => '1',
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ]
            ]
        );

    }

    public function down()
    {
        $this->dbforge->drop_table('user_tab', TRUE);
    }

}