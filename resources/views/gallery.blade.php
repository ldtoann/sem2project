@extends('master')

@section('title', 'Gallery')

@section('content')
<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li id="linenext" class="breadcrumb-item"><a href="_home1.php">HOME</a></li>
            <li id="linenext" class="breadcrumb-item active" aria-current="page">GALLERY</li>
        </ol>
    </nav>
    <div id="feedback">
        <div id="itemfeedback">
            <img id="imagefeedback" src="https://resources.smatestore.com/photobook/63e39d2267944505eadc41e8/photo/0/U3EoBJrVyTo2mW9GVB.jpg" alt="">
            <div id="inforuser">
                <img id="avatauser" src="https://resources.smatestore.com/photobook/63e39d2267944505eadc41e8/photo/0/U3EoBJrVyTo2mW9GVB.jpg" alt="">
                <div id="contentuser">
                    <p id="contentname">leduytoan</p>
                    <p id="feedbackuser">quadep</p>
                    <p id="feedbackuser">17-7-2023</p>
                </div>
            </div>
        </div>
        <div id="itemfeedback">
            <img id="imagefeedback" src="https://resources.smatestore.com/photobook/63e39d2267944505eadc41e8/photo/0/U3EoBJrVyTo2mW9GVB.jpg" alt="">
            <div id="inforuser">
                <img id="avatauser" src="https://resources.smatestore.com/photobook/63e39d2267944505eadc41e8/photo/0/U3EoBJrVyTo2mW9GVB.jpg" alt="">
                <div id="contentuser">
                    <p id="contentname">leduytoan</p>
                    <p id="feedbackuser">quadep</p>
                    <p id="feedbackuser">17-7-2023</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection