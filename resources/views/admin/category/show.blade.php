@extends(layouts . admin)

@section
<h1>{{ categoria->name }}</h1>
<i class="{{ $categoria->icon }}"></i>
@endsection
