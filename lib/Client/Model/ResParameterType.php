<?php
/**
 * ResParameterType
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
 * The version of the OpenAPI document: 1.8.2
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ShapeDiver\GeometryApiV2\Client\Model;
use \ShapeDiver\GeometryApiV2\Client\ObjectSerializer;

/**
 * ResParameterType Class Doc Comment
 *
 * @category Class
 * @description Type of parameter.  All types starting with &#39;s&#39; are s-type parameters while the others are basic parameter types.
 * @package  ShapeDiver\GeometryApiV2\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResParameterType
{
    /**
     * Possible values of this enum
     */
    public const S_BITMAP = 'sBitmap';

    public const S_BOOL = 'sBool';

    public const S_BOX = 'sBox';

    public const S_BREP = 'sBrep';

    public const S_CIRCLE = 'sCircle';

    public const S_COLOR = 'sColor';

    public const S_CURVE = 'sCurve';

    public const S_DOMAIN = 'sDomain';

    public const S_DOMAIN_2_D = 'sDomain2D';

    public const S_INTEGER = 'sInteger';

    public const S_LINE = 'sLine';

    public const S_MESH = 'sMesh';

    public const S_NUMBER = 'sNumber';

    public const S_PLANE = 'sPlane';

    public const S_POINT = 'sPoint';

    public const S_RECTANGLE = 'sRectangle';

    public const S_STRING = 'sString';

    public const S_SUBDIV = 'sSubdiv';

    public const S_SURFACE = 'sSurface';

    public const S_TIME = 'sTime';

    public const S_VECTOR = 'sVector';

    public const BOOL = 'Bool';

    public const COLOR = 'Color';

    public const DRAWING = 'Drawing';

    public const EVEN = 'Even';

    public const FILE = 'File';

    public const FLOAT = 'Float';

    public const INT = 'Int';

    public const INTERACTION = 'Interaction';

    public const ODD = 'Odd';

    public const STRING = 'String';

    public const STRINGLIST = 'StringList';

    public const TIME = 'Time';

    public const UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::S_BITMAP,
            self::S_BOOL,
            self::S_BOX,
            self::S_BREP,
            self::S_CIRCLE,
            self::S_COLOR,
            self::S_CURVE,
            self::S_DOMAIN,
            self::S_DOMAIN_2_D,
            self::S_INTEGER,
            self::S_LINE,
            self::S_MESH,
            self::S_NUMBER,
            self::S_PLANE,
            self::S_POINT,
            self::S_RECTANGLE,
            self::S_STRING,
            self::S_SUBDIV,
            self::S_SURFACE,
            self::S_TIME,
            self::S_VECTOR,
            self::BOOL,
            self::COLOR,
            self::DRAWING,
            self::EVEN,
            self::FILE,
            self::FLOAT,
            self::INT,
            self::INTERACTION,
            self::ODD,
            self::STRING,
            self::STRINGLIST,
            self::TIME,
            self::UNKNOWN
        ];
    }
}


