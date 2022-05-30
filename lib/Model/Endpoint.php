<?php
/**
 * Endpoint
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
 * Endpoint Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Endpoint implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Endpoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'project_id' => 'string',
        'version' => 'string',
        'path' => 'string',
        'operation_id' => 'string',
        'readable_name' => 'string',
        'summary' => 'string',
        'description' => 'string',
        'credits' => 'float',
        'group_name' => 'string',
        'input_specification' => '\OpenAPI\Client\Model\ParameterSpecification[]',
        'input_examples' => 'object',
        'output_specification' => '\OpenAPI\Client\Model\ParameterSpecification[]',
        'output_examples' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'project_id' => null,
        'version' => null,
        'path' => null,
        'operation_id' => null,
        'readable_name' => null,
        'summary' => null,
        'description' => null,
        'credits' => null,
        'group_name' => null,
        'input_specification' => null,
        'input_examples' => null,
        'output_specification' => null,
        'output_examples' => null
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
        'project_id' => 'project_id',
        'version' => 'version',
        'path' => 'path',
        'operation_id' => 'operation_id',
        'readable_name' => 'readable_name',
        'summary' => 'summary',
        'description' => 'description',
        'credits' => 'credits',
        'group_name' => 'group_name',
        'input_specification' => 'input_specification',
        'input_examples' => 'input_examples',
        'output_specification' => 'output_specification',
        'output_examples' => 'output_examples'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'project_id' => 'setProjectId',
        'version' => 'setVersion',
        'path' => 'setPath',
        'operation_id' => 'setOperationId',
        'readable_name' => 'setReadableName',
        'summary' => 'setSummary',
        'description' => 'setDescription',
        'credits' => 'setCredits',
        'group_name' => 'setGroupName',
        'input_specification' => 'setInputSpecification',
        'input_examples' => 'setInputExamples',
        'output_specification' => 'setOutputSpecification',
        'output_examples' => 'setOutputExamples'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'project_id' => 'getProjectId',
        'version' => 'getVersion',
        'path' => 'getPath',
        'operation_id' => 'getOperationId',
        'readable_name' => 'getReadableName',
        'summary' => 'getSummary',
        'description' => 'getDescription',
        'credits' => 'getCredits',
        'group_name' => 'getGroupName',
        'input_specification' => 'getInputSpecification',
        'input_examples' => 'getInputExamples',
        'output_specification' => 'getOutputSpecification',
        'output_examples' => 'getOutputExamples'
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
        $this->container['project_id'] = $data['project_id'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['operation_id'] = $data['operation_id'] ?? null;
        $this->container['readable_name'] = $data['readable_name'] ?? null;
        $this->container['summary'] = $data['summary'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['credits'] = $data['credits'] ?? null;
        $this->container['group_name'] = $data['group_name'] ?? null;
        $this->container['input_specification'] = $data['input_specification'] ?? null;
        $this->container['input_examples'] = $data['input_examples'] ?? null;
        $this->container['output_specification'] = $data['output_specification'] ?? null;
        $this->container['output_examples'] = $data['output_examples'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['project_id'] === null) {
            $invalidProperties[] = "'project_id' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['operation_id'] === null) {
            $invalidProperties[] = "'operation_id' can't be null";
        }
        if ($this->container['readable_name'] === null) {
            $invalidProperties[] = "'readable_name' can't be null";
        }
        if ($this->container['credits'] === null) {
            $invalidProperties[] = "'credits' can't be null";
        }
        if ($this->container['input_specification'] === null) {
            $invalidProperties[] = "'input_specification' can't be null";
        }
        if ($this->container['input_examples'] === null) {
            $invalidProperties[] = "'input_examples' can't be null";
        }
        if ($this->container['output_specification'] === null) {
            $invalidProperties[] = "'output_specification' can't be null";
        }
        if ($this->container['output_examples'] === null) {
            $invalidProperties[] = "'output_examples' can't be null";
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
     * Gets project_id
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string $project_id The ID of the project. This is auto-generated upon project creation and cannot currently be changed.
     *
     * @return self
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version The project version under which the endpoint exists
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path The path of the endpoint
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets operation_id
     *
     * @return string
     */
    public function getOperationId()
    {
        return $this->container['operation_id'];
    }

    /**
     * Sets operation_id
     *
     * @param string $operation_id The operation ID of the endpoint.
     *
     * @return self
     */
    public function setOperationId($operation_id)
    {
        $this->container['operation_id'] = $operation_id;

        return $this;
    }

    /**
     * Gets readable_name
     *
     * @return string
     */
    public function getReadableName()
    {
        return $this->container['readable_name'];
    }

    /**
     * Sets readable_name
     *
     * @param string $readable_name The name of the endpoint formatted in a readable way (e.g., Get Endpoint Metadata).
     *
     * @return self
     */
    public function setReadableName($readable_name)
    {
        $this->container['readable_name'] = $readable_name;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string|null $summary The summary of the endpoint to be displayed in the sidebar on the left of the mini-API's documentation
     *
     * @return self
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

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
     * @param string|null $description A description of what the endpoint does. This will be shown in the mini-API documentation.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets credits
     *
     * @return float
     */
    public function getCredits()
    {
        return $this->container['credits'];
    }

    /**
     * Sets credits
     *
     * @param float $credits The price of the endpoint. Valid values are integers from 1 to 100.
     *
     * @return self
     */
    public function setCredits($credits)
    {
        $this->container['credits'] = $credits;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string|null $group_name The name of the group of endpoints that the endpoint comes from
     *
     * @return self
     */
    public function setGroupName($group_name)
    {
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets input_specification
     *
     * @return \OpenAPI\Client\Model\ParameterSpecification[]
     */
    public function getInputSpecification()
    {
        return $this->container['input_specification'];
    }

    /**
     * Sets input_specification
     *
     * @param \OpenAPI\Client\Model\ParameterSpecification[] $input_specification A list of dictionaries. Each dictionary describes one parameter for the input, including the name, type, required boolean, and description values of that parameter.
     *
     * @return self
     */
    public function setInputSpecification($input_specification)
    {
        $this->container['input_specification'] = $input_specification;

        return $this;
    }

    /**
     * Gets input_examples
     *
     * @return object
     */
    public function getInputExamples()
    {
        return $this->container['input_examples'];
    }

    /**
     * Sets input_examples
     *
     * @param object $input_examples An example of the JSON input that a user might send. Limited to one example currently.
     *
     * @return self
     */
    public function setInputExamples($input_examples)
    {
        $this->container['input_examples'] = $input_examples;

        return $this;
    }

    /**
     * Gets output_specification
     *
     * @return \OpenAPI\Client\Model\ParameterSpecification[]
     */
    public function getOutputSpecification()
    {
        return $this->container['output_specification'];
    }

    /**
     * Sets output_specification
     *
     * @param \OpenAPI\Client\Model\ParameterSpecification[] $output_specification A list of dictionaries. Each dictionary describes one parameter for the input, including the name, type, required boolean, and description values of that parameter.
     *
     * @return self
     */
    public function setOutputSpecification($output_specification)
    {
        $this->container['output_specification'] = $output_specification;

        return $this;
    }

    /**
     * Gets output_examples
     *
     * @return object
     */
    public function getOutputExamples()
    {
        return $this->container['output_examples'];
    }

    /**
     * Sets output_examples
     *
     * @param object $output_examples An example of the JSON output that a user might send. Limited to one example currently.
     *
     * @return self
     */
    public function setOutputExamples($output_examples)
    {
        $this->container['output_examples'] = $output_examples;

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


