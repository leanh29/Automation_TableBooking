<?php
namespace Page\Acceptance;

class UpdatePage
{
    // include url of current page
    public static $URL = '';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * @var string all xpath for text filed
     */
    public static $tableID='(//input[@name=\'tableID\'])';
    public static $numberOfPerson='(//input[@name=\'numberofperson\'])';
    public static $date='(//input[@name=\'date\'])';
    public static $description='(//textarea[@name=\'description\'])';
    public static $startTime='(//input[@name=\'startTime\'])';
    public static $erroMess='(//div[@class="t-error"])';
    public static $erroIcon='(//img[@class="t-error-icon"])';
    public static $notExist='(//h2[text()="Table ID is not existing !"])';
    public static $alreadyBook='(//h2[text()="This table has already booked with this start time!"])';
}
