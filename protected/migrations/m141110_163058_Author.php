<?php

class m141110_163058_Author extends CDbMigration
{
	public function up()
	{
        $this->createTable('authors', [
            'id'=>'pk',
            'title'=>'string',
            'id_title'=>'int',

        ]);
	}

	public function down()
	{
        $this->dropTable('authors');

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