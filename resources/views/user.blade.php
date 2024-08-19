<h1>User Data</h1>


@foreach ($data as $user => $value)
    <h2>Name:  {{ $value->name }} </h2>
    <h2>Email:  {{ $value->email }} </h2>
    <h2>Age:  {{ $value->age }} </h2>
    <h2>City:  {{ $value->city }} </h2>
@endforeach