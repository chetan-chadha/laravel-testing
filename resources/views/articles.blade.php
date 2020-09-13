@extends('layout')

@section('content')
    <section id="one" class="wrapper style2">
        <div class="inner">
            <div class="grid-style">
                @foreach ($article as $item)
                    <div>
                        <div class="box">
                            <div class="image fit">
                                <img src="/images/pic03.jpg" alt="" />
                            </div>
                            <div class="content">
                                <header class="align-center">
                                    <a href="/articles/{{ $item->id }}">
                                        <h2>{{ $item->title }}</h2>
                                    </a>
                                </header>
                                <?php
                                    dd($item->author);
                                ?>
                                {{-- <p> {{ $item->author->name }}</p> --}}
                                <p> {{ $item->body }}</p>
                                <footer class="align-center">
                                    <a href="#" class="button alt">Learn More</a>
                                </footer>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
