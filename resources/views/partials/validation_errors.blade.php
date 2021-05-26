@if($errors->any())
    <ul class="list-group">
        @foreach($errors->all() as $error)
        <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-danger">
            {{$error}}
            <span class="badge badge-light badge-pill">?</span>
        </li>
        @endforeach
    </ul>
@endif