<?php
  $I = new AcceptanceTester($scenario);
  //entrar no form'
  $I->amOnPage('/form-teste.php');
  //preencher o form
  $I->fillField('name', 'Maximiliano');
  $I->fillField('idade', '25');
  $I->fillField('email', 'maximilianodacruz@gmail.com');
  $I->wait(2);
  //clicar no botão
  $I->click('button');

  //próxima tela verificar a url, o titulo, o h1 e a nome dinamico
  $I->wait(2);
  $I->seeCurrentUrlEquals('/form-teste-codeception/response.php?name=Maximiliano&idade=25&email=maximilianodacruz%40gmail.com&button=');
  $I->see('Formulário preenchido com sucesso');
  $I->see('Maximiliano', '.Maximiliano');
 ?>
