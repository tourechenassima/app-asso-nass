<x-app-layout>
<div>
    <h1  class="text-3xl backdrop-blur-3xl text-gray-700  font-bold text-center p-4 my-10" >  تغيير المعلومات </h1>     
</div>
<div class="container m-auto text-center  pt-15 pb-10">
  
<form action="{{route('jamayats.update',$jamaya->id,['tabe3s'=>$tabe3s,'apcs'=>$apcs])}}" method="POST">
      
      @csrf
      @method('PUT')
      <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="tasmia" value="{{$jamaya->tasmia}}"> <br>
  <div>
  <select  name="nachta" id="nachta" class="rounded-lg m-2 text-lg font-bold " style="direction: rtl" >
    <option value={{$jamaya->nachta}}>{{$jamaya->nachta}}</option> 
    <option value="نشطة">نشطة</option> 
    <option value="غيرنشطة"> غير نشطة </option> 
    <option value="ملف_قيدالمعالجة">  ملف قيد المعالجة </option> 

  </select>
</div>
<div class = "flex justify-center ">

  <select  name="hala" id="hala" class="rounded-lg m-2 hidden" style="direction: rtl" >
    <option value="" >  {{$jamaya['halat-elmilef']}}</option> 
    <option value="في انتظار رد المصالح المختصة" >  في انتظار رد المصالح المختصة</option> 
    <option value="في انتظار رأي ديوان مندوبية الأمن" >  في انتظار رأي ديوان مندوبية الأمن</option> 
    <option value="في انتظار رأي قائد كتيبة الدرك الوطني" > في انتظار رأي قائد كتيبة الدرك الوطني</option> 
    <option value="في انتظار رد مديرية الشؤون الدينية" > في انتظار رد مديرية الشؤون الدينية</option> 
    <option value="مديرية النشاطات الثقافية والفنون" >في انتظار رد مديرية النشاطات الثقافية والفنون</option> 
    <option value="في انتظار رد مديرية التربية" > في انتظار رد مديرية التربية  </option> 
    <option value="في انتظار رأي قائد كتيبة الدرك الوطني" >  في انتظار رد مديرية الفلاحة </option> 
    <option value="في انتظار رأي قائد كتيبة الدرك الوطني" >  في انتظار رد مديرية الشباب والرياضة </option> 
    <option value="مرفوض بسبب التحقيقات السلبية" >  مرفوض بسبب التحقيقات السلبية</option> 
    <option value="مرفوض  بسبب أن الأهداف غير مطابقة لطابع الجمعية وفقا للمادة 4 من القانون الأساسي للجمعيات 12-06" >مرفوض  بسبب أن الأهداف غير مطابقة لطابع الجمعية وفقا للمادة 4 من القانون الأساسي للجمعيات 12-06</option> 
    <option value="لم يرفق بمحضر معاينة أو محضر الجمعية العامة محرر من طرف محضر قضائي" >لم يرفق بمحضر معاينة أو محضر الجمعية العامة محرر من طرف محضر قضائي</option> 
    <option value="نقص البيانات في الملف"  >نقص البيانات في الملف</option> 
    <option value="نقص البيانات في الملف"  >   </option> 

  </select>
  </div>


<div dir="rtl" class="flex flex-row justify-around" >    
      <div>
        <label >تاريخ التأسيس</label>
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl " type="date" name="tarikh-tassiss" value="{{$jamaya['tarikh-tassiss']}}"  >
      </div>       
      <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad" placeholder="رقم الإعتماد" value="{{$jamaya['rakm-itimad']}}" >
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="prenom-president1" placeholder="  إسم الرئيس  " value="{{$jamaya['prenom-president1']}}"> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="nom-president1" placeholder="  لقب الرئيس  " value="{{$jamaya['nom-president1']}}"> <br>
 </div>

 <div dir="rtl" class="flex flex-row justify-around  " >    
      <div> 
        <label >تاريخ التجديد</label>
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl " type="date" name="tarikh-tajdid1" value="{{$jamaya['tarikh-tajdid1']}}" >
      </div>
      <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad1" placeholder="رقم الإعتماد" value="{{$jamaya['rakm-itimad1']}}">
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="prenom-president2" placeholder="  إسم الرئيس  " value="{{$jamaya['prenom-president2']}}"> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="nom-president2" placeholder="  لقب الرئيس  " value="{{$jamaya['nom-president2']}}"> <br>
 </div>

 <div dir="rtl" class="flex flex-row justify-around  " >    
      <div>
        <label >تاريخ التجديد</label>
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl " type="date" name="tarikh-tajdid2" value="{{$jamaya['tarikh-tajdid2']}}" >
      </div>
      <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad2" placeholder="رقم الإعتماد" value="{{$jamaya['rakm-itimad2']}}" >
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="prenom-president3" placeholder="  إسم الرئيس  " value="{{$jamaya['prenom-president3']}}"> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="nom-president3" placeholder="  لقب الرئيس  " value="{{$jamaya['nom-president3']}}"> <br>
 </div>

 <div dir="rtl" class="flex flex-row justify-around  " >    
      <div>
        <label >تاريخ التجديد</label>
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl " type="date" name="tarikh-tajdid3" value="{{$jamaya['tarikh-tajdid3']}}" >
      </div>
      <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad3" placeholder="رقم الإعتماد" value="{{$jamaya['rakm-itimad3']}}" >
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="prenom-president4" placeholder="  إسم الرئيس  " value="{{$jamaya['prenom-president4']}}"> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="nom-president4" placeholder="  لقب الرئيس  " value="{{$jamaya['nom-president4']}}"> <br>
 </div>

 <div dir="rtl" class="flex flex-row justify-around  " >    
      <div>
        <label >تاريخ التجديد</label>
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl " type="date" name="tarikh-tajdid4" value="{{$jamaya['tarikh-tajdid4']}}">
      </div> 
      <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad4" placeholder="رقم الإعتماد" value="{{$jamaya['rakm-itimad4']}}"  >
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="prenom-president5" placeholder="  إسم الرئيس  " value="{{$jamaya['prenom-president5']}}"> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="nom-president5" placeholder="  لقب الرئيس  " value="{{$jamaya['nom-president5']}}"> <br>
 </div>

 <div dir="rtl" class="flex flex-row justify-around  " >    
      <div>
        <label >تاريخ التجديد</label> 
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl " type="date" name="tarikh-tajdid5" value="{{$jamaya['tarikh-tajdid5']}}">
      </div>
      <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad5" placeholder="رقم الإعتماد" value="{{$jamaya['rakm-itimad5']}}">
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="prenom-president6" placeholder="  إسم الرئيس  " value="{{$jamaya['prenom-president6']}}"> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="nom-president6" placeholder="  لقب الرئيس  " value="{{$jamaya['nom-president6']}}"> <br>
 </div>
 <div dir="rtl" class="flex flex-row justify-around  " >    
      <div>
        <label >تاريخ التجديد</label>
        <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl " type="date" name="tarikh-tajdid6" value="{{$jamaya['tarikh-tajdid6']}}">
      </div>
      <input class="rounded-xl border-sky-200 my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="rakm-itimad6" placeholder="رقم الإعتماد" value="{{$jamaya['rakm-itimad6']}}">
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="prenom-president7" placeholder="  إسم الرئيس  " value="{{$jamaya['prenom-president7']}}"> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="nom-president7" placeholder="  لقب الرئيس  " value="{{$jamaya['nom-president7']}}"> <br>
 </div>
<div>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-1/4" type="text" name="kitaa" value="{{$jamaya['kitaa']}}"" placeholder="القطاع"> 
</div>
<br>

<div>
      <select  name="apc" id="apc" class="rounded-lg m-2 " style="direction:rtl" >
           {{-- onchange = "this.form.submit()" --}}
            <option value="{{$jamaya->baladia}}" > {{$jamaya->baladia}} </option> 
             
           @foreach ($apcs as $apcia )
            <option value="{{$apcia->name}}"> {{$apcia->name}}</option> 
           @endforeach
           {{-- <option value="شير">شير</option>              
           <option value="ثنية العابد">ثنية العابد</option>
           <option value="وادي الطاقة">وادي الطاقة</option> --}}
      </select>
      <select  name="tabe3" id="tabe3" class="rounded-lg m-2 " style="direction: rtl">
           {{-- onchange = "this.form.submit()" --}}
           <option value="{{$jamaya['tabaa']}}" >{{$jamaya['tabaa']}}</option> 
           @foreach ($tabe3s as $tabe3a)
           <option value="{{$tabe3a->name}}">{{$tabe3a->name}}</option> 
           @endforeach
      </select>
</div>
      {{-- <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="nachta" placeholder=" الوضعية  "> <br> --}}
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="adresse" value="{{$jamaya['adresse']}}"> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="tel" name="phone" value="{{$jamaya['phone']}}"> <br>
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="email" name="email" value="{{$jamaya['email']}}"> <br>
      {{-- <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="halat-elmilef" placeholder=" حالة الملف  "> <br> --}}
      <input class="rounded-xl border-sky-200   my-3 px-3 py-2 text-right text-xl w-3/4" type="text" name="description" value="{{$jamaya['description']}}"> <br>
  
    <button class="m-10 text-slate-50 rounded-lg decoration-0 font-bold text-3xl py-2 px-6 mt-6  bg-green-700  hover:bg-green-600 " type="submit">حفظ</button>
</form>
</div>


</x-app-layout>

        
       
