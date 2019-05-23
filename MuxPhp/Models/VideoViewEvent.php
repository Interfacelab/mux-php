<?php

/**
* Mux PHP - Copyright 2019 Mux Inc.
* NOTE: This file is auto generated. Do not edit this file manually.
*/

namespace MuxPhp\Models;

use \ArrayAccess;
use \MuxPhp\ObjectSerializer;

/**
 * VideoViewEvent Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 */
class VideoViewEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VideoViewEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'viewer_time' => 'int',
        'playback_time' => 'int',
        'name' => 'string',
        'event_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'viewer_time' => 'int64',
        'playback_time' => 'int64',
        'name' => null,
        'event_time' => 'int64'
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
        'viewer_time' => 'viewer_time',
        'playback_time' => 'playback_time',
        'name' => 'name',
        'event_time' => 'event_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'viewer_time' => 'setViewerTime',
        'playback_time' => 'setPlaybackTime',
        'name' => 'setName',
        'event_time' => 'setEventTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'viewer_time' => 'getViewerTime',
        'playback_time' => 'getPlaybackTime',
        'name' => 'getName',
        'event_time' => 'getEventTime'
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
        $this->container['viewer_time'] = isset($data['viewer_time']) ? $data['viewer_time'] : null;
        $this->container['playback_time'] = isset($data['playback_time']) ? $data['playback_time'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['event_time'] = isset($data['event_time']) ? $data['event_time'] : null;
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
     * Gets viewer_time
     *
     * @return int|null
     */
    public function getViewerTime()
    {
        return $this->container['viewer_time'];
    }

    /**
     * Sets viewer_time
     *
     * @param int|null $viewer_time viewer_time
     *
     * @return $this
     */
    public function setViewerTime($viewer_time)
    {
        $this->container['viewer_time'] = $viewer_time;

        return $this;
    }

    /**
     * Gets playback_time
     *
     * @return int|null
     */
    public function getPlaybackTime()
    {
        return $this->container['playback_time'];
    }

    /**
     * Sets playback_time
     *
     * @param int|null $playback_time playback_time
     *
     * @return $this
     */
    public function setPlaybackTime($playback_time)
    {
        $this->container['playback_time'] = $playback_time;

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
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets event_time
     *
     * @return int|null
     */
    public function getEventTime()
    {
        return $this->container['event_time'];
    }

    /**
     * Sets event_time
     *
     * @param int|null $event_time event_time
     *
     * @return $this
     */
    public function setEventTime($event_time)
    {
        $this->container['event_time'] = $event_time;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

