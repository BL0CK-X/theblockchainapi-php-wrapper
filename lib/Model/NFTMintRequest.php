<?php
/**
 * NFTMintRequest
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
 * NFTMintRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NFTMintRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NFTMintRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'wallet' => '\OpenAPI\Client\Model\Wallet',
        'return_compiled_transaction' => 'bool',
        'name' => 'string',
        'symbol' => 'string',
        'description' => 'string',
        'upload_method' => 'string',
        'uri' => 'string',
        'image_url' => 'string',
        'uri_metadata' => 'object',
        'is_mutable' => 'bool',
        'is_master_edition' => 'bool',
        'seller_fee_basis_points' => 'float',
        'creators' => 'string[]',
        'share' => 'int[]',
        'mint_to_public_key' => 'string',
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
        'wallet' => null,
        'return_compiled_transaction' => null,
        'name' => null,
        'symbol' => null,
        'description' => null,
        'upload_method' => null,
        'uri' => null,
        'image_url' => null,
        'uri_metadata' => null,
        'is_mutable' => null,
        'is_master_edition' => null,
        'seller_fee_basis_points' => null,
        'creators' => null,
        'share' => null,
        'mint_to_public_key' => null,
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
        'wallet' => 'wallet',
        'return_compiled_transaction' => 'return_compiled_transaction',
        'name' => 'name',
        'symbol' => 'symbol',
        'description' => 'description',
        'upload_method' => 'upload_method',
        'uri' => 'uri',
        'image_url' => 'image_url',
        'uri_metadata' => 'uri_metadata',
        'is_mutable' => 'is_mutable',
        'is_master_edition' => 'is_master_edition',
        'seller_fee_basis_points' => 'seller_fee_basis_points',
        'creators' => 'creators',
        'share' => 'share',
        'mint_to_public_key' => 'mint_to_public_key',
        'network' => 'network'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wallet' => 'setWallet',
        'return_compiled_transaction' => 'setReturnCompiledTransaction',
        'name' => 'setName',
        'symbol' => 'setSymbol',
        'description' => 'setDescription',
        'upload_method' => 'setUploadMethod',
        'uri' => 'setUri',
        'image_url' => 'setImageUrl',
        'uri_metadata' => 'setUriMetadata',
        'is_mutable' => 'setIsMutable',
        'is_master_edition' => 'setIsMasterEdition',
        'seller_fee_basis_points' => 'setSellerFeeBasisPoints',
        'creators' => 'setCreators',
        'share' => 'setShare',
        'mint_to_public_key' => 'setMintToPublicKey',
        'network' => 'setNetwork'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wallet' => 'getWallet',
        'return_compiled_transaction' => 'getReturnCompiledTransaction',
        'name' => 'getName',
        'symbol' => 'getSymbol',
        'description' => 'getDescription',
        'upload_method' => 'getUploadMethod',
        'uri' => 'getUri',
        'image_url' => 'getImageUrl',
        'uri_metadata' => 'getUriMetadata',
        'is_mutable' => 'getIsMutable',
        'is_master_edition' => 'getIsMasterEdition',
        'seller_fee_basis_points' => 'getSellerFeeBasisPoints',
        'creators' => 'getCreators',
        'share' => 'getShare',
        'mint_to_public_key' => 'getMintToPublicKey',
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

    const UPLOAD_METHOD_S3 = 'S3';
    const UPLOAD_METHOD_URI = 'URI';
    const NETWORK_DEVNET = 'devnet';
    const NETWORK_MAINNET_BETA = 'mainnet-beta';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUploadMethodAllowableValues()
    {
        return [
            self::UPLOAD_METHOD_S3,
            self::UPLOAD_METHOD_URI,
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
        $this->container['wallet'] = $data['wallet'] ?? null;
        $this->container['return_compiled_transaction'] = $data['return_compiled_transaction'] ?? false;
        $this->container['name'] = $data['name'] ?? '';
        $this->container['symbol'] = $data['symbol'] ?? '';
        $this->container['description'] = $data['description'] ?? '';
        $this->container['upload_method'] = $data['upload_method'] ?? 'S3';
        $this->container['uri'] = $data['uri'] ?? '';
        $this->container['image_url'] = $data['image_url'] ?? '';
        $this->container['uri_metadata'] = $data['uri_metadata'] ?? null;
        $this->container['is_mutable'] = $data['is_mutable'] ?? true;
        $this->container['is_master_edition'] = $data['is_master_edition'] ?? true;
        $this->container['seller_fee_basis_points'] = $data['seller_fee_basis_points'] ?? 0;
        $this->container['creators'] = $data['creators'] ?? null;
        $this->container['share'] = $data['share'] ?? null;
        $this->container['mint_to_public_key'] = $data['mint_to_public_key'] ?? 'The public key of the wallet provided';
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

        $allowedValues = $this->getUploadMethodAllowableValues();
        if (!is_null($this->container['upload_method']) && !in_array($this->container['upload_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'upload_method', must be one of '%s'",
                $this->container['upload_method'],
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
     * Gets wallet
     *
     * @return \OpenAPI\Client\Model\Wallet|null
     */
    public function getWallet()
    {
        return $this->container['wallet'];
    }

    /**
     * Sets wallet
     *
     * @param \OpenAPI\Client\Model\Wallet|null $wallet wallet
     *
     * @return self
     */
    public function setWallet($wallet)
    {
        $this->container['wallet'] = $wallet;

        return $this;
    }

    /**
     * Gets return_compiled_transaction
     *
     * @return bool|null
     */
    public function getReturnCompiledTransaction()
    {
        return $this->container['return_compiled_transaction'];
    }

    /**
     * Sets return_compiled_transaction
     *
     * @param bool|null $return_compiled_transaction If `true`, the transaction to mint the NFT will not be submitted or signed. It will be returned to you in a raw form that you can then sign with a wallet (e.g., Phantom) or code. No `wallet` authentication information is required (thus, you do you have to supply a seed phrase or private key). See a Python example [here](https://github.com/BL0CK-X/blockchain-api/blob/main/third-party-api-examples/me-buy-sell.py). If `false` (the default option), then `wallet` is required. We sign and submit the transaction for you, which uses your wallet to mint the NFT. No further action is required on your part, and the NFT is minted. Read more on security [here](#section/Security).
     *
     * @return self
     */
    public function setReturnCompiledTransaction($return_compiled_transaction)
    {
        $this->container['return_compiled_transaction'] = $return_compiled_transaction;

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
     * @param string|null $name The name of the token. Limited to 32 characters. Stored on the blockchain.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $symbol The symbol of the token. Limited to 10 characters. Stored on the blockchain.
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description of the NFT. Limited to 2000 characters. Not stored on the blockchain.         If you are providing your own `uri` (see above), then you do not need to provide this.  If you are not providing your own `uri` and you do not provide this, then there wills simply be no description.  Only provide a value for `description` if the `upload_method` is set to `S3` (see the description for `upload_method` above).
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets upload_method
     *
     * @return string|null
     */
    public function getUploadMethod()
    {
        return $this->container['upload_method'];
    }

    /**
     * Sets upload_method
     *
     * @param string|null $upload_method When you choose `S3`, all of the `name`, `description`, `symbol`, `uri_metadata`, and `image_url` are put into a JSON dictionary and uploaded to S3 as a JSON file.  This is uploaded to an AWS S3 bucket we own, and is an option we provide at no charge. The S3 link to this file is stored in the NFT's account on the blockchain. Learn more  <a href=\"https://blockchainapi.com/2022/01/18/how-to-format-off-chain-nft-metadata.html\" target=\"_blank\">here</a>.  When you choose `URI`, the `uri` you provide is stored on the blockchain, and the `uri_metadata`, `description`, and `image_url` are ignored and not stored anywhere. `S3` is NOT involved in this case.   An example of a `uri` you would provide is an Arweave URL, like this: `https://arweave.net/_Y8tETU3FbAFZSM1wXNeWPweWwrW9K6oSF1SYi_bH9A`.
     *
     * @return self
     */
    public function setUploadMethod($upload_method)
    {
        $allowedValues = $this->getUploadMethodAllowableValues();
        if (!is_null($upload_method) && !in_array($upload_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'upload_method', must be one of '%s'",
                    $upload_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['upload_method'] = $upload_method;

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
     * @param string|null $uri The `uri` you provide is stored on the blockchain, and the `uri_metadata`, `description`, and `image_url` are ignored and not stored anywhere. `S3` is NOT involved in this case.   Read more <a href=\"https://blockchainapi.com/2022/01/18/how-to-format-off-chain-nft-metadata.html\" target=\"_blank\">here</a>.  An example of a `uri` you would provide is an Arweave URL, like this: `https://arweave.net/_Y8tETU3FbAFZSM1wXNeWPweWwrW9K6oSF1SYi_bH9A`.  Only provide a value for `uri` if the `upload_method` is set to `URI` (see the description for `upload_method` above).
     *
     * @return self
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string|null $image_url The URL of the image of the NFT.         If you are providing your own `uri` (see above), then you do not need to provide this.  If you are not providing your own `uri` and you do not provide this, then there wills simply be no image.  Only provide a value for `image_url` if the `upload_method` is set to `S3` (see the description for `upload_method` above).
     *
     * @return self
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets uri_metadata
     *
     * @return object|null
     */
    public function getUriMetadata()
    {
        return $this->container['uri_metadata'];
    }

    /**
     * Sets uri_metadata
     *
     * @param object|null $uri_metadata The off-chain metadata.        If you are providing your own `uri` (see above), then you do not need to provide this.  If you are not providing your own `uri` and you do not provide this, then there wills simply be no image.  Only provide a value for `uri_metadata` if the `upload_method` is set to `S3` (see the description for `upload_method` above).  Learn more about how to format this metadata <a href=\"https://blockchainapi.com/2022/01/18/how-to-format-off-chain-nft-metadata.html\" target=\"_blank\">here</a>.
     *
     * @return self
     */
    public function setUriMetadata($uri_metadata)
    {
        $this->container['uri_metadata'] = $uri_metadata;

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
     * @param bool|null $is_mutable Indicates whether or not the NFT created is mutable. If mutable, the NFT can be updated later. Once set to immutable, the NFT is unable to be changed.
     *
     * @return self
     */
    public function setIsMutable($is_mutable)
    {
        $this->container['is_mutable'] = $is_mutable;

        return $this;
    }

    /**
     * Gets is_master_edition
     *
     * @return bool|null
     */
    public function getIsMasterEdition()
    {
        return $this->container['is_master_edition'];
    }

    /**
     * Sets is_master_edition
     *
     * @param bool|null $is_master_edition Whether or not the NFT is a master edition NFT. Saves about 0.001 SOL in transaction costs when set to false.
     *
     * @return self
     */
    public function setIsMasterEdition($is_master_edition)
    {
        $this->container['is_master_edition'] = $is_master_edition;

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
     * @param float|null $seller_fee_basis_points Valid values from 0 to 10000. Must be an integer.  Represents the number of basis points that the seller receives as a fee upon sale.  E.g., 100 indicates a 1% seller fee. Seller does not receive a fee when \"primary_sale_has_happened\" is set to true.  Will be set to false after first sale has occurred.
     *
     * @return self
     */
    public function setSellerFeeBasisPoints($seller_fee_basis_points)
    {
        $this->container['seller_fee_basis_points'] = $seller_fee_basis_points;

        return $this;
    }

    /**
     * Gets creators
     *
     * @return string[]|null
     */
    public function getCreators()
    {
        return $this->container['creators'];
    }

    /**
     * Sets creators
     *
     * @param string[]|null $creators A JSON encoded string representing an array / list.  The designated creators of the NFT. Length of the creator list must match length of the list of share.  Valid lengths of the list range from 1 to 5. Each item in the list must be a valid public key address.    Only the public key corresponding to the seed phrase provided will be marked as verified. Any other creators supplied will be marked as unverified.
     *
     * @return self
     */
    public function setCreators($creators)
    {
        $this->container['creators'] = $creators;

        return $this;
    }

    /**
     * Gets share
     *
     * @return int[]|null
     */
    public function getShare()
    {
        return $this->container['share'];
    }

    /**
     * Sets share
     *
     * @param int[]|null $share A JSON encoded string representing an array / list.  The share of the royalty that each creator gets. Valid values range from 0 to 100. Sum of the values must equal 100.  Only integer value accepted. Length of the share list must match length of the list of creators.
     *
     * @return self
     */
    public function setShare($share)
    {
        $this->container['share'] = $share;

        return $this;
    }

    /**
     * Gets mint_to_public_key
     *
     * @return string|null
     */
    public function getMintToPublicKey()
    {
        return $this->container['mint_to_public_key'];
    }

    /**
     * Sets mint_to_public_key
     *
     * @param string|null $mint_to_public_key Assign ownership of the NFT to the public key address given by `mint_to_public_key`
     *
     * @return self
     */
    public function setMintToPublicKey($mint_to_public_key)
    {
        $this->container['mint_to_public_key'] = $mint_to_public_key;

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
     * @param string|null $network This determines which network you choose to run the API calls on. We recommend first testing on the devnet, because minting an NFT costs a little above 0.01 SOL, which is about $1.60 at the time of this writing.  When you run on the mainnet-beta, each successful call will deduct approximately that much. When you run on the devnet, that amount is deducted from a simulated amount, so you are not paying with real SOL. To get SOL on the devnet,   airdrop SOL to this address using the CLI. Keep in mind that you can only do this every so often. If you are rate-limited, consider using a VPN and trying again, or just waiting. To get SOL on the mainnet-beta, you    must transfer real SOL to this account from another wallet (e.g., from another wallet you own, from an exchange, etc.). We hope to make this process easier in the future, and if you have any suggestions, please add them    as an issue on our <a href=\"https://github.com/BL0CK-X/the-blockchain-api\" target=\"_blank\">GitHub repository</a> for the API. To get a fee estimate, make a GET requests to the <a href=\"#tag/Solana-NFT/paths/~1solana~1nft~1mint~1fee/get\">v1/solana/nft/mint/fee endpoint</a> (details in sidebar).
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


