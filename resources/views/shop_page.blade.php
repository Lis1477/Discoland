@extends('layouts.base')

@section('content')

@include ('includes.url_line')

    <article>
    	<div class="container">
    		<div class="text-area">

                @include ('includes.product_menu')

    			<h1>Интернет-магазин Дисколэнд</h1>
    			<p>Здравствуйте дорогие друзья!</p>
    			<p>Рад приветствовать вас на моем сайте. Меня зовут Александр.</p>
    			<p class="color-text">Что я продаю?</p>
    			<h2><a href="#">Виниловые пластинки.</a></h2>
    			<p>Предлагаемые здесь <em>виниловые пластинки</em> - это высококачественный продукт, произведенный на лучших заводах Европы, Америки и, конечно же, России. Все <em>пластинки</em> новые, запечатаны. Как правило, это издания последних лет или переиздания, изготовленные недавно.</p>
    			<p>В ассортименте музыка выдающихся мировых исполнителей, работающих в различных жанрах. Переходите по ссылкам Каталога, выбирайте и заказывайте.</p>
    			<p><em> Виниловые диски</em>, представленные в интернет-магазине - капелька в море мировой музыкальной индустрии! Поэтому, я рекомендую подписаться на рассылку музыкальных каталогов, воспользовавшись соответствующей кнопочкой, расположенной ниже.</p>
    			<h2><a href="#">Компакт-диски формата CD.</a></h2>
    			<p><em>CD диски</em> - очень популярны среди любителей качественной музыки. Тем более, что в торговой сети все труднее найти  <em>компакт диски формата CD</em> с достойным качеством звука. Повальное использование в музыке MP3 формата вконец обесценили музыку вообще. В моем <em>музыкальном интернет-магазине</em> можно заказать и <em>купить лицензионные диски CD</em> российского производства и <em>фирменные CD диски</em> из Европы и США. Если Вы не нашли интересуемый диск на сайте, это не значит, что компакт-диска нет. Вы можете заказать любимого исполнителя из огромного ассортимента  наименований из каталогов. Подпишитесь на рассылку каталогов, используя кнопочку, размещенную чуть ниже.</p>
    			<p>Кроме основных каталогов на <em>виниловые пластинки</em> и <em>cd диски</em>, а также <em>музыкальные dvd</em> и <em>bluray</em>, Вы будете получать акционные предложения со скидкой до 50%! Не упускайте возможность получать <em>высококачественные музыкальные диски</em> по лучшей цене!</p>
    			<p class="color-text">Желаю приятных музыкальных приобретений!</p>
    		</div>
    	</div>
    </article>

	<section>
        <div class="container">
            <div class="new-product-area text-area">
                <h2>Последние поступления</h2>

                <h3>Виниловые пластинки</h3>
				<div class="new-products">
                    @foreach ($new_vinyl as $one)
                        @include ('includes.new_product')
                    @endforeach
				</div>

                <h3>CD диски</h3>
                <div class="new-products">
                    @foreach ($new_cd as $one)
                        @include ('includes.new_product')
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <!-- Секция новых продуктов -->






@endsection