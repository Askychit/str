<html>
<meta charset="utf-8">
<font size="5">
<title> Системная плата и ее основные параметры. </title>
<h3 align="center">Системная плата и ее основные параметры.</h3>
<p align="justify">Системная (материнская) плата является важнейшим устройством персонального компьютера, выступая интегратором для других компонентов. Совместно с процессором и оперативной памятью она образует платформу, определяющую основные функциональные возможности компьютера и его производительность. Ключевой элемент системной платы — набор микросхем системной логики (НМСЛ). Он обеспечивает взаимодействие других компонентов и функционирование базовых интерфейсов. Такой набор часто называют чипсетом.<br />             </p>           <p align="justify">ЧИПСЕТ — транскрипция англоязычного термина (Chip Set), обозначающего комплект микросхем системной логики, обслуживающий интерфейсы материнской платы.<br /> Помимо НМСЛ системная плата содержит базовую систему ввода-вывода (BIOS), элементы питания компонентов, монтажные детали. Основными параметрами системной платы являются:</p>           <ul><li>форм-фактор (типоразмер); </li><li>применяемый чипсет; </li><li>поддерживаемый интерфейс процессора; </li><li>тип устанавливаемой оперативной памяти; </li><li>поддерживаемые интерфейсы; </li><li>тип и возможности BIOS.</li></ul></td>

<p align="justify"><strong>1) Форм-фактор</strong>, или типоразмер системной платы, определяет ее габариты, параметры электропитания, расположение монтажных элементов, размещение различных компонентов. Спецификации форм-фактора также содержат требования к электрическим и механическим параметрам блока питания и корпуса. В последних версиях <em>форм-фактора</em> определяются и требования к системе охлаждения компьютера.</p>                          <table border="1" cellspacing="0" cellpadding="2" width="100%"><tbody><tr>               <td align="center"><strong>Наименование </strong></td>               <td align="center"><strong>Ширина, мм</strong></td>               <td align="center"><strong>Глубина, мм</strong></td>             </tr>             <tr>               <td>AT</td>               <td align="center">305</td>               <td align="center">330</td>             </tr>             <tr>               <td>Baby AT</td>               <td align="center">216</td>               <td align="center">330</td>             </tr>             <tr>               <td>ATX</td>               <td align="center">305</td>               <td align="center">244</td>             </tr>             <tr>               <td>Mini-ATX</td>               <td align="center">284</td>               <td align="center">208</td>             </tr>             <tr>               <td>micro-ATX</td>               <td align="center">244</td>               <td align="center">244</td>             </tr>             <tr>               <td>FlexATX</td>               <td align="center">229</td>               <td align="center">191</td>             </tr>             <tr>               <td>BTX</td>               <td align="center">325</td>               <td align="center">266,7</td>             </tr>             <tr>               <td>microBTX</td>               <td align="center">264</td>               <td align="center">266,7</td>             </tr>             <tr>               <td>picoBTX</td>               <td align="center">203</td>               <td align="center">266,7</td>             </tr>             <tr>               <td>ITX</td>               <td align="center">215</td>               <td align="center">191</td>             </tr>             <tr>               <td>Mini-ITX</td>               <td align="center">170</td>               <td align="center">170</td>             </tr>             <tr>               <td>nanoITX</td>               <td align="center">120</td>               <td align="center">120</td>             </tr>             <tr>               <td>INLX</td>               <td align="center">229</td>               <td align="center">345</td>             </tr>             <tr>               <td>LPX</td>               <td align="center">229</td>               <td align="center">330</td>             </tr>             <tr>               <td>Mini-LPX</td>               <td align="center">229</td>               <td align="center">279</td></tr></tbody></table><br/><h2></h2>
<p align="justify"><strong>2) Чипсет</strong> традиционной архитектуры состоит из двух микросхем, которые называют южным и северным мостами. Северный мост по своей сути является связующим мостом и контролирует потоки данных различных шин. К нему подключены ключевые интерфейсы компьютера: системная шина, шина памяти, шина графического контроллера (видеокарты), шина для сопряжения с южным мостом.<br /> Южный мост отвечает за периферийные устройства и различные внешние шины. Так, к нему подключены: шины расширения, порты USB, IDE-контроллер, дополнительные IDE, SATA-или FireWire-контроллеры.</p>           <p align="center">               <img src="chipset.png" border="0" title="Чипсет" />              </p>           <p align="left"><span class="style1 style2">Типовой <em>чипсет</em> состоит из двух крупных функциональных блоков: северного моста и южного моста. Функциональные блоки реализуют либо в отдельных микросхемах, как показано на снимке, либо в одной микросхеме, объединяющей оба блока</span><br />             </p>           <p align="justify">В современных наборах системной логики северный и южный мосты часто объединены в одной микросхеме, однако архитектурно разделение на мосты сохраняется. </p>           <p align="justify">Особняком стоят интегрированные наборы системной логики — чипсеты со встроенным графическим ядром. Как правило, на таких чипсетах проектируются бюджетные платформы, которые позволяют сэкономить средства за счет видеокарты. <em>Чипсеты</em> с интегрированным графическим ядром служат основой для построения офисных и домашних персональных компьютеров с невысокими требованиями к 3D-производительности.</p><br/><h2></h2>
<p align="justify"> <strong>3) Поддерживаемый интерфейс процессора.</strong> Обычно набор системной логики создается конструкторами с ориентацией на конкретное семейство процессоров. То есть обеспечивается поддержка определенного процессорного интерфейса. В это понятие включают тип разъема и системной шины, электрические параметры (разводка контактов, напряжение питания ядра и блоков ввода-вывода процессора), возможности BIOS по поддержке конкретных моделей процессоров.</p>             <table border="1" cellspacing="0" cellpadding="1" width="100%" style="font-size: 12px">             <tbody><tr>               <td width="31%" align="center"><strong>Тип интерфейса</strong></td>               <td width="69%" align="center"><strong>Модели процессоров</strong></td>             </tr>             <tr>               <td>Slot 1</td>               <td>Intel Celeron, Intel Pentium II, Intel Pentium III (Deshutes)</td>             </tr>             <tr>               <td>Slot 2</td>               <td>Intel Xeon</td>             </tr>             <tr>               <td>Slot 3</td>               <td>AMD Athlon </td>             </tr>             <tr>               <td>Socket 7 </td>               <td>Intel Pentium MMX, AMD K6-2 (66Мгц), AMD K6-III (66 Мгц)</td>             </tr>             <tr>               <td>SuperSocket 7</td>               <td>AMD K6-2 (100 Мгц), AMD K6-III (100 Мгц) </td>             </tr>             <tr>               <td>Socket 8</td>               <td>Intel Pentium Pro </td>             </tr>             <tr>               <td>Socket 370</td>               <td>Intel Pentium (Coppermine), Intel Celeron, VIA C3</td>             </tr>             <tr>               <td>Socket 370 FC-PGA</td>               <td>Intel Pentium (Tualatin), Intel Celeron, VIA C3 </td>             </tr>             <tr>               <td>Socket A</td>               <td>AMD Duron, AMD Athlon, AMD Athlon XP, AMD Sempron</td>             </tr>             <tr>               <td>Socket 423</td>               <td>Intel Pentium4 (Villamette), Celeron </td>             </tr>             <tr>               <td>Socket 478 </td>               <td>Intel Pentium4 (Northwood), Celeron</td>             </tr>             <tr>               <td>Socket 754</td>               <td>AMD Athlon 64, Sempron </td>             </tr>             <tr>               <td>Socket 775</td>               <td>Intel Pentium4, Pentium D, Celeron D</td>             </tr>             <tr>               <td>Socket 939</td>               <td>AMD Athlon 64, Athlon 64 X2, Athlon 64 FX</td>             </tr>             <tr>               <td>Socket AM2</td>               <td>AMD Athlon 64 X2, Athlon FX</td>             </tr>             <tr>               <td>Socket 940</td>               <td>AMD Opteron</td>             </tr>           </tbody></table>
<p align="justify"><strong>4) Тип устанавливаемой оперативной памяти.</strong> Возможность установки на системной плате того или иного типа <em>опе­ративной памяти</em> определяется типом контроллера памяти. Такой контроллер интегрирован либо в НМСЛ, либо в процессор. Первый вариант применяется в системных платах для платформы Intel. Интегрированный в процессор контроллер памяти используется в платформах AMD. </p>           <p align="justify">На момент написания книги платформой Intel поддерживалась системная память типа DDR2 SDRAM. Количество разъемов, максимальный объем устанавливаемых модулей памяти и рабочие частоты определяются конкретной модификацией чипсета. Например, старшие модификации чипсетов для платформы Intel поддерживают двухканалыный режим работы <em>оперативной памяти</em> объемом до 8 Гбайт при рабочих частотах до 667 МГц. </p>           <p align="justify">Современные процессоры AMD имеют встроенный контроллер памяти DDR с рабочими частотами до 400 МГц. Новейшие модели процессоров с интерфейсом Socked AM2 поддерживают память типа DDR2.</p><br/><h2></h2>
<p align="justify"><strong>5) Поддерживаемые интерфейсы. </strong> Важнейшая функция НМСЛ и системной платы в целом — поддержка современных интерфейсов. Обычно базовую функциональность обеспечивает собственно чипсет. Производители системных плат за счет установки дополнительных <em>контроллеров</em> либо расширяют количество типовых портов, либо добавляют поддержку новейших или специфических интерфейсов.</p>           <p align="justify">Хотя требования к наличию конкретных интерфейсов официально не утверждены, негласно сложился индустриальный стандарт, предусматривающий минимально необходимую функциональность:</p>           <ul><li>системная шина и разъем процессора; </li><li>шина памяти; </li><li>порт AGP 8х или PCI Express 16х для видеокарты; </li><li>порты плат расширения PCI и/или PCI Express; </li><li>два канала Parallel ATA для накопителей; </li><li>два канала Serial АТА для накопителей; </li><li>не менее четырех портов USB для внешних  устройств; </li><li>сетевой контроллер шины Ethernet; </li><li>шина LPC для портов FDD, СОМ, LPT и PS/2; </li><li>встроенный звуковой<em> контроллер</em> спецификации  АС'97 или HD Audio. </li></ul>           <p align="justify">Расширенная функциональность обычно подразумевает наличие второй шины PCI Express 16х (для установки парной видеокарты), контроллера RAID (для создания массивов дисковых накопителей), контроллера шины IEEE1394 (для подключения видеокамер и скоростных внешних устройств). </p>           <p align="justify">В последнее время стало «модным» устанавливать на материнские платы высшей ценовой категории контроллеры беспроводных интерфейсов Bluetooth и Wi-Fi, многоканальные звуковые <em>контроллеры</em> High Definition Audio, аппаратный сетевой брандмауэр и другие специфические компоненты.</p><br/><h2></h2>
<p align="justify"><strong>6) BIOS. </strong>Важным элементом системной платы является <strong>BIOS</strong> (Basic Input/Output System) — базовая система ввода-вывода. Так называют встроенное программное обеспечение, которое доступно для процессора без обращения к накопителям. В микросхеме BIOS содержится программный код, необходимый для управления клавиатурой, видеокартой, дисками, портами и другими компонентами. Обычно BIOS размещается в микросхеме постоянного запоминающего устройства (ПЗУ), расположенной на материнской плате компьютера. Такая технология позволяет обеспечить доступ к BIOS независимо от работоспособности внешних по отношению к материнской плате компонентов (например, загрузочных дисков). </p>           <p align="justify">Поскольку доступ к оперативной памяти осуществляется значительно быстрее, чем к ПЗУ, многие изготовители предусматривают при включении питания автоматическое копирование ВЮ5 из ПЗУ в оперативную память. Задействованная при этом область оперативной памяти называется теневым ПЗУ. </p>           <p align="justify">В микросхемах BIOS использовались различные типы памяти для хранения программного кода. В настоящее время практически повсеместно применяют микросхемы Flash <em>BIOS</em>, код в которых перезаписывается при помощи специальной программы. Такой подход облегчает модернизацию ВЮ5 при появлении новых компонентов, которым нужно обеспечить поддержку. </p>           <p align="justify">Большая часть программного кода BIOS стандартизирована, то есть является одинаковой и обязательной для всех типов персональных компьютеров. Сравнительно небольшая часть кода отвечает за реализацию особых функций конкретной модели системной платы.</p>           <p align="justify">Современные типы BIOS, поддерживающие технологию Plug-and-Play, называют PnP BIOS, при этом поддержка такой архитектуры обеспечивается только микросхемами Flash ROM. Полная поддержка технологии Plug-and-Play со стороны операционной системы Windows XP возможна только в случае применения PnP BIOS. Обычно это обстоятельство служит веским основанием для принятия решения о перезаписи устаревшего<em> BIOS</em>. </p>           <p align="justify">Периодическое обновление BIOS полезно также тем, что в новых версиях исправляются мелкие ошибки и недоработки, добавляется поддержка каких-то функций и устройств.</p><br/><h2></h2>




<p align="center">
<a href="ntd.php"> Вернуться к разделам</a></br></br>
<a href="1.1.php"> Вернуться к темам</a> </br></br>
<a href="1.3.php"> Назад</a></p></p>
</font>
</html>