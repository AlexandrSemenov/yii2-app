<?php

use yii\db\Migration;

/**
 * Handles the creation of table `class_room`.
 */
class m170419_104247_create_class_room_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('class_room', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'credits' => $this->string(255),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('class_room');
    }
}
