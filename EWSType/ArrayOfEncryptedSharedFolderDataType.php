<?php
/**
 * Contains EWSType_ArrayOfEncryptedSharedFolderDataType.
 */

/**
 * Represents a collection of data structures that a client can use to authorize
 * the sharing of its calendar or contact data with other clients.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfEncryptedSharedFolderDataType extends EWSType
{
    /**
     * Contains the encrypted data that a client can use to authorize the
     * sharing of its calendar or contact data with other clients.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\EncryptedSharedFolderDataType
     */
    public $EncryptedSharedFolderData;
}