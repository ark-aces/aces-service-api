/*
 * Aces Service API
 *
 * API Specification for Aces Services for blockchain interoperability. 
 *
 * API version: 0.1.0
 * Generated by: Swagger Codegen (https://github.com/swagger-api/swagger-codegen.git)
 */

package arkaces/service-client

type ContractRequest struct {

	// Requestor generated globally unique identifier for correleating requests.
	CorrelationId string `json:"correlationId"`

	Arguments []Argument `json:"arguments,omitempty"`
}
