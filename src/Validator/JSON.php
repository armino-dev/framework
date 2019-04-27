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

class JSON extends Validator
{
    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Value must be a valid JSON string';
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValid($value)
    {
        if(!is_string($value)) {
            return false;
        }

        json_decode($value);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}