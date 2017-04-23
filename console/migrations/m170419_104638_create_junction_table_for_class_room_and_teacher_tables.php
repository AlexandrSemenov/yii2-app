<?php

use yii\db\Migration;

/**
 * Handles the creation of table `class_room_teacher`.
 * Has foreign keys to the tables:
 *
 * - `class_room`
 * - `teacher`
 */
class m170419_104638_create_junction_table_for_class_room_and_teacher_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('class_room_teacher', [
            'class_room_id' => $this->integer(),
            'teacher_id' => $this->integer(),
            'date' => $this->dateTime(),
            'PRIMARY KEY(class_room_id, teacher_id)',
        ]);

        // creates index for column `class_room_id`
        $this->createIndex(
            'idx-class_room_teacher-class_room_id',
            'class_room_teacher',
            'class_room_id'
        );

        // add foreign key for table `class_room`
        $this->addForeignKey(
            'fk-class_room_teacher-class_room_id',
            'class_room_teacher',
            'class_room_id',
            'class_room',
            'id',
            'CASCADE'
        );

        // creates index for column `teacher_id`
        $this->createIndex(
            'idx-class_room_teacher-teacher_id',
            'class_room_teacher',
            'teacher_id'
        );

        // add foreign key for table `teacher`
        $this->addForeignKey(
            'fk-class_room_teacher-teacher_id',
            'class_room_teacher',
            'teacher_id',
            'teacher',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `class_room`
        $this->dropForeignKey(
            'fk-class_room_teacher-class_room_id',
            'class_room_teacher'
        );

        // drops index for column `class_room_id`
        $this->dropIndex(
            'idx-class_room_teacher-class_room_id',
            'class_room_teacher'
        );

        // drops foreign key for table `teacher`
        $this->dropForeignKey(
            'fk-class_room_teacher-teacher_id',
            'class_room_teacher'
        );

        // drops index for column `teacher_id`
        $this->dropIndex(
            'idx-class_room_teacher-teacher_id',
            'class_room_teacher'
        );

        $this->dropTable('class_room_teacher');
    }
}
