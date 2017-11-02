/* 
 * Aces Service API
 *
 * API Specification for Aces Services for blockchain interoperability. 
 *
 * OpenAPI spec version: 0.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Text.RegularExpressions;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Runtime.Serialization;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using System.ComponentModel.DataAnnotations;
using SwaggerDateConverter = ArkAces.ServiceClient.Client.SwaggerDateConverter;

namespace ArkAces.ServiceClient.Model
{
    /// <summary>
    /// Info
    /// </summary>
    [DataContract]
    public partial class Info :  IEquatable<Info>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="Info" /> class.
        /// </summary>
        /// <param name="Name">Name of the contract service..</param>
        /// <param name="Description">Description of the contract service..</param>
        /// <param name="Instructions">Service usage instructions in markdown format..</param>
        /// <param name="Capacities">Capacities.</param>
        /// <param name="FlatFee">FlatFee.</param>
        /// <param name="ContractSchema">Contract input schema in JSON Schema format..</param>
        /// <param name="Features">Features.</param>
        public Info(string Name = default(string), string Description = default(string), string Instructions = default(string), List<Capacity> Capacities = default(List<Capacity>), string FlatFee = default(string), Object ContractSchema = default(Object), List<Feature> Features = default(List<Feature>))
        {
            this.Name = Name;
            this.Description = Description;
            this.Instructions = Instructions;
            this.Capacities = Capacities;
            this.FlatFee = FlatFee;
            this.ContractSchema = ContractSchema;
            this.Features = Features;
        }
        
        /// <summary>
        /// Name of the contract service.
        /// </summary>
        /// <value>Name of the contract service.</value>
        [DataMember(Name="name", EmitDefaultValue=false)]
        public string Name { get; set; }

        /// <summary>
        /// Description of the contract service.
        /// </summary>
        /// <value>Description of the contract service.</value>
        [DataMember(Name="description", EmitDefaultValue=false)]
        public string Description { get; set; }

        /// <summary>
        /// Service usage instructions in markdown format.
        /// </summary>
        /// <value>Service usage instructions in markdown format.</value>
        [DataMember(Name="instructions", EmitDefaultValue=false)]
        public string Instructions { get; set; }

        /// <summary>
        /// Gets or Sets Capacities
        /// </summary>
        [DataMember(Name="capacities", EmitDefaultValue=false)]
        public List<Capacity> Capacities { get; set; }

        /// <summary>
        /// Gets or Sets FlatFee
        /// </summary>
        [DataMember(Name="flatFee", EmitDefaultValue=false)]
        public string FlatFee { get; set; }

        /// <summary>
        /// Contract input schema in JSON Schema format.
        /// </summary>
        /// <value>Contract input schema in JSON Schema format.</value>
        [DataMember(Name="contractSchema", EmitDefaultValue=false)]
        public Object ContractSchema { get; set; }

        /// <summary>
        /// Gets or Sets Features
        /// </summary>
        [DataMember(Name="features", EmitDefaultValue=false)]
        public List<Feature> Features { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class Info {\n");
            sb.Append("  Name: ").Append(Name).Append("\n");
            sb.Append("  Description: ").Append(Description).Append("\n");
            sb.Append("  Instructions: ").Append(Instructions).Append("\n");
            sb.Append("  Capacities: ").Append(Capacities).Append("\n");
            sb.Append("  FlatFee: ").Append(FlatFee).Append("\n");
            sb.Append("  ContractSchema: ").Append(ContractSchema).Append("\n");
            sb.Append("  Features: ").Append(Features).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }
  
        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public string ToJson()
        {
            return JsonConvert.SerializeObject(this, Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="input">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object input)
        {
            return this.Equals(input as Info);
        }

        /// <summary>
        /// Returns true if Info instances are equal
        /// </summary>
        /// <param name="input">Instance of Info to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(Info input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.Name == input.Name ||
                    (this.Name != null &&
                    this.Name.Equals(input.Name))
                ) && 
                (
                    this.Description == input.Description ||
                    (this.Description != null &&
                    this.Description.Equals(input.Description))
                ) && 
                (
                    this.Instructions == input.Instructions ||
                    (this.Instructions != null &&
                    this.Instructions.Equals(input.Instructions))
                ) && 
                (
                    this.Capacities == input.Capacities ||
                    this.Capacities != null &&
                    this.Capacities.SequenceEqual(input.Capacities)
                ) && 
                (
                    this.FlatFee == input.FlatFee ||
                    (this.FlatFee != null &&
                    this.FlatFee.Equals(input.FlatFee))
                ) && 
                (
                    this.ContractSchema == input.ContractSchema ||
                    (this.ContractSchema != null &&
                    this.ContractSchema.Equals(input.ContractSchema))
                ) && 
                (
                    this.Features == input.Features ||
                    this.Features != null &&
                    this.Features.SequenceEqual(input.Features)
                );
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            unchecked // Overflow is fine, just wrap
            {
                int hashCode = 41;
                if (this.Name != null)
                    hashCode = hashCode * 59 + this.Name.GetHashCode();
                if (this.Description != null)
                    hashCode = hashCode * 59 + this.Description.GetHashCode();
                if (this.Instructions != null)
                    hashCode = hashCode * 59 + this.Instructions.GetHashCode();
                if (this.Capacities != null)
                    hashCode = hashCode * 59 + this.Capacities.GetHashCode();
                if (this.FlatFee != null)
                    hashCode = hashCode * 59 + this.FlatFee.GetHashCode();
                if (this.ContractSchema != null)
                    hashCode = hashCode * 59 + this.ContractSchema.GetHashCode();
                if (this.Features != null)
                    hashCode = hashCode * 59 + this.Features.GetHashCode();
                return hashCode;
            }
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> IValidatableObject.Validate(ValidationContext validationContext)
        {
            yield break;
        }
    }

}
