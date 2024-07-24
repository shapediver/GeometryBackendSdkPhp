<?php
/**
 * ResExportDefinitionType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Geometry Backend API v2
 *
 * The ShapeDiver Geometry Backend system is used to: * host Grasshopper models in a secure, reliable, scalable, and performant way, * run computations of Grasshopper models, * and cache and output the results of computations and exports.
 *
 * The version of the OpenAPI document: 2.13.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ShapeDiver\GeometryApiV2\Client\Model;
use \ShapeDiver\GeometryApiV2\Client\ObjectSerializer;

/**
 * ResExportDefinitionType Class Doc Comment
 *
 * @category Class
 * @description Types of exports.
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResExportDefinitionType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'unknown';

    public const DOWNLOAD = 'download';

    public const EMAIL = 'email';

    public const SHAPEWAYS = 'shapeways';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::DOWNLOAD,
            self::EMAIL,
            self::SHAPEWAYS
        ];
    }
}


