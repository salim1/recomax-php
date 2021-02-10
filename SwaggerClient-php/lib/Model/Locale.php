<?php
/**
 * Locale
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Recomax REST API
 *
 * Recomax REST API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: info@recomax.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Locale Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Locale implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Locale';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country' => 'string',
        'display_country' => 'string',
        'display_language' => 'string',
        'display_name' => 'string',
        'display_script' => 'string',
        'display_variant' => 'string',
        'extension_keys' => '\Swagger\Client\Model\Character[]',
        'iso3_country' => 'string',
        'iso3_language' => 'string',
        'language' => 'string',
        'script' => 'string',
        'unicode_locale_attributes' => 'string[]',
        'unicode_locale_keys' => 'string[]',
        'variant' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country' => null,
        'display_country' => null,
        'display_language' => null,
        'display_name' => null,
        'display_script' => null,
        'display_variant' => null,
        'extension_keys' => null,
        'iso3_country' => null,
        'iso3_language' => null,
        'language' => null,
        'script' => null,
        'unicode_locale_attributes' => null,
        'unicode_locale_keys' => null,
        'variant' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'country' => 'country',
        'display_country' => 'displayCountry',
        'display_language' => 'displayLanguage',
        'display_name' => 'displayName',
        'display_script' => 'displayScript',
        'display_variant' => 'displayVariant',
        'extension_keys' => 'extensionKeys',
        'iso3_country' => 'iso3Country',
        'iso3_language' => 'iso3Language',
        'language' => 'language',
        'script' => 'script',
        'unicode_locale_attributes' => 'unicodeLocaleAttributes',
        'unicode_locale_keys' => 'unicodeLocaleKeys',
        'variant' => 'variant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'display_country' => 'setDisplayCountry',
        'display_language' => 'setDisplayLanguage',
        'display_name' => 'setDisplayName',
        'display_script' => 'setDisplayScript',
        'display_variant' => 'setDisplayVariant',
        'extension_keys' => 'setExtensionKeys',
        'iso3_country' => 'setIso3Country',
        'iso3_language' => 'setIso3Language',
        'language' => 'setLanguage',
        'script' => 'setScript',
        'unicode_locale_attributes' => 'setUnicodeLocaleAttributes',
        'unicode_locale_keys' => 'setUnicodeLocaleKeys',
        'variant' => 'setVariant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'display_country' => 'getDisplayCountry',
        'display_language' => 'getDisplayLanguage',
        'display_name' => 'getDisplayName',
        'display_script' => 'getDisplayScript',
        'display_variant' => 'getDisplayVariant',
        'extension_keys' => 'getExtensionKeys',
        'iso3_country' => 'getIso3Country',
        'iso3_language' => 'getIso3Language',
        'language' => 'getLanguage',
        'script' => 'getScript',
        'unicode_locale_attributes' => 'getUnicodeLocaleAttributes',
        'unicode_locale_keys' => 'getUnicodeLocaleKeys',
        'variant' => 'getVariant'
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
        return self::$swaggerModelName;
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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['display_country'] = isset($data['display_country']) ? $data['display_country'] : null;
        $this->container['display_language'] = isset($data['display_language']) ? $data['display_language'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['display_script'] = isset($data['display_script']) ? $data['display_script'] : null;
        $this->container['display_variant'] = isset($data['display_variant']) ? $data['display_variant'] : null;
        $this->container['extension_keys'] = isset($data['extension_keys']) ? $data['extension_keys'] : null;
        $this->container['iso3_country'] = isset($data['iso3_country']) ? $data['iso3_country'] : null;
        $this->container['iso3_language'] = isset($data['iso3_language']) ? $data['iso3_language'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['script'] = isset($data['script']) ? $data['script'] : null;
        $this->container['unicode_locale_attributes'] = isset($data['unicode_locale_attributes']) ? $data['unicode_locale_attributes'] : null;
        $this->container['unicode_locale_keys'] = isset($data['unicode_locale_keys']) ? $data['unicode_locale_keys'] : null;
        $this->container['variant'] = isset($data['variant']) ? $data['variant'] : null;
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
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets display_country
     *
     * @return string
     */
    public function getDisplayCountry()
    {
        return $this->container['display_country'];
    }

    /**
     * Sets display_country
     *
     * @param string $display_country display_country
     *
     * @return $this
     */
    public function setDisplayCountry($display_country)
    {
        $this->container['display_country'] = $display_country;

        return $this;
    }

    /**
     * Gets display_language
     *
     * @return string
     */
    public function getDisplayLanguage()
    {
        return $this->container['display_language'];
    }

    /**
     * Sets display_language
     *
     * @param string $display_language display_language
     *
     * @return $this
     */
    public function setDisplayLanguage($display_language)
    {
        $this->container['display_language'] = $display_language;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets display_script
     *
     * @return string
     */
    public function getDisplayScript()
    {
        return $this->container['display_script'];
    }

    /**
     * Sets display_script
     *
     * @param string $display_script display_script
     *
     * @return $this
     */
    public function setDisplayScript($display_script)
    {
        $this->container['display_script'] = $display_script;

        return $this;
    }

    /**
     * Gets display_variant
     *
     * @return string
     */
    public function getDisplayVariant()
    {
        return $this->container['display_variant'];
    }

    /**
     * Sets display_variant
     *
     * @param string $display_variant display_variant
     *
     * @return $this
     */
    public function setDisplayVariant($display_variant)
    {
        $this->container['display_variant'] = $display_variant;

        return $this;
    }

    /**
     * Gets extension_keys
     *
     * @return \Swagger\Client\Model\Character[]
     */
    public function getExtensionKeys()
    {
        return $this->container['extension_keys'];
    }

    /**
     * Sets extension_keys
     *
     * @param \Swagger\Client\Model\Character[] $extension_keys extension_keys
     *
     * @return $this
     */
    public function setExtensionKeys($extension_keys)
    {
        $this->container['extension_keys'] = $extension_keys;

        return $this;
    }

    /**
     * Gets iso3_country
     *
     * @return string
     */
    public function getIso3Country()
    {
        return $this->container['iso3_country'];
    }

    /**
     * Sets iso3_country
     *
     * @param string $iso3_country iso3_country
     *
     * @return $this
     */
    public function setIso3Country($iso3_country)
    {
        $this->container['iso3_country'] = $iso3_country;

        return $this;
    }

    /**
     * Gets iso3_language
     *
     * @return string
     */
    public function getIso3Language()
    {
        return $this->container['iso3_language'];
    }

    /**
     * Sets iso3_language
     *
     * @param string $iso3_language iso3_language
     *
     * @return $this
     */
    public function setIso3Language($iso3_language)
    {
        $this->container['iso3_language'] = $iso3_language;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets script
     *
     * @return string
     */
    public function getScript()
    {
        return $this->container['script'];
    }

    /**
     * Sets script
     *
     * @param string $script script
     *
     * @return $this
     */
    public function setScript($script)
    {
        $this->container['script'] = $script;

        return $this;
    }

    /**
     * Gets unicode_locale_attributes
     *
     * @return string[]
     */
    public function getUnicodeLocaleAttributes()
    {
        return $this->container['unicode_locale_attributes'];
    }

    /**
     * Sets unicode_locale_attributes
     *
     * @param string[] $unicode_locale_attributes unicode_locale_attributes
     *
     * @return $this
     */
    public function setUnicodeLocaleAttributes($unicode_locale_attributes)
    {
        $this->container['unicode_locale_attributes'] = $unicode_locale_attributes;

        return $this;
    }

    /**
     * Gets unicode_locale_keys
     *
     * @return string[]
     */
    public function getUnicodeLocaleKeys()
    {
        return $this->container['unicode_locale_keys'];
    }

    /**
     * Sets unicode_locale_keys
     *
     * @param string[] $unicode_locale_keys unicode_locale_keys
     *
     * @return $this
     */
    public function setUnicodeLocaleKeys($unicode_locale_keys)
    {
        $this->container['unicode_locale_keys'] = $unicode_locale_keys;

        return $this;
    }

    /**
     * Gets variant
     *
     * @return string
     */
    public function getVariant()
    {
        return $this->container['variant'];
    }

    /**
     * Sets variant
     *
     * @param string $variant variant
     *
     * @return $this
     */
    public function setVariant($variant)
    {
        $this->container['variant'] = $variant;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


