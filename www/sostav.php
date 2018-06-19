<html>
<meta charset="utf-8">
<font size="5">
<title> Состав, устройство и принцип действия основной памяти. </title>
<h3 align="center">Состав, устройство и принцип действия основной памяти.</h3>
<p align="justify">
Комплекс технических
средств, реализующих функцию памяти,
называется <i>запоминающим
устройством (ЗУ)</i>.
Запоминающие устройства необходимы
для размещения в них команд и данных.
Они обеспечивают центральному процессору
доступ к программам и информации.
Запоминающие устройства делятся на
основную, или оперативную память (ОП),
сверхоперативную память (СОЗУ) и внешние
запоминающие устройства (ВЗУ).</p><p>
Основная память
включает в себя два типа устройств:
<i><b>оперативное
запоминающее устройство (ОЗУ, или RAM –
Random Access Memory)</b></i>
и <i><b>постоянное
запоминающее устройство (ПЗУ, или </b></i><i><b>ROM</b></i><i><b>
– </b></i><i><b>Read</b></i><i><b>
</b></i><i><b>Only</b></i><i><b>
</b></i><i><b>Memory</b></i><i><b>)</b></i>.</p><p>
Существует два
типа ОЗУ: <i><b>статическое</b></i>
и <i><b>динамическое</b></i>.
</p><p align="justify">
Статическое ОЗУ
(Static RAM, SRAM) конструируется с использованием
D-триггеров.  Статическое ОЗУ работает
очень быстро. Обычно время доступа
составляет несколько наносекунд. Поэтому
статическое ОЗУ часто используется в
качестве кэш-памяти второго уровня. </p><p align="justify">
Динамическое ОЗУ
(Dynamic RAM, DRAM) представляет собой массив
ячеек, каждая из которых содержит
транзистор и крошечный конденсатор.
Конденсаторы могут быть  заряженными
и разряженными, что позволяет хранить
нули и единицы. Так как электрический
заряд имеет тенденцию исчезать, каждый
бит в динамическом ОЗУ должен обновляться
(перезаряжаться) каждые несколько
миллисекунд, чтобы предотвратить утечку
данных. О таком обновлении должна 
заботиться внешняя логика, поэтому
динамическое ОЗУ требует более сложного
сопряжения, чем статическое, однако
этот недостаток компенсируется большим
объемом. Динамическому ОЗУ нужен только
1 транзистор и 1 конденсатор  на бит
(статическому ОЗУ требуется в лучшем
случае 6 транзисторов на бит), поэтому
динамическое ОЗУ имеет очень высокую
плотность записи (много битов на одну
микросхему). По этой причине основная
память почти всегда строится на основе
динамических ОЗУ. Однако динамические
ОЗУ работают очень медленно (время
доступа занимает десятки наносекунд).
Таким образом, сочетание  кэш-памяти на
основе статического ОЗУ и основной
памяти на основе динамического ОЗУ
соединяет в себе преимущества обоих
устройств.</p><p align="justify">
За время существования
ПК производилось несколько типов
динамических ОЗУ. </p><p align="justify">
Самый старый тип
— <b>FPM</b>
(Fast Page Mode — быстрый постраничный  режим).
Это ОЗУ представляет собой матрицу
битов. Аппаратное обеспечение  представляет
адрес строки, а затем — адреса столбцов.
</p><p align="justify">
FPM постепенно
замещался памятью <b>EDO</b>
(Extended Data Output — память  с расширенными
возможностями вывода), которая позволяет
обращаться к памяти еще до того, как
закончилось предыдущее обращение. Такой
конвейерный режим, хотя и не ускоряет
доступ к памяти, повышает пропускную
способность,  позволяя получить больше
слов в секунду.  </p><p align="justify">
Впоследствии, с
увеличением быстродействия процессоров,
сформировалась потребность в более
быстрых микросхемах памяти, и тогда на
смену асинхронным  режимам FPM и EDO пришли
синхронные динамические ОЗУ (Synchronous 
DRAM, <b>SDRAM</b>).
Данное устройство представляет собой
гибрид статического и динамического
ОЗУ. Основное преимущество синхронного
динамического ОЗУ состоит в том, что
оно исключает зависимость микросхемы
памяти от  управляющих сигналов.
Устранение зависимости от  управляющих
сигналов приводит к увеличению скорости
передачи данных между ЦП и памятью.  </p><p align="justify">
Следующим этапом
в развитии памяти SDRAM стала память <b>DDR</b>
(Double  Data Rate — передача данных с двойной
скоростью). Эта технология предусматривает
вывод данных как на фронте, так и на
спаде импульса, вследствие чего скорость
передачи увеличивается вдвое. Например,
8-разрядная микросхема  такого типа,
работающая с частотой 200 МГц, дает на
выходе два 8-разрядных  значения 200 млн
раз в секунду (разумеется, такая скорость
удерживается в течение небольшого
периода времени); таким образом,
теоретически кратковременная скорость
может достигать 3,2 Гбайт/с. </p><p align="justify">
<b>DDR2
SDRAM</b> (англ. <i>double</i><i>-</i><i>data</i><i>-</i><i>rate</i><i>
</i><i>two</i><i>
</i><i>synchronous</i><i>
</i><i>dynamic</i><i>
</i><i>random</i><i>
</i><i>access</i><i>
</i><i>memory</i> —
синхронная динамическая память с
произвольным доступом и удвоенной
скоростью передачи данных, второе
поколение) — пришла на смену памяти DDR
SDRAM. Используется в
качестве оперативной и видеопамяти.
Основное отличие DDR2 от DDR — вдвое большая
частота работы шины, по которой данные
передаются в буфер микросхемы памяти.</p><p>
Во многих случаях
данные  должны сохраняться, даже если
электричество отключено. Более того,
после установки ни программы, ни данные
не должны изменяться. Эти требования
привели к появлению ПЗУ. </p><p>
ПЗУ не позволяют
изменять и стирать хранящуюся в них
информацию (ни умышленно, ни случайно).
Данные записываются  в ПЗУ в процессе
производства. Единственный способ
изменить программу в ПЗУ — поменять
всю микросхему. </p><p>
На смену ПЗУ, были
выпущены программируемые ПЗУ (Programmable
ROM,
PROM).
Многие программируемые ПЗУ содержат
массив крошечных плавких перемычек.
Чтобы пережечь определенную перемычку,
нужно выбрать требуемые строку и столбец,
а затем приложить высокое напряжение 
к определенному выводу микросхемы.  </p><p>
Следующая разработка
этой линии — стираемое программируемое
ПЗУ  (Erasable PROM, EPROM), которое можно
программировать в условиях эксплуатации,
а также стирать с него информацию. Если
кварцевое окно в данном  ПЗУ подвергать
воздействию сильного ультрафиолетового
света в течение 15 минут, все биты
установятся в 1. Стираемые программируемые
ПЗУ обычно устроены так же, как статические
ОЗУ.</p><p>
Следующий этап —
электронно-перепрограммируемое ПЗУ
(Electronically  EPROM, EEPROM), с которого можно
стирать информацию, прилагая к нему 
импульсы. Электронно-перепрограммируемые
ПЗУ не могут конкурировать с динамическими
и  статическими ОЗУ, поскольку работают
в 10 раз медленнее, их емкость в 100 раз 
меньше, и они стоят гораздо дороже. Они
используются только в тех ситуациях, 
когда необходимо сохранять информацию
при выключении питания.  </p><p align="justify">
Более современный
тип электронно-перепрограммируемого
ПЗУ — флэш-память. В отличие от остальных
видов ПЗУ, флэш-память стирается и
записывается блоками. Многие  изготовители
производят небольшие печатные платы,
содержащие сотни мега-байтов флэш-памяти.
Они используются для хранения изображений
в цифровых камерах и для других целей.
Возможно, когда-нибудь флэш-память
вытеснит диски, что будет грандиозным
шагом вперед, учитывая время доступа в
50 нс.  Основной технической проблемой
в данный момент является то, что
флэш-память изнашивается после 100 000
операций стирания, а диски могут служить
годами независимо от того, сколько раз
они перезаписывались.</p><p align="justify">



</p><p align="justify">
Во все времена к
памяти предъявлялись три основных
требования: большой объем, высокое
быстродействие и низкая (умеренная)
стоимость.</p><p align="justify">
Эти требования
являются взаимно-противоречивыми, и их
невозможно реализовать, используя лишь
один тип ЗУ. В современных компьютерах
организуют комплекс разнотипных ЗУ,
взаимодействующих между собой и
обеспечивающих приемлемые характеристики
памяти ЭВМ для каждого конкретного
применения.</p><p align="justify">
В основе большинства
ЭВМ лежит трехуровневая организация
памяти: сверхоперативная (СОЗУ)–
оперативная (ОЗУ) – внешняя (ВЗУ). СОЗУ
и ОЗУ могут непосредственно взаимодействовать
с процессором, ВЗУ взаимодействует
только с ОЗУ.</p><p align="justify">
СОЗУ обладает
максимальным быстродействием (равным
процессорному), небольшим объемом (10<sup>3</sup>
– 10<sup>6</sup>
байтов) и располагается, как правило,
на кристалле процессорной БИС. Для
обращения к СОЗУ не требуются магистральные
(машинные) циклы. (Действия МПС по передаче
в (из) МП одного слова команды (данных)
называются машинным циклом. Командный
цикл состоит из одного или нескольких
машинных циклов.) В СОЗУ располагаются
наиболее часто используемые на данном
участке программные данные, а иногда и
фрагменты программы. </p><p align="justify">
Быстродействие
ОЗУ может быть ниже процессорного (не
более чем на порядок), а объем составляет
10<sup>6</sup>
– 10<sup>10</sup>
байтов. В ОЗУ располагаются подлежащие
выполнению программы и обрабатываемые
данные. Связь между процессором и ОЗУ
осуществляется по системному или
специализированному интерфейсу и
требует для своего осуществления
машинных циклов.</p><p align="justify">
Информация,
находящаяся в ВЗУ, не может быть
непосредственно использована процессором.
Для использования программ и данных,
расположенных в ВЗУ, их необходимо
предварительно переписать в ОЗУ. Процесс
обмена информацией между ВЗУ и ОЗУ
осуществляется средствами специального
канала или (реже) – непосредственно под
управлением процессора. Объем ВЗУ
практически неограничен, а быстродействие
на 3-6 порядков ниже процессорного.</p><p align="justify">
Положение ЗУ в
иерархии памяти определяется не
элементной базой запоминающих ячеек,
а возможностью доступа процессора к
данным, расположенным в этом ЗУ.</p><p align="justify">
При организации
памяти современных ЭВМ (МПС) особое
внимание уделяется сверхоперативной
памяти и принципам обмена между ОЗУ и
ВЗУ.</p><p align="justify">
Принято различать
СОЗУ по способу доступа к хранимой в
нем информации. По этому признаку
выделяют СОЗУ:</p><p align="justify">
- с прямым доступом</p><p align="justify">
- с ассоциативным
доступом.</p><p align="justify">
<i><b>СОЗУ с прямым
доступом (РОН – регистры общего
назначения)</b></i>
получило широкое распространение в
большинстве современных ЭВМ. Фактически
РОН – это небольшая регистровая память,
доступ к которой осуществляется
специальными командами. Стратегия
размещения данных в РОН целиком
определяется программистом (компилятором).
Обычно в РОН размещают многократно
используемые адреса, счетчики циклов,
данные активного фрагмента задачи, что
повышает вероятность обращения в ячейки
РОН по сравнению с ячейками ОЗУ.</p><p align="justify">
<i><b>Применение
СОЗУ с ассоциативным доступом</b></i>
позволяет автоматизировать процесс
размещения данных в СОЗУ, обеспечивая
подмену активных в данный момент ячеек
ОЗУ ячейками СОЗУ.</p><p align="justify">
Наличие АСОЗУ в
ЭВМ позволяет (при достаточном его
объеме и правильно выбранной стратегии
загрузки) значительно увеличить
производительность системы. Причем
наличие или отсутствие АСОЗУ никак не
отражается на построении программы.
АСОЗУ не является программно-доступным
объектом, она скрыто от пользователя.
В литературе для обозначения АСОЗУ
используется термин кэш-память (cache
– тайник).</p><p align="justify">
Одной из самых
эффективных технологий одновременного
увеличения пропускной способности и
уменьшения времени ожидания является
применение нескольких блоков кэш-памяти.
Основная технология – введение отдельной
кэш-памяти для команд и отдельной для
данных. Такая структура также называется
Гарвардской, поскольку идея использования
отдельной памяти для команд и отдельной
 памяти для данных впервые воплотилась
в компьютере Marc
III,
который был создан Говардом Айкеном в
Гарварде.</p><p align="justify">
Между разделенной
кэш-памятью и основной памятью часто
помещается кэш-память второго уровня.
Вообще говоря, может быть три и более
уровней кэш-памяти, поскольку требуются
более продвинутые системы.</p><p align="justify">
Обычно все содержимое
кэш-памяти первого уровня находится в
кэш-памяти второго уровня, а все содержимое
кэш-памяти второго уровня находится в
кэш-памяти третьего уровня.</p><p align="justify">
Работа кэш-памяти
зависит от типа локализации адресов.
Их существует два типа. <b>Пространственная
локализация</b>
основана на вероятности, что в скором
времени появится потребность обратиться
к ячейкам памяти, которые расположены
рядом с недавно вызванными ячейками.
Исходя из этого наблюдения, в кэш-память
переносится больше данных, чем требуется
в данный момент. <b>Временная
локализация</b>
имеет место, когда недавно запрашиваемые
ячейки запрашиваются снова. Это может
происходить, например, с ячейками памяти,
находящимися рядом с командами внутри
цикла. Принцип временной локализации
используется при выборе того, какие
элементы выкинуть из кэш-памяти в случае
промаха кэш-памяти. Обычно отбрасываются
те элементы, к которым давно не было
обращений.</p><p align="justify">
Во всех типах
кэш-памяти используется следующая
модель. Основная память разделяется на
блоки фиксированного размера, которые
называются строками кэш-памяти. Строка
кэш-памяти состоит из нескольких
последовательных байтов (обычно от 4 до
64). Строки нумеруются, начиная с 0, то
есть если размер строки составляет 32
байта, то строка 0 – это байты с 0 по 31,
строка 1 – байты с 32 по 63 и т.д. В любой
момент времени несколько строк находится
в кэш-памяти. Когда происходит обращение
к памяти, контроллер кэш-памяти проверяет,
есть ли нужное слово в данный момент в
кэш-памяти. Если есть, то можно сэкономить
время, требуемое на доступ к основной
памяти. Если данного слова в кэше нет,
то какая-либо строка из нее удаляется,
а вместо нее помещается нужная строка
из основной памяти или из кэш-памяти
более низкого уровня. Существует
множество вариаций данной схемы, но в
их основе всегда лежит идея держать в
кэш-памяти как можно больше часто
используемых строк, чтобы число успешных
обращений к кэш-памяти было максимальным.</p>
<p align="center">
<a href="ntd.php"> Вернуться к разделам</a></br></br>
<a href="1.1.php"> Вернуться к темам</a> </br></br>
<a href="2.1tem.php"> Назад</a></p></p>
</font>
</html>