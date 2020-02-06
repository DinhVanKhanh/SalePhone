@extends('admin/index')
@section('body_ad')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    {{-- {{dd($chitietloaisp)}} --}}
                    
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th> 
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($chitietloaisp as  $key => $value)
                            <tr class="even gradeC" align="center">
                                <td>{{$key + 1}}</td>
                                <td>{{$value['tenloai']}}</td>
                                <td>Ẩn</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin_1/loaisp/xoa-loai-san-pham/{{$value['id']}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="javascript:" class="edit">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div> 
<script>

     $(document).ready(function() {
        $('.edit').click(function(event) {
            alert('sd');
        });
    });
  
</script>




@endsection