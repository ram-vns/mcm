<?php
/*
+---------------------------------------------------------------------------+
| Revive Adserver API Client                                                |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

namespace OpenXApiClient;

/**
 *  The ZoneInfo class extends the base Info class and contains information about the zone.
 */
class ZoneInfo extends Info
{


    /**
     * The zoneId variable is the unique ID for the zone.
     *
     * @var integer $zoneId
     */
    protected $zoneId;

    /**
     * The publisherID is the ID of the publisher associated with the zone.
     *
     * @var integer $publisherId
     */
    protected $publisherId;

    /**
     * The zoneName is the name of the zone.
     *
     * @var string $zoneName
     */
    protected $zoneName;

    /**
     * The type variable type of zone, one of the following: banner, interstitial, popup, text, email.
     *
     * @var integer $type
     */
    protected $type;

    /**
     * The width variable is the width of the zone.
     *
     * @var integer $width
     */
    protected $width;

    /**
     * The height variable is the height of the zone.
     *
     * @var integer $height
     */
    protected $height;

    /**
     * Frequency capping: total views per user.
     *
     * @var integer $capping
     */
    protected $capping = 0;

    /**
     * Frequency capping: total views per period.
     * (defined in seconds by "block").
     *
     * @var integer $sessionCapping
     */
    protected $sessionCapping = 0;

    /**
     * Frequency capping: reset period, in seconds.
     *
     * @var integer $block
     */
    protected $block = 0;

    /**
     * This field provides any additional comments to be stored.
     *
     * @var string $comments
     */
    protected $comments;

    /**
     * The appended code for this zone.
     *
     * @var string $append
     */
    protected $append;

    /**
     * The prepended code of the zone.
     *
     * @var string $prepend
     */
    protected $prepend;

    /**
     * The chained zone of the current zone.
     *
     * @var int $chainedZoneId
     */
    protected $chainedZoneId;

    /**
     * This method sets all default values when adding a new zone.
     *
     * @access public
     *
     */
    function setDefaultForAdd() {
        if (is_null($this->type)) {
            $this->type = 0;
        }

        if (is_null($this->width)) {
            $this->width = 0;
        }

        if (is_null($this->height)) {
            $this->height = 0;
        }

        if (is_null($this->capping)) {
            // Leave null
        }

        if (is_null($this->sessionCapping)) {
            // Leave null
        }

        if (is_null($this->block)) {
            // Leave null
        }

        if (is_null($this->chainedZoneId)) {
            // Leave null
        }
    }

    /**
     * This method returns an array of fields with their corresponding types.
     *
     * @access public
     *
     * @return array
     */
    public function getFieldsTypes()
    {
        return array(
                    'zoneId' => 'integer',
                    'publisherId' => 'integer',
                    'zoneName' => 'string',
                    'type' => 'integer',
                    'width' => 'integer',
                    'height' => 'integer',
                    'capping' => 'integer',
                    'sessionCapping' => 'integer',
                    'block' => 'integer',
                    'comments' => 'string',
                    'append' => 'string',
                    'prepend' => 'string',
                    'chainedZoneId' => 'integer',
                );
    }
}
