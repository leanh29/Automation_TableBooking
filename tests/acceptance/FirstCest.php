<?php 
use Step\Acceptance\FirstStep;
use Step\Acceptance\ThirdStep;
class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
    protected $tableID;
    protected $noTableID;
    protected $invalidTableId;
    protected $num;
    protected $noNum;
    protected $date;
    protected $noDate;
    protected $des;
    protected $startTime;
    protected $noTime;
    protected $invalidTime;
    protected $erroMes;
    public function __construct()
    {
        $this->tableID='3';
        $this->noTableID='';
        $this->invalidTableId='9';
        $this->num='2';
        $this->noNum='';
        $this->date='10/05/2019';
        $this->noDate;
        $this->des='le anh';
        $this->startTime='18';
        $this->noTime='';
        $this->invalidTime='15';
    }
    public function creataNewSuccessfully(FirstStep $I, $scenario)
    {
        /**
         * create new table with invalid ID
         */
        $I->wantToTest('I want to do create new table successfully');
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->tableID,$this->num,$this->date,$this->des,$this->startTime);
        $I->comment('Create Successfully');
    }
    public function withoutTableID(FirstStep $I, $scenario)
    {
        /**
         * create new table without table ID (required)
         */
        $I->wantToTest('I want to test if i do not fill in table id');
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->noTableID,$this->num,$this->date,$this->des,$this->startTime);
        $I->erroNotification();
    }
    public function withoutNumberOfPerson(FirstStep $I, $scenario)
    {
        /**
         * create new table without number of person (required)
         */
        $I->wantToTest('I want to test if I do not fill in number of person');
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->tableID,$this->noNum,$this->date,$this->des,$this->startTime);
        $I->erroNotification();
    }
    public function withoutStartTime(FirstStep $I, $scenario)
    {
        /**
         * ccreate new table without start time (required)
         */
        $I->wantToTest('I want to text if i do not fill in start time');
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->tableID,$this->num,$this->date,$this->des,$this->noTime);
        $I->erroNotification();
    }
    public function withoutElementNotRequired(FirstStep $I,$scenario)
    {
        /**
         * create new table without date (not required)
         */
        $I->wantToTest('I want to do create new table successfully withour element not required');
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->tableID,$this->num,$this->noDate,$this->des,$this->startTime);
        $I->comment('Create Successfully');
    }
    public function invalidTableId(FirstStep $I, $scenario)
    {
        /**
         * create new table with ID that not exist
         */
        $I->wantToTest('I want to create new table successfully without element not required');
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->invalidTableId,$this->num,$this->date,$this->des,$this->startTime);
        $I->notExist();
    }
    public function invalidSttartTime(FirstStep $I, $scenario)
    {
        /**
         * create new table with invalid start time
         */
        $I->wantToTest('I want to do create new table successfully withour element not required');
        $I->goToCreate();
        $I=new ThirdStep($scenario);
        $I->inputForCreate($this->tableID,$this->num,$this->date,$this->des,$this->invalidTime);
        $I->wait(5);
        $I->erroMess();
//        $I->waitForText(UpdatePage::$erroMess,30);
//        $I->waitForElementVisible(UpdatePage::$erroMess,30);
//        $I->waitForElementVisible(UpdatePage::$erroIcon,30);
    }
}
