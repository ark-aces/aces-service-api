/*
 * Aces Service API
 *
 * API Specification for Aces Services for blockchain interoperability. 
 *
 * API version: 1.0.0
 * Generated by: Swagger Codegen (https://github.com/swagger-api/swagger-codegen.git)
 */

package arkaces/aces-service-api

import (
	"time"
)

type Contract struct {

	// The globally unique Contract ID.
	Id string `json:"id,omitempty"`

	// Date the Contract was created.
	CreatedAt time.Time `json:"createdAt,omitempty"`

	// Date the Contract will expire. Any expired contracts will no longer attempt execution.
	ExpiresAt time.Time `json:"expiresAt,omitempty"`

	// Requestor generated globally unique identifier for correleating requests.
	CorrelationId string `json:"correlationId,omitempty"`

	Status string `json:"status,omitempty"`

	// Contract results data.
	Results *interface{} `json:"results,omitempty"`
}
