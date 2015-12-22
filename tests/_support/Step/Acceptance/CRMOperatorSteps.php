<?php
namespace Step\Acceptance;

class CRMOperatorSteps extends \AcceptanceTester
{
    /**
     * Opening page on the route
     */
    function amInAddCustomerUi()
    {
        $I = $this;
        $I->amOnPage('/customers/add');
    }
    
    /**
     * Get fake customer data
     * 
     * @return array Fake Customer data
     */
    function imagineCustomer()
    {
        $faker = \Faker\Factory::create();
        return [
            'CustomerRecord[name]' => $faker->name,
            'Customerrecord[birth_date]' => $faker->date('Y-m-d'),
            'CustomerRecord[notes]' => $faker->sentence(8),
            'PhoneRecord[number]' => $faker->phoneNumber
        ];
    }
    
    /**
     * Fill fields in customer data form
     * 
     * @param array $$fieldsData
     */
    function fillCustomerDataForm($fieldsData)
    {
        $I = $this;
        foreach ($fieldsData as $key => $value ){
            $I->fillField($key, $value);
        }
    }
    
    /**
     * Submit input customer data
     */
    function submitCustomerDataForm()
    {
        $I = $this;
        $I->click('Submit');
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
     * Opening page Customer List UI
     */
    function amInListCustomersUi()
    {
        $I = $this;
        $I->amOnPage('/customers');
    }
}