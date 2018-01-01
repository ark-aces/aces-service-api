/**
 * Aces Service API
 * API Specification for Aces Services for blockchain interoperability. 
 *
 * OpenAPI spec version: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 */


import ApiClient from '../ApiClient';





/**
* The Contract model module.
* @module model/Contract
* @version 1.0.0
*/
export default class Contract {
    /**
    * Constructs a new <code>Contract</code>.
    * @alias module:model/Contract
    * @class
    */

    constructor() {
        

        
        

        

        
    }

    /**
    * Constructs a <code>Contract</code> from a plain JavaScript object, optionally creating a new instance.
    * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
    * @param {Object} data The plain JavaScript object bearing properties of interest.
    * @param {module:model/Contract} obj Optional instance to populate.
    * @return {module:model/Contract} The populated <code>Contract</code> instance.
    */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new Contract();

            
            
            

            if (data.hasOwnProperty('id')) {
                obj['id'] = ApiClient.convertToType(data['id'], 'String');
            }
            if (data.hasOwnProperty('createdAt')) {
                obj['createdAt'] = ApiClient.convertToType(data['createdAt'], 'Date');
            }
            if (data.hasOwnProperty('expiresAt')) {
                obj['expiresAt'] = ApiClient.convertToType(data['expiresAt'], 'Date');
            }
            if (data.hasOwnProperty('correlationId')) {
                obj['correlationId'] = ApiClient.convertToType(data['correlationId'], 'String');
            }
            if (data.hasOwnProperty('status')) {
                obj['status'] = ApiClient.convertToType(data['status'], 'String');
            }
            if (data.hasOwnProperty('results')) {
                obj['results'] = ApiClient.convertToType(data['results'], Object);
            }
        }
        return obj;
    }

    /**
    * The globally unique Contract ID.
    * @member {String} id
    */
    id = undefined;
    /**
    * Date the Contract was created.
    * @member {Date} createdAt
    */
    createdAt = undefined;
    /**
    * Date the Contract will expire. Any expired contracts will no longer attempt execution.
    * @member {Date} expiresAt
    */
    expiresAt = undefined;
    /**
    * Requestor generated globally unique identifier for correleating requests.
    * @member {String} correlationId
    */
    correlationId = undefined;
    /**
    * @member {module:model/Contract.StatusEnum} status
    */
    status = undefined;
    /**
    * Contract results data.
    * @member {Object} results
    */
    results = undefined;






    /**
    * Allowed values for the <code>status</code> property.
    * @enum {String}
    * @readonly
    */
    static StatusEnum = {
    
        /**
         * value: "new"
         * @const
         */
        "new": "new",
    
        /**
         * value: "pendingPayment"
         * @const
         */
        "pendingPayment": "pendingPayment",
    
        /**
         * value: "rejected"
         * @const
         */
        "rejected": "rejected",
    
        /**
         * value: "expired"
         * @const
         */
        "expired": "expired",
    
        /**
         * value: "executed"
         * @const
         */
        "executed": "executed",
    
        /**
         * value: "failed"
         * @const
         */
        "failed": "failed"    
    };



}


