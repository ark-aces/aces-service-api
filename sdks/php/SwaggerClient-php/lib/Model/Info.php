<?php
/**
 * Info
 *
 * PHP version 5
 *
 * @category Class
 * @package  ArkAces\AcesServiceApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Aces Service API
 *
 * API Specification for Aces Services for blockchain interoperability.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ArkAces\AcesServiceApi\Model;

use \ArrayAccess;
use \ArkAces\AcesServiceApi\ObjectSerializer;

/**
 * Info Class Doc Comment
 *
 * @category Class
 * @package  ArkAces\AcesServiceApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Info implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'instructions' => 'string',
        'capacities' => '\ArkAces\AcesServiceApi\Model\Capacity[]',
        'flatFee' => 'string',
        'percentFee' => 'string',
        'inputSchema' => 'object',
        'outputSchema' => 'object',
        'interfaces' => '\ArkAces\AcesServiceApi\Model\ModelInterface[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'description' => null,
        'instructions' => null,
        'capacities' => null,
        'flatFee' => null,
        'percentFee' => null,
        'inputSchema' => null,
        'outputSchema' => null,
        'interfaces' => null
    ];

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
        'name' => 'name',
        'description' => 'description',
        'instructions' => 'instructions',
        'capacities' => 'capacities',
        'flatFee' => 'flatFee',
        'percentFee' => 'percentFee',
        'inputSchema' => 'inputSchema',
        'outputSchema' => 'outputSchema',
        'interfaces' => 'interfaces'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'instructions' => 'setInstructions',
        'capacities' => 'setCapacities',
        'flatFee' => 'setFlatFee',
        'percentFee' => 'setPercentFee',
        'inputSchema' => 'setInputSchema',
        'outputSchema' => 'setOutputSchema',
        'interfaces' => 'setInterfaces'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'instructions' => 'getInstructions',
        'capacities' => 'getCapacities',
        'flatFee' => 'getFlatFee',
        'percentFee' => 'getPercentFee',
        'inputSchema' => 'getInputSchema',
        'outputSchema' => 'getOutputSchema',
        'interfaces' => 'getInterfaces'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instructions'] = isset($data['instructions']) ? $data['instructions'] : null;
        $this->container['capacities'] = isset($data['capacities']) ? $data['capacities'] : null;
        $this->container['flatFee'] = isset($data['flatFee']) ? $data['flatFee'] : null;
        $this->container['percentFee'] = isset($data['percentFee']) ? $data['percentFee'] : null;
        $this->container['inputSchema'] = isset($data['inputSchema']) ? $data['inputSchema'] : null;
        $this->container['outputSchema'] = isset($data['outputSchema']) ? $data['outputSchema'] : null;
        $this->container['interfaces'] = isset($data['interfaces']) ? $data['interfaces'] : null;
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

        return true;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the contract service.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the contract service.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return string
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param string $instructions Service usage instructions in markdown format.
     *
     * @return $this
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

        return $this;
    }

    /**
     * Gets capacities
     *
     * @return \ArkAces\AcesServiceApi\Model\Capacity[]
     */
    public function getCapacities()
    {
        return $this->container['capacities'];
    }

    /**
     * Sets capacities
     *
     * @param \ArkAces\AcesServiceApi\Model\Capacity[] $capacities capacities
     *
     * @return $this
     */
    public function setCapacities($capacities)
    {
        $this->container['capacities'] = $capacities;

        return $this;
    }

    /**
     * Gets flatFee
     *
     * @return string
     */
    public function getFlatFee()
    {
        return $this->container['flatFee'];
    }

    /**
     * Sets flatFee
     *
     * @param string $flatFee flatFee
     *
     * @return $this
     */
    public function setFlatFee($flatFee)
    {
        $this->container['flatFee'] = $flatFee;

        return $this;
    }

    /**
     * Gets percentFee
     *
     * @return string
     */
    public function getPercentFee()
    {
        return $this->container['percentFee'];
    }

    /**
     * Sets percentFee
     *
     * @param string $percentFee percentFee
     *
     * @return $this
     */
    public function setPercentFee($percentFee)
    {
        $this->container['percentFee'] = $percentFee;

        return $this;
    }

    /**
     * Gets inputSchema
     *
     * @return object
     */
    public function getInputSchema()
    {
        return $this->container['inputSchema'];
    }

    /**
     * Sets inputSchema
     *
     * @param object $inputSchema Contract input schema in JSON Schema format.
     *
     * @return $this
     */
    public function setInputSchema($inputSchema)
    {
        $this->container['inputSchema'] = $inputSchema;

        return $this;
    }

    /**
     * Gets outputSchema
     *
     * @return object
     */
    public function getOutputSchema()
    {
        return $this->container['outputSchema'];
    }

    /**
     * Sets outputSchema
     *
     * @param object $outputSchema Contract output schema in JSON Schema format.
     *
     * @return $this
     */
    public function setOutputSchema($outputSchema)
    {
        $this->container['outputSchema'] = $outputSchema;

        return $this;
    }

    /**
     * Gets interfaces
     *
     * @return \ArkAces\AcesServiceApi\Model\ModelInterface[]
     */
    public function getInterfaces()
    {
        return $this->container['interfaces'];
    }

    /**
     * Sets interfaces
     *
     * @param \ArkAces\AcesServiceApi\Model\ModelInterface[] $interfaces interfaces
     *
     * @return $this
     */
    public function setInterfaces($interfaces)
    {
        $this->container['interfaces'] = $interfaces;

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


