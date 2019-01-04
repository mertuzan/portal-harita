<?php

use yii\db\Migration;

/**
 * Class m190104_163855_migration
 */
class m190104_163855_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
	{
	$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
		
		$this->createTable('users', [
		'user_id' => $this->primaryKey(),
		'username' => $this->string(32)->notNull(),
	    'password' => $this->string(32)->notNull(),
		], $tableOptions);
	
		$this->createTable('queries', [
		'num' => $this->primaryKey(),
		'query' => $this->string(256)->notNull(),
	    'username' => $this->string(256)->notNull(),
		], $tableOptions);

		$this->createTable('user_opts', [
		'username' => $this->string(32)->notNull(),
		'map_height' => $this->integer(11)->notNull(),
	    'map_width' => $this->integer(11)->notNull(),
		], $tableOptions);

    
	}
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
         $this->dropTable('{{users}}');
		 $this->dropTable('{{queries}}');
		 $this->dropTable('{{user_opts}}');

        return false;
    }
}
