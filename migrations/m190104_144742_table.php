<?php

use yii\db\Migration;

/**
 * Class m190104_144742_table
 */
class m190104_144742_table extends Migration
{
    /**
     * {@inheritdoc}
     */

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $TABLE_NAME = 'duyurular';
        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'ad' => $this->string(128)->notNull(),
            'soyad' => $this->string(128)->notNull(),
            'tarih' => $this->string(128)->notNull(),
            'konu' => $this->string(50)->notNull(),
            'duyuru' => $this->string(256)->notNull()
        ], $tableOptions);

    }

    public function down()
    {
       $TABLE_NAME = 'duyurular';
        $this->dropTable($TABLE_NAME);
    }
    
}
