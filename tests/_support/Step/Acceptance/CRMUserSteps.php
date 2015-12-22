<?php
namespace Step\Acceptance;

class CRMUserSteps extends \AcceptanceTester
{
    /**
     * Opening Page
     */
    function amInQueryCustomerUi()
    {
        $I = $this;
        $I->amOnPage('/customers/query');
    }
    
    /**
     * Fill phone field with data
     * 
     * @param array $customer_data
     */
    function fillInPhoneFieldWithDataFrom($customer_data)
    {
        $I = $this;
        $I->fillField('PhoneRecord[number]', $customer_data['PhoneRecord[number]']);
    }
    /**
     * Click Search button
     */
    function clickSearchButton()
    {
        $I = $this;
        $I->click('Search');
    }
    
    /**
     * Check if we are on Customer List UI
     */
    function seeIAmInListCustomersUi()
    {
        $I = $this;
        $I->seeCurrentUrlMatches('/customers/');
    }
    
    /**
     * Check if we can see customer in search results
     * 
     * @param array $customer_data
     */
    function seeCustomerInList($customer_data)
    {
        $I = $this;
        $I->see($customer_data['CustomerRecord[name]'], '#search_results');
    }
    
    /**
     * Check if we can't see customer in search results
     * 
     * @param array $customer_data
     */
    function dontSeeCustomerInList($customer_data)
    {
        $I = $this;
        $I->dontSee($customer_data['CustomerRecord[name]'], '#search_results');
    }
}
