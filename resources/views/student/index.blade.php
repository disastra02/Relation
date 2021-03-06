@extends('layout.main')
<main>
    <div class="card card-cascade narrower">
        <!-- Card image -->
        <div class="view view-cascade gradient-card-header mdb-color lighten-3">
            <h5 class="mb-0 font-weight-bold">Data Jurusan</h5>
        </div>
        <!-- Card image -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card-body">
                    <table class="table table-hover  container" style="background-color: white ; width:50%">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <th scope="row">{{$item->jurusan}}</th>
                                <td><a href="/jurusan/{{ $item->id }}/detail" class="btn btn-primary"> Detail Siswa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>