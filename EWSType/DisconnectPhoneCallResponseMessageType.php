<?php
/**
 * Contains EWSType_DisconnectPhoneCallResponseMessageType.
 */

/**
 * Defines the status and result of a single DisconnectPhoneCall request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_ResponseMessageType
 */
class EWSType_DisconnectPhoneCallResponseMessageType extends EWSType
{
    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PEWS\Enumeration\ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PEWS\Enumeration\ResponseCodeType
     */
    public $ResponseCode;
}