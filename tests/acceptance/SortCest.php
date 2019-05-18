<?php 
use Step\Acceptance\FirstStep;
use Step\Acceptance\SortStep;
use Step\Acceptance\InfoStep;
class SortCest
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
    public function idSort(SortStep $I)
    {
        /**
         *  I sort Id column
         */
        $I->idSort();
    }
    public function typeSort(SortStep $I)
    {
        /**
         * I sort type
         */
        $I->typeSort();
    }
    public function tableIdSort(FirstStep $I, $scenario)
    {
        /**
         * I sort table TD
         */
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $I->inputForCreate($this->reservation);
        $I=new SortStep($scenario);
        $I->idSort();
    }
    public function numberOfPersonSort(FirstStep $I, $scenario)
    {
        /**
         * I sort number of person
         */
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $I->inputForCreate($this->reservation);
        $I=new SortStep($scenario);
        $I->numberOfPersonSort();
    }
    public function dateSort(FirstStep $I, $scenario)
    {
        /**
         * I sort date
         */
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $I->inputForCreate($this->reservation);
        $I=new SortStep($scenario);
        $I->dateSort();
    }
    public function descriptionSort(FirstStep $I, $scenario)
    {
        /**
         * I sort description
         */
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $I->inputForCreate($this->reservation);
        $I=new SortStep($scenario);
        $I->descriptionSort();
    }
    public function durationSort(FirstStep $I, $scenario)
    {
        /**
         * I sort duration
         */
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $I->inputForCreate($this->reservation);
        $I=new SortStep($scenario);
        $I->durationSort();
    }
    public function startTimeSort(FirstStep $I, $scenario)
    {
        /**
         * I sort start time
         */
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $I->inputForCreate($this->reservation);
        $I=new SortStep($scenario);
        $I->startTimeSort();
    }
    public function deleteSort(FirstStep $I, $scenario)
    {
        /**
         * I sort delete
         */
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $I->inputForCreate($this->reservation);
        $I=new SortStep($scenario);
        $I->dateSort();
    }
    public function editSort(FirstStep $I, $scenario)
    {
        /**
         * I sort edit
         */
        $I->goToCreate();
        $I=new InfoStep($scenario);
        $I->inputForCreate($this->reservation);
        $I=new SortStep($scenario);
        $I->editSort();
    }
}
