
<x-app-layout>
<h1  class=" text-3xl backdrop-blur-3xl bg-green/30 text-white bg-slate-400  font-bold text-center p-4 mb-3" >   معلومات الجمعية </h1>     

<h5 class="my-6 text-sm text-gray-600">آخر تحديث بتاريخ
          <span class="py-2 px-3 font-bold text-orange-600 ">{{date('d-m-Y H:i:s',strtotime($jamaya->updated_at))}}</span>
          من طرف
          <span class="py-2 px-3 font-bold text-orange-600 ">{{$jamaya->user->name}}</span>
       </h5>
<div class=" flex flex-col justify-center items-center p-12 mt-20 border border-slate-100 font-bold  overflow-auto  rounded-lg shadow-2xl h-auto w-auto max-h-10/12  ">
       
        {{-- <h1>{{$jamaya->id}}</h1> --}}
        <h1 class="text-2xl font-bold ">{{$jamaya->tasmia}}</h1>
        <br>
        <h1>{{$jamaya->adresse}}</h1>
        <h1>{{$jamaya['nachta']}}</h1>

        

        <h1>{{$jamaya['halat-elmilef']}}</h1>
        
        <div class="flex flex-row m-3 ">
          <a href="#" class=" text-slate-50 rounded-lg decoration-0 font-bold text-xl p-2 m-3  bg-green-600">تجديد</a>
          <a href="{{route('jamayats.edit',$jamaya->id)}}" class="text-slate-50 rounded-lg decoration-0 font-bold text-xl p-2  m-3 bg-slate-400">تغيير معلومات</a>
 

          <form action="{{route('jamayats.destroy',$jamaya->id)}}" method="post">
            @csrf
            @method('delete')
                <button type="submit"   class="text-slate-50 rounded-lg decoration-0 font-bold text-xl p-2  m-3 bg-red-600""> حذف </button>
          </form>





        </div>
        
</div>
<x-my-button>
  Algeria
</x-my-button>
      </x-app-layout>