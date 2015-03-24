<?php
/**
 * Created by IntelliJ IDEA.
 * User: adamgrabek
 * Date: 24/03/15
 * Time: 14:11
 */

namespace Zend\Db\Sql\Ddl\Column\Platform\Postgres;

use Zend\Db\Sql\Ddl\Column\Column;
use Zend\Db\Sql\Exception\InvalidArgumentException;

/**
 * Class Boolean
 *
 * @package   Zend\Db\Sql\Ddl\Column\Platform\Postgres
 */
class Boolean extends Column
{
    private $validValues = [
        'TRUE',
        't',
        'true',
        'y',
        'yes',
        'on',
        '1',
        'FALSE',
        'f',
        'false',
        'n',
        'no',
        'off',
        '0',
    ];

    /**
     * @var string
     */
    protected $type = 'BOOLEAN';

    /**
     * @param int|string $default
     *
     * @return \Zend\Db\Sql\Ddl\Column\Column
     */
    public function setDefault($default)
    {
        if(FALSE === in_array($default, $this->validValues)) {
            throw new InvalidArgumentException('Invalid boolean default value');
        }

        parent::setDefault($default);
    }
}