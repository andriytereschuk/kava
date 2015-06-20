
<div class="col-sm-5 col-md-4">
	<div class="sidebar">
		<a href="" class="red-btn to-shop">Перейти в магазин</a>

		<div class="cat-nav">
			<h2>Категорії</h2>

			<ul>
				<li><a href="">Акції</a></li>
				<li><a href="">Підписка на каву</a></li>
				<li><a href="">Фестивалі</a></li>
				<li><a href="">Дайджест</a></li>
				<li><a href="">Наші кафе</a></li>
				<li><a href="">Різдвяна кава</a></li>
				<li><a href="">Кава для армії</a></li>
			</ul>
		</div>

		<div class="date-aside">
			<h2>Пошук по даті</h2>
			<div id="eventCalendar"></div>
			<!-- http://www.vissit.com/projects/eventCalendar/ -->
			<script src="cal/js/jquery.eventCalendar.js"></script>

			<script>
				$(document).ready(function() {
					$("#eventCalendar").eventCalendar({
						eventsjson: 'cal/json/events.json.php',
						monthNames: [ "Січень", "Лютий", "Березень", "Квітень", "Травень", "Червень",
							"Липень", "Серпень", "Вересень", "Жовтень", "Листопад", "Грудень" ],
						dayNames: [ 'Неділя','Понеділок','Вівторок','Середа','Четвер',
							'Пятниця','Субота' ],
						dayNamesShort: [ 'Нд','Пн','Вт','Ср','Чт', 'Пт','Сб' ],
						txt_noEvents: "Немає постів за цей період",
						txt_SpecificEvents_prev: "",
						txt_SpecificEvents_after: ". Найденні статті:",
						txt_next: ">",
						txt_prev: "<",
						txt_NextEvents: "Нещодавні статті:",
						txt_GoToEventUrl: "Детальніше",
						txt_Loading: "Загрузка...",
						moveSpeed: 10,
						moveOpacity: 0
					});
				});
			</script>
		</div>

		<div class="soc-aside">
			<h2>instagram</h2>
			<img style="width:100%;" src="images/ins-temp.jpg" alt="">
		</div>

		<div class="soc-aside">
			<img style="width:100%;" src="images/tw-temp.jpg" alt="">
		</div>

		<div class="soc-aside">
			<h2>Світ кави на Facebook</h2>
			<img style="width:100%;" src="images/fs-temp.jpg" alt="">
		</div>

		<div class="subscribe">
			<h2>Підпишіться на розсилку</h2>
			<div class="subscribe-wrap">
				<input type="email" class="in" placeholder="Email">
				<button class="email-submit">ок</button>
			</div>
		</div>

		<div class="soc-others">
			<a href=""><img src="images/fb-grey.png" alt=""></a>
			<a href=""><img src="images/tw-grey.png" alt=""></a>
			<a href=""><img src="images/g+grey.png" alt=""></a>
		</div>
	</div>
</div>