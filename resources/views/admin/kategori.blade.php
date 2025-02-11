@extends("layout.appadmin")

@section("content")
        <div class="row">
            <div class="col-6">
            <h2>Input Kategori </h2>
                <form method="post" action="{{route('admin.storekategori')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label"> Nama Kategori </label>
                        <input type="text" class="form-control" name="nama" >
                    </div>
                    <div class="mb-3">
                        <label for="sinopsis">deskripsi</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Leave a comment here" id="" for="sinopsis"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Input Data Buku" class="btn btn-primary" name="btnInputBukuGambar">
                    </div>
                </form>

                @if (session('error'))
                    {{session('error')}}
                @endif

                @if(session('success'))
                    {{session('success')}}
                @endif
            </div>
        </div>

                    <table class="table">
                      <tr>
                        <td>#</td>
                        <td>Nama</td>
                        <td colspan=2>Menu</td>
                      </tr>
                      @forelse ( $kat as $k )
                          <tr>
                        <td>{{ $k->id }}</td>
                      <td>{{ $k->nama }}</td>
                        <td>Edit</td>
                      <td>Delete</td>
                          </tr>
                        @empty
                          <tr>
                            <td>
                                Data Kosong
                            </td>
                        </tr>
                      @endforelse

                    </table>

@endsection




