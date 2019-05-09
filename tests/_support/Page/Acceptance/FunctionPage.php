<?php
namespace Page\Acceptance;

class FunctionPage
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
     * @var string all xpath for doing function
     */
    public static $new='//a[text()=\'New Reservation\']';
    public static $changePage='(//a[@title=\'Go to page 2\'])';
    public static $delete1='(//a[text()=\'Delete\'])[1]';
    public static $edit1='(//td[@class=\'edit\'])[1]';
    public static $reloadData='/html/body/p[2]/a';
    public static $addButton='(//input[@class=\'t-beaneditor-submit\'])';
    public static $clearButton='(//a[text()=\'clear\'])';
}
