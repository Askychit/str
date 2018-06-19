<html>
<meta charset="utf-8">
<font size="5">
<title> Прямой доступ к памяти. </title>
<h3 align="center">Прямой доступ к памяти</h3>
<img typeof="foaf:Image" src="http://www.lcard.ru/sites/default/files/styles/termin_style_image/public/TERMINS/dma.png?itok=e37l38cW" width="300" height="261" alt="DMA" />

<p align="justify">Термин <em>прямой доступ к памяти (ПДП, DMA - Direct Memory Access)</em> возник на заре развития процессорной техники. Этот термин фактически  означает прямой доступ к памяти со стороны периферийного устройства без участия процессора. Смысл такого доступа очевиден: освободить процессор от рутинных <em>операций пересылки данных</em> между внешним устройством и памятью, а также из памяти в память, и за счёт этого сэкономить ресурс процессора (процессорное время), чтобы повысить его производительность на<em> операциях обработки данных</em>. </p>
<p align="justify">То устройство (функциональный узел), которое управляет пересылкой данных, называется <em>контроллером ПДП</em>. По мере развития процессорной техники, контроллеры ПДП стали многоканальными, что позволило поддерживать <em>несколько каналов доступа к памяти</em> от разных <em>периферийных устройств, а </em>также  и <em>из памяти в память</em>. Сами архитектуры процессорных систем сильно видоизменялись, контроллеры ПДП, периферия и память входили в разные части процессорных систем, но общая идея прямого доступа к памяти фактически не изменилась. Упомянем далее несколько конкретных реализаций DMA.</p>
<p align="justify">У сигнальных процессоров ADSP-2185M есть два варианта доступа к внутренней памяти процессора со стороны внешнего устройства: IDMA  и BDMA. Сигнальные процессоры Blackfin  ADSP-BF523 имеют канал доступа Host DMA к памяти процессора со стороны внешнего устройства.</p>
<p align="justify">Режим DMA поддерживается на интерфейсах компьютера: ISA, PCI, PCI Express. Но для осуществления пересылок по DMA необходимо, чтобы периферийное устройство (вставленная в слот плата) поддерживала DMA. </p>
<p align="justify">Остановимся отдельно на режиме <em>BUS Master</em> компьютерных интерфейсов PCI и PCI Express.  Плата, вставленная в слот, поддерживающая режим  <em>BUS Master</em>, способна сама на время захватить шину, полностью взяв на себя роль контроллера ПДП. Для пользователя ПК это означает, что процессор во время пересылки данных по DMA (из платы в память ПК и обратно) может заниматься другими важными задачами, в том числе, и задачами пользователя. </p>
<p align="justify">Важно сказать, что <strong>отсутствие поддержки DMA, например, со стороны используемого PCI-устройства для системного интегратора должно означать, что для сохранения свойства воспроизводимости (унификации, переносимости) системы на другие компьютеры, нельзя закладываться на максимальные скорости передачи данных PCI-устройства, заявленные производителем</strong>, поскольку, в каждом конкретном случае максимальная скорость будет сильно зависеть не только от самого PCI-устройства, но и от текущей загрузки процессора компьютера, особенностей программной среды и чипсета материнской платы, от ситуации, когда не-DMA обращения к PCI-устройству на низком уровне системы будут не одинаково эффективно реализованы на фоне групповых пересылок, что может привести к зависимости от типа материнской платы, от операционной системы.</p>









<p align="center">
<a href="ntd.php"> Вернуться к разделам</a></br></br>
<a href="2.1.php"> Вернуться к темам</a> </br></br>
<a href="2.2.php"> Назад</a></p></p>
</font>
</html>