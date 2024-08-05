
    <form action="{{url('importExcelFile')}}" method="POST" enctype = "multipart/form-data">

    @csrf
    

    <input type="file" name = "import-file">
    <button type = "submit">Import</button>

    </form>
    
