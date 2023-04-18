<?php
/**
 * Created by PhpStorm
 * Date 2022/10/8 10:24
 */

namespace Chance\Log\orm\illuminate;

use Illuminate\Database\ConnectionInterface as Query;
use Illuminate\Database\Eloquent\Model;

class DbModel extends Model
{
    // 日志记录的主键名称
    public $logKey = "id";

    /** @var Query $query */
    private $query;
        
    /**
     * 不生成该表日志
     */
    public bool $doNotRecordLog = true;

    public function setQuery(Query $query)
    {
        $this->query = $query;
    }

    public function getQuery(): Query
    {
        return $this->query;
    }
}
