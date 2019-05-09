<?php
namespace Page\Acceptance;

class SortPage
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
     * @var string all xpath for sorting
     */
    public static $idSort='(//img[@id="id:sort"])';
    public static $typeSort='(//img[@id="type:sort"])';
    public static $tableIdSort='(//img[@id="tableID:sort"])';
    public static $numberOfPersonSort='(//img[@id="numberofperson:sort"])';
    public static $dateSort='(//img[@id="date:sort"])';
    public static $descriptionSort='(//img[@id="description:sort"])';
    public static $durationSort='(//img[@id="duration:sort"])';
    public static $startTimeSort='(//img[@id="startTime:sort"])';
    public static $deleteSort='(//img[@id="delete:sort"])';
    public static $editSort='(//img[@id="edit:sort"])';
}
