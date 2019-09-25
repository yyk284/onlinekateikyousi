@extends('layout.app')

@section('body')
<div id="contents">

<article>
    <h2>講師の追加</h2>
    <div class="tutor_form">
    <form action="{{ url('tutors') }}" method="post">
        @csrf {{-- CSRF保護 --}}
        <div class="form-group">
            <label for="name">名前</label>
            <input id="name" type="text" class="form-control" name="name" required autofocus>
        </div>
        <div class="form-group">
            <label for="rate">指導力</label>
            <input id="rate" type="text" class="form-control" name="rate" required autofocus>
        </div>
        <div class="form-group">
            <label for="ac">大学名</label>
            <input id="ac" type="text" class="form-control" name="ac" required autofocus>
        </div>
        <div class="form-group">
            <label for="time">勤務可能時間</label>
            <input id="time" type="text" class="form-control" name="time" required autofocus>
        </div>
        <div class="form-group">
            <label for="fee">料金</label>
            <input id="fee" type="number" class="form-control" name="fee" required autofocus>
        </div>
        <div class="form-group">
            <label for="other">詳細</label>
            <textarea id="other" class="form-control" name="other" rows="50">{{$template}}</textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">追加</button>
    </form>
    </div>
</article>

</div>

@endsection

