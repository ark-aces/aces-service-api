/**
 * Aces Service API
 * API Specification for Aces Services for blockchain interoperability. 
 *
 * OpenAPI spec version: 0.1.0
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 */


import ApiClient from '../ApiClient';


/**
* Enum class Feature.
* @enum {}
* @readonly
*/
export default class Feature {
    
        /**
         * value: "arkSmartbridgePayable"
         * @const
         */
        arkSmartbridgePayable = "arkSmartbridgePayable";

    
        /**
         * value: "arkReturnable"
         * @const
         */
        arkReturnable = "arkReturnable";

    

    /**
    * Returns a <code>Feature</code> enum value from a Javascript object name.
    * @param {Object} data The plain JavaScript object containing the name of the enum value.
    * @return {module:model/Feature} The enum <code>Feature</code> value.
    */
    static constructFromObject(object) {
        return object;
    }
}


