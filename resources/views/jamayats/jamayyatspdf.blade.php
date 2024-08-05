<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink&family=Cairo&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<style>
  @media print{
    #print-button{
      display:none;
    }
  }
</style>
  <x-app-layout>
    <div class="p-20 bg-gray-500 shadow-md  ">
    <div class="p-5 border-gray-700 shadow-md  bg-gray-500">

    <div id="print"  class=" flex flex-col justify-center items-center   border border-gray-700 font-bold  bg-white p-0 "  >
        <h1 class="flex flex-col justify-center   items-center text-2xl font-bold  bg-white p-5 m-5">الجمهورية الجزائرية الديمقراطية الشعبية </h1>

        <div  class=" flex flex-col justify-center items-end text-xl font-bold p-0 w-full mr-60 mt-100   "  >
            <h2 >ولاية: باتنة</h2>
            <h2>دائرة: ثنية العابد</h2>
        </div>
        <h2 class="flex flex-col justify-center   items-center text-2xl font-bold  bg-white p-0 m-0">قائمة الجمعيات </h2>

        <table  dir="rtl" class="m-20 p-20 mt-10 table-auto text-sm border border-slate-50 rounded-md" style="font-family: 'Noto Naskh Arabic', serif;">
       
        <thead >
          <tr class=" bg-white shadow-xl  text-lg bg-gray-50">
            <th class="text-right py-2 px-2 w-12"> الرقم</th>
            <th class="text-right py-2 px-2 w-96 "> تسمية الجمعية</th>
            <th class="text-right py-2 px-2 w-60"> تاريخ التأسيس</th>
            <th class="text-right py-2 px-2 w-44"> الطابع</th>
            <th class="text-right py-2 px-2 w-44"> القطاع</th>
            <th class="text-right py-2 px-2 w-44"> الوضعية</th>
            <th class="text-right py-2 px-2 w-96"> العنوان</th>
            <th class="text-right py-2 px-2 w-40"> الهاتف</th>
            <th class="text-right py-2 px-2 w-60"> البلدية</th>
            <th class="text-right py-2 px-2 w-76"> الإيميل</th>
            <th class="text-right py-2 px-2 w-76"> </th>
          </tr>
        </thead>
        <tbody class="relative bg-white" >
         
        @foreach($jamayats as $jamaya)
          <tr class="border border-b-2 " >
            
            <td class=" text-right py-4 px-2  w-12">{{$jamaya['id']}} 
            <td class=" text-right py-4 px-2  w-96"><a href="{{route('jamayats.show',$jamaya['id'])}}">{{$jamaya['tasmia']}}</a> </td>
            <td class=" text-right py-4 px-2  w-60"> {{$jamaya['tarikh-tassiss']}}</td>
            <td class=" text-right py-4 px-2  w-44"> {{$jamaya['tabaa']}}</td>
            <td class=" text-right py-4 px-2  w-44"> {{$jamaya['kitaa']}}</td>
            <td class=" text-right py-4 px-2  w-44"> {{$jamaya['nachta']}}</td>
            <td class=" text-right py-4 px-2  w-96">{{$jamaya['adresse']}}</td>
            <td class=" text-right py-4 px-2  w-40"> {{$jamaya['phone']}}</td>
            <td class=" text-right py-4 px-2  w-60"> {{$jamaya['baladia']}}</td>
            <td class=" text-right py-4 px-2  w-76"> {{$jamaya['email']}}</td>
            <td class=" flex flex-row space-x-1"> 
              </td>
    
          </tr>
          @endforeach
          <!-- More rows... -->
         </tbody>
      </table>
    </div>  
    <div>
      <button class="mx-auto bg-red-400 p-3 text-white text-xl font-bold rounded-md" id="print_button" onclick="printDiv()">طباعة</button> 


   

    </div>
      </div>
    </div>
     
 <script >
  function printDiv(){
    let printContent = document.getElementById('print').innerHTML;
    let originalContent = document.body.innerHTML;
    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = originalContent;
    location.reload();
  }
</script>   
    



</x-app-layout>