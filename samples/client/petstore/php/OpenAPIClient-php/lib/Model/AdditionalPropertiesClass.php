<?php
/**
 * AdditionalPropertiesClass
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * AdditionalPropertiesClass Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdditionalPropertiesClass implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalPropertiesClass';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'map_string' => 'map[string,string]',
        'map_number' => 'map[string,float]',
        'map_integer' => 'map[string,int]',
        'map_boolean' => 'map[string,bool]',
        'map_array_integer' => 'map[string,int[]]',
        'map_array_anytype' => 'map[string,object[]]',
        'map_map_string' => 'map[string,map[string,string]]',
        'map_map_anytype' => 'map[string,map[string,object]]',
        'anytype_1' => 'object',
        'anytype_2' => 'object',
        'anytype_3' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'map_string' => null,
        'map_number' => null,
        'map_integer' => null,
        'map_boolean' => null,
        'map_array_integer' => null,
        'map_array_anytype' => null,
        'map_map_string' => null,
        'map_map_anytype' => null,
        'anytype_1' => null,
        'anytype_2' => null,
        'anytype_3' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'map_string' => 'map_string',
        'map_number' => 'map_number',
        'map_integer' => 'map_integer',
        'map_boolean' => 'map_boolean',
        'map_array_integer' => 'map_array_integer',
        'map_array_anytype' => 'map_array_anytype',
        'map_map_string' => 'map_map_string',
        'map_map_anytype' => 'map_map_anytype',
        'anytype_1' => 'anytype_1',
        'anytype_2' => 'anytype_2',
        'anytype_3' => 'anytype_3'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'map_string' => 'setMapString',
        'map_number' => 'setMapNumber',
        'map_integer' => 'setMapInteger',
        'map_boolean' => 'setMapBoolean',
        'map_array_integer' => 'setMapArrayInteger',
        'map_array_anytype' => 'setMapArrayAnytype',
        'map_map_string' => 'setMapMapString',
        'map_map_anytype' => 'setMapMapAnytype',
        'anytype_1' => 'setAnytype1',
        'anytype_2' => 'setAnytype2',
        'anytype_3' => 'setAnytype3'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'map_string' => 'getMapString',
        'map_number' => 'getMapNumber',
        'map_integer' => 'getMapInteger',
        'map_boolean' => 'getMapBoolean',
        'map_array_integer' => 'getMapArrayInteger',
        'map_array_anytype' => 'getMapArrayAnytype',
        'map_map_string' => 'getMapMapString',
        'map_map_anytype' => 'getMapMapAnytype',
        'anytype_1' => 'getAnytype1',
        'anytype_2' => 'getAnytype2',
        'anytype_3' => 'getAnytype3'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['map_string'] = isset($data['map_string']) ? $data['map_string'] : null;
        $this->container['map_number'] = isset($data['map_number']) ? $data['map_number'] : null;
        $this->container['map_integer'] = isset($data['map_integer']) ? $data['map_integer'] : null;
        $this->container['map_boolean'] = isset($data['map_boolean']) ? $data['map_boolean'] : null;
        $this->container['map_array_integer'] = isset($data['map_array_integer']) ? $data['map_array_integer'] : null;
        $this->container['map_array_anytype'] = isset($data['map_array_anytype']) ? $data['map_array_anytype'] : null;
        $this->container['map_map_string'] = isset($data['map_map_string']) ? $data['map_map_string'] : null;
        $this->container['map_map_anytype'] = isset($data['map_map_anytype']) ? $data['map_map_anytype'] : null;
        $this->container['anytype_1'] = isset($data['anytype_1']) ? $data['anytype_1'] : null;
        $this->container['anytype_2'] = isset($data['anytype_2']) ? $data['anytype_2'] : null;
        $this->container['anytype_3'] = isset($data['anytype_3']) ? $data['anytype_3'] : null;
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
     * Gets map_string
     *
     * @return map[string,string]|null
     */
    public function getMapString()
    {
        return $this->container['map_string'];
    }

    /**
     * Sets map_string
     *
     * @param map[string,string]|null $map_string map_string
     *
     * @return $this
     */
    public function setMapString($map_string)
    {
        $this->container['map_string'] = $map_string;

        return $this;
    }

    /**
     * Gets map_number
     *
     * @return map[string,float]|null
     */
    public function getMapNumber()
    {
        return $this->container['map_number'];
    }

    /**
     * Sets map_number
     *
     * @param map[string,float]|null $map_number map_number
     *
     * @return $this
     */
    public function setMapNumber($map_number)
    {
        $this->container['map_number'] = $map_number;

        return $this;
    }

    /**
     * Gets map_integer
     *
     * @return map[string,int]|null
     */
    public function getMapInteger()
    {
        return $this->container['map_integer'];
    }

    /**
     * Sets map_integer
     *
     * @param map[string,int]|null $map_integer map_integer
     *
     * @return $this
     */
    public function setMapInteger($map_integer)
    {
        $this->container['map_integer'] = $map_integer;

        return $this;
    }

    /**
     * Gets map_boolean
     *
     * @return map[string,bool]|null
     */
    public function getMapBoolean()
    {
        return $this->container['map_boolean'];
    }

    /**
     * Sets map_boolean
     *
     * @param map[string,bool]|null $map_boolean map_boolean
     *
     * @return $this
     */
    public function setMapBoolean($map_boolean)
    {
        $this->container['map_boolean'] = $map_boolean;

        return $this;
    }

    /**
     * Gets map_array_integer
     *
     * @return map[string,int[]]|null
     */
    public function getMapArrayInteger()
    {
        return $this->container['map_array_integer'];
    }

    /**
     * Sets map_array_integer
     *
     * @param map[string,int[]]|null $map_array_integer map_array_integer
     *
     * @return $this
     */
    public function setMapArrayInteger($map_array_integer)
    {
        $this->container['map_array_integer'] = $map_array_integer;

        return $this;
    }

    /**
     * Gets map_array_anytype
     *
     * @return map[string,object[]]|null
     */
    public function getMapArrayAnytype()
    {
        return $this->container['map_array_anytype'];
    }

    /**
     * Sets map_array_anytype
     *
     * @param map[string,object[]]|null $map_array_anytype map_array_anytype
     *
     * @return $this
     */
    public function setMapArrayAnytype($map_array_anytype)
    {
        $this->container['map_array_anytype'] = $map_array_anytype;

        return $this;
    }

    /**
     * Gets map_map_string
     *
     * @return map[string,map[string,string]]|null
     */
    public function getMapMapString()
    {
        return $this->container['map_map_string'];
    }

    /**
     * Sets map_map_string
     *
     * @param map[string,map[string,string]]|null $map_map_string map_map_string
     *
     * @return $this
     */
    public function setMapMapString($map_map_string)
    {
        $this->container['map_map_string'] = $map_map_string;

        return $this;
    }

    /**
     * Gets map_map_anytype
     *
     * @return map[string,map[string,object]]|null
     */
    public function getMapMapAnytype()
    {
        return $this->container['map_map_anytype'];
    }

    /**
     * Sets map_map_anytype
     *
     * @param map[string,map[string,object]]|null $map_map_anytype map_map_anytype
     *
     * @return $this
     */
    public function setMapMapAnytype($map_map_anytype)
    {
        $this->container['map_map_anytype'] = $map_map_anytype;

        return $this;
    }

    /**
     * Gets anytype_1
     *
     * @return object|null
     */
    public function getAnytype1()
    {
        return $this->container['anytype_1'];
    }

    /**
     * Sets anytype_1
     *
     * @param object|null $anytype_1 anytype_1
     *
     * @return $this
     */
    public function setAnytype1($anytype_1)
    {
        $this->container['anytype_1'] = $anytype_1;

        return $this;
    }

    /**
     * Gets anytype_2
     *
     * @return object|null
     */
    public function getAnytype2()
    {
        return $this->container['anytype_2'];
    }

    /**
     * Sets anytype_2
     *
     * @param object|null $anytype_2 anytype_2
     *
     * @return $this
     */
    public function setAnytype2($anytype_2)
    {
        $this->container['anytype_2'] = $anytype_2;

        return $this;
    }

    /**
     * Gets anytype_3
     *
     * @return object|null
     */
    public function getAnytype3()
    {
        return $this->container['anytype_3'];
    }

    /**
     * Sets anytype_3
     *
     * @param object|null $anytype_3 anytype_3
     *
     * @return $this
     */
    public function setAnytype3($anytype_3)
    {
        $this->container['anytype_3'] = $anytype_3;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


