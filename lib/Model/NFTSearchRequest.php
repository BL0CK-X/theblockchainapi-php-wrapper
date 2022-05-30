<?php
/**
 * NFTSearchRequest
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
 * NFTSearchRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NFTSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NFTSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'update_authority' => 'string',
        'update_authority_search_method' => 'string',
        'mint_address' => 'string',
        'mint_address_search_method' => 'string',
        'name' => 'string',
        'name_search_method' => 'string',
        'uri' => 'string',
        'uri_search_method' => 'string',
        'symbol' => 'string',
        'symbol_search_method' => 'string',
        'network' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'update_authority' => null,
        'update_authority_search_method' => null,
        'mint_address' => null,
        'mint_address_search_method' => null,
        'name' => null,
        'name_search_method' => null,
        'uri' => null,
        'uri_search_method' => null,
        'symbol' => null,
        'symbol_search_method' => null,
        'network' => null
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
        'update_authority' => 'update_authority',
        'update_authority_search_method' => 'update_authority_search_method',
        'mint_address' => 'mint_address',
        'mint_address_search_method' => 'mint_address_search_method',
        'name' => 'name',
        'name_search_method' => 'name_search_method',
        'uri' => 'uri',
        'uri_search_method' => 'uri_search_method',
        'symbol' => 'symbol',
        'symbol_search_method' => 'symbol_search_method',
        'network' => 'network'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'update_authority' => 'setUpdateAuthority',
        'update_authority_search_method' => 'setUpdateAuthoritySearchMethod',
        'mint_address' => 'setMintAddress',
        'mint_address_search_method' => 'setMintAddressSearchMethod',
        'name' => 'setName',
        'name_search_method' => 'setNameSearchMethod',
        'uri' => 'setUri',
        'uri_search_method' => 'setUriSearchMethod',
        'symbol' => 'setSymbol',
        'symbol_search_method' => 'setSymbolSearchMethod',
        'network' => 'setNetwork'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'update_authority' => 'getUpdateAuthority',
        'update_authority_search_method' => 'getUpdateAuthoritySearchMethod',
        'mint_address' => 'getMintAddress',
        'mint_address_search_method' => 'getMintAddressSearchMethod',
        'name' => 'getName',
        'name_search_method' => 'getNameSearchMethod',
        'uri' => 'getUri',
        'uri_search_method' => 'getUriSearchMethod',
        'symbol' => 'getSymbol',
        'symbol_search_method' => 'getSymbolSearchMethod',
        'network' => 'getNetwork'
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

    const UPDATE_AUTHORITY_SEARCH_METHOD_EXACT_MATCH = 'exact_match';
    const MINT_ADDRESS_SEARCH_METHOD_EXACT_MATCH = 'exact_match';
    const NAME_SEARCH_METHOD_BEGINS_WITH = 'begins_with';
    const NAME_SEARCH_METHOD_EXACT_MATCH = 'exact_match';
    const URI_SEARCH_METHOD_BEGINS_WITH = 'begins_with';
    const URI_SEARCH_METHOD_EXACT_MATCH = 'exact_match';
    const SYMBOL_SEARCH_METHOD_BEGINS_WITH = 'begins_with';
    const SYMBOL_SEARCH_METHOD_EXACT_MATCH = 'exact_match';
    const NETWORK_DEVNET = 'devnet';
    const NETWORK_MAINNET_BETA = 'mainnet-beta';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUpdateAuthoritySearchMethodAllowableValues()
    {
        return [
            self::UPDATE_AUTHORITY_SEARCH_METHOD_EXACT_MATCH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMintAddressSearchMethodAllowableValues()
    {
        return [
            self::MINT_ADDRESS_SEARCH_METHOD_EXACT_MATCH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNameSearchMethodAllowableValues()
    {
        return [
            self::NAME_SEARCH_METHOD_BEGINS_WITH,
            self::NAME_SEARCH_METHOD_EXACT_MATCH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUriSearchMethodAllowableValues()
    {
        return [
            self::URI_SEARCH_METHOD_BEGINS_WITH,
            self::URI_SEARCH_METHOD_EXACT_MATCH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSymbolSearchMethodAllowableValues()
    {
        return [
            self::SYMBOL_SEARCH_METHOD_BEGINS_WITH,
            self::SYMBOL_SEARCH_METHOD_EXACT_MATCH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNetworkAllowableValues()
    {
        return [
            self::NETWORK_DEVNET,
            self::NETWORK_MAINNET_BETA,
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
        $this->container['update_authority'] = $data['update_authority'] ?? null;
        $this->container['update_authority_search_method'] = $data['update_authority_search_method'] ?? 'exact_match';
        $this->container['mint_address'] = $data['mint_address'] ?? null;
        $this->container['mint_address_search_method'] = $data['mint_address_search_method'] ?? 'exact_match';
        $this->container['name'] = $data['name'] ?? null;
        $this->container['name_search_method'] = $data['name_search_method'] ?? 'exact_match';
        $this->container['uri'] = $data['uri'] ?? null;
        $this->container['uri_search_method'] = $data['uri_search_method'] ?? 'exact_match';
        $this->container['symbol'] = $data['symbol'] ?? null;
        $this->container['symbol_search_method'] = $data['symbol_search_method'] ?? 'exact_match';
        $this->container['network'] = $data['network'] ?? 'devnet';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUpdateAuthoritySearchMethodAllowableValues();
        if (!is_null($this->container['update_authority_search_method']) && !in_array($this->container['update_authority_search_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'update_authority_search_method', must be one of '%s'",
                $this->container['update_authority_search_method'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMintAddressSearchMethodAllowableValues();
        if (!is_null($this->container['mint_address_search_method']) && !in_array($this->container['mint_address_search_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mint_address_search_method', must be one of '%s'",
                $this->container['mint_address_search_method'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNameSearchMethodAllowableValues();
        if (!is_null($this->container['name_search_method']) && !in_array($this->container['name_search_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'name_search_method', must be one of '%s'",
                $this->container['name_search_method'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUriSearchMethodAllowableValues();
        if (!is_null($this->container['uri_search_method']) && !in_array($this->container['uri_search_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'uri_search_method', must be one of '%s'",
                $this->container['uri_search_method'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSymbolSearchMethodAllowableValues();
        if (!is_null($this->container['symbol_search_method']) && !in_array($this->container['symbol_search_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'symbol_search_method', must be one of '%s'",
                $this->container['symbol_search_method'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNetworkAllowableValues();
        if (!is_null($this->container['network']) && !in_array($this->container['network'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'network', must be one of '%s'",
                $this->container['network'],
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
     * @param string|null $update_authority The public key of the update authority of the NFT
     *
     * @return self
     */
    public function setUpdateAuthority($update_authority)
    {
        $this->container['update_authority'] = $update_authority;

        return $this;
    }

    /**
     * Gets update_authority_search_method
     *
     * @return string|null
     */
    public function getUpdateAuthoritySearchMethod()
    {
        return $this->container['update_authority_search_method'];
    }

    /**
     * Sets update_authority_search_method
     *
     * @param string|null $update_authority_search_method Only `exact_match` supported at this time
     *
     * @return self
     */
    public function setUpdateAuthoritySearchMethod($update_authority_search_method)
    {
        $allowedValues = $this->getUpdateAuthoritySearchMethodAllowableValues();
        if (!is_null($update_authority_search_method) && !in_array($update_authority_search_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'update_authority_search_method', must be one of '%s'",
                    $update_authority_search_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['update_authority_search_method'] = $update_authority_search_method;

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
     * Gets mint_address_search_method
     *
     * @return string|null
     */
    public function getMintAddressSearchMethod()
    {
        return $this->container['mint_address_search_method'];
    }

    /**
     * Sets mint_address_search_method
     *
     * @param string|null $mint_address_search_method Only `exact_match` supported at this time
     *
     * @return self
     */
    public function setMintAddressSearchMethod($mint_address_search_method)
    {
        $allowedValues = $this->getMintAddressSearchMethodAllowableValues();
        if (!is_null($mint_address_search_method) && !in_array($mint_address_search_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mint_address_search_method', must be one of '%s'",
                    $mint_address_search_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mint_address_search_method'] = $mint_address_search_method;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the NFT
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_search_method
     *
     * @return string|null
     */
    public function getNameSearchMethod()
    {
        return $this->container['name_search_method'];
    }

    /**
     * Sets name_search_method
     *
     * @param string|null $name_search_method name_search_method
     *
     * @return self
     */
    public function setNameSearchMethod($name_search_method)
    {
        $allowedValues = $this->getNameSearchMethodAllowableValues();
        if (!is_null($name_search_method) && !in_array($name_search_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'name_search_method', must be one of '%s'",
                    $name_search_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['name_search_method'] = $name_search_method;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string|null
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string|null $uri The NFT's uri
     *
     * @return self
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets uri_search_method
     *
     * @return string|null
     */
    public function getUriSearchMethod()
    {
        return $this->container['uri_search_method'];
    }

    /**
     * Sets uri_search_method
     *
     * @param string|null $uri_search_method uri_search_method
     *
     * @return self
     */
    public function setUriSearchMethod($uri_search_method)
    {
        $allowedValues = $this->getUriSearchMethodAllowableValues();
        if (!is_null($uri_search_method) && !in_array($uri_search_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'uri_search_method', must be one of '%s'",
                    $uri_search_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['uri_search_method'] = $uri_search_method;

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
     * @param string|null $symbol The symbol associated with the candy machine
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets symbol_search_method
     *
     * @return string|null
     */
    public function getSymbolSearchMethod()
    {
        return $this->container['symbol_search_method'];
    }

    /**
     * Sets symbol_search_method
     *
     * @param string|null $symbol_search_method symbol_search_method
     *
     * @return self
     */
    public function setSymbolSearchMethod($symbol_search_method)
    {
        $allowedValues = $this->getSymbolSearchMethodAllowableValues();
        if (!is_null($symbol_search_method) && !in_array($symbol_search_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'symbol_search_method', must be one of '%s'",
                    $symbol_search_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['symbol_search_method'] = $symbol_search_method;

        return $this;
    }

    /**
     * Gets network
     *
     * @return string|null
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string|null $network network
     *
     * @return self
     */
    public function setNetwork($network)
    {
        $allowedValues = $this->getNetworkAllowableValues();
        if (!is_null($network) && !in_array($network, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'network', must be one of '%s'",
                    $network,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['network'] = $network;

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


