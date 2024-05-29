@if (session()->has('success'))
    <div class="p-4 text-sm text-green-800 rounded-lg bg-green-50">{{ session('success') }}</div class="">
@endif

@if (session()->has('message'))
    <div class="p-4 text-sm text-blue-800 rounded-lg bg-blue-50">{{ session('message') }}</div class="">
@endif

@if (session()->has('error'))
    <div class="p-4 text-sm text-red-800 rounded-lg bg-red-50">{{ session('error') }}</div class="">
@endif

@if($errors->any())
<ul>
    @foreach ($errors->all() as $error)
      <li class="p-4 text-sm text-red-800 rounded-lg bg-red-50">{{ $error }}</li>  
    @endforeach
</ul>
@endif