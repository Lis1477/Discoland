    <section>
        <div class="container">
            <div class="text-area">
                <nav>
                        @foreach ($view_cat as $one)
                            <li class="dropdown-item">
                                <a href="{{ asset('katalog/'.$one->slug) }}">{{ $one->name }}</a>
                                @foreach($one->categories()->orderBy('order')->get() as $two)
                                    <li class="dropdown-item">
                                        <a class="sub-item" href="{{ asset('katalog/'.$two->slug) }}"> - {{ $two->name }}</a>
                                    </li>
                                @endforeach
                            </li>
                        @endforeach
                    
                </nav>
            </div>
        </div>
    </section>
