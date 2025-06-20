<?php
/**
 * PaymentResponse
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
 * PaymentResponse Class Doc Comment
 *
 * @category Class
 * @package  FinversePhp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_id' => 'string',
        'amount' => 'int',
        'surcharge_amount' => 'int',
        'amount_total_with_surcharge' => 'int',
        'currency' => 'string',
        'type' => 'string',
        'updated_at' => '\DateTime',
        'status' => 'string',
        'payment_method_id' => 'string',
        'payment_details' => '\FinversePhp\Model\PaymentDetails2',
        'recipient' => '\FinversePhp\Model\MandateRecipient',
        'recipient_account' => '\FinversePhp\Model\MandateRecipientAccount',
        'sender' => '\FinversePhp\Model\GetMandateSender',
        'sender_account' => '\FinversePhp\Model\MandateSenderAccount',
        'fees' => '\FinversePhp\Model\Fee[]',
        'created_at' => '\DateTime',
        'metadata' => 'array<string,string>',
        'error' => '\FinversePhp\Model\FvEmbeddedErrorModel',
        'payment_method' => '\FinversePhp\Model\PaymentSnapshotPaymentMethod'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payment_id' => null,
        'amount' => null,
        'surcharge_amount' => null,
        'amount_total_with_surcharge' => null,
        'currency' => null,
        'type' => null,
        'updated_at' => 'date-time',
        'status' => null,
        'payment_method_id' => null,
        'payment_details' => null,
        'recipient' => null,
        'recipient_account' => null,
        'sender' => null,
        'sender_account' => null,
        'fees' => null,
        'created_at' => 'date-time',
        'metadata' => null,
        'error' => null,
        'payment_method' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'payment_id' => false,
        'amount' => false,
        'surcharge_amount' => false,
        'amount_total_with_surcharge' => false,
        'currency' => false,
        'type' => false,
        'updated_at' => false,
        'status' => false,
        'payment_method_id' => false,
        'payment_details' => false,
        'recipient' => false,
        'recipient_account' => false,
        'sender' => false,
        'sender_account' => false,
        'fees' => false,
        'created_at' => false,
        'metadata' => false,
        'error' => false,
        'payment_method' => false
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
        'payment_id' => 'payment_id',
        'amount' => 'amount',
        'surcharge_amount' => 'surcharge_amount',
        'amount_total_with_surcharge' => 'amount_total_with_surcharge',
        'currency' => 'currency',
        'type' => 'type',
        'updated_at' => 'updated_at',
        'status' => 'status',
        'payment_method_id' => 'payment_method_id',
        'payment_details' => 'payment_details',
        'recipient' => 'recipient',
        'recipient_account' => 'recipient_account',
        'sender' => 'sender',
        'sender_account' => 'sender_account',
        'fees' => 'fees',
        'created_at' => 'created_at',
        'metadata' => 'metadata',
        'error' => 'error',
        'payment_method' => 'payment_method'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_id' => 'setPaymentId',
        'amount' => 'setAmount',
        'surcharge_amount' => 'setSurchargeAmount',
        'amount_total_with_surcharge' => 'setAmountTotalWithSurcharge',
        'currency' => 'setCurrency',
        'type' => 'setType',
        'updated_at' => 'setUpdatedAt',
        'status' => 'setStatus',
        'payment_method_id' => 'setPaymentMethodId',
        'payment_details' => 'setPaymentDetails',
        'recipient' => 'setRecipient',
        'recipient_account' => 'setRecipientAccount',
        'sender' => 'setSender',
        'sender_account' => 'setSenderAccount',
        'fees' => 'setFees',
        'created_at' => 'setCreatedAt',
        'metadata' => 'setMetadata',
        'error' => 'setError',
        'payment_method' => 'setPaymentMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_id' => 'getPaymentId',
        'amount' => 'getAmount',
        'surcharge_amount' => 'getSurchargeAmount',
        'amount_total_with_surcharge' => 'getAmountTotalWithSurcharge',
        'currency' => 'getCurrency',
        'type' => 'getType',
        'updated_at' => 'getUpdatedAt',
        'status' => 'getStatus',
        'payment_method_id' => 'getPaymentMethodId',
        'payment_details' => 'getPaymentDetails',
        'recipient' => 'getRecipient',
        'recipient_account' => 'getRecipientAccount',
        'sender' => 'getSender',
        'sender_account' => 'getSenderAccount',
        'fees' => 'getFees',
        'created_at' => 'getCreatedAt',
        'metadata' => 'getMetadata',
        'error' => 'getError',
        'payment_method' => 'getPaymentMethod'
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

    public const TYPE_MANDATE = 'MANDATE';
    public const TYPE_SINGLE = 'SINGLE';
    public const TYPE_CARD = 'CARD';
    public const TYPE_MANUAL = 'MANUAL';
    public const STATUS_AUTHORIZATION_REQUIRED = 'AUTHORIZATION_REQUIRED';
    public const STATUS_AUTHORIZING = 'AUTHORIZING';
    public const STATUS_PROCESSING = 'PROCESSING';
    public const STATUS_SUBMITTED = 'SUBMITTED';
    public const STATUS_EXECUTED = 'EXECUTED';
    public const STATUS_FAILED = 'FAILED';
    public const STATUS_REVOKED = 'REVOKED';
    public const STATUS_CANCELLED = 'CANCELLED';
    public const STATUS_CREATED = 'CREATED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MANDATE,
            self::TYPE_SINGLE,
            self::TYPE_CARD,
            self::TYPE_MANUAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AUTHORIZATION_REQUIRED,
            self::STATUS_AUTHORIZING,
            self::STATUS_PROCESSING,
            self::STATUS_SUBMITTED,
            self::STATUS_EXECUTED,
            self::STATUS_FAILED,
            self::STATUS_REVOKED,
            self::STATUS_CANCELLED,
            self::STATUS_CREATED,
        ];
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
        $this->setIfExists('payment_id', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('surcharge_amount', $data ?? [], null);
        $this->setIfExists('amount_total_with_surcharge', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('payment_method_id', $data ?? [], null);
        $this->setIfExists('payment_details', $data ?? [], null);
        $this->setIfExists('recipient', $data ?? [], null);
        $this->setIfExists('recipient_account', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('sender_account', $data ?? [], null);
        $this->setIfExists('fees', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
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

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['surcharge_amount'] === null) {
            $invalidProperties[] = "'surcharge_amount' can't be null";
        }
        if ($this->container['amount_total_with_surcharge'] === null) {
            $invalidProperties[] = "'amount_total_with_surcharge' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * Gets payment_id
     *
     * @return string|null
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     *
     * @param string|null $payment_id Finverse Payment ID
     *
     * @return self
     */
    public function setPaymentId($payment_id)
    {
        if (is_null($payment_id)) {
            throw new \InvalidArgumentException('non-nullable payment_id cannot be null');
        }
        $this->container['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Amount to be paid, in currency's smallest unit or “minor unit”, as defined in ISO 4217. For example, HKD 100.01 is represented as amount = 10001 (minor unit = cents). For currencies without minor units (e.g. VND, JPY), the amount is represented as is, without modification. For example, VND 15101 is represented as amount = 15101.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets surcharge_amount
     *
     * @return int
     */
    public function getSurchargeAmount()
    {
        return $this->container['surcharge_amount'];
    }

    /**
     * Sets surcharge_amount
     *
     * @param int $surcharge_amount Surcharge amount in minor
     *
     * @return self
     */
    public function setSurchargeAmount($surcharge_amount)
    {
        if (is_null($surcharge_amount)) {
            throw new \InvalidArgumentException('non-nullable surcharge_amount cannot be null');
        }
        $this->container['surcharge_amount'] = $surcharge_amount;

        return $this;
    }

    /**
     * Gets amount_total_with_surcharge
     *
     * @return int
     */
    public function getAmountTotalWithSurcharge()
    {
        return $this->container['amount_total_with_surcharge'];
    }

    /**
     * Sets amount_total_with_surcharge
     *
     * @param int $amount_total_with_surcharge Amount with all fees and surcharges applied in minor
     *
     * @return self
     */
    public function setAmountTotalWithSurcharge($amount_total_with_surcharge)
    {
        if (is_null($amount_total_with_surcharge)) {
            throw new \InvalidArgumentException('non-nullable amount_total_with_surcharge cannot be null');
        }
        $this->container['amount_total_with_surcharge'] = $amount_total_with_surcharge;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency code as defined in ISO 4217.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Indicates whether this is a mandate-based payment or one-off direct payment to an account. Possible values - MANDATE, SINGLE
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Timestamp in ISO format (YYYY-MM-DDTHH:MM:SS.SSSZ)
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Possible values - CREATED, AUTHORIZED, SUBMITTED, EXECUTED, FAILED, REJECTED, CANCELLED.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets payment_method_id
     *
     * @return string|null
     */
    public function getPaymentMethodId()
    {
        return $this->container['payment_method_id'];
    }

    /**
     * Sets payment_method_id
     *
     * @param string|null $payment_method_id ID of the payment method this pament is referring to.
     *
     * @return self
     */
    public function setPaymentMethodId($payment_method_id)
    {
        if (is_null($payment_method_id)) {
            throw new \InvalidArgumentException('non-nullable payment_method_id cannot be null');
        }
        $this->container['payment_method_id'] = $payment_method_id;

        return $this;
    }

    /**
     * Gets payment_details
     *
     * @return \FinversePhp\Model\PaymentDetails2|null
     */
    public function getPaymentDetails()
    {
        return $this->container['payment_details'];
    }

    /**
     * Sets payment_details
     *
     * @param \FinversePhp\Model\PaymentDetails2|null $payment_details payment_details
     *
     * @return self
     */
    public function setPaymentDetails($payment_details)
    {
        if (is_null($payment_details)) {
            throw new \InvalidArgumentException('non-nullable payment_details cannot be null');
        }
        $this->container['payment_details'] = $payment_details;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return \FinversePhp\Model\MandateRecipient|null
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param \FinversePhp\Model\MandateRecipient|null $recipient recipient
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        if (is_null($recipient)) {
            throw new \InvalidArgumentException('non-nullable recipient cannot be null');
        }
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets recipient_account
     *
     * @return \FinversePhp\Model\MandateRecipientAccount|null
     */
    public function getRecipientAccount()
    {
        return $this->container['recipient_account'];
    }

    /**
     * Sets recipient_account
     *
     * @param \FinversePhp\Model\MandateRecipientAccount|null $recipient_account recipient_account
     *
     * @return self
     */
    public function setRecipientAccount($recipient_account)
    {
        if (is_null($recipient_account)) {
            throw new \InvalidArgumentException('non-nullable recipient_account cannot be null');
        }
        $this->container['recipient_account'] = $recipient_account;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \FinversePhp\Model\GetMandateSender|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \FinversePhp\Model\GetMandateSender|null $sender sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        if (is_null($sender)) {
            throw new \InvalidArgumentException('non-nullable sender cannot be null');
        }
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets sender_account
     *
     * @return \FinversePhp\Model\MandateSenderAccount|null
     */
    public function getSenderAccount()
    {
        return $this->container['sender_account'];
    }

    /**
     * Sets sender_account
     *
     * @param \FinversePhp\Model\MandateSenderAccount|null $sender_account sender_account
     *
     * @return self
     */
    public function setSenderAccount($sender_account)
    {
        if (is_null($sender_account)) {
            throw new \InvalidArgumentException('non-nullable sender_account cannot be null');
        }
        $this->container['sender_account'] = $sender_account;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \FinversePhp\Model\Fee[]|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \FinversePhp\Model\Fee[]|null $fees fees
     *
     * @return self
     */
    public function setFees($fees)
    {
        if (is_null($fees)) {
            throw new \InvalidArgumentException('non-nullable fees cannot be null');
        }
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Timestamp in ISO format (YYYY-MM-DDTHH:MM:SS.SSSZ)
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata Additional attributes of the payment in key:value format (e.g. payment_internal_id: 1234). It supports up to 10 key:value pairs, whereas the key and value supports up to 50 and 1000 characters respectively.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \FinversePhp\Model\FvEmbeddedErrorModel|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \FinversePhp\Model\FvEmbeddedErrorModel|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \FinversePhp\Model\PaymentSnapshotPaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \FinversePhp\Model\PaymentSnapshotPaymentMethod|null $payment_method payment_method
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        if (is_null($payment_method)) {
            throw new \InvalidArgumentException('non-nullable payment_method cannot be null');
        }
        $this->container['payment_method'] = $payment_method;

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


