# service-client

## Requirements

Building the API client library requires [Maven](https://maven.apache.org/) to be installed.

## Installation

To install the API client library to your local Maven repository, simply execute:

```shell
mvn install
```

To deploy it to a remote Maven repository instead, configure the settings of the repository and execute:

```shell
mvn deploy
```

Refer to the [official documentation](https://maven.apache.org/plugins/maven-deploy-plugin/usage.html) for more information.

### Maven users

Add this dependency to your project's POM:

```xml
<dependency>
    <groupId>io.arkaces</groupId>
    <artifactId>service-client</artifactId>
    <version>1.0.0</version>
    <scope>compile</scope>
</dependency>
```

### Gradle users

Add this dependency to your project's build file:

```groovy
compile "io.arkaces:service-client:1.0.0"
```

### Others

At first generate the JAR by executing:

    mvn package

Then manually install the following JARs:

* target/service-client-1.0.0.jar
* target/lib/*.jar

## Getting Started

Please follow the [installation](#installation) instruction and execute the following Java code:

```java

import invalidPackageName.*;
import invalidPackageName.auth.*;
import io.swagger.client.model.*;
import ArkAces_ServiceClient.DefaultApi;

import java.io.File;
import java.util.*;

public class DefaultApiExample {

    public static void main(String[] args) {
        
        DefaultApi apiInstance = new DefaultApi();
        String id = "id_example"; // String | Contract identifier.
        try {
            Contract result = apiInstance.contractsIdGet(id);
            System.out.println(result);
        } catch (ApiException e) {
            System.err.println("Exception when calling DefaultApi#contractsIdGet");
            e.printStackTrace();
        }
    }
}

```

## Documentation for API Endpoints

All URIs are relative to *https://localhost/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**contractsIdGet**](docs/DefaultApi.md#contractsIdGet) | **GET** /contracts/{id} | Get Service Contract.
*DefaultApi* | [**contractsPost**](docs/DefaultApi.md#contractsPost) | **POST** /contracts | Create Service Contract
*DefaultApi* | [**infoGet**](docs/DefaultApi.md#infoGet) | **GET** /info | Get Service Info.
*DefaultApi* | [**statusGet**](docs/DefaultApi.md#statusGet) | **GET** /status | Get Health of node.


## Documentation for Models

 - [Argument](docs/Argument.md)
 - [Capacity](docs/Capacity.md)
 - [Contract](docs/Contract.md)
 - [ContractRequest](docs/ContractRequest.md)
 - [Feature](docs/Feature.md)
 - [FieldError](docs/FieldError.md)
 - [Health](docs/Health.md)
 - [Info](docs/Info.md)
 - [NotFoundError](docs/NotFoundError.md)
 - [Result](docs/Result.md)
 - [ValidationError](docs/ValidationError.md)


## Documentation for Authorization

All endpoints do not require authorization.
Authentication schemes defined for the API:

## Recommendation

It's recommended to create an instance of `ApiClient` per thread in a multithreaded environment to avoid any potential issues.

## Author



