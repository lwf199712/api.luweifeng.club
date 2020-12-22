<?php


/**
 * Class ConversionProcess
 *
 * @author: weifeng
 */
class ConversionProcess
{
    /**
     * 定时器调用的静态方法
     *
     * @throws \yii\db\Exception
     * @throws Exception
     * @author: weifeng
     */
    public static function start(): void
    {
        echo 111;
//        $timeS   = time();
//        $command = Yii::$app->db->createCommand('SELECT id FROM fa_luweifeng ORDER BY id DESC LIMIT 1');
//        $lastObj = $command->queryAll();
//        $lastId  = array_shift($lastObj)['id'] ?? 0;
//        $nameObj = new RandChinaName();
//        if ($lastId == 10000000) {
//            echo '已经结束插入10000000条数据';
//            return;
//        }
//        for ($i = $lastId; $i <= 10000000; $i++) {
//            $timeE = time();
//            if (($timeE - $timeS) === 120) {
//                echo '本轮已完成' . ((int)$i - (int)$lastId) . '条数据插入';
//                return;
//            }
//            $model       = new InsertModel();
//            $model->name = $nameObj->getName();
//            $model->age  = random_int(1, 100);
//            $model->created_at = time();
//            $model->remark = '备注' . $i;
//            $model->save();
//            echo '第' . $i . '条数据插入' . PHP_EOL;
//        }
//        echo '已经结束插入10000000条数据';
//        return;
    }
}
