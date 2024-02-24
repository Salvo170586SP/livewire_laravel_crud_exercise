<div>
    @if(session()->has('message'))
    <div class="p-4 mb-4 text-sm w-full  mx-auto text-green-800 rounded-lg bg-green-50">
        <span>{{session('message')}}</span>
    </div>
    @endif
</div>