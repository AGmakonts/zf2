<?php
/**
 * Created by IntelliJ IDEA.
 * User: adamgrabek
 * Date: 24/03/15
 * Time: 14:20
 */

namespace Zend\Db\Sql\Ddl\Column\Platform\Postgres;

use Zend\Db\Sql\Ddl\Column\Column;

class Uuid extends Column
{
    /**
     * @var string
     */
    protected $type = 'UUID';
}