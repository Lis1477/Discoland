
    <section>
        <div class="container">
            <div class="text-area">
                <div class="url-line">
                    <a href="#" onclick="history.back();" title="Вернуться на шаг назад">Вернуться</a> |

                    <a href="{{ asset('') }}" title="Переход на Главную страницу">Главная</a>
                    <i class="fa fa-angle-right"></i>

                    @isset($url_line_1)
                    <a href="{{ asset('') }}" title="Переход на Главную страницу">Каталог</a>
                    <i class="fa fa-angle-right"></i>
                    @else
                    <strong>Каталог</strong>
                    @endisset


                </div>
            </div>
        </div>
    </section>
