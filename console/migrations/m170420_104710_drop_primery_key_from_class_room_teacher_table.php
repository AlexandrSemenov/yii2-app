<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `primery_key_from_class_room_teacher`.
 */
class m170420_104710_drop_primery_key_from_class_room_teacher_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropPrimaryKey('class_room_id', 'class_room_teacher');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {

    }
}
