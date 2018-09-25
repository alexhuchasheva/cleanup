<?php
/*
  Template Name: Шаблон страниц с калькуляторами (после ремонта)
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
            <h2>Расчет цены уборки после ремонта</h2>
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
<?php echo do_shortcode('[metaslider id="92"]'); ?>
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
      <td>Производим обеспыливание после ремонта стен, полов, потолка, мебели и фурнитуры</td>
      <td>Производим обеспыливание после ремонта стен, полов, потолка, мебели и фурнитуры</td>
      <td>Производим обеспыливание после ремонта стен, полов, потолка, мебели и фурнитуры</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Моем полы специальным раствором после ремонта</td>
      <td>Моем полы специальным раствором после ремонта</td>
      <td>Моем полы специальным раствором после ремонта</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Удаляем мелкие следы ремонта в виде капель краски, строительного скотча и штукатурки</td>
      <td>Удаляем мелкие следы ремонта в виде капель краски, строительного скотча и штукатурки</td>
      <td>Удаляем мелкие следы ремонта в виде капель краски, строительного скотча и штукатурки</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Пылесосим полы и плинтуса</td>
      <td>Моем грязную посуду в раковине</td>
      <td>Чистим и дезинфицируем сантехнику</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Пылесосим мебель</td>
      <td>Моем и обезжириваем кухонную плиту снаружи</td>
      <td>Моем ванную или душевую кабину, унитаз, раковину</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Пылесосим стены от пыли, стык потолков</td>
      <td>Моем холодильник и духовой шкаф снаружи</td>
      <td>Чистим фурнитуру и краны</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Моем полы во всех доступных места</td>
      <td>Аккуратно разложим вещи в шкафчики (по согласованию с клиентом)</td>
      <td>Моем и дезинфицируем пол</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Моем плинтуса</td>
      <td>Протираем кухонные столешницы</td>
      <td>Отмоем зеркала до блеска</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Отодвигаем нетяжелую мебель и убираем за ней</td>
      <td>Протираем от пыли всю кухонную технику</td>
      <td>Протрем светильники</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Протираем от грязи и пыли все поверхности мебели</td>
      <td>Удаляем жировые отложения со стен кухонного гарнитура</td>
      <td>Помоем плитку и стены от пола до потолка</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>Моем и протираем светильники (кроме люстр)</td>
      <td>Удаляем жир с плитки вокруг жаровых панелей и плиты</td>
      <td>Отмоем внутренние поверхности шкафчиков и полочек</td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>Отмываем подоконники</td>
      <td>Протираем все зеркальные и стеклянные поверхности</td>
      <td>Удаляем налет и водный камень с сантехники</td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>Отмываем радиаторы и трубы отопления</td>
      <td>Убираем пыль и грязь внутри шкафов, при условии что они пустые, личные вещи не трогаем (либо по согласованию с клиентом)</td>
      <td>Аккуратно расставим тюбики по вашему желанию</td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>Протираем дверные проемы, фурнитуру дверей</td>
      <td>Протрем светильники</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>Моем и протираем межкомнатные двери</td>
      <td>Моем отсеки для мусорных корзин</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>Моем зеркала и стеклянные поверхности</td>
      <td>Выносим мусор и заменяем пакеты в корзинах</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td>Протираем столы, стулья, фурнитуру кресел и мебели</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">18</th>
      <td>Удаляем пыль с предметов интерьера (вазы, рамы картин и пр.)</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">19</th>
      <td>Протираем поверхности внутри шкафов и другой мебели (если они пустые, личные вещи не трогаем)</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">20</th>
      <td>Протираем всю аудио-видео технику от пыли</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">21</th>
      <td>Убираем мусор находящийся на полу</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">22</th>
      <td>Протираем полки, при условии что они пустые</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">23</th>
      <td>Аккуратно заправим кровать в спальне</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">24</th>
      <td>Разложим разбросанные вещи в аккуратные стопки</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">25</th>
      <td>В коридоре аккуратно расставим обувь</td>
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