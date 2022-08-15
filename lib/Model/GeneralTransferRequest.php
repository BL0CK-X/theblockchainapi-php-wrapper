<?php
/**
 * GeneralTransferRequest
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
 * GeneralTransferRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GeneralTransferRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GeneralTransferRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recipient_blockchain_identifier' => 'string',
        'wallet' => '\OpenAPI\Client\Model\GeneralWallet',
        'token_blockchain_identifier' => 'string',
        'network' => 'string',
        'amount' => 'string',
        'return_compiled_transaction' => 'bool',
        'sender_blockchain_identifier' => 'string',
        'fee_payer_wallet' => '\OpenAPI\Client\Model\GeneralFeePayerWallet'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'recipient_blockchain_identifier' => null,
        'wallet' => null,
        'token_blockchain_identifier' => null,
        'network' => null,
        'amount' => null,
        'return_compiled_transaction' => null,
        'sender_blockchain_identifier' => null,
        'fee_payer_wallet' => null
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
        'recipient_blockchain_identifier' => 'recipient_blockchain_identifier',
        'wallet' => 'wallet',
        'token_blockchain_identifier' => 'token_blockchain_identifier',
        'network' => 'network',
        'amount' => 'amount',
        'return_compiled_transaction' => 'return_compiled_transaction',
        'sender_blockchain_identifier' => 'sender_blockchain_identifier',
        'fee_payer_wallet' => 'fee_payer_wallet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recipient_blockchain_identifier' => 'setRecipientBlockchainIdentifier',
        'wallet' => 'setWallet',
        'token_blockchain_identifier' => 'setTokenBlockchainIdentifier',
        'network' => 'setNetwork',
        'amount' => 'setAmount',
        'return_compiled_transaction' => 'setReturnCompiledTransaction',
        'sender_blockchain_identifier' => 'setSenderBlockchainIdentifier',
        'fee_payer_wallet' => 'setFeePayerWallet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recipient_blockchain_identifier' => 'getRecipientBlockchainIdentifier',
        'wallet' => 'getWallet',
        'token_blockchain_identifier' => 'getTokenBlockchainIdentifier',
        'network' => 'getNetwork',
        'amount' => 'getAmount',
        'return_compiled_transaction' => 'getReturnCompiledTransaction',
        'sender_blockchain_identifier' => 'getSenderBlockchainIdentifier',
        'fee_payer_wallet' => 'getFeePayerWallet'
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
        $this->container['recipient_blockchain_identifier'] = $data['recipient_blockchain_identifier'] ?? null;
        $this->container['wallet'] = $data['wallet'] ?? null;
        $this->container['token_blockchain_identifier'] = $data['token_blockchain_identifier'] ?? null;
        $this->container['network'] = $data['network'] ?? null;
        $this->container['amount'] = $data['amount'] ?? '1';
        $this->container['return_compiled_transaction'] = $data['return_compiled_transaction'] ?? false;
        $this->container['sender_blockchain_identifier'] = $data['sender_blockchain_identifier'] ?? 'null';
        $this->container['fee_payer_wallet'] = $data['fee_payer_wallet'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['recipient_blockchain_identifier'] === null) {
            $invalidProperties[] = "'recipient_blockchain_identifier' can't be null";
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
     * Gets recipient_blockchain_identifier
     *
     * @return string
     */
    public function getRecipientBlockchainIdentifier()
    {
        return $this->container['recipient_blockchain_identifier'];
    }

    /**
     * Sets recipient_blockchain_identifier
     *
     * @param string $recipient_blockchain_identifier The blockchain identifier of the recipient to whom you want to send a token or NFT.  On Ethereum, this is the hex public address of the recipient (e.g., `0x150865ca659204a9a0cd0da00296c6b5db441172`)  On Solana, this is the public key of the recipient (e.g., `EW3nXn7X4NTWFKWaJgxKrFNoTSkop1cBUVHA21zrfF6u`).
     *
     * @return self
     */
    public function setRecipientBlockchainIdentifier($recipient_blockchain_identifier)
    {
        $this->container['recipient_blockchain_identifier'] = $recipient_blockchain_identifier;

        return $this;
    }

    /**
     * Gets wallet
     *
     * @return \OpenAPI\Client\Model\GeneralWallet|null
     */
    public function getWallet()
    {
        return $this->container['wallet'];
    }

    /**
     * Sets wallet
     *
     * @param \OpenAPI\Client\Model\GeneralWallet|null $wallet wallet
     *
     * @return self
     */
    public function setWallet($wallet)
    {
        $this->container['wallet'] = $wallet;

        return $this;
    }

    /**
     * Gets token_blockchain_identifier
     *
     * @return string|null
     */
    public function getTokenBlockchainIdentifier()
    {
        return $this->container['token_blockchain_identifier'];
    }

    /**
     * Sets token_blockchain_identifier
     *
     * @param string|null $token_blockchain_identifier The `token_blockchain_identifier` identifies the token you wish to transfer.  - If you're transferring a native blockchain currency (e.g., SOL, ETH, BNB), then simply do not supply this value. - If you're transfering an NFT, then supply the token address of the NFT. On Solana, this is the `mint_address` or `mint` (the address of the mint). - If you're transfering a token, supply the token address. For Solana, you can find on this on the Solana Explorer (e.g., see `SRMuApVNdxXokk5GT7XD5cUUgXMBCoAz2LHeuAoKWRt` for <a href=\"https://explorer.solana.com/address/SRMuApVNdxXokk5GT7XD5cUUgXMBCoAz2LHeuAoKWRt\" target=\"_blank\">Serum Token</a>) for the `token_address`.  Examples: - Ethereum: `0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48` - Solana: `CK1LHEANTu7RFqN3XMzo2AnZhyus2W1vue1njrxLEM1d`
     *
     * @return self
     */
    public function setTokenBlockchainIdentifier($token_blockchain_identifier)
    {
        $this->container['token_blockchain_identifier'] = $token_blockchain_identifier;

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
     * @param string|null $network The network of the blockchain you selected  - Solana: `devnet`, `mainnet-beta` - Ethereum: `ropsten`, `mainnet`  Defaults when not provided (not applicable to path parameters): - Solana: `devnet` - Ethereum: `ropsten`
     *
     * @return self
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount This value must be a string. What you provide here depends on if you are sending an NFT, an SPL token, or SOL.  - Native Currency (e.g., SOL, ETH, BNB): Supply this value denominated in the native currency (e.g., in SOL (but not in Lamports), or in ETH (but not in Wei)) in a string format. This does not need to be an integer. For example, if you want to send 0.0005 SOL, then `amount = \"0.0005\"`. If you want to send 0.0005 ETH, then `amount = \"0.0005\"`. - NFT: This must be `1`. - Token: This must be an integer in string format. To convert from what you see on a wallet UI (e.g., 1 ATLAS, 1 USDC) to an integer value, you have to multiply that value by 10^<i>x</i> where <i>x</i> is the number of decimals. For example, to transfer 0.2 USDC, if USDC uses 6 decimals, then the amount is 0.2 * 10^6 = 200000.    - For Solana, you can get the number of decimals for a given SPL token <a href=\"#operation/solanaGetSPLToken\">here</a>. We are working on analogues of this endpoint for other blockchains.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * @param bool|null $return_compiled_transaction - If `false`, we sign and submit the transaction (`wallet` is required in this case; do not provide a value for `sender_blockchain_identifier`).  - If `true`, we compile the transaction (either `wallet` or `sender_blockchain_identifier` is required in this case; do not provide both).
     *
     * @return self
     */
    public function setReturnCompiledTransaction($return_compiled_transaction)
    {
        $this->container['return_compiled_transaction'] = $return_compiled_transaction;

        return $this;
    }

    /**
     * Gets sender_blockchain_identifier
     *
     * @return string|null
     */
    public function getSenderBlockchainIdentifier()
    {
        return $this->container['sender_blockchain_identifier'];
    }

    /**
     * Sets sender_blockchain_identifier
     *
     * @param string|null $sender_blockchain_identifier To understand the purpose of `sender_blockchain_identifier` first note the following: There are two ways you can complete a transfer transaction:  - (1) we complete it for you with your `wallet` information or  - (2) we return the raw instruction data that you can sign and submit yourself (no private keys required).  When you provide your `wallet` authentication, we are able to determine your wallet's blockchain identifier (public key or address) which is the sender public key of the transaction.  When you are not providing your `wallet` as authentication, we still need the `sender_blockchain_identifier` to be able to return the compiled transaction. Thus, you provide `sender_blockchain_identifier` if and only if you are not providing `wallet` authentication information **and** you are returning a compiled transaction.  You will receive an error if you provide both `wallet` and `sender_blockchain_identifier`. You will receive an error if you provide neither `wallet` nor `sender_blockchain_identifier`.
     *
     * @return self
     */
    public function setSenderBlockchainIdentifier($sender_blockchain_identifier)
    {
        $this->container['sender_blockchain_identifier'] = $sender_blockchain_identifier;

        return $this;
    }

    /**
     * Gets fee_payer_wallet
     *
     * @return \OpenAPI\Client\Model\GeneralFeePayerWallet|null
     */
    public function getFeePayerWallet()
    {
        return $this->container['fee_payer_wallet'];
    }

    /**
     * Sets fee_payer_wallet
     *
     * @param \OpenAPI\Client\Model\GeneralFeePayerWallet|null $fee_payer_wallet fee_payer_wallet
     *
     * @return self
     */
    public function setFeePayerWallet($fee_payer_wallet)
    {
        $this->container['fee_payer_wallet'] = $fee_payer_wallet;

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


