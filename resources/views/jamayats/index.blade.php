  <x-app-layout>

    <style>
      .mountahia{
        background-color: pink;
      }
    </style>

      <div class="  rounded-lg mt-20 pl-50 flex flex-row justify-around">
        <div>
          <a href="{{route('jamayats.create',['tabe3s'=>$tabe3s,'apcs'=>$apcs])}}" class="my-10 text-slate-50 hover:text-slate-800 rounded-lg decoration-0 font-bold text-xl px-3 ml-8   bg-slate-500  hover:bg-slate-300 transition duration-150"> إدخال جمعية جديدة</a>
          <a href="{{route('imprimerjamayatsfiltrees')}}" class="my-10 text-slate-50 hover:text-slate-800 rounded-lg decoration-0 font-bold text-xl px-3 mt-6  bg-red-700 hover:bg-red-200 transition duration-150 ">  طباعة قائمة الجمعيات</a>
          <a href="{{route('imprimerjamayatsfiltreesexcel')}}" class="my-10 text-slate-50 hover:text-slate-800 rounded-lg decoration-0 font-bold text-xl px-3 mt-6  bg-green-700 hover:bg-green-200 transition duration-150 ">  قوائم إكسل مخصصة </a>

          <!-- <a  href="{{route('jamayats.export')}}" class="m-10 text-slate-50 rounded-lg decoration-0 font-bold text-xl px-3 mt-6  bg-green-600 hover:bg-green-500 transition duration-150" >Excel</a>  -->

        </div>
        <div>
          <form action="{{route('filtreapcs')}}" method="POST" class="flex flex-row justify-between">
             {{ csrf_field() }}
              @method('get')
            <select  name="apc" id="apc" class="rounded-lg m-2 " style="direction: rtl" >
              {{-- onchange = "this.form.submit()" --}}
              {{-- <option value="" > اختر البلدية</option> --}}
              <option value="allapcs" > كل البلديات</option>
              @foreach ($apcs as $apc )
              <option value={{$apc->name}}> {{$apc->name}} </option>
              @endforeach
              {{-- <option value="شير">شير</option>
              <option value="ثنية العابد">ثنية العابد</option>
              <option value="وادي الطاقة">وادي الطاقة</option> --}}
            </select>
            <select  name="tabe3" id="tabe3" class="rounded-lg m-2 " style="direction: rtl" >
              {{-- onchange = "this.form.submit()" --}}
              {{-- <option value="" > اختر الطابع</option> --}}
              <option value="alltabe3" >  كل الطبوع </option>
              @foreach ($tabe3s as $tabe3 )
                  <option value={{$tabe3->name}}> {{$tabe3->name}}</option>
              @endforeach
            </select>
            <select  name="wad3ia" id="wad3ia" class="rounded-lg m-2 " style="direction: rtl"  >
              {{-- onchange = "this.form.submit()" --}}
              {{-- <option value="" > اختر البلدية</option> --}}
              <option value="all0and1" > نشطة وغير نشطة </option>
              <option value="نشطة">نشطة فقط</option>
              <option value="غيرنشطة"> غير نشطة فقط</option>
              <option value="ملف_قيدالمعالجة">   ملف قيد المعالجة</option>
              
            </select>
            <br><br>
            <button class="border border-blue-600 bg-gray-100 rounded-lg m-2 p-2 " type="submit">تخصيص</button>
          </form>
        </div>
      </div>
      <div>
      </div>
      <div class=" flex flex-col justify-center items-center mt-10 pt-0  border border-slate-100 font-bold  overflow-auto  rounded-lg shadow-sm h-auto w-auto max-h-10/12  ">
      <table id="mytable"  dir="rtl" class=" table-auto text-sm " style="font-family: 'Scheherazade New', serif;">
      <thead >
        <tr class=" shadow-gray-50 shadow-sm bg-gray-50   text-lg        ">
          <th class="  text-right py-4 px-2  w-12"> الرقم</th>
          <th class=" text-right py-4 px-2  w-96 "> تسمية الجمعية</th>
          {{-- <th class=" text-right py-4 px-2  w-40"> رقم الإعتماد</th> --}}
          <th class=" text-right py-4 px-2  w-60"> تاريخ آخر تجديد</th>
          <th class=" text-right py-4 px-2  w-60"> تاريخ التأسيس</th>
          <th class=" text-right py-4 px-2  w-44"> الطابع</th>
          <th class=" text-right py-4 px-2  w-44"> القطاع</th>
          <th class=" text-right py-4 px-2  w-44"> الوضعية</th>
          <th class=" text-right py-4 px-2  w-96"> العنوان</th>
          <th class=" text-right py-4 px-2  w-40"> الهاتف</th>
          <th class=" text-right py-4 px-2  w-60"> البلدية</th>
          <th class=" text-right py-4 px-2  w-76"> الإيميل</th>
          <th class=" text-right py-4 px-2  w-76"> </th>
        </tr>
      </thead>
      <tbody class="relative " >
        
      @foreach($jamayats as $jamaya)
        <tr class=" {{ \Carbon\Carbon::parse($jamaya['akherTarikhTajdid'])->addYears(3) < \Carbon\Carbon::now()->format('Y-m-d') ? 'bg-red-100 border':''}}" class="shadow-sm hover:bg-gray-100 transition duration-150 "  >
          <td class=" text-right py-4 px-2  w-12"><a href="{{route('jamayats.show',$jamaya['id'])}}">{{$jamaya['id']}}</a> </td>
          <td class="  text-right py-4 px-2  w-96 cursor-pointer text-green-700 font-bold text-lg ">
            <a href="{{route('jamayats.show',$jamaya['id'])}}">{{$jamaya['tasmia']}}</a>
          </td>
          {{-- <td class=" text-right py-4 px-2  w-40"><a href="{{route('jamayats.show',$jamaya['id'])}}"> {{$jamaya['rakm-itimad']}}</a></td> --}}
          <td class=" text-right py-4 px-2  w-60"><a href="{{route('jamayats.show',$jamaya['id'])}}"> {{$jamaya['akherTarikhTajdid']}}</a></td>
          <td class=" text-right py-4 px-2  w-60"><a href="{{route('jamayats.show',$jamaya['id'])}}"> {{$jamaya['tarikh-tassiss']}}</a></td>

          <td class=" text-right py-4 px-2  w-44"><a href="{{route('jamayats.show',$jamaya['id'])}}"> {{$jamaya['tabaa']}}</a></td>
          <td class=" text-right py-4 px-2  w-44"><a href="{{route('jamayats.show',$jamaya['id'])}}"> {{$jamaya['kitaa']}}</a></td>
          <td class=" text-right py-4 px-2  w-44"><a href="{{route('jamayats.show',$jamaya['id'])}}"> {{$jamaya['nachta']}}</a></td>
          <td class=" text-right py-4 px-2  w-96"><a href="{{route('jamayats.show',$jamaya['id'])}}">{{$jamaya['adresse']}}</a></td>
          <td class=" text-right py-4 px-2  w-40"><a href="{{route('jamayats.show',$jamaya['id'])}}"> {{$jamaya['phone']}}</a></td>
          <td  class=" text-right py-4 px-2  w-60"><a id="mybaladia" href="{{route('jamayats.show',$jamaya['id'])}}">{{$jamaya['baladia']}}</a></td>
          <td class=" flex flex-row items-center justify-between text-right py-4 px-2  w-76">
            <a href="{{route('jamayats.show',$jamaya['id'])}}">{{$jamaya['email']}}</a>
            <a href="{{route('jamayats.show',$jamaya['id'])}}" class="cursor-pointer m-10 text-slate-50 rounded-lg decoration-0 font-bold text-xl px-3 mt-6  bg-red-700  hover:bg-rose-500 transition duration-150">إظهار</a>
          </td>
          {{-- <td class=" flex flex-row space-x-1"> <a href="{{route('jamayats.show',$jamaya['id'],['tabe3s'=>$tabe3s,'apcs'=>$apcs])}}">             </a></td> --}}
        </tr>
       @endforeach
        <!-- More rows... -->

        <script>

        // const mytable = document.querySelector("#mytable");

        // const mybaladia = document.querySelector("#mybaladia");

        // const myrow = document.querySelector("#myrow");


        // if (mybaladia.innerHTML=='وادي الطاقة') {
        //     console.log(mybaladia.innerHTML);
        //     myrow.style.backgroundColor = "pink";

        // }
   

      
   

           

         //  rows[1].classList.add('mountahia');

        </script>
      </tbody>
    </table>
    </div>
  <br><br>

   
  </x-app-layout>