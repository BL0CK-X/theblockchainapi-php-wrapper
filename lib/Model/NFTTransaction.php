<?php
/**
 * NFTTransaction
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Blockchain API
 *
 * # About  Our vision is to make it super easy to interact with the decentralized web. We want you to be able to do this in any coding language and do it easily and quickly.   You're a key part of our vision. We love feature requests! <a href=\"#section/Feature-Requests\">Make one!</a>  # How to Use the API  To use the API, you simply need to create an API key pair.  Doing so takes less than a minute. Simply go to <a target=\"_blank\" href=\"https://dashboard.blockchainapi.com\">the dashboard</a>, create an account, and generate a key pair. You can now use this pair to make API requests. You must create your first pair via the dashboard.  # Feature Requests  Got a feature request? Submit it as an issue on <a target=\"_blank\" href=\"https://github.com/BL0CK-X/the-blockchain-api/issues/new/choose\">our GitHub repo</a> or [email us](mailto:info@blockchainapi.com).  # Contact  <figure>     <img          width=\"40px\"         height=\"40px\"          src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/phone.svg\"     />     <figcaption style=\"textAlign:center;\">Text / Call: +1 (415) 888 4745 </figcaption> </figure> <a href=\"mailto:info@blockchainapi.com\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/email.svg\"         />         <figcaption style=\"textAlign:center;\">Email us: info@blockchainapi.com</figcaption>     </figure> </a> <a href=\"https://discord.gg/d49yzrZRAF\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/discord.svg\"         />         <figcaption style=\"textAlign:center;\">Join our Discord</figcaption>     </figure> </a> <a href=\"https://twitter.com/_BlockX_\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/twitter.svg\"         />          <figcaption style=\"textAlign:center;\">Follow us on Twitter</figcaption>     </figure> </a> <a href=\"https://github.com/BL0CK-X/the-blockchain-api\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/github.svg\"         />         <figcaption style=\"textAlign:center;\">Star us on Github</figcaption>     </figure> </a>  # Security  Common dogma is to never give out your seed phrase. We agree. It's a matter of security, and anyone who has your seed phrase can irreversibly empty your wallet.   <b>When using an API endpoint that requires a seed phrase, we highly recommend that users use or create a wallet that they do not use as their primary wallet.</b>   How you make this work depends on what you're doing. If you're minting an NFT for example, we recommend creating a new wallet and then transferring just enough SOL to that wallet to mint the NFT. This is possible on Solana because such transactions cost less than a penny. We will have more tutorials in the future that make it easier for you to be secure when using our API.  We have easy-to-use endpoints for <a href=\"#tag/Solana-Wallet/paths/~1solana~1wallet~1secret_recovery_phrase/post\">creating a new seed phrase</a> and then <a href=\"#tag/Solana-Wallet/paths/~1solana~1wallet~1public_key/post\">deriving a public key</a> to enable you to transfer to that new wallet.  Let's have a constructive dialog about this. Feel free to <a href=\"#section/Contact\">contact us</a>. I made a video discussing this matter <a target=\"_blank\" href=\"https://youtu.be/m9unUb8Z9qU\">here</a>.  Note: We have had a couple of individuals harrass and threaten us. These individuals did <b>not</b> try our API or speak to anyone who has used it. They simply saw that we require a seed phrase for certain endpoints and figured that the proper response was to attack us. (I explain why we do <a target=\"_blank\" href=\"https://youtu.be/m9unUb8Z9qU\">here</a>.) Such harrassment and threats are not only harmful, but they are also illegal, and we will report offenders. Do not harrass us. Rather, feel free to discuss your concerns with us and we will be more than happy to work with you to come up with a solution.  # Pricing  <b>Each user receives 100 free credits. Each user can call endpoints that cost 0 credits up to 50 requests/min before being rate-limited.</b> Thereafter, they can upgrade to have a higher rate limit. The purpose of this is to act like a free trial -- not to function like a freemium model where one can stay on the free tier indefinitely.  You can learn more about our pricing <a href=\"https://dashboard.blockchainapi.com/billing\" target=\"_blank\">here</a>.   We frequently do custom plans. If our pricing doesn't work for you, <a href=\"#section/Contact\">contact us</a>.  If you have questions, concerns, feedback, or ideas, <a href=\"#section/Contact\">contact us</a>.  # SDKs / API Wrappers  We have examples using both our <a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples\" target=\"_blank\">Python wrapper and our JavaScript wrapper here</a>.  We have built a custom <a href=\"https://github.com/BL0CK-X/the-blockchain-api-python-wrapper\" target=\"_blank\">Python wrapper</a>.  `pip install theblockchainapi`  We also have published a <a href=\"https://github.com/BL0CK-X/theblockchainapi-javascript-wrapper\" target=\"_blank\">JavaScript Wrapper</a>.  `npm install theblockchainapi`  We also have auto-generated wrappers for the following languages: - <a href=\"https://github.com/BL0CK-X/theblockchainapi-go-wrapper\" target = \"_blank\">Go</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-java-wrapper\" target = \"_blank\">Java</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-kotlin-wrapper\" target = \"_blank\">Kotlin</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-php-wrapper\" target = \"_blank\">PHP</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-swift-wrapper\" target = \"_blank\">Swift5</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-typescript-wrapper\" target = \"_blank\">TypeScript</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-csharp-wrapper\" target = \"_blank\">C#</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-dart-wrapper\" target = \"_blank\">Dart</a>  If you would like a different language as well, submit an issue <a href=\"https://github.com/BL0CK-X/theblockchainapi-wrappers/issues/new\" target=\"_blank\">here</a>.  If you run into any bugs with the wrappers, submit an issue <a href=\"https://github.com/BL0CK-X/theblockchainapi-wrappers/issues/new\" target=\"_blank\">here</a>.
 *
 * The version of the OpenAPI document: null
 * Contact: info@blockchainapi.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
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
 * NFTTransaction Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NFTTransaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NFTTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'block_time' => 'float',
        'exchange' => 'string',
        'exchange_readable' => 'string',
        'mint_address' => 'string',
        'operation' => 'string',
        'seller' => 'string',
        'buyer' => 'string',
        'transaction_signature' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'block_time' => null,
        'exchange' => null,
        'exchange_readable' => null,
        'mint_address' => null,
        'operation' => null,
        'seller' => null,
        'buyer' => null,
        'transaction_signature' => null
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
        'block_time' => 'block_time',
        'exchange' => 'exchange',
        'exchange_readable' => 'exchange_readable',
        'mint_address' => 'mint_address',
        'operation' => 'operation',
        'seller' => 'seller',
        'buyer' => 'buyer',
        'transaction_signature' => 'transaction_signature'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'block_time' => 'setBlockTime',
        'exchange' => 'setExchange',
        'exchange_readable' => 'setExchangeReadable',
        'mint_address' => 'setMintAddress',
        'operation' => 'setOperation',
        'seller' => 'setSeller',
        'buyer' => 'setBuyer',
        'transaction_signature' => 'setTransactionSignature'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'block_time' => 'getBlockTime',
        'exchange' => 'getExchange',
        'exchange_readable' => 'getExchangeReadable',
        'mint_address' => 'getMintAddress',
        'operation' => 'getOperation',
        'seller' => 'getSeller',
        'buyer' => 'getBuyer',
        'transaction_signature' => 'getTransactionSignature'
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

    const EXCHANGE_SOLSEA = 'solsea';
    const EXCHANGE_MAGIC_EDEN = 'magic-eden';
    const EXCHANGE_ALPHA_ART = 'alpha-art';
    const EXCHANGE_DIGITAL_EYES = 'digital-eyes';
    const EXCHANGE_SOLANART = 'solanart';
    const EXCHANGE_EXCHANGE_ART = 'exchange-art';
    const EXCHANGE_READABLE_SOL_SEA = 'SolSea';
    const EXCHANGE_READABLE_MAGIC_EDEN = 'Magic Eden';
    const EXCHANGE_READABLE_ALPHA_ART = 'Alpha Art';
    const EXCHANGE_READABLE_DIGITAL_EYES = 'Digital Eyes';
    const EXCHANGE_READABLE_SOLANART = 'Solanart';
    const EXCHANGE_READABLE_EXCHANGE_ART = 'Exchange.art';
    const OPERATION_BUY = 'buy';
    const OPERATION__LIST = 'list';
    const OPERATION_DE_LIST = 'de_list';
    const OPERATION_UPDATE_LISTING = 'update_listing';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExchangeAllowableValues()
    {
        return [
            self::EXCHANGE_SOLSEA,
            self::EXCHANGE_MAGIC_EDEN,
            self::EXCHANGE_ALPHA_ART,
            self::EXCHANGE_DIGITAL_EYES,
            self::EXCHANGE_SOLANART,
            self::EXCHANGE_EXCHANGE_ART,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExchangeReadableAllowableValues()
    {
        return [
            self::EXCHANGE_READABLE_SOL_SEA,
            self::EXCHANGE_READABLE_MAGIC_EDEN,
            self::EXCHANGE_READABLE_ALPHA_ART,
            self::EXCHANGE_READABLE_DIGITAL_EYES,
            self::EXCHANGE_READABLE_SOLANART,
            self::EXCHANGE_READABLE_EXCHANGE_ART,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_BUY,
            self::OPERATION__LIST,
            self::OPERATION_DE_LIST,
            self::OPERATION_UPDATE_LISTING,
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['block_time'] = $data['block_time'] ?? null;
        $this->container['exchange'] = $data['exchange'] ?? null;
        $this->container['exchange_readable'] = $data['exchange_readable'] ?? null;
        $this->container['mint_address'] = $data['mint_address'] ?? null;
        $this->container['operation'] = $data['operation'] ?? null;
        $this->container['seller'] = $data['seller'] ?? null;
        $this->container['buyer'] = $data['buyer'] ?? null;
        $this->container['transaction_signature'] = $data['transaction_signature'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getExchangeAllowableValues();
        if (!is_null($this->container['exchange']) && !in_array($this->container['exchange'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'exchange', must be one of '%s'",
                $this->container['exchange'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getExchangeReadableAllowableValues();
        if (!is_null($this->container['exchange_readable']) && !in_array($this->container['exchange_readable'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'exchange_readable', must be one of '%s'",
                $this->container['exchange_readable'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'operation', must be one of '%s'",
                $this->container['operation'],
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
     * Gets block_time
     *
     * @return float|null
     */
    public function getBlockTime()
    {
        return $this->container['block_time'];
    }

    /**
     * Sets block_time
     *
     * @param float|null $block_time An epoch time stamp in UTC time that represents the time of the block where the transaction was processed
     *
     * @return self
     */
    public function setBlockTime($block_time)
    {
        $this->container['block_time'] = $block_time;

        return $this;
    }

    /**
     * Gets exchange
     *
     * @return string|null
     */
    public function getExchange()
    {
        return $this->container['exchange'];
    }

    /**
     * Sets exchange
     *
     * @param string|null $exchange The NFT exchange on which the transaction occurred
     *
     * @return self
     */
    public function setExchange($exchange)
    {
        $allowedValues = $this->getExchangeAllowableValues();
        if (!is_null($exchange) && !in_array($exchange, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'exchange', must be one of '%s'",
                    $exchange,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['exchange'] = $exchange;

        return $this;
    }

    /**
     * Gets exchange_readable
     *
     * @return string|null
     */
    public function getExchangeReadable()
    {
        return $this->container['exchange_readable'];
    }

    /**
     * Sets exchange_readable
     *
     * @param string|null $exchange_readable A readable version of the NFT exchange
     *
     * @return self
     */
    public function setExchangeReadable($exchange_readable)
    {
        $allowedValues = $this->getExchangeReadableAllowableValues();
        if (!is_null($exchange_readable) && !in_array($exchange_readable, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'exchange_readable', must be one of '%s'",
                    $exchange_readable,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['exchange_readable'] = $exchange_readable;

        return $this;
    }

    /**
     * Gets mint_address
     *
     * @return string|null
     */
    public function getMintAddress()
    {
        return $this->container['mint_address'];
    }

    /**
     * Sets mint_address
     *
     * @param string|null $mint_address The mint address of the NFT
     *
     * @return self
     */
    public function setMintAddress($mint_address)
    {
        $this->container['mint_address'] = $mint_address;

        return $this;
    }

    /**
     * Gets operation
     *
     * @return string|null
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string|null $operation The operation of the transaction
     *
     * @return self
     */
    public function setOperation($operation)
    {
        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($operation) && !in_array($operation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'operation', must be one of '%s'",
                    $operation,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets seller
     *
     * @return string|null
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param string|null $seller The public key of the wallet that listed the NFT
     *
     * @return self
     */
    public function setSeller($seller)
    {
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return string|null
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param string|null $buyer The public key of the buyer. This only exists in `buy` transactions.
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets transaction_signature
     *
     * @return string|null
     */
    public function getTransactionSignature()
    {
        return $this->container['transaction_signature'];
    }

    /**
     * Sets transaction_signature
     *
     * @param string|null $transaction_signature The signature of the transaction. You can look up each transaction on explorer.solana.com
     *
     * @return self
     */
    public function setTransactionSignature($transaction_signature)
    {
        $this->container['transaction_signature'] = $transaction_signature;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


