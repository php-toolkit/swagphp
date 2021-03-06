<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2018-06-05
 * Time: 10:41
 */

namespace SwagPhp\Schema;

/**
 * Class Response
 * A Swagger "Response Object": https://github.com/swagger-api/swagger-spec/blob/master/versions/2.0.md#responseObject
 * @package SwagPhp\Schema
 */
class Response extends AbstractSchema
{
    /**
     * $ref See http://json-schema.org/latest/json-schema-core.html#rfc.section.7
     * @var string
     */
    public $ref;

    /**
     * The key into Operations->responses array.
     *
     * @var string a HTTP Status Code or "default"
     */
    public $response;

    /**
     * A short description of the response. GFM syntax can be used for rich text representation.
     * @var string
     */
    public $description;

    /**
     * A definition of the response structure. It can be a primitive, an array or an object. If this field does not exist, it means no content is returned as part of the response. As an extension to the Schema Object, its root type value may also be "file". This SHOULD be accompanied by a relevant produces mime-type.
     * @var Schema
     */
    public $schema;

    /**
     * A list of headers that are sent with the response.
     * @var Header[]
     */
    public $headers;

    /**
     * An example of the response message.
     * @var array
     */
    public $examples;

    /** @inheritdoc */
    public static $_required = ['description'];

    /** @inheritdoc */
    public static $_types = [
        'description' => 'string',
    ];

    /** @inheritdoc */
    public static $_nested = [
        Schema::class => 'schema',
        Header::class => ['headers', 'header']
    ];

    /** @inheritdoc */
    public static $_parents = [
        Operation::class,
        // 'Swagger\Annotations\Get',
        Swagger::class,
    ];
}