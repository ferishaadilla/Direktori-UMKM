<!-- x-layout : Memanggil komponen layout (ada di file resources/views/components/layout.blade.php)
di mana isi dari file index.blade.php semua dipindahkan ke layout.blade.php -->
<x-layout>
  <h1>Ini Halaman Admin</h1>
  <p>Hello {{ $username }} </p>
</x-layout>