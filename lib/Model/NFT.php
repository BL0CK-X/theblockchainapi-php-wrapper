<?php
/**
 * NFT
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
 * # About  Our vision is to make it super easy to interact with the decentralized web. We want you to be able to do this in any coding language and do it easily and quickly.   You're a key part of our vision. We love feature requests! <a href=\"#section/Feature-Requests\">Make one!</a>  # How to Use the API  To use the API, you simply need to create an API key pair.  Doing so takes less than a minute. Simply go to <a target=\"_blank\" href=\"https://dashboard.blockchainapi.com\">the dashboard</a>, create an account, and generate a key pair. You can now use this pair to make API requests. You must create your first pair via the dashboard.  # Feature Requests  Got a feature request? Submit it as an issue on <a target=\"_blank\" href=\"https://github.com/BL0CK-X/the-blockchain-api/issues/new/choose\">our GitHub repo</a> or [email us](mailto:info@blockchainapi.com).  # Contact  <figure>     <img          width=\"40px\"         height=\"40px\"          src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/phone.svg\"     />     <figcaption style=\"textAlign:center;\">Text / Call: +1 (415) 888 4745 </figcaption> </figure> <a href=\"mailto:info@blockchainapi.com\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/email.svg\"         />         <figcaption style=\"textAlign:center;\">Email us: info@blockchainapi.com</figcaption>     </figure> </a> <a href=\"https://discord.gg/d49yzrZRAF\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/discord.svg\"         />         <figcaption style=\"textAlign:center;\">Join our Discord</figcaption>     </figure> </a> <a href=\"https://twitter.com/_BlockX_\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/twitter.svg\"         />          <figcaption style=\"textAlign:center;\">Follow us on Twitter</figcaption>     </figure> </a> <a href=\"https://github.com/BL0CK-X/the-blockchain-api\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/github.svg\"         />         <figcaption style=\"textAlign:center;\">Star us on Github</figcaption>     </figure> </a>  # Security  Common dogma is to never give out your seed phrase. We agree. It's a matter of security, and anyone who has your seed phrase can irreversibly empty your wallet.   <b>When using an API endpoint that requires a seed phrase, we highly recommend that users use or create a wallet that they do not use as their primary wallet.</b>   How you make this work depends on what you're doing. If you're minting an NFT for example, we recommend creating a new wallet and then transferring just enough SOL to that wallet to mint the NFT. This is possible on Solana because such transactions cost less than a penny. We will have more tutorials in the future that make it easier for you to be secure when using our API.  We have easy-to-use endpoints for <a href=\"#tag/Solana-Wallet/paths/~1solana~1wallet~1secret_recovery_phrase/post\">creating a new seed phrase</a> and then <a href=\"#tag/Solana-Wallet/paths/~1solana~1wallet~1public_key/post\">deriving a public key</a> to enable you to transfer to that new wallet.  Let's have a constructive dialog about this. Feel free to <a href=\"#section/Contact\">contact us</a>. I made a video discussing this matter <a target=\"_blank\" href=\"https://youtu.be/m9unUb8Z9qU\">here</a>.  Note: We have had a couple of individuals harrass and threaten us. These individuals did <b>not</b> try our API or speak to anyone who has used it. They simply saw that we require a seed phrase for certain endpoints and figured that the proper response was to attack us. (I explain why we do <a target=\"_blank\" href=\"https://youtu.be/m9unUb8Z9qU\">here</a>.) Such harrassment and threats are not only harmful, but they are also illegal, and we will report offenders. Do not harrass us. Rather, feel free to discuss your concerns with us and we will be more than happy to work with you to come up with a solution.  # Pricing  <b>Each user receives 500 free credits.</b>  You can learn more about our pricing <a href=\"https://dashboard.blockchainapi.com/billing\" target=\"_blank\">here</a>.   We frequently do custom plans. If our pricing doesn't work for you, <a href=\"#section/Contact\">contact us</a>.  If you have questions, concerns, feedback, or ideas, <a href=\"#section/Contact\">contact us</a>.  # SDKs / API Wrappers  We have examples using both our <a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples\" target=\"_blank\">Python wrapper and our JavaScript wrapper here</a>.  We have built a custom <a href=\"https://github.com/BL0CK-X/the-blockchain-api-python-wrapper\" target=\"_blank\">Python wrapper</a>.  `pip install theblockchainapi`  We also have published a <a href=\"https://github.com/BL0CK-X/theblockchainapi-javascript-wrapper\" target=\"_blank\">JavaScript Wrapper</a>.  `npm install theblockchainapi`  We also have auto-generated wrappers for the following languages: - <a href=\"https://github.com/BL0CK-X/theblockchainapi-go-wrapper\" target = \"_blank\">Go</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-java-wrapper\" target = \"_blank\">Java</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-kotlin-wrapper\" target = \"_blank\">Kotlin</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-php-wrapper\" target = \"_blank\">PHP</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-swift-wrapper\" target = \"_blank\">Swift5</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-typescript-wrapper\" target = \"_blank\">TypeScript</a>  If you would like a different language as well, submit an issue <a href=\"https://github.com/BL0CK-X/theblockchainapi-wrappers/issues/new\" target=\"_blank\">here</a>.  If you run into any bugs with the wrappers, submit an issue <a href=\"https://github.com/BL0CK-X/theblockchainapi-wrappers/issues/new\" target=\"_blank\">here</a>.
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
 * NFT Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NFT implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NFT';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data' => '\OpenAPI\Client\Model\NFTData',
        'is_mutable' => 'bool',
        'mint' => 'string',
        'primary_sale_happened' => 'bool',
        'update_authority' => 'string',
        'seller_fee_basis_points' => 'float',
        'mint_secret_recovery_phrase' => 'string',
        'explorer_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'data' => null,
        'is_mutable' => null,
        'mint' => null,
        'primary_sale_happened' => null,
        'update_authority' => null,
        'seller_fee_basis_points' => null,
        'mint_secret_recovery_phrase' => null,
        'explorer_url' => null
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
        'data' => 'data',
        'is_mutable' => 'is_mutable',
        'mint' => 'mint',
        'primary_sale_happened' => 'primary_sale_happened',
        'update_authority' => 'update_authority',
        'seller_fee_basis_points' => 'seller_fee_basis_points',
        'mint_secret_recovery_phrase' => 'mint_secret_recovery_phrase',
        'explorer_url' => 'explorer_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data' => 'setData',
        'is_mutable' => 'setIsMutable',
        'mint' => 'setMint',
        'primary_sale_happened' => 'setPrimarySaleHappened',
        'update_authority' => 'setUpdateAuthority',
        'seller_fee_basis_points' => 'setSellerFeeBasisPoints',
        'mint_secret_recovery_phrase' => 'setMintSecretRecoveryPhrase',
        'explorer_url' => 'setExplorerUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data' => 'getData',
        'is_mutable' => 'getIsMutable',
        'mint' => 'getMint',
        'primary_sale_happened' => 'getPrimarySaleHappened',
        'update_authority' => 'getUpdateAuthority',
        'seller_fee_basis_points' => 'getSellerFeeBasisPoints',
        'mint_secret_recovery_phrase' => 'getMintSecretRecoveryPhrase',
        'explorer_url' => 'getExplorerUrl'
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
        $this->container['data'] = $data['data'] ?? null;
        $this->container['is_mutable'] = $data['is_mutable'] ?? null;
        $this->container['mint'] = $data['mint'] ?? null;
        $this->container['primary_sale_happened'] = $data['primary_sale_happened'] ?? null;
        $this->container['update_authority'] = $data['update_authority'] ?? null;
        $this->container['seller_fee_basis_points'] = $data['seller_fee_basis_points'] ?? null;
        $this->container['mint_secret_recovery_phrase'] = $data['mint_secret_recovery_phrase'] ?? null;
        $this->container['explorer_url'] = $data['explorer_url'] ?? null;
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
     * @return \OpenAPI\Client\Model\NFTData|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \OpenAPI\Client\Model\NFTData|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets is_mutable
     *
     * @return bool|null
     */
    public function getIsMutable()
    {
        return $this->container['is_mutable'];
    }

    /**
     * Sets is_mutable
     *
     * @param bool|null $is_mutable is_mutable
     *
     * @return self
     */
    public function setIsMutable($is_mutable)
    {
        $this->container['is_mutable'] = $is_mutable;

        return $this;
    }

    /**
     * Gets mint
     *
     * @return string|null
     */
    public function getMint()
    {
        return $this->container['mint'];
    }

    /**
     * Sets mint
     *
     * @param string|null $mint The public key address of the NFT
     *
     * @return self
     */
    public function setMint($mint)
    {
        $this->container['mint'] = $mint;

        return $this;
    }

    /**
     * Gets primary_sale_happened
     *
     * @return bool|null
     */
    public function getPrimarySaleHappened()
    {
        return $this->container['primary_sale_happened'];
    }

    /**
     * Sets primary_sale_happened
     *
     * @param bool|null $primary_sale_happened primary_sale_happened
     *
     * @return self
     */
    public function setPrimarySaleHappened($primary_sale_happened)
    {
        $this->container['primary_sale_happened'] = $primary_sale_happened;

        return $this;
    }

    /**
     * Gets update_authority
     *
     * @return string|null
     */
    public function getUpdateAuthority()
    {
        return $this->container['update_authority'];
    }

    /**
     * Sets update_authority
     *
     * @param string|null $update_authority A public key address that is usually that of the person who minted the NFT
     *
     * @return self
     */
    public function setUpdateAuthority($update_authority)
    {
        $this->container['update_authority'] = $update_authority;

        return $this;
    }

    /**
     * Gets seller_fee_basis_points
     *
     * @return float|null
     */
    public function getSellerFeeBasisPoints()
    {
        return $this->container['seller_fee_basis_points'];
    }

    /**
     * Sets seller_fee_basis_points
     *
     * @param float|null $seller_fee_basis_points seller_fee_basis_points
     *
     * @return self
     */
    public function setSellerFeeBasisPoints($seller_fee_basis_points)
    {
        $this->container['seller_fee_basis_points'] = $seller_fee_basis_points;

        return $this;
    }

    /**
     * Gets mint_secret_recovery_phrase
     *
     * @return string|null
     */
    public function getMintSecretRecoveryPhrase()
    {
        return $this->container['mint_secret_recovery_phrase'];
    }

    /**
     * Sets mint_secret_recovery_phrase
     *
     * @param string|null $mint_secret_recovery_phrase mint_secret_recovery_phrase
     *
     * @return self
     */
    public function setMintSecretRecoveryPhrase($mint_secret_recovery_phrase)
    {
        $this->container['mint_secret_recovery_phrase'] = $mint_secret_recovery_phrase;

        return $this;
    }

    /**
     * Gets explorer_url
     *
     * @return string|null
     */
    public function getExplorerUrl()
    {
        return $this->container['explorer_url'];
    }

    /**
     * Sets explorer_url
     *
     * @param string|null $explorer_url explorer_url
     *
     * @return self
     */
    public function setExplorerUrl($explorer_url)
    {
        $this->container['explorer_url'] = $explorer_url;

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


