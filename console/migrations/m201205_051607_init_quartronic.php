<?php

use yii\db\Migration;

/**
 * Class m201205_051607_init_quartronic
 */
class m201205_051607_init_quartronic extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Yii::$app->quartronic;
        \quarsintex\quartronic\qcore\QCrud::restructDB(true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        unlink(Yii::$app->quartronic->externManager->runtimeDir.'q.db');
    }
}
