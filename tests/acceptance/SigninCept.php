<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->see('CÔNG TY CỔ PHẦN THƯƠNG MẠI ĐIỆN TỬ WESHOP VIỆT NAM');