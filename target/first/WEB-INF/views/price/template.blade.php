

<%@attribute name=”title” required=”true” type=”java.lang.String”%>
<%@attribute name=”description” required=”true” type=”java.lang.String”%>

@include('imports', ["title"=> $titlePage ? $titlePage : 'Фабрика химчистки в Новокузнецке', "description" => $descriptionPage ? $descriptionPage :'Химчистка в Новокузнецке. Более 30 лет на рынке услуг. Работы выполняются квалифицированным персоналом по новейшим технологиям. У нас более 3000 благодарных клиентов. Постоянным заказчикам и пенсионерам предоставляем скидки до 10%. Доверяйте нам заботу о ваших вещах!'])
<body class="stretched no-transition main_page [page_preview]">
@include('header')

<div class="section nobg dark nopadding" style="
background: url('http://652.wp.shabloner.ru/themes/shabloner_652/files/st_block_80978_4_bg.jpg') left 50% top 50% / cover no-repeat fixed !important;
margin-top:unset;
margin-bottom:unset;
">
    <div class="" style="background-color: rgba(0, 0, 0, 0.75);
padding-top:60px;
padding-bottom:60px;
    ">
        <div class="container clearfix">
            <div class="divcenter center" style="max-width: 600px">
                <h2 class="notransform t600 mb-2 editable block_80978 item-option_291671 field_title">{{$title ? $title : 'Наши цены'}}</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <div class="prices">
            <div class="prices_tables">
                <div class="price-list">
                    <div class="price-list__category">
                        <h6 class="price-list__category-name"><img class="price-list__category-svg" src="/images/price/shirt.svg">Текстиль и трикотаж</h6>
                        <ul class="price-list__list hidden" data-name="textile">
                            <li class="price-list__item"><a class="price-list__link" data-target="outerwear" href="/price/outerwear">Верхняя одежда</a></li>
                            <li class="price-list__item"><a class="price-list__link" data-target="jeans" href="/price/jeans">Джинса</a></li>
                            <li class="price-list__item"><a class="price-list__link" data-target="toys" href="/price/toys">Мягкие игрушки</a></li>
                            <li class="price-list__item"><a class="price-list__link" data-target="coat" href="/price/coat">Пальто</a></li>
                        </ul>
                    </div>
                    <div class="price-list__category">
                        <h6 class="price-list__category-name"><img class="price-list__category-svg" src="/images/price/fur-coat.svg">Шубы и меховые изделия</h6>
                        <ul class="price-list__list hidden" data-name="fur">
                            <li class="price-list__item"><a class="price-list__link" data-target="fur-coat" href="/price/fur-coat">Шубы</a></li>
                            <li class="price-list__item"><a class="price-list__link" data-target="fur" href="/price/fur">Меховые изделия</a></li>
                        </ul>
                    </div>
                    <div class="price-list__category">
                        <h6 class="price-list__category-name"><img class="price-list__category-svg" src="/images/price/car.svg">Автомобильные чехлы</h6>
                        <ul class="price-list__list hidden" data-name="car">
                            <li class="price-list__item"><a class="price-list__link" data-target="car" href="/price/car">Автомобильные чехлы</a></li>
                        </ul>
                    </div>
                    <div class="price-list__category">
                        <h6 class="price-list__category-name"><img class="price-list__category-svg" src="/images/price/bed-sheets.svg">Одеяла и пледы</h6>
                        <ul class="price-list__list hidden" data-name="blanket">
                            <li class="price-list__item"><a class="price-list__link" data-target="blanket" href="/price/blanket">Одеяла</a></li>
                            <li class="price-list__item"><a class="price-list__link" data-target="plaid" href="/price/plaid">Пледы</a></li>
                        </ul>
                    </div>
                    <div class="price-list__category">
                        <h6 class="price-list__category-name"><img class="price-list__category-svg" src="/images/price/rug.svg">Ковры</h6>
                        <ul class="price-list__list hidden" data-name="rug">
                            <li class="price-list__item"><a class="price-list__link" data-target="rug" href="/price/rug">Ковры</a></li>
                        </ul>
                    </div>
                    <div class="price-list__category">
                        <h6 class="price-list__category-name"><img class="price-list__category-svg" src="/images/price/avatar.svg">Спецодежда</h6>
                        <ul class="price-list__list hidden" data-name="spec">
                            <li class="price-list__item"><a class="price-list__link" data-target="spec" href="/price/spec">Спецодежда</a></li>
                        </ul>
                    </div>
                    <div class="price-list__category">
                        <h6 class="price-list__category-name"><img class="price-list__category-svg" src="/images/price/clean-linen-basket.svg">Белье для органицазий</h6>
                        <ul class="price-list__list hidden" data-name="basket">
                            <li class="price-list__item"><a class="price-list__link" data-target="linen" href="/price/linen">Белье для организаций</a></li>
                        </ul>
                    </div>
                </div>
                <div class="price-list__tables">
                   <jsp:doBody />
                </div>
            </div>
    </div>
</div>


@include('footer')


