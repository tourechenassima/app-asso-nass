<x-app-layout>
    <div>
      <h1  class=" text-3xl backdrop-blur-3xl text-gray-700  font-bold text-center p-4 my-10   " >     إضافة بلدية  </h1>     
    </div>
    <div class="container m-auto text-center  pt-15 pb-10 ">
      
      <form action="{{route('apcs.store')}}" method="POST" >
        
        @csrf
        
         <div >
              
              <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="nameapc" >
              <label > تسمية البلدية</label>
              
         </div>

         <button class="m-10 text-slate-50 rounded-lg decoration-0 font-bold text-lg px-2 mt-6  bg-red-400  hover:bg-rose-700 " type="submit">إضافة</button>
      </form>
    </div>
  
  </x-app-layout>
  
          