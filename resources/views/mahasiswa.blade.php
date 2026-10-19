<h1>Form Mahasiswa</h1>

<form action="/form/proses" method="POST">
   <table>
      @csrf
      <tr>
         <td>NIM</td>
         <td><input type="number" name="nim"></td>
      </tr>
      <tr>
         <td>Nama</td>
         <td><input type="text" name="nama"></td>
      </tr>
   </table>
</form>