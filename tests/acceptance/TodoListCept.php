<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Hello world');
$I->amOnPage('/');
$I->see('TODO LIST', 'h1');

$I->seeElement('input', ['name' => 'texto', 'type' => 'text']);
$I->seeElement('button', ['type' => 'submit']);
