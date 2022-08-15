<?php
/**
 * EthereumTransaction
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
 * EthereumTransaction Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EthereumTransaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EthereumTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'access_list' => 'object',
        'block_hash' => 'string',
        'block_number' => 'string',
        'chain_id' => 'string',
        'from' => 'string',
        'gas' => 'string',
        'gas_price' => 'string',
        'hash' => 'string',
        'input' => 'string',
        'max_fee_per_gas' => 'string',
        'max_priority_fee_per_gas' => 'string',
        'nonce' => 'string',
        'r' => 'string',
        's' => 'string',
        'to' => 'string',
        'transaction_index' => 'string',
        'type' => 'string',
        'v' => 'string',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'access_list' => null,
        'block_hash' => null,
        'block_number' => null,
        'chain_id' => null,
        'from' => null,
        'gas' => null,
        'gas_price' => null,
        'hash' => null,
        'input' => null,
        'max_fee_per_gas' => null,
        'max_priority_fee_per_gas' => null,
        'nonce' => null,
        'r' => null,
        's' => null,
        'to' => null,
        'transaction_index' => null,
        'type' => null,
        'v' => null,
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
        'access_list' => 'access_list',
        'block_hash' => 'block_hash',
        'block_number' => 'block_number',
        'chain_id' => 'chain_id',
        'from' => 'from',
        'gas' => 'gas',
        'gas_price' => 'gas_price',
        'hash' => 'hash',
        'input' => 'input',
        'max_fee_per_gas' => 'max_fee_per_gas',
        'max_priority_fee_per_gas' => 'max_priority_fee_per_gas',
        'nonce' => 'nonce',
        'r' => 'r',
        's' => 's',
        'to' => 'to',
        'transaction_index' => 'transaction_index',
        'type' => 'type',
        'v' => 'v',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_list' => 'setAccessList',
        'block_hash' => 'setBlockHash',
        'block_number' => 'setBlockNumber',
        'chain_id' => 'setChainId',
        'from' => 'setFrom',
        'gas' => 'setGas',
        'gas_price' => 'setGasPrice',
        'hash' => 'setHash',
        'input' => 'setInput',
        'max_fee_per_gas' => 'setMaxFeePerGas',
        'max_priority_fee_per_gas' => 'setMaxPriorityFeePerGas',
        'nonce' => 'setNonce',
        'r' => 'setR',
        's' => 'setS',
        'to' => 'setTo',
        'transaction_index' => 'setTransactionIndex',
        'type' => 'setType',
        'v' => 'setV',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_list' => 'getAccessList',
        'block_hash' => 'getBlockHash',
        'block_number' => 'getBlockNumber',
        'chain_id' => 'getChainId',
        'from' => 'getFrom',
        'gas' => 'getGas',
        'gas_price' => 'getGasPrice',
        'hash' => 'getHash',
        'input' => 'getInput',
        'max_fee_per_gas' => 'getMaxFeePerGas',
        'max_priority_fee_per_gas' => 'getMaxPriorityFeePerGas',
        'nonce' => 'getNonce',
        'r' => 'getR',
        's' => 'getS',
        'to' => 'getTo',
        'transaction_index' => 'getTransactionIndex',
        'type' => 'getType',
        'v' => 'getV',
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
        $this->container['access_list'] = $data['access_list'] ?? null;
        $this->container['block_hash'] = $data['block_hash'] ?? null;
        $this->container['block_number'] = $data['block_number'] ?? null;
        $this->container['chain_id'] = $data['chain_id'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['gas'] = $data['gas'] ?? null;
        $this->container['gas_price'] = $data['gas_price'] ?? null;
        $this->container['hash'] = $data['hash'] ?? null;
        $this->container['input'] = $data['input'] ?? null;
        $this->container['max_fee_per_gas'] = $data['max_fee_per_gas'] ?? null;
        $this->container['max_priority_fee_per_gas'] = $data['max_priority_fee_per_gas'] ?? null;
        $this->container['nonce'] = $data['nonce'] ?? null;
        $this->container['r'] = $data['r'] ?? null;
        $this->container['s'] = $data['s'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['transaction_index'] = $data['transaction_index'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['v'] = $data['v'] ?? null;
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
     * Gets access_list
     *
     * @return object|null
     */
    public function getAccessList()
    {
        return $this->container['access_list'];
    }

    /**
     * Sets access_list
     *
     * @param object|null $access_list access_list
     *
     * @return self
     */
    public function setAccessList($access_list)
    {
        $this->container['access_list'] = $access_list;

        return $this;
    }

    /**
     * Gets block_hash
     *
     * @return string|null
     */
    public function getBlockHash()
    {
        return $this->container['block_hash'];
    }

    /**
     * Sets block_hash
     *
     * @param string|null $block_hash block_hash
     *
     * @return self
     */
    public function setBlockHash($block_hash)
    {
        $this->container['block_hash'] = $block_hash;

        return $this;
    }

    /**
     * Gets block_number
     *
     * @return string|null
     */
    public function getBlockNumber()
    {
        return $this->container['block_number'];
    }

    /**
     * Sets block_number
     *
     * @param string|null $block_number block_number
     *
     * @return self
     */
    public function setBlockNumber($block_number)
    {
        $this->container['block_number'] = $block_number;

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
     * @param string|null $chain_id chain_id
     *
     * @return self
     */
    public function setChainId($chain_id)
    {
        $this->container['chain_id'] = $chain_id;

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
     * @param string|null $from from
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets gas
     *
     * @return string|null
     */
    public function getGas()
    {
        return $this->container['gas'];
    }

    /**
     * Sets gas
     *
     * @param string|null $gas gas
     *
     * @return self
     */
    public function setGas($gas)
    {
        $this->container['gas'] = $gas;

        return $this;
    }

    /**
     * Gets gas_price
     *
     * @return string|null
     */
    public function getGasPrice()
    {
        return $this->container['gas_price'];
    }

    /**
     * Sets gas_price
     *
     * @param string|null $gas_price gas_price
     *
     * @return self
     */
    public function setGasPrice($gas_price)
    {
        $this->container['gas_price'] = $gas_price;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string|null $hash hash
     *
     * @return self
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets input
     *
     * @return string|null
     */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
     * Sets input
     *
     * @param string|null $input input
     *
     * @return self
     */
    public function setInput($input)
    {
        $this->container['input'] = $input;

        return $this;
    }

    /**
     * Gets max_fee_per_gas
     *
     * @return string|null
     */
    public function getMaxFeePerGas()
    {
        return $this->container['max_fee_per_gas'];
    }

    /**
     * Sets max_fee_per_gas
     *
     * @param string|null $max_fee_per_gas max_fee_per_gas
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
     * @return string|null
     */
    public function getMaxPriorityFeePerGas()
    {
        return $this->container['max_priority_fee_per_gas'];
    }

    /**
     * Sets max_priority_fee_per_gas
     *
     * @param string|null $max_priority_fee_per_gas max_priority_fee_per_gas
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
     * @return string|null
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param string|null $nonce nonce
     *
     * @return self
     */
    public function setNonce($nonce)
    {
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets r
     *
     * @return string|null
     */
    public function getR()
    {
        return $this->container['r'];
    }

    /**
     * Sets r
     *
     * @param string|null $r r
     *
     * @return self
     */
    public function setR($r)
    {
        $this->container['r'] = $r;

        return $this;
    }

    /**
     * Gets s
     *
     * @return string|null
     */
    public function getS()
    {
        return $this->container['s'];
    }

    /**
     * Sets s
     *
     * @param string|null $s s
     *
     * @return self
     */
    public function setS($s)
    {
        $this->container['s'] = $s;

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
     * @param string|null $to to
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets transaction_index
     *
     * @return string|null
     */
    public function getTransactionIndex()
    {
        return $this->container['transaction_index'];
    }

    /**
     * Sets transaction_index
     *
     * @param string|null $transaction_index transaction_index
     *
     * @return self
     */
    public function setTransactionIndex($transaction_index)
    {
        $this->container['transaction_index'] = $transaction_index;

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
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets v
     *
     * @return string|null
     */
    public function getV()
    {
        return $this->container['v'];
    }

    /**
     * Sets v
     *
     * @param string|null $v v
     *
     * @return self
     */
    public function setV($v)
    {
        $this->container['v'] = $v;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value value
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


