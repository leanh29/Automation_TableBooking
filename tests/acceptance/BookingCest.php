<?php 
use Step\Acceptance\FirstStep;
use Step\Acceptance\InfoStep;
class BookingCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
    protected $reservation;
    public function __construct()
    {
        /**
         * i create an array include information of booking table
         */
        $this->reservation=
            [
                'tableId'=>"3",
                'num'=>'4',
                'date'=>'10/05/2019',
                'des'=>'check',
                'startTime'=>'19'
            ];
    }
    public function creataNewSuccessfully(FirstStep $I, $scenario)
    {
        /**
         * create new table with invalid ID
         */
        $I->wantToTest('I want to do create new table successfully');
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $I->inputForCreate($this->reservation);
        $I->comment('Create Successfully');
    }
    public function withoutTableID(FirstStep $I, $scenario)
    {
        /**
         * create new table without table ID (required)
         */
        $I->wantToTest('I want to test if i do fill table id');
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $this->reservation['tableId']="";
        $I->inputForCreate($this->reservation);
        $I->erroNotification();
    }
    public function withoutNumberOfPerson(FirstStep $I, $scenario)
    {
        /**
         * create new table without number of person (required)
         */
        $I->wantToTest('I want to test if I do not fill in number of person');
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $this->reservation['tableId']='3';
        $this->reservation['num']="";
        $I->inputForCreate($this->reservation);
        $I->erroNotification();
    }
    public function withoutStartTime(FirstStep $I, $scenario)
    {
        /**
         * ccreate new table without start time (required)
         */
        $I->wantToTest('I want to text if i do not fill in start time');
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $this
            ->reservation['num']='4';
        $this->reservation['startTime']="";
        $I->inputForCreate($this->reservation);
        $I->erroNotification();
    }
    public function withoutElementNotRequired(FirstStep $I,$scenario)
    {
        /**
         * create new table without date (not required)
         */
        $I->wantToTest('I want to do create new table successfully without element not required');
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $this->reservation['startTime']='18';
        $this->reservation['date']="";
        $I->inputForCreate($this->reservation);
        $I->comment('Create Successfully');
    }
    public function invalidTableId(FirstStep $I, $scenario)
    {
        /**
         * create new table with ID that not exist
         */
        $I->wantToTest('I want to create new table with table Id not exist');
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $this->reservation['date']='10/05/2019';
        $this->reservation['tableId']="9";
        $I->inputForCreate($this->reservation);
        $I->notExist();
    }
    public function invalidStartTime(FirstStep $I, $scenario)
    {
        /**
         * create new table with invalid start time
         */
        $I->wantToTest('I want to do create new table with invalid start time');
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $this->reservation['tableId']='2';
        $this->reservation['startTime']="10";
        $I->inputForCreate($this->reservation);
        $I->wait(5);
        $I->erroMess();
//        $I->waitForText(UpdatePage::$erroMess,30);
//        $I->waitForElementVisible(UpdatePage::$erroMess,30);
//        $I->waitForElementVisible(UpdatePage::$erroIcon,30);
    }
}
