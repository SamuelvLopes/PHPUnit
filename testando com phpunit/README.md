# PHPUnit
Curso completo usando PHPUnit, aprenda a construir testes unitários na prática usando uma aplicação real...

teste de integração - testam a aplicação de forma integrada
teste unitario - testa cada menor parte do codigo

broad integration tests
narrow integration tests

composer init
composer require --dev phpunit/phpunit ^9.5

# comando para testar diretamente o arquivo
## ./vendor/bin/phpunit src/OrderBundle/Test/Validators/NotEmptyValidatorTest.php
## ./vendor/bin/phpunit src/OrderBundle/Test/Validators/NumericValidatorTest.php
# também é possivel executar os testes no diretorio
## ./vendor/bin/phpunit src/OrderBundle/Test/Validators/


// sempre colocar no nome do cenario
//o que está sendo testado
//quais as circustancias
//qual o resultado esperado