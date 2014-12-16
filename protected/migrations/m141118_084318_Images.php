<?php

class m141118_084318_Images extends CDbMigration
{
	public function up()
	{
        $this->createTable('images', [
            'id'=>'pk',
            'image'=>'polygon',
            'id_name'=>'int',
        ]);
        $this->dropColumn('images', 'id_name');
        $this->addColumn('images','id_image', 'int');
	}

	public function down()
	{
        $this->dropTable('images');
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