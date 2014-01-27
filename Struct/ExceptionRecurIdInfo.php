<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Mail\Struct;

use Zimbra\Struct\Base;

/**
 * ExceptionRecurIdInfo struct class
 *
 * @package    Zimbra
 * @subpackage Mail
 * @category   Struct
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013 gt Nguyen Van Nguyen.
 */
class ExceptionRecurIdInfo extends Base
{
    /**
     * Constructor method for ExceptionRecurIdInfo
     * @param  string $d Date and/or time. Format is : YYYYMMDD['T'HHMMSS[Z]]
     * @param  string $tz Java timezone identifier
     * @param  int    $rangeType Range type - 1 means NONE, 2 means THISANDFUTURE, 3 means THISANDPRIOR
     * @return self
     */
    public function __construct($d, $tz = null, $rangeType = null)
    {
        parent::__construct();
        $this->property('d', trim($d));
        if(null !== $tz)
        {
            $this->property('tz', trim($tz));
        }
        if(null !== $rangeType)
        {
            $this->property('rangeType', in_array((int) $rangeType, array(-1, 2, 3)) ? (int) $rangeType : null);
        }
    }

    /**
     * Gets or sets d
     *
     * @param  string $d
     * @return string|self
     */
    public function d($d = null)
    {
        if(null === $d)
        {
            return $this->property('d');
        }
        return $this->property('d', trim($d));
    }

    /**
     * Gets or sets tz
     *
     * @param  string $tz
     * @return string|self
     */
    public function tz($tz = null)
    {
        if(null === $tz)
        {
            return $this->property('tz');
        }
        return $this->property('tz', trim($tz));
    }

    /**
     * Gets or sets rangeType
     *
     * @param  int $rangeType
     * @return int|self
     */
    public function rangeType($rangeType = null)
    {
        if(null === $rangeType)
        {
            return $this->property('rangeType');
        }
        return $this->property('rangeType', in_array((int) $rangeType, array(-1, 2, 3)) ? (int) $rangeType : null);
    }

    /**
     * Returns the array representation of this class 
     *
     * @param  string $name
     * @return array
     */
    public function toArray($name = 'exceptId')
    {
        return parent::toArray($name);
    }

    /**
     * Method returning the xml representation of this class
     *
     * @param  string $name
     * @return SimpleXML
     */
    public function toXml($name = 'exceptId')
    {
        return parent::toXml($name);
    }
}
