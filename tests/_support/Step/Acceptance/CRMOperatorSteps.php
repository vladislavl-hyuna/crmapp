<?php
namespace Step\Acceptance;

class CRMOperatorSteps extends \AcceptanceTester
{
    function amInAddCustomerUi()
    {
        $I = $this;
        $I->amOnPage('/customers/add');
    }
    
    function fillCustomerDataForm()
    {
        
    }
    
    function submitCustomerDataForm()
    {
        
    }
    
    function seeIAmInListCustomersUi()
    {
        
    }
}