<?php
/**
 * CandyMachineSearchRequest
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
 * # About  Our vision is to make it super easy to interact with the decentralized web. We want you to be able to do this in any coding language and do it easily and quickly.   You're a key part of our vision. We love feature requests! <a href=\"#section/Feature-Requests\">Make one!</a>  # How to Use the API  To use the API, you simply need to create an API key pair.  Doing so takes less than a minute. Simply go to <a target=\"_blank\" href=\"https://dashboard.theblockchainapi.com\">the dashboard</a>, create an account, and generate a key pair. You can now use this pair to make API requests. You must create your first pair via the dashboard.  # Feature Requests  Got a feature request? Submit it as an issue on <a target=\"_blank\" href=\"https://github.com/BL0CK-X/the-blockchain-api/issues/new/choose\">our GitHub repo</a> or [email us](mailto:info@theblockchainapi.com).  # Contact  <figure>     <img          width=\"40px\"         height=\"40px\"          src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/phone.svg\"     />     <figcaption style=\"textAlign:center;\">Text / Call: +1 (415) 888 4745 </figcaption> </figure> <a href=\"mailto:info@theblockchainapi.com\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/email.svg\"         />         <figcaption style=\"textAlign:center;\">Email us: info@theblockchainapi.com</figcaption>     </figure> </a> <a href=\"https://discord.gg/d49yzrZRAF\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/discord.svg\"         />         <figcaption style=\"textAlign:center;\">Join our Discord</figcaption>     </figure> </a> <a href=\"https://twitter.com/_BlockX_\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/twitter.svg\"         />          <figcaption style=\"textAlign:center;\">Follow us on Twitter</figcaption>     </figure> </a> <a href=\"https://github.com/BL0CK-X/the-blockchain-api\" target=\"_blank\">     <figure>         <img              width=\"40px\"             height=\"40px\"              src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/github.svg\"         />         <figcaption style=\"textAlign:center;\">Star us on Github</figcaption>     </figure> </a>  # Security  Common dogma is to never give out your seed phrase. We agree. It's a matter of security, and anyone who has your seed phrase can irreversibly empty your wallet.   <b>When using an API endpoint that requires a seed phrase, we highly recommend that users use or create a wallet that they do not use as their primary wallet.</b>   How you make this work depends on what you're doing. If you're minting an NFT for example, we recommend creating a new wallet and then transferring just enough SOL to that wallet to mint the NFT. This is possible on Solana because such transactions cost less than a penny. We will have more tutorials in the future that make it easier for you to be secure when using our API.  We have easy-to-use endpoints for <a href=\"#tag/Solana-Wallet/paths/~1solana~1wallet~1secret_recovery_phrase/post\">creating a new seed phrase</a> and then <a href=\"#tag/Solana-Wallet/paths/~1solana~1wallet~1public_key/post\">deriving a public key</a> to enable you to transfer to that new wallet.  Let's have a constructive dialog about this. Feel free to <a href=\"#section/Contact\">contact us</a>. I made a video discussing this matter <a target=\"_blank\" href=\"https://youtu.be/m9unUb8Z9qU\">here</a>.  Note: We have had a couple of individuals harrass and threaten us. These individuals did <b>not</b> try our API or speak to anyone who has used it. They simply saw that we require a seed phrase for certain endpoints and figured that the proper response was to attack us. (I explain why we do <a target=\"_blank\" href=\"https://youtu.be/m9unUb8Z9qU\">here</a>.) Such harrassment and threats are not only harmful, but they are also illegal, and we will report offenders. Do not harrass us. Rather, feel free to discuss your concerns with us and we will be more than happy to work with you to come up with a solution.  # Pricing  <b>Each user receives 500 free credits.</b>  You can learn more about our pricing <a href=\"https://dashboard.theblockchainapi.com/billing\" target=\"_blank\">here</a>.   We frequently do custom plans. If our pricing doesn't work for you, <a href=\"#section/Contact\">contact us</a>.  If you have questions, concerns, feedback, or ideas, <a href=\"#section/Contact\">contact us</a>.  # SDKs / API Wrappers  We have examples using both our <a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples\" target=\"_blank\">Python wrapper and our JavaScript wrapper here</a>.  We have built a custom <a href=\"https://github.com/BL0CK-X/the-blockchain-api-python-wrapper\" target=\"_blank\">Python wrapper</a>.  `pip install theblockchainapi`  We also have published a <a href=\"https://github.com/BL0CK-X/theblockchainapi-javascript-wrapper\" target=\"_blank\">JavaScript Wrapper</a>.  `npm install theblockchainapi`  We also have auto-generated wrappers for the following languages: - <a href=\"https://github.com/BL0CK-X/theblockchainapi-go-wrapper\" target = \"_blank\">Go</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-java-wrapper\" target = \"_blank\">Java</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-kotlin-wrapper\" target = \"_blank\">Kotlin</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-php-wrapper\" target = \"_blank\">PHP</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-swift-wrapper\" target = \"_blank\">Swift5</a> - <a href=\"https://github.com/BL0CK-X/theblockchainapi-typescript-wrapper\" target = \"_blank\">TypeScript</a>  If you would like a different language as well, submit an issue <a href=\"https://github.com/BL0CK-X/theblockchainapi-wrappers/issues/new\" target=\"_blank\">here</a>.  If you run into any bugs with the wrappers, submit an issue <a href=\"https://github.com/BL0CK-X/theblockchainapi-wrappers/issues/new\" target=\"_blank\">here</a>.
 *
 * The version of the OpenAPI document: null
 * Contact: info@theblockchainapi.com
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
 * CandyMachineSearchRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CandyMachineSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CandyMachineSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'update_authority' => 'string',
        'update_authority_search_method' => 'string',
        'config_address' => 'string',
        'config_address_search_method' => 'string',
        'uuid' => 'string',
        'uuid_search_method' => 'string',
        'symbol' => 'string',
        'symbol_search_method' => 'string',
        'nft_name' => 'string',
        'nft_name_index' => 'string',
        'nft_name_search_method' => 'string',
        'network' => 'string',
        'candy_machine_contract_version' => 'string'
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
        'config_address' => null,
        'config_address_search_method' => null,
        'uuid' => null,
        'uuid_search_method' => null,
        'symbol' => null,
        'symbol_search_method' => null,
        'nft_name' => null,
        'nft_name_index' => null,
        'nft_name_search_method' => null,
        'network' => null,
        'candy_machine_contract_version' => null
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
        'config_address' => 'config_address',
        'config_address_search_method' => 'config_address_search_method',
        'uuid' => 'uuid',
        'uuid_search_method' => 'uuid_search_method',
        'symbol' => 'symbol',
        'symbol_search_method' => 'symbol_search_method',
        'nft_name' => 'nft_name',
        'nft_name_index' => 'nft_name_index',
        'nft_name_search_method' => 'nft_name_search_method',
        'network' => 'network',
        'candy_machine_contract_version' => 'candy_machine_contract_version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'update_authority' => 'setUpdateAuthority',
        'update_authority_search_method' => 'setUpdateAuthoritySearchMethod',
        'config_address' => 'setConfigAddress',
        'config_address_search_method' => 'setConfigAddressSearchMethod',
        'uuid' => 'setUuid',
        'uuid_search_method' => 'setUuidSearchMethod',
        'symbol' => 'setSymbol',
        'symbol_search_method' => 'setSymbolSearchMethod',
        'nft_name' => 'setNftName',
        'nft_name_index' => 'setNftNameIndex',
        'nft_name_search_method' => 'setNftNameSearchMethod',
        'network' => 'setNetwork',
        'candy_machine_contract_version' => 'setCandyMachineContractVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'update_authority' => 'getUpdateAuthority',
        'update_authority_search_method' => 'getUpdateAuthoritySearchMethod',
        'config_address' => 'getConfigAddress',
        'config_address_search_method' => 'getConfigAddressSearchMethod',
        'uuid' => 'getUuid',
        'uuid_search_method' => 'getUuidSearchMethod',
        'symbol' => 'getSymbol',
        'symbol_search_method' => 'getSymbolSearchMethod',
        'nft_name' => 'getNftName',
        'nft_name_index' => 'getNftNameIndex',
        'nft_name_search_method' => 'getNftNameSearchMethod',
        'network' => 'getNetwork',
        'candy_machine_contract_version' => 'getCandyMachineContractVersion'
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
    const CONFIG_ADDRESS_SEARCH_METHOD_EXACT_MATCH = 'exact_match';
    const UUID_SEARCH_METHOD_EXACT_MATCH = 'exact_match';
    const SYMBOL_SEARCH_METHOD_BEGINS_WITH = 'begins_with';
    const SYMBOL_SEARCH_METHOD_EXACT_MATCH = 'exact_match';
    const NFT_NAME_SEARCH_METHOD_BEGINS_WITH = 'begins_with';
    const NFT_NAME_SEARCH_METHOD_EXACT_MATCH = 'exact_match';
    const NETWORK_DEVNET = 'devnet';
    const NETWORK_MAINNET_BETA = 'mainnet-beta';
    const CANDY_MACHINE_CONTRACT_VERSION_V1 = 'v1';
    const CANDY_MACHINE_CONTRACT_VERSION_V2 = 'v2';

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
    public function getConfigAddressSearchMethodAllowableValues()
    {
        return [
            self::CONFIG_ADDRESS_SEARCH_METHOD_EXACT_MATCH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUuidSearchMethodAllowableValues()
    {
        return [
            self::UUID_SEARCH_METHOD_EXACT_MATCH,
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
    public function getNftNameSearchMethodAllowableValues()
    {
        return [
            self::NFT_NAME_SEARCH_METHOD_BEGINS_WITH,
            self::NFT_NAME_SEARCH_METHOD_EXACT_MATCH,
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCandyMachineContractVersionAllowableValues()
    {
        return [
            self::CANDY_MACHINE_CONTRACT_VERSION_V1,
            self::CANDY_MACHINE_CONTRACT_VERSION_V2,
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
        $this->container['config_address'] = $data['config_address'] ?? null;
        $this->container['config_address_search_method'] = $data['config_address_search_method'] ?? 'exact_match';
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['uuid_search_method'] = $data['uuid_search_method'] ?? 'exact_match';
        $this->container['symbol'] = $data['symbol'] ?? null;
        $this->container['symbol_search_method'] = $data['symbol_search_method'] ?? 'exact_match';
        $this->container['nft_name'] = $data['nft_name'] ?? null;
        $this->container['nft_name_index'] = $data['nft_name_index'] ?? '0';
        $this->container['nft_name_search_method'] = $data['nft_name_search_method'] ?? 'exact_match';
        $this->container['network'] = $data['network'] ?? 'devnet';
        $this->container['candy_machine_contract_version'] = $data['candy_machine_contract_version'] ?? 'v1';
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

        $allowedValues = $this->getConfigAddressSearchMethodAllowableValues();
        if (!is_null($this->container['config_address_search_method']) && !in_array($this->container['config_address_search_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'config_address_search_method', must be one of '%s'",
                $this->container['config_address_search_method'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUuidSearchMethodAllowableValues();
        if (!is_null($this->container['uuid_search_method']) && !in_array($this->container['uuid_search_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'uuid_search_method', must be one of '%s'",
                $this->container['uuid_search_method'],
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

        $allowedValues = $this->getNftNameSearchMethodAllowableValues();
        if (!is_null($this->container['nft_name_search_method']) && !in_array($this->container['nft_name_search_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'nft_name_search_method', must be one of '%s'",
                $this->container['nft_name_search_method'],
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

        $allowedValues = $this->getCandyMachineContractVersionAllowableValues();
        if (!is_null($this->container['candy_machine_contract_version']) && !in_array($this->container['candy_machine_contract_version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'candy_machine_contract_version', must be one of '%s'",
                $this->container['candy_machine_contract_version'],
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
     * @param string|null $update_authority The public key of the update authority of the candy machine
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
     * @param string|null $config_address The public key of the configuration of the candy machine
     *
     * @return self
     */
    public function setConfigAddress($config_address)
    {
        $this->container['config_address'] = $config_address;

        return $this;
    }

    /**
     * Gets config_address_search_method
     *
     * @return string|null
     */
    public function getConfigAddressSearchMethod()
    {
        return $this->container['config_address_search_method'];
    }

    /**
     * Sets config_address_search_method
     *
     * @param string|null $config_address_search_method Only `exact_match` supported at this time
     *
     * @return self
     */
    public function setConfigAddressSearchMethod($config_address_search_method)
    {
        $allowedValues = $this->getConfigAddressSearchMethodAllowableValues();
        if (!is_null($config_address_search_method) && !in_array($config_address_search_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'config_address_search_method', must be one of '%s'",
                    $config_address_search_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['config_address_search_method'] = $config_address_search_method;

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
     * @param string|null $uuid The alphanumeric string of length six that corresponds to the candy machine. This is NOT the candy machine ID.  This is the first six letters of the configuration address and is also used to identify the candy machine. An example is `4zKV6i`.
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets uuid_search_method
     *
     * @return string|null
     */
    public function getUuidSearchMethod()
    {
        return $this->container['uuid_search_method'];
    }

    /**
     * Sets uuid_search_method
     *
     * @param string|null $uuid_search_method Only `exact_match` supported at this time
     *
     * @return self
     */
    public function setUuidSearchMethod($uuid_search_method)
    {
        $allowedValues = $this->getUuidSearchMethodAllowableValues();
        if (!is_null($uuid_search_method) && !in_array($uuid_search_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'uuid_search_method', must be one of '%s'",
                    $uuid_search_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['uuid_search_method'] = $uuid_search_method;

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
     * Gets nft_name
     *
     * @return string|null
     */
    public function getNftName()
    {
        return $this->container['nft_name'];
    }

    /**
     * Sets nft_name
     *
     * @param string|null $nft_name The name of an NFT on the candy machine, minted or unminted. For example, to find The Solana Money Boys candy machine, you already know that each NFT is named \"Solana Money Boy #0\", \"Solana Money Boy #1\", and so on. So you could search with  nft_name=\"Solana Money Boy #0\", nft_name_index=0, nft_name_search_method='exact_match', for example, which would return the candy machine ID. This also works with candy machines that are not live but are uploaded.
     *
     * @return self
     */
    public function setNftName($nft_name)
    {
        $this->container['nft_name'] = $nft_name;

        return $this;
    }

    /**
     * Gets nft_name_index
     *
     * @return string|null
     */
    public function getNftNameIndex()
    {
        return $this->container['nft_name_index'];
    }

    /**
     * Sets nft_name_index
     *
     * @param string|null $nft_name_index The index of the NFT to check, e.g., the 2nd NFT would have an index of 1. We cannot search all NFTs on a candy machine currently, so you must search an NFT at a particular position, such as the first, second, and so on. In general, nft_name_index=0 works for most use cases.
     *
     * @return self
     */
    public function setNftNameIndex($nft_name_index)
    {
        $this->container['nft_name_index'] = $nft_name_index;

        return $this;
    }

    /**
     * Gets nft_name_search_method
     *
     * @return string|null
     */
    public function getNftNameSearchMethod()
    {
        return $this->container['nft_name_search_method'];
    }

    /**
     * Sets nft_name_search_method
     *
     * @param string|null $nft_name_search_method nft_name_search_method
     *
     * @return self
     */
    public function setNftNameSearchMethod($nft_name_search_method)
    {
        $allowedValues = $this->getNftNameSearchMethodAllowableValues();
        if (!is_null($nft_name_search_method) && !in_array($nft_name_search_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'nft_name_search_method', must be one of '%s'",
                    $nft_name_search_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['nft_name_search_method'] = $nft_name_search_method;

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
     * Gets candy_machine_contract_version
     *
     * @return string|null
     */
    public function getCandyMachineContractVersion()
    {
        return $this->container['candy_machine_contract_version'];
    }

    /**
     * Sets candy_machine_contract_version
     *
     * @param string|null $candy_machine_contract_version The candy machine contract you want to search.  If you want to search `v1` candy machines, set this to `v1`. If you want to search `v2` candy machines. set this to `v2`.
     *
     * @return self
     */
    public function setCandyMachineContractVersion($candy_machine_contract_version)
    {
        $allowedValues = $this->getCandyMachineContractVersionAllowableValues();
        if (!is_null($candy_machine_contract_version) && !in_array($candy_machine_contract_version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'candy_machine_contract_version', must be one of '%s'",
                    $candy_machine_contract_version,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['candy_machine_contract_version'] = $candy_machine_contract_version;

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


