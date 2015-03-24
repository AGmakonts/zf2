<?php
/**
 * Created by IntelliJ IDEA.
 * User: adamgrabek
 * Date: 24/03/15
 * Time: 13:59
 */

namespace Zend\Db\Sql\Ddl\Column\Platform\Postgres;

use Zend\Db\Sql\Ddl\Column\Column;

/**
 * Class ArrayOf
 *
 * @package   Zend\Db\Sql\Ddl\Column\Platform\Postgres
 */
class ArrayOf extends Column
{

    /**
     * @param \Zend\Db\Sql\Ddl\Column\Column $column
     * @param int                            $size
     */
    public function __construct(Column $column, $size = NULL)
    {
        parent::__construct($column->getName(), $column->isNullable(), $column->getDefault(), $column->getOptions());
        $this->type = sprintf('%s [%s]', $column->getType(), $size);
    }
}