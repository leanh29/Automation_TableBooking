<?php 
use Step\Acceptance\FirstStep;
use Step\Acceptance\SecondStep;
use Step\Acceptance\ThirdStep;
class SecondCest
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
    public function idSort(SecondStep $I)
    {
        /**
         *  I sort Id column
         */
        $I->idSort();
    }
    public function typeSort(SecondStep $I)
    {
        /**
         * I sort type type
         */
        $I->typeSort();
    }
    public function tableIdSort(FirstStep $I, $scenario)
    {
        /**
         * I sort type table TD
         */
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->tableID,$this->num,$this->date,$this->des,$this->startTime);
        $I=new SecondStep($scenario);
        $I->idSort();
    }
    public function numberOfPersonSort(FirstStep $I, $scenario)
    {
        /**
         * I sort type number of person
         */
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->tableID,$this->num,$this->date,$this->des,$this->startTime);
        $I=new SecondStep($scenario);
        $I->numberOfPersonSort();
    }
    public function dateSort(FirstStep $I, $scenario)
    {
        /**
         * I sort type date
         */
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->tableID,$this->num,$this->date,$this->des,$this->startTime);
        $I=new SecondStep($scenario);
        $I->dateSort();
    }
    public function descriptionSort(FirstStep $I, $scenario)
    {
        /**
         * I sort type description
         */
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->tableID,$this->num,$this->date,$this->des,$this->startTime);
        $I=new SecondStep($scenario);
        $I->descriptionSort();
    }
    public function durationSort(FirstStep $I, $scenario)
    {
        /**
         * I sort type duration
         */
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->tableID,$this->num,$this->date,$this->des,$this->startTime);
        $I=new SecondStep($scenario);
        $I->durationSort();
    }
    public function startTimeSort(FirstStep $I, $scenario)
    {
        /**
         * I sort type start time
         */
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->tableID,$this->num,$this->date,$this->des,$this->startTime);
        $I=new SecondStep($scenario);
        $I->startTimeSort();
    }
    public function deleteSort(FirstStep $I, $scenario)
    {
        /**
         * I sort type delete
         */
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->tableID,$this->num,$this->date,$this->des,$this->startTime);
        $I=new SecondStep($scenario);
        $I->dateSort();
    }
    public function editSort(FirstStep $I, $scenario)
    {
        /**
         * I sort type edit
         */
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->tableID,$this->num,$this->date,$this->des,$this->startTime);
        $I=new SecondStep($scenario);
        $I->editSort();
    }
}
