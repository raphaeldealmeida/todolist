<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('done a task');
$I->amOnPage('/');
$I->dontSee('primeira tarefa', 'li');
$I->fillField('texto', 'primeira tarefa');
$I->click('Salvar');
$I->seeCurrentUrlEquals('/');
$I->see('primeira tarefa', 'li');
$I->seeElement('li > input', ['type' => 'checkbox']);


//$I->click('a', ['href' => '/excluir/1' ]);
$I->click('OK');

$I->seeElement('li', [ 'class' =>'text-muted']);