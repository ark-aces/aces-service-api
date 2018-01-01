# aces_service_api

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
    <groupId>com.arkaces</groupId>
    <artifactId>aces_service_api</artifactId>
    <version>1.0.0</version>
    <scope>compile</scope>
</dependency>
```

### Gradle users

Add this dependency to your project's build file:

```groovy
compile "com.arkaces:aces_service_api:1.0.0"
```

### Others

At first generate the JAR by executing:

    mvn package

Then manually install the following JARs:

* target/aces_service_api-1.0.0.jar
* target/lib/*.jar

## Getting Started

Please follow the [installation](#installation) instruction and execute the following Java code:

```java

import com.arkaces.*;
import com.arkaces.auth.*;
import io.swagger.client.model.*;
import com.arkaces.aces_service_api.AcesServiceApi;

import java.io.File;
import java.util.*;

public class AcesServiceApiExample {

    public static void main(String[] args) {
        
        AcesServiceApi apiInstance = new AcesServiceApi();
        String id = "id_example"; // String | Contract identifier.
        try {
            Contract result = apiInstance.contractsIdGet(id);
            System.out.println(result);
        } catch (ApiException e) {
            System.err.println("Exception when calling AcesServiceApi#contractsIdGet");
            e.printStackTrace();
        }
    }
}

```

## Documentation for API Endpoints

All URIs are relative to *https://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AcesServiceApi* | [**contractsIdGet**](docs/AcesServiceApi.md#contractsIdGet) | **GET** /contracts/{id} | Get Service Contract.
*AcesServiceApi* | [**contractsPost**](docs/AcesServiceApi.md#contractsPost) | **POST** /contracts | Create Service Contract
*AcesServiceApi* | [**healthGet**](docs/AcesServiceApi.md#healthGet) | **GET** /health | Get Health of node.
*AcesServiceApi* | [**rootGet**](docs/AcesServiceApi.md#rootGet) | **GET** / | Get Service Info.


## Documentation for Models

 - [Capacity](docs/Capacity.md)
 - [Contract](docs/Contract.md)
 - [ContractRequest](docs/ContractRequest.md)
 - [FieldError](docs/FieldError.md)
 - [Health](docs/Health.md)
 - [Info](docs/Info.md)
 - [ModelInterface](docs/ModelInterface.md)
 - [NotFoundError](docs/NotFoundError.md)
 - [ValidationError](docs/ValidationError.md)


## Documentation for Authorization

All endpoints do not require authorization.
Authentication schemes defined for the API:

## Recommendation

It's recommended to create an instance of `ApiClient` per thread in a multithreaded environment to avoid any potential issues.

## Author



