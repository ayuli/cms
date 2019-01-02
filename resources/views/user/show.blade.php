
@foreach ($list as $v)
    {{$v->id}} : {{$v->username}} : {{$v->sex}} : {{$v->age}} <br>
@endforeach