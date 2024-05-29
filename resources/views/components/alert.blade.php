@if (session()->has('success'))
    <div class="">{{ session('success') }}</div class="">
@endif

@if (session()->has('message'))
    <div class="">{{ session('message') }}</div class="">
@endif

@if (session()->has('error'))
    <div class="">{{ session('error') }}</div class="">
@endif

@if($errors->any())
<ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>  
    @endforeach
</ul>
@endif