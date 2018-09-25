<?php
/*
  Template Name: Шаблон страниц с калькуляторами (поддерживающая)
 */
?>

<!-- Здесь html/php код шаблона -->
<?php get_header(); ?>
</div>
</div>

<div class="container page-content">

    <?php while (have_posts()): the_post() ?>

        <?php the_content(); ?>

    <?php endwhile; ?>
</div>

<div class="container-fluid calculator">
<div class="container">
        <div id="app">
            <h2>Расчет цены поддерживающей уборки</h2>
            <br>
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3>Услуги</h3>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control" v-model="tax">
                                        <option v-for="room in rooms" v-bind:value="room.tax">
                                            {{ room.number }} комната
                                        </option>
                                    </select>
                                    <span class="rooms-price">Выбрано комнат на {{ tax }} ₽</span>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr v-for="service in services">
                                    <td>{{service.name }}</td>
                                    <td>{{service.price }} руб.</td>
                                    <td>
                                        <button type="button" class="btn btn-link" v-on:click="service.quantity -= 1"
                                            v-bind:disabled="service.quantity < 1">&minus;</button>
                                        {{service.quantity }}
                                        <button type="button" class="btn btn-link" v-on:click="service.quantity += 1">&plus;</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                            <h3>Итого</h3>
                        <div class="card-body">
                            <table class="table">
                                <tr v-for="service in services" v-if="service.quantity > 0">
                                    <td>{{service.name }}</td>
                                    <td>{{service.quantity }} шт.</td>
                                    <td>{{service.price * service.quantity }} руб.</td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-muted">
                            Итого: {{ total }} руб.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

<div class="container slider">
    <?php echo do_shortcode('[metaslider id="60"]'); ?>
    </div>

    <div class="container table-features">
    <h3>ЧТО ВХОДИТ В УБОРКУ?</h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">В комнатах и коридоре</th>
      <th scope="col">На кухне</th>
      <th scope="col">В ванной</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Аккуратно заправим кровать в спальне</td>
      <td>Моем и обезжириваем кухонную плиту снаружи</td>
      <td>Чистим и дезинфицируем сантехнику</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Пропылесосим полы</td>
      <td>Пылесосим и моем пол кухни</td>
      <td>Протрем светильники</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Проведем влажную уборку полов</td>
      <td>Моем холодильник и духовой шкаф снаружи</td>
      <td>Моем ванную или душевую кабину, унитаз, раковину</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Протираем плинтуса</td>
      <td>Протираем кухонные столешницы</td>
      <td>Чистим фурнитуру и краны</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Протираем пыль со всех доступных мест</td>
      <td>Протираем от пыли всю кухонную технику</td>
      <td>Моем и дезинфицируем пол</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Моем и протираем подоконники</td>
      <td>Протираем все зеркальные и стеклянные поверхности</td>
      <td>Отмоем зеркала до блеска</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Моем зеркала и другие стеклянные поверхности (кроме окон)</td>
      <td>Протрем светильники</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Аккуратно сложим вещи в стопки</td>
      <td>Выносим мусор и заменяем пакеты в корзинах</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Уберем мусор с пола</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Протрем светильники</td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
    </div>

    <script>
    let app = new Vue({
        el: '#app',
        data: {
            services: [{
                    name: 'Дополнительный санузел (1 санузел входит в базовую стоимость)',
                    price: 300,
                    quantity: 1
                },
                {
                    name: 'Мойка окон',
                    price: 350,
                    quantity: 0
                },
                {
                    name: 'Мытье духовки/СВЧ внутри',
                    price: 300,
                    quantity: 0
                },
                {
                    name: 'Мытье люстры',
                    price: 200,
                    quantity: 0
                },
                {
                    name: 'Глажка',
                    price: 300,
                    quantity: 0
                },
                {
                    name: 'Мытье холодильника внутри',
                    price: 350,
                    quantity: 0
                },
                {
                    name: 'Поменять белье',
                    price: 150,
                    quantity: 0
                },
                {
                    name: 'Особые поручения',
                    price: 700,
                    quantity: 0
                },
                {
                    name: 'Уборка на балконе',
                    price: 500,
                    quantity: 0
                },
                {
                    name: 'Доставка спец. оборудования',
                    price: 1200,
                    quantity: 0
                },
                {
                    name: 'Парогенератор',
                    price: 700,
                    quantity: 0
                },
                {
                    name: 'Заехать за ключами',
                    price: 300,
                    quantity: 0
                },
            ],
            tax: 1200,
            rooms: [
                {
                    number: 1,
                    tax: 1200,
                },
                {
                    number: 2,
                    tax: 2000,
                },
                {
                    number: 3,
                    tax: 2500
                },
            ],


        },
        methods: {

        },
        computed: {
            total: function () {
                let result = 0;
                this.services.forEach(function (service) {
                    result = result + (service.price * service.quantity)
                });
                return result + this.tax;
            }
        }
    });
</script>

<?php get_footer(); ?>