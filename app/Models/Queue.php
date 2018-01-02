<?php
/**
 *
 *
 * @author lingyun <niulingyun@camera360.com>
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 *
 * Date: 02/01/2018
 */

namespace App\Models;


use PG\MSF\Models\Model;
use PG\MSF\Queue\RabbitMQ;

class Queue extends Model
{
    public function rabbitEnqueue()
    {
        $rabbit = $this->getObject(RabbitMQ::class, ['rabbit']);
        return $rabbit->set(json_encode(['name' => 'msf', 'type' => 'framework']));
    }

    public function rabbitDequeue()
    {
        $rabbit = $this->getObject(RabbitMQ::class, ['rabbit']);
        return $rabbit->get();
    }
}
