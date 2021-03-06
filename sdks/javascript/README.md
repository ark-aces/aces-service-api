# aces_service_api

AcesServiceApi - JavaScript client for aces_service_api
API Specification for Aces Services for blockchain interoperability. 
This SDK is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 1.0.0
- Build package: io.swagger.codegen.languages.JavascriptClientCodegen

## Installation

### For [Node.js](https://nodejs.org/)

#### npm

To publish the library as a [npm](https://www.npmjs.com/),
please follow the procedure in ["Publishing npm packages"](https://docs.npmjs.com/getting-started/publishing-npm-packages).

Then install it via:

```shell
npm install aces_service_api --save
```

#### git
#
If the library is hosted at a git repository, e.g.
https://github.com/GIT_USER_ID/GIT_REPO_ID
then install it via:

```shell
    npm install GIT_USER_ID/GIT_REPO_ID --save
```

### For browser

The library also works in the browser environment via npm and [browserify](http://browserify.org/). After following
the above steps with Node.js and installing browserify with `npm install -g browserify`,
perform the following (assuming *main.js* is your entry file):

```shell
browserify main.js > bundle.js
```

Then include *bundle.js* in the HTML pages.

### Webpack Configuration

Using Webpack you may encounter the following error: "Module not found: Error:
Cannot resolve module", most certainly you should disable AMD loader. Add/merge
the following section to your webpack config:

```javascript
module: {
  rules: [
    {
      parser: {
        amd: false
      }
    }
  ]
}
```

## Getting Started

Please follow the [installation](#installation) instruction and execute the following JS code:

```javascript
var AcesServiceApi = require('aces_service_api');

var api = new AcesServiceApi.AcesServiceApi()

var id = "id_example"; // {String} Contract identifier.


var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
api.contractsIdGet(id, callback);

```

## Documentation for API Endpoints

All URIs are relative to *https://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AcesServiceApi.AcesServiceApi* | [**contractsIdGet**](docs/AcesServiceApi.md#contractsIdGet) | **GET** /contracts/{id} | Get Service Contract.
*AcesServiceApi.AcesServiceApi* | [**contractsPost**](docs/AcesServiceApi.md#contractsPost) | **POST** /contracts | Create Service Contract
*AcesServiceApi.AcesServiceApi* | [**healthGet**](docs/AcesServiceApi.md#healthGet) | **GET** /health | Get Health of node.
*AcesServiceApi.AcesServiceApi* | [**rootGet**](docs/AcesServiceApi.md#rootGet) | **GET** / | Get Service Info.


## Documentation for Models

 - [AcesServiceApi.Capacity](docs/Capacity.md)
 - [AcesServiceApi.Contract](docs/Contract.md)
 - [AcesServiceApi.ContractRequest](docs/ContractRequest.md)
 - [AcesServiceApi.FieldError](docs/FieldError.md)
 - [AcesServiceApi.Health](docs/Health.md)
 - [AcesServiceApi.Info](docs/Info.md)
 - [AcesServiceApi.ModelInterface](docs/ModelInterface.md)
 - [AcesServiceApi.NotFoundError](docs/NotFoundError.md)
 - [AcesServiceApi.ValidationError](docs/ValidationError.md)


## Documentation for Authorization

 All endpoints do not require authorization.

