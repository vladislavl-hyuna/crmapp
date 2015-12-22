<?php
namespace Step\Acceptance;

class CRMOperatorSteps extends \AcceptanceTester
{
    function amInAddCustomerUi()
    {
        $I = $this;
        $I->amOnPage('/customers/add');
    }
    
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
    
    function fillCustomerDataForm()
    {
        $I = $this;
        foreach ($fieldsData as $key ){
            $I->fillField($key, $value);
        }
    }
    
    function submitCustomerDataForm()
    {
        $I = $this;
        $I->click('Submit');
    }
    
    function seeIAmInListCustomersUi()
    {
        $I = $this;
        $I->seeCurrentUrlMatches('/customers/');
    }
    
    function amInListCustomersUi()
    {
        $I = $this;
        $I->amOnPage('/customers');
    }
}