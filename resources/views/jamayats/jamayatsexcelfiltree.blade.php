<x-app-layout>
    
    <div class="  rounded-lg mt-20 pl-50 flex flex-col  justify-around items-center gap-5  ">
      <div>
        <form action="{{route('jamayyats-excel-filtree')}}" method="POST" class="flex flex-row justify-between  ">
              {{ csrf_field() }}
              @method('get') 
            {{-- <a href="{{route('jamayyats-pdf')}}" class="m-10 text-slate-50 rounded-lg decoration-0 font-bold text-xl p-2 mt-6  bg-red-400 hover:bg-rose-700 ">  طباعة قائمة الجمعيات</a> --}}
            <select  name="apcs" id="apcs" class="rounded-lg m-2 " style="direction: rtl" >
              {{-- onchange = "this.form.submit()" --}}
              {{-- <option value="" > اختر البلدية</option> --}}
              <option value="allapcs" > كل البلديات</option>
              
              @foreach ($apcs as $apc )
              
                  <option value={{$apc->name}}> {{$apc->name}} </option>
              @endforeach
            </select>

            <select  name="tabe3" id="tabe3" class="rounded-lg m-2 " style="direction: rtl" >
              {{-- onchange = "this.form.submit()" --}}
              {{-- <option value="" > اختر الطابع</option> --}}
              <option value="alltabe3" >  كل الطبوع </option>
              
              @foreach ($tabe3s as $tabe3 )

              <option value={{$tabe3->name}}> {{$tabe3->name}}</option> 
              @endforeach
            </select>
            
            <select  name="wad3ia" id="wad3ia" class="rounded-lg m-2 " style="direction: rtl" >
              {{-- onchange = "this.form.submit()" --}}
              {{-- <option value="" > اختر البلدية</option> --}}
              <option value="all0and1" > نشطة وغير نشطة </option>
                  <option value="نشطة">نشطة فقط</option>              
                  <option value="غيرنشطة"> غير نشطة فقط</option>
                  <option value="ملف_قيدالمعالجة">   ملف قيد المعالجة</option>
            </select>
            <br><br>
</div>
            <div>
                <input type="date" id="selected_date1" name="selected_date1">
                <label for="selected_date1"> تاريخ تجديد من</label>
            </div>
            <div>
                <input type="date" id="selected_date2" name="selected_date2">
                <label for="selected_date2"> تاريخ تجديد إلى</label>
                
            </div>
            <h1>أو</h1>
            <div>
                <input type="date" id="selected_date3" name="selected_date3">
                <label for="selected_date3"> تاريخ تأسيس من</label>
            </div>
            <div>
                <input type="date" id="selected_date4" name="selected_date4">
                <label for="selected_date4"> تاريخ تأسيس إلى</label>
                
            </div>

          <div class="container mx-auto p-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
   
        @foreach($fields as $field)
            <label class="flex items-center justify-end space-x-2">
                                <span>{{ $fieldLabels[$field] }}</span>

            <input type="checkbox" name="fields[]" value="{{ $field }}" class="form-checkbox h-4 w-4 text-indigo-600 self-end">
              
            </label>
        @endforeach
    </div>
</div>



            <div>
                <button class="border border-green-600 bg-white hover:bg-green-600 hover:text-white transition duration-300 text-xl font-bold text-green-600 rounded-lg m-2 px-20 py-2" type="submit">حمل ملف إكسل للجمعيات المختارة</button> 

            </div>

         
           

      </form>
    

    </div>
    <div>
    </div>


  

</x-app-layout>