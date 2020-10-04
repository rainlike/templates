# PHP templates

**Creational**  
* **Singleton**
```
Позволяет содержать только один экземпляр объекта в приложении,
которое будет обрабатывать все обращения, запрещая создавать новый экземпляр.
```
* **Static Factory**
```
Подобно AbstractFactory, этот паттерн используется для создания ряда связанных
или зависимых объектов. Разница между этим шаблоном и Абстрактной Фабрикой
заключается в том, что Статическая Фабрика использует только один статический метод,
чтобы создать все допустимые типы объектов. Этот метод, обычно, называется factory или build.
```
* **Simple Factory**
```
Она отличается от Статической Фабрики тем, что собственно не является статической.
Таким образом, вы можете иметь множество фабрик с разными параметрами.
Простая фабрика всегда должна быть предпочтительнее Статической фабрики!
```
* **Factory Method**
```
Выгодное отличие от SimpleFactory в том,
что вы можете вынести реализацию создания объектов в подклассы.
В простых случаях, этот абстрактный класс может быть только интерфейсом.
```

run tests:
```
make tests.creational
```
run tests exclusively for `creational` templates
```
make tests.creational
```
run tests exclusively for `structual` templates
```
make tests.structual
```
run tests exclusively for `behavioral` templates
```
make tests.behavioral
```

© по мотивам
[designpatternsphp.readthedocs.io](https://designpatternsphp.readthedocs.io/ru/latest/README.html)
