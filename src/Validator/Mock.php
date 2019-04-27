<?php
/**
 * Utopia PHP Framework
 *
 * @package Framework
 * @subpackage Validator
 *
 * @link https://github.com/eldadfux/Utopia-PHP-Framework
 * @author Eldad Fux <eldad@fuxie.co.il>
 * @version 2.0
 * @license The MIT License (MIT) <http://www.opensource.org/licenses/mit-license.php>
 */

namespace Utopia\Validator;

use Utopia\Validator;

/**
 * Null
 *
 * Validate that always validate data as valid
 *
 * @package Utopia\Validator
 */
class Mock extends Validator
{
    /**
     * Get Description
     *
     * Returns validator description
     *
     * @return string
     */
    public function getDescription()
    {
        return 'Every input is valid';
    }

    /**
     * Is valid
     *
     * Validation will pass when $value is numeric.
     *
     * @param  mixed $value
     * @return bool
     */
    public function isValid($value)
    {
        return true;
    }
}
