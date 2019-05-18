<?php
use Step\Acceptance\FirstStep;
use Step\Acceptance\SortStep;
use Step\Acceptance\InfoStep;
class FunctionCest
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
    public function clearInput(FirstStep $I, $scenario)
    {
        /**
         *  clear input after fill in all field
         */
        $I->wantToTest('I want to test if i clear input field');
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $I->inputForClear($this->reservation);
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
        $I=new InfoStep($scenario);
        $I->inputForCreate($this->reservation);
    }
}
