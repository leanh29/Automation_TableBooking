<?php
namespace Step\Acceptance;
use Page\Acceptance\UpdatePage;
use Page\Acceptance\FunctionPage;
class InfoStep extends \AcceptanceTester
{
    public function inputForCreate($reservation = array())
    {
        /**
         * i do create new booking
         */
        $I=$this;
        $I->waitForElementVisible(UpdatePage::$tableID,30);
        $I->fillField(UpdatePage::$tableID,$reservation['tableId']);
        $I->waitForElementVisible(UpdatePage::$numberOfPerson,30);
        $I->fillField(UpdatePage::$numberOfPerson,$reservation['num']);
        $I->waitForElementVisible(UpdatePage::$date,30);
        $I->fillField(UpdatePage::$date,$reservation['date']);
        $I->waitForElementVisible(UpdatePage::$description,30);
        $I->fillField(UpdatePage::$description,$reservation['des']);
        $I->waitForElementVisible(UpdatePage::$startTime,30);
        $I->fillField(UpdatePage::$startTime,$reservation['startTime']);
        $I->click(FunctionPage::$addButton);
    }
    public function inputForClear($reservation = array())
    {
        /**
         * i do fill in all date anđ then delete them
         */
        $I=$this;
        $I->waitForElementVisible(UpdatePage::$tableID,30);
        $I->clearField(UpdatePage::$tableID);
        $I->fillField(UpdatePage::$tableID,$reservation['tableId']);
        $I->waitForElementVisible(UpdatePage::$numberOfPerson,30);
        $I->clearField(UpdatePage::$numberOfPerson);
        $I->fillField(UpdatePage::$numberOfPerson,$reservation['num']);
        $I->waitForElementVisible(UpdatePage::$date,30);
        $I->clearField(UpdatePage::$date);
        $I->fillField(UpdatePage::$date,$reservation['date']);
        $I->waitForElementVisible(UpdatePage::$description,30);
        $I->clearField(UpdatePage::$description);;
        $I->fillField(UpdatePage::$description,$reservation['des']);
        $I->waitForElementVisible(UpdatePage::$startTime,30);
        $I->clearField(UpdatePage::$description);
        $I->fillField(UpdatePage::$startTime,$reservation['startTime']);
        $I->click(FunctionPage::$clearButton);
    }
    public function erroNotification()
    {
        $I=$this;
        $I->waitForElementVisible(UpdatePage::$erroMess,30);
        $I->waitForElementVisible(UpdatePage::$erroIcon,30);
    }
    public function erroMess()
    {
        $I=$this;
        $I->see(UpdatePage::$erroMess);
    }
    public function notExist()
    {
        $I=$this;
        $I->waitForElementVisible(UpdatePage::$notExist);
    }
}