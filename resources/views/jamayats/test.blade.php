<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink&family=Cairo&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <style>
   
  </style>
</head>

<body  >
  

 <div  class="container mx-auto flex flex-col justify-center items-center mt-40 ">
    <div class=" flex justify-center items-center  border border-gray-100 font-bold text-xl overflow-x-auto  rounded-lg shadow-2xl">
    <table dir="rtl" class=" table-auto h-full w-full">
    
    <thead>
      <tr class="bg-gray-100 shadow-xl flex flex-row">
        
        <th class="text-right py-4  w-12"> الرقم</th>
        <th class="text-right py-4  w-96 "> تسمية الجمعية</th>
        <th class="text-right py-4  w-76"> الإيميل</th>
        <th class="text-right py-4  w-40"> رقم الإعتماد</th>
        <th class="text-right py-4  w-60"> تاريخ التأسيس</th>
        <th class="text-right py-4  w-44"> الطابع</th>
        <th class="text-right py-4  w-44"> القطاع</th>
        <th class="text-right py-4  w-60"> إسم الرئيس</th>
        <th class="text-right py-4  w-60"> لقب الرئيس</th>
        <th class="text-right py-4  w-44"> الوضعية</th>
        <th class="text-right py-4  w-96"> العنوان</th>
        <th class="text-right py-4  w-40"> الهاتف</th>
        <th class="text-right py-4  w-60"> البلدية</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach($jamayats as $jamaya)
      <tr class="shadow-xl shadow-slate-50 flex flex-row ">
        
        <td class="text-right py-4  w-12">{{$jamaya['id']}} 
        <td class="text-right py-4  w-96"> {{$jamaya['tasmia']}}</td>
        <td class="text-right py-4  w-76"> {{$jamaya['email']}}</td>
        <td class="text-right py-4  w-40"> {{$jamaya['rakm-itimad']}}</td>
        <td class="text-right py-4  w-60"> {{$jamaya['tarikh-tassiss']}}</td>
        <td class="text-right py-4  w-44"> {{$jamaya['tabaa']}}</td>
        <td class="text-right py-4  w-44"> {{$jamaya['kitaa']}}</td>
        <td class="text-right py-4  w-60"> {{$jamaya['nom-president']}}</td>
        <td class="text-right py-4  w-60"> {{$jamaya['prenom-president']}}</td>
        <td class="text-right py-4  w-44"> {{$jamaya['nachta']}}</td>
        <td class="text-right py-4  w-96">{{$jamaya['adresse']}}</td>
        <td class="text-right py-4  w-40"> {{$jamaya['phone']}}</td>
        <td class="text-right py-4  w-60"> {{$jamaya['baladia']}}</td>
        
      </tr>
      @endforeach
      <!-- More rows... -->
     </tbody>
  </table>

    
  </div>
</div>

</body>

</html>
