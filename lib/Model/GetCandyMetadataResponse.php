<?php
/**
 * GetCandyMetadataResponse
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
 * GetCandyMetadataResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetCandyMetadataResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetCandyMetadataResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authority' => 'string',
        'bump' => 'float',
        'candy_machine_id' => 'string',
        'config_address' => 'string',
        'creators' => '\OpenAPI\Client\Model\GetCandyMetadataResponseCreators[]',
        'go_live_date' => 'float',
        'is_mutable' => 'bool',
        'items_available' => 'float',
        'items_redeemed' => 'float',
        'max_number_of_lines' => 'float',
        'max_supply' => 'float',
        'price' => 'float',
        'retain_authority' => 'bool',
        'seller_fee_basis_points' => 'float',
        'symbol' => 'string',
        'token_mint' => 'string',
        'uuid' => 'string',
        'wallet' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authority' => null,
        'bump' => null,
        'candy_machine_id' => null,
        'config_address' => null,
        'creators' => null,
        'go_live_date' => null,
        'is_mutable' => null,
        'items_available' => null,
        'items_redeemed' => null,
        'max_number_of_lines' => null,
        'max_supply' => null,
        'price' => null,
        'retain_authority' => null,
        'seller_fee_basis_points' => null,
        'symbol' => null,
        'token_mint' => null,
        'uuid' => null,
        'wallet' => null
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
        'authority' => 'authority',
        'bump' => 'bump',
        'candy_machine_id' => 'candy_machine_id',
        'config_address' => 'config_address',
        'creators' => 'creators',
        'go_live_date' => 'go_live_date',
        'is_mutable' => 'is_mutable',
        'items_available' => 'items_available',
        'items_redeemed' => 'items_redeemed',
        'max_number_of_lines' => 'max_number_of_lines',
        'max_supply' => 'max_supply',
        'price' => 'price',
        'retain_authority' => 'retain_authority',
        'seller_fee_basis_points' => 'seller_fee_basis_points',
        'symbol' => 'symbol',
        'token_mint' => 'token_mint',
        'uuid' => 'uuid',
        'wallet' => 'wallet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authority' => 'setAuthority',
        'bump' => 'setBump',
        'candy_machine_id' => 'setCandyMachineId',
        'config_address' => 'setConfigAddress',
        'creators' => 'setCreators',
        'go_live_date' => 'setGoLiveDate',
        'is_mutable' => 'setIsMutable',
        'items_available' => 'setItemsAvailable',
        'items_redeemed' => 'setItemsRedeemed',
        'max_number_of_lines' => 'setMaxNumberOfLines',
        'max_supply' => 'setMaxSupply',
        'price' => 'setPrice',
        'retain_authority' => 'setRetainAuthority',
        'seller_fee_basis_points' => 'setSellerFeeBasisPoints',
        'symbol' => 'setSymbol',
        'token_mint' => 'setTokenMint',
        'uuid' => 'setUuid',
        'wallet' => 'setWallet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authority' => 'getAuthority',
        'bump' => 'getBump',
        'candy_machine_id' => 'getCandyMachineId',
        'config_address' => 'getConfigAddress',
        'creators' => 'getCreators',
        'go_live_date' => 'getGoLiveDate',
        'is_mutable' => 'getIsMutable',
        'items_available' => 'getItemsAvailable',
        'items_redeemed' => 'getItemsRedeemed',
        'max_number_of_lines' => 'getMaxNumberOfLines',
        'max_supply' => 'getMaxSupply',
        'price' => 'getPrice',
        'retain_authority' => 'getRetainAuthority',
        'seller_fee_basis_points' => 'getSellerFeeBasisPoints',
        'symbol' => 'getSymbol',
        'token_mint' => 'getTokenMint',
        'uuid' => 'getUuid',
        'wallet' => 'getWallet'
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
        $this->container['authority'] = $data['authority'] ?? null;
        $this->container['bump'] = $data['bump'] ?? null;
        $this->container['candy_machine_id'] = $data['candy_machine_id'] ?? null;
        $this->container['config_address'] = $data['config_address'] ?? null;
        $this->container['creators'] = $data['creators'] ?? null;
        $this->container['go_live_date'] = $data['go_live_date'] ?? null;
        $this->container['is_mutable'] = $data['is_mutable'] ?? null;
        $this->container['items_available'] = $data['items_available'] ?? null;
        $this->container['items_redeemed'] = $data['items_redeemed'] ?? null;
        $this->container['max_number_of_lines'] = $data['max_number_of_lines'] ?? null;
        $this->container['max_supply'] = $data['max_supply'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['retain_authority'] = $data['retain_authority'] ?? null;
        $this->container['seller_fee_basis_points'] = $data['seller_fee_basis_points'] ?? null;
        $this->container['symbol'] = $data['symbol'] ?? null;
        $this->container['token_mint'] = $data['token_mint'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['wallet'] = $data['wallet'] ?? null;
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
     * Gets authority
     *
     * @return string|null
     */
    public function getAuthority()
    {
        return $this->container['authority'];
    }

    /**
     * Sets authority
     *
     * @param string|null $authority The update authority of the candy machine
     *
     * @return self
     */
    public function setAuthority($authority)
    {
        $this->container['authority'] = $authority;

        return $this;
    }

    /**
     * Gets bump
     *
     * @return float|null
     */
    public function getBump()
    {
        return $this->container['bump'];
    }

    /**
     * Sets bump
     *
     * @param float|null $bump bump
     *
     * @return self
     */
    public function setBump($bump)
    {
        $this->container['bump'] = $bump;

        return $this;
    }

    /**
     * Gets candy_machine_id
     *
     * @return string|null
     */
    public function getCandyMachineId()
    {
        return $this->container['candy_machine_id'];
    }

    /**
     * Sets candy_machine_id
     *
     * @param string|null $candy_machine_id The ID of the candy machine
     *
     * @return self
     */
    public function setCandyMachineId($candy_machine_id)
    {
        $this->container['candy_machine_id'] = $candy_machine_id;

        return $this;
    }

    /**
     * Gets config_address
     *
     * @return string|null
     */
    public function getConfigAddress()
    {
        return $this->container['config_address'];
    }

    /**
     * Sets config_address
     *
     * @param string|null $config_address The configuration public key address of the candy machine
     *
     * @return self
     */
    public function setConfigAddress($config_address)
    {
        $this->container['config_address'] = $config_address;

        return $this;
    }

    /**
     * Gets creators
     *
     * @return \OpenAPI\Client\Model\GetCandyMetadataResponseCreators[]|null
     */
    public function getCreators()
    {
        return $this->container['creators'];
    }

    /**
     * Sets creators
     *
     * @param \OpenAPI\Client\Model\GetCandyMetadataResponseCreators[]|null $creators creators
     *
     * @return self
     */
    public function setCreators($creators)
    {
        $this->container['creators'] = $creators;

        return $this;
    }

    /**
     * Gets go_live_date
     *
     * @return float|null
     */
    public function getGoLiveDate()
    {
        return $this->container['go_live_date'];
    }

    /**
     * Sets go_live_date
     *
     * @param float|null $go_live_date The unix timestamp of the start date of the candy machine
     *
     * @return self
     */
    public function setGoLiveDate($go_live_date)
    {
        $this->container['go_live_date'] = $go_live_date;

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
     * Gets items_available
     *
     * @return float|null
     */
    public function getItemsAvailable()
    {
        return $this->container['items_available'];
    }

    /**
     * Sets items_available
     *
     * @param float|null $items_available The number of NFTs available for mint from the candy machine
     *
     * @return self
     */
    public function setItemsAvailable($items_available)
    {
        $this->container['items_available'] = $items_available;

        return $this;
    }

    /**
     * Gets items_redeemed
     *
     * @return float|null
     */
    public function getItemsRedeemed()
    {
        return $this->container['items_redeemed'];
    }

    /**
     * Sets items_redeemed
     *
     * @param float|null $items_redeemed The number of NFTs minted already from the candy machine
     *
     * @return self
     */
    public function setItemsRedeemed($items_redeemed)
    {
        $this->container['items_redeemed'] = $items_redeemed;

        return $this;
    }

    /**
     * Gets max_number_of_lines
     *
     * @return float|null
     */
    public function getMaxNumberOfLines()
    {
        return $this->container['max_number_of_lines'];
    }

    /**
     * Sets max_number_of_lines
     *
     * @param float|null $max_number_of_lines max_number_of_lines
     *
     * @return self
     */
    public function setMaxNumberOfLines($max_number_of_lines)
    {
        $this->container['max_number_of_lines'] = $max_number_of_lines;

        return $this;
    }

    /**
     * Gets max_supply
     *
     * @return float|null
     */
    public function getMaxSupply()
    {
        return $this->container['max_supply'];
    }

    /**
     * Sets max_supply
     *
     * @param float|null $max_supply max_supply
     *
     * @return self
     */
    public function setMaxSupply($max_supply)
    {
        $this->container['max_supply'] = $max_supply;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price The price in Lamports for minting an NFT from the candy machine. 1e9 Lamport  = 1 SOL
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets retain_authority
     *
     * @return bool|null
     */
    public function getRetainAuthority()
    {
        return $this->container['retain_authority'];
    }

    /**
     * Sets retain_authority
     *
     * @param bool|null $retain_authority retain_authority
     *
     * @return self
     */
    public function setRetainAuthority($retain_authority)
    {
        $this->container['retain_authority'] = $retain_authority;

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
     * @param float|null $seller_fee_basis_points The royalty the creators receive on each sale after the primary sale (the initial minting) (denominated in basis points (e.g., 75 basis points = 0.75%))
     *
     * @return self
     */
    public function setSellerFeeBasisPoints($seller_fee_basis_points)
    {
        $this->container['seller_fee_basis_points'] = $seller_fee_basis_points;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string|null $symbol symbol
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets token_mint
     *
     * @return string|null
     */
    public function getTokenMint()
    {
        return $this->container['token_mint'];
    }

    /**
     * Sets token_mint
     *
     * @param string|null $token_mint token_mint
     *
     * @return self
     */
    public function setTokenMint($token_mint)
    {
        $this->container['token_mint'] = $token_mint;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid The uuid of the candy machine
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets wallet
     *
     * @return string|null
     */
    public function getWallet()
    {
        return $this->container['wallet'];
    }

    /**
     * Sets wallet
     *
     * @param string|null $wallet The public key address of the wallet that recevies the proceeds from NFT mints
     *
     * @return self
     */
    public function setWallet($wallet)
    {
        $this->container['wallet'] = $wallet;

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


