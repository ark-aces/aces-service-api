/*
 * Aces Service API
 *
 * API Specification for Aces Services for blockchain interoperability. 
 *
 * API version: 1.0.0
 * Generated by: Swagger Codegen (https://github.com/swagger-api/swagger-codegen.git)
 */

package arkaces/aces-service-api

type ValidationError struct {

	Code string `json:"code,omitempty"`

	Message string `json:"message,omitempty"`

	FieldErrors []FieldError `json:"fieldErrors,omitempty"`
}
