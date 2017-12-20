@extends('home.layouts.master')
@section('title', '首页')

@section('css')
    <style>
        .page { width:100%;background:#F0F0F0 url('{{ url('img/dian2.png') }}') repeat-x; }
    </style>
@endsection

@section('body')
    <div class="box">

        <ul class="event_year">

            <li class="current">
                <label for="2017">2017</label>
            </li>
        </ul>

        <ul class="event_list">
            <div>
                <h3 id="2017">2017</h3>
                <li>
                    <span>12月20日</span>
                    <p><span>初始化完成</span></p>
                </li>
            </div>

        </ul>
        <div class="clearfix"></div>
    </div>
@endsection
@section('js')
    <script>

        $(function(){

            $('label').click(function(){

                $('.event_year>li').removeClass('current');

                $(this).parent('li').addClass('current');

                var year = $(this).attr('for');

                $('#'+year).parent().prevAll('div').slideUp(800);

                $('#'+year).parent().slideDown(800).nextAll('div').slideDown(800);

            });

        });

    </script>
@endsection