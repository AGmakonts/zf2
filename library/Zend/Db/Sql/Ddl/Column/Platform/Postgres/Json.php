<?php
/**
 * Created by IntelliJ IDEA.
 * User: adamgrabek
 * Date: 23/03/15
 * Time: 23:31
 */

namespace Zend\Db\Sql\Ddl\Column\Platform\Postgres;

use Zend\Db\Sql\Ddl\Column\Column;

class Json extends Column
{
    /**
     * @var string
     */
    protected $type = 'JSON';
}