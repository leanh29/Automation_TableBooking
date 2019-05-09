<?php
use Step\Acceptance\FirstStep;
use Step\Acceptance\SecondStep;
use Step\Acceptance\ThirdStep;
class ThirdCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
    protected $tableID;
    protected $num;
    protected $date;
    protected $des;
    protected $startTime;
    public function __construct()
    {
        $this->tableID='3';
        $this->num='2';
        $this->date='10/05/2019';
        $this->des='le anh';
        $this->startTime='18';
    }
    public function clearInput(FirstStep $I, $scenario)
    {
        /**
         *  clear input after fill in all field
         */
        $I->wantToTest('I want to test if i clear input feild');
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForClear($this->tableID,$this->num,$this->des,$this->date,$this->startTime);
    }
    public function reloadData(FirstStep $I)
    {
        /**
         * check click reload
         */
        $I->reloadData();
    }
    public function deleteData(FirstStep $I)
    {
        /**
         * check click delete
         */
        $I->deleteData();
    }
    public function editData(FirstStep $I, $scenario)
    {
        /**
         * do edit data
         */
        $I->wantToTest('I want to do create new table successfully');
        $I->goToEdit();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->tableID,$this->num,$this->date,$this->des,$this->startTime);
    }
}
