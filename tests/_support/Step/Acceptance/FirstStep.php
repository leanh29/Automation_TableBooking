<?php
namespace Step\Acceptance;
use Page\Acceptance\FunctionPage;
use Page\Acceptance\SortPage;

class FirstStep extends \AcceptanceTester
{
    public function goToCreate()
    {
        /**
         *  first step to create or edit table
         */
        $I=$this;
        $I->amOnPage(FunctionPage::$URL);
        $I->waitForElementVisible(FunctionPage::$new,30);
        $I->click(FunctionPage::$new);
    }
    public function goToEdit()
    {
        /**
         * firrst step to do edit
         */
        $I=$this;
        $I->amOnPage(FunctionPage::$URL);
        $I->waitForElementVisible(FunctionPage::$edit1,30);
        $I->click(FunctionPage::$edit1);
    }
    public function reloadData()
    {
        /**
         * i do reload data
         */
        $I=$this;
        $I->amOnPage(FunctionPage::$URL);
        $I->waitForElementVisible(FunctionPage::$reloadData);
        $I->click(FunctionPage::$reloadData);
    }
    public function deleteData()
    {
        /**
         * i do delete data
         */
        $I=$this;
        $I->amOnPage(FunctionPage::$URL);
        $I->waitForElementVisible(FunctionPage::$delete1);
        $I->click(FunctionPage::$delete1);
    }
}