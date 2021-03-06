# coding: utf-8

"""
    Aces Service API

    API Specification for Aces Services for blockchain interoperability. 

    OpenAPI spec version: 1.0.0
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from __future__ import absolute_import

import os
import sys
import unittest

import com.arkaces.aces_service_api
from com.arkaces.aces_service_api.rest import ApiException
from com.arkaces.aces_service_api.apis.aces_service_api import AcesServiceApi


class TestAcesServiceApi(unittest.TestCase):
    """ AcesServiceApi unit test stubs """

    def setUp(self):
        self.api = com.arkaces.aces_service_api.apis.aces_service_api.AcesServiceApi()

    def tearDown(self):
        pass

    def test_contracts_id_get(self):
        """
        Test case for contracts_id_get

        Get Service Contract.
        """
        pass

    def test_contracts_post(self):
        """
        Test case for contracts_post

        Create Service Contract
        """
        pass

    def test_health_get(self):
        """
        Test case for health_get

        Get Health of node.
        """
        pass

    def test_root_get(self):
        """
        Test case for root_get

        Get Service Info.
        """
        pass


if __name__ == '__main__':
    unittest.main()
