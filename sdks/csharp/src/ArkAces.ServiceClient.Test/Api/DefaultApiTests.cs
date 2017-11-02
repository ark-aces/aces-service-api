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
using System.IO;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using System.Reflection;
using RestSharp;
using NUnit.Framework;

using ArkAces.ServiceClient.Client;
using ArkAces.ServiceClient.Api;
using ArkAces.ServiceClient.Model;

namespace ArkAces.ServiceClient.Test
{
    /// <summary>
    ///  Class for testing DefaultApi
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by Swagger Codegen.
    /// Please update the test case below to test the API endpoint.
    /// </remarks>
    [TestFixture]
    public class DefaultApiTests
    {
        private DefaultApi instance;

        /// <summary>
        /// Setup before each unit test
        /// </summary>
        [SetUp]
        public void Init()
        {
            instance = new DefaultApi();
        }

        /// <summary>
        /// Clean up after each unit test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }

        /// <summary>
        /// Test an instance of DefaultApi
        /// </summary>
        [Test]
        public void InstanceTest()
        {
            // TODO uncomment below to test 'IsInstanceOfType' DefaultApi
            //Assert.IsInstanceOfType(typeof(DefaultApi), instance, "instance is a DefaultApi");
        }

        
        /// <summary>
        /// Test ContractsIdGet
        /// </summary>
        [Test]
        public void ContractsIdGetTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //string id = null;
            //var response = instance.ContractsIdGet(id);
            //Assert.IsInstanceOf<Contract> (response, "response is Contract");
        }
        
        /// <summary>
        /// Test ContractsPost
        /// </summary>
        [Test]
        public void ContractsPostTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //ContractRequest contractRequest = null;
            //var response = instance.ContractsPost(contractRequest);
            //Assert.IsInstanceOf<Contract> (response, "response is Contract");
        }
        
        /// <summary>
        /// Test InfoGet
        /// </summary>
        [Test]
        public void InfoGetTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //var response = instance.InfoGet();
            //Assert.IsInstanceOf<Info> (response, "response is Info");
        }
        
        /// <summary>
        /// Test StatusGet
        /// </summary>
        [Test]
        public void StatusGetTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //var response = instance.StatusGet();
            //Assert.IsInstanceOf<Health> (response, "response is Health");
        }
        
    }

}
