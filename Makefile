OUT=false

# Tests
.PHONY: tests tests.creational tests.structual tests.behavioral
tests:
	./vendor/bin/phpunit src
tests.creational:
	./vendor/bin/phpunit src --group creational
tests.structual:
	./vendor/bin/phpunit src --group structual
tests.behavioral:
	./vendor/bin/phpunit src --group behavioral
