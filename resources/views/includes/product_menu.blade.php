                <div class="main-content_katalog">
                    <div class="main-content_name-menu">
                        <a href="{{ asset('katalog') }}">Каталог</a>
                    </div>
                    <div class="main-content_category-tree">
                        <nav>
                            <ul>
                                @php $s = 0; @endphp
                                @foreach ($view_cat as $one)
                                @php $s++; @endphp
                                <li>
                                    <div class="main-content_category-tree_main-cat">
                                        <a href="{{ asset('katalog/'.$one->slug) }}" title="Переход в категорию: {{ $one->name }}">{{ $one->name }}</a>
                                        <a href="javascript: displ('s{{ $s }}')" title="Отобразить / скрыть подкатегории"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                    <ul id="s{{ $s }}" style="display:@if((isset($cat_slug) AND $cat_slug != $one->slug) OR (isset($sub_cat_slug) AND $parent_id != $one->id)) none @else block @endif">
                                        @foreach($one->categories()->orderBy('order')->get() as $two)
                                        <li class="main-content_category-tree_child @if(isset($sub_cat_slug) && $two->slug == $sub_cat_slug) selected @endif">
                                            <a href="{{ asset('katalog/'.$two->slug) }}" title="Переход в подкатегорию: {{ $two->name }}">{{ $two->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
@section('scripts')
    @parent
<!-- Для отображения подкатегорий в меню товаров -->
<script type="text/javascript">

@php $s = 0; @endphp
@foreach ($view_cat as $one)
@php $s++; @endphp
    function displ(s{{ $s }}) {
        if(document.getElementById(s{{ $s }}).style.display == 'block') {
            document.getElementById(s{{ $s }}).style.display = 'none';
        } else {
            document.getElementById(s{{ $s }}).style.display = 'block';
        }
    } 
@endforeach

</script>
@endsection

