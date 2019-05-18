<?php
namespace Step\Acceptance;
use Page\Acceptance\SortPage;
use Page\Acceptance\UpdatePage;
use Page\Acceptance\FunctionPage;
class SortStep extends \AcceptanceTester
{
    public function idSort()
    {
        /** @var sort in id column $I */
        $I=$this;
        $I->amOnPage(FunctionPage::$URL);
        $I->waitForElementVisible(SortPage::$idSort,30);
        $I->click(SortPage::$idSort);
    }
    public function typeSort()
    {
        /**
         * sort in type column
         */
        $I=$this;
        $I->amOnPage(FunctionPage::$URL);
        $I->waitForElementVisible(SortPage::$typeSort,30);
        $I->click(SortPage::$typeSort);
    }
    public function tableIdSort()
    {
        /**
         * sort in type column
         */
        $I=$this;
        $I->amOnPage(FunctionPage::$URL);
        $I->waitForElementVisible(SortPage::$tableIdSort,30);
        $I->click(SortPage::$tableIdSort);
    }
    public function numberOfPersonSort()
    {
        /**
         * sort in number column
         */
        $I=$this;
        $I->amOnPage(FunctionPage::$URL);
        $I->waitForElementVisible(SortPage::$numberOfPersonSort,30);
        $I->click(SortPage::$numberOfPersonSort);
    }
    public function dateSort()
    {
        /**
         * sort in date column
         */
        $I=$this;
        $I->amOnPage(FunctionPage::$URL);
        $I->waitForElementVisible(SortPage::$dateSort,30);
        $I->click(SortPage::$dateSort);
    }
    public function descriptionSort()
    {
        /**
         * sort in description column
         */
        $I=$this;
        $I->amOnPage(FunctionPage::$URL);
        $I->waitForElementVisible(SortPage::$descriptionSort,30);
        $I->click(SortPage::$descriptionSort);
    }
    public function durationSort()
    {
        /**
         * sort in duration column
         */
        $I=$this;
        $I->amOnPage(FunctionPage::$URL);
        $I->waitForElementVisible(SortPage::$durationSort,30);
        $I->click(SortPage::$durationSort);
    }
    public function startTimeSort()
    {
        /**
         * sort in start time column
         */
        $I=$this;
        $I->amOnPage(FunctionPage::$URL);
        $I->waitForElementVisible(SortPage::$startTimeSort,30);
        $I->click(SortPage::$startTimeSort);
    }
    public function deleteSort()
    {
        /**
         * sort in delete column
         */
        $I=$this;
        $I->amOnPage(FunctionPage::$URL);
        $I->waitForElementVisible(SortPage::$deleteSort,30);
        $I->click(SortPage::$dateSort);
    }
    public function editSort()
    {
        /**
         * sort in edit column
         */
        $I=$this;
        $I->amOnPage(FunctionPage::$URL);
        $I->waitForElementVisible(SortPage::$editSort,30);
        $I->click(SortPage::$editSort);
    }
}