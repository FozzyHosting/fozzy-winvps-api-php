<?php

namespace Fozzy\WinVPS\Api\Models;

use \ArrayAccess;
use \Fozzy\WinVPS\Api\ObjectSerializer;

/**
 * MachineUsersListResponse Model
 *
 * @category Class
 * @package  Fozzy\WinVPS\Api
 * @author   Fozzy Inc.
 */
class MachineUsersListResponse implements ModelInterface, ArrayAccess
{
const DISCRIMINATOR = null;

/**
* The original model name.
*
* @var string
*/
protected static $swaggerModelName = 'MachineUsersListResponse';

/**
* Array of property to type mappings. Used for (de)serialization
*
* @var string[]
*/
protected static $swaggerTypes = [
'data' => '\Fozzy\WinVPS\Api\Models\MachineUsersList',
'pagination' => '\Fozzy\WinVPS\Api\Models\PaginationDetails'];

/**
* Array of property to format mappings. Used for (de)serialization
*
* @var string[]
*/
protected static $swaggerFormats = [
'data' => null,
'pagination' => null];

/**
* Array of property to type mappings. Used for (de)serialization
*
* @return array
*/
public static function swaggerTypes()
{
return self::$swaggerTypes;
}

/**
* Array of property to format mappings. Used for (de)serialization
*
* @return array
*/
public static function swaggerFormats()
{
return self::$swaggerFormats;
}

/**
* Array of attributes where the key is the local name,
* and the value is the original name
*
* @var string[]
*/
protected static $attributeMap = [
'data' => 'data',
'pagination' => 'pagination'];

/**
* Array of attributes to setter functions (for deserialization of responses)
*
* @var string[]
*/
protected static $setters = [
'data' => 'setData',
'pagination' => 'setPagination'];

/**
* Array of attributes to getter functions (for serialization of requests)
*
* @var string[]
*/
protected static $getters = [
'data' => 'getData',
'pagination' => 'getPagination'];

/**
* Array of attributes where the key is the local name,
* and the value is the original name
*
* @return array
*/
public static function attributeMap()
{
return self::$attributeMap;
}

/**
* Array of attributes to setter functions (for deserialization of responses)
*
* @return array
*/
public static function setters()
{
return self::$setters;
}

/**
* Array of attributes to getter functions (for serialization of requests)
*
* @return array
*/
public static function getters()
{
return self::$getters;
}

/**
* The original name of the model.
*
* @return string
*/
public function getModelName()
{
return self::$swaggerModelName;
}



    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

/**
* Constructor
*
* @param mixed[] $data Associated array of property values
*                      initializing the model
*/
public function __construct(array $data = null)
{
    $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    $this->container['pagination'] = isset($data['pagination']) ? $data['pagination'] : null;
}

public function setContainer($data)
{
$this->container = $data;
}

/**
* Show all the invalid properties with reasons.
*
* @return array invalid properties with reasons
*/
public function listInvalidProperties()
{
    $invalidProperties = [];

return $invalidProperties;
}

/**
* Validate all the properties in the model
* return true if all passed
*
* @return bool True if all properties are valid
*/
public function valid()
{
return count($this->listInvalidProperties()) === 0;
}


    /**
    * Gets data
    *
    * @return \Fozzy\WinVPS\Api\Models\MachineUsersList
    */
    public function getData()
    {
    return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \Fozzy\WinVPS\Api\Models\MachineUsersList $data data
    *
    * @return $this
    */
    public function setData($data)
    {
    $this->container['data'] = $data;

    return $this;
    }

    /**
    * Gets pagination
    *
    * @return \Fozzy\WinVPS\Api\Models\PaginationDetails
    */
    public function getPagination()
    {
    return $this->container['pagination'];
    }

    /**
    * Sets pagination
    *
    * @param \Fozzy\WinVPS\Api\Models\PaginationDetails $pagination pagination
    *
    * @return $this
    */
    public function setPagination($pagination)
    {
    $this->container['pagination'] = $pagination;

    return $this;
    }
/**
* Returns true if offset exists. False otherwise.
*
* @param integer $offset Offset
*
* @return boolean
*/
public function offsetExists($offset)
{
return isset($this->container[$offset]);
}

/**
* Gets offset.
*
* @param integer $offset Offset
*
* @return mixed
*/
public function offsetGet($offset)
{
return isset($this->container[$offset]) ? $this->container[$offset] : null;
}

/**
* Sets value based on offset.
*
* @param integer $offset Offset
* @param mixed   $value  Value to be set
*
* @return void
*/
public function offsetSet($offset, $value)
{
if (is_null($offset)) {
$this->container[] = $value;
} else {
$this->container[$offset] = $value;
}
}

/**
* Unsets offset.
*
* @param integer $offset Offset
*
* @return void
*/
public function offsetUnset($offset)
{
unset($this->container[$offset]);
}

/**
* Gets the string presentation of the object
*
* @return string
*/
public function __toString()
{
if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
return json_encode(
ObjectSerializer::sanitizeForSerialization($this),
JSON_PRETTY_PRINT
);
}

return json_encode(ObjectSerializer::sanitizeForSerialization($this));
}
}
