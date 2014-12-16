<?php

class m141110_161610_Book extends CDbMigration
{
	public function up()
	{
        $this->createTable('books', [
            'id'=>'pk',
            'name'=>'string',
            'id_name'=>'int',

    ]);
	}

	public function down()
	{
        $this->dropTable('books');

	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}