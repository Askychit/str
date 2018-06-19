<html>
<meta charset="utf-8">
<font size="5">
<title> Взаимодействие элементов при работе микропроцессора. </title>
<h3 align="center">Взаимодействие элементов при работе микропроцессора.</h3>
<p align="justify">Работой МП управляет программа, записанная в ОП ЭВМ. Адрес очередной команды хранится в счетчике команд IP (Instruction Pointer) и в одном из сегментных регистров (чаще всего в CS). Каждый из них в реальном режиме имеет длину 16 бит, тогда как физический адрес ОП должен иметь длину 20 бит. Несогласованность длины машинно­го слова (16 бит) и длины физического адреса ОП (20 бит) приводит к тому, что в командах невозможно указать физический адрес ОП — его приходится формировать, собирать из разных регистров МП в процессе работы.</p>
 <p align="justify">В реальном режиме вся ОП делится на сегменты (длина сегмента — 64 Кбайта). Адрес ОП состоит из двух частей: номер сегмента в ОП (база сегмента) и номер ячейки внутри данного сегмента (смещение относительно начала сегмента). Базовый адрес сегмента образуется добавлением к номеру сегмента справа четырех нулей. Поскольку пос­ледние четыре разряда абсолютного (физического) адреса сегмента всегда нулевые, сегмент может начинаться не с любой ячейки ОП, а только с «параграфа» — начала 16-байтового блока ОП. В структуре микропроцессора имеется несколько регистров сегментов, например в i8086 — четыре:</p>
 <p>CS — программный сегмент;</p>
 <p>DS — сегмент данных (информационный сегмент);</p>
 <p>SS — стековый сегмент;</p>
 <p>ES — расширенный сегмент (дополнительный сегмент данных).</p>
 <p align="justify">Номер ячейки внутри сегмента (смещение) называется также <strong><i>ис­полнительным </i></strong>адресом. В большинстве случаев в адресной части ко­манды указывается именно исполнительный адрес — номер сегмента чаще всего подразумевается по умолчанию. Однако допускается указание и полного адреса ОП в виде префиксной структуры: «сегмент: смещение». Если сегмент в команде не указывается, значит работа ведется внутри текущего сегмента (характер выполняемой работы и сегментный регистр, определяющий текущую базу сегмента, зависят от вида выполняемой команды).</p>
 <p align="justify"> Номер сегмента так же, как и смещение, имеет длину 2 байта. При вычислении физического адреса ОП сегмент и смещение суммируют­ся, но сегмент перед суммированием сдвигается влево на 4 бита. В результате суммирования образуется физический адрес ОП длиной 20 бит.</p>
 <p align="justify">В защищенном режиме базовые адреса сегментов хранятся в дескрипторных таблицах и имеют длину 24 или 32 бита (в зависимости от типа МП). В сегментных же регистрах хранится селектор, содержа­щий номер дескрипторной таблицы и дескрипторное смещение, т.е. порядковый номер дескриптора (в котором и хранится базовый адрес сегмента) в данной дескрипторной таблице (рис. 5.6).</p>
 <p><img src="image012.jpg" /></p>
 <p align="justify"><strong>Рис. 5.6.</strong>Формирование физического адреса ОП в защищенном режиме</p>
 <p align="justify">Физический адрес очередной команды через внутреннюю магист­раль МП и интерфейс памяти поступает на шину адреса системной магистрали. Одновременно из устройства управления (УУ) исполни­тельного блока на шину управления выдается команда (управляющий сигнал) в ОП, предписывающая выбрать число, находящееся по адресу, указанному в системной магистрали. Выбранное число, яв­ляющееся очередной командой, поступает из ОП через шину данных системной магистрали, интерфейс памяти, внутреннюю магистраль МП на регистр команд (INST).</p>
 <p align="justify">Из команды в регистре команд выделяется код операции, кото­рый поступает в УУ исполнительного блока для выработки управля­ющих сигналов, настраивающих микропроцессор на выполнение тре­буемой операции.</p>
 <p align="justify">В зависимости от используемого в команде режима адресации организуется выборка необходимых исходных данных.</p>

<p align="center">
<a href="ntd.php"> Вернуться к разделам</a></br></br>
<a href="1.1.php"> Вернуться к темам</a> </br></br>
<a href="2.1tem.php"> Назад</a></p></p>
</font>
</html>