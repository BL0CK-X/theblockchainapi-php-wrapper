<?php
/**
 * GeneralTransactionResponse
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
 * # About  Our vision is to make it super easy to interact with the decentralized web. We want you to be able to do this in any coding language and do it easily and quickly.   You're a key part of our vision. We love feature requests! <a href=\"#section/Feature-Requests\">Make one!</a>  # How to Use the API  To use the API, you simply need to create an API key pair.  Doing so takes less than a minute. Simply go to <a target=\"_blank\" href=\"https://dashboard.blockchainapi.com\">the dashboard</a>, create an account, and generate a key pair. You can now use this pair to make API requests. You must create your first pair via the dashboard.  # Feature Requests  Got a feature request? Submit it as an issue on <a target=\"_blank\" href=\"https://github.com/BL0CK-X/the-blockchain-api/issues/new/choose\">our GitHub repo</a> or [email us](mailto:info@blockchainapi.com).  # Contact  <figure>     <img          width=\"40px\"         height=\"40px\"          src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/phone.svg\"     />     <figcaption style=\"textAlign:center;\">Text / Call: +1 (415) 888 4745 </figcaption> </figure> <a href=\"mailto:info@blockchainapi.com\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/email.svg\"         />         <figcaption style=\"textAlign:center;\">Email us: info@blockchainapi.com</figcaption>     </figure> </a> <a href=\"https://discord.gg/d49yzrZRAF\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/discord.svg\"         />         <figcaption style=\"textAlign:center;\">Join our Discord</figcaption>     </figure> </a> <a href=\"https://twitter.com/BlockchainAP1\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/twitter.svg\"         />          <figcaption style=\"textAlign:center;\">Follow us on Twitter</figcaption>     </figure> </a> <a href=\"https://github.com/BL0CK-X/the-blockchain-api\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/github.svg\"         />         <figcaption style=\"textAlign:center;\">Star us on Github</figcaption>     </figure> </a>  # Security  Common dogma is to never give out your seed phrase. We agree. It's a matter of security, and anyone who has your seed phrase can irreversibly empty your wallet.   <b>When using an API endpoint that requires a seed phrase, we highly recommend that users use or create a wallet that they do not use as their primary wallet.</b>   How you make this work depends on what you're doing. If you're minting an NFT for example, we recommend creating a new wallet and then transferring just enough SOL to that wallet to mint the NFT. This is possible on Solana because such transactions cost less than a penny. We will have more tutorials in the future that make it easier for you to be secure when using our API.  We have easy-to-use endpoints for <a href=\"#tag/Solana-Wallet/paths/~1solana~1wallet~1secret_recovery_phrase/post\">creating a new seed phrase</a> and then <a href=\"#tag/Solana-Wallet/paths/~1solana~1wallet~1public_key/post\">deriving a public key</a> to enable you to transfer to that new wallet.  Let's have a constructive dialog about this. Feel free to <a href=\"#section/Contact\">contact us</a>. I made a video discussing this matter <a target=\"_blank\" href=\"https://youtu.be/m9unUb8Z9qU\">here</a>.  Note: We have had a couple of individuals harrass and threaten us. These individuals did <b>not</b> try our API or speak to anyone who has used it. They simply saw that we require a seed phrase for certain endpoints and figured that the proper response was to attack us. (I explain why we do <a target=\"_blank\" href=\"https://youtu.be/m9unUb8Z9qU\">here</a>.) Such harrassment and threats are not only harmful, but they are also illegal, and we will report offenders. Do not harrass us. Rather, feel free to discuss your concerns with us and we will be more than happy to work with you to come up with a solution.  # Pricing  <b>Each user receives 50,000 free credits each month.</b> Each endpoint costs a certain amount credits. Scroll below to any endpoint (i.e., function) to see how much each endpoint costs. (Or CMD+F `Cost: 0 Credit`, for example)  You can learn more about our pricing <a href=\"https://dashboard.blockchainapi.com/billing\" target=\"_blank\">here</a>.   We frequently do custom plans. If our pricing doesn't work for you, <a href=\"#section/Contact\">contact us</a>.  If you have questions, concerns, feedback, or ideas, <a href=\"#section/Contact\">contact us</a>.  # SDKs / API Wrappers  We have examples using both our <a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples\" target=\"_blank\">Python wrapper and our JavaScript wrapper here</a>.  We have built a custom <a href=\"https://github.com/BL0CK-X/the-blockchain-api-python-wrapper\" target=\"_blank\">Python wrapper</a>.  `pip install theblockchainapi`  We also have published a <a href=\"https://github.com/BL0CK-X/theblockchainapi-javascript-wrapper\" target=\"_blank\">JavaScript Wrapper</a>.  `npm install theblockchainapi`  We also have auto-generated wrappers for the following languages: - <a href=\"https://github.com/BL0CK-X/theblockchainapi-go-wrapper\" target = \"_blank\">Go</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-java-wrapper\" target = \"_blank\">Java</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-kotlin-wrapper\" target = \"_blank\">Kotlin</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-php-wrapper\" target = \"_blank\">PHP</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-swift-wrapper\" target = \"_blank\">Swift5</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-typescript-wrapper\" target = \"_blank\">TypeScript</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-csharp-wrapper\" target = \"_blank\">C#</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-dart-wrapper\" target = \"_blank\">Dart</a>  If you would like a different language as well, submit an issue <a href=\"https://github.com/BL0CK-X/theblockchainapi-wrappers/issues/new\" target=\"_blank\">here</a>.  If you run into any bugs with the wrappers, submit an issue <a href=\"https://github.com/BL0CK-X/theblockchainapi-wrappers/issues/new\" target=\"_blank\">here</a>.
 *
 * The version of the OpenAPI document: null
 * Contact: info@blockchainapi.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
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
 * GeneralTransactionResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GeneralTransactionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GeneralTransactionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_blockchain_identifier' => 'string',
        'transaction_confirmed' => 'bool',
        'b58_compiled_transaction' => 'string',
        'compiled_transaction' => 'object',
        'chain_id' => 'string',
        'data' => 'string',
        'from' => 'string',
        'to' => 'string',
        'gas' => 'float',
        'max_fee_per_gas' => 'float',
        'max_priority_fee_per_gas' => 'float',
        'nonce' => 'float',
        'value' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transaction_blockchain_identifier' => null,
        'transaction_confirmed' => null,
        'b58_compiled_transaction' => null,
        'compiled_transaction' => null,
        'chain_id' => null,
        'data' => null,
        'from' => null,
        'to' => null,
        'gas' => null,
        'max_fee_per_gas' => null,
        'max_priority_fee_per_gas' => null,
        'nonce' => null,
        'value' => null
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
        'transaction_blockchain_identifier' => 'transaction_blockchain_identifier',
        'transaction_confirmed' => 'transaction_confirmed',
        'b58_compiled_transaction' => 'b58_compiled_transaction',
        'compiled_transaction' => 'compiled_transaction',
        'chain_id' => 'chain_id',
        'data' => 'data',
        'from' => 'from',
        'to' => 'to',
        'gas' => 'gas',
        'max_fee_per_gas' => 'max_fee_per_gas',
        'max_priority_fee_per_gas' => 'max_priority_fee_per_gas',
        'nonce' => 'nonce',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_blockchain_identifier' => 'setTransactionBlockchainIdentifier',
        'transaction_confirmed' => 'setTransactionConfirmed',
        'b58_compiled_transaction' => 'setB58CompiledTransaction',
        'compiled_transaction' => 'setCompiledTransaction',
        'chain_id' => 'setChainId',
        'data' => 'setData',
        'from' => 'setFrom',
        'to' => 'setTo',
        'gas' => 'setGas',
        'max_fee_per_gas' => 'setMaxFeePerGas',
        'max_priority_fee_per_gas' => 'setMaxPriorityFeePerGas',
        'nonce' => 'setNonce',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_blockchain_identifier' => 'getTransactionBlockchainIdentifier',
        'transaction_confirmed' => 'getTransactionConfirmed',
        'b58_compiled_transaction' => 'getB58CompiledTransaction',
        'compiled_transaction' => 'getCompiledTransaction',
        'chain_id' => 'getChainId',
        'data' => 'getData',
        'from' => 'getFrom',
        'to' => 'getTo',
        'gas' => 'getGas',
        'max_fee_per_gas' => 'getMaxFeePerGas',
        'max_priority_fee_per_gas' => 'getMaxPriorityFeePerGas',
        'nonce' => 'getNonce',
        'value' => 'getValue'
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
        $this->container['transaction_blockchain_identifier'] = $data['transaction_blockchain_identifier'] ?? null;
        $this->container['transaction_confirmed'] = $data['transaction_confirmed'] ?? null;
        $this->container['b58_compiled_transaction'] = $data['b58_compiled_transaction'] ?? null;
        $this->container['compiled_transaction'] = $data['compiled_transaction'] ?? null;
        $this->container['chain_id'] = $data['chain_id'] ?? null;
        $this->container['data'] = $data['data'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['gas'] = $data['gas'] ?? null;
        $this->container['max_fee_per_gas'] = $data['max_fee_per_gas'] ?? null;
        $this->container['max_priority_fee_per_gas'] = $data['max_priority_fee_per_gas'] ?? null;
        $this->container['nonce'] = $data['nonce'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
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
     * Gets transaction_blockchain_identifier
     *
     * @return string|null
     */
    public function getTransactionBlockchainIdentifier()
    {
        return $this->container['transaction_blockchain_identifier'];
    }

    /**
     * Sets transaction_blockchain_identifier
     *
     * @param string|null $transaction_blockchain_identifier The identifier of the transaction
     *
     * @return self
     */
    public function setTransactionBlockchainIdentifier($transaction_blockchain_identifier)
    {
        $this->container['transaction_blockchain_identifier'] = $transaction_blockchain_identifier;

        return $this;
    }

    /**
     * Gets transaction_confirmed
     *
     * @return bool|null
     */
    public function getTransactionConfirmed()
    {
        return $this->container['transaction_confirmed'];
    }

    /**
     * Sets transaction_confirmed
     *
     * @param bool|null $transaction_confirmed Whether or not the transaction was confirmed
     *
     * @return self
     */
    public function setTransactionConfirmed($transaction_confirmed)
    {
        $this->container['transaction_confirmed'] = $transaction_confirmed;

        return $this;
    }

    /**
     * Gets b58_compiled_transaction
     *
     * @return string|null
     */
    public function getB58CompiledTransaction()
    {
        return $this->container['b58_compiled_transaction'];
    }

    /**
     * Sets b58_compiled_transaction
     *
     * @param string|null $b58_compiled_transaction A base58 encoded byte array in string representation. Really easy to submit to Phantom. See <a href=\"https://github.com/BL0CK-X/blockchain-api/blob/main/examples/tutorials/phantom_tutorials/transfer_solana.html\" target=\"_blank\">here</a> for an example on how to submit it to a Phantom wallet for signing.
     *
     * @return self
     */
    public function setB58CompiledTransaction($b58_compiled_transaction)
    {
        $this->container['b58_compiled_transaction'] = $b58_compiled_transaction;

        return $this;
    }

    /**
     * Gets compiled_transaction
     *
     * @return object|null
     */
    public function getCompiledTransaction()
    {
        return $this->container['compiled_transaction'];
    }

    /**
     * Sets compiled_transaction
     *
     * @param object|null $compiled_transaction An array of integers representing the bytes of the transaction
     *
     * @return self
     */
    public function setCompiledTransaction($compiled_transaction)
    {
        $this->container['compiled_transaction'] = $compiled_transaction;

        return $this;
    }

    /**
     * Gets chain_id
     *
     * @return string|null
     */
    public function getChainId()
    {
        return $this->container['chain_id'];
    }

    /**
     * Sets chain_id
     *
     * @param string|null $chain_id Indicates the chain that the transaction was compiled for (e.g., ropsten or mainnet).
     *
     * @return self
     */
    public function setChainId($chain_id)
    {
        $this->container['chain_id'] = $chain_id;

        return $this;
    }

    /**
     * Gets data
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string|null $data The transaction data
     *
     * @return self
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from The address expected to sign and submit the transaction
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string|null $to The contract. This should match your provided value for `token_blockchain_identifier`.
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets gas
     *
     * @return float|null
     */
    public function getGas()
    {
        return $this->container['gas'];
    }

    /**
     * Sets gas
     *
     * @param float|null $gas gas
     *
     * @return self
     */
    public function setGas($gas)
    {
        $this->container['gas'] = $gas;

        return $this;
    }

    /**
     * Gets max_fee_per_gas
     *
     * @return float|null
     */
    public function getMaxFeePerGas()
    {
        return $this->container['max_fee_per_gas'];
    }

    /**
     * Sets max_fee_per_gas
     *
     * @param float|null $max_fee_per_gas max_fee_per_gas
     *
     * @return self
     */
    public function setMaxFeePerGas($max_fee_per_gas)
    {
        $this->container['max_fee_per_gas'] = $max_fee_per_gas;

        return $this;
    }

    /**
     * Gets max_priority_fee_per_gas
     *
     * @return float|null
     */
    public function getMaxPriorityFeePerGas()
    {
        return $this->container['max_priority_fee_per_gas'];
    }

    /**
     * Sets max_priority_fee_per_gas
     *
     * @param float|null $max_priority_fee_per_gas max_priority_fee_per_gas
     *
     * @return self
     */
    public function setMaxPriorityFeePerGas($max_priority_fee_per_gas)
    {
        $this->container['max_priority_fee_per_gas'] = $max_priority_fee_per_gas;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return float|null
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param float|null $nonce nonce
     *
     * @return self
     */
    public function setNonce($nonce)
    {
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float|null $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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


