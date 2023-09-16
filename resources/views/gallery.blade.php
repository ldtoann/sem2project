@extends('master')

@section('title', @trans('font.GALLERY.index.title'))

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="{{ route('home.index') }}">{{@trans('font.home.index.title')}}</a></li>
            <li id="linenext" class="breadcrumb-item active" aria-current="page">{{@trans('font.GALLERY.index.title')}}</li>
        </ol>
    </nav>
    <div id="feedback">
        <div id="itemfeedback">
            <img id="imagefeedback" src="https://resources.smatestore.com/photobook/63e38c4067944505eadc41c9/photo/0/hle9XFHA6SvNpPgima.jpg" alt="">
            <div id="inforuser">
                <img id="avatauser" src="http://localhost:8000/storage/15/avademo.jpg" alt="" style="object-fit: cover;">
                <div id="contentuser">
                    <p id="contentname">Le Duy Toan</p>
                    <p id="feedbackuser">quadep</p>
                    <p id="feedbackuser">17-7-2023</p>
                </div>
            </div>
        </div>
        <div id="itemfeedback">
            <img id="imagefeedback" src="https://resources.smatestore.com/photobook/63e39d2267944505eadc41e8/photo/0/U3EoBJrVyTo2mW9GVB.jpg" alt="">
            <div id="inforuser">
                <img id="avatauser" src="http://localhost:8000/storage/17/335133841_753432896340726_7692586069310259908_n.jpg" alt="" style="object-fit: cover;">
                <div id="contentuser">
                    <p id="contentname">Vu Van Du</p>
                    <p id="feedbackuser">giày êm</p>
                    <p id="feedbackuser">17-7-2023</p>
                </div>
            </div>
        </div>
        <div id="itemfeedback">
            <img id="imagefeedback" src="https://resources.smatestore.com/photobook/63e38d3367944505eadc41ca/photo/0/XPIvf4ipElHQvTFIaW.jpg" alt="">
            <div id="inforuser">
                <img id="avatauser" src="http://localhost:8000/storage/27/anhhuu.jpg" alt="" style="object-fit: cover;">
                <div id="contentuser">
                    <p id="contentname">Ho Thien Huu</p>
                    <p id="feedbackuser">giày êm</p>
                    <p id="feedbackuser">17-7-2023</p>
                </div>
            </div>
        </div>
        <div id="itemfeedback">
            <img id="imagefeedback" src="https://resources.smatestore.com/photobook/5fddbf2d9d8b611f3cb647a5/photo/0/IBy1S0vXmbuLuqTSeZ.jpg" alt="">
            <div id="inforuser">
                <img id="avatauser" src="http://localhost:8000/storage/123/a8aaeede-8544-4d25-a485-233100c8f156.png" alt="" style="object-fit: cover;">
                <div id="contentuser">
                    <p id="contentname">Tran Thi Huong Mo</p>
                    <p id="feedbackuser">giày xinh quá ạ</p>
                    <p id="feedbackuser">17-7-2023</p>
                </div>
            </div>
        </div>
        <div id="itemfeedback">
            <img id="imagefeedback" src="https://resources.smatestore.com/photobook/6331942af33f490d585717a5/photo/0/RblC3LTCf4Z6cu0TiS.jpg" alt="">
            <div id="inforuser">
                <img id="avatauser" src="http://localhost:8000/storage/28/thaybinh.jpg" alt="" style="object-fit: cover;">
                <div id="contentuser">
                    <p id="contentname">Tran Thanh Binh</p>
                    <p id="feedbackuser">giày êm</p>
                    <p id="feedbackuser">17-7-2023</p>
                </div>
            </div>
        </div>
        <div id="itemfeedback">
            <img id="imagefeedback" src="https://resources.smatestore.com/photobook/5fe0a1ec686c6bc6db796a05/photo/0/ahzMzPrTKx3PLlIc1B.jpg" alt="">
            <div id="inforuser">
                <img id="avatauser" src="http://localhost:8000/storage/15/avademo.jpg" alt="" style="object-fit: cover;">
                <div id="contentuser">
                    <p id="contentname">Le Duy Toan</p>
                    <p id="feedbackuser">giày xinh quá ạ</p>
                    <p id="feedbackuser">17-7-2023</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection