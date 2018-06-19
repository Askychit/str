<html>
<meta charset="utf-8">
<font size="5">
<title> Структура электронной вычислительной машины. </title>
<h3 align="center">Структура электронной вычислительной машины.</h3>
<FONT COLOR="black" FACE="times new roman" SIZE="4" > <p align="justify">
Для начала рассмотрим как устройства присоединяются к друг другу.

Системный блок - центральное устройство компьютера. Остальные устройства (их называют внешние или периферийные) присоединяются к нему через разъемы и порты.

Разъемы для присоединения внешних устройств к системному блоку находятся на заднем торце системного блока. Каждый из разъемов индивидуален по своей конфигурации - перепутать кабели от периферийных устройств при подключении невозможно.

Внутри системного блока объединяющим центром является материнская плата - к ней присоединяются все устройства, в том числе процессор.

Для правильной работы с внешним устройством процессору необходим посредник - контроллер ( обозначим его К) - который знает, как работать с данным устройствам.

Ряд контроллеров смонтирован сразу на материнской плате, например, конроллеры клавиатуры и дисков. Другие располагаются на специальных платах, называемых адаптерами. Адаптеры устанавливаются на материнскую плату.

Контроллер можно рассматривать как специализированный процессор, управляющий работой "вверенного ему" внешнего устройства по специальным встроенным программам обмена. Такой процессор имеет собственную систему команд. Например, контроллер накопителя на гибких магнитных дисках (дисковода) умеет позиционировать головку на нужную дорожку диска, читать или записывать сектор, форматировать дорожку и т.п. Результаты выполнения каждой операции заносятся во внутренние регистры памяти контроллера и могут быть в дальнейшем прочитаны центральным процессором.
Таким образом, наличие интеллектуальных внешних устройств может существенно изменять идеологию обмена. Центральный процессор при необходимости произвести обмен выдает задание на его осуществление контроллеру. Дальнейший обмен информацией может протекать под руководством контроллера без участия центрального процессора. Последний получает возможность "заниматься своим делом", т.е. выполнять программу дальше. 

Разъемы- физическое устройство, соединяющее два устройства.
Порт- логическое устройство. Выполняет две функции:

служит "посредником" при передаче данных между компьютером и устройствами ввода/вывода.

выдает процессору сигнал прерывания, по которому начинается процесс прерывания.



Перейдем теперь к обсуждению вопроса о внутренней структуре ЭВМ, содержащей интеллектуальные контроллеры.
<body>
<p align="center"><img src="ab2998c.jpg" ></p>
</body>



<p align="justify">
Из рисунка видно, что для связи между отдельными функциональными узлами ЭВМ используется общая шина (часто ее называют магистралью).

Шина состоит из трех частей:

шина данных, по которой передается информация;

шина адреса, определяющая, куда передаются данные;

шина управления, регулирующая процесс обмена информацией.

Описаннаю схему легко пополнять новыми устройствами - это свойство называют открытостью архитектуры. Для пользователя это означает возможность свободно выбирать состав внешних устройств для своего компьютера.

При увеличении потоков информации между устройствами ЭВМ единственная магистраль перегружается, что существенно тормозит работу компьютера. Поэтому в состав ЭВМ могут вводиться одна или несколько дополнительных шин.
</p> </font>
<p align="center">
<a href="ntd.php"> Вернуться к разделам</a></br></br>
<a href="1.1.php"> Вернуться к темам</a> </br></br>
<a href="tem.php"> Назад</a></p></p>
</font>
</html>