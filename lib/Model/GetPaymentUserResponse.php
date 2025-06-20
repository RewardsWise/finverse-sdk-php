<?php
/**
 * GetPaymentUserResponse
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  FinversePhp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Finverse Public
 *
 * Documentation of the early finverse services
 *
 * The version of the OpenAPI document: 0.0.1
 * Contact: info@finverse.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FinversePhp\Model;

use \ArrayAccess;
use \FinversePhp\ObjectSerializer;

/**
 * GetPaymentUserResponse Class Doc Comment
 *
 * @category Class
 * @package  FinversePhp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetPaymentUserResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetPaymentUserResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_user_id' => 'string',
        'customer_app_id' => 'string',
        'autopay_consent' => 'bool',
        'autopay_prefill' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payment_user_id' => null,
        'customer_app_id' => null,
        'autopay_consent' => null,
        'autopay_prefill' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'payment_user_id' => false,
        'customer_app_id' => false,
        'autopay_consent' => false,
        'autopay_prefill' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'payment_user_id' => 'payment_user_id',
        'customer_app_id' => 'customer_app_id',
        'autopay_consent' => 'autopay_consent',
        'autopay_prefill' => 'autopay_prefill'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_user_id' => 'setPaymentUserId',
        'customer_app_id' => 'setCustomerAppId',
        'autopay_consent' => 'setAutopayConsent',
        'autopay_prefill' => 'setAutopayPrefill'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_user_id' => 'getPaymentUserId',
        'customer_app_id' => 'getCustomerAppId',
        'autopay_consent' => 'getAutopayConsent',
        'autopay_prefill' => 'getAutopayPrefill'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('payment_user_id', $data ?? [], null);
        $this->setIfExists('customer_app_id', $data ?? [], null);
        $this->setIfExists('autopay_consent', $data ?? [], null);
        $this->setIfExists('autopay_prefill', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['payment_user_id'] === null) {
            $invalidProperties[] = "'payment_user_id' can't be null";
        }
        if ($this->container['customer_app_id'] === null) {
            $invalidProperties[] = "'customer_app_id' can't be null";
        }
        if ($this->container['autopay_consent'] === null) {
            $invalidProperties[] = "'autopay_consent' can't be null";
        }
        if ($this->container['autopay_prefill'] === null) {
            $invalidProperties[] = "'autopay_prefill' can't be null";
        }
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
     * Gets payment_user_id
     *
     * @return string
     */
    public function getPaymentUserId()
    {
        return $this->container['payment_user_id'];
    }

    /**
     * Sets payment_user_id
     *
     * @param string $payment_user_id payment_user_id
     *
     * @return self
     */
    public function setPaymentUserId($payment_user_id)
    {
        if (is_null($payment_user_id)) {
            throw new \InvalidArgumentException('non-nullable payment_user_id cannot be null');
        }
        $this->container['payment_user_id'] = $payment_user_id;

        return $this;
    }

    /**
     * Gets customer_app_id
     *
     * @return string
     */
    public function getCustomerAppId()
    {
        return $this->container['customer_app_id'];
    }

    /**
     * Sets customer_app_id
     *
     * @param string $customer_app_id customer_app_id
     *
     * @return self
     */
    public function setCustomerAppId($customer_app_id)
    {
        if (is_null($customer_app_id)) {
            throw new \InvalidArgumentException('non-nullable customer_app_id cannot be null');
        }
        $this->container['customer_app_id'] = $customer_app_id;

        return $this;
    }

    /**
     * Gets autopay_consent
     *
     * @return bool
     */
    public function getAutopayConsent()
    {
        return $this->container['autopay_consent'];
    }

    /**
     * Sets autopay_consent
     *
     * @param bool $autopay_consent The user's current autopay value
     *
     * @return self
     */
    public function setAutopayConsent($autopay_consent)
    {
        if (is_null($autopay_consent)) {
            throw new \InvalidArgumentException('non-nullable autopay_consent cannot be null');
        }
        $this->container['autopay_consent'] = $autopay_consent;

        return $this;
    }

    /**
     * Gets autopay_prefill
     *
     * @return bool
     */
    public function getAutopayPrefill()
    {
        return $this->container['autopay_prefill'];
    }

    /**
     * Sets autopay_prefill
     *
     * @param bool $autopay_prefill This indicates the value that the user's pre-set selection should be. If this is a new user, the value will be set to true by default, else it will be the user's current autopay value.
     *
     * @return self
     */
    public function setAutopayPrefill($autopay_prefill)
    {
        if (is_null($autopay_prefill)) {
            throw new \InvalidArgumentException('non-nullable autopay_prefill cannot be null');
        }
        $this->container['autopay_prefill'] = $autopay_prefill;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


