<?php

/**
 * Sample Application Flow OAuth2 Project
 * This is an example of using OAuth2 Application Flow in a specification to describe security to your API.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: red0dot10@gmail.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class DefaultApi extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation exampleGet
     *
     * Server example operation.
     *
     *
     * @return Http response
     */
    public function exampleGet()
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing exampleGet as a get method ?');
    }
    /**
     * Operation pingGet
     *
     * Server heartbeat operation.
     *
     *
     * @return Http response
     */
    public function pingGet()
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing pingGet as a get method ?');
    }
}
